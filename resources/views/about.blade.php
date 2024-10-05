@extends('layout.app')

@section('styles')
<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideInFromLeft {
        from { transform: translateX(-50px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes slideInFromRight {
        from { transform: translateX(50px); opacity: 0; }
        to { transform: translateX(0); opacity: 1; }
    }

    @keyframes scaleUp {
        from { transform: scale(0.8); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }

    .animate-fadeIn { animation: fadeIn 1s ease-out; }
    .animate-slideInFromLeft { animation: slideInFromLeft 0.8s ease-out; }
    .animate-slideInFromRight { animation: slideInFromRight 0.8s ease-out; }
    .animate-scaleUp { animation: scaleUp 0.6s ease-out; }

    .animate-delay-1 { animation-delay: 0.2s; }
    .animate-delay-2 { animation-delay: 0.4s; }
    .animate-delay-3 { animation-delay: 0.6s; }

    .hover-scale { transition: transform 0.3s ease; }
    .hover-scale:hover { transform: scale(1.05); }
</style>
@endsection

@section('content')
    <section class="section about-us-banner">
      <div class="base-container w-container">
        <div class="about-us-banner-wrapper animate-fadeIn">
          <h6 class="small-title">Peak Security</h6>
          <h1 class="home-1-banner-title">About Our Security Services</h1>
          <p class="title-description width">
            Since 2009, Peak Security has been providing cost-effective, round-the-clock security services with a personalized touch. Our vision is to ensure the safety and peace of mind you deserve.
          </p>
        </div>
      </div>
    </section>

    <section class="section light-background">
      <div class="base-container w-container">
        <div class="diverse-wrapper animate-slideInFromLeft">
          <h2 class="medium-title about-us-width">
            Comprehensive Security Solutions
          </h2>
          <p class="short-description width-about-us">
            We offer a range of security services including hourly patrols with uniformed security officers. Our licensed and bonded professionals are committed to providing timely and courteous service to all our clients.
          </p>
        </div>
        <div class="diverse-images-wrapper">
          <div class="left-wrapper-with-number animate-slideInFromLeft animate-delay-1">
            <img src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6478611be2b1b054206e1cc5_image%203.webp"
              loading="lazy" alt="security patrol image" class="left-diverse-image hover-scale" />
            <div class="about-us-numbers-wrapper">
              <div class="about-us-numbers-wrap animate-scaleUp animate-delay-1">
                <p class="numbers">25+</p>
                <h6 class="small-heading">Years of Experience</h6>
                <p class="short-description">
                  Providing security services since 1997.
                </p>
              </div>
              <div class="about-us-numbers-wrap animate-scaleUp animate-delay-2">
                <p class="numbers">24/7</p>
                <h6 class="small-heading">Round-the-Clock Service</h6>
                <p class="short-description">
                  We're always on duty to ensure your safety.
                </p>
              </div>
              <div class="about-us-numbers-wrap animate-scaleUp animate-delay-3">
                <p class="numbers">100%</p>
                <h6 class="small-heading">Licensed & Bonded</h6>
                <p class="short-description">
                  Professional and trustworthy security personnel.
                </p>
              </div>
            </div>
          </div>
          <img src="{{ asset('images/patrol.png') }}"
            loading="lazy" alt="security officer image" class="image animate-slideInFromRight animate-delay-2 hover-scale" />
        </div>
      </div>
    </section>

    <section class="section">
      <div class="base-container w-container">
        <div class="service-list-section-wrapper">
          <div class="service-list-section-wrap first-child animate-fadeIn">
            <h3>Why Choose Peak Security?</h3>
            <ul role="list" class="service-list">
              <li>Small company with a big vision</li>
              <li>Cost-effective, personalized service</li>
              <li>Hourly patrols with uniformed officers</li>
              <li>Licensed, bonded, and uniformed personnel</li>
            </ul>
          </div>
          <div class="service-list-section-wrap animate-slideInFromRight">
            <img src="{{ asset('images/7.png') }}"  loading="lazy" alt="Peak Security patrol vehicle" class="right-services-image hover-scale" />
          </div>
        </div>
      </div>
    </section>
@endsection
