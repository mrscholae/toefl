<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Admin_model");
        $this->load->model("Soal_model");
        // if(!$this->session->userdata('id_admin')) {
        //     redirect("auth");
        // }
        ini_set('xdebug.var_display_max_depth', '10');
        ini_set('xdebug.var_display_max_children', '256');
        ini_set('xdebug.var_display_max_data', '1024');
    }
    
    public function id($id_tes){
        $data['title'] = "TES TOEFL";

        $soal = $this->Admin_model->get_one("tes", ["md5(id_tes)" => $id_tes]);
        
        $data['tes'] = $soal;

        $data['id'] = $id_tes;

        if($soal['tipe_soal'] == 1){
            $data['listening'] = $this->Soal_model->get_soal_listeningv1();
            $data['structure'] = $this->Soal_model->get_soal_structurev1();
            $data['reading'] = $this->Soal_model->get_soal_readingv1();
        } else if($soal['tipe_soal'] == 2){
            $data['listening'] = $this->Soal_model->get_soal_listeningv2();
            $data['structure'] = $this->Soal_model->get_soal_structurev2();
            $data['reading'] = $this->Soal_model->get_soal_readingv2();
        }

        $this->load->view("pages/layout/header-user", $data);
        $this->load->view("pages/soal/soal-toefl", $data);
        $this->load->view("pages/layout/footer-user");
    }

    // public function index(){
    //     $data['title'] = "TES TOEFL";

    //     $data['listening'] = $this->Soal_model->get_soal_listeningv1();
    //     $data['structure'] = $this->Soal_model->get_soal_structurev1();
    //     $data['reading'] = $this->Soal_model->get_soal_readingv1();

    //     $this->load->view("pages/layout/header-user", $data);
    //     $this->load->view("pages/soal/soal-toefl", $data);
    //     $this->load->view("pages/layout/footer-user");
    // }

    // public function respon(){
    //     $data['title'] = "Jawaban Peserta";

    //     $respon = $this->Admin_model->get_all("respon");
    //     $data['respon'] = [];
    //     foreach ($respon as $i => $respon) {
    //         $data['respon'][$i] = $respon;
    //         $jawaban = explode("###", $respon['text']);
    //         $data['respon'][$i]['text'] = $jawaban;
    //     }

    //     $this->load->view("pages/soal/respon", $data);
    // }

    // public function respon_toefl(){
    //     $data['title'] = "Jawaban Peserta";

    //     $respon = $this->Admin_model->get_all("respon_toefl");
    //     $data['respon'] = [];
    //     foreach ($respon as $i => $respon) {
    //         $data['respon'][$i] = $respon;
    //         $jawaban = explode("###", $respon['text']);
    //         $data['respon'][$i]['text'] = $jawaban;
    //     }

    //     $this->load->view("pages/soal/respon_toefl", $data);
    // }

    public function email_check(){
        $id_tes = $this->input->post("id");
        $email = $this->input->post("email");
        $data = $this->Admin_model->get_one("peserta_toefl", ["email" => $email, 'md5(id_tes)' => $id_tes]);
        if($data) {
            echo json_encode($data['email']);
        } else {
            echo json_encode("");
        }
    }

    public function password_check(){
        $id_tes = $this->input->post("id");
        $password = $this->input->post("password");
        $data = $this->Admin_model->get_one("tes", ["password" => $password, "md5(id_tes)" => $id_tes]);
        if($data) {
            echo json_encode($data['id_tes']);
        } else {
            echo json_encode("");
        }
    }

    public function add_jawaban(){
        $nama = $this->input->post("nama");

        if($nama != ""){

            $id_tes = $this->input->post("id_tes");
            $tes = $this->Admin_model->get_one("tes", ["md5(id_tes)" => $id_tes]);
    
            if($tes['tipe_soal'] == 1){
                $soal = $this->Soal_model->get_soal_listeningv1();
                $k = 0;
                $data_soal = [];
                foreach ($soal as $soal) {
                    if($soal['tipe'] == "soal"){
                        $data_soal[$k] = $soal;
                        $k++;
                    }
                }
            } else if($tes['tipe_soal'] == 2){
                $soal = $this->Soal_model->get_soal_listeningv2();
                $k = 0;
                $data_soal = [];
                foreach ($soal as $soal) {
                    if($soal['tipe'] == "soal"){
                        $data_soal[$k] = $soal;
                        $k++;
                    }
                }
            }
    
            $jawaban = $this->input->post("cekListening");
            $text = "";
            $nilai_listening = 0;
    
            foreach ($data_soal as $i => $soal) {
                if($soal['data']['jawaban'] == $jawaban[$i]){
                    $nilai_listening += 1;
                    $status = "benar";
                } else {
                    $status = "salah";
                }
    
                $text .= $jawaban[$i]."/".$status."###";
            }
    
            if($tes['tipe_soal'] == 1){
                $soal = $this->Soal_model->get_soal_structurev1();
                $k = 0;
                $data_soal = [];
                foreach ($soal as $soal) {
                    if($soal['tipe'] == "soal"){
                        $data_soal[$k] = $soal;
                        $k++;
                    }
                }
            } else if($tes['tipe_soal'] == 2){
                $soal = $this->Soal_model->get_soal_structurev2();
                $k = 0;
                $data_soal = [];
                foreach ($soal as $soal) {
                    if($soal['tipe'] == "soal"){
                        $data_soal[$k] = $soal;
                        $k++;
                    }
                }
            }
            
            $jawaban = $this->input->post("cekStructure");
    
            $nilai_structure = 0;
    
            foreach ($data_soal as $i => $soal) {
                if($soal['data']['jawaban'] == $jawaban[$i]){
                    $nilai_structure += 1;
                    $status = "benar";
                } else {
                    $status = "salah";
                }
    
                $text .= $jawaban[$i]."/".$status."###";
            }
    
            if($tes['tipe_soal'] == 1){
                $soal = $this->Soal_model->get_soal_readingv1();
                $k = 0;
                $data_soal = [];
                foreach ($soal as $soal) {
                    if($soal['tipe'] == "soal"){
                        $data_soal[$k] = $soal;
                        $k++;
                    }
                }
            } else if($tes['tipe_soal'] == 2){
                $soal = $this->Soal_model->get_soal_readingv2();
                $k = 0;
                $data_soal = [];
                foreach ($soal as $soal) {
                    if($soal['tipe'] == "soal"){
                        $data_soal[$k] = $soal;
                        $k++;
                    }
                }
            }
            
            $jawaban = $this->input->post("cekReading");
    
            $nilai_reading = 0;
    
            foreach ($data_soal as $i => $soal) {
                if($soal['data']['jawaban'] == $jawaban[$i]){
                    $nilai_reading += 1;
                    $status = "benar";
                } else {
                    $status = "salah";
                }
    
                $text .= $jawaban[$i]."/".$status."###";
            }
    
            $data = [
                "email" => $this->input->post("email"),
                "nama" => $this->input->post("nama"),
                "jk" => $this->input->post("jk"),
                "no_wa" => $this->input->post("no_wa"),
                "t4_lahir" => $this->input->post("t4_lahir"),
                "tgl_lahir" => $this->input->post("tgl_lahir"),
                "alamat" => $this->input->post("alamat"),
                "alamat_pengiriman" => $this->input->post("alamat_pengiriman"),
                "nilai_listening" => $nilai_listening,
                "nilai_structure" => $nilai_structure,
                "nilai_reading" => $nilai_reading,
                "text" => $text,
                "id_tes" => $tes['id_tes'],
                "tipe_soal" => $tes['tipe_soal'],
            ];
    
            $this->Admin_model->add_data("peserta_toefl", $data);

            $data = [
                "nama" => $this->input->post("nama"),
                "ttl" => $data['t4_lahir'] . ", " . $this->tgl_indo(date("d-m-Y", strtotime($data['tgl_lahir']))),
                "alamat" => $data['alamat_pengiriman'],
                "no_wa" => $data['no_wa'],
                "hari_pengumuman" => $this->hari_ini(date("D", strtotime($tes['tgl_pengumuman']))),
                "tgl_pengumuman" => $this->tgl_indo(date("d-m-Y", strtotime($tes['tgl_pengumuman']))),
            ];

            $this->session->set_flashdata('pesan', $data);
        } else {
            $this->session->set_flashdata('pesan', $data);
        }
        
        redirect(base_url("soal/id/".$id_tes), $data);
    }

    public function tgl_indo($tgl){
        $data = explode("-", $tgl);
        $hari = $data[0];
        $bulan = $data[1];
        $tahun = $data[2];

        if($bulan == "01") $bulan = "Januari";
        if($bulan == "02") $bulan = "Februari";
        if($bulan == "03") $bulan = "Maret";
        if($bulan == "04") $bulan = "April";
        if($bulan == "05") $bulan = "Mei";
        if($bulan == "06") $bulan = "Juni";
        if($bulan == "07") $bulan = "Juli";
        if($bulan == "08") $bulan = "Agustus";
        if($bulan == "09") $bulan = "September";
        if($bulan == "10") $bulan = "Oktober";
        if($bulan == "11") $bulan = "November";
        if($bulan == "12") $bulan = "Desember";

        return $hari . " " . $bulan . " " . $tahun;
    }
     
    function hari_ini($hari){
        // $hari = date ("D");
    
        switch($hari){
            case 'Sun':
                $hari_ini = "Ahad";
            break;
    
            case 'Mon':			
                $hari_ini = "Senin";
            break;
    
            case 'Tue':
                $hari_ini = "Selasa";
            break;
    
            case 'Wed':
                $hari_ini = "Rabu";
            break;
    
            case 'Thu':
                $hari_ini = "Kamis";
            break;
    
            case 'Fri':
                $hari_ini = "Jumat";
            break;
    
            case 'Sat':
                $hari_ini = "Sabtu";
            break;
            
            default:
                $hari_ini = "Tidak di ketahui";		
            break;
        }
    
        return $hari_ini;
    
    }
}
/* End of file Peserta.php */