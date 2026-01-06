<?php
include 'db.connection/db_connection.php';
$result = $conn->query("SELECT * FROM bhavi_enquiries ORDER BY created_at DESC");
?>


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

    <style>
        .enquiry-card {
            border: 1px solid #ddd;
            border-radius: 12px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .label {
            font-weight: 600;
        }

        .desktop-table {
            display: none;
        }

        .print-btn {
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        @media (min-width:768px) {
            .mobile-cards {
                display: none;
            }

            .desktop-table {
                display: block;
            }
        }

        @media print {

            .print-btn,
            .action-col {
                display: none;
            }

            .mobile-cards {
                display: none;
            }

            .desktop-table {
                display: block;
            }
        }



        /* view enquries */
    </style>
    <style>
/* ===== COMMON ===== */
body{
    background:#f4f6fb;
    font-family:'Poppins',sans-serif;
}

h3{
    font-weight:600;
    color:#333;
}

/* ===== MOBILE CARDS ===== */
.mobile-cards{
    display:none;
}

.enquiry-card{
    background:#fff;
    border-radius:14px;
    padding:18px;
    margin-bottom:18px;
    box-shadow:0 10px 30px rgba(0,0,0,0.08);
    border-left:5px solid #667eea;
}

.enquiry-card p{
    margin-bottom:6px;
    font-size:14px;
}

.enquiry-card .label{
    font-weight:600;
    color:#555;
}

.enquiry-card i{
    font-size:18px;
    cursor:pointer;
}

.enquiry-card i:hover{
    transform:scale(1.15);
    transition:0.2s;
}

/* ===== DESKTOP TABLE ===== */
.desktop-table{
    background:#fff;
    padding:15px;
    border-radius:16px;
    box-shadow:0 15px 40px rgba(0,0,0,0.1);
}

.table{
    margin-bottom:0;
}

.table thead{
    background:linear-gradient(135deg,#667eea,#764ba2);
    color:#fff;
}

.table thead th{
    font-weight:500;
    text-align:center;
    vertical-align:middle;
}

.table tbody td{
    vertical-align:middle;
    text-align:center;
    font-size:14px;
}

.action-col i{
    font-size:18px;
    cursor:pointer;
}

.action-col i:hover{
    transform:scale(1.15);
    transition:0.2s;
}

/* ===== RESPONSIVE ===== */
@media(max-width:768px){
    /* .desktop-table{
        display:none;
    } */
    .mobile-cards{
        display:block;
    }
}
</style>

    </head>

    <body>
        <div class="container my-4">
            <h3 class="text-center mb-4">Bhavi Creations</h3>

            <!-- ================= MOBILE VIEW ================= -->
            <div class="mobile-cards">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="enquiry-card">

                        <p><span class="label">Name:</span> <?= htmlspecialchars($row['name']) ?></p>
                        <p><span class="label">Phone:</span> <?= $row['phone'] ?></p>
                        <p><span class="label">Photos:</span> <?= $row['photo_count'] . ' (' . $row['photo_type'] . ')' ?></p>
                        <p><span class="label">Videos:</span> <?= $row['video_count'] . ' (' . $row['video_type'] . ')' ?></p>
                        <p><span class="label">Reels:</span> <?= $row['reels_count'] . ' (' . $row['reels_type'] . ')' ?></p>
                        <p><span class="label">Website:</span> <?= $row['website_type'] ?></p>
                        <p><span class="label">SEO:</span> <?= $row['seo_option'] ?></p>
                        <p><span class="label">Payment:</span> <?= $row['payment_type'] ?></p>
                        <p><span class="label">GST:</span> <?= $row['gst_option'] ?></p>

                        <div class="d-flex gap-3 mt-2">
                            <i class="bi bi-eye text-primary" onclick='viewData(<?= json_encode($row) ?>)'></i>
                            <i class="bi bi-printer text-success" onclick='printCard(<?= json_encode($row) ?>)'></i>
                            <i class="bi bi-trash text-danger" onclick="deleteRow(<?= $row['id'] ?>)"></i>
                        </div>

                    </div>
                <?php endwhile; ?>
            </div>

            <!-- ================= DESKTOP TABLE ================= -->
            <div class="desktop-table table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Photos</th>
                            <th>Videos</th>
                            <th>Reels</th>
                            <th>Website</th>
                            <th>SEO</th>
                            <th>Payment</th>
                            <!-- <th>Date</th> -->
                            <th class="action-col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $result->data_seek(0);
                        while ($row = $result->fetch_assoc()):
                        ?>
                            <tr>
                                <td><?= htmlspecialchars($row['name']) ?></td>
                                <td><?= $row['phone'] ?></td>
                                <td><?= $row['photo_count'] . ' (' . $row['photo_type'] . ')' ?></td>
                                <td><?= $row['video_count'] . ' (' . $row['video_type'] . ')' ?></td>
                                <td><?= $row['reels_count'] . ' (' . $row['reels_type'] . ')' ?></td>
                                <td><?= $row['website_type'] ?></td>
                                <td><?= $row['seo_option'] ?></td>
                                <td><?= $row['payment_type'] ?></td>
                                <!-- <td><?= $row['created_at'] ?></td> -->

                                <td class="action-col text-center">
                                    <i class="bi bi-eye text-primary me-2" onclick='viewData(<?= json_encode($row) ?>)'></i>
                                    <i class="bi bi-printer text-success me-2" onclick='printCard(<?= json_encode($row) ?>)'></i>
                                    <i class="bi bi-trash text-danger" onclick="deleteRow(<?= $row['id'] ?>)"></i>
                                </td>
                            </tr>
                        <?php endwhile; ?>

                    </tbody>
                </table>
            </div>
        </div>

        <button class="btn btn-danger print-btn" onclick="window.print()">Print All</button>

        <!-- ================= VIEW MODAL ================= -->
        <div class="modal fade" id="viewModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Enquiry Details</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" id="modalBody"></div>
                    <div class="modal-footer">
                        <button class="btn btn-success" onclick="printFromModal()">Save / Print</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            let currentRow = null;

            function viewData(row) {
                currentRow = row;
                let html = `<div class="enquiry-card">
    <h5 class="text-center mb-3">Bhavi Creations</h5>
    <p><b>Name:</b> ${row.name}</p>
    <p><b>Phone:</b> ${row.phone}</p>
    <p><b>Photos:</b> ${row.photo_count} (${row.photo_type})</p>
    <p><b>Videos:</b> ${row.video_count} (${row.video_type})</p>
    <p><b>Reels:</b> ${row.reels_count} (${row.reels_type})</p>
    <p><b>Website:</b> ${row.website_type}</p>
    <p><b>SEO:</b> ${row.seo_option}</p>
    <p><b>Payment:</b> ${row.payment_type}</p>
    <p><b>GST:</b> ${row.gst_option}</p>
    </div>`;

                document.getElementById('modalBody').innerHTML = html;
                new bootstrap.Modal(document.getElementById('viewModal')).show();
            }

            function printFromModal() {
                let w = window.open('', '', 'width=800');
                w.document.write(currentRow ? document.getElementById('modalBody').innerHTML : '');
                w.print();
                w.close();
            }

            function printCard(row) {
                let w = window.open('', '', 'width=800');
                w.document.write(`
        <h3 style="text-align:center">Bhavi Creations</h3>
        <div class="enquiry-card">
        <p><b>Name:</b> ${row.name}</p>
        <p><b>Phone:</b> ${row.phone}</p>
        <p><b>Reels:</b> ${row.reels_count} (${row.reels_type})</p>
        <p><b>Website:</b> ${row.website_type}</p>
        <p><b>SEO:</b> ${row.seo_option}</p>
        </div>
    `);
                w.print();
                w.close();
            }

            function deleteRow(id) {
                if (confirm("Delete this enquiry?")) {
                    location.href = "delete_enquiry.php?id=" + id;
                }
            }
        </script>

    </body>

</html>