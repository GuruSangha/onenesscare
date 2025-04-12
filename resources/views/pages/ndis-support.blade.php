@extends('main')

@section('content')

   <!-- About Hero Section -->
   <div class="about-hero d-flex align-items-center support-hero">
      <div class="container position-relative">
         <div class="row">
            <div class="col-md-12">
               <h1 class="page-title">NDIS Support</h1>
               <div class="page-breadcrumbs">
                  <div class="breadcrumb"><a href="/">Home</a><span class="current">NDIS Support</span></div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- About Hero Section End  -->
   <section class="whychoose-section sec_pad">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <h5 class="subheading">HOW WE HELP</h5>
            <h2 class="heading">How Can Oneness Care Assist You with Your NDIS Plan?</h2>
         </div>
         <div class="col-lg-6 ps-lg-4">
            <p class="pra">
               At Oneness Care, we support you in making the most of your NDIS plan. With a deep understanding of the NDIS framework, our dedicated team is here to offer personalised guidance, tailored services, and genuine care every step of the way.
            </p>
            <a href="/contact" class="mt-4 common_btn why_btn py-3">Get in Touch</a>
         </div>
      </div>

      <div class="row mt-5">
         <div class="col-lg-12">
            <div class="whychoose_wapper ndis_whychoose">
               <div class="row">

                  <div class="col-lg-3 col-md-6">
   <div class="whychoose_card">
      <div class="why_icon">
      <i class="fa-solid fa-heart"></i>
      </div>
      <h4>Care</h4>
      <p class="pra">Personalised care services tailored to your daily needs and health goals.</p>
   </div>
</div>

<div class="col-lg-3 col-md-6">
   <div class="whychoose_card">
      <div class="why_icon">
      <i class="fa-solid fa-users"></i>
      </div>
      <h4>Community</h4>
      <p class="pra">Helping you stay connected and participate fully in your local community.</p>
   </div>
</div>

<div class="col-lg-3 col-md-6">
   <div class="whychoose_card">
      <div class="why_icon">
      <i class="fa-solid fa-thumbs-up"></i>
      </div>
      <h4>Support</h4>
      <p class="pra">Reliable, responsive support when and where you need it most.</p>
   </div>
</div>

<div class="col-lg-3 col-md-6">
   <div class="whychoose_card">
      <div class="why_icon">
      <i class="fa-solid fa-face-smile"></i>
      </div>
      <h4>Independence</h4>
      <p class="pra">Empowering you to live life your way with confidence and control.</p>
   </div>
</div>


               </div>
            </div>
         </div>
      </div>
   </div>
</section>


<section class="support_sec sec_pad">
   <div class="container">
      <div class="row">
         <div class="col-md-7" data-aos="fade-right">
            <div class="support_sec_left">
               <h2 class="heading">Getting Started with Your NDIS Plan</h2>
               <p class="pra mt-3">At Oneness Care, we’re here to make sure your journey with the NDIS is smooth, supported, and stress-free. Whether your plan is brand new or just renewed, we’ll help you get the most from it — and make sure your supports keep flowing without interruption.
               </p>

               <p class="pra mt-3">
               We understand that NDIS can feel overwhelming sometimes. That’s why our friendly, down-to-earth team is here to walk beside you and guide you every step of the way.
                 </p>

               <h6>Here’s how we support your journey:</h6>
               <ul>
   <li>
      <i class="ri-check-line"></i>
      <p><b>One-on-one client meet-ups</b> – We get to know you properly, not just your paperwork.</p>
   </li>
   <li>
      <i class="ri-check-line"></i>
      <p><b>Clear, honest support planning</b> – We’ll help you plan supports around your real goals and day-to-day life.</p>
   </li>
   <li>
      <i class="ri-check-line"></i>
      <p><b>Community connection</b> – Need to get out more? Try new things? We’ll link you with the right groups, services, or programs.
      </p>
   </li>
   <li>
      <i class="ri-check-line"></i>
      <p><b>Simple, easy-to-understand service agreements</b> – No jargon, just clear support.</p>
   </li>
   <li>
      <i class="ri-check-line"></i>
      <p><b>NDIS budget help</b> – We’ll help you understand how to use your funding wisely.
      </p>
   </li>
   <li>
      <i class="ri-check-line"></i>
      <p><b>Ongoing check-ins</b> – We stay in touch and adjust supports when your needs change</p>
   </li>
   <li>
      <i class="ri-check-line"></i>
      <p><b>Trusted provider referrals</b> – Need allied health, transport, nursing, or STA? We’ve got trusted connections ready to help.</p>
   </li>
</ul>

            </div>
         </div>

         <div class="col-md-5" data-aos="fade-left">
            <div class="support_right text-center">
            <img src="{{ asset('images/personal-care.jpg') }}" class="img-fluid"alt="NDIS Support" >
            </div>
         </div>
      </div>
   </div>
</section>

@endsection
