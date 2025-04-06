@extends('main')

@section('content')

   <!-- About Hero Section -->
   <div class="about-hero d-flex align-items-center contact-hero">
      <div class="container position-relative">
         <div class="row">
            <div class="col-md-12">
               <h1 class="page-title">Contact us</h1>
               <div class="page-breadcrumbs">
                  <div class="breadcrumb"><a href="/">Home</a><span class="current">Contact
                        us</span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- About Hero Section End  -->

   <div class="contact_sec sec_pad">
      <div class="container">
         <div class="row">
            <div class="col-lg-5">
               <div class="contact_right">
                  <h5 class="subheading">Contact With Us</h5>
                  <h2 class="heading">Connect with Us: NDIS Enquiries
                  </h2>
                  <p class="pra mt-3">Have questions about our NDIS services or need assistance getting started? Our
                     team is here to help you every step of the way. Reach out today and let's work together to achieve
                     your goals.
                  </p>
                  <a href="#" class="common_btn about_btn mt-4 mt-lg-5">More About us</a>
               </div>
            </div>
            <div class="col-lg-7">
               <div class="row">
                  <div class="col-md-6">
                     <div class="tcr_contact_list_wrapper">
                        <div class="tcr-contact-list-head">
                           <div class="tcr-contact-head-content">
                              <div class="tcr-contact-list-title">
                                 Support </div>
                              <div class="tcr-contact-list-content pra">
                                 From our expert team
                              </div>
                           </div>
                           <div class="tcr-contact-list-icon">
                              <img src="{{ asset('images/c.png') }}" class="img-fluid" alt="c-img">
                           </div>
                        </div>
                        <div class="tcr-contact-list-wrapper">
                           <ul class="tcr-contact-list">
                              <li class="list-item">
                                 <div class="tcr-list-item-icon">
                                    <i class="ri-phone-line"></i>
                                 </div>
                                 <div class="tcr-list-item-head-content">
                                    <div class="tcr-list-item-title">
                                       Phone </div>
                                    <div class="tcr-list-item-content">
                                       +61 444 508 712
                                    </div>
                                 </div>
                              </li>
                              <li class="list-item">
                                 <div class="tcr-list-item-icon">
                                    <i class="ri-mail-line"></i>
                                 </div>
                                 <div class="tcr-list-item-head-content">
                                    <div class="tcr-list-item-title">
                                       Email </div>
                                    <div class="tcr-list-item-content">
                                       admin@onenesscare.com.au</div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="tcr_contact_list_wrapper">
                        <div class="tcr-contact-list-head">
                           <div class="tcr-contact-head-content">
                              <div class="tcr-contact-list-title">
                                 Address </div>
                              <div class="tcr-contact-list-content pra">
                                 To visiting our Office
                              </div>
                           </div>
                           <div class="tcr-contact-list-icon">
                               <img src="{{ asset('images/h.png') }}" class="img-fluid" alt="h-img">
                           </div>
                        </div>
                        <div class="tcr-contact-list-wrapper">
                           <ul class="tcr-contact-list">
                              <li class="list-item">
                                 <div class="tcr-list-item-icon">
                                    <i class="ri-map-pin-line"></i>
                                 </div>
                                 <div class="tcr-list-item-head-content">
                                    <div class="tcr-list-item-title">
                                       Location </div>
                                    <div class="tcr-list-item-content">
                                       66 Coburns Road, Melton South VIC 3338,
                                       Australia
                                    </div>
                                 </div>
                              </li>
                              <li class="list-item">
                                 <div class="tcr-list-item-icon">
                                    <i class="ri-time-line"></i>
                                 </div>
                                 <div class="tcr-list-item-head-content">
                                    <div class="tcr-list-item-title">Office Hour </div>
                                    <div class="tcr-list-item-content">Mon - Sat: 9am to 6pm</div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <div class="contact_detail">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6">
               <div class="contact_detail_right">
                  <h5 class="subheading">Fill the Form</h5>
                  <h2 class="heading text-white">Let’s Talk About Your NDIS Support Needs</h2>
                  <p class="pra mt-3 text-white fw-light">We're here to help you or your loved ones live more independently and
                     confidently. Fill out the form below, and one of our friendly team members will get in touch to
                     understand your goals and guide you through the right support options.
                  </p>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="appointment-form">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="input-group">
                           <input class="form-control" placeholder="Full Name" value="" type="text" name="your-name">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="input-group">
                           <input class="form-control" placeholder="Email" value="" type="email" name="email">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="input-group">
                           <input class="form-control" placeholder="Phone number" value="" type="text"
                              name="phone-number">
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="input-group">
                           <input class="form-control" placeholder="Subject" value="" type="text" name="subject">
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-sm-12">
                        <div class="input-group">
                           <textarea class="form-control" id="message" name="message" rows="4" cols="50"
                              placeholder="Write a message"></textarea>
                        </div>
                     </div>
                  </div>

                  <div class="col-12">
                     <button type="submit" class="common_btn border-0 py-3" id="SendMessage">Send Message <i
                           class="ri-arrow-right-up-line ms-2"></i></button>
                  </div>
               </div>
            </div>
         </div>
         <div class="row align-items-center">
          <div class="col-lg-6">
             <div class="contact_img">
               <img src="{{ asset('images/contact-us-img.png') }}" class="img-fluid" alt="contact-img">
             </div>
          </div>   
          <div class="col-lg-6">
             <div class="iframe_map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3156.997720931461!2d144.5637282757309!3d-37.69625257200523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad692d55acdde39%3A0x5693df8ef0c2c03e!2s66%20Coburns%20Rd%2C%20Melton%20South%20VIC%203338%2C%20Australia!5e0!3m2!1sen!2sin!4v1743876962309!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
          </div> 
         </div>
      </div>
   </div>

@endsection
