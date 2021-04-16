        <div class="container">
            
            <?php if($tes['status'] == "Selesai") :?>
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-5 col-md-5">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-12 col-12">
                                        <div class="p-5">
                                            <div class="text-center mb-3">
                                                <img src="<?= base_url()?>assets/img/LOGO UE.png" width="150" class="img-fluid img-shadow">
                                            </div>
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">Maaf, Tes pada periode ini telah berakhir</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php else :?>
                <?php if( $this->session->flashdata('pesan') ) : ?>
                    <div class="head-brand bg-light p-2 mb-3"><center><h3>Kampung Inggris <br> Universal</h3><br><i>Speaking - Grammar - Pronunciatin - TOEFL - IELTS</i></center></div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                <?php $data = $this->session->flashdata('pesan');?>
                                <center><p>Selamat Kakak Telah menyelesaikan tes TOEFL di Universal Kampung Inggris Pare, dengan biodata : </p></center>
                                <center><p>Nama : <?= $data['nama']?></p></center>
                                <center><p>TTL : <?= $data['ttl']?></p></center>
                                <center><p>Alamat : <?= $data['alamat']?></p></center>
                                <center><p>No Wa : <?= $data['no_wa']?></p></center>
                                <center><p>Adapun Score TOEFL akan diumumkan :</p></center>
                                <center><p>Hari :<?= $data['hari_pengumuman']?></p></center>
                                <center><p>Tanggal :<?= $data['tgl_pengumuman']?></p></center>
                                <p>Bagi yang mendapatkan score diatas 400 berhak memesan Sertifikat resmi dari Universal Kampung Inggris.</p>
                                <p><b>BENEFIT TES TOEFL DAN SERTIFIKAT TOEFL UNIVERSAL KAMPUNG INGGRIS</b></p>
                                <ul type="dash">
                                    <li>Sertifikat Test dikeluarkan oleh lembaga kami yang sudah resmi terdaftar di Dinas Pendidikan dan kebudayaan Indonesia dengan Nomor   SK DIKNAS 421.9/1196/418.20/2020</li>
                                    <li>Mendapatkan Group telegram tentang TOEFL </li>
                                    <li>Bisa digunakan sebagai persiapan mengambil test TOEFL dari ETS.</li>
                                    <li>Sistem ujian menggunakan website khusus toefltest.id dengan sistem online yang canggih.</li>
                                    <li>Bisa digunakan untuk melamar kerja BUMN atau Swasta yang mensyaratkan TOEFL</li>
                                    <li>Bisa digunakan Untuk mengajukan beasiswa baik dalam negri maupun luar negri.</li>
                                </ul>
                                <p><b>Catatan : Semua benefit diatas kembali kebijakan instansi masing-masing.</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="login">
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-5 col-md-5">
                                <div class="card o-hidden border-0 shadow-lg my-5">
                                    <div class="card-body p-0">
                                        <!-- Nested Row within Card Body -->
                                        <div class="row">
                                            <div class="col-lg-12 col-12">
                                                <div class="p-5">
                                                    <div class="text-center mb-5">
                                                        <img src="<?= base_url()?>assets/img/LOGO UE.png" width="150" class="img-fluid img-shadow">
                                                    </div>
                                                    <form id="formLogin">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control form-control-user" value="" placeholder="Password" name="password" id="password">
                                                        </div>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="javascript:void(0)" class="btn btn-sm btn-success btnLogin">mulai</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu" style="display:none">
                        <div class="head-brand bg-light p-2 mb-3"><center><h3>Kampung Inggris <br> Universal</h3><br><i>Speaking - Grammar - Pronunciatin - TOEFL - IELTS</i></center></div>
                        <div class="mb-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <select id="fontSize" class="form-control form-control-md">
                                        <option value="16px">Pilih Ukuran Tulisan</option>
                                        <option value="20px">20</option>
                                        <option value="25px">25</option>
                                        <option value="30px">30</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                        <form action="<?= base_url()?>soal/add_jawaban" method="post" id="formSoal" onsubmit="setFormSubmitting()">
                            <input type="hidden" name="id_tes" value="<?= $id?>">
                            <div class="mb-3 soal" id="dataDiri">
                                <ul class="list-group mb-3">
                                    <li class="list-group-item">
                                        <div class="form-group">
                                            <label for="email">Alamat Email</label>
                                            <input type="text" name="email" id="email" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama Lengkap</label>
                                            <input type="text" name="nama" id="nama" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="jk">Gender</label>
                                            <select name="jk" id="jk" class="form-control form-control-sm" required>
                                                <option value="">Pilih Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_wa">No Whatsapp</label>
                                            <input type="number" name="no_wa" id="no_wa" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="t4_lahir">Kota Lahir</label>
                                            <input type="text" name="t4_lahir" id="t4_lahir" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tgl_lahir">Tgl Lahir</label>
                                            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control form-control-md" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <textarea name="alamat" id="alamat" class="form-control form-control-sm"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat_pengiriman">Alamat Lengkap Pengiriman Sertifikat</label>
                                            <textarea name="alamat_pengiriman" id="alamat_pengiriman" class="form-control form-control-sm"></textarea>
                                            <small id="emailHelp" class="form-text text-danger">Form Alamat pengiriman diisi jika memesan sertifikat</small>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-end">
                                    <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalListening">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                            <div class="soalToeflListening">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalStructure">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <?php 
                                    $no = 0;
                                    foreach ($listening as $i => $soal) :?>
                                    <div class="mb-3 soal">
                                        <?php if($soal['tipe'] == "petunjuk") :?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <?= $soal['data']?>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalListening<?= $i?>">
                                                    <input type="hidden" name="cekListening[]" data-id="<?= $i?>" id="cekListening<?= $i?>" value="null">
                                                    <div class="form-group">
                                                        <label for="" id="container-content"><?= $soal['data']['no']?>.<?= $soal['data']['soal']?></label>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="d-flex mb-3">
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input soal_listening" data-id="<?= $i?>" id="soal_listening<?= $i.$k?>" name="soal_listening[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                    <div class="text-left">
                                                                        <label for="soal_listening<?= $i.$k?>" class="form-check-label" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $no++;?>
                                        <?php elseif ($soal['tipe'] == "audio") :?>
                                            <center><audio controls controlsList="nodownload"><source src="<?= base_url()?>assets/sounds/<?= $soal['data']?>" type='audio/mpeg'></audio></center>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach;?>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Back</a>
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalStructure">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="soalToeflStructure">
                                <div class="mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalListening"><i class="fa fa-arrow-left mr-2"></i>SOAL LISTENING</a> -->
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalReading">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <?php 
                                    $no = 0;
                                    foreach ($structure as $i => $soal) :?>
                                    <div class="mb-3 soal">
                                        <?php if($soal['tipe'] == "petunjuk") :?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <?= $soal['data']?>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalStructure<?= $i?>">
                                                    <input type="hidden" name="cekStructure[]" data-id="<?= $i?>" id="cekStructure<?= $i?>" value="null">
                                                    <div class="form-group">
                                                        <label for="" id="container-content"><?= $soal['data']['no']?>.<?= $soal['data']['soal']?></label>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="d-flex mb-3">
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input soal_structure" data-id="<?= $i?>" id="soal_structure<?= $i.$k?>" name="soal_structure[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                    <div class="text-left">
                                                                        <label for="soal_structure<?= $i.$k?>" class="form-check-label" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $no++;?>
                                        <?php elseif ($soal['tipe'] == "audio") :?>
                                            <center><audio controls controlsList="nodownload"><source src="<?= base_url()?>assets/sounds/<?= $soal['data']?>" type='audio/mpeg'></audio></center>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach;?>
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalListening"><i class="fa fa-arrow-left mr-2"></i>SOAL LISTENING</a> -->
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalReading">Next<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="soalToeflReading">
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalStructure"><i class="fa fa-arrow-left mr-2"></i>SOAL STRUCTURE</a> -->
                                        <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                    </div>                                        
                                </div>
                                <?php 
                                    $no = 0;
                                    foreach ($reading as $i => $soal) :?>
                                    <div class="mb-3 soal">
                                        <?php if($soal['tipe'] == "petunjuk") :?>
                                            <div class="card">
                                                <div class="card-body">
                                                    <?= $soal['data']?>
                                                </div>
                                            </div>
                                        <?php elseif($soal['tipe'] == "soal") :?>
                                            <div class="card">
                                                <div class="card-body" id="soalReading<?= $i?>">
                                                    <input type="hidden" name="cekReading[]" data-id="<?= $i?>" id="cekReading<?= $i?>" value="null">
                                                    <div class="form-group">
                                                        <label for="" id="container-content"><?= $soal['data']['no']?>.<?= $soal['data']['soal']?></label>
                                                        <?php foreach ($soal['data']['pilihan'] as $k => $data) :?>
                                                            <div class="d-flex mb-3">
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input soal_reading" data-id="<?= $i?>" id="soal_reading<?= $i.$k?>" name="soal_reading[<?= $no?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                    <div class="text-left">
                                                                        <label for="soal_reading<?= $i.$k?>" class="form-check-label" id="container-content"><?= $data?></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endforeach;?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $no++;?>
                                        <?php elseif ($soal['tipe'] == "audio") :?>
                                            <center><audio controls controlsList="nodownload"><source src="<?= base_url()?>assets/sounds/<?= $soal['data']?>" type='audio/mpeg'></audio></center>
                                        <?php endif;?>
                                    </div>
                                <?php endforeach;?>
                                <div class="col-12 mb-3">
                                    <div class="d-flex justify-content-end">
                                        <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalStructure"><i class="fa fa-arrow-left mr-2"></i>SOAL STRUCTURE</a> -->
                                        <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif;?>
            <?php endif;?>
        </div>
    </div>
</div>

<div class="overlay"></div>

<script>
    $(".soalToeflListening").hide();
    $(".soalToeflStructure").hide();
    $(".soalToeflReading").hide();

    $("#fontSize").change(function(){
        let size = $(this).val();
        $(".soal").css("font-size",size);
    })
    
    let formSubmitting = false;
    let setFormSubmitting = function() { formSubmitting = true; };

    $(".btnLogin").click(function(){
        let password = $("#password").val();
        let id = "<?= $id?>"
        
        $.ajax({
            url: "<?= base_url()?>soal/password_check",
            data: {password: password, id: id},
            dataType: "JSON",
            method: "POST",
            success: function(result){
                if(result == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Maaf password salah',
                    })
                } else {
                    $(".login").hide();
                    $(".menu").show();
                }
            }
        })
    })

    $(".btnSoalListening").click(function(){
        let email = $("#email").val();
        let nama = $("#nama").val();
        let no_wa = $("#no_wa").val();
        let t4_lahir = $("#t4_lahir").val();
        let tgl_lahir = $("#tgl_lahir").val();
        let alamat = $("#alamat").val();
        let jk = $("#jk").val();
        let id = "<?= $id?>"

        if(email == "" || nama == "" || no_wa == "" || t4_lahir == "" || tgl_lahir == "" || alamat == "" || jk == ""){
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Lengkapi data terlebih dahulu',
            })
        } else {
            $.ajax({
                url: "<?= base_url()?>soal/email_check",
                data: {email:email, id:id},
                dataType: "JSON",
                method: "POST",
                success: function(result){
                    if(result) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Maaf email Anda telah digunakan',
                        })
                    } else {
                        $(".soalToeflListening").show();
                        $(".soalToeflStructure").hide();
                        $(".soalToeflReading").hide();
                        $(".titleBar").html("TES TOEFL (LISTENING)")
                        $("#dataDiri").hide();
                        $("#formSoal").scrollTop(0);
                    }
                }
            })
        }
    })

    $('input:radio.soal_listening').click(function () {
        let value = $(this).val();
        let id = $(this).data("id");
        $("#cekListening"+id).val(value)
    });

    $('input:radio.soal_structure').click(function () {
        let value = $(this).val();
        let id = $(this).data("id");
        $("#cekStructure"+id).val(value)
    });

    $('input:radio.soal_reading').click(function () {
        let value = $(this).val();
        let id = $(this).data("id");
        $("#cekReading"+id).val(value)
    });

    $(".btnSoalStructure").click(function(){
        if($('input:radio.soal_listening:checked').length != 50){

            $.each($("input[name='cekListening[]']"), function(){
                id = $(this).data("id");
                $("#soalListening"+id).removeClass("list-group-item-danger")

                if($(this).val() == "null"){
                    $("#soalListening"+id).addClass("list-group-item-danger")
                }
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Listening',
            })

            $(".soalToeflListening").show();
            $(".soalToeflStructure").hide();
            $(".soalToeflReading").hide();
            $(".titleBar").html("TES TOEFL (LISTENING)")
            return false;
        } else {
            $(".soalToeflListening").hide();
            $(".soalToeflStructure").show();
            $(".soalToeflReading").hide();
            
            $(".titleBar").html("TES TOEFL (STRUCTURE)")
            $("#formSoal").scrollTop(0);
        }
    })

    $(".btnSoalReading").click(function(){
        if($('input:radio.soal_structure:checked').length != 40){
            
            $.each($("input[name='cekStructure[]']"), function(){
                id = $(this).data("id");
                $("#soalStructure"+id).removeClass("list-group-item-danger")

                if($(this).val() == "null"){
                    $("#soalStructure"+id).addClass("list-group-item-danger")
                }
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Structure',
            })

            $(".soalToeflListening").hide();
            $(".soalToeflStructure").show();
            $(".soalToeflReading").hide();
            $(".titleBar").html("TES TOEFL (STRUCTURE)")
            return false;
        } else {
            $(".soalToeflListening").hide();
            $(".soalToeflStructure").hide();
            $(".soalToeflReading").show();
            
            $(".titleBar").html("TES TOEFL (READING)")
            $("#formSoal").scrollTop(0);
        }
    })

    $(".btnDataDiri").click(function(){
        $(".soalToeflListening").hide();
        $(".soalToeflStructure").hide();
        $(".soalToeflReading").hide();
        $("#dataDiri").show();

        $("#formSoal").scrollTop(0);
    })

    $(".submitForm").click(function(){
        if($('input:radio.soal_reading:checked').length != 50){
            $.each($("input[name='cekReading[]']"), function(){
                id = $(this).data("id");
                $("#soalReading"+id).removeClass("list-group-item-danger")

                if($(this).val() == "null"){
                    $("#soalReading"+id).addClass("list-group-item-danger")
                }
            })

            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Anda belum menyelesaikan soal Reading',
            })

            $(".soalToeflListening").hide();
            $(".soalToeflStructure").hide();
            $(".soalToeflReading").show();
            $(".titleBar").html("TES TOEFL (READING)")
            return false;
        } else {
            var c = confirm("Yakin telah menyelesaikan pekerjaan Anda?")
            
            if(c == true) $("#formSoal").submit()

        }
    })

    window.onload = function() {
        window.addEventListener("beforeunload", function (e) {
            if (formSubmitting) {
                return undefined;
            }

            var confirmationMessage = 'It looks like you have been editing something. '
                                    + 'If you leave before saving, your changes will be lost.';

            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
        });
    };

    document.addEventListener('play', function(e){  
        var audios = document.getElementsByTagName('audio');  
        for(var i = 0, len = audios.length; i < len;i++){  
            if(audios[i] != e.target){  
                audios[i].pause();  
            }  
        }  
    }, true);

    <?php if( !$this->session->flashdata('pesan') ) : ?>
        var sec         = <?= $tes['waktu']?> * 60,
        countDiv    = document.getElementById("waktu"),
        secpass,
        countDown   = setInterval(function () {
            'use strict';
            
            secpass();
        }, 1000);
    <?php endif;?>

    function secpass() {
        'use strict';
        
        var min     = Math.floor(sec / 60),
            remSec  = sec % 60;
        
        if (remSec < 10) {
            
            remSec = '0' + remSec;
        
        }
        if (min < 10) {
            
            min = '0' + min;
        
        }
        countDiv.innerHTML = min + ":" + remSec;
        
        if (sec > 0) {
            sec = sec - 1;
        } else {
            clearInterval(countDown);
            formSubmitting = true;
            $("#formSoal").submit();
            // countDiv.innerHTML = 'countdown done';
        }
    }
</script>