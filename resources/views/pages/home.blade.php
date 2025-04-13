@extends('main')
@section('content')
<!-- Hero Section -->
   <section class="hero-section mt-3">
      <div class="container-fluid">
         <div class="hero_inner">
            <div class="owl-carousel owl-theme hero-slider smooth-carousel">

               {{-- Slide 1 --}}
               <div class="hero-item">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="hero_left">
                           <h5 class="subheading">Where Every Voice Counts</h5>
                           <h1 class="h1 heading">Supporting Your NDIS Journey</h1>
                           <p>At Oneness Care, we are committed to offering compassionate and personalized support to
                              individuals with disabilities, ensuring they lead fulfilling lives with independence and
                              dignity.</p>
                           <a href="/about" class="common_btn about_btn">More About us</a>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="hero_right">
                           <img src="{{ asset('images/banner-img01.png') }}" class="d-lg-inline-block d-none img-fluid" alt="Banner Image 1" />
                           <img src="{{ asset('images/banner-mob-img01.png') }}" class="d-lg-none d-lg-inline-block img-fluid" alt="Banner Image 1" />
                        </div>
                     </div>
                  </div>
               </div>

               {{-- Slide 2 --}}
               <div class="hero-item">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="hero_left">
                           <h5 class="subheading">Your Well-Being, Our Priority</h5>
                           <h1 class="h1 heading">Empowering Lives Through Quality Care</h1>
                           <p>We provide tailored NDIS services that focus on enhancing quality of life, promoting
                              independence, and delivering care with empathy and respect.</p>
                           <a href="/about" class="common_btn about_btn">More About us</a>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="hero_right">
                           <img src="{{ asset('images/banner-img02.png') }}" class="d-lg-inline-block d-none img-fluid" alt="Banner Image 2" />
                           <img src="{{ asset('images/banner-mob-img02.png') }}" class="d-lg-none d-lg-inline-block img-fluid" alt="Banner Image 2" />
                        </div>
                     </div>
                  </div>
               </div>

               {{-- Slide 3 --}}
               <div class="hero-item">
                  <div class="row align-items-center">
                     <div class="col-lg-6">
                        <div class="hero_left">
                           <h5 class="subheading">A Helping Hand, Every Step of the Way</h5>
                           <h1 class="h1 heading">Comprehensive Support for Every Need</h1>
                           <p>From in-home care to community participation, our expert team ensures that every
                              individual receives the right support to achieve their goals and aspirations.</p>
                           <a href="/about" class="common_btn about_btn">More About us</a>
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="hero_right">
                           <img src="{{ asset('images/banner-img03.png') }}" class="d-lg-inline-block d-none img-fluid" alt="Banner Image 3" />
                           <img src="{{ asset('images/banner-mob-img03.png') }}" class="d-lg-none d-lg-inline-block img-fluid" alt="Banner Image 3" />
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </section>

   <!-- Hero Section End -->

   <!-- Why choose Section -->
   <section class="whychoose-section sec_pad">
      <div class="container">
         <div class="row">
            <div class="col-lg-6">
               <h5 class="subheading">WHY CHOOSE US</h5>
               <h2 class="heading">Because Peace of Mind Should Be Part of Your Plan</h2>
            </div>
            <div class="col-lg-6 ps-lg-4">
               <p class="pra">
                  We provide a comprehensive range of services tailored to meet the unique needs of NDIS participants,
                  ensuring they receive the best possible care and support.
               </p>
               <a href="/contact" class="mt-4 common_btn why_btn py-3">Contact us</a>
            </div>
         </div>

         <div class="row">
            <div class="col-lg-12">
               <div class="whychoose_wapper">
                  <div class="row">

                     <div class="col-lg-3 col-md-6">
                        <div class="whychoose_card">
                           <div class="why_icon">
                              <img src="{{ asset('images/nursing-home.png') }}" class="img-fluid" alt="In-Home Care">
                           </div>
                           <h4>In-Home Care</h4>
                           <p class="pra">Personalized care and assistance in the comfort of your home.</p>
                           <div class="readmore">
                              <i class="ri-arrow-right-up-line"></i>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="whychoose_card">
                           <div class="why_icon">
                              <img src="{{ asset('images/2.png') }}" class="img-fluid" alt="Respite Care">
                           </div>
                           <h4>Respite Care</h4>
                           <p class="pra">Temporary relief for primary caregivers while ensuring continued support for individuals.</p>
                           <div class="readmore">
                              <i class="ri-arrow-right-up-line"></i>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="whychoose_card">
                           <div class="why_icon">
                              <img src="{{ asset('images/3.png') }}" class="img-fluid" alt="Memory Care">
                           </div>
                           <h4>Memory Care</h4>
                           <p class="pra">Specialized support for individuals with memory-related conditions.</p>
                           <div class="readmore">
                              <i class="ri-arrow-right-up-line"></i>
                           </div>
                        </div>
                     </div>

                     <div class="col-lg-3 col-md-6">
                        <div class="whychoose_card">
                           <div class="why_icon">
                              <img src="{{ asset('images/4.png') }}" class="img-fluid" alt="24/7 Live-In Care">
                           </div>
                           <h4>24/7 Live-In Care</h4>
                           <p class="pra">Continuous support to ensure safety and well-being at all times.</p>
                           <div class="readmore">
                              <i class="ri-arrow-right-up-line"></i>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Why choose Section End -->

   <!-- About Section -->
   <section class="about-section sec_pad">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 pe-lg-4">
               <div class="about_left position-relative h-100">
                  <img src="{{ asset('images/blog-img1.jpg') }}" class="img-fluid h-100 object-fit-cover" alt="About Oneness Care" />
                  <div class="tcr-counter-wrapper">
                     <div class="tcr-counter-number heading text-dark">2024</div>
                     <div class="tcr-counter-title pra">Founded</div>
                  </div>
               </div>
            </div>

            <div class="col-lg-6 ps-lg-4">
               <div class="about_right">
                  <h5 class="subheading">About US</h5>
                  <h2 class="heading">About Oneness Care</h2>

                  <p class="pra mt-3">
                     Oneness Care, in 2024, is a dedicated disability service provider based in Ballarat and Melbourne. 
                     We are committed to delivering high-quality, person-centered care that enhances the independence, 
                     dignity, and well-being of individuals in our community.
                  </p>

                  <div class="about_wapper">
                     <div class="row">
                        <div class="col-lg-6">
                           <div class="about_card">
                              <div class="about_icon">
                                 <img src="{{ asset('images/5.png') }}" class="img-fluid" alt="Our Mission">
                              </div>
                              <h4>Our Mission</h4>
                              <p class="pra">
                                 Empowering individuals with compassionate, person-centered care to live fulfilling and independent lives.
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="about_card">
                              <div class="about_icon">
                                 <img src="{{ asset('images/6.png') }}" class="img-fluid" alt="Our Vision">
                              </div>
                              <h4>Our Vision</h4>
                              <p class="pra">
                                 Building an inclusive society where every individual is valued, supported, and given equal opportunities to thrive.
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>

                  <a href="/about" class="mt-4 common_btn about_btn">More About Us</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- About Section End -->

   <!-- Services Section Start -->
   <section class="services_sec sec_pad">
      <div class="container">
         <div class="services_sec_inner">
            <div class="row">
               <div class="col-lg-8">
                  <h5 class="subheading">OUR SERVICE</h5>
                  <h2 class="heading">Disability Support & Care Services</h2>
               </div>
               <div class="col-lg-4 position-relative">
                  <div class="infobox">
                     <a href="#" target="_blank" class="tcr-infobox-icon">
                        <i class="ri-arrow-right-up-line"></i>
                     </a>
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        version="1.1" viewBox="0 0 200 200">
                        <defs>
                           <path d="M0, 100a100, 100 0 1, 0 200, 0a100, 100 0 1, 0 -200, 0" id="txt-path-service"></path>
                        </defs>
                        <text>
                           <textPath startOffset="0" xlink:href="#txt-path-service">
                              SERVICE * SERVICE * SERVICE * SERVICE * SERVICE *
                           </textPath>
                        </text>
                     </svg>
                  </div>
               </div>
            </div>

            {{-- Services Carousel --}}
            <div class="service-slider owl-carousel owl-theme smooth-carousel_Down">
            @php
            $services = [
    ['title' => 'Employment Support', 'desc' => 'Tailored assistance to access and maintain jobs or higher education.', 'image' => 'job-support.jpg'],
    ['title' => 'Daily Personal Care', 'desc' => 'Support with bathing, dressing, appointments, and more.', 'image' => 'personal-care.jpg'],
    ['title' => 'Shared Living Assistance', 'desc' => 'Support in group living, including daily tasks and supervision.', 'image' => 'shared-living.jpg'],
    ['title' => 'Household Help', 'desc' => 'Help with cleaning, gardening, laundry, and meals.', 'image' => 'home-help.jpg'],
    ['title' => 'High Intensity Care', 'desc' => 'Nursing-led support for complex medical needs.', 'image' => 'high-support.jpg'],
    ['title' => 'Transport Assistance', 'desc' => 'Safe, scheduled transport for appointments and daily tasks.', 'image' => 'safe-transport.jpg'],
    ['title' => 'Community Participation', 'desc' => 'Support for joining local events and building resilience.', 'image' => 'social-skills.jpg'],
    ['title' => 'Social & Recreational Access', 'desc' => 'Help to engage in fun, skill-building community activities.', 'image' => 'community-fun.jpg'],
    ['title' => 'Life Transitions Support', 'desc' => 'Guidance with planning, tenancy, and managing life stages.', 'image' => 'life-changes.jpg'],
    ['title' => 'In-Home Nursing Care', 'desc' => 'Qualified nurses provide specialized health support.', 'image' => 'medical-care.jpg'],
    ['title' => 'Life Skills Development', 'desc' => 'Training in daily living skills, communication, and wellbeing.', 'image' => 'life-skills.jpg'],
    ['title' => 'Supported Employment', 'desc' => 'Job training and tailored workplace support services.', 'image' => 'job-training.jpg'],
    ['title' => 'Group Centre Activities', 'desc' => 'Fun group activities to develop social and daily skills.', 'image' => 'group-events.jpg'],
];
@endphp

   @foreach($services as $index => $service)
      <div class="service-slide">
         <div class="service-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
         <div class="service_img">
            <img src="{{ asset('images/services/s/' . $service['image']) }}" width="150" height="150" class="img-fluid" alt="{{ $service['title'] }}">
         </div>
         <div class="service-wrapper">
            <h3>{{ $service['title'] }}</h3>
            <p class="pra">{{ $service['desc'] }}</p>
            <a href="#" class="servicemore">
               <i class="ri-arrow-right-up-line"></i>
            </a>
         </div>
      </div>
   @endforeach

            </div>
         </div>
      </div>
   </section>

   <!-- Services Section End -->

   <!--Testimonial Start -->
  <!-- <section class="testimonial_sec sec_pad">
      <div class="container">
         <div class="row">
            <div class="col-lg-4">
               <div class="testimonial_left">
                  <h2 class="heading">Compassionate Support for Every Journey</h2>
                  <div class="testimonial-about-as">
                     <div class="icon"><i class="fas fa-rocket" aria-hidden="true"></i></div>
                     <div class="number">21%</div>
                     <p class="text">Increase in Client <br> Engagement & Satisfaction</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-8">
               {{-- Blade Testimonial Loop --}}
               @php
                  $testimonials = [
                     [
                        'image' => 'images/testimonials-img01.jpg',
                        'quote' => 'Oneness Care has been a life-changing support system for my family. Their compassionate approach and dedication have truly made a difference in our daily lives.',
                        'name' => 'Cassie Carleton',
                        'designation' => 'Doctor',
                        'rating' => 5,
                     ],
                     // Add more testimonials here as needed...
                  ];
               @endphp

               @foreach($testimonials as $testimonial)
                  <div class="tcr-testimonial-wrapper">
                     <div class="testimonial-image">
                        <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="img-fluid">
                     </div>
                     <div class="tcr-testimonial-inner">
                        <div class="tcr-testimonial-content">
                           <p>“{{ $testimonial['quote'] }}”</p>
                        </div>
                        <div class="tcr-testimonial-title-container">
                           <h6 class="testimonial-title">{{ $testimonial['name'] }}</h6>
                           <div class="testimonial-designation">- {{ $testimonial['designation'] }}</div>
                        </div>
                        <div class="tcr-testimonial-rating">
                           @for($i = 0; $i < $testimonial['rating']; $i++)
                              <span class="fas fa-star checked"></span>
                           @endfor
                           @for($i = $testimonial['rating']; $i < 5; $i++)
                              <span class="fas fa-star"></span>
                           @endfor
                        </div>
                     </div>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </section>
   --->

   <!--Testimonial End -->


   <!--Marquee Section Start -->
   <section class="tcr_marquee_sec sec_pad">
      <div class="container-fluid">
         <div class="tcr_marquee_inner">
            <div class="d-flex align-items-end">
               <marquee class="marquee-title" behavior="scroll" direction="left" scrollamount="80" scrolldelay="500">
                  <span>* Where Every Voice Counts</span> <span>* Where Every Voice Counts</span> <span>* Where Every Voice Counts</span>
               </marquee>
            </div>
         </div>
      </div>
   </section>
   <!--Marquee Section End -->

   <!--Portfolio Section Start -->
   <!--<section class="portfolio_sec sec_pad">
      <div class="container">
         <h5 class="subheading text-center">Our Portfolio</h5>
         <h2 class="heading text-center">Explore Our Portfolio</h2>
         <div class="portfolio_inner">
   <div class="row">
      @php
         $projects = [
            ['title' => 'Medical Camps', 'category' => 'Old Care', 'img' => 'project-img1.jpg', 'link' => 'medical-camps'],
            ['title' => 'NDIS Management', 'category' => 'Medical', 'img' => 'project-img2.jpg', 'link' => 'ndis-plan-management'],
            ['title' => 'Disabilities Schemes', 'category' => 'Disability', 'img' => 'project-img3.jpg', 'link' => 'disabilities-schemes'],
            ['title' => 'Physical Activities', 'category' => 'Medical', 'img' => 'project-img4.jpg', 'link' => 'physical-activities'],
            ['title' => 'Therapeutic Supports', 'category' => 'Health', 'img' => 'project-img5.jpg', 'link' => 'therapeutic-supports'],
            ['title' => 'Seniors Health Care', 'category' => 'Health Care', 'img' => 'project-img6.jpg', 'link' => 'seniors-health-care'],
         ];
      @endphp

      @foreach($projects as $project)
         <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
            <div class="tcr-projects-wrapper">
               <div class="tcr-projects-image">
                  <img src="{{ asset('images/project/' . $project['img']) }}" class="img-fluid" alt="{{ $project['title'] }}">
               </div>
               <div class="tcr-projects-content">
                  <div class="tcr-projects-title">
                     <a class="tcr-projects-title-link" href="#">{{ $project['title'] }}</a>
                  </div>
                  <div class="tcr-project-category">
                     <span>{{ $project['category'] }}</span>
                  </div>
               </div>
            </div>
         </div>
      @endforeach
   </div>
