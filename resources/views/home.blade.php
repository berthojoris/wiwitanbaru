@extends('layouts.main_layout')

@section('content')
<?php
    if (isset($_GET['lang'])) {
            $lang = $_GET['lang'];
        } else {
            $lang = "";
        }
    if($lang == "in"){
?>

<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<header href="home" class="header navbar-fixed-top">
    <div class="navbar navbar-default main-menu">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand"><img src="{{ asset('template/main/images/logo3.png') }}" alt="Logo" /></a>
                <!-- <a class="navbar-brand" href="index.html"></a> -->
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#works" class="">Tentang</a></li>
                    <li><a href="#program" class="">Program</a></li>
                    <li><a href="#message" class="">Kontak</a></li>
                    <!--<li><a href="https://goo.gl/forms/OV15IF1z4sinfmkj1" class="">Registrasi</a></li>-->
                    <li><a href="http://registrasi.wiwitanbaru.com/" class="" target="_blank">Registrasi</a></li>
                    <li class="langflag">
                        <div>
                            <a href="#" onclick="changeLang('in')" style="border: 0.3px black solid" class="flag-icon flag-icon-id"></a>&nbsp
                            <a href="#" onclick="changeLang('en')" style="border: 0.3px black solid" class="flag-icon flag-icon-us"></a>&nbsp
                            <a href="#" onclick="changeLang('jp')" style="border: 0.3px black solid" class="flag-icon flag-icon-jp"></a>
                        </div>
                    </li>
                        <!--<select id="selectLanguage" onchange="switchLanguage()">
                            <option value="english"><div class="flag-icon flag-icon-us"></div>English</option>
                            <option value="indonesia" selected><span class="flag-icon flag-icon-id"></span>Indonesia</option>
                            <option value="japanese">Japanese</option>
                        </select>-->
                </ul>
            </div>
        </div>
    </div> <!-- end of navbar -->
</header>

<section id="home" class="bbggimage">
    <div class="header-image homepage2banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 hmheading-text wow zoomIn" data-wow-duration=".5s">
                    <img src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div> <!-- end of row -->
            <div class="scrolldown">
                <a href="#works" class="scroll_btn"></a>
            </div>
        </div> <!-- end of container -->
    </div>
</section>


<!-- Our Works Section -->

<section id="works" class="center-content">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img src="{{ asset('template/main/images/skybuild.png') }}" height="400px" height="400px" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>Tentang Wiwitan Baru</h1>
                    <p>Kami merupakan lembaga pelatihan bahasa Jepang khusus bagi pemagang ahli keperawatan/caregiver sebelum berangkat ke Jepang.</p>

                    <p>Kami berdiri pada 17 April 2017.</p>

                    <p>Kami memiliki filosofi bahwa pemagang harus dibentuk agar tidak hanya kompeten dalam keahliannya, akan tetapi juga memiliki karakter yang baik dan dapat berkompetisi secara global.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="works_2">
    <div class="container">
        <div class="row">
            <div class="main_description_second_contant">
                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="1.5s">
                    <div class="second_heading_text top-margin">
                        <h1 style="text-align: center">Visi dan Misi</h1>
                    </div>

                    <div class="right_desc_bottom_text">
                        <div class="right_single_bottom_text">
                            <i class="fa fa-shield"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>Visi</h6>
                                <p>Memberikan pelatihan berlandaskan asas kemanusiaan, untuk menghasilkan tenaga pemagang yang sejahtera dan kompetitif sehingga dapat memberikan kontribusi terhadap personal, keluarga dan negara.</p>
                            </div>
                        </div>

                        <div class="right_single_bottom_text">
                            <i class="fa fa-css3"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>Misi</h6>
                                <ul>
                                    <li>
                                        <p>• Mendidik tenaga kerja yang ahli dan kompeten serta memiliki mental yang kuat.</p>
                                    </li>
                                    <li>
                                        <p>• Memastikan para pemagang mendapatkan perlakuan yang layak selama bertugas.</p>
                                    </li>
                                    <li>
                                        <p>• Mempersiapkan peserta untuk kegiatan setelah permagangan usai saat kembali ke Indonesia.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6 col-sm-6">
                    <div class="right_desc_img center-content wow fadeInRight" data-wow-duration="1.5s">
                        <img src="{{ asset('template/main/images/caregiver.jpg') }}" alt="" />

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="center-content">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 50%; height: 50%;" src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>Layanan</h1>
                </div>
                <div class="right_desc_bottom_text">
                    <div class="right_single_bottom_text">
                        <div style="text-align: left;" class="right_bottom_description">
                            <ul>
                                <li>
                                    <p>• Pelatihan Bahasa Jepang N4 dan N3 bagi Pemagang Ahli Keperawatan dan Caregiving Indonesia.</p>
                                </li>
                                <li>
                                    <p>• Pengiriman Pemagang Ahli Keperawatan dan Caregiving Indonesia.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section  class="business-talking"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>Program</h2>
        </div>
    </div>

</section>
<!-- Video Section -->


<!-- Description Section -->
<section id="program">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 50%; height: 50%;" src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>Mengenai Program</h1>
                </div>
                <div class="right_desc_bottom_text">
                    <p>Program Pelatihan Bahasa Jepang kami terdiri atas Bahasa Jepang untuk percakapan dasar sehari-hari, dan kosakata Bahasa Jepang dasar mengenai keperawatan/caregiving.</p>

                    <p>Program akan berlangsung selama antara 3 sampai 6 bulan, dengan memfokuskan pada materi Bahasa Jepang dasar sehari-hari selama 2 bulan pertama. Apabila calon pemagang telah memiliki sertifikat JLPT N3, maka lini masa program untuk calon pemagang tersebut akan dipersingkat.</p>

                    <p>Setelah tiba di Jepang, akan ada pelatihan pasca kedatangan selama sekitar satu bulan atau lebih yang diadakan oleh organisasi penerima (AO). Setelah itu, kontrak akan diberlakukan dan program pemagangan di institusi tujuan akan dimulai.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="works_2" style="background: white">
    <div class="container">
        <div class="row">
            <div class="pricing_heading_text center-content">
                <h1>Alur Program (Pra-Keberangkatan)</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/fopprei.png') }}" alt=""></a>
            </div>

            <div class="pricing_heading_text center-content">
                <h1>Alur Program (Pasca-Kedatangan)</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/fopproi.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section id="works_2">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 90%; height: 90%;" src="{{ asset('template/main/images/takingtest.jpg') }}" width="800px" height="531px" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div style="margin:0 auto;" class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>Apa itu JLPT?</h1>
                    <p>JLPT merupakan singkatan dari Japanese Language Proficiency Test (Ujian Kemampuan Bahasa Jepang). Ujian ini diadakan oleh Japan Foundation di seluruh dunia dan merupakan salah satu sertifikasi kemampuan Bahasa Jepang yang diakui di hampir semua lembaga dan perusahaan Jepang.</p>

                    <p>JLPT memiliki 5 tingkatan yang dimulai dari N5 sebagai yang paling rendah, dan diakhiri dengan N1 sebagai yang paling tinggi.</p>

                    <p>Untuk dapat mengikuti progran pemagangan caregiving di Jepang, calon pemagang harus memiliki sertifikat JLPT N4 atau N3 (lebih diutamakan) yang setara dengan tingkat Bahasa Jepang dasar sehari-hari.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="business-talking2"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>Kontak</h2>
        </div>
    </div>

</section>

<!-- message section -->

<section id="message" class="main-section contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>Kantor Kami</h2>
                        <p>Jl. Goalpara no. 5 RT. 001 RW. 006 , Desa/Kec. Sukaraja, Kab. Sukabumi 43192</div>
                </div>
                <!--<div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>Telepon</h2>
                        <p>+62-821-2991-5819</div>
                </div>-->
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>E-mail</h2>
                        <p>hello@wiwitanbaru.com</div>
                </div>
            </div>


        </div>


    </div> <!-- end of container -->
</section>

<footer id="footer" class="center-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="copyright_text">
                    <p class=" wow zoomIn" data-wow-duration="1s">Copyright © 2017. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
    }else if($lang == "jp"){
?>

<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<header href="home" class="header navbar-fixed-top">
    <div class="navbar navbar-default main-menu">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand"><img src="{{ asset('template/main/images/logo3.png') }}" alt="Logo" /></a>
                <!-- <a class="navbar-brand" href="index.html"></a> -->
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#works" class="">機関</a></li>
                    <li><a href="#program" class="">プログラム</a></li>
                    <li><a href="#message" class="">問い合わせ</a></li>
                    <li class="langflag">
                        <div>
                            <a href="#" onclick="changeLang('in')" style="border: 0.3px black solid" class="flag-icon flag-icon-id"></a>&nbsp
                            <a href="#" onclick="changeLang('en')" style="border: 0.3px black solid" class="flag-icon flag-icon-us"></a>&nbsp
                            <a href="#" onclick="changeLang('jp')" style="border: 0.3px black solid" class="flag-icon flag-icon-jp"></a>
                        </div>
                    </li>
                        <!--<select id="selectLanguage" onchange="switchLanguage()">
                            <option value="english"><div class="flag-icon flag-icon-us"></div>English</option>
                            <option value="indonesia" selected><span class="flag-icon flag-icon-id"></span>Indonesia</option>
                            <option value="japanese">Japanese</option>
                        </select>-->
                </ul>
            </div>
        </div>
    </div> <!-- end of navbar -->
</header>

<section id="home" class="bbggimage">
    <div class="header-image homepage2banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 hmheading-text wow zoomIn" data-wow-duration=".5s">
                    <img src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div> <!-- end of row -->
            <div class="scrolldown">
                <a href="#works" class="scroll_btn"></a>
            </div>
        </div> <!-- end of container -->
    </div>
</section>


<!-- Our Works Section -->

<section id="works" class="center-content">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>機関について</h1>
                    <p>ウィウィタン・バル・スカブミ職業訓練機関は、熟練しただけでなく、世界的に競争できる優れた特性を持つ技能実習生を生み出すという理念で２０１７年４月１７日に成立され、インドネシアのジャワ島を拠点とする日本介護技能実習生の母国日本語教育センターです。</p>

                </div>
            </div>
        </div>
    </div>
</section>


<section id="works_2">
    <div class="container">
        <div class="row">
            <div class="main_description_second_contant">
                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="1.5s">
                    <div class="second_heading_text top-margin">
                        <h1 style="text-align: center">ビジョン＆ミッション</h1>
                    </div>

                    <div class="right_desc_bottom_text">
                        <div class="right_single_bottom_text">
                            <i class="fa fa-shield"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>ビジョン</h6>
                                <p>人道主義に基づく日本語トレーニングを行い、個人・家族・国に貢献できるように、豊かで競争力のある技能実習生を造ります。</p>
                            </div>
                        </div>

                        <div class="right_single_bottom_text">
                            <i class="fa fa-css3"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>ミッション</h6>
                                <ul>
                                    <li>
                                        <p>• 精神力・競争力のある熟練した実習生を育成する。</p>
                                    </li>
                                    <li>
                                        <p>• 実習生が適切に待遇されるようにする。</p>
                                    </li>
                                    <li>
                                        <p>• 実習修了後の帰国後に就職をできるよう、実習生を準備させる。</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6 col-sm-6">
                    <div class="right_desc_img center-content wow fadeInRight" data-wow-duration="1.5s">
                        <img src="{{ asset('template/main/images/caregiver.jpg') }}" alt="" />

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="center-content">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 50%; height: 50%;" src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>専門</h1>
                </div>
                <div class="right_desc_bottom_text">

                        <div class="right_single_bottom_text">
                            <div style="text-align: left;" class="right_bottom_description">
                                <ul>
                                    <li>
                                        <p>• インドネシアの日本介護技能実習生向けのＮ４・Ｎ３レベルまでの日本語教育。</p>
                                    </li>
                                    <li>
                                        <p>• インドネシアから日本への介護技能実習生の送り出し。</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section  class="business-talking"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>プログラム</h2>
        </div>
    </div>

</section>
<!-- Video Section -->


<!-- Description Section -->
<section id="program">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 50%; height: 50%;" src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>プログラムについて</h1>
                    <p>母国日本語教育プログラムは基本的な日常生活日本語 と基本的な介護用語を中心とするプログラムです。</p>

                    <p><b>ウィウィタン・バル</b>では、３ヵ月～６ヵ月の教育期間の最初の２ヵ月は基本的な日常生活日本語を中心に勉強します。もし、実習生が既に日本語能力試験N3の資格を持っている場合、母国日本語教育期間が短縮されます。</p>

                    <p>入国後には、一ヶ月間以上の監理団体での講習があります。その後、契約が発効し、実習施設での実習期間が始まります。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="works_2" style="background: white">
    <div class="container">
        <div class="row">
            <div class="pricing_heading_text center-content">
                <h1>入国前のプログラムの流れ</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/fopprej.png') }}" alt=""></a>
            </div>

            <div class="pricing_heading_text center-content">
                <h1>入国後のプログラムの流れ</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/fopproj.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section class="business-talking2"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>問い合わせ</h2>
        </div>
    </div>

</section>

<!-- message section -->

<section id="message" class="main-section contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>機関の住所</h2>
                        <p>Jl. Goalpara no. 5 RT. 001 RW. 006 , Desa/Kec. Sukaraja, Kab. Sukabumi 43192</div>
                </div>
                <!--<div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>電話番号</h2>
                        <p>+62-821-2991-5819</div>
                </div>-->
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>メール</h2>
                        <p>hello@wiwitanbaru.com</div>
                </div>
            </div>


        </div>


    </div> <!-- end of container -->
</section>


<footer id="footer" class="center-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="copyright_text">
                    <p class=" wow zoomIn" data-wow-duration="1s">Copyright © 2017. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php
    }else{
?>

<div class='preloader'><div class='loaded'>&nbsp;</div></div>
<header href="home" class="header navbar-fixed-top">
    <div class="navbar navbar-default main-menu">

        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#home" class="navbar-brand"><img src="{{ asset('template/main/images/logo3.png') }}" alt="Logo" /></a>
                <!-- <a class="navbar-brand" href="index.html"></a> -->
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#works" class="menuLinks">About</a></li>
                    <li><a href="#program" class="menuLinks">Program</a></li>
                    <li><a href="#message" class="menuLinks">Contact</a></li>
                    <li><a href="http://registration.wiwitanbaru.com" target="_blank">Registration</a></li>
                    <li class="langflag">
                        <div>
                            <a href="#" onclick="changeLang('in')" style="border: 0.3px black solid" class="flag-icon flag-icon-id"></a>&nbsp
                            <a href="#" onclick="changeLang('en')" style="border: 0.3px black solid" class="flag-icon flag-icon-us"></a>&nbsp
                            <a href="#" onclick="changeLang('jp')" style="border: 0.3px black solid" class="flag-icon flag-icon-jp"></a>
                        </div>
                    </li>
                        <!--<select id="selectLanguage" onchange="switchLanguage()">
                            <option value="english"><div class="flag-icon flag-icon-us"></div>English</option>
                            <option value="indonesia" selected><span class="flag-icon flag-icon-id"></span>Indonesia</option>
                            <option value="japanese">Japanese</option>
                        </select>-->
                </ul>
            </div>
        </div>
    </div> <!-- end of navbar -->
</header>

<section id="home" class="bbggimage">
    <div class="header-image homepage2banner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12 hmheading-text wow zoomIn" data-wow-duration=".5s">
                    <img src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div> <!-- end of row -->
            <div class="scrolldown">
                <a href="#works" class="scroll_btn"></a>
            </div>
        </div> <!-- end of container -->
    </div>
</section>


<!-- Our Works Section -->

<section id="works" class="center-content">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img src="{{ asset('template/main/images/skybuild.png') }}" height="410px" height="410px" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>About Wiwitan Baru</h1>
                </div>
                <div class="right_desc_bottom_text">
                    <p>We are a Japanese language training center located in Java (Indonesia) which specializes in preparing Indonesian nursing and caregiving technical intern before their departure to Japan.</p>

                    <p>We are established on April 17th 2017.</p>

                    <p>Our philosophy is to create technical intern that not only skillful, but also having good characteristics that can compete globally.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="works_2">
    <div class="container">
        <div class="row">
            <div class="main_description_second_contant">
                <div class="col-md-6 col-sm-6 wow fadeIn" data-wow-duration="1.5s">
                    <div class="second_heading_text top-margin">
                        <h1 style="text-align: center">Vision & Mission</h1>
                    </div>

                    <div class="right_desc_bottom_text">
                        <div class="right_single_bottom_text">
                            <i class="fa fa-shield"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>Vision</h6>
                                <p>Provide training based on the principle of humanity to produce a prosperous and competitive technical intern so that they may able to contribute to their personal self, family and country.</p>
                            </div>
                        </div>

                        <div class="right_single_bottom_text">
                            <i class="fa fa-css3"></i>
                            <div style="text-align: left;" class="right_bottom_description">
                                <h6>Mission</h6>
                                <ul>
                                    <li>
                                        <p>• Educate expert, competitive, and mentally strong human resources.</p>
                                    </li>
                                    <li>
                                        <p>• Ensure that the intern receive proper treatment.</p>
                                    </li>
                                    <li>
                                        <p>• Prepare the intern to be employed in Indonesia after their internship program has finished.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="col-md-6 col-sm-6">
                    <div class="right_desc_img center-content wow fadeInRight" data-wow-duration="1.5s">
                        <img src="{{ asset('template/main/images/caregiver.jpg') }}" alt="" />

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="center-content">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>Specialty</h1>
                </div>
                <div class="right_desc_bottom_text">

                        <div class="right_single_bottom_text">
                            <div style="text-align: left;" class="right_bottom_description">
                                <ul>
                                    <li>
                                        <p>• N4 and N3 Japanese Language Training for Indonesian Nursing and Caregiving Technical Intern.</p>
                                    </li>
                                    <li>
                                        <p>• Sending Indonesian Nursing and Caregiving Technical Intern to Japan.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>

<section  class="business-talking"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>Program</h2>
        </div>
    </div>

</section>
<!-- Video Section -->


<!-- Description Section -->
<section id="program">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img src="{{ asset('template/main/images/thumbnail.png') }}" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>About The Program</h1>
                </div>
                <div class="right_desc_bottom_text">
                    <p>The Japanese Language Training Program consist of basic everyday Japanese conversation, and basic Japanese vocabulary within Caregiving/Nursing Industry.</p>

                    <p>The program will be held within the period of 3 to 6 month. The first 2 months will be focusing on learning the basic daily Japanese. If the intern has JLPT N3 certificate, then the program timeline will be shortened for her/him.</p>

                    <p>There will be post arrival training that will be held for approximately a month in Japan that held by the Accepting Organization. Thereafter, the contract will be activated and the internship program start.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="works_2" style="background: white">
    <div class="container">
        <div class="row">
            <div class="pricing_heading_text center-content">
                <h1>Flow of The Program (Pre-Departure)</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/foppree.png') }}" alt=""></a>
            </div>

            <div class="pricing_heading_text center-content">
                <h1>Flow of The Program (Post-Arrival)</h1>
            </div>

            <div align="center" style="margin-bottom: 20px; margin-top: 20px;">
                <a><img style="max-width:95%;" src="{{ asset('template/main/images/foppost.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</section>

<section id="works_2">
    <div class="container">
        <div class="row main_description">
            <div class="col-sm-6 col-xs-12">
                <div class="left_desc_img center-content wow fadeInLeft" data-wow-duration="1.5s">
                    <img style="width: 90%; height: 90%;" src="{{ asset('template/main/images/takingtest.jpg') }}" width="800px" height="531px" alt="" />
                </div>
            </div>
            <div class="col-sm-6">
                <div style="margin:0 auto;" class="right_desc_text top-margin wow fadeIn" data-wow-duration="1.5s">
                    <h1>What is JLPT?</h1>
                    <p>JLPT is an abbreviation for Japanese Language Proficiency Test. It is held by the Japan Foundation worldwide and has become one of a Japanese proficiency license that has been acknowledged by almost all Japan’s institution and companies.</p>

                    <p>JLPT has 5 level which started from N5 as the lowest until N1 as the highest.</p>

                    <p>To participate in the caregiving internship program in Japan, the intern must have N4 or N3 level of JLPT which is the equivalent of basic daily Japanese level.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="business-talking2"><!--business-talking-start-->
    <div class="business-talking-overlay">
        <div class="container">
            <h2>Contact</h2>
        </div>
    </div>

</section>

<!-- message section -->

<section id="message" class="main-section contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>Our Office</h2>
                        <p>Jl. Goalpara no. 5 RT. 001 RW. 006 , Desa/Kec. Sukaraja, Kab. Sukabumi 43192</div>
                </div>
                <!--<div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>Phone</h2>
                        <p>+62-821-2991-5819</div>
                </div>-->
                <div class="message_content">
                    <div class="message_heading_text center-content wow zoomIn" data-wow-duration="1s">
                        <h2>Mail</h2>
                        <p>hello@wiwitanbaru.com</div>
                </div>
            </div>


        </div>


    </div> <!-- end of container -->
</section>



<footer id="footer" class="center-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="copyright_text">
                    <p class=" wow zoomIn" data-wow-duration="1s">Copyright © 2017. All rights reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

    <?php
    }
?>


<!-- START SCROLL TO TOP  -->

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>
@endsection