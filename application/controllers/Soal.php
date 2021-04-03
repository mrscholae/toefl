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
            $data['listening'] = $this->Soal_model->get_soal_listening();
            $data['structure'] = $this->Soal_model->get_soal_structure();
            $data['reading'] = $this->Soal_model->get_soal_reading();
            // $data['structure'] = [];
            // $data['reading'] = [];

            $page = "soal-toeflv1";
        } else if($soal['tipe_soal'] == 2){
            $data['listening'] = $this->Soal_model->get_soal_listeningv2();
            $data['structure'] = $this->Soal_model->get_soal_structurev2();
            $data['reading'] = $this->Soal_model->get_soal_readingv2();

            $page = "soal-toeflv2";
        }

        $this->load->view("pages/layout/header-user", $data);
        $this->load->view("pages/soal/".$page, $data);
        $this->load->view("pages/layout/footer-user");
    }

    public function index(){
        $data['title'] = "TES TOEFL";

        $data['listening'] = $this->Soal_model->get_soal_listening();
        $data['structure'] = $this->Soal_model->get_soal_structure();
        $data['reading'] = $this->Soal_model->get_soal_reading();

        $this->load->view("pages/layout/header-user", $data);
        $this->load->view("pages/soal/soal-toefl", $data);
        $this->load->view("pages/layout/footer-user");
    }

    public function respon(){
        $data['title'] = "Jawaban Peserta";

        $respon = $this->Admin_model->get_all("respon");
        $data['respon'] = [];
        foreach ($respon as $i => $respon) {
            $data['respon'][$i] = $respon;
            $jawaban = explode("###", $respon['text']);
            $data['respon'][$i]['text'] = $jawaban;
        }

        $this->load->view("pages/soal/respon", $data);
    }

    public function respon_toefl(){
        $data['title'] = "Jawaban Peserta";

        $respon = $this->Admin_model->get_all("respon_toefl");
        $data['respon'] = [];
        foreach ($respon as $i => $respon) {
            $data['respon'][$i] = $respon;
            $jawaban = explode("###", $respon['text']);
            $data['respon'][$i]['text'] = $jawaban;
        }

        $this->load->view("pages/soal/respon_toefl", $data);
    }

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
        $id_tes = $this->input->post("id_tes");
        $tes = $this->Admin_model->get_one("tes", ["md5(id_tes)" => $id_tes]);

        if($tes['tipe_soal'] == 1){
            $soal = $this->Soal_model->get_soal_listening();
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
            $soal = $this->Soal_model->get_soal_structure();
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
            $soal = $this->Soal_model->get_soal_reading();
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
        $this->session->set_flashdata('pesan', 'Anda telah menyelesaikan tes TOEFL. Nilai / Score TOEFL akan diumumkan oleh Admin Al-Azhar. Mohon ditunggu');
        redirect(base_url("soal/id/".$id_tes), $data);
    }
}
/* End of file Peserta.php */