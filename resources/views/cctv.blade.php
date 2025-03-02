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
        CCTV Camera Services Surrey BC
        </h1>
        <p class="title-description dark-center-copy">
         At Peak Security, we offer professional CCTV Camera Services in SurreyB C designed to provide peace of mind and ensure the safety of your home or business. Whether you are looking to monitor your property for security service reasons or to enhance the CCTV surveillance system in place, our team is here to deliver the best solutions tailored to your needs.
        </p>
      </div>
    </div>
  </section>
  <div class="base-container w-container">
  <h2> Our CCTV Installation Services Surrey BC</h2>
  <p>At Peak Security, we offer comprehensive CCTV Installation Services for both homes and businesses across Surrey, BC, and surrounding areas. We use the latest technology to ensure your property is well-secured, with clear video footage and advanced features such as motion detection, remote access, and cloud storage options. Whether you're protecting your home, office, or business premises, Peak Security's CCTV installation solutions provide reliable protection, giving you peace of mind knowing that your property is always being monitored.
</p>
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
                  <h3 class="services-title">Residential CCTV Installation Services</h3>
                </a>
                <p class="services-info">
                  Safeguard your home with our top-of-the-line security camera systems. Our team designs the best Residential CCTV Installation Service and installs systems that offer 24/7 monitoring, helping you keep an eye on your property, whether you're at home or away. With high-definition cameras and smart features, we ensure your family and belongings are protected at all times.
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
                  <h3 class="services-title">Commercial CCTV Installation Services</h3>
                </a>
                <p class="services-info">
                 Peak Security provides customized Commercial CCTV installation Services tailored to the unique needs of your property. From retail stores to office buildings and warehouses, we equip your premises with reliable surveillance systems that help deter criminal activity and ensure you have clear evidence when needed.
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
      <h6 class="small-title" style="color: #ffc600">our process</h6>
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
        <h2>Why Choose Peak Security for CCTV Camera Services in Surrey BC?</h2>
            <p>Peak Security stands out for its commitment to providing high-quality, reliable CCTV camera services in Surrey, BC. Our expert team offers customized solutions for both residential and commercial propertie, ensuring maximum protection with the latest surveillance technology. We pride ourselves on clear, detailed installations, responsive customer service, and a focus on your security needs. With Peak Securit, you can trust that your property is always under watch, giving you peace of mind at all times.
            </p>
            <ul role="list" class="service-list">
           <h3><li>Expert Technicians</li></h3>
            <p>Our skilled and experienced technicians are well-versed in all types of CCTV systems, from traditional analog to the latest digital IP cameras. We ensure flawless installation with a focus on optimal camera positioning, wiring, and system setup to guarantee the best surveillance coverage.
          </p>
          <h3><li>Tailored Solutions</li></h3>
          <p>Every property is different, which is why we offer customized CCTV systems based on your specific security needs. Our team assesses your space and recommends the best system, whether you're looking to cover a small office, large commercial property, or residential areas.
          </p>
          <h3><li>High-Quality Equipment</li></h3>
          <p>We only use high-definition cameras and top-of-the-line security equipment, ensuring your surveillance footage is clear, reliable, and accessible at any time. From remote viewing options to advanced motion detection features, our systems are designed to give you the best in security technology.
           </p>
         <h3><li>24/7 Support</li></h3>
         <p>Once installed, our team continues to offer support for any questions or issues you might have. We also offer ongoing maintenance services to ensure your CCTV system operates smoothly and effectively.
           </p>
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
    <h3> Get a Consultation with Peak Security For CCTV Camera Services – Contact Us Today!</h3>
    <p>At Peak Security, we understand how important it is to keep your property safe. Our goal is to offer you the best CCTV Camera Installation Service, in Canada’s surrounding locations like Surrey, Langley, Vancouver, and Calgary. Contact Us!
      </p>

@endsection
