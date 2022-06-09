<?php $ceks = $this->session->userdata('no_pendaftaran'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB Online | PONPES Mawaridussalam</title>
		<base href="<?php echo base_url();?>"/>

		<link rel="icon" href="assets/images/favicon.png" type="image/x-icon" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/faa.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom bxshad">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top"><img src="masa-logo.png" alt="Logo" width="30" style="position:absolute;margin-top:-10px;"> <span style="margin-left:35px;">PPDB Online</span> </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <!-- <li class="page-scroll">
                        <a href="#portfolio"><img src="masa-logo.png" alt="Logo" width="15"> Tentang Madrasah</a>
                    </li> -->
                    <li class="page-scroll">
                        <a href="#about"><i class="fa fa-info-circle"></i> Informasi</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#prosedur"><i class="fa fa-list"></i> Prosedur</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#jadwal"><i class="fa fa-calendar"></i> Jadwal</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact"><i class="fa fa-phone-square"></i> Kontak Kami</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
      <?php
      if (strtolower($this->uri->segment(1)) == 'logcs') {
        $this->load->view('web/login');
      } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12" >
                    <img class="img-responsive" src="masa-logo.png" style="margin-top:-15%;margin-bottom:-10px;" width="100">
                    <div class="intro-text"><br>
                        <span class="name shad" style="font-size:35px">PPDB ONLINE <br> PONDOK PESANTREN Mawaridussalam</span>
                        <br>
                        <div class="row">
                            <div class="col">
                        <p>(Mohon baca terlebih dahulu sebelum mendaftar)</p>
                        </div>
                        </div>
                      <?php if ($web_ppdb->status_ppdb == 'buka') {?>
                        
                        <br>
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online PONPES Mawaridussalam</h3> -->
                        <span>
                         <a href="pendaftaran" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp; Daftar</a>
												 <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;<?php if($ceks==''){echo "Login";}else{echo "Panel";} ?> Calon Santri</a>
												 <br>
											  </span>
                      <?php }else{ ?>
                        <span class="skills">
                        </span>
                        <br> <br>
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online PONPES Mawaridussalam</h3> -->
                        <span>
                         <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online ditutup</a>
												 <br>
											  </span>
                      <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Portfolio Grid Section -->
    <!-- <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tentang Madrasah</h2>
                    <hr class="star-primary">

                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 portfolio-item">
                    <a href="https://mawaridussalam.ponpes.id/" target="_blank" class="portfolio-link">
                        <div class="caption">
                            <div class="caption-content">
                                <i class="fa fa-search-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="masa-logo.png" class="img-thumbnail" alt=""><br><br>
                        <span class="btn btn-success btn-block">mawaridussalam.ponpes.id/</span>
                    </a>
                </div>

            </div>
        </div>
    </section> -->

    <!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Informasi Pendaftaran</h2>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2" style="text-align:justify">
                    <p>Pendaftaran tetap dibuka secara online dan juga dibuka langsung mendaftar di pesantren (on the spot) di pesantren mawaridussalam mulai pukul 09.00 sampai 17.00 WIB pada gelombang kedua. Pendaftar yang langsung ke pesantren di gelombang kedua dapat mengikuti ujian lisan langsung di pesantren.</p>
                </div>
                <div class="col-lg-4" style="text-align:justify">
                    <p>Bagi calon santri yang sudah melunasi pembayaran boleh mengikuti UJIAN TES MASUK PESANTREN MAWARIDUSSALAM. bagi yang mengikuti tahap cicilan maka harus melunasi pembayaran sebelum pelaksanaan ujian pada tanggal yang telah ditentukan.</p>
                </div>
                </div>
                <br>
                <div class="row">
                <div class="col-lg-12 text-center">
                <h3>Pembayaran</h3>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="text-align:justify">
                    <h4>Pembayaran dapat dilakukan sekali lunas atau dengan angsuran.</h4>
                    <ul class="list-unstyled">
                    <li><p><strong>A. Sekali Lunas</strong></p></li>
                    <ul>
                    <p><li>Tamatan SD/MI sebesar Rp. 7.690.000</li>
                    <li>Tamatan SMP/MTs dan pindahan sebesar Rp. 7.490.000</li></p></ul>
                    </ul>
                    <ul class="list-unstyled">
                    <li><p><strong>B. Angsuran</strong></p>
                    <p><em>Angsuran memiliki 3 tahap sebagai berikut :</em></li>
                    <ul>
                    <li>Pembayaran pertama Sebesar Rp. 3.000.000 dari tanggal 08 April s/d 29 April 2021</li>
                    <li>Pembayaran kedua Sebesar Rp. 2.000.000 dari tanggal 23 s/d 29 Mei 2021</li>
                    <li>Pembayaran ketiga Sebesar Rp. 2.690.000 (SD/MI) atau Rp. 2.490.000 (SMP/MTs) dari tanggal 30 Mei s/d 2 Juni 2021</li></p>
                    </ul>

                    <p><em>Pelunasan pembayaran dengan angsuran harus melihat tanggal pendaftaran</em>
                    <li>1. jika daftar tanggal 24 Mei 2021, maka harus membayar angsuran 1 dan 2 sekaligus.</li>
                    <li>2. jika daftar tanggal 31 Mei 2021, maka harus langsung melunasi pembayaran sampai tanggal 1 Juni 2021</li>
                    <li>3. Status pembayaran akan terlihat pada login calon santri dengan keterangan ( Lunas : Sudah Bayar, Cicilan/belum bayar : Belum Bayar)</li>
                    <li>4. Jika tidak melunasi pembayaran sampai tanggal 1 Juni 2021, maka tidak dapat mengikuti ujian.</li></p>
                    </ul>
                </div>
            </div>
            <br>
                <div class="row">
                <div class="col-lg-12 text-center">
                <h3>BUMP</h3>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="text-align:justify">
                    <h4>Apa yang didapat dari uang pendaftaran tersebut ?</h4>
                    <ul class="list-unstyled">
                    <li>dengan jumlah 7.690.000 / 7.490.000 yang dibayar, sudah termasuk :</li>
                    <ul>
                    <li>uang bulanan 1 bulan</li>
                    <li>buku tulis</li>
                    <li>buku paket</li>
                    <li>seragam pramuka</li>
                    <li>seragam olahraga</li>
                    <li>baju batik</li>
                    <li>lemari dan</li>
                    <li>Kasur.</li>
                    </ul>
                    </ul>
                </div>
                </div>
            <br>
                <div class="row">
                <div class="col-lg-12 text-center">
                <h3>KMI</h3>
                    <hr class="star-light">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2" style="text-align:justify">
                    <h4>Apa yang akan diujikan untuk seleksi calon santri ?</h4>
                    <ul class="list-unstyled">
                    <li>Ujian Lisan</li>
                    <ul>
                    <li>Psikotest</li>
                    <li>Ibadah</li>
                    <li>Doa Sehari-hari</li>
                    <li>Imla' (menulis arab)</li>
                    </ul>
                    <li>Ujian Tulis</li>
                    <ul>
                    <li>Matematika</li>
                    <li>Bahasa Indonesia</li>
                    <li>Imla'</li>
                    </ul>
                    </ul>
                    <p class="h4">Ujian tulis akan dilaksanakan setelah mukim di pesantren dan akan diajarkan ketiga materi ujian tulis selama mukim.</p>
                </div>
                </div>
                
                
            </div>
        </div>
    </section>


<section class="info" id="prosedur">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Prosedur Pendaftaran</h2>
                    <hr class="star-primary">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12">
                            <h4>A. Lakukan pendaftaran secara online</h4>
                            <p class="h5">Klik tombol daftar dan Isilah kolom yang tersedia dengan data yang benar</p>
                            <p class="h5">Bagi yang sudah mendaftar dapat melihat status pendaftarannya pada login calon santri dengan klik tombol login calon santri</p>
                            <?php if ($web_ppdb->status_ppdb == 'buka') {?>
                        
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online PONPES Mawaridussalam</h3> -->
                        <span>
                         <a href="pendaftaran" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp; Daftar</a>
												 <a href="logcs" class="btn btn-success btn-lg" style="width:300px;margin:5px;"><i class="fa fa-users faa-pulse animated"></i> &nbsp;<?php if($ceks==''){echo "Login";}else{echo "Panel";} ?> Calon Santri</a>
												 <br>
											  </span>
                      <?php }else{ ?>
                        <span class="skills">
                        </span>
                        <br> <br>
                        <hr class="star-light">
												<br>
                        <!-- <h3>Login Calon Siswa Terdaftar di PPDB Online PONPES Mawaridussalam</h3> -->
                        <span>
                         <a href="javascript:void(0);" class="btn btn-success btn-lg" style="margin:5px;"><i class="fa fa-file faa-pulse animated"></i> &nbsp;Pendaftaran PPDB Online ditutup</a>
												 <br>
											  </span>
                      <?php } ?>
                            <br><br><br>
                           <h5>B. Prosedur Registrasi Ulang di Pesantren ketika mukim.</h5>
                           <ul class="list-unstyled">
                           <li>1. Datangi kantor panitia untuk registrasi ulang pada POS yang telah disediakan dengan membawa:</li>
                            <ul>
                                <li>FC Surat keterangan Hasil Ujian = 3 rangkap</li>
                                <li>FC Kartu NISN (Nomor Induk Siswa Nasional) = rangkap</li>
                                <li>FC Kartu Keluarga = 3 rangkap</li>
                                <li>Pas Fhoto 3×4 dan 4×6 = masing-masing 3 rangkap</li>
                                <li>Materai 6000 = 3 buah</li>
                                </ul>
                            <li>2. Menandatangani berkas dan surat yang akan diberikan panitia</li>
                            <li>3. Masuk ke asrama yang akan diberikan oleh panitia di POS atau lihat dari Website</li>
                            <li>Selesai.</li>
                           </ul>
                        </div>
                    </div>
                        
                    <div class="row">
                    <br>
                    <div class="col-lg-12 col-lg-offset-2" style="text-align:justify">
                    <h4>Video panduan pendaftaran online</h4>
                    <iframe width="640" height="360" src="https://www.youtube.com/embed/w3rRRN9KM8w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

<section class="success" id="jadwal">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Jadwal Pendaftaran</h2>
                    <hr class="star-primary">

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="margin-top:-10px;">
                    <div class="col-md-2"></div>
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="col-lg-12 text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">No</th>
                                    <th scope="col" class="text-center">Kegiatan</th>
                                    <th scope="col" class="text-center">Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Pendaftaran dibuka (Tahap 1)</td>
                                    <td>08 s/d 29 April 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Pendaftaran dibuka (Tahap 2)</td>
                                    <td>23 Mei 2021 s/d 02 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td>Pendaftaran ditutup</td>
                                    <td>02 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">4</th>
                                    <td>Mulai Mukim</td>
                                    <td>29 Mei 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">5</th>
                                    <td>Ujian Masuk</td>
                                    <td>03 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">6</th>
                                    <td>Tes Kesehatan</td>
                                    <td>04-05 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">7</th>
                                    <td>Pengumuman Kelulusan</td>
                                    <td>06 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">8</th>
                                    <td>Penempatan Kelas</td>
                                    <td>06 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">9</th>
                                    <td>Akhir Liburan Santri Lama</td>
                                    <td>07 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">10</th>
                                    <td>Pembukaan Tahun Pendidikan Baru</td>
                                    <td>Juni 2020</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">11</th>
                                    <td>Apel Tahunan</td>
                                    <td>20 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">12</th>
                                    <td>Halal Bihalal Wali Santri</td>
                                    <td>27 Juni 2021</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">13</th>
                                    <td>Arena Gembira</td>
                                    <td>2021</td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
		<section id="contact">
        <div class="container">
            <div class="row" style="margin-top:-100px;margin-bottom:-105px;">
                <div class="col-lg-12 text-center">
                  <br><br>
                    <h2>Kontak Kami</h2>
                    <hr class="star-light">
                    <div class="row">
                    <div class="col-lg-8 col-lg-offset-2" style="text-align:justify">
                        <h5 class="text-center">Contact Person pendaftaran</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                <td scope="col">1</td>
                                <td scope="col">Ust. Bayu Satria Damanik</td>
                                <td scope="col">0812-3197-5037</td>
                                <td scope="col">Phone & WhatsApp</td>
                                </tr>
                                <tr>
                                <td scope="col">2</td>
                                <td scope="col">Ust. Ariful Haq</td>
                                <td scope="col">0813-7676-2552</td>
                                <td scope="col">Phone & WhatsApp</td>
                                </tr>
                                <tr>
                                <td scope="col">3</td>
                                <td scope="col">Ust. Imam Punantara</td>
                                <td scope="col">0823-6197-3729</td>
                                <td scope="col">Phone & WhatsApp</td>
                                </tr>
                                <tr>
                                <td scope="col">4</td>
                                <td scope="col">Ust. Yusuf Rasyidin</td>
                                <td scope="col">0852-7510-2570</td>
                                <td scope="col">Phone & WhatsApp</td>
                                </tr>
                                <tr>
                                <td scope="col">5</td>
                                <td scope="col">Usth. Ainun mardiah</td>
                                <td scope="col">0853-6266-4482</td>
                                <td scope="col">Phone & WhatsApp</td>
                                </tr>
                            </thead>
                            
                            </table>
                    </div>
                <div class="col-lg-8 col-lg-offset-2" style="text-align:justify">
                    <h5 class="text-center">Contact Person Pembayaran</h5>
                    <table class="table">
                        <thead>
                            <tr>
                            <td scope="col">1</td>
                            <td scope="col">Usth. Tri Lestari</td>
                            <td scope="col">0853-4798-7981</td>
                            <td scope="col">Phone & WhatsApp</td>
                            <td scope="col">Pembayaran Putri</td>
                            </tr>
                            <tr>
                            <td scope="col">2</td>
                            <td scope="col">Usth. Aisyah Rangkuti</td>
                            <td scope="col">0822-6766-8567</td>
                            <td scope="col">Phone & WhatsApp</td>
                            <td scope="col">Pembayaran Putra</td>
                            </tr>
                          </thead>
                        </table>
                        <p class="h6"># Mohon kirim pesan lewat whatsapp bila nomor yang dituju tidak menerima panggilan. dan diharap untuk tidak berkonsultasi lebih dari 1 nomor agar tidak doble data yang kami terima.</p>
                </div>
                </div>
                    <h5>
                        Alamat
                    </h5>
                    <p class="h5">Jl. Pringgan Dusun III Desa Tumpatan Nibung Kec. Batang Kuis Kab. Deli Serdang SUMUT - 20372</p>
                    <br><br><br>

            </div>
        </div>
    </section>



    <!-- Footer -->
    <footer class="text-center">

        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; <a href="https://mawaridussalam.ponpes.id/" target="_blank">masa.com/</a> <?php echo date('Y'); ?> | IT Development
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll hidden-sm hidden-xs hidden-lg hidden-md">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>


    <!-- jQuery -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>
    <script src="assets/js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/freelancer.min.js"></script>

</body>
</html>
