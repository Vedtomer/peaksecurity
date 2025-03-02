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
         Patrol Services in Surrey BC
        </h1>
        <p class="title-description dark-center-copy">
          Peak Security provides Patrol Services across Surrey BC like Vancouver,langley,and Calgary we understand the importance of keeping your property,business,and community safe. Our patrol security services are designed to provide proactive and reliable protection,ensuring peace of mind for our clients.With a focus on vigilance,professionalism,and advanced technology,we deliver comprehensive security solutions tailored to your needs.
        </p>
      </div>
    </div>
  </section>
  <div class="section services-page">
    <div class="base-container w-container">
        <h2>What Service Coverage Areas of Peak Security Patrol Services in Surrey, BC</h2>
        <p>Our mobile patrol Services in Surrey BC,provide regular checks on your property, ensuring comprehensive security coverage. Ideal for large areas or multiple locations.</p>
      <div class="w-dyn-list">
        <div role="list" class="services-collection-list w-dyn-items">
          <div role="listitem" class="collect-item w-dyn-item animate-slideUp animate-delay-1">
            <div style="height: 6px" class="yellow-line"></div>
            <div class="home-services-item">
              <div class="relative-wrapper">
                <p style="color: rgb(255, 198, 0)" class="serial-number">01</p>
                <a href="#" class="w-inline-block">
                  <h3 class="services-title"> Residential patrol services </h3>
                </a>
                <p class="services-info">
                 We provide Patrolling Guard services that ensure your neighborhood remains safe and secure, deterring unwanted activities and providing a sense of security for residents.
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
                  <h3 class="services-title">Commercial Petrol Services</h3>
                </a>
                <p class="services-info">
                  Our patrol services protect businesses from break-ins, theft, and other risks, helping you maintain a safe and welcoming environment for both employees and customers.
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
                  <h3 class="services-title">Construction Sites patrol services</h3>
                </a>
                <p class="services-info">
                  Protect your construction equipment and materials from theft and vandalism with Peak Security Petrol Service round-the-clock patrols.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
            <div class="base-container w-container">
            <h3 class="services-title">Event Security - Mobile Patrol Services Near Me</h3>
            <p class="services-info">
             Protect your construction equipment and materials from theft with Peak Security Mobile Petrol Services Near you.
         </p>
              

<!--<div class="section light-background">-->
<!--  <div class="base-container w-container">-->
<!--    <div class="section-title-wrapper animate-fadeIn">-->
<!--      <h6 class="small-title" style="color: #ffc600">our process</h6>-->
<!--      <h2 class="section-title">How We Secure Your Property</h2>-->
<!--      <p class="section-title-description">-->
<!--        Our comprehensive approach ensures your security needs are met with precision and professionalism.-->
<!--      </p>-->
<!--    </div>-->
<!--    <div class="service-list-process-wrapper">-->
<!--      <div class="service-list-process-wrap animate-scale animate-delay-1">-->
<!--        <div class="service-list-process-icon"></div>-->
<!--        <h6>01. Initial Consultation</h6>-->
<!--        <p>We begin by understanding your specific security concerns and requirements.</p>-->
<!--      </div>-->
<!--      <div class="service-list-process-wrap animate-scale animate-delay-2">-->
<!--        <div class="service-list-process-icon"></div>-->
<!--        <h6>02. Security Assessment</h6>-->
<!--        <p>Our experts conduct a thorough assessment of your property to identify vulnerabilities.</p>-->
<!--      </div>-->
<!--      <div class="service-list-process-wrap animate-scale animate-delay-3">-->
<!--        <div class="service-list-process-icon"></div>-->
<!--        <h6>03. Customized Security Plan</h6>-->
<!--        <p>We develop a tailored security strategy combining guards, patrols, and CCTV as needed.</p>-->
<!--      </div>-->
<!--      <div class="service-list-process-wrap animate-scale animate-delay-3">-->
<!--        <div class="service-list-process-icon"></div>-->
<!--        <h6>04. Implementation and Ongoing Support</h6>-->
<!--        <p>We deploy our services and provide continuous support to ensure your security is maintained.</p>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<div class="section">
  <div class="base-container w-container">

        <h3>Peak Security provides an extensive array of Security Guard Services across Surrey BC including:</h3>
        <p>Peak Security provides Patrol Security Services across Surrey BC like Vancouver, langley, and  Calgary.</p>
        <div class="service-list-section-wrapper">
      <div class="service-list-section-wrap first-child animate-fadeIn">
        <ul role="list" class="service-list">
          <li><h4>24/7 Availability:</h4></li>
          <p>Security doesn’t sleep. Our patrol services are available around the clock, ensuring constant vigilance day and night.</p>
          <li><h4>Increased Safety:</h4></li>
          
          <p> Our trained officers and regular patrols reduce the likelihood of break-ins, thefts, and other criminal activities.</p>
         <li><h4>Peace of Mind:</h4></li>
          <p>Whether it’s your home, business, or event, knowing that a professional security team is monitoring the premises brings peace of mind.</p>
        </ul>
      </div>
      <div class="service-list-section-wrap animate-fadeIn animate-delay-1">
        
                <img src="{{ asset('images/pertrol-security-service.jpg') }}" loading="lazy" alt="Mobile patrol security" class="service-list-2-bottom-image-car" />
            
      </div>
    </div>
    
  </div>
</div>
<div class="service-why-choose">
       <h3>Why Choose Our Best Patrol Services in Surrey BC?</h3>
       <p>When it comes to ensuring the safety and security of your, choosing our Best Patrol Services in Surrey, BC, offers unmatched reliability and expertise. Our highly trained security team is dedicated to providing comprehensive patrol solutions tailored to meet your unique needs.
     </p>
       <h4>Highly Trained Security Personnel</h4>
        <p>Our security Petrol Service officers are trained to handle a wide range of situations with expertise and discretion. Each member of our team is equipped to deter potential threats, respond quickly to emergencies, and provide visible, effective protection.
     </p>
      <h4>Routine and Random Patrols</h4>
      <p>We offer both scheduled and random patrols of your property. Whether it's a residential area, a commercial building, or a construction site, our patrols are designed to increase security presence and prevent criminal activity. Our officers conduct thorough checks at multiple intervals to ensure comprehensive coverage.
     </p>
      <h4> State-of-the-Art Surveillance</h4>
      <p>In addition to physical patrols, our services integrate advanced surveillance technology. GPS tracking, real-time reporting, and surveillance cameras allow us to monitor your property continuously, even when we're not physically on-site.
     </p>
      <h4>Customized Security Plans</h4>
      <p>Every client’s security needs are unique, and we take the time to understand yours. Whether you need day or night patrols, periodic checks, or a fully customized security plan, we work with you to create the best solution for your specific requirements.
     </p>
      <h4>Quick Response Times</h4>
      <p>In the event of an incident or emergency, our patrol officers are trained to respond swiftly and effectively. We prioritize quick action and communication, working in partnership with local law enforcement when necessary.
     </p>
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
<h3>Contact us today to discover how our patrol security guard services can be tailored to meet the unique needs of your business. </h3>
<p>Don’t wait for a security Guard breach to happen—take proactive steps toward protecting your property today. Contact Peak Security for a consultation, and let us tailor a patrol security Guard plan that suits your needs. Trust us to be your partners in safety.
</p>


@endsection
