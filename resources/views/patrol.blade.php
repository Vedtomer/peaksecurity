@extends('layout.app')

@section('styles')
    <style>
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
                    <img src="{{ asset('images/security-guard-services.gif') }}" loading="lazy" alt="camera image"
                        loading="lazy" data-w-id="96a0ed23-50d7-f2c6-fd9b-c38866626373"
                        alt="24/7 Security Surveillance with Advanced CCTV Systems" class="right-camera-image"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                    <div data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636b" class="left-security-wrap"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <h1 data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636c" class="medium-title" style="">Patrol
                            Services in Surrey BC</h1>
                        <p data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636e" class="info-title" style="">Peak Security
                            provides Patrol Services across Surrey BC like Vancouver,langley,and Calgary we understand the
                            importance of keeping your property,business,and community safe. Our patrol security services
                            are designed to provide proactive and reliable protection,ensuring peace of mind for our
                            clients.With a focus on vigilance,professionalism,and advanced technology,we deliver
                            comprehensive security solutions tailored to your needs.</p>

                    </div>
                </div>
            </div>




            <div class="base-container w-container">
                <h2>What Service Coverage Areas of Peak Security Patrol Services in Surrey, BC</h2>
                <p>Our mobile patrol Services in Surrey BC,provide regular checks on your property, ensuring
                    comprehensive
                    security coverage. Ideal for large areas or multiple locations.</p>
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
                                        We provide Patrolling Guard services that ensure your neighborhood remains safe
                                        and
                                        secure, deterring unwanted activities and providing a sense of security for
                                        residents.
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
                                        Our patrol services protect businesses from break-ins, theft, and other risks,
                                        helping you maintain a safe and welcoming environment for both employees and
                                        customers.
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
                                        Protect your construction equipment and materials from theft and vandalism with
                                        Peak
                                        Security Petrol Service round-the-clock patrols.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




            <div class="base-container w-container">

                <div class="top-security-wrap">
                    <div data-w-id="d7c4f08b-7d53-ed37-a5ff-9ac5cc42be68" class="left-security-wrap"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                        <h3 data-w-id="4c2249c5-73d0-61c6-15de-13d91097c27d" class="medium-title">Event Security - Mobile
                            Patrol Services Near Me</h3>
                        <p data-w-id="291133d2-7bb5-87df-9da8-a25ff52d6b46" class="info-title"> Protect your construction
                            equipment and materials from theft with Peak Security Mobile Petrol Services Near you.</p>

                    </div>
                    <img src="{{ asset('images/event.png') }}" loading="lazy"
                        data-w-id="00074d17-8561-c001-a822-c24f7e0d244b" alt="Security officers" class="right-camera-image"
                        style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                </div>


            </div>


            <div class="base-container w-container">

                <h3>Peak Security provides an extensive array of Security Guard Services across Surrey BC including:</h3>
                <p>Peak Security provides Patrol Security Services across Surrey BC like Vancouver, langley, and Calgary.
                </p>
                <div class="service-list-section-wrapper">
                    <div class="service-list-section-wrap first-child animate-fadeIn">
                        <ul role="list" class="service-list">
                            <li>
                                <h4>24/7 Availability:</h4>
                            </li>
                            <p>Security doesn’t sleep. Our patrol services are available around the clock, ensuring constant
                                vigilance day and night.</p>
                            <li>
                                <h4>Increased Safety:</h4>
                            </li>

                            <p> Our trained officers and regular patrols reduce the likelihood of break-ins, thefts, and
                                other criminal activities.</p>
                            <li>
                                <h4>Peace of Mind:</h4>
                            </li>
                            <p>Whether it’s your home, business, or event, knowing that a professional security team is
                                monitoring the premises brings peace of mind.</p>
                        </ul>
                    </div>
                    <div class="service-list-section-wrap animate-fadeIn animate-delay-1">

                        <img src="{{ asset('images/pertrol-security-service.jpg') }}" loading="lazy"
                            alt="Mobile patrol security" class="service-list-2-bottom-image-car" />

                    </div>
                </div>

            </div>


            <div class="base-container w-container">
                <div class="service-list-section-wrapper">
                    <div class="service-list-section-wrap first-child">
                        <h3>Why Choose Our Best Patrol Services in Surrey BC?</h3>
                        <p class=""> When it comes to ensuring the safety and security of your, choosing our Best
                            Patrol Services in Surrey,
                            BC,offers unmatched reliability and expertise. Our highly trained security team is dedicated to
                            providing
                            comprehensive patrol solutions tailored to meet your unique needs. </p>
                    </div>
                    <div class="service-list-section-wrap">
                        <img src="{{ asset('images/Why-Choose-Our-Security.png') }}" loading="lazy" alt="camera image"
                            class="right-services-image">
                    </div>
                </div>
                <div class="numbers-wrapper">
                    <div data-w-id="service-1" class="numbers-wrap">
                        <h6 class="small-heading">Highly Trained Security Personnel</h6>
                        <p class="short-description">Our security Petrol Service officers are trained to handle a wide
                            range of situations with expertise and discretion. Each member of our team is equipped to deter
                            potential threats, respond quickly to
                            emergencies, and provide visible, effective protection.
                        </p>
                    </div>
                    <div data-w-id="service-2" class="numbers-wrap">
                        <h6 class="small-heading">Routine and Random Patrols</h6>
                        <p class="short-description">We offer both scheduled and random patrols of your property. Whether
                            it's a residential area, a
                            commercial building, or a construction site, our patrols are designed to increase security
                            presence and prevent
                            criminal activity. Our officers conduct thorough checks at multiple intervals to ensure
                            comprehensive
                            coverage.</p>
                    </div>
                    <div data-w-id="service-3" class="numbers-wrap">
                        <h6 class="small-heading">State-of-the-Art Surveillance</h6>
                        <p class="short-description">In addition to physical patrols, our services integrate advanced
                            surveillance technology. GPS tracking,real-time reporting, and surveillance cameras allow us to
                            monitor your property continuously, even when
                            we're not physically on-site.</p>
                    </div>
                    <div data-w-id="service-4" class="numbers-wrap">
                        <h6 class="small-heading">Customized Security Plans</h6>
                        <p class="short-description">Every client’s security needs are unique, and we take the time to
                            understand yours. Whether you need day or night patrols, periodic checks, or a fully customized
                            security plan, we work with you to create the best solution for your specific requirements.</p>
                    </div>
                    <div data-w-id="service-5" class="numbers-wrap">
                        <h6 class="small-heading">Quick Response Times</h6>
                        <p class="short-description">In the event of an incident or emergency, our patrol officers are
                            trained to respond swiftly and
                            effectively. We prioritize quick action and communication, working in partnership with local law
                            enforcement when necessary.</p>
                    </div>

                </div>
            </div>

        </section>
    </div>

    <div class="section yellow-bg" style="padding:30px 0px">
        <div class="base-container w-container" style="padding-bottom: 0px">
            
            <div class=" " style="margin-bottom:0px;text-align:center">
                <h4 data-w-id="d46bd76c-3549-92cc-5606-39f5f9660d0d" style="opacity:1" >
                    Contact us
                    today to discover how our patrol security guard services can be tailored to meet the unique
                    needs
                    of
                    your business</h4>

                <p class="accordion-list-content">We offer a wide range of security services, including alarm
                    system installation and monitoring, access control solutions, video surveillance systems,
                    cybersecurity solutions, security guard services, and security consultancy services. </p>

                <a href="/contact-us" class="primary-button-white tablet-button" style="margin:20px 0px">contact us</a>
            </div>

        </div>
    </div>
@endsection
