@extends('layout.app')

@section('styles')
<style>
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { transform: translateY(50px); opacity: 0; }
        to { transform: translateY(0); opacity: 1; }
    }

    @keyframes scale {
        from { transform: scale(0.9); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }

    .animate-fadeIn {
        animation: fadeIn 1s ease-out;
    }

    .animate-slideUp {
        animation: slideUp 0.8s ease-out;
    }

    .animate-scale {
        animation: scale 0.6s ease-out;
    }

    .animate-delay-1 { animation-delay: 0.2s; }
    .animate-delay-2 { animation-delay: 0.4s; }
    .animate-delay-3 { animation-delay: 0.6s; }

    .service-list-process-wrap:hover {
        transform: translateY(-5px);
        transition: transform 0.3s ease;
    }

    .right-services-image, .service-list-2-bottom-image {
        transition: transform 0.3s ease;
    }

    .right-services-image:hover, .service-list-2-bottom-image:hover {
        transform: scale(1.05);
    }
</style>
@endsection

@section('content')

<div class="yellow-bg">
  <section class="section services">
    <div class="base-container w-container">
      <div class="home-3-banner-wrapper animate-fadeIn">
        <h1 class="home-1-banner-title dark-copy">
          Our Security Services
        </h1>
        <p class="title-description dark-center-copy">
          Protecting what matters most with professional security solutions tailored to your needs.
        </p>
      </div>
    </div>
  </section>
  <div class="section services-page">
    <div class="base-container w-container">
      <div class="w-dyn-list">
        <div role="list" class="services-collection-list w-dyn-items">
          <div role="listitem" class="collect-item w-dyn-item animate-slideUp animate-delay-1">
            <div style="height: 6px" class="yellow-line"></div>
            <div class="home-services-item">
              <div class="relative-wrapper">
                <p style="color: rgb(255, 198, 0)" class="serial-number">01</p>
                <a href="#" class="w-inline-block">
                  <h4 class="services-title">Security Guard Services</h4>
                </a>
                <p class="services-info">
                  Our highly trained security guards provide on-site protection for your property and personnel. Available 24/7 for various settings including commercial, residential, and events.
                </p>
              </div>
            </div>
          </div>
          <div role="listitem" class="collect-item w-dyn-item animate-slideUp animate-delay-2">
            <div style="height: 6px" class="yellow-line"></div>
            <div class="home-services-item">
              <div class="relative-wrapper">
                <p style="color: rgb(255, 198, 0)" class="serial-number">02</p>
                <a href="#" class="w-inline-block">
                  <h4 class="services-title">Patrol Services</h4>
                </a>
                <p class="services-info">
                  Our mobile patrol units provide regular checks on your property, ensuring comprehensive security coverage. Ideal for large areas or multiple locations.
                </p>
              </div>
            </div>
          </div>
          <div role="listitem" class="collect-item w-dyn-item animate-slideUp animate-delay-3">
            <div style="height: 6px" class="yellow-line"></div>
            <div class="home-services-item">
              <div class="relative-wrapper">
                <p style="color: rgb(255, 198, 0)" class="serial-number">03</p>
                <a href="#" class="w-inline-block">
                  <h4 class="services-title">CCTV Services</h4>
                </a>
                <p class="services-info">
                  State-of-the-art CCTV installation and monitoring services. We design, install, and maintain surveillance systems to keep your property under constant watch.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section light-background">
  <div class="base-container w-container">
    <div class="section-title-wrapper animate-fadeIn">
      <h6 class="small-title">our process</h6>
      <h2 class="section-title">How We Secure Your Property</h2>
      <p class="section-title-description">
        Our comprehensive approach ensures your security needs are met with precision and professionalism.
      </p>
    </div>
    <div class="service-list-process-wrapper">
      <div class="service-list-process-wrap animate-scale animate-delay-1">
        <div class="service-list-process-icon"></div>
        <h6>01. Initial Consultation</h6>
        <p>We begin by understanding your specific security concerns and requirements.</p>
      </div>
      <div class="service-list-process-wrap animate-scale animate-delay-2">
        <div class="service-list-process-icon"></div>
        <h6>02. Security Assessment</h6>
        <p>Our experts conduct a thorough assessment of your property to identify vulnerabilities.</p>
      </div>
      <div class="service-list-process-wrap animate-scale animate-delay-3">
        <div class="service-list-process-icon"></div>
        <h6>03. Customized Security Plan</h6>
        <p>We develop a tailored security strategy combining guards, patrols, and CCTV as needed.</p>
      </div>
      <div class="service-list-process-wrap animate-scale animate-delay-3">
        <div class="service-list-process-icon"></div>
        <h6>04. Implementation and Ongoing Support</h6>
        <p>We deploy our services and provide continuous support to ensure your security is maintained.</p>
      </div>
    </div>
  </div>
</div>

<div class="section">
  <div class="base-container w-container">
    <div class="service-list-section-wrapper">
      <div class="service-list-section-wrap first-child animate-fadeIn">
        <h3>We provide high-quality & cost-effective security services</h3>
        <ul role="list" class="service-list">
          <li>Professional security guards for various settings</li>
          <li>Regular patrol services for comprehensive coverage</li>
          <li>State-of-the-art CCTV installation and monitoring</li>
        </ul>
      </div>
      <div class="service-list-section-wrap animate-fadeIn animate-delay-1">
        <img src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6478611be2b1b054206e1cc5_image%203.webp"
          loading="lazy" alt="security guard image" class="right-services-image" />
      </div>
    </div>
  </div>
</div>

<div>
  <div class="service-list-2-bottom-section">
    <div class="service-list-2-bottom-left-block animate-fadeIn">
      <img src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64789f631f140c6821e10a84_image.webp"
        loading="lazy" sizes="(max-width: 767px) 100vw, 50vw"
        srcset="
          https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64789f631f140c6821e10a84_image-p-500.webp  500w,
          https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64789f631f140c6821e10a84_image-p-800.webp  800w,
          https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64789f631f140c6821e10a84_image.webp       1000w
        " alt="patrol service image" class="service-list-2-bottom-image" />
    </div>
    <div class="service-list-2-bottom-center-block animate-fadeIn animate-delay-1">
      <img src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64789ef779340c2044e26da0_image.webp"
        loading="lazy" sizes="(max-width: 767px) 100vw, 50vw"
        srcset="
          https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64789ef779340c2044e26da0_image-p-500.webp  500w,
          https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64789ef779340c2044e26da0_image-p-800.webp  800w,
          https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64789ef779340c2044e26da0_image.webp       1000w
        " alt="CCTV service image" class="service-list-2-bottom-image" />
    </div>
  </div>
</div>

@endsection
