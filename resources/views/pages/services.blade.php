@extends('main')

@section('content')

  <!-- About Hero Section -->
  <div class="about-hero d-flex align-items-center faq-hero">
      <div class="container position-relative">
         <div class="row">
            <div class="col-md-12">
               <h1 class="page-title" id="page_title">
                   {{ isset($services[request()->query('tab')]) ? $services[request()->query('tab')] : '' }}
               </h1>
               <div class="page-breadcrumbs">
                  <div class="breadcrumb"><a href="/">Home</a><span class="tcr-readcrumb"><a
                           href="/employment-support">Service</a></span><span id="service_title_display" class="current">{{ isset($services[request()->query('tab')]) ? $services[request()->query('tab')] : '' }}</span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- About Hero Section End  -->

      <div class="services_page sec_pad">
         <div class="container">
            <div class="row">
               <div class="col-lg-4">
                  <div class="services_sidebar">
                     <ul class="nav flex-column nav-pills" id="services-tab" role="tablist">
                        <li><a class="nav-link {{ request()->query('tab') == 'employment' ? 'active' : ''}}" id="tab-employment" data-bs-toggle="pill" href="#employment"
                              role="tab">Employment Support</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'daily' ? 'active' : ''}}" id="tab-daily" data-bs-toggle="pill" href="#daily" role="tab">Daily
                              Personal Care</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'shared' ? 'active' : ''}}" id="tab-shared" data-bs-toggle="pill" href="#shared" role="tab">Shared
                              Living Assistance</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'household' ? 'active' : ''}}" id="tab-household" data-bs-toggle="pill" href="#household"
                              role="tab">Household Help</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'high' ? 'active' : ''}}" id="tab-high" data-bs-toggle="pill" href="#high" role="tab">High Intensity
                              Care</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'transport' ? 'active' : ''}}" id="tab-transport" data-bs-toggle="pill" href="#transport"
                              role="tab">Transport Assistance</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'community' ? 'active' : ''}}" id="tab-community" data-bs-toggle="pill" href="#community"
                              role="tab">Community Participation</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'social' ? 'active' : ''}}" id="tab-social" data-bs-toggle="pill" href="#social" role="tab">Social
                              &amp; Recreational Access</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'transitions' ? 'active' : ''}}" id="tab-transitions" data-bs-toggle="pill" href="#transitions"
                              role="tab">Life Transitions Support</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'nursing' ? 'active' : ''}}" id="tab-nursing" data-bs-toggle="pill" href="#nursing" role="tab">In-Home
                              Nursing Care</a></li>
                        <li><a class="nav-link services-item {{ request()->query('tab') == 'lifeskills' ? 'active' : ''}}" id="tab-lifeskills" data-bs-toggle="pill" href="#lifeskills"
                              role="tab">Life Skills Development</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'supported' ? 'active' : ''}}" id="tab-supported" data-bs-toggle="pill" href="#supported"
                              role="tab">Supported Employment</a></li>
                        <li><a class="nav-link {{ request()->query('tab') == 'group' ? 'active' : ''}}" id="tab-group" data-bs-toggle="pill" href="#group" role="tab">Group Centre
                              Activities</a></li>
                     </ul>
                  </div>
               </div>

               <div class="col-lg-8 ps-lg-5">
                  <div class="tab-content" id="services-tabContent">
                     <!-- Employment Support Tab -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'employment' ? 'show active' : ''}}" id="employment" role="tabpanel">
                        <div class="services_cnt">
                           <div class="service-thumbnail">
                              <img width="1000" height="600"
                                 src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                                 class="img-fluid w-100" alt="services-img">
                           </div>
                           <div class="services_heading">
                              <h2>Assistance to Access and Maintain Employment or Higher Education</h2>
                           </div>
                           <div class="services_dec">
                              <p>At Oneness Care, we are committed to empowering individuals with disabilities to achieve
                                 their
                                 employment and educational aspirations...</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Services Include:</h2>
                              <ul>
                                 <li>
                                    <i class="ri-check-line"></i>
                                    <p><b>Personalized Career Planning:</b> Identifying employment or educational
                                       opportunities that align with the participant’s skills, interests, and long-term
                                       objectives.</p>
                                 </li>
                                 <li>
                                    <i class="ri-check-line"></i>
                                    <p><b>Job Readiness Training:</b> Providing training to develop essential workplace
                                       skills, including resume writing, interview preparation, and effective
                                       communication.
                                    </p>
                                 </li>
                                 <li>
                                    <i class="ri-check-line"></i>
                                    <p><b>On-the-Job Support:</b> Offering continuous assistance and supervision to ensure
                                       participants can perform their job duties effectively and confidently.</p>
                                 </li>
                                 <li>
                                    <i class="ri-check-line"></i>
                                    <p><b>Educational Support:</b> Assisting with enrollment processes, course selection,
                                       and
                                       providing strategies for successful learning experiences in higher education
                                       settings.
                                    </p>
                                 </li>
                                 <li>
                                    <i class="ri-check-line"></i>
                                    <p><b>Workplace and Educational Institution Liaison:</b> Collaborating with employers
                                       and
                                       educational institutions to ensure appropriate accommodations and support are in
                                       place
                                       for the participant’s success.</p>
                                 </li>
                                 <li>
                                    <i class="ri-check-line"></i>
                                    <p><b>Transition Support:</b> Facilitating smooth transitions from education to
                                       employment
                                       or between job roles, ensuring continuity and stability in the participant’s career
                                       or
                                       educational journey.</p>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <!-- Other tabs - content placeholders -->

                     <!-- Daily Personal Care Tab -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'daily' ? 'show active' : ''}}" id="daily" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Daily Personal Activities</h2>
                           </div>
                           <div class="services_dec">
                              <p>This service is for Participants who require assistance with personal daily life tasks. We
                                 provide caring and compassionate support workers who are trained to assist you with these
                                 tasks in various environments, including your own home so that they can live as
                                 independently as possible. Daily living includes all those chores and tasks to be
                                 completed within the day.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Services Include:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> <b>Personalized Job Matching:</b> Identifying employment
                                    opportunities that align with the participant’s skills, interests, and career
                                    objectives.</li>
                                 <li><i class="ri-check-line"></i> <b>On-the-Job Training and Support:</b> Providing
                                    continuous assistance and supervision to ensure participants can perform their job
                                    duties effectively and confidently.</li>
                                 <li><i class="ri-check-line"></i> <b>Workplace Modification Assistance:</b> Collaborating
                                    with employers to adapt the work environment, ensuring accessibility and suitability
                                    for the participant’s needs.</li>
                                 <li><i class="ri-check-line"></i> <b>Skill Development Programs:</b> Offering training
                                    sessions to enhance workplace skills, communication, and task management.</li>
                                 <li><i class="ri-check-line"></i> <b>Career Planning and Progression:</b> Assisting
                                    participants in setting realistic career goals and mapping out steps for advancement
                                    and professional growth.</li>
                                 <li><i class="ri-check-line"></i> <b>Transition Support:</b> Facilitating smooth
                                    transitions from supported employment settings to open or alternative employment
                                    opportunities as desired by the participant.</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Shared Living Assistance Tab -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'shared' ? 'show active' : ''}}" id="shared" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Daily Life Tasks in a Group or Shared Living Arrangement</h2>
                           </div>
                           <div class="services_dec">
                              <p>We set out to offer excellent Personal assistance to help participants thrive in a shared
                                 living environment focusing on developing each individual’s skills to live independently.
                              </p>
                              <p>Our experienced and trained support workers are available to provide assistance with or
                                 supervision of tasks of daily life in a shared living environment.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Services Include:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Assistance in Shared Living Arrangements</li>
                                 <li><i class="ri-check-line"></i> Short Term Accommodation and Assistance (respite care)
                                 </li>
                                 <li><i class="ri-check-line"></i> Assistance with Daily personal activities</li>
                                 <li><i class="ri-check-line"></i> Assistance with Shared living arrangement. Support for
                                    self-care, accommodation, food and activities in a centre or group residence for short
                                    periods for our NDIS participants.</li>
                                 <li><i class="ri-check-line"></i> One-to-one assistance with an experienced support worker
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Household Help Tab -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'household' ? 'show active' : ''}}" id="household" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Household Tasks Assistance</h2>
                           </div>
                           <div class="services_dec">
                              <p>We know that your home is your place of peace and a space where you take pride. That’s why
                                 we provide expert assistance in helping with your daily tasks, ensuring that your home
                                 remains your oasis.</p>
                              <p>The service includes household tasks such as general cleaning and home maintenance,
                                 laundry, toilet assistance, and gardening services. This can also involve undertaking
                                 essential household tasks that the participant cannot undertake.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Services Include:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> House or Yard Maintenance – Performing essential house
                                    and/or yard activities that the participant is not able to undertake</li>
                                 <li><i class="ri-check-line"></i> Linen Service – This support is for a participant who is
                                    unable to do their own laundry without assistance</li>
                                 <li><i class="ri-check-line"></i> Preparation and delivery of meals</li>
                              </ul>
                           </div>
                        </div>
                     </div>


                     <!-- High Intensity Daily Personal Activities -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'high' ? 'show active' : ''}}" id="high" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>High Intensity Daily Personal Activities</h2>
                           </div>
                           <div class="services_dec">
                              <p>For Participants who require High-Intensity support, our Registered Nurses are
                                 expertly-trained caregivers equipped to assist with or supervise personal tasks of daily
                                 life to live as independently as possible.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Assistance With Self Care Activities Includes:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Complex Bowel Care</li>
                                 <li><i class="ri-check-line"></i> Enteral (Naso-Gastric Tube – Jejunum or Duodenum)
                                    Feeding and Management</li>
                                 <li><i class="ri-check-line"></i> A Severe Dysphagia Management</li>
                                 <li><i class="ri-check-line"></i> Tracheostomy Management</li>
                                 <li><i class="ri-check-line"></i> Urinary Catheter Management (In-dwelling, In-out,
                                    Suprapubic)</li>
                                 <li><i class="ri-check-line"></i> Ventilator Management</li>
                                 <li><i class="ri-check-line"></i> Subcutaneous Injections</li>
                                 <li><i class="ri-check-line"></i> Complex Wound Management</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Assistance WITH Travel–Transport -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'transport' ? 'show active' : ''}}" id="transport" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Assistance WITH Travel–Transport</h2>
                           </div>
                           <div class="services_dec">
                              <p>We understand Participants are faced with unique individual challenges when it comes to
                                 transportation. At Oneness Care, we provide a convenient, safe transport service scheduled
                                 in advance to help you get from A to B easily.</p>
                              <p>NB: This service is only provided along with other services, not as a standalone.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Service Includes:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Training Participants on how to use/navigate the public
                                    transport system to travel freely.</li>
                                 <li><i class="ri-check-line"></i> Transport to: appointments, shops, chemist, work,
                                    school, around the community, library, parks with your Support Worker.</li>
                                 <li><i class="ri-check-line"></i> Supporting participants to travel safely with the right
                                    aid and equipment.</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- INNOVATIVE COMMUNITY PARTICIPATION ASSISTANCE -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'community' ? 'show active' : ''}}" id="community" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Innovative Community Participation Assistance</h2>
                           </div>
                           <div class="services_dec">
                              <p>This support is designed to enable participants to access mainstream activities to help
                                 develop skills to participate actively in the community, events, and programmes to build
                                 the participants’ capacity and resilience.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Service Includes:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Delivery of Job Readiness Workshops to participants
                                    aimed to equip participants with the required skills to design a professional resume
                                    aligned with their skills and experience</li>
                                 <li><i class="ri-check-line"></i> Mentoring participants to overcome challenges and
                                    offering guidance for growth and development
                                 </li>
                                 <li><i class="ri-check-line"></i> Helping participants develop skills to participate in
                                    community activities actively and events of their choice with confidence and enjoyment
                                 </li>
                                 <li><i class="ri-check-line"></i> Recreation and leisure activities</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Assistance to Access Community, Social and Recreational Activities -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'social' ? 'show active' : ''}}" id="social" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Access to Community, Social & Recreational Activities</h2>
                           </div>
                           <div class="services_dec">
                              <p>This support assists a participant in independently engaging in the community, social and
                                 recreational activities with the assistance of our highly trained staff.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Service Includes:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Assistance with engaging in social and recreational
                                    activities</li>
                                 <li><i class="ri-check-line"></i> Assistance for high-intensity needs during these
                                    activities</li>
                                 <li><i class="ri-check-line"></i> Our highly training staff are available to assist
                                    Participants in attending camp programs, vacation, visiting friends and family,
                                    participating in hobbies, such as bike riding, skiing or kayaking, playing a sport of
                                    their choice, such as tennis, surfing or basketball etc., and going out to the movies
                                    or a concert, going places for fun, such as shopping or visiting a museum, learning new
                                    skills, like dance, art classes or quilting, relaxing, meditation or yoga.Contact our
                                    friendly team today to find out more about how we can customize our services to meet
                                    your unique needs.
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Life Stages, Transitions & Supports -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'transitions' ? 'show active' : ''}}" id="transitions" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Coordinating or Managing Life Stages, Transitions & Supports</h2>
                           </div>
                           <div class="services_dec">
                              <p>We help Participants develop critical skills required to coordinate support and transition
                                 into the community with confidence.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Services Include:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Assistance with decision making and planning</li>
                                 <li><i class="ri-check-line"></i> Support with accommodation and tenancy obligations</li>
                                 <li><i class="ri-check-line"></i> Assistance with decision making</li>
                                 <li><i class="ri-check-line"></i> Individual skill development</li>
                                 <li><i class="ri-check-line"></i> Mentoring, peer support</li>
                                 <li><i class="ri-check-line"></i> Support connection and coordination</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Community Nursing Care -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'nursing' ? 'show active' : ''}}" id="nursing" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Community Nursing Care</h2>
                           </div>
                           <div class="services_dec">
                              <p>Our qualified community nurses provide a range of complex caregiving services with care
                                 booked from a few hours to 24/7 depending on your needs.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Service Includes:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Complex Bowel Care</li>
                                 <li><i class="ri-check-line"></i> Enteral (Naso-Gastric Tube – Jejunum or Duodenum)
                                    Feeding and Management</li>
                                 <li><i class="ri-check-line"></i> Severe Dysphagia Management</li>
                                 <li><i class="ri-check-line"></i> Tracheostomy Management</li>
                                 <li><i class="ri-check-line"></i> Urinary Catheter Management (In-dwelling Urinary
                                    Catheter, In-out Catheter, Suprapubic Catheter)
                                 </li>
                                 <li><i class="ri-check-line"></i> Ventilator Management</li>
                                 <li><i class="ri-check-line"></i> Subcutaneous Injections</li>
                                 <li><i class="ri-check-line"></i> Complex Wound Management</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Development of Daily Living and Life Skills -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'lifeskills' ? 'show active' : ''}}" id="lifeskills" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Development of Daily Living and Life Skills</h2>
                           </div>
                           <div class="services_dec">
                              <p>We are dedicated to assisting Participants in developing life skills to live an empowered
                                 and independent lifestyle.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Programs Include:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Development of skills in daily life activities,
                                    communication and social skills, problem-solving and managing the funding of supports
                                 </li>
                                 <li><i class="ri-check-line"></i> Household tasks training</li>
                                 <li><i class="ri-check-line"></i> Public transport training</li>
                                 <li><i class="ri-check-line"></i> Time management</li>
                                 <li><i class="ri-check-line"></i> Time management</li>
                                 <li><i class="ri-check-line"></i> Physical wellbeing & much more</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Specialised Supported Employment -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'supported' ? 'show active' : ''}}" id="supported" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Specialised Supported Employment</h2>
                           </div>
                           <div class="services_dec">
                              <p>We empower individuals with disabilities to achieve their employment aspirations through
                                 tailored support services and training.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Services Include:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> Personalized Job Matching</li>
                                 <li><i class="ri-check-line"></i> On-the-Job Training and Support</li>
                                 <li><i class="ri-check-line"></i> Workplace Modification Assistance</li>
                                 <li><i class="ri-check-line"></i> Skill Development Programs</li>
                                 <li><i class="ri-check-line"></i> Career Planning and Progression</li>
                                 <li><i class="ri-check-line"></i> Transition Support</li>
                              </ul>
                           </div>
                        </div>
                     </div>

                     <!-- Group & Centre Based Activities -->
                     <div class="tab-pane fade {{ request()->query('tab') == 'group' ? 'show active' : ''}}" id="group" role="tabpanel">
                        <div class="service-thumbnail">
                           <img width="1000" height="600"
                              src="https://themecrafter.com/zaver/wp-content/uploads/2023/08/services-img2-1000x600.jpg"
                              class="img-fluid w-100" alt="services-img">
                        </div>
                        <div class="services_cnt">
                           <div class="services_heading">
                              <h2>Group & Centre Based Activities</h2>
                           </div>
                           <div class="services_dec">
                              <p>We offer exciting opportunities for participants to connect, socialize and grow together
                                 through engaging activities.</p>
                           </div>
                           <div class="include_sec">
                              <h2>Our Service Includes:</h2>
                              <ul>
                                 <li><i class="ri-check-line"></i> We offer ample opportunity to socialize and connect with
                                    others, partake in stimulating activities, lead an active lifestyle, eat nutritious
                                    meals and cultivate a sense of independence, privacy and dignity
                                 </li>
                                 <li><i class="ri-check-line"></i> Opportunity to develop new interests and new skills
                                 </li>
                                 <li><i class="ri-check-line"></i> A sense of belonging and enhanced self esteem
                                 </li>
                                 <li><i class="ri-check-line"></i> Development of natural friendships and peer networks
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

   <div class="container">
      <div class="service_contact sec_pad">
         <h2 class="section-title">Any Inquiry? Contact Us As Needed.</h2>
         <a href="/contact" class="common_btn about_btn mt-4 mt-lg-5">Contact Us</a>
      </div>
   </div>

@endsection
@section('scripts')
<script>
$(document).ready(function () {
   const services = @json($services);
   $('#services-tab .nav-link').on('click', function () {
      let clickedId = $(this).attr('id');
         const tabId = clickedId.replace('tab-', ''); // e.g. 'employment'
         const serviceName = services[tabId];
         if (serviceName) {
            $('#page_title, #service_title_display').fadeOut(200, function () {
                 $(this).text(serviceName).fadeIn(200);
             });
         }
         $('.dropdown-item').removeClass('active');
         $(`.dropdown-item[href="/services?tab=${tabId}"]`).addClass('active');
         console.log("Clicked tab ID:", serviceName);
         // Do something with clickedId
      });
});
</script>
@endsection
