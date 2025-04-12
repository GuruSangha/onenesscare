<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <title>ONENESS CARE - NDIS Elderly &amp; Disability Service</title>
   <link rel="icon" href="{{ asset('images/favicon.png') }}">

   <!-- CSS -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
   <link rel="stylesheet" href="{{ asset('css/aos.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
   <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" type="text/css">

   <link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">

   <!--fontawesome CSS-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">

</head>

<body>
   <!--Header -->
   <header class="header">
      <nav class="navbar navbar-expand-lg pt-0">
         <div class="container-fluid">
            <a class="navbar-brand" href="/">
               <img src="{{ asset('images/logo.png') }}" class="img-fluid" alt="OnenessCare Logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
               aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNavDropdown">
               <ul class="navbar-nav m-auto">
                  <li class="nav-item">
                     <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about"> About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ request()->is('faq') ? 'active' : '' }}" href="/faq">Faq</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle {{ request()->is('services') ? 'active' : '' }}" href="#" id="ServicesMenu" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="ServicesMenu">
                        <li><a class="dropdown-item {{ $tab == 'employment' ? 'active' : ''}}" href="/services?tab=employment">Employment Support</a></li>
                        <li><a class="dropdown-item {{ $tab == 'daily' ? 'active' : ''}}" href="/services?tab=daily">Daily Personal Care</a></li>
                        <li><a class="dropdown-item {{ $tab == 'shared' ? 'active' : ''}}" href="/services?tab=shared">Shared Living Assistance</a></li>
                        <li><a class="dropdown-item {{ $tab == 'household' ? 'active' : ''}}" href="/services?tab=household">Household Help</a></li>
                        <li><a class="dropdown-item {{ $tab == 'high' ? 'active' : ''}}" href="/services?tab=high">High Intensity Care</a></li>
                        <li><a class="dropdown-item {{ $tab == 'transport' ? 'active' : ''}}" href="/services?tab=transport">Transport Assistance</a></li>
                        <li><a class="dropdown-item {{ $tab == 'community' ? 'active' : ''}}" href="/services?tab=community">Community Participation</a></li>
                        <li><a class="dropdown-item {{ $tab == 'social' ? 'active' : ''}}" href="/services?tab=social">Social & Recreational Access</a></li>
                        <li><a class="dropdown-item {{ $tab == 'transitions' ? 'active' : ''}}" href="/services?tab=transitions">Life Transitions Support</a></li>
                        <li><a class="dropdown-item {{ $tab == 'nursing' ? 'active' : ''}}" href="/services?tab=nursing">In-Home Nursing Care</a></li>
                        <li><a class="dropdown-item {{ $tab == 'lifeskills' ? 'active' : ''}}" href="/services?tab=lifeskills">Life Skills Development</a></li>
                        <li><a class="dropdown-item {{ $tab == 'supported' ? 'active' : ''}}" href="/services?tab=supported">Supported Employment</a></li>
                        <li><a class="dropdown-item {{ $tab == 'group' ? 'active' : ''}}" href="/services?tab=group">Group Centre Activities</a></li>
                        </ul>

                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{ request()->is('ndis-support') ? 'active' : '' }}" href="/ndis-support">NDIS Support</a>
                  </li>
               </ul>
            </div>
            <a href="/contact" class="contact_btn {{ request()->is('contact') ? 'active' : '' }}">Contact Us</a>
         </div>
      </nav>
   </header>
   <!--Header End -->