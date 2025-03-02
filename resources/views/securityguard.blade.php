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
       Security Guard Services in Surrey BC

        </h1>
        <p class="title-description dark-center-copy">
          Our Peak Security skilled Security Guards Services in Surrey BC offer on-site protection for your property and personnel.We provide 24/7 coverage services for various settings,including commercial,residentia,and events.
      </p>
     
      </div>
    </div>
    <div>
        <div class="base-container w-container">
        <h2>Best Security Companies in Surrey BC You Can Trust</h2>
        <p>
          Peak Security Guards is the Best security company in Surrey BC offers dependable protection for your property and personnel. Our security guard officers are committed to creating a safer and more welcoming environment.By customizing our staffing to meet your specific needs, we ensure the ideal fit for the job, offering you confidence and peace of mind in your safety, including Commercial, Residential, and Event security guard services.
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
                  <h3 class="services-title">Commercial Security Guard</h3>
                </a>
                <p class="services-info">
                Protect your business with our professional Commercial Security Guards services, available around the clock. We offer 24/7 coverage to ensure the safety of your commercial property, employees, and customers across Surrey BC with our highly trained security guard. 

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
                  <h3 class="services-title">Residential Security Guard </h3>
                </a>
                <p class="services-info">
                  Ensure the safety of your home or Residential Security Guard Services with trusted security personnel in Surrey BC. Keep your home and loved ones safe with our Reliable Security Services in Canada.
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
                  <h3>Event Security Services</h3>
                </a>
                <p class="services-info">
                  Ensure the safety of your home or Residential Security Guard Services with trusted security personnel in Surrey BC. Keep your home and loved ones safe with our Reliable Security Services in Canada.
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
        <h3> Why Choose Our Security Guard Services? 
        </h3>
        <p>At Peak Security, we consider you a valued partner, not just another client. We understand that each facility has the Best Security Guard Service requirements, so we focus on creating a customized security plan tailored specifically for your site. Our security officers receive top-tier training and are supported by a strong leadership team. When our officers perform at their best, your facility thrives, and your success is our priority.
        </p>
        <h4><li>Largely Trained Professionals</li></h4>
        <p> Our Security Guards are precisely named and trained to handle a wide range of security situations. They're professed,  educated, and ready to cover your property. 
        </p>
        <h4><li>Reliable and Trustworthy</li></h4>
        <p>We flatter ourselves by furnishing security Services you can count on. Our guards are devoted to keeping your demesne safe and secure.</p>
        <h4><li>24/7 Coverage</li></h4>
        <p>Whether it's day or night, we offer round-the-cime security services. You can have peace of mind knowing that your property is defended 24/7. 
        </p>
        <h4><li>Customizable results</li></h4>
        <p>We understand that every customer has different requirements. Our security services can be adapted to meet your specific conditions, ensuring stylish protection. 
        </p>
        <h4><li>Advanced Technology</li></h4>
        <p>We use the rearmost security technology, including surveillance systems and alarm monitoring, to enhance the safety of your property. 
        </p>
        <h4><li>Quick Response Time</li></h4>
        <p>Our security platoon is always ready to respond snappily to any situation,  icing your safety is no way compromised. 
        </p>
        <h4><li>Professional Reputation</li></h4>
        <p> Peak Security has a proven track record of furnishing excellent Security Guard Services in Surry BC. 
        </p>
      </div>
      <div class="service-list-section-wrap animate-fadeIn animate-delay-1">
        <img src="C:\Users\anjur\OneDrive\Pictures\peak-security-guard-services.jpg"
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
