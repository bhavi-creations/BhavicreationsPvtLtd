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
 <!-- ENDING  FOOTER -->

 <button id="scrollBtn" onclick="scrollToTop()">
     <div class="pyramid-loader  animate__animated animate__bounceInDown">
         <div class="wrapper ">
             <span class="side side1"></span>
             <span class="side side2"></span>
             <span class="side side3"></span>
             <span class="side side4"></span>
             <span class="shadow"></span>
         </div>
     </div>
 </button>

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

 <script type="text/javascript">
     window.omnisend = window.omnisend || [];
     omnisend.push(["brandID", "6846e3dd25a66a4ceda01bf6"]);
     omnisend.push(["track", "$pageViewed"]);
     ! function() {
         var e = document.createElement("script");
         e.type = "text/javascript", e.async = !0,
             e.src = "https://omnisnippet1.com/inshop/launcher-v2.js";
         var t = document.getElementsByTagName("script")[0];
         t.parentNode.insertBefore(e, t)
     }();
 </script>