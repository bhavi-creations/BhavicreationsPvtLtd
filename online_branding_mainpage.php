<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your website description">
    <meta name="keywords" content="your,keywords,here">
    <meta name="author" content="Your Name">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Bhavi Creations</title>
    <link rel="icon" href="assests/images/Bhavi_Creations/best_digital_marketing_fav_blue logo_bhavi_creations.webp"
        type="image/x-icon">

    <link rel="stylesheet" href="assests/online-marketing.css">
    <link rel="stylesheet" href="assests/footer_animations.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-lYFkg6eZ2q7hnkxZ9pPt2K/CszkQzPLhtlDwe2lnJQmI+iY9GM1f3tmzxoTfwUKl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="path_to_bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>

    <link rel="stylesheet" href="assests/branding.css">


    <style>
        .parent {
            width: 300px;
            padding: 20px;
            perspective: 1000px;
            height: 350px;
        }

        .card1 {
            padding-top: 50px;
            /* border-radius: 10px; */
            border: 3px solid rgb(255, 255, 255);
            transform-style: preserve-3d;
            background: linear-gradient(135deg, #0000 18.75%, #f3f3f3 0 31.25%, #0000 0),
                repeating-linear-gradient(45deg, #f3f3f3 -6.25% 6.25%, #ffffff 0 18.75%);
            background-size: 60px 60px;
            background-position: 0 0, 0 0;
            background-color: #f0f0f0;
            width: 100%;

            box-shadow: rgba(142, 142, 142, 0.3) 0px 30px 30px -10px;
            transition: all 0.5s ease-in-out;
        }

        .card1:hover {
            background-position: -100px 100px, -100px 100px;
            transform: rotate3d(0.5, 1, 0, 30deg);

        }

        .content-box {
            background: linear-gradient(-45deg, #f89b29 0%, #ff0f7b 100%);
            /* border-radius: 10px 100px 10px 10px; */
            transition: all 0.5s ease-in-out;
            padding: 60px 25px 25px 25px;
            transform-style: preserve-3d;
        }

        .content-box .card1-title {
            display: inline-block;
            color: white;
            font-size: 20px;
            font-weight: 900;
            transition: all 0.5s ease-in-out;
            transform: translate3d(0px, 0px, 50px);
        }

        .content-box .card1-title:hover {
            transform: translate3d(0px, 0px, 60px);
        }

        .content-box .card1-content {
            margin-top: 10px;
            font-size: 12px;
            font-weight: 700;
            color: #f2f2f2;
            transition: all 0.5s ease-in-out;
            transform: translate3d(0px, 0px, 30px);
        }

        .content-box .card1-content:hover {
            transform: translate3d(0px, 0px, 60px);
        }

        .content-box .see-more {
            cursor: pointer;
            margin-top: 1rem;
            display: inline-block;
            font-weight: 900;
            font-size: 9px;
            text-transform: uppercase;
            color: #40a2d8ff;
            ;
            /* border-radius: 5px; */
            background: white;
            padding: 0.5rem 0.7rem;
            transition: all 0.5s ease-in-out;
            transform: translate3d(0px, 0px, 20px);
        }

        .content-box .see-more:hover {
            transform: translate3d(0px, 0px, 60px);
        }

        .date-box {
            position: absolute;
            top: 30px;
            right: 30px;
            height: 60px;
            width: 60px;
            background: white;
            border: 1px solid rgb(7, 185, 255);
            /* border-radius: 10px; */
            padding: 10px;
            transform: translate3d(0px, 0px, 80px);
            box-shadow: rgba(100, 100, 111, 0.2) 0px 17px 10px -10px;
        }

        .date-box span {
            display: block;
            text-align: center;
        }

        .date-box .month {
            color: rgb(4, 193, 250);
            font-size: 9px;
            font-weight: 700;
        }

        .date-box .date {
            font-size: 20px;
            font-weight: 900;
            color: rgb(4, 193, 250);
        }


        .owl-prev,
        .owl-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #2587E2;
            color: #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            cursor: pointer;
        }

        .owl-prev {
            left: -20px;
        }

        .owl-next {
            right: -20px;
        }

        .owl-prev:hover,
        .owl-next:hover {
            background: #1c6eb9;
        }

        @media (max-width:992px) {
            .owl-prev {
                left: -10px;
            }

            .owl-next {
                right: -10px;
            }
        }
    </style>

</head>

<body>



    <!-- Navbar -->

    <?php include('navbar.php'); ?>




    <section class=" shadow  py-5 " style="margin-top: -10px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="mini_text_light_blue">Online Branding Solutions</p>
                    <h2 class="large_text">Transform Your Digital Presence<br /> with Bhavi</h2>
                    <p class="normal_text"> Let Bhavi's expertise reshape your online identity, driving growth and
                        visibility in the digital
                        landscape. Elevate your brand's impact and connect with your audience like never before.</p>

                    <div class="col-6">
                        <a href="contact_us.php" style="text-decoration: none; ">
                            <button class="btn-31 mb-5">
                                <span class="text-container">
                                    <span class="text">Get in Touch</span>
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">

                    <div class="embed-responsive embed-responsive-16by9   video-container">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/7yBR0dc2Zrw"
                            allowfullscreen></iframe>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <div class="text-center gradient_color_online_branding">
        <img src="assests/images/update_img/top_half.webp" style="border-radius: 10px;" class="img-fluid   " />
    </div>



    <!-- section3 -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <h4 class="mini_text_light_blue">What We Do</h4>
                    <h2 class="large_text">Grow your Business<br /> with Bhavi</h2>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <p class="normal_text">We specialize in crafting tailored strategies to propel your business
                        forward. From comprehensive
                        digital marketing solutions to innovative branding techniques, we're dedicated to helping you
                        achieve your growth objectives. Partner with us and unlock the full potential of your business
                        in today's competitive landscape.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- section 4 -->

    <section>
        <div class="container ">
            <div class="row">
                <div class="col-md-12  ">
                    <div id="news-slider" class="owl-carousel  only_for_pd_size">

                        <div class="parent">
                            <div class="card1" style="height:  500px;">
                                <div class="content-box">
                                    <span class="card1-title">Logo Designing</span>
                                    <p class="card1-content">
                                        Crafting identities with pixels and passion
                                    </p>
                                    <a href="logo_design.php"><span class="see-more" style="margin-top: 50px;">Read
                                            More</span></a>
                                </div>
                                <div class="date-box">
                                    <img src="assests/images/online-branding/logo-icon.webp" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>


                        <div class="parent">
                            <div class="card1" style="height:  500px;">
                                <div class="content-box">
                                    <span class="card1-title">Web Development</span>
                                    <p class="card1-content">
                                        Web development that builds digital dreams, one click at a time
                                    </p>
                                    <a href="website.php"> <span class="see-more" style="margin-top: 50px;">Read
                                            More</span></a>
                                </div>
                                <div class="date-box">
                                    <img src="assests/images/online-branding/web-icon.webp" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="parent">
                            <div class="card1" style="height:  500px;">
                                <div class="content-box">
                                    <span class="card1-title">Designing</span>
                                    <p class="card1-content">
                                        Designing tomorrow's trends, today
                                    </p>
                                    <a href="designing.php"><span class="see-more" style="margin-top: 70px;">Read
                                            More</span></a>
                                </div>
                                <div class="date-box">
                                    <img src="assests/images/online-branding/designing.webp" class="img-fluid">
                                </div>
                            </div>
                        </div>


                        <div class="parent">
                            <div class="card1" style="height:  500px;">
                                <div class="content-box">
                                    <span class="card1-title">SEO</span>
                                    <p class="card1-content">
                                        Unlocking the digital door to your success
                                    </p>
                                    <a href="seo.php"><span class="see-more" style="margin-top: 50px;">Read
                                            More</span></a>
                                </div>
                                <div class="date-box">
                                    <img src="assests/images/online-branding/seo-icon.webp" class="img-fluid">
                                </div>
                            </div>
                        </div>



                        <div class="parent">
                            <div class="card1" style="height:  500px;">
                                <div class="content-box">
                                    <span class="card1-title">Social Media Manage</span>
                                    <p class="card1-content">
                                        Igniting conversations, sparking connections
                                    </p>
                                    <a href="social_media.php"><span class="see-more" style="margin-top: 50px;">Read
                                            More</span></a>
                                </div>
                                <div class="date-box">
                                    <img src="assests/images/online-branding/social-mediaicon.webp" class="img-fluid">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src='https://code.jquery.com/jquery-1.12.0.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
    <script>
        $(document).ready(function() {
            $("#news-slider").owlCarousel({
                items: 3,
                itemsDesktop: [1199, 3],
                itemsDesktopSmall: [980, 2],
                itemsMobile: [600, 1],
                navigation: true,
                navigationText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                pagination: true,
                autoPlay: true
            });

        });
    </script>



    <!-- section5 -->
    <div class="grid_bg_image">

        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-none d-md-block">
                        <div class=" ">
                            <img src="assests/images/Bhavi_Creations/best_Digital_Excellence_bjavi_creations.webp"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex flex-column justify-content-center">
                        <p class="mini_text_light_blue">Who We Are</p>
                        <h3 class="large_text">Crafting Digital Excellence:<br /> Meet Bhavi Creations</h2>
                            <p class="normal_text">Bhavi Creations is a dynamic team of digital innovators, creative
                                thinkers, and strategic
                                problem-solvers dedicated to helping businesses thrive in the ever-evolving digital
                                landscape. With a passion for excellence and a commitment to innovation, we leverage our
                                expertise to transform brands, drive growth, and create meaningful connections with
                                audiences worldwide. </p>
                            <p class="normal_text"> At Bhavi, we're more than just a digital agency — we're your trusted
                                partner in
                                achieving
                                digital success.</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6  d-block d-md-none">
                        <div class=" ">
                            <img src="assests/images/Bhavi_Creations/best_Digital_Excellence_bjavi_creations.webp"
                                class="img-fluid" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- section6 -->
        <section class="mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex flex-column justify-content-center">
                        <p class="mini_text_light_blue">Our Mission and goal</p>
                        <h3 class="large_text">Empowering Your Journey<br /> to Digital Success</h2>
                            <p>At Bhavi Creations, our mission is to empower businesses to thrive in the digital age by
                                providing innovative solutions that drive growth, enhance visibility, and create lasting
                                connections with their audience.</p>
                            <p>Our goal is to become a trusted partner for our clients, guiding them toward digital
                                success
                                through personalized strategies, cutting-edge technology, and unparalleled creativity.
                                We
                                strive to exceed expectations, inspire innovation, and leave a lasting impact on every
                                brand
                                we touch.</p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <div class="video-container">
                            <video controls class="img-fluid" muted autoplay loop>
                                <source src="assests/images/online-branding/OB2.mp4" type="video/mp4">

                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- section 7 -->
    <section style=" background-color:#edf9ff ; background-size: cover;margin-top:80px">
        <div class="container p-2">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <h5>Testimonials<strong> <br />Client's Feedback</strong></h5>
                    <p
                        style="font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;">
                        Explore the journeys of our clients as they share how Bhavi Creations transformed their
                        businesses with innovative strategies and unparalleled creativity. Hear firsthand how our
                        tailored solutions helped them achieve their goals and surpass expectations in today's
                        competitive digital landscape.</p>

                    <a href="https://g.page/r/CZo4Tp3UBn01EAI/review" target="_blank"><button class="btn-53 mb-3">
                            <div class="original" style="font-size:15px; text-transform:none;color:#032792">See
                                More Reviews</div>
                            <div class="letters">

                                <span>S</span>
                                <span>E</span>
                                <span>E</span>
                                <span>-</span>
                                <span>M</span>
                                <span>O</span>
                                <span>R</span>
                                <span>E</span>
                            </div>
                        </button> </a>

                </div>
                <div class="col-12 col-md-12 col-lg-8 col-xl-8">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-5 col-xl-5">
                            <div class="card d-flex flex-row justify-content-center p-3 shadow reveiw-card1 mb-3">
                                <div><img src="assests/images/online-branding/profile.webp" class="review-cardimg"
                                        style=" border-radius:50%;margin-left:-30px" /></div>
                                <div>
                                    <h5 class="ps-2">k sri harsha</h5>
                                    <div class="d-flex flex-row justify-content-end" style="margin-top:-30px"><img
                                            src="assests/images/online-branding/Quotation-Symbol-PNG.webp"
                                            style="height:30px" /></div>
                                    <p>⭐⭐⭐⭐⭐</p>
                                    <p style="font-family: cursive;"> As per Business and as per Market Situations Bhavi
                                        Team Designs Marketing activities and Digital Marketing posts which is helping
                                        to boom the Business Sales</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-7 col-xl-7 ">
                            <div class="card d-flex flex-row justify-content-center p-3 shadow reveiw-card2  mb-3">
                                <div><img src="assests/images/online-branding/profile.webp" class="review-cardimg"
                                        style=" border-radius:50%;margin-left:-30px" /></div>
                                <div>
                                    <h5 class="ps-2">Dr Harshavardhan</h5>
                                    <div class="d-flex flex-row justify-content-end" style="margin-top:-30px"><img
                                            src="assests/images/online-branding/Quotation-Symbol-PNG.webp"
                                            style="height:30px" /></div>
                                    <p>⭐⭐⭐⭐⭐</p>
                                    <p style="font-family: cursive;">Amazing work done by Bhavi creations and Phani Garu
                                        3D work at their best. Designed a medical animated video according to my needs
                                        Special thanks to Mr Ram, Mr Teja & Mr Satya for understanding and replicating
                                        my ideas. Great team. Wish u success </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                            <div class="card d-flex flex-row justify-content-center p-3 shadow reveiw-card3  mb-3">
                                <div><img src="assests/images/online-branding/profile.webp" class="review-cardimg"
                                        style=" border-radius:50%;margin-left:-30px" /></div>
                                <div>
                                    <h5 class="ps-2">Tejaswini</h5>
                                    <div class="d-flex flex-row justify-content-end" style="margin-top:-30px"><img
                                            src="assests/images/online-branding/Quotation-Symbol-PNG.webp"
                                            style="height:30px" /></div>
                                    <p>⭐⭐⭐⭐⭐</p>
                                    <p style="font-family: cursive;">Glad to have been associated with Digital Marketing
                                        team of Bhavi, they have got good team that's been designing the posts for our
                                        Huckleberry IT Solutions and marketing across different social media platforms.
                                        Appreciate their diligence in delivering the desired output.

                                        Way to go..!

                                        All The Very Best Phani, Raju & team. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 ">
                            <div class="card d-flex flex-row justify-content-center p-3 shadow reveiw-card4  mb-3">
                                <div><img src="assests/images/online-branding/profile.webp" class="review-cardimg4"
                                        style=" border-radius:50%;margin-left:-30px" /></div>
                                <div>
                                    <h5 class="ps-2"> Leelakrishna</h5>
                                    <div class="d-flex flex-row justify-content-end" style="margin-top:-30px"><img
                                            src="assests/images/online-branding/Quotation-Symbol-PNG.webp"
                                            style="height:30px" /></div>
                                    <p>⭐⭐⭐⭐⭐</p>
                                    <p style="font-family: cursive;">Very good service. Very accurate both in
                                        understanding the website design and flawlessly executing first time without any
                                        mistakes. Have been absolutely prompt I would recommend Bhavi Creations to
                                        anyone who want a good effective and impactful website.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>











    <div class="d-md-none">
        <a href="index.php" style="text-decoration: none;">
            <button class="Btn_back_buttn     ">
                <div class="sign_back">
                    <svg viewBox="0 0 512 512">
                        <path
                            d="M134.1 406.1L11.3 283.3c-7.2-7.2-11.3-17.1-11.3-27.3s4.1-20.1 11.3-27.3l122.8-122.8c6.4-6.4 15-9.9 24-9.9c18.7 0 33.9 15.2 33.9 33.9l0 62.1 128 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-128 0 0 62.1c0 18.7-15.2 33.9-33.9 33.9c-9 0-17.6-3.6-24-9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                        </path>
                    </svg>
                </div>
                <div class="text_go_back ">Go Back</div>
            </button>
        </a>
    </div>

    <div class="d-none d-md-block">
        <a href="index.php" style="text-decoration: none;  ">
            <div style="display: flex; align-items: center;">
                <button class="Btn_back_buttn " style="display: flex; align-items: center;">
                    <div>
                        <svg class="" viewBox="0 0 512 512"
                            style="width: 20px; height: 20px; margin-right: 5px; margin-left:20px;  ">
                            <path fill="#ffffff"
                                d="M134.1 406.1L11.3 283.3c-7.2-7.2-11.3-17.1-11.3-27.3s4.1-20.1 11.3-27.3l122.8-122.8c6.4-6.4 15-9.9 24-9.9c18.7 0 33.9 15.2 33.9 33.9l0 62.1 128 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-128 0 0 62.1c0 18.7-15.2 33.9-33.9 33.9c-9 0-17.6-3.6-24-9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z">
                            </path>
                        </svg>
                    </div>
                    <div style="margin-left: 5px; color: #ffffff; font-weight: bold;">Go Back</div>
                </button>
            </div>
        </a>
    </div>

    <!-- redirections  -->

    <div class="open_bar open_home">
        <a href="index.php" style="text-decoration: none;"> <span class="bar_in bar_home">Home</span>
            <span class="text">
                <div class="borde-back">
                    <div class="icon">
                        <i class="fa-solid fa-house" style="color: white;"></i>
                    </div>
                </div>
            </span>
        </a>
    </div>
    <div class="open_bar open_services">
        <a href="main_offline_markiting.php" style="text-decoration: none;"> <span class="bar_in bar_Offline"> Offline Br...</span>
            <span class="text">
                <div class="borde-back">
                    <div class="icon">
                        <i class="fa-solid fa-file-contract" style="color: white;"></i>
                    </div>
                </div>
            </span>
        </a>
    </div>
    <div class="open_bar open_contact">
        <a href="traditional_marketing.php" style="text-decoration: none;"> <span class="bar_in bar_Traditional">Traditional Mar...</span>
            <span class="text">
                <div class="borde-back">
                    <div class="icon">
                        <i class="fa-solid fa-chart-simple" style="color: white;"></i>
                    </div>
                </div>
            </span>
        </a>
    </div>
    <div class="open_bar open_four">
        <a href="software_mainpage.htm" style="text-decoration: none;"> <span class="bar_in bar_Customized">Customized Sof...
            </span>
            <span class="text">
                <div class="borde-back">
                    <div class="icon">
                        <i class="fa-solid fa-laptop-code" style="color: white;"></i>
                    </div>
                </div>
            </span>
        </a>
    </div>





    <!-- FOOTER -->
    <?php include('footer.php'); ?>




</body>

</html>