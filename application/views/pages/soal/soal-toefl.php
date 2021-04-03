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
                                                <img src="<?= base_url()?>assets/img/logo.png" width="75" class="img-fluid img-shadow">
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
                    <div class="head-brand bg-light p-2 mb-3"><center><h3>Al-Azhar <br>English Academy</h3><br><i>Kampung Inggris Al-Azhar <br> Speaking - Grammar - Pronunciatin - TOEFL - IELTS</i></center></div>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success"><i class="fa fa-check-circle text-success mr-1"></i><?=$this->session->flashdata('pesan')?></div>
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
                                                    <div class="text-center mb-3">
                                                        <img src="<?= base_url()?>assets/img/logo.png" width="75" class="img-fluid img-shadow">
                                                    </div>
                                                    <div class="text-center">
                                                        <h1 class="h4 text-gray-900 mb-4">أَهْلًا وَ سَهْلًا</h1>
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
                        <div class="head-brand bg-light p-2 mb-3"><center><h3>Al-Azhar <br>English Academy</h3><br><i>Kampung Inggris Al-Azhar <br> Speaking - Grammar - Pronunciatin - TOEFL - IELTS</i></center></div>
                        <div class="row">
                            <div class="col-12 mb-3">
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
                        </div>
                        <form action="<?= base_url()?>soal/add_jawaban" method="post" id="formSoal" onsubmit="setFormSubmitting()">
                            <input type="hidden" name="id_tes" value="<?= $id?>">
                            <div class="row">
                                <div class="col-12 col-md-12 mb-3 soal" id="dataDiri">
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
                                                <label for="no_wa">No Whatsapp</label>
                                                <input type="text" name="no_wa" id="no_wa" class="form-control form-control-md" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="t4_lahir">Tempat Lahir</label>
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
                                                <label for="alamat_pengiriman">Alamat Pengiriman</label>
                                                <textarea name="alamat_pengiriman" id="alamat_pengiriman" class="form-control form-control-sm"></textarea>
                                                <small id="emailHelp" class="form-text text-muted">Form Alamat pengiriman diisi jika memesan sertifikat</small>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="d-flex justify-content-end">
                                        <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalListening">SOAL LISTENING<i class="fa fa-arrow-right ml-2"></i></a>
                                    </div>
                                </div>
                                <div class="soalToeflListening">
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a>
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalStructure">SOAL STRUCTURE<i class="fa fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <?php 
                                        foreach ($listening as $i => $soal) :?>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            
                                            <?php if($soal['no'] == 1) : ?>
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><b>PART A</b></center></li class="list-group-item">
                                                    <li class="list-group-item">In Part A , you will hear short conversations between two speakers. At the end of each conversation, a third
                                                        voice will ask a question about what was said. The question will be spoken just one time. After you hear a
                                                        conversation and the question about it, read the four possible anwers and decide which one would be the best
                                                        answer to the question you have heard. Then, on your answer sheet, find the number of the problem and mark
                                                        your answer.
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src='<?= base_url()?>assets/sounds/listening.mp3' type='audio/mp3'></audio></center>
                                            <?php elseif($soal['no'] == 31) : ?>
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><b>PART B</b></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>DIRECTION</p>
                                                        <p>In Part B, you will hear longer conversation, after each conversation, you will be asked some question.
                                                        The conversation and question will be spoken just one time. They will not be written out for you, so you will
                                                        have to listen carefully in order to understand and remember what the speakers says.</p>
                                                        <p>When you hear a question, read the four possible answers in your test book and decide which one would
                                                        be the best answer to the question you have heard. Then, on your answer sheet, find the number of the
                                                        problem and fill in the space that corresponds to the letter of the answer you have chosen.</p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src='<?= base_url()?>assets/sounds/listening.mp3' type='audio/mp3'></audio></center>
                                            <?php elseif($soal['no'] == 39) : ?>
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><b>PART C</b></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>DIRECTION</p>
                                                        <p>In Part C, You will hear several talks. After each talk, you will be asked some questions. The talks and
                                                        questions will be spoken just one time. They will not be written out for you, so you will have to listen
                                                        carefully in order to understand and remember what the speaker says.</p>
                                                        <p>When you hear a question, read the four possible answers in your test book and decide which one would
                                                        be the best answer to the question you have heard. Then, on your answer sheet, find the number of the
                                                        problem and fill in the space that corresponds to the letter of the answer you have choosen.</p>
                                                    </li>
                                                </ul>
                                                <center><audio controls controlsList="nodownload"><source src='<?= base_url()?>assets/sounds/listening.mp3' type='audio/mp3'></audio></center>
                                            <?php endif;?>
                                        </div>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <ul class="list-group">
                                                <li class="list-group-item" id="soal-bg">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start mb-3 mt-3">
                                                            <!-- <div class="text-left"> -->
                                                                <label for="" id="container-content"><b><?= $soal['no']?>.<?= $soal['soal']?></b></label>
                                                            <!-- </div> -->
                                                        </div>
                                                        <div id="select">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <?php foreach ($soal['pilihan'] as $k => $data) :?>
                                                                        <div class="col-12 d-flex mb-3">
                                                                            <div class="form-check">
                                                                                <input type="radio" class="form-check-input soal_listening" id="soal_listening<?= $i.$k?>" name="soal_listening[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                                <div class="text-left">
                                                                                    <label for="soal_listening<?= $i.$k?>" class="form-check-label" id="container-content"><?= $data?></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endforeach;?>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-between">
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a>
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalStructure">SOAL STRUCTURE<i class="fa fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="soalToeflStructure">
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-end">
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalListening"><i class="fa fa-arrow-left mr-2"></i>SOAL LISTENING</a> -->
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalReading">SOAL READING<i class="fa fa-arrow-right ml-2"></i></a>
                                        </div>
                                    </div>
                                    <?php foreach ($structure as $i => $soal) :?>
                                        <?php if($soal['no'] == 1):?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><b>DIRECTIONS</b></center></li class="list-group-item">
                                                    <li class="list-group-item">Questions number 1-15 are incomplete sentences. Beneath each sentence you will see four words or phrases,
                                                        marked (A), (B), (C), and (D). Choose the one word of phrase that best complets the sentence. Then, on your 
                                                        answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer 
                                                        you have chosen. Fill in the space so that the letter inside the oval cannot be seen.
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 16) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><b>PART B DIRECTIONS</b></center></li class="list-group-item">
                                                    <li class="list-group-item">In questions 16-40 each sentences has four underlined words of phrases. The four underlined parts of the
                                                        sentence are marked (A), (B), (C), and (D). indentify the one underlined word of phrase that must be changed in
                                                        order for the sentence to be correct. Then, on your answer sheet, find the number of the question and fill in the
                                                        space that correspondends to the letter of the answer you have choosen.
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php endif;?>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <ul class="list-group">
                                                <li class="list-group-item" id="soal-bg">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start mb-3 mt-3">
                                                            <div class="text-left">
                                                                <label for="" id="container-content"><b><?= $soal['no']?>.<?= $soal['soal']?></b></label>
                                                            </div>
                                                        </div>
                                                        <div id="select">
                                                            <div class="container">
                                                                <div class="row justify-content-center">
                                                                    <?php foreach ($soal['pilihan'] as $k => $data) :?>
                                                                        <div class="col-12 d-flex justify-content-start mb-3">
                                                                            <div class="form-check">
                                                                                <input type="radio" class="form-check-input soal_structure" id="soal_structure<?= $i.$k?>" name="soal_structure[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                                <div class="text-left">
                                                                                    <label for="soal_structure<?= $i.$k?>" class="form-check-laebl" id="container-content"><?= $data?></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endforeach;?>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-end">
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalListening"><i class="fa fa-arrow-left mr-2"></i>SOAL LISTENING</a> -->
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnDataDiri"><i class="fa fa-arrow-left mr-2"></i>Data Diri</a> -->
                                            <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalReading">SOAL READING<i class="fa fa-arrow-right ml-2"></i></a>
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
                                    <?php foreach ($reading as $i => $soal) :?>
                                        <?php if($soal['no'] == 1):?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><b>DIRECTIONS</b></center></li class="list-group-item">
                                                    <li class="list-group-item">In this section, you will read a number of passages. Each one is followed by approximately ten questions 
                                                        about it. For 1-50, chose the one best answer, (A), (B), (C), and (D), to each question. Then, find the number 
                                                        of the question on your answer sheet, and fill in the space that corresponds to the letter of the answer you 
                                                        have choosen. Answer all of the questions following a passage on the basis of what is stated in that passage.
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Question 1 through 10 are based on the following passage.</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) The Stone Age was a period of history which began in approximately 2 million B.C. and lasted until</p>
                                                        <p>(2) 3000 B.C. Its name was derived from the stone tools and weapons that modern scientist found. This</p>
                                                        <p>(3) period was devided into the Paleolithic, Mesolithic, and Neolithic Ages. During the first period (2</p>
                                                        <p>(4) million to 8000 B.C.), the first hatchet and use of fire for heating on cooking were developed. As a</p>
                                                        <p>(5) result of the Ice Age, which evolved about 1 million years into the Paleolithic Age, people were forced</p>
                                                        <p>(6) to seek shelter in caves. Wear clothing, and develop new tools.</p>
                                                        <p>(7) During the Mesolithic Age (8000 to 6000 B.C.), people made crude pottery and the first fish hooks,</p>
                                                        <p>(8) took dogs hunting, and developed the bow and arrow, which were used until the forteenth century A.D.</p>
                                                        <p>(9) The Neolithic Age (6000 to 3000 B.C.) saw humankind domesticating sheep, goats, pigs, and cattle,</p>
                                                        <p>(10) being less nomadic than in previous eras, establishing permanent settlements, and creating</p>
                                                        <p>(11) governments.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 11) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Question 11 through 23 are based on the following passage.</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) Hot boning is an energy-saving technique for the meat processing industry. It has received</p>
                                                        <p>(2) significant attention in recent years when increased pressure for energy conservation has accentuated</p>
                                                        <p>(3) the need for more efficient methods of processing the bovine carcass. Cooling an entire carcass</p>
                                                        <p>(4) requires a considerable amount of refrigerated space, since bone and trimmable fat are cooled along</p>
                                                        <p>(5) with the muscle. It is also necesarry to space the carcasses adequately in the refrigerated room for</p>
                                                        <p>(6) better air movement and prevention of microbial contamination, thus adding to the volume</p>
                                                        <p>(7) requirements for carcass chillers.</p>
                                                        <p>(8) Conventional handling of meat involves holding the beef sides in the cooler for 24 to 36 hours</p>
                                                        <p>(9) before boning. Chilling in the traditional fashion is also associated with a loss of carcass weight</p>
                                                        <p>(10) ranging from 2 percent to 4 percent due to evaporation of moisture from the meat tissue.</p>
                                                        <p>(11) Early excision, or hot boning, of muscle prerigor followed by vacuum packaging has several</p>
                                                        <p>(12) potential advantages, by removing only the edible muscle and fat prerigor, refrigeration space and cost</p>
                                                        <p>(13) are minimized, boning labor is decreased, and storage yield increased. Because hot boning often</p>
                                                        <p>(14) results in the toughening of meat, a more recent approach, hot boning following electrical stimulation,</p>
                                                        <p>(15) has been used to reduce the necessary time of rigor mortis.</p>
                                                        <p>(16) Some researches have found this method benefical in maintaining tender meat, while other have found</p>
                                                        <p>(17) that the meat also becomes tough after electrical stimulation.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 24) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Questions 24 through 31 are based on the following passage.</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) In 1920, after some thirty-nine years of problem with disease, high costs, and politics, the Panama</p>
                                                        <p>(2) Canal was officially opened, finally linking the Atlantic and Pasific Oceans by allowing ships to pass</p>
                                                        <p>(3) through the fifty-mile canal zone instead of traveling some seven thousand miles around Cape Horn. It</p>
                                                        <p>(4) takes a ship approximately eight hours to complete the trip through the canal and costs an average of</p>
                                                        <p>(5) fifteen thousand dollars, one tenth of what it would cost an average ship to round the horn. More than</p>
                                                        <p>(6) fifteen thousand ships pass through its locks each year.</p>
                                                        <p>(7) The French initiated the project but sold their rights to the United States, which actually began the</p>
                                                        <p>(8) construction of the project. The latter will control it until the end of the twentieth century when Panama</p>
                                                        <p>(9) takes over its duties.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 32) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Questions 32 through 41 are based on the following passage.</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) In 776 B.C, the first Olympic Games were held at the foot of mount Olympus to honor the</p>
                                                        <p>(2) Greeks'chief God. Zeus. The warm climate for outdorr activities, the need for preparedness in war, and</p>
                                                        <p>(3) their lifestyle caused the Greeks to create competitive sport. Only the elite and military could</p>
                                                        <p>(4) participate at first, but later the games were open to all free Greek males who had no criminal record.</p>
                                                        <p>(5) The Greeks emphasized physical fitness and strength in their education of youth. Therefore, contests in</p>
                                                        <p>(6) running, jumping, and javelin throwing, boxing, and horse chariot racing were held in individual cities,</p>
                                                        <p>(7) and the winners competed every four years at Mount Olympus. Winners were greatly honored by</p>
                                                        <p>(8) having peoms sung about their deeds. Originally these contests were held as games of friendship, and</p>
                                                        <p>(9) any wars in progress were halted to allow the games to take place. They also helped to strengthen</p>
                                                        <p>(10) bonds among competitors and the different cities represented.</p>
                                                        <p>(11) The Greeks attached so much importance to the games that they calculated time in four-year cycles</p>
                                                        <p>(12) called "Olympiads,"dating from 776 B.C. the contest coincided with religious festivies and constituted</p>
                                                        <p>(13) an all-out effort on the part of the participants to please the gods. Any who disobeyed the rules were</p>
                                                        <p>(14) dismissed and seriously punished. These athletes brought shame not only to hemselves, but also to the</p>
                                                        <p>(15) cities they represented.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 42) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Question 42 through 50 are based on the following passage</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) Tampa, Florida, owes a great deal of its growth and prosperity to a Cuban cigar manufacturer named</p>
                                                        <p>(2) Vicente Martinez Ybor. When civil war broke out in 1869, he was forced to flee his country, and he</p>
                                                        <p>(3) moved his business to south florida. Sixteen years later, labor union problems in Key West caused him</p>
                                                        <p>(4) to seek a better location along the west coast of the state. He bought a forty-acre tract of land and made</p>
                                                        <p>(5) plans to set up his cigar factory on the site. This original sixteen-block stretch of land later expanded to</p>
                                                        <p>(6) one hundred acres near Tampa. This newly developed area was called Ybor City in his honor. Spanish,</p>
                                                        <p>(7) Italian, and Cuban immigrants flocked to the area as the demand for workers in the cigar factory</p>
                                                        <p>(8) increased. One fifth of the city's twenty thousand residents enjoyed the high-paying jobs there. At the</p>
                                                        <p>(9) end of the 1800s, Jose Marti, a Cuban poet and freedom fighter, organized a revolution from Ybor City</p>
                                                        <p>(10) and managed to get considerable support for his movement. Teddy Roosevelt's "Rough Riders" were</p>
                                                        <p>(11) stationed there during the Spanish-American War in 1898. Much of the prosperity of this region is due</p>
                                                        <p>(12) to Ybor's cigar factory established more than one hundred years ago.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php endif;?>
                                        <div class="col-12 col-md-12 mb-3 soal" id="soal">
                                            <ul class="list-group">
                                                <li class="list-group-item" id="soal-bg">
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-start mb-3 mt-3">
                                                            <div class="text-left">
                                                                <label for="" id="container-content"><b><?= $soal['no']?>.<?= $soal['soal']?></b></label>
                                                            </div>
                                                        </div>
                                                        <div id="select">
                                                            <div class="container">
                                                                <div class="row justify-content-center">
                                                                    <?php foreach ($soal['pilihan'] as $k => $data) :?>
                                                                        <div class="col-12 d-flex justify-content-start mb-3">
                                                                            <div class="form-check">
                                                                                <input type="radio" class="form-check-input soal_reading" id="soal_reading<?= $i.$k?>" name="soal_reading[<?= $i?>]" value="<?= $data?>" <?php if($k == 0){echo "required";}?>>
                                                                                <div class="text-left">
                                                                                    <label for="soal_reading<?= $i.$k?>" class="form-check-label" id="container-content"><?= $data?></label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endforeach;?>
                                    <div class="col-12 mb-3">
                                        <div class="d-flex justify-content-end">
                                            <!-- <a href="javascript:void(0)" class="btn btn-md btn-success btnSoalStructure"><i class="fa fa-arrow-left mr-2"></i>SOAL STRUCTURE</a> -->
                                            <button type="button" class="btn btn-md btn-primary submitForm">Simpan</button>
                                        </div>                                        
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
        let id = "<?= $id?>"

        if(email == "" || nama == "" || no_wa == "" || t4_lahir == "" || tgl_lahir == "" || alamat == ""){
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

    $(".btnSoalStructure").click(function(){
        if($('input:radio.soal_listening:checked').length != 50){
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
        if($('input:radio.soal_listening:checked').length != 50){
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
        }

        if($('input:radio.soal_structure:checked').length != 40){
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
        }

        if($('input:radio.soal_reading:checked').length != 50){
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
        }

        $("#formSoal").submit();    
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

    $("#formSoal").submit(function(){
        var c = confirm("Yakin telah menyelesaikan pekerjaan Anda?")

        return c
    })
</script>