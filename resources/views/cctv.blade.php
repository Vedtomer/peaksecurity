@extends('layout.app')



@section('styles')
    <style>
       .numbers-wrapper {
    display: flex;
    flex-wrap: wrap;
    gap: 20px; /* Space between cards */
    justify-content: center;
}

.numbers-wrap {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: calc(25% - 20px); /* Four cards per row with spacing */
    max-width: 300px; /* Maximum width for each card */
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.numbers-wrap:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.numbers-wrap h6 {
    font-size: 18px;
    margin-bottom: 10px;
    color: #333;
}

.numbers-wrap p {
    font-size: 14px;
    color: #666;
}

/* Tablet View: 2 columns */
@media (max-width: 1024px) {
    .numbers-wrap {
        width: calc(33.333% - 20px); /* Three cards per row */
    }
}

/* Mobile View: 2 columns */
@media (max-width: 768px) {
    .numbers-wrap {
        width: calc(50% - 20px); /* Two cards per row */
    }
}

/* Small Mobile View: 1 column */
@media (max-width: 480px) {
    .numbers-wrap {
        width: 100%; /* One card per row */
    }
}

    </style>
@endsection
@section('content')
    <div class="yellow-bg">


        <section class="section services" style="padding-top:100px;grid-row-gap:50px ">
            <div class="base-container w-container">
                <div class="top-security-wrap reverse" style="justify-content: center">
                    <img src="{{ asset('images/security-guard-services.png') }}" loading="lazy" alt="camera image"
                        loading="lazy" data-w-id="96a0ed23-50d7-f2c6-fd9b-c38866626373"
                        alt="24/7 Security Surveillance with Advanced CCTV Systems" class="right-camera-image"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636b" class="left-security-wrap"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <h1 data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636c" class="medium-title" style="">CCTV Camera
                            Services Surrey BC</h1>
                        <p data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636e" class="info-title" style="">At Peak
                            Security, we offer professional CCTV Camera Services in SurreyB C designed to provide peace
                            of mind and ensure the safety of your home or business. Whether you are looking to monitor your
                            property for security service reasons or to enhance the CCTV surveillance system in place, our
                            team
                            is here to deliver the best solutions tailored to your needs.</p>

                    </div>
                </div>
            </div>




            <div class="base-container w-container">
                <h2> Our CCTV Installation Services Surrey BC</h2>
                <p>At Peak Security, we offer comprehensive CCTV Installation Services for both homes and businesses across
                    Surrey, BC, and surrounding areas. We use the latest technology to ensure your property is well-secured,
                    with clear video footage and advanced features such as motion detection, remote access, and cloud
                    storage
                    options. Whether you're protecting your home, office, or business premises, Peak Security's CCTV
                    installation solutions provide reliable protection, giving you peace of mind knowing that your property
                    is
                    always being monitored.
                </p>
                <div class="section services-page">
                    <div class="base-container w-container">
                        <div class="w-dyn-list">
                            <div role="list" class="services-collection-list w-dyn-items">
                                <div role="listitem" class="collect-item w-dyn-item animate-slideUp animate-delay-1">
                                    <div style="height: 6px" class="yellow-line"></div>
                                    <div class="home-services-item" style="min-height: 100%">
                                        <div class="relative-wrapper">
                                            <p style="color: rgb(255, 198, 0)" class="serial-number">01</p>
                                            <a href="#" class="w-inline-block">
                                                <h3 class="services-title">Residential CCTV Installation Services</h3>
                                            </a>
                                            <p class="services-info">
                                                Safeguard your home with our top-of-the-line security camera systems. Our
                                                team
                                                designs the best Residential CCTV Installation Service and installs systems
                                                that
                                                offer 24/7 monitoring, helping you keep an eye on your property, whether
                                                you're
                                                at home or away. With high-definition cameras and smart features, we ensure
                                                your
                                                family and belongings are protected at all times.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div role="listitem" class="collect-item w-dyn-item animate-slideUp animate-delay-2">
                                    <div style="height: 6px" class="yellow-line"></div>
                                    <div class="home-services-item" style="min-height: 100%">
                                        <div class="relative-wrapper">
                                            <p style="color: rgb(255, 198, 0)" class="serial-number">02</p>
                                            <a href="#" class="w-inline-block">
                                                <h3 class="services-title">Commercial CCTV Installation Services</h3>
                                            </a>
                                            <p class="services-info">
                                                Peak Security provides customized Commercial CCTV installation Services
                                                tailored
                                                to the unique needs of your property. From retail stores to office buildings
                                                and
                                                warehouses, we equip your premises with reliable surveillance systems that
                                                help
                                                deter criminal activity and ensure you have clear evidence when needed.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div role="listitem" class="collect-item w-dyn-item animate-slideUp animate-delay-3">
                                    <div style="height: 6px" class="yellow-line"></div>
                                    <div class="home-services-item" style="min-height: 100%">
                                        <div class="relative-wrapper">
                                            <p style="color: rgb(255, 198, 0)" class="serial-number">03</p>
                                            <a href="#" class="w-inline-block">
                                                <h4 class="services-title">CCTV Services</h4>
                                            </a>
                                            <p class="services-info">
                                                State-of-the-art CCTV installation and monitoring services. We design,
                                                install,
                                                and maintain surveillance systems to keep your property under constant
                                                watch.
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
                <div class="service-list-section-wrapper">
                    <div class="service-list-section-wrap first-child">
                        <h3>Why Choose Peak Security for CCTV Camera Services in Surrey BC?</h3>
                        <p class="">Peak Security stands out for its commitment to providing high-quality, reliable
                            CCTV camera
                            services in Surrey, BC. Our expert team offers customized solutions for both residential and
                            commercial propertie, ensuring maximum protection with the latest surveillance technology. We
                            pride ourselves on clear, detailed installations, responsive customer service, and a focus on
                            your security needs. With Peak Securit, you can trust that your property is always under watch,
                            giving you peace of mind at all times.</p>
                    </div>
                    <div class="service-list-section-wrap">
                        <img src="{{ asset('images/Why-Choose-Our-Security.png') }}" loading="lazy" alt="camera image"
                            class="right-services-image">
                    </div>
                </div>
                <div class="numbers-wrapper">
                    <div data-w-id="service-1" class="numbers-wrap">
                        <h6 class="small-heading">Expert Technicians</h6>
                        <p class="short-description">Our skilled and experienced technicians are well-versed in all types of
                            CCTV systems, from
                            traditional analog to the latest digital IP cameras. We ensure flawless installation with a
                            focus on optimal camera positioning, wiring, and system setup to guarantee the best
                            surveillance coverage.
                        </p>
                    </div>
                    <div data-w-id="service-2" class="numbers-wrap">
                        <h6 class="small-heading">Tailored Solutions</h6>
                        <p class="short-description">Every property is different, which is why we offer customized CCTV
                            systems based on your
                            specific security needs. Our team assesses your space and recommends the best system,
                            whether you're looking to cover a small office, large commercial property, or residential
                            areas.</p>
                    </div>
                    <div data-w-id="service-3" class="numbers-wrap">
                        <h6 class="small-heading">High-Quality Equipment</h6>
                        <p class="short-description">We only use high-definition cameras and top-of-the-line security
                            equipment, ensuring your
                            surveillance footage is clear, reliable, and accessible at any time. From remote viewing
                            options to advanced motion detection features, our systems are designed to give you the best
                            in security technology.</p>
                    </div>
                    <div data-w-id="service-4" class="numbers-wrap">
                        <h6 class="small-heading">24/7 Support</h6>
                        <p class="short-description">Once installed, our team continues to offer support for any questions
                            or issues you might
                            have. We also offer ongoing maintenance services to ensure your CCTV system operates
                            smoothly and effectively.</p>
                    </div>

                </div>
            </div>

        </section>
    </div>






    <div class="section yellow-bg" style="padding:30px 0px">
        <div class="base-container w-container" style="padding-bottom: 0px">

            <div class=" " style="margin-bottom:0px;text-align:center">
                <h4 data-w-id="d46bd76c-3549-92cc-5606-39f5f9660d0d" style="opacity:1">
                    Get a Consultation with Peak Security For CCTV Camera Services – Contact Us Today!</h4>

                <p class="accordion-list-content">At Peak Security, we understand how important it is to keep your
                    property safe. Our goal is to offer you the best CCTV Camera Installation Service, in Canada’s
                    surrounding locations like Surrey, Langley, Vancouver, and Calgary. </p>

                <a href="/contact-us" class="primary-button-white tablet-button" style="margin:20px 0px">contact us</a>
            </div>

        </div>
    </div>
@endsection
