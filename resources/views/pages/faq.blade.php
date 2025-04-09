@extends('main')

@section('content')

   <!-- About Hero Section -->
   <div class="about-hero d-flex align-items-center faq-hero">
      <div class="container position-relative">
         <div class="row">
            <div class="col-md-12">
               <h1 class="page-title">Frequently Asked Questions</h1>
               <div class="page-breadcrumbs">
                  <div class="breadcrumb"><a href="/">Home</a><span class="current">FAQ's</span></div>
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
                  <h5 class="subheading">Your Questions Answered</h5>
                  <h2 class="heading" style="max-width:430px">Need Help? We’ve Got Answers</h2>
                  <p class="pra mt-3">At Oneness Care, we understand that navigating disability support services and the NDIS can sometimes feel overwhelming. That’s why we’re here to help! Below are answers to some of the most frequently asked questions about our services, the NDIS, and how we can support you.
                  </p>
                  <a href="/contact" class="common_btn about_btn mt-4 mt-lg-5">Contact Us</a>
               </div>
            </div>
            <div class="col-lg-7">
            <div class="faq-accordion aos-init aos-animate" data-aos="fade-right" data-aos-duration="800">
                  <div class="accordion" id="accordionExample">
                     <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                           <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <span class="number">1.</span> What is Oneness Care?
                           </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Oneness Care is a registered NDIS service provider offering a wide range of person-centered disability support services in Ballarat, Melbourne, and surrounding areas. We provide support tailored to each individual’s goals and needs—empowering people to live more independently and with dignity.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <span class="number">2.</span> Who can access your services?
                           </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Our services are available to individuals who are eligible for NDIS funding, as well as self-funded clients who require disability, mental health, nursing, or home support.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <span class="number">3.</span> What is the NDIS?
                           </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>The National Disability Insurance Scheme (NDIS) is a government initiative that provides support to Australians with permanent and significant disabilities to help them live independently and achieve their goals.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                              <span class="number">4.</span> How do I get started with Oneness Care?
                           </button>
                        </h2>
                        <div id="collapsefour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Getting started is easy. Contact us via phone or email, and our friendly team will set up an initial consultation to understand your needs and guide you through the process.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                              <span class="number">5.</span> What are your hours of operation?
                           </button>
                        </h2>
                        <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Our office is open Monday to Friday, 9:00 AM to 5:00 PM. However, many of our support services—including overnight care—are available 24/7 based on your needs.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item mb-3">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                              <span class="number">6.</span> Do I need to pay anything upfront?
                           </button>
                        </h2>
                        <div id="collapsesix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>No upfront payments are needed if you have NDIS funding. For private clients, we provide a detailed quote before services begin.</p>
                           </div>
                        </div>
                     </div>
                     <div class="accordion-item">
                        <h2 class="accordion-header">
                           <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                              <span class="number">7.</span>I’m new to the NDIS. Can Oneness Care help me get started?
                           </button>
                        </h2>
                        <div id="collapseseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                           <div class="accordion-body">
                              <p>Absolutely! We’re here to support you through every step—from understanding the NDIS to planning, applying, and connecting with the right services that meet your goals.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


@endsection
