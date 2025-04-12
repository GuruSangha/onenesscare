@extends('main')

@section('content')

   <!-- About Hero Section -->
   <div class="about-hero d-flex align-items-center">
      <div class="container position-relative">
         <div class="row">
            <div class="col-md-12">
               <h1 class="page-title">About us</h1>
               <div class="page-breadcrumbs">
                  <div class="breadcrumb"><a href="/">Home</a><span class="current">About
                        us</span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- About Hero Section End  -->

   <div class="about_tab_sec sec_pad">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 pe-lg-3" data-aos="fade-up" data-aos-duration="800">
               <div class="about_tab_right pe-lg-5">
                  <h2 class="heading">NDIS Support Services for Independent Living</h2>
                  <p class="pra mt-3">
                     At Oneness Care, we believe in the power of every individual. Founded in 2024, we are a dedicated
                     disability service provider based in Ballarat and Melbourne, committed to delivering high-quality,
                     person-centered support. Our mission is to empower people of all abilities to lead fulfilling,
                     independent lives through compassionate care, inclusive practices, and community connection.
                     </p>
                  <p class="pra mt-3">
                     We don’t define people by their limitations—we celebrate their potential. Our team is driven by
                     values of respect, dignity, equity, and joy as we work together to build a more inclusive society
                     where every voice is heard and every individual thrives.
                  </p>
               </div>
            </div>
            <div class="col-lg-6 ps-lg-3" data-aos="fade-left" data-aos-duration="800">
               <div class="about_tab_left ps-lg-4">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                     <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-overview-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-overview" type="button" role="tab" aria-controls="pills-overview"
                           aria-selected="true">Overview</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-mission-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-mission" type="button" role="tab" aria-controls="pills-mission"
                           aria-selected="false">Our Mission</button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-vision-tab" data-bs-toggle="pill"
                           data-bs-target="#pills-vision" type="button" role="tab" aria-controls="pills-vision"
                           aria-selected="false">Our Vision</button>
                     </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-overview" role="tabpanel"
                        aria-labelledby="pills-overview-tab">
                        <div class="tab_inner">
                           <h4>Unique Journey</h4>
                           <p>
                              At Oneness Care, we begin by getting to know you—your needs, challenges, and aspirations. Our comprehensive assessment forms the foundation for a personalized support plan designed for your independence.
                           </p>
                              <ul>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Comprehensive Client Assessment
                              </li>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Tailored Support Planning
                              </li>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Integrated Community Resources
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-mission" role="tabpanel" aria-labelledby="pills-mission-tab">
                        <div class="tab_inner">
                           <h4>Life-Changing Support</h4>
                           <p>Our mission is to empower you with care that transforms lives. We focus on client-centered solutions that bridge your current challenges with a pathway to greater independence and well-being.</p>
                           <ul>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Client-Centered Care
                              </li>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Expert, Personalized Guidance
                              </li>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Innovative Support Solutions
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="pills-vision" role="tabpanel" aria-labelledby="pills-vision-tab">
                        <div class="tab_inner">
                           <h4>Empowering a Future of Inclusion</h4>
                           <p>We envision a world where every individual thrives in an inclusive community. Our vision is to continuously empower you through ongoing support and opportunities for personal growth.</p>
                           <ul>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Empowerment & Independence
                              </li>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Inclusive Community Building
                              </li>
                              <li>
                                 <i class="ri-check-line"></i>
                                 Continuous Growth & Development
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
   </div>
   </section>

   <!-- Our Team Section -->
   <!--<section class="our-team sec_pad pt-0" id="team" data-aos="fade-up" data-aos-duration="800">
      <div class="container">
         <div class="our-team-inner sec_pad">
            <div class="row align-items-center">
               <div class="col-lg-5" data-aos="fade-right" data-aos-duration="800">
                  <div class="service-text">
                     <h5 class="subheading">OUR TEAM</h5>
                     <h2 class="heading">Meet The Amazing Team Behind PROPTloan</h2>
                     <div class="team-btn d-flex align-items-center gap-4 mt-lg-3 mt-3">
                        <div class="btn-wrap d-flex gap-3 d-none d-lg-flex">
                           <button class="prev-btn">
                              <i class="ri-arrow-left-line"></i>
                           </button>
                           <button class="next-btn">
                              <i class="ri-arrow-right-line"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="team-slider-sec">
                     <div class="owl-carousel owl-theme team-slider">
                        <div class="team_item">
                           <div class="team-img">
                              <img src="{{ asset('images/testimonials-img01.jpg') }}" class="img-fluid" alt="testimonial">
                           </div>
                           <div class="team-text">
                              <h4>Bhisham Dhamija</h4>
                              <p>Co-founder</p>
                           </div>
                        </div>
                        <div class="team_item">
                           <div class="team-img">
                              <img src="{{ asset('images/testimonials-img01.jpg') }}" class="img-fluid" alt="testimonial">
                           </div>
                           <div class="team-text">
                              <h4>Manpreet Singh</h4>
                              <p>Co-founder</p>
                           </div>
                        </div>
                        <div class="team_item">
                           <div class="team-img">
                              <img src="{{ asset('images/testimonials-img01.jpg') }}" class="img-fluid" alt="testimonial">
                           </div>
                           <div class="team-text">
                              <h4>Rahul Dhingra</h4>
                              <p>Co-founder</p>
                           </div>
                        </div>
                        <div class="team_item">
                           <div class="team-img">
                               <img src="{{ asset('images/testimonials-img01.jpg') }}" class="img-fluid" alt="testimonial">
                           </div>
                           <div class="team-text">
                              <h4>Hemant Nanda</h4>
                              <p>Co-founder</p>
                           </div>
                        </div>
                     </div>
                     <div class="team-btn btn-wrap d-flex gap-3 d-lg-none d-block mt-4">
                        <button class="prev-btn">
                           <i class="ri-arrow-left-line"></i>
                        </button>
                        <button class="next-btn">
                           <i class="ri-arrow-right-line"></i>
                        </button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>-->
   <!-- Our Team Section End-->

   <!--Testimonial Start -->
  <!-- <section class="testimonial_sec sec_pad">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="testimonial_left">
                  <h2 class="heading">Compassionate Support for Every Journey</h2>
                  <div class="testimonial-about-as">
                     <div class="icon"><i aria-hidden="true" class="fas fa-rocket"></i></div>
                     <div class="number">21%</div>
                     <p class="text">Increase in Client <br> Engagement & Satisfaction</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="tcr-testimonial-wrapper">
                  <div class="testimonial-image">
                      <img src="{{ asset('images/testimonials-img01.jpg') }}" class="img-fluid" alt="testimonial">
                  </div>
                  <div class="tcr-testimonial-inner">
                     <div class="tcr-testimonial-content">
                        <p>“Oneness Care has been a life-changing support system for my family. Their compassionate
                           approach and dedication have truly made a difference in our daily lives.”</p>
                     </div>
                     <div class="tcr-testimonial-title-container">
                        <h6 class="testimonial-title">Cassie Carleton</h6>
                        <div class="testimonial-designation">- Doctor</div>
                     </div>
                     <div class="tcr-testimonial-rating">
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                        <span class="fas fa-star checked"></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>-->
   <!--Testimonial End -->


   <!--Marquee Section Start -->
   <section class="tcr_marquee_sec sec_pad">
      <div class="container-fluid">
         <div class="tcr_marquee_inner">
            <div class="d-flex align-items-center">
               <marquee class="marquee-title" behavior="scroll" direction="left" scrollamount="80" scrolldelay="500">
                  <span>* Where Every Voice Counts</span> <span>* Where Every Voice Counts</span> <span>* Where Every
                     Voice Counts</span>
               </marquee>
            </div>
         </div>
      </div>
   </section>

   <!--Marquee Section End -->

@endsection
