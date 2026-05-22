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

    <link rel="stylesheet" href="assests/about.css">

    <link rel="stylesheet" href="assests/about_animation.css">
    <link rel="stylesheet" href="assests/footer_animations.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-lYFkg6eZ2q7hnkxZ9pPt2K/CszkQzPLhtlDwe2lnJQmI+iY9GM1f3tmzxoTfwUKl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="path_to_bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assests/branding.css">

    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap'); */

        @media (max-width: 768px) {
            .carousel-inner .carousel-item>div {
                display: none;
            }

            .carousel-inner .carousel-item>div:first-child {
                display: block;
            }
        }

        .carousel-inner .carousel-item.active,
        .carousel-inner .carousel-item-next,
        .carousel-inner .carousel-item-prev {
            display: flex;
        }

        /* display 3 */
        @media (min-width: 768px) {

            .carousel-inner .carousel-item-right.active,
            .carousel-inner .carousel-item-next {
                transform: translateX(33.333%);
            }

            .carousel-inner .carousel-item-left.active,
            .carousel-inner .carousel-item-prev {
                transform: translateX(-33.333%);
            }
        }

        .carousel-inner .carousel-item-right,
        .carousel-inner .carousel-item-left {
            transform: translateX(0);
        }

        .flip-card {
            background-color: transparent;
            width: 300px;
            height: 338px;
            perspective: 1000px;
            font-family: sans-serif;
        }

        .title {
            font-size: 1.5em;
            font-weight: 900;
            text-align: center;
            margin: 0;
        }

        .flip-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .flip-card-inner {
            transform: rotateY(180deg);
        }

        .flip-card-front,
        .flip-card-back {
            box-shadow: 0 8px 14px 0 rgba(0, 0, 0, 0.2);
            position: absolute;
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            height: 100%;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            border: 1px solid coral;
            border-radius: 1rem;
        }

        .flip-card-front {
            background: linear-gradient(120deg, bisque 60%, rgb(255, 231, 222) 88%,
                    rgb(255, 211, 195) 40%, rgba(255, 127, 80, 0.603) 48%);
            color: coral;
        }

        .flip-card-back {
            background: linear-gradient(120deg, rgb(255, 174, 145) 30%, coral 88%,
                    bisque 40%, rgb(255, 185, 160) 78%);
            color: white;
            transform: rotateY(180deg);
        }

        /* .img-fluid {
            width: auto;
            height: 350px;
        } */








        .team_devision_btn {
            position: relative;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 20px;
            padding-right: 20px;
            background: #4c83fa;
            font-size: 17px;
            font-weight: 1000;
            color: #ffffff;
            border: 3px solid #4c83fa;
            border-radius: 50px;
            box-shadow: 0 0 0 #ffffff;
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }

        .star-1 {
            position: absolute;
            top: 20%;
            left: 20%;
            width: 25px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 1s cubic-bezier(0.05, 0.83, 0.43, 0.96);
        }

        .star-2 {
            position: absolute;
            top: 45%;
            left: 45%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 1scubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-3 {
            position: absolute;
            top: 40%;
            left: 40%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 1s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-4 {
            position: absolute;
            top: 20%;
            left: 40%;
            width: 8px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 0.8s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-5 {
            position: absolute;
            top: 25%;
            left: 45%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 0.6s cubic-bezier(0, 0.4, 0, 1.01);
        }

        .star-6 {
            position: absolute;
            top: 5%;
            left: 50%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0 #4c83fa);
            z-index: -5;
            transition: all 0.8s ease;
        }

        .team_devision_btn:hover {
            background: transparent;
            color: #4c83fa;
            box-shadow: 0 0 0px #4c83fa;
        }

        .team_devision_btn:hover .star-1 {
            position: absolute;
            top: -80%;
            left: -30%;
            width: 25px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-2 {
            position: absolute;
            top: -0%;
            left: 10%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-3 {
            position: absolute;
            top: 55%;
            left: 25%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-4 {
            position: absolute;
            top: 30%;
            left: 80%;
            width: 8px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-5 {
            position: absolute;
            top: 25%;
            left: 115%;
            width: 15px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .team_devision_btn:hover .star-6 {
            position: absolute;
            top: 5%;
            left: 60%;
            width: 5px;
            height: auto;
            filter: drop-shadow(0 0 0px #4c83fa);
            z-index: 2;
        }

        .fil0 {
            fill: #4c83fa;
        }



        .section3 {
            background-color: #FFF1E1;
            padding-top: 100px;
            padding-bottom: 50px;
        }



        .sec_3_btn_team {
            display: inline-block;
            border-radius: 50px;
            border: none;
            background-image: linear-gradient(to bottom, #85c7ee, #0579ee);
            color: white;
            font-family: inherit;
            text-align: center;
            font-size: 13px;

            width: 10em;
            padding: 1em;
            transition: all 0.4s;
            cursor: pointer;
        }

        .sec_3_btn_team span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.4s;
        }

        .sec_3_btn_team span:after {
            content: 'Our Team';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.7s;
        }

        .sec_3_btn_team:hover span {
            padding-right: 5em;
        }

        .sec_3_btn_team:hover span:after {
            opacity: 4;
            right: 0;
        }

        .sec3-heading {
            font-family: Poppins;
            font-size: 36px;
            font-weight: 700;
            line-height: 54px;
            letter-spacing: 0em;
            text-align: left;
            color: #0C5077;
        }

        .sec3-paragraph {
            font-family: Poppins;
            font-size: 19px;
            font-weight: 500;
            line-height: 29px;
            letter-spacing: 0em;
            text-align: left;
            color: #3A3A3A;

        }

        a {
            /* list-style: none !important; */
            text-decoration: none !important;
        }
    </style>

</head>






<body>

    <!-- Navbar -->
    <section class="sticky_nav nav_image_bg   shadow-lg">
        <div class="container nav_main p-3">
            <div class="d-flex justify-content-between align-items-center">

                <a href="index.php"> <img src="assests/images/bhavi/foot_bhavi_logo.webp" class="img-fluid   "
                        style="width: 150px;height: 65px;" alt=""></a>


                <div class="traveller">
                    <div class="truckWrapper">
                        <div class="truckBody">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 198 93" class="trucksvg">

                                <path stroke-width="3" stroke="#282828" fill="#F83D3D"
                                    d="M135 22.5H177.264C178.295 22.5 179.22 23.133 179.594 24.0939L192.33 56.8443C192.442 57.1332 192.5 57.4404 192.5 57.7504V89C192.5 90.3807 191.381 91.5 190 91.5H135C133.619 91.5 132.5 90.3807 132.5 89V25C132.5 23.6193 133.619 22.5 135 22.5Z">
                                </path>
                                <path stroke-width="3" stroke="#282828" fill="#7D7C7C"
                                    d="M146 33.5H181.741C182.779 33.5 183.709 34.1415 184.078 35.112L190.538 52.112C191.16 53.748 189.951 55.5 188.201 55.5H146C144.619 55.5 143.5 54.3807 143.5 53V36C143.5 34.6193 144.619 33.5 146 33.5Z">
                                </path>
                                <path stroke-width="2" stroke="#282828" fill="#282828"
                                    d="M150 65C150 65.39 149.763 65.8656 149.127 66.2893C148.499 66.7083 147.573 67 146.5 67C145.427 67 144.501 66.7083 143.873 66.2893C143.237 65.8656 143 65.39 143 65C143 64.61 143.237 64.1344 143.873 63.7107C144.501 63.2917 145.427 63 146.5 63C147.573 63 148.499 63.2917 149.127 63.7107C149.763 64.1344 150 64.61 150 65Z">
                                </path>
                                <rect stroke-width="2" stroke="#282828" fill="#FFFCAB" rx="1" height="7" width="5"
                                    y="63" x="187"></rect>
                                <rect stroke-width="2" stroke="#282828" fill="#282828" rx="1" height="11" width="4"
                                    y="81" x="193"></rect>
                                <rect stroke-width="3" stroke="#282828" fill="#DFDFDF" rx="2.5" height="90" width="121"
                                    y="1.5" x="6.5"></rect>
                                <rect stroke-width="2" stroke="#282828" fill="#DFDFDF" rx="2" height="4" width="6"
                                    y="84" x="1"></rect>

                                <text x="35%" y="40%" text-anchor="middle" fill=" #001372"
                                    style="font-weight: bold; font-size:xx-large;">Bhavi </text>
                                <text x="35%" y="70%" text-anchor="middle" fill=" #001372"
                                    style="font-weight: bold; font-size: x-large;">Creations</text>

                            </svg>
                        </div>
                        <div class="truckTires">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" class="tiresvg">
                                <circle stroke-width="3" stroke="#282828" fill="#282828" r="13.5" cy="15" cx="15">
                                </circle>
                                <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 30 30" class="tiresvg">
                                <circle stroke-width="3" stroke="#282828" fill="#282828" r="13.5" cy="15" cx="15">
                                </circle>
                                <circle fill="#DFDFDF" r="7" cy="15" cx="15"></circle>
                            </svg>
                        </div>
                        <div class="road"></div>

                        <svg xml:space="preserve" viewBox="0 0 453.459 453.459"
                            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" id="Capa_1"
                            version="1.1" fill="#000000" class="lampPost">

                            <path d="M252.882,0c-37.781,0-68.686,29.953-70.245,67.358h-6.917v8.954c-26.109,2.163-45.463,10.011-45.463,19.366h9.993
                          c-1.65,5.146-2.507,10.54-2.507,16.017c0,28.956,23.558,52.514,52.514,52.514c28.956,0,52.514-23.558,52.514-52.514
                          c0-5.478-0.856-10.872-2.506-16.017h9.992c0-9.354-19.352-17.204-45.463-19.366v-8.954h-6.149C200.189,38.779,223.924,16,252.882,16
                          c29.952,0,54.32,24.368,54.32,54.32c0,28.774-11.078,37.009-25.105,47.437c-17.444,12.968-37.216,27.667-37.216,78.884v113.914
                          h-0.797c-5.068,0-9.174,4.108-9.174,9.177c0,2.844,1.293,5.383,3.321,7.066c-3.432,27.933-26.851,95.744-8.226,115.459v11.202h45.75
                          v-11.202c18.625-19.715-4.794-87.527-8.227-115.459c2.029-1.683,3.322-4.223,3.322-7.066c0-5.068-4.107-9.177-9.176-9.177h-0.795
                          V196.641c0-43.174,14.942-54.283,30.762-66.043c14.793-10.997,31.559-23.461,31.559-60.277C323.202,31.545,291.656,0,252.882,0z
                          M232.77,111.694c0,23.442-19.071,42.514-42.514,42.514c-23.442,0-42.514-19.072-42.514-42.514c0-5.531,1.078-10.957,3.141-16.017
                          h78.747C231.693,100.736,232.77,106.162,232.77,111.694z"></path>
                        </svg>
                    </div>
                </div>


                <label for="check1" class="menuButton text-center onlyfortab">
                    <input id="check1" type="checkbox" class="toggleDropdown">
                    <span class="top"></span>
                    <span class="mid"></span>
                    <span class="bot"></span>
                </label>
                <ul class="dropdown-menu dropdown-menu-end menu_border">
                    <li><a class="dropdown-item menu_item_black" href="index.php">Home</a></li>
                    <li><a class="dropdown-item menu_item_black" href="about.php">About</a></li>
                    <li><a class="dropdown-item menu_item_black" href="services.php">Services</a></li>
                    <!-- <li><a class="dropdown-item menu_item_black  " href="Portfolio.php">Portfolio</a></li> -->
                    <li><a class="dropdown-item menu_item_black  " href="contact_us.php">Contact Us</a></li>
                    <li><a class="dropdown-item menu_item_black  " href="our_works.php">Our Works</a></li>
                    <!-- <li><a class="dropdown-item menu_item_black  " href="multimedia_service.php">Multimedia Service</a></li> -->

                    <li><a class="dropdown-item menu_item_black  " href="pages.php">Pages</a></li>
                    <!-- <li><a class="dropdown-item menu_item_black lol" href="https://invoice.bhavicreations.com">Login</a></li> -->
                </ul>


            </div>
        </div>
    </section>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bhavi Creations— Brand Architects</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;600;700&family=DM+Sans:wght@300;400;500&family=Bebas+Neue&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <style>
            :root {
                --ink: #0a0a0f;
                --cream: #f5f0e8;
                --gold: #c9a84c;
                --gold-light: #e8c97a;
                --rust: #b84a2e;
                --sage: #4a6741;
                --steel: #1e2a3a;
                --mist: #e8e4de;
                --text-soft: #6b6560;
            }

            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            html {
                scroll-behavior: smooth;
            }

            body {
                font-family: 'DM Sans', sans-serif;
                background: var(--ink);
                color: var(--cream);
                overflow-x: hidden;
                cursor: none;
            }

            /* Custom Cursor */
            .cursor {
                width: 12px;
                height: 12px;
                background: var(--gold);
                border-radius: 50%;
                position: fixed;
                pointer-events: none;
                z-index: 9999;
                transition: transform 0.15s ease;
                mix-blend-mode: difference;
            }

            .cursor-follower {
                width: 36px;
                height: 36px;
                border: 1px solid rgba(201, 168, 76, 0.5);
                border-radius: 50%;
                position: fixed;
                pointer-events: none;
                z-index: 9998;
                transition: all 0.35s ease;
            }

            /* NAV */
            nav {
                position: fixed;
                top: 0;
                width: 100%;
                z-index: 1000;
                padding: 22px 60px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                background: linear-gradient(to bottom, rgba(10, 10, 15, 0.95), transparent);
                backdrop-filter: blur(8px);
            }

            .nav-logo {
                font-family: 'Bebas Neue', sans-serif;
                font-size: 28px;
                letter-spacing: 4px;
                color: var(--cream);
                text-decoration: none;
            }

            .nav-logo span {
                color: var(--gold);
            }

            .nav-links {
                display: flex;
                gap: 40px;
                list-style: none;
                margin: 0;
                padding: 0;
            }

            .nav-links a {
                font-size: 12px;
                letter-spacing: 2px;
                text-transform: uppercase;
                color: rgba(245, 240, 232, 0.65);
                text-decoration: none;
                transition: color 0.3s;
            }

            .nav-links a:hover {
                color: var(--gold);
            }

            .nav-cta {
                font-size: 12px;
                letter-spacing: 2px;
                text-transform: uppercase;
                color: var(--ink);
                background: var(--gold);
                padding: 10px 24px;
                text-decoration: none;
                transition: all 0.3s;
            }

            .nav-cta:hover {
                background: var(--gold-light);
            }

            /* HERO */
            .hero {
                height: 100vh;
                display: flex;
                align-items: center;
                position: relative;
                overflow: hidden;
                padding: 0 60px;
            }

            .hero-bg {
                position: absolute;
                inset: 0;
                background:
                    radial-gradient(ellipse 80% 60% at 70% 50%, rgba(201, 168, 76, 0.08) 0%, transparent 60%),
                    radial-gradient(ellipse 40% 80% at 10% 50%, rgba(184, 74, 46, 0.06) 0%, transparent 50%);
            }

            .hero-grid {
                position: absolute;
                inset: 0;
                background-image:
                    linear-gradient(rgba(201, 168, 76, 0.04) 1px, transparent 1px),
                    linear-gradient(90deg, rgba(201, 168, 76, 0.04) 1px, transparent 1px);
                background-size: 60px 60px;
            }

            .hero-content {
                position: relative;
                z-index: 2;
                max-width: 800px;
            }

            .hero-tag {
                display: inline-block;
                font-size: 11px;
                letter-spacing: 4px;
                text-transform: uppercase;
                color: var(--gold);
                border: 1px solid rgba(201, 168, 76, 0.3);
                padding: 6px 18px;
                margin-bottom: 30px;
                animation: fadeUp 0.8s ease forwards;
            }

            .hero-title {
                font-family: 'Cormorant Garamond', serif;
                font-size: clamp(64px, 9vw, 120px);
                font-weight: 300;
                line-height: 0.92;
                margin-bottom: 30px;
                animation: fadeUp 0.8s 0.2s ease both;
            }

            .hero-title em {
                font-style: italic;
                color: var(--gold);
            }

            .hero-title strong {
                font-weight: 700;
                display: block;
            }

            .hero-sub {
                font-size: 16px;
                line-height: 1.7;
                color: rgba(245, 240, 232, 0.6);
                max-width: 480px;
                margin-bottom: 50px;
                animation: fadeUp 0.8s 0.4s ease both;
            }

            .hero-btns {
                display: flex;
                gap: 20px;
                align-items: center;
                animation: fadeUp 0.8s 0.6s ease both;
            }

            .btn-primary-custom {
                background: var(--gold);
                color: var(--ink);
                padding: 16px 40px;
                font-size: 13px;
                letter-spacing: 2px;
                text-transform: uppercase;
                text-decoration: none;
                font-weight: 500;
                transition: all 0.3s;
                position: relative;
                overflow: hidden;
                display: inline-block;
                border: none;
            }

            .btn-primary-custom::after {
                content: '';
                position: absolute;
                inset: 0;
                background: var(--gold-light);
                transform: translateX(-100%);
                transition: transform 0.3s ease;
                z-index: 0;
            }

            .btn-primary-custom:hover::after {
                transform: translateX(0);
            }

            .btn-primary-custom span {
                position: relative;
                z-index: 1;
            }

            .btn-outline-custom {
                color: var(--cream);
                border: 1px solid rgba(245, 240, 232, 0.3);
                padding: 16px 40px;
                font-size: 13px;
                letter-spacing: 2px;
                text-transform: uppercase;
                text-decoration: none;
                transition: all 0.3s;
                display: inline-block;
            }

            .btn-outline-custom:hover {
                border-color: var(--gold);
                color: var(--gold);
            }

            .hero-num {
                position: absolute;
                right: 60px;
                top: 50%;
                transform: translateY(-50%);
                writing-mode: vertical-rl;
                font-size: 11px;
                letter-spacing: 4px;
                color: rgba(245, 240, 232, 0.25);
            }

            .scroll-line {
                position: absolute;
                bottom: 40px;
                left: 60px;
                display: flex;
                align-items: center;
                gap: 16px;
                font-size: 11px;
                letter-spacing: 3px;
                text-transform: uppercase;
                color: rgba(245, 240, 232, 0.35);
            }

            .scroll-line::before {
                content: '';
                width: 40px;
                height: 1px;
                background: var(--gold);
                animation: lineGrow 2s infinite;
            }

            /* ===== SERVICES SECTION ===== */
            .services-section {
                padding: 120px 0;
                background: var(--cream);
                color: var(--ink);
                position: relative;
                overflow: hidden;
            }

            .services-section::before {

                /* content: 'Bhavi\A Creations'; */
                position: absolute;
                top: -20px;
                left: 50%;
                transform: translateX(-50%);
                font-family: 'Bebas Neue', sans-serif;
                font-size: clamp(80px, 15vw, 200px);
                font-size: clamp(110px, 10vw, 50px);

                color: rgba(10, 10, 15, 0.04);
                white-space: nowrap;
                pointer-events: none;
            }

            .section-label {
                font-size: 17px;
                letter-spacing: 4px;
                text-transform: uppercase;
                color: var(--gold);
                text-align: center;
                margin-bottom: 16px;
            }

            .section-title {
                font-family: 'Cormorant Garamond', serif;
                font-size: clamp(38px, 5vw, 60px);
                font-weight: 300;
                text-align: center;
                margin-bottom: 60px;
                line-height: 1.1;
            }

            .section-title em {
                font-style: italic;
                color: var(--rust);
            }

            /* Smooth Drum Wrapper & Dynamic Track */
            .drum-wrapper {
                position: relative;
                width: 100%;
                margin: 0 auto;
                overflow: hidden;
                padding: 20px 0;
            }

            .cylinders-track {
                display: flex;
                gap: 30px;
                padding: 20px 40px;
                overflow-x: auto;
                scroll-behavior: smooth;
                scrollbar-width: none;
                -webkit-overflow-scrolling: touch;
                cursor: grab;
            }

            .cylinders-track:active {
                cursor: grabbing;
            }

            .cylinders-track::-webkit-scrollbar {
                display: none;
            }

            .cylinder-card {
                flex: 0 0 280px;
                height: 380px;
                /* border-radius: 140px / 140px; */
                border-radius: 10px;
                background: linear-gradient(160deg, var(--steel) 0%, var(--ink) 100%);
                border: 1px solid rgba(201, 168, 76, 0.2);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 40px 30px;
                user-select: none;
                position: relative;
                transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
                text-decoration: none;
                color: var(--cream);
                box-shadow:
                    inset -20px 0 40px rgba(0, 0, 0, 0.5),
                    inset 20px 0 40px rgba(255, 255, 255, 0.04),
                    0 20px 50px rgba(0, 0, 0, 0.2);
            }

            .cylinder-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 15%;
                right: 15%;
                height: 3px;
                background: linear-gradient(90deg, transparent, rgba(201, 168, 76, 0.6), transparent);
            }

            .cylinder-card:hover {
                transform: translateY(-15px);
                border-color: var(--gold);
                box-shadow:
                    inset -10px 0 30px rgba(0, 0, 0, 0.4),
                    inset 10px 0 30px rgba(255, 255, 255, 0.06),
                    0 30px 60px rgba(201, 168, 76, 0.25);
            }

            .cylinder-card.active {
                background: linear-gradient(160deg, #162436 0%, #0c131c 100%);
                border-color: var(--gold-light);
                box-shadow: 0 0 30px rgba(201, 168, 76, 0.3);
            }

            .cylinder-icon {
                width: 68px;
                height: 68px;
                background: rgba(201, 168, 76, 0.1);
                border: 1px solid rgba(201, 168, 76, 0.3);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 26px;
                color: var(--gold);
                margin-bottom: 24px;
                transition: all 0.3s;
            }

            .cylinder-card:hover .cylinder-icon {
                background: var(--gold);
                color: var(--ink);
                transform: scale(1.1);
            }

            .cylinder-name {
                font-family: 'Cormorant Garamond', serif;
                font-size: 24px;
                font-weight: 600;
                text-align: center;
                margin-bottom: 12px;
            }

            .cylinder-desc {
                font-size: 13px;
                line-height: 1.6;
                color: rgba(245, 240, 232, 0.5);
                text-align: center;
            }

            .cylinder-arrow {
                position: absolute;
                bottom: 35px;
                width: 36px;
                height: 36px;
                border: 1px solid rgba(201, 168, 76, 0.3);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 12px;
                color: var(--gold);
                opacity: 0;
                transform: translateY(10px);
                transition: all 0.3s;
            }

            .cylinder-card:hover .cylinder-arrow {
                opacity: 1;
                transform: translateY(0);
                background: rgba(201, 168, 76, 0.1);
            }

            /* Service Detail Panel */
            .service-detail {
                max-width: 1000px;
                margin: 40px auto 0;
                padding: 0 40px;
                display: none;
                opacity: 0;
                transform: translateY(20px);
                transition: all 0.5s ease;
            }

            .service-detail.visible {
                display: block;
                opacity: 1;
                transform: translateY(0);
            }

            .detail-inner {
                background: var(--ink);
                color: var(--cream);
                padding: 50px 60px;
                border-radius: 8px;
                border-left: 4px solid var(--gold);
                display: grid;
                grid-template-columns: 1.2fr 0.8fr;
                gap: 40px;
                align-items: center;
                box-shadow: 0 30px 70px rgba(0, 0, 0, 0.4);
            }

            .detail-title {
                font-family: 'Cormorant Garamond', serif;
                font-size: 42px;
                font-weight: 300;
                margin-bottom: 16px;
            }

            .detail-title em {
                font-style: italic;
                color: var(--gold);
            }

            .detail-text {
                font-size: 14px;
                line-height: 1.8;
                color: rgba(245, 240, 232, 0.7);
                margin-bottom: 24px;
            }

            .detail-features {
                list-style: none;
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 10px;
                padding: 0;
            }

            .detail-features li {
                font-size: 13px;
                color: rgba(245, 240, 232, 0.8);
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .detail-features li::before {
                content: '→';
                color: var(--gold);
            }

            .detail-number {
                font-family: 'Bebas Neue', sans-serif;
                font-size: 160px;
                color: rgba(201, 168, 76, 0.06);
                line-height: 1;
                text-align: right;
                user-select: none;
            }

            .shake-hint {
                text-align: center;
                font-size: 12px;
                letter-spacing: 3px;
                text-transform: uppercase;
                color: rgba(10, 10, 15, 0.4);
                margin-top: 25px;
            }

            /* CARDS SECTION */
            .cards-section {
                padding: 120px 60px;
                background: var(--ink);
                position: relative;
            }

            .cards-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 1px;
                background: linear-gradient(90deg, transparent, var(--gold), transparent);
            }

            .card-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 24px;
                margin-top: 60px;
            }

            .brand-card {
                position: relative;
                padding: 40px 36px;
                border: 1px solid rgba(245, 240, 232, 0.08);
                overflow: hidden;
                transition: all 0.4s;
                cursor: pointer;
            }

            .brand-card:nth-child(1) {
                background: linear-gradient(135deg, #0f1a0f, #0a0a0f);
            }

            .brand-card:nth-child(2) {
                background: linear-gradient(135deg, #1a0f0a, #0a0a0f);
            }

            .brand-card:nth-child(3) {
                background: linear-gradient(135deg, #0a101a, #0a0a0f);
            }

            .brand-card::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                height: 2px;
                background: linear-gradient(90deg, transparent, var(--gold), transparent);
                opacity: 0;
                transition: opacity 0.3s;
            }

            .brand-card:hover {
                border-color: rgba(201, 168, 76, 0.3);
                transform: translateY(-6px);
            }

            .brand-card:hover::before {
                opacity: 1;
            }

            .card-num {
                font-family: 'Bebas Neue', sans-serif;
                font-size: 80px;
                color: rgba(201, 168, 76, 0.06);
                line-height: 1;
                margin-bottom: -20px;
            }

            .card-icon-box {
                width: 52px;
                height: 52px;
                border: 1px solid rgba(201, 168, 76, 0.25);
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 20px;
                color: var(--gold);
                margin-bottom: 20px;
            }

            .card-title-text {
                font-family: 'Cormorant Garamond', serif;
                font-size: 26px;
                font-weight: 600;
                margin-bottom: 14px;
            }

            .card-body-text {
                font-size: 13px;
                line-height: 1.7;
                color: rgba(245, 240, 232, 0.5);
            }

            .card-link {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                margin-top: 24px;
                font-size: 11px;
                letter-spacing: 2px;
                text-transform: uppercase;
                color: var(--gold);
                text-decoration: none;
                transition: gap 0.3s;
            }

            .card-link:hover {
                gap: 14px;
            }

            /* STEPS — Journey Section */
            .journey-section {
                padding: 120px 60px;
                background: var(--cream);
                color: var(--ink);
                position: relative;
                overflow: hidden;
            }

            .journey-section::before {
                content: 'SUCCESS';
                position: absolute;
                bottom: -40px;
                right: -20px;
                font-family: 'Bebas Neue', sans-serif;
                font-size: clamp(100px, 18vw, 260px);
                color: rgba(10, 10, 15, 0.04);
                pointer-events: none;
            }

            .journey-track {
                position: relative;
                display: flex;
                flex-direction: column;
                gap: 0;
                max-width: 800px;
                margin: 80px auto 0;
            }

            .journey-track::before {
                content: '';
                position: absolute;
                left: 40px;
                top: 0;
                bottom: 0;
                width: 1px;
                background: linear-gradient(to bottom, var(--gold), rgba(201, 168, 76, 0.1));
            }

            .step-item {
                display: flex;
                align-items: flex-start;
                gap: 40px;
                padding: 0 0 60px 0;
                opacity: 0;
                transform: translateX(-30px);
                transition: all 0.6s ease;
                position: relative;
            }

            .step-item.visible {
                opacity: 1;
                transform: translateX(0);
            }

            .step-item.active .step-bubble {
                background: var(--gold);
                color: var(--ink);
            }

            .step-bubble {
                flex-shrink: 0;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                border: 2px solid var(--gold);
                background: var(--cream);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                position: relative;
                z-index: 2;
                transition: all 0.4s;
            }

            .step-bubble i {
                font-size: 22px;
                color: var(--gold);
            }

            .step-item.active .step-bubble i {
                color: var(--ink);
            }

            .step-bubble span {
                font-size: 9px;
                letter-spacing: 1px;
                text-transform: uppercase;
                margin-top: 4px;
                color: var(--text-soft);
            }

            .step-item.active .step-bubble span {
                color: var(--ink);
            }

            .step-content {
                padding-top: 16px;
            }

            .step-label {
                font-size: 11px;
                letter-spacing: 3px;
                text-transform: uppercase;
                color: var(--gold);
                margin-bottom: 8px;
            }

            .step-heading {
                font-family: 'Cormorant Garamond', serif;
                font-size: 30px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            .step-text {
                font-size: 14px;
                line-height: 1.7;
                color: var(--text-soft);
            }

            .step-success {
                display: flex;
                align-items: center;
                gap: 40px;
                padding: 40px;
                background: linear-gradient(135deg, var(--steel), var(--ink));
                color: var(--cream);
                border-left: 3px solid var(--gold);
                opacity: 0;
                transform: translateY(20px);
                transition: all 0.6s 0.3s ease;
                margin-top: 20px;
            }

            .step-success.visible {
                opacity: 1;
                transform: translateY(0);
            }

            .success-icon {
                width: 80px;
                height: 80px;
                background: var(--gold);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 32px;
                color: var(--ink);
                flex-shrink: 0;
                animation: successPulse 2s infinite;
            }

            .success-title {
                font-family: 'Cormorant Garamond', serif;
                font-size: 36px;
                font-weight: 600;
                margin-bottom: 8px;
            }

            .success-title em {
                font-style: italic;
                color: var(--gold);
            }

            /* ===== LUXURY CONTACT FORM SECTION ===== */
            .footer-cta {
                padding: 120px 60px;
                background: var(--ink);
                position: relative;
                overflow: hidden;
            }

            .footer-cta::before {
                content: '';
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 800px;
                height: 800px;
                background: radial-gradient(circle, rgba(201, 168, 76, 0.05) 0%, transparent 70%);
                pointer-events: none;
            }

            .contact-wrapper {
                max-width: 700px;
                margin: 50px auto 0;
                position: relative;
                z-index: 5;
                background: rgb(0, 0, 0);
                /* background: rgba(30, 42, 58, 0.2); */
                border: 1px solid rgba(201, 168, 76, 0.15);
                padding: 50px;
                border-radius: 4px;
                backdrop-filter: blur(10px);
            }

            .form-group {
                position: relative;
                margin-bottom: 35px;
            }

            .form-control-custom {
                width: 100%;
                background: transparent;
                border: none;
                border-bottom: 1px solid rgba(245, 240, 238, 0.2);
                padding: 12px 4px;
                color: var(--cream);
                font-size: 15px;
                transition: all 0.3s ease;
            }

            .form-control-custom:focus {
                outline: none;
                border-bottom: 1px solid var(--gold);
            }

            .form-label-custom {
                position: absolute;
                left: 4px;
                top: 12px;
                color: rgba(245, 240, 232, 0.4);
                font-size: 14px;
                pointer-events: none;
                transition: all 0.3s ease;
                text-transform: uppercase;
                letter-spacing: 1px;
            }

            .form-control-custom:focus~.form-label-custom,
            .form-control-custom:not(:placeholder-shown)~.form-label-custom {
                top: -12px;
                font-size: 11px;
                color: var(--gold);
                letter-spacing: 2px;
            }

            footer {
                background: var(--ink);
                border-top: 1px solid rgba(245, 240, 232, 0.06);
                padding: 30px 60px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            footer p {
                font-size: 12px;
                color: rgba(245, 240, 232, 0.3);
                letter-spacing: 1px;
                margin: 0;
            }

            .footer-logo {
                font-family: 'Bebas Neue', sans-serif;
                font-size: 24px;
                letter-spacing: 4px;
            }

            .footer-logo span {
                color: var(--gold);
            }

            /* ANIMATIONS */
            @keyframes fadeUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            @keyframes lineGrow {

                0%,
                100% {
                    opacity: 0.3;
                }

                50% {
                    opacity: 1;
                }
            }

            @keyframes successPulse {

                0%,
                100% {
                    box-shadow: 0 0 0 0 rgba(201, 168, 76, 0.4);
                }

                50% {
                    box-shadow: 0 0 0 20px rgba(201, 168, 76, 0);
                }
            }

            /* MOBILE */
            @media (max-width: 768px) {
                nav {
                    padding: 20px 24px;
                }

                .nav-links {
                    display: none;
                }

                .hero {
                    padding: 0 24px;
                }

                .hero-num {
                    display: none;
                }

                .hero-title {
                    font-size: 52px;
                }

                .hero-btns {
                    flex-direction: column;
                    align-items: flex-start;
                }

                /* .cylinders-track {
                padding: 20px 10px;
                gap: 16px;
            } */

                /* .cylinder-card {
                flex: 0 0 240px;
                height: 340px;
            } */

                .service-detail {
                    padding: 0 24px;
                }

                .detail-inner {
                    grid-template-columns: 1fr;
                    padding: 30px;
                    gap: 20px;
                }

                .detail-features {
                    grid-template-columns: 1fr;
                }

                .detail-number {
                    display: none;
                }

                .cards-section {
                    padding: 80px 24px;
                }

                .card-grid {
                    grid-template-columns: 1fr;
                }

                .journey-section {
                    padding: 80px 24px;
                }

                .contact-wrapper {
                    padding: 30px 20px;
                }

                .footer-cta {
                    padding: 80px 24px;
                }

                footer {
                    padding: 24px;
                    flex-direction: column;
                    gap: 12px;
                    text-align: center;
                }

                body {
                    cursor: auto;
                }

                .cursor,
                .cursor-follower {
                    display: none;
                }
            }
        </style>
    </head>

    <body>

        <!-- Custom Cursor -->
        <div class="cursor" id="cursor"></div>
        <div class="cursor-follower" id="cursorFollower"></div>

        <!-- NAV -->
        <!-- <nav>
        <a href="#" class="nav-logo">NEX<span>U</span>S</a>
        <ul class="nav-links">
            <li><a href="#services">Services</a></li>
            <li><a href="#approach">Approach</a></li>
            <li><a href="#journey">Journey</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#contact" class="nav-cta">Start Project</a>
    </nav> -->

        <!-- HERO -->
        <!-- <section class="hero" id="home">
        <div class="hero-bg"></div>
        <div class="hero-grid"></div>
        <div class="hero-content">
            <div class="hero-tag">Brand Architecture Studio</div>
            <h1 class="hero-title">
                <em>Craft</em>ing<br>
                <strong>Iconic</strong><br>Brands.
            </h1>
            <p class="hero-sub">We transform businesses into unforgettable brands through strategy, design, and digital
                excellence. Your vision — amplified.</p>
            <div class="hero-btns">
                <a href="#services" class="btn-primary-custom"><span>Explore Services</span></a>
                <a href="#journey" class="btn-outline-custom">Our Process</a>
            </div>
        </div>
        <div class="hero-num">EST. 2018 — BRAND ARCHITECTS</div>
        <div class="scroll-line">Scroll to Explore</div>
    </section> -->

        <!-- CYLINDER SERVICES -->
        <section class="services-section" id="services">
            <!-- <div class="section-label">What We Do</div> -->
            <div class="section-label">Best digital marketing company</div>

            <h2 class="section-title">Bhavi <em>Creations</em></h2>



<div class="contact-wrapper">
            <!-- <form action="https://formspree.io/f/your-id-here" method="POST" id="Bhavi CreationsContactForm"> -->
            <form action="send-mail.php" method="POST">

                <div class="form-group">
                    <input type="text" name="name" class="form-control-custom" placeholder=" " required>
                    <label class="form-label-custom">Your Name</label>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control-custom" placeholder=" " required>
                    <label class="form-label-custom">Email Address</label>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control-custom" placeholder=" ">
                    <label class="form-label-custom">Phone Number</label>
                </div>
                <div class="form-group">
                    <textarea name="message" rows="3" class="form-control-custom" placeholder=" "
                        required></textarea>
                    <label class="form-label-custom">Tell us about your project</label>
                </div>
                <div class="text-center mt-4">
                    <button type="submit" class="btn-primary-custom" style="width: 100%;"><span>Send Message — Get
                            Free Audit</span></button>
                </div>
            </form>
        </div>









            <div class="drum-wrapper container">
                <div class="cylinders-track" id="cylindersTrack">

                    <a class="cylinder-card" href="#" onclick="showService('branding',event)">
                        <div class="cylinder-icon"><i class="fas fa-fingerprint"></i></div>
                        <div class="cylinder-name">Brand Identity</div>
                        <div class="cylinder-desc">Logo, color systems, typography & complete visual language</div>
                        <div class="cylinder-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>

                    <a class="cylinder-card" href="#" onclick="showService('gmb',event)">
                        <div class="cylinder-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="cylinder-name">GMB Optimization</div>
                        <div class="cylinder-desc">Google My Business management & local SEO dominance</div>
                        <div class="cylinder-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>

                    <a class="cylinder-card" href="#" onclick="showService('social',event)">
                        <div class="cylinder-icon"><i class="fas fa-hashtag"></i></div>
                        <div class="cylinder-name">Social Media</div>
                        <div class="cylinder-desc">Content strategy, management & paid campaigns across platforms</div>
                        <div class="cylinder-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>

                    <a class="cylinder-card" href="#" onclick="showService('reviews',event)">
                        <div class="cylinder-icon"><i class="fas fa-star"></i></div>
                        <div class="cylinder-name">Review Management</div>
                        <div class="cylinder-desc">Build, monitor & respond to reviews that drive trust</div>
                        <div class="cylinder-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>

                    <a class="cylinder-card" href="#" onclick="showService('website',event)">
                        <div class="cylinder-icon"><i class="fas fa-code"></i></div>
                        <div class="cylinder-name">Website Design</div>
                        <div class="cylinder-desc">High-converting, stunning websites built for performance</div>
                        <div class="cylinder-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>

                    <a class="cylinder-card" href="#" onclick="showService('strategy',event)">
                        <div class="cylinder-icon"><i class="fas fa-chess-knight"></i></div>
                        <div class="cylinder-name">Brand Strategy</div>
                        <div class="cylinder-desc">Positioning, messaging frameworks & market differentiation</div>
                        <div class="cylinder-arrow"><i class="fas fa-arrow-right"></i></div>
                    </a>

                </div>
            </div>

            <p class="shake-hint">← Drag or Swipe to explore services →</p>

            <!-- Service Details -->
            <div class="service-detail" id="serviceDetail">
                <div class="detail-inner" id="detailInner"></div>
            </div>
        </section>


        



        <!-- CARDS — Why Bhavi Creations-->
        <section class="cards-section" id="approach">
            <div class="text-center">
                <div class="section-label" style="color:var(--gold)">Why Choose Us</div>
                <h2 class="section-title" style="color:var(--cream)">The <em style="color:var(--gold-light)">Bhavi Creations</em>
                    Difference</h2>
            </div>
            <div class="card-grid">
                <div class="brand-card">
                    <div class="card-num">01</div>
                    <div class="card-icon-box"><i class="fas fa-bolt"></i></div>
                    <div class="card-title-text">Fast Turnaround</div>
                    <p class="card-body-text">Brand identities in 7 days. Websites in 14. We move at the speed of ambition
                        without sacrificing quality.</p>
                    <a href="#contact" class="card-link">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="brand-card">
                    <div class="card-num">02</div>
                    <div class="card-icon-box"><i class="fas fa-chart-line"></i></div>
                    <div class="card-title-text">Results Driven</div>
                    <p class="card-body-text">Every design decision is backed by strategy. We measure success by your
                        growth, not just aesthetics.</p>
                    <a href="#contact" class="card-link">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="brand-card">
                    <div class="card-num">03</div>
                    <div class="card-icon-box"><i class="fas fa-shield-alt"></i></div>
                    <div class="card-title-text">Full Ownership</div>
                    <p class="card-body-text">You own 100% of your brand assets, code, and content. No lock-ins, no
                        surprises, complete transparency.</p>
                    <a href="#contact" class="card-link">Learn more <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <!-- <button class="p-2" >Get Estimation  </button> -->
            <div style="display: flex; justify-content: center; align-items: center; ">
                <button class="p-2 mt-5"> <a href="#contact">Get Estimation <i class="fas fa-arrow-right"></i></a> </button>
            </div>
        </section>

        <!-- JOURNEY — Steps Section -->
        <section class="journey-section" id="journey">
            <div class="text-center">
                <div class="section-label">The Path to Success</div>
                <h2 class="section-title">Your Brand <em>Journey</em></h2>
            </div>

            <div class="journey-track" id="journeyTrack">
                <div class="step-item" data-step="0">
                    <div class="step-bubble"><i class="fas fa-building"></i><span>Step 01</span></div>
                    <div class="step-content">
                        <div class="step-label">Foundation</div>
                        <div class="step-heading">Google My Business</div>
                        <p class="step-text">We claim, optimize & manage your GMB profile — ensuring you appear on the map
                            when customers search nearby. Accurate info, photos, posts & Q&A handled for you.</p>
                    </div>
                </div>

                <div class="step-item" data-step="1">
                    <div class="step-bubble"><i class="fas fa-share-alt"></i><span>Step 02</span></div>
                    <div class="step-content">
                        <div class="step-label">Presence</div>
                        <div class="step-heading">Social Media</div>
                        <p class="step-text">We build your social presence across Instagram, Facebook & LinkedIn. Consistent
                            content, branded visuals & strategic posting that grows your audience organically.</p>
                    </div>
                </div>

                <div class="step-item" data-step="2">
                    <div class="step-bubble"><i class="fas fa-star-half-alt"></i><span>Step 03</span></div>
                    <div class="step-content">
                        <div class="step-label">Trust</div>
                        <div class="step-heading">Review Management</div>
                        <p class="step-text">We implement systems to collect 5-star reviews, respond to every feedback
                            professionally and build undeniable social proof that converts new visitors.</p>
                    </div>
                </div>

                <div class="step-item" data-step="3">
                    <div class="step-bubble"><i class="fas fa-globe"></i><span>Step 04</span></div>
                    <div class="step-content">
                        <div class="step-label">Convert</div>
                        <div class="step-heading">Website</div>
                        <p class="step-text">A stunning, fast, mobile-first website that acts as your 24/7 salesperson.
                            Designed to convert visitors into leads and leads into loyal customers.</p>
                    </div>
                </div>

                <div class="step-success" id="stepSuccess">
                    <div class="success-icon"><i class="fas fa-trophy"></i></div>
                    <div>
                        <div class="success-title">Business <em>Success</em> Achieved!</div>
                        <p style="font-size:14px; color:rgba(245,240,232,0.6); line-height:1.7">
                            With all four pillars in place — local visibility, social presence, trusted reviews & a powerful
                            website — your business becomes an unstoppable growth machine. Then the loop continues: more
                            customers → more reviews → more rankings → more growth.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== FOOTER CTA & CONTACT FORM ===== -->
        <section class="footer-cta" id="contact">
            <div style="position:relative; z-index:2">
                <div class="section-label">Ready to Begin?</div>
                <h2 class="text-center"
                    style="font-family:'Cormorant Garamond', serif; font-size: clamp(42px, 6vw, 80px); font-weight: 300; margin-bottom: 15px;">
                    Let's Build Your<br><em>Iconic Brand</em></h2>
                <p class="text-center" style="font-size:15px; color: rgba(245,240,232,0.5); margin-bottom: 30px;">Schedule a
                    free 30-minute brand audit and discover your growth potential.</p>

                <!-- Premium Interactive Contact Form -->
                <div class="contact-wrapper">
                    <!-- <form action="https://formspree.io/f/your-id-here" method="POST" id="Bhavi CreationsContactForm"> -->
                    <form action="send-mail.php" method="POST">

                        <div class="form-group">
                            <input type="text" name="name" class="form-control-custom" placeholder=" " required>
                            <label class="form-label-custom">Your Name</label>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control-custom" placeholder=" " required>
                            <label class="form-label-custom">Email Address</label>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" class="form-control-custom" placeholder=" ">
                            <label class="form-label-custom">Phone Number</label>
                        </div>
                        <div class="form-group">
                            <textarea name="message" rows="3" class="form-control-custom" placeholder=" "
                                required></textarea>
                            <label class="form-label-custom">Tell us about your project</label>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn-primary-custom" style="width: 100%;"><span>Send Message — Get
                                    Free Audit</span></button>
                        </div>
                    </form>
                </div>

            </div>
        </section>

        <footer>
            <div class="footer-logo"><img src="assests/images/Bhavi_Creations/best_digital_marketing_white_logo_bhavi_creations.webp " alt="" style="width: 100px;"></div>
            <!-- <div class="footer-logo"><img src="assests/images/bhavi/foot_bhavi_logo.webp" alt="" style="width: 100px;"></div> -->
            <!-- <p>© 2026 Bhavi CreationsBrand Architects. All rights reserved.</p> -->
            <p style="font-size:11px; letter-spacing:2px; text-transform:uppercase; color:rgba(245,240,232,0.3)">Kakinada •
                Andhra Pradesh </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            // --- Service Data ---
            const services = {
                branding: {
                    num: '01',
                    title: 'Brand <em>Identity</em>',
                    text: 'Your brand identity is the visual heartbeat of your business. We craft complete identity systems — from logo mark to complete style guide — that make you instantly recognizable and deeply memorable.',
                    features: ['Logo Design & Variations', 'Color Palette System', 'Typography Selection', 'Brand Guidelines Document', 'Business Card & Stationery', 'Social Media Templates']
                },
                gmb: {
                    num: '02',
                    title: 'GMB <em>Optimization</em>',
                    text: 'When customers search for businesses like yours, they find you first. We fully optimize your Google Business Profile to dominate local search results and attract high-intent customers.',
                    features: ['Profile Claiming & Verification', 'Category & Attribute Optimization', 'Photo & Video Upload', 'Weekly Google Posts', 'Q&A Management', 'Local Citation Building']
                },
                social: {
                    num: '03',
                    title: 'Social <em>Media</em>',
                    text: 'Your audience lives on social media — we meet them there. From content creation to community management, we grow your following and turn followers into paying customers.',
                    features: ['Platform Strategy', 'Content Calendar & Creation', 'Branded Visual Templates', 'Hashtag Research', 'Engagement & Community Management', 'Paid Ad Campaigns']
                },
                reviews: {
                    num: '04',
                    title: 'Review <em>Management</em>',
                    text: 'Trust is your greatest asset. We build a systematic approach to collecting authentic reviews, managing your reputation, and turning happy customers into vocal advocates.',
                    features: ['Review Acquisition System', 'Multi-Platform Monitoring', 'Professional Response Management', 'Negative Review Recovery', 'Review Showcase Integration', 'Monthly Reputation Reports']
                },
                website: {
                    num: '05',
                    title: 'Website <em>Design</em>',
                    text: 'Your website is your digital headquarters. We build stunning, fast, SEO-optimized websites that captivate visitors and convert them into customers around the clock.',
                    features: ['Custom UI/UX Design', 'Mobile-First Development', 'SEO Foundation Setup', 'Speed Optimization', 'Lead Capture Forms', 'Analytics Integration']
                },
                strategy: {
                    num: '06',
                    title: 'Brand <em>Strategy</em>',
                    text: 'Great brands are built on clear strategy. We help you define your positioning, refine your messaging, and identify the whitespace where your brand can own the conversation.',
                    features: ['Market & Competitor Analysis', 'Brand Positioning Framework', 'Target Audience Profiling', 'Messaging Architecture', 'Tone of Voice Guide', 'Brand Story Development']
                }
            };

            function showService(key, e) {
                e.preventDefault();
                const detail = document.getElementById('serviceDetail');
                const inner = document.getElementById('detailInner');
                const s = services[key];

                document.querySelectorAll('.cylinder-card').forEach(c => c.classList.remove('active'));
                e.currentTarget.classList.add('active');

                inner.innerHTML = `
    <div>
      <div class="detail-title">${s.title}</div>
      <p class="detail-text">${s.text}</p>
      <ul class="detail-features">
        ${s.features.map(f => `<li>${f}</li>`).join('')}
      </ul>
    </div>
    <div>
      <div class="detail-number">${s.num}</div>
    </div>
  `;

                detail.classList.add('visible');
                setTimeout(() => {
                    detail.scrollIntoView({
                        behavior: 'smooth',
                        block: 'nearest'
                    });
                }, 100);
            }

            // --- Drag/Swipe and Auto-Movement for Service Track ---
            const track = document.getElementById('cylindersTrack');
            let isDown = false;
            let startX;
            let scrollLeft;

            track.addEventListener('mousedown', (e) => {
                isDown = true;
                startX = e.pageX - track.offsetLeft;
                scrollLeft = track.scrollLeft;
            });
            track.addEventListener('mouseleave', () => {
                isDown = false;
            });
            track.addEventListener('mouseup', () => {
                isDown = false;
            });
            track.addEventListener('mousemove', (e) => {
                if (!isDown) return;
                e.preventDefault();
                const x = e.pageX - track.offsetLeft;
                const walk = (x - startX) * 2; // Scroll Speedmultiplier
                track.scrollLeft = scrollLeft - walk;
            });

            // Subtle Auto Scroll Loop Animation
            let autoScrollSpeed = 0.5;
            let stopScroll = false;

            function autoMoveServices() {
                if (!stopScroll && !isDown) {
                    track.scrollLeft += autoScrollSpeed;
                    if (track.scrollLeft >= (track.scrollWidth - track.clientWidth - 1)) {
                        track.scrollLeft = 0; // Infinite loop reset
                    }
                }
                requestAnimationFrame(autoMoveServices);
            }
            // Start auto scroll
            requestAnimationFrame(autoMoveServices);

            // Pause auto-scroll on Hover/Touch
            track.addEventListener('mouseenter', () => stopScroll = true);
            track.addEventListener('mouseleave', () => stopScroll = false);
            track.addEventListener('touchstart', () => stopScroll = true);
            track.addEventListener('touchend', () => stopScroll = false);


            // --- Cursor ---
            const cursor = document.getElementById('cursor');
            const follower = document.getElementById('cursorFollower');
            document.addEventListener('mousemove', e => {
                cursor.style.left = e.clientX - 6 + 'px';
                cursor.style.top = e.clientY - 6 + 'px';
                setTimeout(() => {
                    follower.style.left = e.clientX - 18 + 'px';
                    follower.style.top = e.clientY - 18 + 'px';
                }, 80);
            });

            // --- Scroll Animations ---
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                    }
                });
            }, {
                threshold: 0.1
            });

            document.querySelectorAll('.step-item, .step-success').forEach(el => observer.observe(el));

            // --- Auto Step Loop Animation ---
            let stepIndex = 0;
            const stepItems = document.querySelectorAll('.step-item');
            const stepSuccess = document.getElementById('stepSuccess');

            function runStepLoop() {
                stepItems.forEach((s, i) => {
                    if (i <= stepIndex) {
                        s.classList.add('active');
                    } else {
                        s.classList.remove('active');
                    }
                });

                if (stepIndex >= stepItems.length) {
                    stepSuccess.classList.add('visible');
                    setTimeout(() => {
                        stepItems.forEach(s => s.classList.remove('active'));
                        stepSuccess.classList.remove('visible');
                        stepIndex = 0;
                        setTimeout(runStepLoop, 800);
                    }, 3000);
                    return;
                }

                stepIndex++;
                setTimeout(runStepLoop, 1200);
            }

            const journeyObserver = new IntersectionObserver(entries => {
                if (entries[0].isIntersecting) {
                    setTimeout(runStepLoop, 500);
                    journeyObserver.disconnect();
                }
            }, {
                threshold: 0.3
            });
            journeyObserver.observe(document.getElementById('journeyTrack'));
        </script>

        <script>
            $(document).ready(function() {
                // Toggle dropdown on button click
                $('.toggleDropdown').change(function() {
                    if ($(this).is(':checked')) {
                        $('.dropdown-menu').show();
                    } else {
                        $('.dropdown-menu').hide();
                    }
                });
            });
        </script>
    </body>

</html>