</div>

      </div>
   </section>
   --->

   <!--Portfolio Section End -->

   <!--Blog Section Start -->
   <!-- <section class="blog_sec sec_pad">
      <div class="container">
         <h5 class="subheading text-center">Explore News with Us</h5>
         <h2 class="heading text-center">Latest News and Articles</h2>
         <div class="blog_inner">
            <div class="blog-slider owl-carousel owl-theme">
               @php
                  $posts = [
                     [
                        'title' => 'Maximizing Your NDIS Plan for Aging with Dignity',
                        'img' => 'blog-img1-600x600.jpg',
                        'date' => 'Aug 12, 2023',
                        'category' => 'Medical',
                        'link' => '#'
                     ],
                     // Add more posts here as needed
                  ];
               @endphp

               @foreach($posts as $post)
                  <div class="post-slide">
                     <div class="post_img">
                        <img src="https://themecrafter.com/zaver/wp-content/uploads/2024/01/{{ $post['img'] }}"
                             class="img-fluid" alt="{{ $post['title'] }}">
                     </div>
                     <div class="post-wrapper">
                        <div class="post-meta-items">
                           <div class="meta-item post-date">{{ $post['date'] }}</div>
                           <div class="meta-item post-category">
                              <a href="#">{{ $post['category'] }}</a>
                           </div>
                        </div>
                        <h3 class="post-title">{{ $post['title'] }}</h3>
                     </div>
                     <a href="{{ $post['link'] }}" class="post-button">
                        <i class="ri-arrow-right-up-line ms-2"></i>
                     </a>
                  </div>
               @endforeach
            </div>
         </div>
      </div>
   </section> -->
   <!--Blog Section End -->

   <!--Portfolio Section End -->
@endsection