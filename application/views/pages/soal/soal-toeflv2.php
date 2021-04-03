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
                    <div class="menu" style="display: none">
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
                                                    <li class="list-group-item"><center><i>Question 1 through 12 are based on the following passage.</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>As many as one thousand years ago in the Southwest, the Hopi and Zuni Indians of North America were building with adobe – sun - baked brick plastered with mud. Their homes looked remarkably like modern apartment houses. Some were four stories high and contained quarters for perhaps a thousand people, along with storerooms for grain and other goods. These buildings were usually put up against cliffs, both to make construction easier and for defense against enemies. They were really villages in themselves, as later Spanish explorers must have realized since they called them “pueblos,” which is Spanish for towns.</p>
                                                        <p>The people of the pueblos raised what are called “the three sisters” – com, beans, and squash. They made excellent pottery and wove marvelous baskets, some so fine that they could hold water. The Southwest has always been a dry country, where water is scarce. The Hopi and Zuni brought water from streams to their fields and gardens through irrigation ditches. Water was so important that it played a major role in their religion. They developed elaborate ceremonies and religious rituals to bring rain.</p>
                                                        <p>The way of life of less-settled groups was simpler and more strongly influenced by nature. Small tribes such as the Shoshone and Ute wandered the dry and mountainous lands between the Rocky Mountains and the Pacific Ocean. They gathered seeds and hunted small animals such as rabbits and snakes. In the Far North the ancestors of today’s Inuit hunted seals, walruses, and the great whales. They lived right on the frozen seas in shelters called igloos built of blocks of packed snow. When summer came, they fished for salmon and hunted the lordly caribou.</p>
                                                        <p>The Cheyenne, Pawnee, and Sioux tribes, known as the Plains Indians, lived on the grasslands between the Rocky Mountains and the Mississippi River. They hunted bison, commonly called the buffalo. Its meat was the chief food of these tribes, and its hide was used to make their clothing and the covering of their tents and tipis.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 13) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Question 13 through 22 are based on the following passage.</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) Marianne Moore (1887-1972) once said that her writing could be called poetry only because </p>
                                                        <p>(2) there was no other name for it. Indeed her poems appear to be extremely compressed essays </p>
                                                        <p>(3) that happen to be printed in jagged lines on the page. Her subjects were varied: animals, </p>
                                                        <p>(4) laborers, artist, and the craft of poetry. From her general reading came quotations that she </p>
                                                        <p>(5) found striking or insightful. She included these in her poems, scrupulously enclosed in quotation </p>
                                                        <p>(6) marks, and sometimes identified in footnotes. Of this practice, she wrote, “ ‘Why the many </p>
                                                        <p>(7) quotation marks?’ I am asked ….. When a thing has been said so well that it could not be said </p>
                                                        <p>(8) better, why paraphrase it? Hence my writing is, if not a cabinet of fossils, a kind of collection of </p>
                                                        <p>(9) flies in amber. “Close observation and concentration on detail are the methods of her poetry.</p>
                                                        <br>
                                                        <p>(10) Marianne Moore grew up in Kirkwood, Missouri, near St. Louis. After graduation from Bryn </p>
                                                        <p>(11) Mawr College in 1909, she taught commercial subjects at the Indian School in Carlisle, </p>
                                                        <p>(12) Pennsylvania. Later she became a librarian in New York City. During the 1920’s she was editor of </p>
                                                        <p>(13) The Dial, an important literary magazine of the period. She lived quietly all her life, mostly in </p>
                                                        <p>(14) Brooklyn, New York. She spent a lot of time at the Bronx Zoo, fascinated by animals. Her </p>
                                                        <p>(15) admiration of the Brooklyn Dodgers – before the team moved to Los Angeles – was widely </p>
                                                        <p>(16) known. </p>
                                                        <br>
                                                        <p>(17) Her first book of poems was published in London in 1921 by a group of friends associated with </p>
                                                        <p>(18) the Imagist movement. From that time on her poetry has been read with interest by succeeding </p>
                                                        <p>(19) generations of poets and readers. In 1952 she was awarded the Pulitzer Prize for her Collecting </p>
                                                        <p>(20) Poems. She wrote that she did not write poetry “for money or fame. To earn a living is needful, </p>
                                                        <p>(21) but it can be done in routine ways. One writes because one has a burning desire to objectify </p>
                                                        <p>(22) what it is indispensable to one’s happiness to express ……”</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 23) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Questions 23 through 30 are based on the following passage.</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) What makes it rain? Rain falls from clouds for the same reason anything falls to Earth. The </p>
                                                        <p>(2) Earth’s gravity pulls it. But every cloud is made of water droplets or ice crystals. Why doesn’t </p>
                                                        <p>(3) rain or snow fall constantly from all clouds? The droplets or ice crystals in clouds are exceedingly </p>
                                                        <p>(4) small. The effect of gravity on them is minute. Air currents move and lift droplets so that the net </p>
                                                        <p>(5) downward displacement is zero, even though the droplets are in constant motion.</p>
                                                        <br>
                                                        <p>(6) Droplets and ice crystals behave somewhat like dust in the air made visible in a shaft of sunlight. </p>
                                                        <p>(7) To the casual observer, dust seems to act in a totally random fashion, moving about chaotically </p>
                                                        <p>(8) without fixed direction. But in fact dust particles are much larger than water droplets and they </p>
                                                        <p>(9) finally fall. The average size of a cloud droplet is only 0.0004 inch in diameter. It is so small that</p>
                                                        <p>(10) it would take sixteen hours to fall half a mile in perfectly still air, and it does not fall out of </p>
                                                        <p>(11) moving air at all. Only when the droplet grows to a diameter of 0.008 inch or larger can it fall </p>
                                                        <p>(12) from the cloud. The average raindrop contains a million times as much water as a tiny cloud </p>
                                                        <p>(13) droplet. The growth of a cloud droplet to a size large enough to fall out is the cause of rain and </p>
                                                        <p>(14) other forms of precipitation. This important growth process is called “coalescence.”</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 31) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Questions 31 through 40 are based on the following passage.</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) People appear to be born to compute. The numerical skills of children develop so early and so </p>
                                                        <p>(2) inexorably that it is easy to imagine an internal clock of mathematical maturity guiding their </p>
                                                        <p>(3) growth. Not long after learning to walk and talk, they can set the table with impressive accuracy </p>
                                                        <p>(4) – one plate, one knife, one spoon, one fork, for each of the five chairs. Soon they are capable of </p>
                                                        <p>(5) nothing that they have placed five knives, spoons, and forks on the table and, a bit later, that </p>
                                                        <p>(6) this amounts to fifteen pieces of silverware. Having thus mastered addition, they move on to </p>
                                                        <p>(7) subtraction. It seems almost reasonable to expect that if a child were secluded on a desert </p>
                                                        <p>(8) island at birth and retrieved seven years later, he or she could enter a second-grade </p>
                                                        <p>(9) mathematics class without any serious problems of intellectual adjustment.</p>
                                                        <br>
                                                        <p>(10) Of course, the truth is not so simple. This century, the work of cognitive psychologists has </p>
                                                        <p>(11) illuminated the subtle forms of daily learning on which intellectual progress depends. Children </p>
                                                        <p>(12) were observed as they slowly grasped – or, as the case might be, bumped into – concepts that </p>
                                                        <p>(13) adults take for granted, as they refused, for instance, to concede that quantity is unchanged as</p>
                                                        <p>(14) water pours from a short stout glass into a tall thin one. Psychologists have since demonstrated </p>
                                                        <p>(15) that young children, asked to count the pencils in a pile, readily report the number of blue or red </p>
                                                        <p>(16) pencils, but must be coaxed into finding the total. Such studies have suggested that the </p>
                                                        <p>(17) rudiments of mathematics are mastered gradually, and with effort. They have also suggested </p>
                                                        <p>(18) that the very concept of abstract numbers – the idea of a oneness, a twoness, a Threeness that </p>
                                                        <p>(19) applies to any class of objects and is a prerequisite for doing anything more mathematically </p>
                                                        <p>(20) demanding than setting a table – is itself far from innate.</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php elseif($soal['no'] == 41) :?>
                                            <div class="col-12 mb-3">
                                                <ul class="list-group">
                                                    <li class="list-group-item"><center><i>Question 41 through 50 are based on the following passage</i></center></li class="list-group-item">
                                                    <li class="list-group-item">
                                                        <p>(1) Botany, the study of plans, occupies a peculiar position in the history of human knowledge. For </p>
                                                        <p>(2) many thousands of years it was the one field of awareness about which humans had anything </p>
                                                        <p>(3) more than the vaguest of insights. It is impossible to know today just what our Stone Age </p>
                                                        <p>(4) ancestors knew about plants, but from what we can observe of preindustrial societies that still </p>
                                                        <p>(5) exist, a detailed learning of plants and their properties must be extremely ancient. This is logical. </p>
                                                        <p>(6) Plants are the basis of the food pyramid for all living things, even for other plants. They have </p>
                                                        <p>(7) always been enormously important to the welfare of people, not only for food, but also for </p>
                                                        <p>(8) clothing, weapons, tools, dyes, medicines, shelter, and a great many other purposes. Tribes</p>
                                                        <p>(9) living today in the jungles of the Amazon recognize literally hundreds of plants and know many </p>
                                                        <p>(10) properties of each. To them botany, as such, has no name and is probably not even recognized </p>
                                                        <p>(11) as a special branch of “knowledge” at all.</p>
                                                        <br>
                                                        <p>(12) Unfortunately, the more industrialized we become the farther away we move from direct </p>
                                                        <p>(13) contact with plants, and the less distinct our knowledge of botany grows. Yet everyone comes </p>
                                                        <p>(14) unconsciously on an amazing amount of botanical knowledge, and few people will fail to </p>
                                                        <p>(15) recognize a rose, an apple, or an orchid. When our Neolithic ancestor, living in the middle East </p>
                                                        <p>(16) about 10,000 years ago, discovered that certain grasses could be harvested and their seeds </p>
                                                        <p>(17) planted for richer yields the next season, the first great step in a new association of plants and </p>
                                                        <p>(18) humans was taken. Grains were discovered and from them flowed the marvel of agriculture: </p>
                                                        <p>(19) cultivated crops. From then on, humans would increasingly take their living from the controlled </p>
                                                        <p>(20) production of a few plants, rather than getting a little here and a little there from many varieties </p>
                                                        <p>(21) that grew wild – and the accumulated knowledge of tens of thousands of years of experience </p>
                                                        <p>(22) and intimacy with plants in the wild would begin to fade away.</p>
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