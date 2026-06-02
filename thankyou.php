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
    <!-- Event snippet for BHAVI conversion page -->
    <script>
        gtag('event', 'conversion', {
            'send_to': 'AW-10932795730/SzuzCJTAyrMcENLylN0o',
            'value': 1.0,
            'currency': 'INR'
        });
    </script>


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10932795730"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10932795730');
</script>
<!-- Event snippet for Submit lead form conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-10932795730/pZVDCIagqLccENLylN0o',
      'value': 1.0,
      'currency': 'INR'
  });
</script>


</head>


<?php include 'navbar.php'; ?>


<style>
    :root {
        --blue: #1a3a6c;
        --teal: #0d9488;
        --light: #f0f9ff;
        --white: #ffffff;
    }

    .main-content {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 60px 16px;
    }

    .card-box {
        background: var(--white);
        border-radius: 20px;
        box-shadow: 0 12px 40px rgba(26, 58, 108, 0.13);
        padding: 52px 44px 44px;
        max-width: 520px;
        width: 100%;
        text-align: center;
        animation: fadeUp 0.7s ease both;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(28px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .brand-icon {
        font-size: 64px;
        line-height: 1;
        margin-bottom: 18px;
        display: block;
        animation: pop 0.5s 0.4s cubic-bezier(.36, 1.6, .6, 1) both;
    }

    @keyframes pop {
        from {
            transform: scale(0.5);
            opacity: 0;
        }

        to {
            transform: scale(1);
            opacity: 1;
        }
    }

    .agency-name {
        font-family: 'Playfair Display', serif;
        font-size: 1.5rem;
        color: var(--blue);
        font-weight: 700;
        margin-bottom: 6px;
    }

    .tagline {
        font-size: 0.82rem;
        color: var(--teal);
        letter-spacing: 1.5px;
        text-transform: uppercase;
        font-weight: 600;
        margin-bottom: 28px;
    }

    .divider {
        width: 56px;
        height: 3px;
        background: linear-gradient(90deg, var(--teal), var(--blue));
        border-radius: 2px;
        margin: 0 auto 28px;
    }

    .thank-heading {
        font-family: 'Playfair Display', serif;
        font-size: 2rem;
        color: var(--blue);
        font-weight: 700;
        margin-bottom: 14px;
    }

    .thank-message {
        font-size: 1rem;
        color: #4b5563;
        line-height: 1.75;
        margin-bottom: 32px;
    }

    .btn-home {
        background: linear-gradient(135deg, var(--teal), var(--blue));
        color: var(--white);
        border: none;
        border-radius: 50px;
        padding: 12px 36px;
        font-size: 0.95rem;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .btn-home:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 24px rgba(13, 148, 136, 0.35);
        color: var(--white);
    }

    footer {
        background: var(--blue);
        color: #cbd5e1;
        text-align: center;
        padding: 16px 12px;
        font-size: 0.82rem;
    }

    footer span {
        color: var(--teal);
        font-weight: 600;
    }
</style>

<!-- MAIN -->
<div class="main-content">
    <div class="card-box">
        <span class="brand-icon">🚀</span>

        <div class="agency-name">Bhavi Creations </div>
        <div class="tagline">Creative Branding &nbsp;|&nbsp; Build Your Brand Identity</div>

        <div class="divider"></div>

        <h1 class="thank-heading">Thank You!</h1>

        <p class="thank-message">
            Thank you for contacting <strong>Bhavi Creations </strong>.<br />
            Your enquiry has been successfully submitted.<br />
            Our creative team will get in touch with you shortly. 😊
        </p>

        <a href="index.php" class="btn-home">🏠 Back to Home</a>
    </div>
</div>





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