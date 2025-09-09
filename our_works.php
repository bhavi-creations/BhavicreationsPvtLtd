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




        .card {
            background-color: lightgrey;
            /* width: 250px;
      padding: 20px; */
            border-radius: 10px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .card:hover {
            transform: translateY(-10px) scale(1.03);
            background-color: #e0f7fa;
        }

            /* light cyan on hover */
            box-shad img,
            video {
                max-width: 100%;
                height: auto;
            }

            @media (min-width: 1200px) {

                .container,
                .container-lg,
                .container-md,
                .container-sm,
                .container-xl {
                    max-width: 1300px !important;
                }
            }





            @media (min-width: 768px) and (max-width: 992px) {

                .container,
                .container-lg,
                .container-md,
                .container-sm,
                .container-xl {
                    max-width: 880px !important;
                }
            }

            @media (max-width:768px) {
                .team_devision_btn {
                    font-size: 14px;
                    /* Reduce font size */
                    padding: 6px 12px;
                    /* Smaller padding */

                }

            }
    </style>

    <style>
        .media-tab-buttons button {
            width: 100%;
            padding: 10px;
            background-color: #ddd;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: all 0.3s ease;
        }



        .media-tab-buttons button.active {
            background-color: #007BFF;

            /* background-color: #28323c; */
            color: #fff;
        }

        @media (max-width:768px) {
            .media-tab-buttons button.active {
                font-size: 12px !important;
            }
        }

        .media-tab-content {
            display: none;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .media-tab-content.active {
            display: block;
        }



        .media-box {
            margin: 10px 0;
        }

        img,
        video {
            max-width: 100%;
            height: auto;
        }

        @media (max-width:768px) {
            .media-tab-content video {
                width: 100% !important;
            }

        }

        /* size  */

        .media-tab-content {
            display: none;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .media-tab-content.active {
            display: flex;
        }

        .equal-media {
            height: 250px;
            width: auto;
            object-fit: cover;
        }

        .media-tab-btn {
            padding: 10px 20px;
            margin: 5px;
            background-color: #ddd;
            border: none;
            cursor: pointer;
        }

        .media-tab-btn.active {
            background-color: #333;
            color: white;
        }

        @media (min-width:992px) and (max-width:1200px) {
            .logo_section {
                font-size: 10px !important;
            }

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
                    <li class="d-md-none "><a class="dropdown-item menu_item  " href="pages.php">Page</a></li>
                    <!-- <li><a class="dropdown-item menu_item_black lol" href="https://invoice.bhavicreations.com">Login</a> -->
                    </li>
                </ul>


            </div>
        </div>
    </section>




    <div class="loader_butterflu">

        <svg viewBox="0 0 18.528 35.424" version="1.1" y="0" x="0" height="369" width="193"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M3.358 35.05c.435-.175.646-.408.861-.95.374-.94.698-1.52 1.145-2.05.78-.92 1.757-1.638 2.666-1.957.603-.212.9-.204 1.505.041.843.343 1.597.25 2.062-.254.95-1.029 3.95-6.873 5.841-11.376.869-2.07.831-1.882.797-3.962-.034-2.106-.024-2.064-.927-3.887-1.639-3.31-4.426-6.582-7.147-8.392C8.71 1.298 6.715.504 5.296.328c-.718-.09-2.465-.001-3.183.16C.943.752.279 1.268.279 1.917c0 .119.437 1.136.97 2.26.533 1.126 1.044 2.291 1.135 2.591.334 1.106.776 3.567.945 5.27.065.652.357 1.286.751 1.633.419.367 1.351.786 1.964.883.286.044.534.096.553.115.018.018-.129.128-.327.244-.761.446-1.432 1.439-1.74 2.574-.216.802-.194 2.914.045 4.121.24 1.212.575 2.318 1.031 3.403.46 1.092.535 1.458.439 2.135-.223 1.575-1.958 4.03-3.489 4.937-.693.41-.885.587-1.066.98-.173.375-.185.535-.069.953.223.802 1.206 1.326 1.937 1.033z"
                fill="#000"></path>
        </svg>


        <svg viewBox="0 0 2.4 14.4" version="1.1" y="0" x="0" height="150" width="25"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M2.2 13c0 .641-.447 1.16-1 1.16-.553 0-1-.519-1-1.16V1.4C.2.759.647.24 1.2.24c.553 0 1 .519 1 1.16z"
                fill="#000"></path>
        </svg>


        <svg viewBox="0 0 18.528 35.424" version="1.1" y="0" x="0" height="369" width="193"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M15.105 35.155c-.42-.196-.627-.482-.902-1.253-.544-1.517-2.145-3.126-3.636-3.652-.69-.243-.887-.242-1.486.01-.617.26-1.342.278-1.798.045-.555-.283-1.76-2.262-3.476-5.708C2.628 22.232.984 18.575.455 17.144c-.236-.637-.237-.655-.237-2.485 0-2.164.01-2.209.9-4.013 1.011-2.049 2.53-4.189 4.185-5.9C7.679 2.293 9.783.995 12.49.313c.782-.197 1.554-.236 2.695-.137 1.619.14 2.38.38 2.882.909.21.22.246.321.243.684-.002.373-.122.67-.959 2.395-1.277 2.63-1.59 3.806-2.035 7.63-.111.951-.316 1.426-.809 1.87-.52.47-1.306.807-2.165.928l-.391.054.35.224c.897.574 1.58 1.674 1.834 2.956.193.969.12 2.791-.164 4.15-.222 1.061-.696 2.518-1.12 3.443-.336.735-.411 1.584-.203 2.3.505 1.738 2.056 3.692 3.736 4.705.693.417.938.83.874 1.476-.104 1.071-1.193 1.706-2.153 1.256z"
                fill="#000"></path>
        </svg>
    </div>

    <div class="container">


        <div class="row g-2 mb-4 row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 media-tab-buttons mx-1">
            <div><button class="media-tab-btn active" onclick="showMediaTab(event, 'all')">All</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'logo')">Logo</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'website')">Website</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'posters')">Posters</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'reels')">Reels</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'photoshoot')">Photo Shoot</button> </div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'videos')">Videos</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'testimonials')">Testimonials</button> </div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'animatedvideos')">Animated Videos</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'visitingcards')">Visiting Cards</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'pamphlets')">Pamphlets</button></div>
            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'brochures')">Brochures</button></div>

            <div><button class="media-tab-btn" onclick="showMediaTab(event, 'hoardings')">Hoardings</button></div>
        </div>

        <!-- <div id="all" class="media-tab-content active">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust path as necessary

                $sql = "SELECT * FROM our_works ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // Update path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card shadow-sm h-100' style='overflow: hidden;'>
                        <div class='card-body p-2'>";

                        // Wrap in link if available
                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Display image (centered)
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<div class='d-flex justify-content-center'>
                            <img src='$path' class='img-fluid' style='object-fit: cover; max-width: 100%; border-radius: 8px;'>
                          </div>";
                        }
                        // Display video
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='object-fit: cover; width: 100%; border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // Display PDF
                        elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        }
                        // Unsupported type
                        else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>  -->

      <div id="all" class="media-tab-content active">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust path as necessary

                $sql = "SELECT * FROM our_works ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // Update path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card shadow-sm h-100' style='overflow: hidden;'>
                        <div class='card-body p-2'>";

                        // Wrap in link if available
                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Display image (centered)
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<div class='d-flex justify-content-center'>
                            <img src='$path' class='img-fluid'  border-radius: 8px;'>
                          </div>";
                        }
                        // Display video
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls   border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // Display PDF
                        elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        }
                        // Unsupported type
                        else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div> 


        <div id="logo" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php';

                $sql = "SELECT * FROM our_works WHERE media_type = 'Logo' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "./admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-3 mb-4'>
                        <div class='card' style='overflow: hidden; '>
                            <div class='card-body ' style='text-align: left;'>";

                        if ($link) echo "<a href='$link' target='_blank' style='display: block;'>";

                        echo "<div  display: flex; align-items: center;'>";

                        // Show image
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' alt='$title' style='max-width: 100%; max-height: 100%; object-fit: contain;'>";
                        }
                        // Show video
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls   object-fit: contain;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // Show PDF
                        elseif ($ext === 'pdf') {
                            echo "<a href='$path' target='_blank' class='btn btn-outline-primary'>📄 View PDF</a>";
                        } else {
                            echo "<p class='text-muted'>Unsupported file</p>";
                        }

                        echo "</div>"; // end media wrapper

                        if ($link) echo "</a>";

                        echo "<p class='mt-2 mb-0'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No logo media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="website" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php';

                $sql = "SELECT * FROM our_works WHERE media_type = 'Website' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-lg-4 col-md-6 col-12 mb-4'>
                    <div class='card border-0 shadow-sm h-100 hover-card'>
                        <div class='card-body d-flex flex-column justify-content-between' style='padding: 10px;'>";

                        // Media Preview with link
                        echo "<div style='width: 100%; display: flex; align-items: center; justify-content: center; background-color: #f8f9fa; height: 145px; overflow: hidden;'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank' style='display:block; width:100%; text-align:center;'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='max-height: 100%; max-width: 100%; object-fit: contain; transition: transform 0.3s;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='max-height: 100%; max-width: 100%; object-fit: contain;'>
                        <source src='$path' type='video/$ext'>
                        Your browser does not support the video tag.
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<div class='w-100 h-100 d-flex align-items-center justify-content-center'>
                            <span class='text-muted'>📄 PDF</span>
                        </div>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "</div>"; // end media preview

                        // Title
                        echo "<div class='mt-2 text-center'><strong>$title</strong></div>";

                        // View Site Button
                        if (!empty($link)) {
                            echo "<div class='mt-2 text-center'>
                        <a href='$link' target='_blank' class='btn btn-sm btn-success'>🌐 View Site</a>
                    </div>";
                        }

                        echo "</div></div></div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No Website media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="posters" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php';

                $sql = "SELECT * FROM our_works WHERE media_type = 'Posters' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                        <div class='card border-0 shadow-sm'>
                            <div class='card-body p-2 text-center'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // ✅ Display media with original ratio
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='w-100' style='border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                            Your browser does not support the video tag.
                          </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No Posters uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>

        <div id="reels" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Reels' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                        <div class='card'>
                            <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Show image
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        }
                        // Show video
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='w-100' style='border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // Show PDF link
                        elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        }
                        // Unsupported format
                        else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                            </div>
                        </div>
                    </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No Reels uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="photoshoot" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Photo Shoot' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // Update path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            // 👉 Full-size image, no height/width restrictions
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='width: 100%; border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No Photo Shoot media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>

        <div id="videos" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // adjust path as needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Videos' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // adjust this path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // IMAGE
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        }
                        // VIDEO
                        elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='w-100' style='border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        }
                        // PDF
                        elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        }
                        // OTHER
                        else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No video media uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="testimonials" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust path if necessary

                $sql = "SELECT * FROM our_works WHERE media_type = 'Testimonials' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file; // Adjust path if needed

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='img-fluid' style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No testimonials uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>




        <div id="animatedvideos" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust if path differs

                $sql = "SELECT * FROM our_works WHERE media_type = 'Animated Videos' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                      </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No animated videos uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>



        <div id="visitingcards" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // adjust this path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Visiting Cards' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='w-100' style='border-radius: 8px;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No visiting cards uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>




        <div id="pamphlets" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Update path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Pamphlets' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='img-fluid' style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No pamphlets uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <!-- Brochures Tab Content -->
        <div id="brochures" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // Adjust the path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Brochures' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card h-100'>
                        <div class='card-body p-2 text-center'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;  object-fit: contain;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls style='border-radius: 8px;  object-fit: contain;'>
                            <source src='$path' type='video/$ext'>
                          </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<div style=' overflow: hidden; border-radius: 8px; margin: auto;'>
                            <iframe src='$path#toolbar=0' width='100%' height='100%' style='border: none;'></iframe>
                          </div>";
                            // echo "<p class='mt-2'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 Open Full PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No brochures uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>


        <div id="hoardings" class="media-tab-content">
            <div class="row">
                <?php
                include 'db.connection/db_connection.php'; // adjust path if needed

                $sql = "SELECT * FROM our_works WHERE media_type = 'Hoardings' ORDER BY id DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $file = htmlspecialchars($row['file_path']);
                        $title = htmlspecialchars($row['title']);
                        $link = htmlspecialchars($row['media_link']);
                        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        $path = "admin/public/uploads/staff/" . $file;

                        echo "<div class='col-md-4 mb-4'>
                    <div class='card'>
                        <div class='card-body p-2'>";

                        if (!empty($link)) echo "<a href='$link' target='_blank'>";

                        // Display media based on file type
                        if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg', 'bmp'])) {
                            echo "<img src='$path' class='img-fluid' style='border-radius: 8px;'>";
                        } elseif (in_array($ext, ['mp4', 'webm', 'mov', 'avi'])) {
                            echo "<video controls class='img-fluid' style='border-radius: 8px;'>
                        <source src='$path' type='video/$ext'>
                    </video>";
                        } elseif ($ext === 'pdf') {
                            echo "<p class='text-center'><a href='$path' target='_blank' class='btn btn-outline-info btn-sm'>📄 View PDF</a></p>";
                        } else {
                            echo "<p class='text-muted text-center'>Unsupported file format</p>";
                        }

                        if (!empty($link)) echo "</a>";

                        echo "<p class='mt-2 mb-0 text-center'><strong>$title</strong></p>
                        </div>
                    </div>
                </div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-muted text-center'>No hoardings uploaded yet.</p></div>";
                }

                $conn->close();
                ?>
            </div>
        </div>

    </div>


    <script>
        function showMediaTab(event, tabName) {
            // Hide all tab contents
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("media-tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }

            // Deactivate all tab buttons
            tablinks = document.getElementsByClassName("media-tab-btn");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].classList.remove("active");
            }

            // Show the specific tab content
            document.getElementById(tabName).classList.add("active");

            // Activate the button that opened the tab
            event.currentTarget.classList.add("active");

            // Update URL hash
            window.location.hash = tabName;
        }

        // Function to show the correct tab on page load based on URL hash
        function showTabFromHash() {
            let hash = window.location.hash.substring(1); // Remove the '#'
            if (hash) {
                let targetTab = document.getElementById(hash);
                let targetButton = document.querySelector(`.media-tab-btn[onclick*="'${hash}'"]`);

                if (targetTab && targetButton) {
                    // Manually trigger the tab display
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("media-tab-content");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].classList.remove("active");
                    }
                    tablinks = document.getElementsByClassName("media-tab-btn");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].classList.remove("active");
                    }

                    targetTab.classList.add("active");
                    targetButton.classList.add("active");
                } else {
                    // If hash doesn't match a valid tab, default to 'all'
                    showMediaTab(null, 'all');
                }
            } else {
                // Default to 'all' tab if no hash is present
                showMediaTab(null, 'all');
            }
        }

        // Call showTabFromHash when the page loads
        window.onload = showTabFromHash;

        // Listen for hash changes (e.g., when user uses browser back/forward buttons)
        window.onhashchange = showTabFromHash;
    </script>








    <!-- FOOTER -->
    <footer class="text-light foot_bg_img   mt-5 foot ">

        <div class="container " style="padding-top: 100px;">
            <div class="row">

                <div class="   col-md-4 text-center order-2 order-md-1">

                    <p style="color: #ffffff;font-weight:bold;font-size:24px;  ">Contact Us</p>
                    <h5 style="color: #ffffff; font-weight: 1000; margin-top: 30px; ">
                        <span style="color:#ffffff; font-weight: bold;">
                            <i class="fa-solid fa-phone"></i>
                        </span>: +91 9642343434
                    </h5>


                    <a href="mailto:admin@bhavicreations.com" style="text-decoration: none; ">
                        <div class="d-flex mail_text_box" style="margin-top: 10px;">
                            <span class="tooltip-container  ">

                                <span class="text">@</span>
                            </span> &nbsp;

                            <p style="color: #ffffff; font-weight: bold;  "> admin@bhavicreations.com </p>

                        </div>
                    </a>


                    <div class="mt-3  " style="margin-bottom: 55px;">
                        <a href="https://www.facebook.com/BhavicreationsPvtLtd/ " target="_blank"> <i style="font-size: 24px; color: #ffffff; " class="fa-brands fa-facebook px-1  footicon"></i></a>
                        <a href="https://www.instagram.com/bhavicreations_pvtltd/ " target="_blank"> <i style="font-size: 24px; color: #ffffff;" class="fa-brands fa-instagram  px-1 footicon"></i></a>
                        <a href="https://twitter.com/bhavi_creations" target="_blank"> <i style="font-size: 24px; color: #ffffff;" class="fa-brands  px-1  fa-square-x-twitter"></i></a>
                        <a href="https://www.youtube.com/@bhavicreationspvtltd" target="_blank"> <i style="font-size: 24px; color: #ffffff;" class="fa-brands fa-youtube  px-1  footicon"></i></a>
                        <a href="https://www.linkedin.com/in/bhavi-creations-pvt-ltd-926651235/" target="_blank"> <i style="font-size: 24px;  color: #ffffff;  " class="fa-brands fa-linkedin   px-1 footicon"></i></a>
                        <a href="https://in.pinterest.com/bhavicreations/" target="_blank"> <i style="font-size: 24px ; color: #ffffff;" class="fa-brands fa-pinterest px-1  footicon"></i></a>


                    </div>
                </div>


                <div class="  col-md-4  order-1 order-md-2" style="text-align: center; ">
                    <a href="index.php">
                        <img src="assests/images/Bhavi_Creations/best_digital_marketing_white_logo_bhavi_creations.webp"
                            style="width: 250px;height: 130px;" alt="" class="img-fluid  " />
                    </a>

                </div>


                <div class="    col-md-4 text-center order-3  order-md-3">

                    <p style="color: #ffffff;font-weight:bold;font-size:24px;  ">Address</p>

                    <p style="color: #ffffff; font-weight: 100;">Behind J.N.T.U Engineering College Play Ground,
                        Ranga Rao Nagar, Kakinada, Andhra Pradesh 533003</p>

                </div>

            </div>
        </div>




        <div class="footer-area-bottom theme-bg text-center pb-4">
            <div class="container" style="margin-top: 30px;  ">
                <div class="row">
                    <div class=" col-12">
                        <div class="footer-widget__copyright">
                            <span style="color:#ffffff;font-weight: 400;">
                                <a href="terms.php" style="text-decoration: none; color: #ffffff">Terms &
                                    conditions |
                                </a>
                                <a href="privacy.php" style="text-decoration: none; color: #ffffff">
                                    Privacy & policy ||</a>
                                <a href="https://bhavicreations.com" style="text-decoration: none; color: #ffffff">
                                    Design with love @</a> <a href="https://bhavicreations.com"
                                    style="text-decoration: none; color: #ffffff">
                                    <img src="assests\images\bhavi_logo\Bhavi_Branding_Stamp.png"
                                        class="img-fluid brand_image" alt=""></a>

                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    </footer>




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


    <script>
        // Function to scroll to the top of the page
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Optional, smooth scrolling animation
            });
        }

        // Show scroll button when scrolling down
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollBtn").style.display = "block";
            } else {
                document.getElementById("scrollBtn").style.display = "none";
            }
        }
    </script>




    <script>
        $(document).ready(function() {
            // Initial state
            $(".Rajahmundry").hide();

            // Dropdown change event
            $("#branchdropdown").change(function() {
                var selectedBranch = $(this).val();

                // Hide all content
                $(".kakinada, .Rajahmundry").hide();

                // Show content based on the selected branch
                if (selectedBranch === "Kakinada") {
                    $(".kakinada").show();
                    $(".kakinadaContent").show();
                    $(".RajahmundryContent").hide();
                    $(".carousal1").show();
                    $(".carousal2").hide();

                    // reloadCarousel(".carousal1");
                } else if (selectedBranch === "Rajahmundry") {
                    $(".Rajahmundry").show();
                    $(".RajahmundryContent").show();
                    $(".kakinadaContent").hide();
                    $(".carousal1").hide();
                    $(".carousal2").show();

                    // reloadCarousel(".carousal2");

                }
            });

            // // Function to reload the carousel
            // function reloadCarousel(carouselId) {
            //     var carousel = $(carouselId);
            //     carousel.carousel(0); // Reset the carousel to the first slide
            // }

            // Initialize carousels
            $('#recipeCarousel1').carousel({
                interval: 3000
            });
            $('#recipeCarousel2').carousel({
                interval: 3000
            });

            $('.carousel .carousel-item').each(function() {
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });

            $('.carousel2 .carousel-item').each(function() {
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });

            // Trigger initial selection
            $("#branchdropdown").trigger("change");
        });
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>




</body>

</html>