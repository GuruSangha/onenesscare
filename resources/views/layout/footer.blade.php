<!-- Footer -->
   <footer class="footer">
      <div class="footer-inner">
         <div class="container-fluid">
            <div class="footer_inner_div">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="footer_logo">
                        <img src="{{asset('images/footer-logo2.png') }}" />
                        <p>Your trusted partner in NDIS services, providing person-centered care tailored to your unique
                           needs. </p>
                     </div>
                     <ul class="footer-contacts">
                        <li><a href="https://maps.app.goo.gl/sWjGDe3APXXyAfZB6" target="_blank"><i
                                 class="fa-solid fa-location-dot me-2"></i> 66 Coburns Road, Melton South VIC 3338, Australia
                           </a>
                        </li>
                        <li><a href="mailto:rnsimmkaur@gmail.com​"><i class="fa-solid fa-envelope-open-text me-2"></i>
                           admin@onenesscare.com.au​</a></li>
                        <li><a href="tel:+61 444 508 712"><i class="fa-solid fa-square-phone me-2"></i>+61 444 508 712</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-lg-8 ps-xl-5">
                     <div class="row">
                        <div class="col-md-4">
                           <h4>Useful Link</h4>
                           <ul class="footer_link">
                              <li><a href="#">Home</a></li>
                              <li><a href="#">Blog Classic</a></li>
                              <li><a href="#">About us</a></li>
                              <li><a href="#">Our Team</a></li>
                           </ul>
                        </div>
                        <div class="col-md-4">
                           <h4>Services</h4>
                           <ul class="footer_link">
                              <li><a href="#">NDIS Support</a></li>
                              <li><a href="#">Disability Services</a></li>
                              <li><a href="#">In Home Support </a></li>
                              <li><a href="#">Senior Care</a></li>
                           </ul>
                        </div>
                        <div class="col-md-4">
                           <h4>Company</h4>
                           <ul class="footer_link">
                              <li><a href="#">Help Center</a></li>
                              <li><a href="#">Careers</a></li>
                              <li><a href="#">Pricacy</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="copyright-sec">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-md-6">
                  <ul class="social-icons">
                     <li><a href="https://www.facebook.com/profile.php?id=61567072504050" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                     <li><a href="https://www.instagram.com/onenesscareau/?hl=en" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/oneness-care/?viewAsMember=true" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                  </ul>
               </div>
               <div class="col-md-6">
                  <p class="text-end">Copyright by <a href="#">ONENESS CARE.</a> All rights reserved</p>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer End -->


   <!-- Jquery  -->
   <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
   <script src="{{ asset('js//bootstrap.bundle.js') }}"></script>
   <script src="{{ asset('js/aos.js') }}"></script>
   <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
   <script src="{{ asset('js/active.js') }}"></script>
   <script>
      AOS.init();

      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
         return new bootstrap.Tooltip(tooltipTriggerEl)
      })
   </script>
</body>

</html>