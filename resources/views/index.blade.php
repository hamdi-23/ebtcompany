<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>East Blue Tech</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,300;0,400;0,600;1,300&display=swap" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/bootstrap-icons.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/magnific-popup.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/css/tooplate-tween-agency.css') }}" rel="stylesheet">

    <!--

Tooplate 2128 Tween Agency

https://www.tooplate.com/view/2128-tween-agency

-->

</head>

<body>

    <nav class="navbar fixed-top navbar-expand-lg">
        <div class="container">

            <a href="/" class="navbar-brand">
                <img src="{{ asset('assets/images/ebt/EBTECH1.png') }}" class="img-fluid work-image" alt="east blue tech" style="width: 70px">
                East Blue Tech
            </a>

            {{-- <a href="#" class="custom-btn btn btn-lg d-lg-none ms-auto me-4">
                Download
                <i class="bi-download ms-2"></i>
            </a> --}}

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-lg-5">
                    <li class="nav-item">
                        <a class="nav-link" href="#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#section_2">Tentang EB Tech</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#section_3">Layanan EB Tech</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#section_4">Project EB Tech</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#section_5">Harga</a>
                    </li> --}}

                    <li class="nav-item">
                        <a class="nav-link" href="#section_6">Kontak</a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>

    <main>

        <section class="hero d-flex justify-content-center align-items-center" id="section_1">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="heroText">
                            <h1 class="text-white mb-lg-5 mb-4">Berkembang dan Membangun bersama untuk Masa Depan Lebih Baik</h1>
                            <!-- <div class="col-lg-4 d-flex align-items-center justify-content-center" data-aos="zoom-in" data-aos-delay="200">
                                <a href="https://youtu.be/qgy7vEje5-w" class="venobox play-btn" data-vbtype="video" data-autoplay="true" target="_blank">teest</a>
                            </div> -->
                            {{-- <a href="https://youtu.be/qgy7vEje5-w" class="venobox play-btn play-icon-wrap d-flex align-items-center" data-autoplay="true" target="_blank">
                                <i class=" bi-play play-icon"></i>
                                <small>Yutube</small>
                            </a> --}}
                        </div>
                    </div>

                </div>
            </div>

            <div class="overlay"></div>
        </section>

        <section class="about section-padding" id="section_2">
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12">
                        <h2 class="mb-5">East Blue Tech</h2>
                    </div>

                    <div class="col-lg-4 col-12 ms-lg-auto mb-5 mb-lg-0">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-intro-tab" data-bs-toggle="tab" data-bs-target="#nav-intro" type="button" role="tab" aria-controls="nav-intro" aria-selected="true">Visi & Misi Perusahaan</button>

                                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Profil</button>

                                <button class="nav-link" id="nav-faq-tab" data-bs-toggle="tab" data-bs-target="#nav-faq" type="button" role="tab" aria-controls="nav-faq" aria-selected="false">FAQs</button>
                            </div>
                        </nav>
                    </div>

                    <div class="col-12">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-intro" role="tabpanel" aria-labelledby="nav-intro-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                        <img src="{{ asset('assets/images/23.jpg') }}" class="img-fluid" alt="east blue tech">
                                    </div>

                                    <div class="col-lg-5 col-12 m-auto">
                                        <h3 class="mb-3">Mari Tumbuh Bersama</h3>

                                        <p align="justify">Visi kami adalah untuk menjadi pemimpin di pasar solusi teknologi dan jasa inovatif, dan menjadi mitra pilihan bagi perusahaan-perusahaan besar di seluruh dunia.</p>

                                        <p align="justify">Misi kami adalah untuk terus menciptakan solusi teknologi dan jasa yang menghasilkan nilai bagi klien kami dan membantu mereka mencapai tujuan bisnis mereka.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-lg-5 col-12 m-auto">
                                        <h3 class="mb-3">EBT "EAST BLUE TECH"</h3>

                                        <p align="justify">East Blue Tech adalah perusahaan start up yang berfokus pada pengembangan teknologi dan jasa inovatif untuk membantu perusahaan meningkatkan efisiensi, memaksimalkan profitabilitas, dan mempercepat pertumbuhan bisnis. Kami memiliki tim yang terdiri dari ahli teknologi dan bisnis yang berdedikasi untuk menciptakan solusi kustom yang dirancang sesuai kebutuhan spesifik perusahaan kami.</p>

                                        <ul class="social-icon mt-lg-5 mt-3">
                                            <li class="me-3"><strong>Di mana mencarinya?</strong></li>

                                            <li><a target="_blank" href="https://www.instagram.com/eastbluetech_/" class="social-icon-link bi-instagram"></a></li>

                                            <li><a target="_blank" href="https://www.facebook.com/ebtTekno" class="social-icon-link bi-facebook"></a></li>

                                            <li><a href="mailto:eastbluetech@gmail.com" class="social-icon-link bi-envelope"></a></li>

                                            <li><a href="https://wa.me/6288298864380" class="social-icon-link bi-whatsapp"></a></li>
                                        </ul>
                                    </div>

                                    <div class="col-lg-6 col-12 mt-lg-0 mt-4">
                                        <img src="{{ asset('assets/images/EBT.jpg') }}" class="img-fluid" alt="east blue tech">
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="nav-faq" role="tabpanel" aria-labelledby="nav-faq-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-12 mb-lg-0 mb-4">
                                        <img src="{{ asset('assets/images/1.jpeg') }}" class="img-fluid" alt="east blue tech">
                                    </div>

                                    <div class="col-lg-5 col-12 m-auto">
                                        <h3 class="mb-3">Pertanyaan yang Sering Diajukan</h3>

                                        <div class="accordion" id="accordionGeneral">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralTwo" aria-expanded="false" aria-controls="accordionGeneralTwo">
                                                        Apa saja layanan yang tersedia?
                                                    </button>
                                                </h2>

                                                <div id="accordionGeneralTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionGeneral">

                                                    <div class="accordion-body">
                                                        <p class="large-paragraph">Kami menyediakan layanan pemasaran digital lengkap untuk berbagai aspek kehadiran web dan media sosial perusahaan Anda. Anda memiliki ketenangan pikiran 100% untuk perusahaan Anda dengan bekerja bersama kami.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingThree">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionGeneralThree" aria-expanded="false" aria-controls="accordionGeneralThree">
                                                        Berapa banyak proyek yang berhasil?
                                                    </button>
                                                </h2>

                                                <div id="accordionGeneralThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionGeneral">

                                                    <div class="accordion-body">
                                                        <p class="large-paragraph text-justify">Kami memiliki lebih dari 280+ proyek sukses untuk berbagai perusahaan. Ada pengalaman hebat bekerja sama dengan klien yang berbeda di seluruh dunia.</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="services section-padding" id="section_3">
            <div class="container">

                <h2 class="text-center">Layanan Kami</h2>
                <p class="text-center"><b>Layanan yang kita tawarkan untuk anda</p>

                <div class="row">
                    <div class="col-lg-6 col-12  bg-success p-0">
                        <div class="services-info custom-icon-top paddingText bg-success">
                            <h4 class="text-white">Mobile Apps</h4>
                            <img src="{{ asset('assets/images/services/mobile_platform.svg') }}" class="img-fluid services-image">
                            {{-- <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a> --}}
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 bg-secondary p-0">
                        <div class="services-info custom-icon-top paddingText bg-secondary ">
                            <h4 class="text-white">Website Apps</h4>
                            <img src="{{ asset('assets/images/services/web_interface.svg') }}" class="img-fluid services-image" alt="east blue tech">
                            {{-- <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-12  bg-warning p-0">
                        <div class="services-info custom-icon-top paddingText bg-warning ">
                            <h4 class="text-white">AI</h4>
                            <img src="{{ asset('assets/images/services/artificial_intelligence.svg') }}" class="img-fluid services-image" alt="east blue tech">
                            {{-- <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-12  bg-danger p-0">
                        <div class="services-info custom-icon-right paddingText bg-danger order-lg-0 order-sm-2">
                            <h4 class="text-white">Desain Grafis</h4>
                            <img src="{{ asset('assets/images/services/ux_design.svg') }}" class="img-fluid services-image" alt="east blue tech">

                            {{-- <a class="custom-btn custom-bg-dark btn" href="#">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="work section-padding" id="section_4">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="mb-5 text-center">Selected Projects</h2>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/1.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/1.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Sistem Cerdas</small>

                                <h4 class="work-title">Machine Learning</h4>
                            </div>
                        </div>

                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/2.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/2.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Website</small>

                                <h4 class="work-title">Pembayaran SPP</h4>
                            </div>
                        </div>
                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/5.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/5.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Website</small>

                                <h4 class="work-title">Company Profil</h4>
                            </div>
                        </div>
                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/10.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/10.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Sistem Cerdas</small>

                                <h4 class="work-title">Klasifikasi</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/3.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/3.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Website</small>

                                <h4 class="work-title">TOEFL</h4>
                            </div>
                        </div>

                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/4.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/4.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">

                                <small class="work-tag bg-white shadow-lg">Website</small>

                                <h4 class="work-title">Sistem Akademik</h4>
                            </div>
                        </div>

                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/6.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/6.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">


                                <small class="work-tag bg-white shadow-lg">Website</small>

                                <h4 class="work-title">Absensi</h4>
                            </div>
                        </div>

                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/11.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/11.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">

                                <small class="work-tag bg-white shadow-lg">Website</small>

                                <h4 class="work-title">PMB</h4>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-12">
                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/7.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/7.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Web Development</small>

                                <h4 class="work-title">Try Out</h4>
                            </div>
                        </div>

                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/8.png') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/8.png') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Branding</small>

                                <small class="work-tag bg-white shadow-lg">Web Development</small>

                                <h4 class="work-title">Try Out SNBT</h4>
                            </div>
                        </div>

                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/9.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/9.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Website</small>

                                <h4 class="work-title">Kriptografi</h4>
                            </div>
                        </div>

                        <div class="work-thumb mb-4">
                            <div class="work-image-wrap">
                                <a href="{{ asset('assets/images/work/12.jpg') }}" class="image-popup">
                                    <img src="{{ asset('assets/images/work/12.jpg') }}" class="img-fluid work-image" alt="east blue tech">
                                </a>
                            </div>

                            <div class="work-text-info">
                                <small class="work-tag bg-white shadow-lg">Website</small>

                                <h4 class="work-title">Dunia Kita Cafe Resto</h4>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>

        {{-- <section class="pricing section-padding" id="section_5">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-white mb-5 text-center">Tween Marketing Plans</h2>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="pricing-plan bg-white">
                            <div class="d-flex flex-wrap align-items-center pricing-header">
                                <i class="pricing-icon bi-person"></i>

                                <div class="pricing-name">
                                    <h4>Sufficient</h4>
                                </div>

                                <div class="pricing-price">
                                    <h4>$4,600</h4>
                                </div>

                                <small class="pricing-recommend">Recommended Plan</small>
                            </div>

                            <div class="pricing-body">
                                <h5 class="mb-3">Managed Features</h5>

                                <ul class="pricing-list">
                                    <li class="pricing-list-item">Fully Digital</li>
                                    <li class="pricing-list-item">Social Media Managements</li>
                                    <li class="pricing-list-item">Website Optimizations</li>
                                    <li class="pricing-list-item">24/7 Phone Calls and Emails</li>
                                </ul>

                                <h5 class="mt-lg-5 mt-4 mb-3">Small to Mid-size Businesses</h5>

                                <p>Everything you need for your digital marketing stuffs</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12 mt-lg-0 mt-5">
                        <div class="pricing-plan border-0 bg-white shadow-lg">
                            <div class="d-flex flex-wrap align-items-center pricing-header">
                                <i class="pricing-icon bi-briefcase"></i>

                                <div class="pricing-name">
                                    <h4>Complete</h4>
                                </div>

                                <div class="pricing-price">
                                    <h4>$8,200</h4>
                                </div>

                                <small class="pricing-recommend">Ecommerce Plan</small>
                            </div>

                            <div class="pricing-body">
                                <h5 class="mb-3">Fully Featured Work</h5>

                                <ul class="pricing-list">
                                    <li class="pricing-list-item">Completely Digital</li>
                                    <li class="pricing-list-item">Everything managed online</li>
                                    <li class="pricing-list-item">Full Ecommerce Features</li>
                                    <li class="pricing-list-item">24/7 Instant Video Chats</li>
                                </ul>

                                <h5 class="mt-lg-5 mt-4 mb-3">High-end Ecommerce Websites</h5>

                                <p>Fit for your company and ecommerce related stuffs</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="overlay dark-overlay"></div>
        </section> --}}

        <section class="section-padding" id="section_6">
            <div class="container">
                <div class="row">

                    {{-- <div class="col-lg-8 col-md-10 col-12 mx-auto">
                        <h2 class="mb-4 text-center">Let's chat</h2>

                        <form class="custom-form" role="form" action="" method="post">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12 my-2">
                                    <label class="mb-2" for="name">Full Name</label>

                                    <input type="text" name="name" id="name" class="form-control" required="">
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 my-2">
                                    <label class="mb-2" for="email">Email Address</label>

                                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" required="">
                                </div>

                                <div class="col-lg-4 col-md-6 col-12 my-2">
                                    <label class="mb-2" for="subject">How did you know about us?</label>

                                    <select class="form-select form-control" name="subject" id="subject">
                                        <option selected="">Choose a subject</option>
                                        <option value="web+search">Website Searches</option>
                                        <option value="social+media">Social Media</option>
                                        <option value="others">Others</option>
                                    </select>
                                </div>

                                <div class="col-12 my-2">
                                    <label class="mb-2" for="message">Tell us about the project</label>

                                    <textarea class="form-control" rows="5" id="message" name="message"></textarea>

                                    <button type="submit" class="form-control mt-4" id="submit">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div> --}}

                </div>
            </div>
        </section>

    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-12 mx-auto my-lg-0 my-4">
                    <h5 class="text-white mb-3">Layanan</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Mobile Apps</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Web Apps</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Artifical Intelligenci</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Desain Grafis</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-12">
                    <h5 class="text-white mb-3">Say Hi</h5>

                    <p class="text-white mb-1">Jl. Tarudan Widoro, Mredo, Bangunharjo, Kec. Sewon, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55188</p>

                    <p><a href="mailto:eastbluetech@gmail.com" class="footer-link">eastbluetech@gmail.com</a>
                        <p>
                </div>

                <div class="site-footer-bottom mt-2">
                    <div class="row pt-3">
                        <div class="col-lg-6 col-12">
                            <p class="copyright-text tooplate-link">Copyright © 2023 .
                        </div>
                        <div class="col-lg-3 col-12 ms-auto">
                            <ul class="social-icon">
                                <li><a target="_blank" href="https://facebook.com/ebtTekno" class="social-icon-link bi-facebook"></a></li>

                                {{-- <li><a href="https://twitter.com/search?q=tooplate" class="social-icon-link bi-twitter"></a></li> --}}

                                <li><a target="_blank" href="https://www.instagram.com/eastbluetech_/" class="social-icon-link bi-instagram"></a></li>

                                <li><a target="_blank" href="https://wa.me/6288298864380" class="social-icon-link bi-whatsapp"></a></li>

                                <li><a href="mailto:eastbluetech@gmail.com" class="social-icon-link bi-envelope"></a></li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.backstretch.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/magnific-popup-options.js') }}"></script>
    <script src="{{ asset('') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1200
        });
    </script>
</body>
</html>