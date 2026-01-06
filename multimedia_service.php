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
                    <li><a class="dropdown-item menu_item_black  " href="pages.php">Pages</a></li>
                    <!-- <li><a class="dropdown-item menu_item_black lol" href="https://invoice.bhavicreations.com">Login</a></li> -->
                </ul>


            </div>
        </div>
    </section>
    <style>
        .section-box {
            border: 1px solid #ddd;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }


        .enquiry-wrapper {
            max-width: 800px;
            margin: 40px auto;
        }

        .enquiry-card {
            background: #fff;
            border-radius: 16px;
            padding: 30px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .enquiry-card h3 {
            font-weight: 600;
            color: #333;
        }

        .section-box {
            background: #f8f9fc;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .section-box h5 {
            font-weight: 600;
            margin-bottom: 12px;
            color: #444;
        }

        .section-box label {
            margin-right: 15px;
            font-weight: 500;
            cursor: pointer;
        }

        .form-control,
        .form-select {
            border-radius: 10px;
        }

        input[type="radio"] {
            accent-color: #667eea;
        }

        button.btn-primary {
            border-radius: 12px;
            padding: 12px;
            font-size: 18px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
        }

        button.btn-primary:hover {
            opacity: 0.9;
        }




        
    </style>

    <div class="container my-5">
        <form action="submit.php" method="post">

            <h3 class="text-center mb-4" style="color:blue ; font-weight: 800;"> Bhavi Creation Pvt Ltd</h3>

            <!-- BASIC DETAILS -->
            <div class="section-box">
                <input type="text" name="name" class="form-control mb-2" placeholder="Your Name" required>
                <input type="text" name="phone" class="form-control mb-2" placeholder="Phone Number" required>
                <textarea name="address" class="form-control" placeholder="Address"></textarea>
            </div>

            <!-- PHOTO -->
            <div class="section-box">
                <h5>Photos</h5>
                <label><input type="radio" name="photo_count" value="4" onclick="showPhotoType()"> 4</label>
                <label><input type="radio" name="photo_count" value="8" onclick="showPhotoType()"> 8</label>
                <label><input type="radio" name="photo_count" value="12" onclick="showPhotoType()"> 12</label>
                <label><input type="radio" name="photo_count" value="16" onclick="showPhotoType()"> 16</label>
                <label><input type="radio" name="photo_count" value="custom" onclick="showPhotoCustom()"> Custom</label>

                <div id="photo_custom" style="display:none;" class="mt-2">
                    <textarea name="photo_custom_msg" class="form-control" placeholder="Custom photo requirement"></textarea>
                </div>

                <div id="photo_type" style="display:none;" class="mt-2">
                    <h5>Photo Type</h5>
                    <label><input type="radio" name="photo_type" value="Basic"> Basic</label>
                    <label><input type="radio" name="photo_type" value="Standard"> Standard</label>
                    <label><input type="radio" name="photo_type" value="Premium"> Premium</label>
                </div>
            </div>

            <!-- VIDEOS -->
            <div class="section-box">
                <h5>Videos</h5>
                <label><input type="radio" name="video_count" value="4" onclick="showVideoType()"> 4</label>
                <label><input type="radio" name="video_count" value="8" onclick="showVideoType()"> 8</label>
                <label><input type="radio" name="video_count" value="12" onclick="showVideoType()"> 12</label>
                <label><input type="radio" name="video_count" value="16" onclick="showVideoType()"> 16</label>
                <label><input type="radio" name="video_count" value="custom" onclick="showVideoCustom()"> Custom</label>

                <div id="video_custom" style="display:none;" class="mt-2">
                    <textarea name="video_custom_msg" class="form-control"></textarea>
                </div>

                <div id="video_type" style="display:none;" class="mt-2">
                    <h5>Video Type</h5>
                    <label><input type="radio" name="video_type" value="Basic"> Basic</label>
                    <label><input type="radio" name="video_type" value="Standard"> Standard</label>
                    <label><input type="radio" name="video_type" value="Premium"> Premium</label>
                </div>
            </div>

            <!-- REELS -->
            <div class="section-box">
                <h5>Reels</h5>
                <label><input type="radio" name="reels_count" value="4" onclick="showReelsType()"> 4</label>
                <label><input type="radio" name="reels_count" value="8" onclick="showReelsType()"> 8</label>
                <label><input type="radio" name="reels_count" value="12" onclick="showReelsType()"> 12</label>
                <label><input type="radio" name="reels_count" value="16" onclick="showReelsType()"> 16</label>
                <label><input type="radio" name="reels_count" value="custom" onclick="showReelsCustom()"> Custom</label>

                <div id="reels_custom" style="display:none;" class="mt-2">
                    <input type="number" name="reels_custom_msg" class="form-control" placeholder="No of reels">
                </div>

                <div id="reels_type" style="display:none;" class="mt-2">
                    <h5>Reels Type</h5>
                    <label><input type="radio" name="reels_type" value="Basic"> Basic</label>
                    <label><input type="radio" name="reels_type" value="Standard"> Standard</label>
                    <label><input type="radio" name="reels_type" value="Premium"> Premium</label>
                </div>
            </div>

            <!-- WEBSITE -->
            <div class="section-box">
                <h5>Website</h5>

                <label>
                    <input type="radio" name="website_type" value="Basic"> Basic
                </label>

                <label>
                    <input type="radio" name="website_type" value="Standard"> Standard
                </label>

                <label>
                    <input type="radio" name="website_type" value="Premium"> Premium
                </label>

                <label>
                    <input type="radio" name="website_type" value="Custom" id="websiteCustomRadio">
                    Custom
                </label>

                <!-- Custom Text Field -->
                <div id="customWebsiteBox" style="display:none; margin-top:10px;">
                    <input type="text"
                        name="website_custom_text"
                        class="form-control"
                        placeholder="Enter custom website requirement">
                </div>
            </div>


            <!-- SEO -->
            <div class="section-box">
                <h5>SEO</h5>
                <label><input type="radio" name="seo_option" value="Need"> Need</label>
                <label><input type="radio" name="seo_option" value="No Need"> No Need</label>
            </div>

            <!-- SOCIAL -->
            <div class="section-box">
                <h5>Social Media Handling</h5>
                <select class="form-select" multiple name="social_media[]">
                    <option>Facebook</option>
                    <option>Instagram</option>
                    <option>YouTube</option>
                    <option>LinkedIn</option>
                    <option>Twitter</option>
                    <option>Pinterest</option>
                    <option>Quora</option>
                </select>
            </div>


      


            <!-- PAYMENT -->
            <div class="section-box">
                <h5>Payment Type</h5>
                <label><input type="radio" name="payment_type" value="Quarterly"> Quarterly</label>
                <label><input type="radio" name="payment_type" value="Half-Yearly"> Half-Yearly</label>
                <label><input type="radio" name="payment_type" value="Yearly"> Yearly</label>
            </div>

            <!-- GST -->
            <div class="section-box">
                <h5>GST</h5>
                <label><input type="radio" name="gst_option" value="With GST"> With GST</label>
                <label><input type="radio" name="gst_option" value="Without GST"> Without GST</label>
            </div>

            <button class="btn btn-primary w-100">Submit Enquiry</button>

        </form>
    </div>

    <script>
        function showPhotoType() {
            document.getElementById('photo_type').style.display = 'block';
            document.getElementById('photo_custom').style.display = 'none';
        }

        function showPhotoCustom() {
            document.getElementById('photo_custom').style.display = 'block';
            document.getElementById('photo_type').style.display = 'block';
        }

        function showVideoType() {
            document.getElementById('video_type').style.display = 'block';
            document.getElementById('video_custom').style.display = 'none';
        }

        function showVideoCustom() {
            document.getElementById('video_custom').style.display = 'block';
            document.getElementById('video_type').style.display = 'block';
        }

        function showReelsType() {
            document.getElementById('reels_type').style.display = 'block';
            document.getElementById('reels_custom').style.display = 'none';
        }

        function showReelsCustom() {
            document.getElementById('reels_custom').style.display = 'block';
            document.getElementById('reels_type').style.display = 'block';
        }
    </script>
    <script>
        document.querySelectorAll('input[name="website_type"]').forEach((radio) => {
            radio.addEventListener('change', function() {
                if (this.value === 'Custom') {
                    document.getElementById('customWebsiteBox').style.display = 'block';
                } else {
                    document.getElementById('customWebsiteBox').style.display = 'none';
                    document.querySelector('input[name="website_custom_text"]').value = '';
                }
            });
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
</body>

</html>