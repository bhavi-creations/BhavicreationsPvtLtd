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
    <link rel="stylesheet" href="assests/footer_animations.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-lYFkg6eZ2q7hnkxZ9pPt2K/CszkQzPLhtlDwe2lnJQmI+iY9GM1f3tmzxoTfwUKl" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


    <script src="https://kit.fontawesome.com/742df65007.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <link rel="stylesheet" href="assests/branding.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <link href="path_to_bootstrap/bootstrap.min.css" rel="stylesheet">

    <script>
        // Function to display alert message on form submission success
        function checkSuccess() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success')) {
                alert('Message has been sent successfully!');
                // Remove the success flag from the URL to prevent repeated alerts on refresh
                window.history.replaceState(null, null, window.location.pathname);
            }
        }
    </script>

</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');


    * {
        font-family: 'Inter', sans-serif;
    }

    .contact_form {
        position: relative !important;
        margin-top: -25% !important;
        /* z-index: 1;  */
    }

    input {
        border: none;
        outline: none;
        padding: 0;
        margin: 0;
        /* background-color: rgb(248, 242, 242); */
        border-bottom: 1px solid black;
    }





    textarea {
        width: 100%;
        max-width: 100%;
        height: auto;
        box-sizing: border-box;
        border: none;
        outline: none;
        padding: 0;
        margin: 0;
        /* background-color: rgb(248, 242, 242); */
        border-bottom: 1px solid black;
    }




    /* .map_frame {
        opacity: 1;
    } */





    .map-container {
        position: relative;
        overflow: hidden;
        border-radius: 30px;
        margin-bottom: 20px;
        /* Added margin for spacing between maps */
    }

    .map_frame {
        width: 100%;
        height: 600px;
        /* Adjust the height as needed */
        border: 0;
    }

    .map_overlay {
        position: absolute;
        top: 10px;
        /* Adjust the top position as needed */
        right: 10px;
        /* Adjust the right position as needed */
        z-index: 999;
        /* Ensure it's above the map */
    }


    .contact-card {
        /* width: 190px;
  height: 254px; */
        height: auto;
        width: auto;
        border-radius: 1rem;
        /* background-color: #4158D0;
  background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%); */
        background-color: #4158D0;
        background-image: linear-gradient(43deg, #4158D0 0%, #536dce 46%, #6b83dc 100%);

        box-shadow: rgba(0, 0, 0, 0.17) 0px -23px 25px 0px inset, rgba(0, 0, 0, 0.15) 0px -36px 30px 0px inset, rgba(0, 0, 0, 0.1) 0px -79px 40px 0px inset, rgba(0, 0, 0, 0.06) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;


        .contact-card {
            position: relative;
            width: 190px;
            height: 254px;
            background: #f00;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(315deg, #03a9f4, #ff0058);
        }

        .contact-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(315deg, #03a9f4, #ff0058);
            filter: blur(30px);
        }






    }

    .contact_button {
        padding: 17px 40px;
        border-radius: 50px;
        cursor: pointer;
        border: 0;
        background-color: #0092FF;
        box-shadow: rgb(0 0 0 / 5%) 0 0 8px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-size: 15px;
        transition: all 0.5s ease;
    }

    .contact_button:hover {
        letter-spacing: 3px;
        background-color: hsl(236, 80%, 48%);
        color: hsl(0, 0%, 100%);
        box-shadow: rgb(93 24 220) 0px 7px 29px 0px;
    }

    .contact_button:active {
        letter-spacing: 3px;
        background-color: hsl(261deg 80% 48%);
        color: hsl(0, 0%, 100%);
        box-shadow: rgb(93 24 220) 0px 0px 0px 0px;
        transform: translateY(10px);
        transition: 100ms;
    }


    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(50px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }


    /* Style for dropdown */
    .dropdown select {
        appearance: none;
        background-color: #fff;
        border: 2px solid #007bff;
        border-radius: 5px;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        outline: none;
        width: 100%;
        transition: border-color 0.3s;
    }

    .dropdown select:hover,
    .dropdown select:focus {
        border-color: #0056b3;
    }

    /* Style for dropdown arrow */
    .dropdown::after {
        content: "\25BC";
        /* Down arrow */
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
    }

    /* Style for dropdown arrow on hover */
    .dropdown:hover::after {
        color: #0056b3;
    }
</style>

<body onload="checkSuccess()">


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


    <div class="container main_section mt-5 pt-5">
        <div class="row position-relative">

            <div class="map-container  " id="kakinadaDiv">
                <iframe class="map_frame "
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3815.8197404094867!2d82.24807577582071!3d16.98341481431585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3829915d3063a9%3A0x357d06d49d4e389a!2sBhavi%20Creations%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1708681699695!5m2!1sen!2sin"
                    style="border:0; border-radius: 30px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" name="KakinadaBranch"></iframe>
            </div>
            <div class="map-container" id="rajahmundryDiv" style="display: none;">
                <iframe class="map_frame"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d953.8272402779374!2d81.78967776961615!3d17.008508681435266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a37a375c1ecf8e3%3A0x885002264ca8e28a!2sBhavi%20Creations%20Pvt%20Ltd%20%7C%20Best%20Digital%20Marketing%20Company%20In%20Rajahmundry!5e0!3m2!1sen!2sin!4v1708754197553!5m2!1sen!2sin"
                    style="border:0; border-radius: 30px;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" name="RajahmundryBranch"></iframe>
            </div>

            <div class="map_overlay">
                <div class="row">

                    <div class="col-6 ml-auto">
                        <div class="dropdown">
                            <select id="branchSelector">
                                <option value="kakinadaDiv">Kakinada</option>
                                <option value="rajahmundryDiv">Rajamundry</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--  ENDING MAIN SECTION -->


    <div class="container contact_form shadow" style="border-radius: 30px; background-color: white;">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12 pt-5 ps-5 contact-card"
                style="background-color: black; border-radius: 30px; animation: fadeInLeft 1s ease;">
                <h1 class="text-light">Contact Information</h1>
                <p class="text-light">Say Something to start a live chat</p>
                <p class="text-light mt-5 pt-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="white" class="bi bi-telephone-fill " viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                    </svg> &nbsp; &nbsp; &nbsp; +91 9642343434</p>
                <p class="text-light mt-5"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                            d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z" />
                    </svg> &nbsp; &nbsp; &nbsp; Bhavicreations@gmail.com</p>
                <p class="text-light mt-5"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white"
                        class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10m0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6" />
                    </svg> &nbsp; &nbsp; &nbsp; Bhavi Creations Pvt Ltd <br>
                    <span class="ms-5">Plot no 28, H No 70, 17-28, RTO Office Rd,
                        opposite to New, behind J.N.T.U.Engineering
                        College Play Ground, Ranga Rao Nagar,
                        Kakinada, Andhra Pradesh 533003 </span>
                </p>
            </div>
            <div class="col-lg-7 col-md-6 col-sm-12 mt-5" style="animation: fadeInRight 1s ease;">
                <form action="contact_mail.php" method="post" class="ms-5 mt-5 mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="first_name" class="ms-2">First Name</label><br>
                            <input type="text" id="first_name" name="first_name" class="inputname mb-2" pattern="[A-Za-z]+" title="Please enter only alphabetic characters"  required> <br>
                        </div>
                        <div class="col-lg-6">
                            <label for="last_name" class="ms-2">Last Name</label><br>
                            <input type="text" id="last_name" name="last_name" class="inputemail mb-2" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required><br>
                        </div>
                        
                        <div class="col-lg-6">
                            <label for="email" class="ms-2 mt-5">Email</label><br>
                            <input type="email" id="email" name="email" class="inputemail mb-2" required><br>
                        </div>
                 
                        <div class="col-lg-6">
                            <label for="phone" class="ms-2 mt-5">Phone Number</label><br>
                            <input type="text" id="phone" name="phone" class="inputemail mb-2" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required><br>
                        </div>
                        
                    </div>
                    <div class="container">
                        <div class="row d-flex flex-row mt-5">
                            <div class="col-9">
                                <select id="subject" name="subject" style="width:200px;height:25px;border-width:0px">
                                    <option value="math">Select Subject</option>
                                    <option value="Web development">Web development</option>
                                    <option value="Logo Design">Logo Design</option>
                                    <option value="Social Media Marketing">Social Media Marketing</option>
                                    <option value="Content Writer">Content Writer</option>
                                    <option value="SEO Analysts">SEO Analysts</option>
                                    <option value="Others">Others</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="message" class="mt-5">Message</label><br>
                        <textarea id="message" name="message" rows="4" cols="50"></textarea>
                    </div>
                    <br>
                    <div class="ms-5">
                        <button type="submit" class="contact_button" style="color:white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>






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
                        <a href="https://www.facebook.com/BhavicreationsPvtLtd/ " target="_blank"> <i
                                style="font-size: 24px; color: #ffffff; "
                                class="fa-brands fa-facebook px-1  footicon"></i></a>
                        <a href="https://www.instagram.com/bhavicreations_pvtltd/ " target="_blank"> <i
                                style="font-size: 24px; color: #ffffff;"
                                class="fa-brands fa-instagram  px-1 footicon"></i></a>
                        <a href="https://twitter.com/bhavi_creations" target="_blank"> <i
                                style="font-size: 24px; color: #ffffff;"
                                class="fa-brands  px-1  fa-square-x-twitter"></i></a>
                        <a href="https://www.youtube.com/@bhavicreationspvtltd" target="_blank"> <i
                                style="font-size: 24px; color: #ffffff;"
                                class="fa-brands fa-youtube  px-1  footicon"></i></a>
                        <a href="https://www.linkedin.com/in/bhavi-creations-pvt-ltd-926651235/" target="_blank"> <i
                                style="font-size: 24px;  color: #ffffff;  "
                                class="fa-brands fa-linkedin   px-1 footicon"></i></a>
                        <a href="https://in.pinterest.com/bhavicreations/" target="_blank"> <i
                                style="font-size: 24px ; color: #ffffff;"
                                class="fa-brands fa-pinterest px-1  footicon"></i></a>


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
                                <a
                                    href="terms.php"
                                    style="text-decoration: none; color: #ffffff">Terms & conditions |
                                </a>
                                <a
                                    href="privacy.php"
                                    style="text-decoration: none; color: #ffffff">
                                    Privacy & policy ||</a>
                                    <a
                                    href="https://bhavicreations.com"
                                    style="text-decoration: none; color: #ffffff">
                                    Design with love @</a> <a
                                    href="https://bhavicreations.com"
                                    style="text-decoration: none; color: #ffffff">
                                    <img src="assests\images\bhavi_logo\Bhavi_Branding_Stamp.png" class="img-fluid brand_image" alt=""></a>

                                 </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- <div class="footer-area-bottom theme-bg">
            <div class="container">
                <div class="row pt-4">
            
                    <div class="  col-md-6 col-12">
                        <div class="footer-widget__copyright-info info-direction">
                            <p class="  last_text">
                            <a
                                href="terms.php"
                                style="text-decoration: none; color: #ffffff">Terms & conditions
                            </a>
                            <a
                                href="privacy.php"
                                style="text-decoration: none; color: #ffffff">
                                Privacy & policy</a>
                            </p>
                        </div>
                    </div>
            
                    <div class="col-md-6 col-12 second_divv_end_brand">
                    <div class="footer-widget__copyright-info info-direction d-flex flex-row justify-content-end align-items-center">
                        <a href="https://bhavicreations.com/" target="_blank" style="text-decoration: none; color: #ffffff; display: flex; align-items: center;">
                        <p class="mini_text last_text mb-0">
                            Design with love @
                        </p>
                        <img src="assests\images\bhavi_logo\Bhavi_Branding_Stamp.png" class="img-fluid brand_image" alt="">
                        </a>
                    </div>
                    </div>
                
                </div>
            </div>
        </div> -->

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


    <button id="scrollBtn" onclick="scrollToTop()">
        <div class="pyramid-loader animate__animated animate__bounceInDown">
            <div class="wrapper ">
                <span class="side side1"></span>
                <span class="side side2"></span>
                <span class="side side3"></span>
                <span class="side side4"></span>
                <span class="shadow"></span>
            </div>
        </div>
    </button>

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
        <a href="about.php" style="text-decoration: none;"> <span class="bar_in bar_Services">About Us</span>
            <span class="text">
                <div class="borde-back">
                    <div class="icon">
                        <i class="fa-solid fa-users" style="color: white;"></i>
                    </div>
                </div>
            </span>
        </a>
    </div>
    <div class="open_bar open_contact">
        <a href="services.php" style="text-decoration: none;"> <span class="bar_in bar_Services">Services</span>
            <span class="text">
                <div class="borde-back">
                    <div class="icon">
                        <i class="fa-solid fa-laptop-file" style="color: white;"></i>
                    </div>
                </div>
            </span>
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
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("scrollBtn").style.display = "block";
            } else {
                document.getElementById("scrollBtn").style.display = "none";
            }
        }



    </script>

    <script>
        document.getElementById('branchSelector').addEventListener('change', function () {
            var selectedDiv = this.value;
            var divs = document.querySelectorAll('.map-container');

            divs.forEach(function (div) {
                div.style.display = (div.id === selectedDiv) ? 'block' : 'none';
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            // Toggle dropdown on button click
            $('.toggleDropdown').change(function () {
                if ($(this).is(':checked')) {
                    $('.dropdown-menu').show();
                } else {
                    $('.dropdown-menu').hide();
                }
            });
        });
    </script>


<script type="text/javascript">
        window.omnisend = window.omnisend || [];
        omnisend.push(["brandID", "6846e3dd25a66a4ceda01bf6"]);
        omnisend.push(["track", "$pageViewed"]);
        !function(){var e=document.createElement("script");
        e.type="text/javascript",e.async=!0,
        e.src="https://omnisnippet1.com/inshop/launcher-v2.js";
        var t=document.getElementsByTagName("script")[0];
        t.parentNode.insertBefore(e,t)}();
</script>
</body>

</html>