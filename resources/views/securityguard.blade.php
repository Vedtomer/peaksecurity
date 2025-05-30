@extends('layout.app')
@section('styles')
    <style>
        @media (max-width: 768px) {
            .top-img {
                content: url("{{ asset('images/security-guard-services-675.png') }}");
            }
        }

        /* Card Styling */
        .numbers-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            /* Space between cards */
            justify-content: center;
        }

        .numbers-wrap {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: calc(33.333% - 40px);
            /* Three cards per row with gap */
            max-width: 300px;
            /* Maximum width for each card */
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

        @media (max-width: 768px) {
            .numbers-wrap {
                width: calc(50% - 20px);
                /* Two cards per row on smaller screens */
            }
        }

        @media (max-width: 480px) {
            .numbers-wrap {
                width: 100%;
                /* One card per row on mobile */
            }
        }
    </style>
@endsection
@section('content')
    <div class="yellow-bg">
        <section class="section services" style="padding-top:100px;grid-row-gap:50px ">
            <div class="base-container w-container">
                <div class="top-security-wrap reverse" style="justify-content: center">
                    <img src="{{ asset('images/security-guard-services.png') }}" loading="lazy"
                        loading="lazy" data-w-id="96a0ed23-50d7-f2c6-fd9b-c38866626373"
                        alt="Security Guard Services in Surrey BC" class="right-camera-image"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636b" class="left-security-wrap"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <h1 data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636c" class="medium-title" style="">Security
                            Guard Services in Surrey BC</h1>
                        <p data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636e" class="info-title" style="">Our Peak
                            Security skilled Security Guards Services in Surrey BC offer on-site
                            protection for your property and personnel.We provide 24/7 coverage services for various
                            settings,including commercial,residentia,and events.</p>

                    </div>
                </div>
            </div>
            <div class="section services-page" style="padding-bottom: 0px;">
                <div class="base-container w-container">
                    <div class="base-container w-container" style="margin-bottom: 40px;padding-bottom: 40px;">
                        <h2>Best Security Companies in Surrey BC You Can Trust</h2>
                        <p> Peak Security Guards is the Best security company in Surrey BC offers dependable protection for
                            your property and personnel. Our security guard officers are committed to creating a safer and
                            more welcoming environment.By customizing our staffing to meet your specific needs, we ensure
                            the ideal fit for the job, offering you confidence and peace of mind in your safety, including
                            Commercial, Residential, and Event security guard services. </p>
                    </div>
                    <div class="w-dyn-list">
                        <div role="list" class="services-collection-list w-dyn-items">
                            <div data-w-id="93706dea-b0d8-5338-755a-570b605c4171"
                                style="opacity: 1;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);transform-style: preserve-3d;"
                                role="listitem" class="collect-item w-dyn-item">
                                <div style="height: 6px; " class="yellow-line"></div>
                                <div class="home-services-item" style="min-height: 100%">
                                    <div class="relative-wrapper">
                                        <p style="color: rgb(255, 198, 0)" class="serial-number">01</p>
                                        <a href="/services/security-consultancy-services" class="w-inline-block">
                                            <h3 class="services-title"> Commercial Security Guard </h3>
                                        </a>
                                        <p class="services-info"> Protect your business with our professional Commercial
                                            Security Guards services, available around the clock. We offer 24/7 coverage to
                                            ensure the safety of your commercial property, employees, and customers across
                                            Surrey BC with our highly trained security guard. </p>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="93706dea-b0d8-5338-755a-570b605c4171"
                                style="opacity: 1;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg)rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);transform-style: preserve-3d;"
                                role="listitem" class="collect-item w-dyn-item">
                                <div style="height: 6px; " class="yellow-line"></div>
                                <div class="home-services-item" style="min-height: 100%">
                                    <div class="relative-wrapper">
                                        <p style="color: rgb(255, 198, 0)" class="serial-number">02</p>
                                        <a href="/services/cybersecurity-solutions" class="w-inline-block">
                                            <h3 class="services-title">Residential Security Guard</h3>
                                        </a>
                                        <p class="services-info"> Ensure the safety of your home or Residential Security
                                            Guard Services with trusted security personnel in Surrey BC. Keep your home and
                                            loved ones safe with our Reliable Security Services in Canada. </p>
                                    </div>
                                </div>
                            </div>
                            <div data-w-id="93706dea-b0d8-5338-755a-570b605c4171"
                                style="opacity: 1;transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg)
              rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg);transform-style: preserve-3d;"
                                role="listitem" class="collect-item w-dyn-item">
                                <div style="height: 6px; " class="yellow-line"></div>
                                <div class="home-services-item" style="min-height: 100%">
                                    <div class="relative-wrapper">
                                        <p style="color: rgb(255, 198, 0)" class="serial-number">03</p>
                                        <a href="/services/security-guard-services" class="w-inline-block">
                                            <h3 class="services-title">Event Security Services</h3>
                                        </a>
                                        <p class="services-info"> Ensure the safety of your home or Residential Security
                                            Guard Services with trusted security personnel in Surrey BC. Keep your home and
                                            loved ones safe with our Reliable Security Services in Canada. </p>
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
                        <h3>Why Choose Our Security Guard Services?</h3>
                        <p class=""> At Peak Security, we consider you a valued partner, not just another client. We
                            understand that each facility has the Best Security Guard Service requirements, so we focus on
                            creating a customized security plan tailored specifically for your site. Our security officers
                            receive top-tier training and are supported by a strong leadership team. When our officers
                            perform at their best, your facility thrives, and your success is our priority. </p>
                    </div>
                    <div class="service-list-section-wrap">
                        <img src="{{ asset('images/Why-Choose-Our-Security.png') }}" loading="lazy" alt="Best Security Companies in Surrey BC"
                            class="right-services-image">
                    </div>
                </div>
                <div class="numbers-wrapper">
                    <div data-w-id="service-1" class="numbers-wrap">
                        <h4 class="small-heading">Largely Trained Professionals</h4>
                        <p class="short-description">Our Security Guards are precisely named and trained to handle a wide
                            range of security situations. They're skilled, experienced, and ready to protect your property.
                        </p>
                    </div>
                    <div data-w-id="service-2" class="numbers-wrap">
                        <h4 class="small-heading">Reliable and Trustworthy</h4>
                        <p class="short-description">We pride ourselves on providing security services you can count on. Our
                            guards are dedicated to keeping your premises safe and secure.</p>
                    </div>
                    <div data-w-id="service-3" class="numbers-wrap">
                        <h4 class="small-heading">24/7 Coverage</h4>
                        <p class="short-description">Whether it's day or night, we offer round-the-clock security services.
                            You can have peace of mind knowing that your property is protected 24/7.</p>
                    </div>
                    <div data-w-id="service-4" class="numbers-wrap">
                        <h4 class="small-heading">Customizable Solutions</h4>
                        <p class="short-description">We understand that every customer has different requirements. Our
                            security services can be tailored to meet your specific needs, ensuring the best protection.</p>
                    </div>
                    <div data-w-id="service-5" class="numbers-wrap">
                        <h4 class="small-heading">Advanced Technology</h4>
                        <p class="short-description">We use the latest security technology, including surveillance systems
                            and alarm monitoring, to enhance the safety of your property.</p>
                    </div>
                    <div data-w-id="service-6" class="numbers-wrap">
                        <h4 class="small-heading">Quick Response Time</h4>
                        <p class="short-description">Our security team is always ready to respond quickly to any situation,
                            ensuring your safety is never compromised.</p>
                    </div>
                    <div data-w-id="service-7" class="numbers-wrap">
                        <h4 class="small-heading">Professional Reputation</h4>
                        <p class="short-description">Peak Security has a proven track record of providing excellent
                            Security Guard Services in Surrey, BC.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <h4>

        <p>


            <div class="section yellow-bg" style="padding:30px 0px">
                <div class="base-container w-container" style="padding-bottom: 0px">

                    <div class=" " style="margin-bottom:0px;text-align:center">
                        <h4 data-w-id="d46bd76c-3549-92cc-5606-39f5f9660d0d" style="opacity:1" >
                            Get in Touch for Trusted Security Guard Services by Peak Security in Surrey, BC - Contact Us Now!</h4>

                        <p class="accordion-list-content">We understand the importance of reliable and professional security guard service for your business or property. Whether you need on-site patrols, event security, or tailored security solutions, our team in Surrey, BC is here to provide the best protection for your needs. </p>

                        <a href="/contact-us" class="primary-button-white tablet-button" style="margin:20px 0px">contact us</a>
                    </div>

                </div>
            </div>

    @endsection

@section('seo-script')
<script>

</script>
@endsection