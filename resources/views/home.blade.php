@extends('layout.app')

@section('styles')
    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes scale {
            from {
                transform: scale(0.9);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
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

        .animate-delay-1 {
            animation-delay: 0.2s;
        }

        .animate-delay-2 {
            animation-delay: 0.4s;
        }

        .animate-delay-3 {
            animation-delay: 0.6s;
        }

        .service-list-process-wrap:hover {
            transform: translateY(-5px);
            transition: transform 0.3s ease;
        }

        .right-services-image,
        .service-list-2-bottom-image {
            transition: transform 0.3s ease;
        }

        .right-services-image:hover,
        .service-list-2-bottom-image:hover {
            transform: scale(1.05);
        }


        .service-list-2-bottom-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
            flex-direction: row-reverse;
            /* Default: Image on the right */
        }

        .modern-heading {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5em;
            color: #333;
            margin-bottom: 10px;
            font-weight: 600;
            position: relative;
            text-align: center;
        }

        .modern-heading::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -5px;
            width: 50px;
            height: 3px;
            /* background-color: #ffc600; */
            /* Accent color */
        }

        .modern-paragraph {

            font-size: 1em;
            color: #555;
            line-height: 1.6;
            position: relative;
            margin-top: 0;
            max-width: 500px;
            text-align: center;
        }

        .animate-fadeIn {
            animation: fadeIn 1.5s ease-in-out;
        }

        .animate-slideInRight {
            animation: slideInRight 1.5s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Responsive Design for Mobile */
        @media (max-width: 768px) {
            .service-list-2-bottom-section {
                flex-direction: column;
            }

            .service-list-2-bottom-center-block {
                order: 1;
                /* Image first on mobile */
            }

            .service-list-2-bottom-left-block {
                order: 2;
                text-align: center;

            }

            .modern-heading {
                font-size: 1.3em;
            }

            .modern-paragraph {
                font-size: 0.95em;
            }


        }

        @media screen and (max-width: 991px) {

            .service-list-2-bottom-left-block,
            .service-list-2-bottom-center-block {
                min-height: 0px;
            }
        }
    </style>
@endsection

@section('content')
    <section class="section home-1-banner">
        <div class="base-container w-container">
            <div class="home-1-banner-wrapper">
                <h6 data-w-id="539dfa4f-eb9f-16d9-8207-a0cc102a4425" style="opacity:0" class="small-title">Peak Security
                </h6>
                <h1 data-w-id="87ac9c0f-71ee-e684-3b17-8e2b9a9d0c54" style="opacity:0" class="home-1-banner-title">
                    Secure Your World with Expert Protection</h1>
                <p data-w-id="1daaf06d-f551-7396-6e73-92224c8052ac" style="opacity:0" class="title-description width">
                    Licensed, Bonded, Uniformed - Providing Cost-Effective Guarding, Patrolling, and CCTV Services Across
                    Canada</p>
                <div data-w-id="0c0c196a-2366-25d9-b3c6-56e19f24bc27" style="opacity:0" class="banner-button-wrapper"><a
                        href="/about-us" class="primary-button w-button">About Us</a><a href="/contact-us"
                        class="white-button-bg w-button">Contact Us</a></div>
            </div>
        </div>
    </section>


    <div class="base-container w-container">
        <div class="service-list-2-bottom-section">
            <div class="service-list-2-bottom-center-block animate-slideInRight animate-delay-1">
                <img src="{{ asset('images/peak-security-01.png') }}" loading="lazy" alt="Patrol vehicle image"
                    class="service-list-2-bottom-image" />
            </div>


            <div class="service-list-2-bottom-left-block animate-fadeIn medium-title"
                style="
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    ">
                <h6 class="modern-heading">Patrolling the Streets, Securing Your Peace of Mind</h6>
                <p class="modern-paragraph">
                    Our state-of-the-art patrol vehicles are on the move 24/7, ensuring the safety and security of your
                    neighborhood.
                </p>
            </div>
        </div>
    </div>





    {{-- <section class="logo-section">
    <div class="base-container w-container">
        <div data-w-id="371251a7-b152-9d42-6b28-86a91f61070d" style="opacity:0" class="logo-wrapper"><img
                src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6475f0dc6a5d69dd35d1f9d5_Fictional%20company%20logo%20(12).png"
                loading="lazy" alt="logo image" class="home-logo-image" /><img
                src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6475f0da8a8b8e5aeb1da4a4_Fictional%20company%20logo%20(13).png"
                loading="lazy" alt="logo image" class="home-logo-image" /><img
                src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6475f0d743b0b0dbb5111a6d_Fictional%20company%20logo%20(14).png"
                loading="lazy" alt="logo image" class="home-logo-image" /><img
                src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6475f0d46ad21d71b1ef65dc_Fictional%20company%20logo%20(15).png"
                loading="lazy" alt="logo image" class="home-logo-image" /><img
                src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6475f0ead52f9bc52f234351_Fictional%20company%20logo%20(16).png"
                loading="lazy" alt="logo image" class="home-logo-image" /><img
                src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6475f0e871a4c1f6c8f7f567_Fictional%20company%20logo%20(17).png"
                loading="lazy" alt="logo image" class="home-logo-image" /></div>
    </div>
</section> --}}


    <section class="section" style="padding-top: 0px">
        <div class="base-container w-container">
            <div class="services-top-wrapper">
                <h2 data-w-id="001c2476-113b-a8a6-0f44-fc19431db125" style="opacity:0" class="medium-title">Services
                </h2><a data-w-id="e51817a0-5920-23c8-44e0-271cedb9ed66" style="opacity:0" href="/our-services"
                    class="primary-button">view all</a>
            </div>
            <div class="services-wrapp">
                <div class="w-dyn-list">
                    <div role="list" class="services-collection-list w-dyn-items">
                        <div data-w-id="d2374dde-9c7b-b86e-fedf-17fe554fd87a" style="opacity:0" role="listitem"
                            class="collect-item w-dyn-item">
                            <div style="height:6px" class="yellow-line"></div>
                            <div class="home-services-item">
                                <div class="relative-wrapper">
                                    <p style="color:rgb(255,198,0)" class="serial-number">01</p><a href="#"
                                        class="w-inline-block">
                                        <h4 class="services-title">Security Guard Services</h4>
                                    </a>
                                    <p class="services-info">Our trained security guards are deployed on-site to ensure the
                                        safety and protection of people and property, providing a reliable presence to deter
                                        and respond to security threats.</p>
                                    <div class="services-link-wrap">
                                        <a href="#" class="third-button">
                                            <img src="{{ asset('images/guard.gif') }}" alt="Guard animation">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-w-id="d2374dde-9c7b-b86e-fedf-17fe554fd87a" style="opacity:0" role="listitem"
                            class="collect-item w-dyn-item">
                            <div style="height:6px" class="yellow-line"></div>
                            <div class="home-services-item">
                                <div class="relative-wrapper">
                                    <p style="color:rgb(255,198,0)" class="serial-number">02</p><a href="#"
                                        class="w-inline-block">
                                        <h4 class="services-title">Security Patrol Services</h4>
                                    </a>
                                    <p class="services-info">We provide hourly patrols with uniformed security officers to
                                        give you the peace of mind you deserve, ensuring continuous monitoring and rapid
                                        response to any incidents.</p>
                                    <div class="services-link-wrap">
                                        <a href="#" class="third-button">



                                            <!-- Uploaded to: SVG Repo, www.svgrepo.com, Transformed by: SVG Repo Mixer Tools -->
                                            <img src="{{ asset('images/patrol.gif') }}" alt="Patrol animation">

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-w-id="d2374dde-9c7b-b86e-fedf-17fe554fd87a" style="opacity:0" role="listitem"
                            class="collect-item w-dyn-item">
                            <div style="height:6px" class="yellow-line"></div>
                            <div class="home-services-item">
                                <div class="relative-wrapper">
                                    <p style="color:rgb(255,198,0)" class="serial-number">03</p><a href="#"
                                        class="w-inline-block">
                                        <h4 class="services-title">CCTV Installation and Guidance</h4>
                                    </a>
                                    <p class="services-info">Our experts offer comprehensive CCTV installation and guidance
                                        services, ensuring your premises are well-monitored with state-of-the-art
                                        surveillance systems.</p>
                                    <div class="services-link-wrap">
                                        <a href="#" class="third-button">
                                            <img src="{{ asset('images/cctv.gif') }}" alt="CCTV animation">

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div role="navigation" aria-label="List" class="w-pagination-wrapper"></div>
                </div>
            </div>
        </div>
    </section>


    <section class="section without-top-spacing">
        <div class="base-container w-container">
            <div class="security-wrapper">
                <div class="top-security-wrap">
                    <div data-w-id="d7c4f08b-7d53-ed37-a5ff-9ac5cc42be68" class="left-security-wrap">
                        <h2 data-w-id="4c2249c5-73d0-61c6-15de-13d91097c27d" class="medium-title">Comprehensive Security
                            Solutions for Your Safety</h2>
                        <p data-w-id="291133d2-7bb5-87df-9da8-a25ff52d6b46" class="info-title">Our expert security
                            services
                            include round-the-clock patrolling, professional guard services, and state-of-the-art CCTV
                            installation to ensure your complete protection.</p>
                        <div class="banner-button-wrapper">
                            <a data-w-id="862431b7-3fca-32dd-ba42-dffc7615cd11" href="/about-us"
                                class="primary-button">More About Us</a>
                        </div>
                    </div>
                    <img src="{{ asset('images/1.png') }}" loading="lazy"
                        data-w-id="00074d17-8561-c001-a822-c24f7e0d244b" alt="security image"
                        class="right-camera-image" />
                </div>
                <div class="top-security-wrap reverse">
                    <img src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6475fa8c171f8371848fea24_image%201.webp"
                        loading="lazy" data-w-id="96a0ed23-50d7-f2c6-fd9b-c38866626373" alt="security image"
                        class="right-camera-image" />
                    <div data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636b" class="left-security-wrap">
                        <h2 data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636c" class="medium-title">24/7 Surveillance with
                            Advanced CCTV Systems</h2>
                        <p data-w-id="96a0ed23-50d7-f2c6-fd9b-c3886662636e" class="info-title">Our CCTV systems feature
                            high-definition resolution, night vision, and motion detection, providing you with constant
                            monitoring and peace of mind.</p>
                        <div class="banner-button-wrapper">
                            <a data-w-id="96a0ed23-50d7-f2c6-fd9b-c38866626371" href="/our-services"
                                class="primary-button">Discover Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="section without-top-spacing">
        <div class="base-container w-container">
            <div class="services-top-wrapper vertical">
                <div class="left-wrapper">
                    <h3 data-w-id="daef64d6-04d4-94fe-eec9-827dd3acd918" style="opacity:0" class="medium-title">Let’s
                        Protect Canada B.E</h3>
                    <p data-w-id="859bb2a8-4432-b1ec-d340-0d935fdd4a38" style="opacity:0" class="short-description">Our
                        team of security experts is dedicated to helping you find the perfect solutions to keep your home
                        safe and secure.</p>
                </div>
            </div>
            <div class="numbers-wrapper">
                <div data-w-id="a424cdfd-74e2-21d7-2f50-1c2b6f4ba4da" style="opacity:0" class="numbers-wrap">
                    <p class="numbers">400+</p>
                    <h6 class="small-heading">Satisfied Clients</h6>
                    <p class="short-description">We are proud of the strong relationships we've built with our clients over
                        the years.</p>
                </div>
                <div data-w-id="0f043795-09f3-5358-8056-6a780510a75c" style="opacity:0" class="numbers-wrap">
                    <p class="numbers">100%</p>
                    <h6 class="small-heading">Secure and Safe</h6>
                    <p class="short-description">Our commitment is to ensure the utmost security and safety for your
                        property.</p>
                </div>
                <div data-w-id="48296513-e73f-164b-f0e3-a295fbbba082" style="opacity:0" class="numbers-wrap">
                    <p class="numbers">12+</p>
                    <h6 class="small-heading">Years of Experience</h6>
                    <p class="short-description">Trust in our extensive experience and expertise in the security industry.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="section light-bg-without-top-spacing">
        <div class="base-container w-container">
            <div class="wrapper-with-faq">
                <div class="protect-content-wrapper">
                    <img src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64760b50a2274699f5d1dcad_icon.png"
                        loading="lazy" style="opacity:0" data-w-id="ffff9db3-6402-7936-3450-3d10439fa4b0"
                        alt="icon" />
                    <h2 data-w-id="46f904ba-b8fd-3ec2-b294-1b3e991e74ac" style="opacity:0" class="medium-title width">
                        Enhance Security with Peak Security</h2>
                    <p data-w-id="867c3ccf-87c7-fdb5-9381-569952ee4b17" style="opacity:0" class="short-description">
                        Our advanced technologies and expert security professionals ensure unparalleled protection for your
                        property against all threats.
                    </p>
                    <img class="image-camera"
                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64760bdf491e945217a963ad_image.webp"
                        alt="camera image" style="opacity:0"
                        sizes="(max-width: 479px) 100vw, (max-width: 673px) 95vw, (max-width: 991px) 640px, (max-width: 1279px) 46vw, 572.9140625px"
                        data-w-id="538918b9-b6cd-c423-ac73-33fb6c8cba01" loading="lazy"
                        srcset="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64760bdf491e945217a963ad_image-p-500.webp 500w, https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/64760bdf491e945217a963ad_image.webp 640w" />
                </div>
                <div class="accordion-wrap-faq spacing-copy">
                    <div data-hover="false" data-delay="0" data-w-id="c981f5b4-5a84-8906-23a4-ec584b12d419"
                        class="accordion-item w-dropdown">
                        <div class="accordion-toggle w-dropdown-toggle">
                            <h5 class="accordion-title">What Services Do We Offer?</h5>
                            <div class="accordion-icon"></div>
                        </div>
                        <nav class="accordion-list w-dropdown-list">
                            <p class="accordion-list-content">We provide a comprehensive array of security solutions,
                                including access control, video surveillance, security guard services, and expert security
                                consultations.</p>
                        </nav>
                    </div>
                    <div data-hover="false" data-delay="0" data-w-id="c981f5b4-5a84-8906-23a4-ec584b12d422"
                        class="accordion-item w-dropdown">
                        <div class="accordion-toggle w-dropdown-toggle">
                            <h5 style="color:rgb(71,84,103)" class="accordion-title">How Can We Assess Your Security
                                Needs?</h5>
                            <div style="color:rgb(71,84,103);transform:rotate(180deg);" class="accordion-icon"></div>
                        </div>
                        <nav style="height:0px" class="accordion-list w-dropdown-list">
                            <p class="accordion-list-content">Our experienced team conducts thorough property assessments
                                tailored to your specific needs, considering size, location, vulnerabilities, and individual
                                requirements.</p>
                        </nav>
                    </div>
                    <div data-hover="false" data-delay="0" data-w-id="c981f5b4-5a84-8906-23a4-ec584b12d42b"
                        class="accordion-item w-dropdown">
                        <div class="accordion-toggle w-dropdown-toggle">
                            <h5 style="color:rgb(71,84,103)" class="accordion-title">Why Choose Peak Security?</h5>
                            <div style="color:rgb(71,84,103);transform:rotate(180deg);" class="accordion-icon"></div>
                        </div>
                        <nav style="height:0px" class="accordion-list w-dropdown-list">
                            <p class="accordion-list-content">With years of industry experience, cutting-edge technology,
                                and a dedicated team, we deliver dependable security solutions customized to your needs.</p>
                        </nav>
                    </div>
                    <div class="links-wrap">
                        <p class="navbar-phone-icon"></p>
                        <a data-w-id="7d7b734a-f170-f898-3bec-8723fba9801d" style="opacity:0" href="tel:+16047676970"
                            class="primary-button">Call Us: 604-767-6970</a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="section bg-image">
        <div class="base-container w-container">
            <div>
                <div class="dicover-wrapper">
                    <h2 data-w-id="f22b3848-f5e4-ae2f-568a-700d96cb505b" style="opacity:0" class="medium-title white">
                        Discover How our Modern Cameras Work</h2>
                    <p data-w-id="dac3844d-aa67-4f5d-d4ce-e8904f3fe893" style="opacity:0"
                        class="short-description width-white-text">We provide security requirements of residential,
                        commercial and other clients, with the largest assortment of security cameras and alarm system
                        installation.</p>
                </div>
                <div style="width:0%" class="section-line"></div>

            </div>
        </div>
    </section>

    <div class="yellow-sections-wrapper">
        <div class="absolute"></div>
        <div class="sections-wrapper">
            <section class="section map-image-bg">
                <div class="base-container w-container">
                    <div class="wrapper-with-logo">
                        <div class="title-wrapper">
                            <h2 data-w-id="74c00bc3-1b9a-736f-5105-166fac44dd76" style="opacity:0"
                                class="medium-title center">Our Security System is Trusted by Some of the Largest
                                Companies</h2>
                        </div>

                    </div>
                </div>
            </section>
            <section class="section white-bg">
                <div class="base-container w-container">
                    <div class="services-container">
                        <div class="services-text-block-copy">
                            <h2 data-w-id="7a9238cd-8eca-8dcb-06f7-24ffb328130a" style="opacity:0"
                                class="medium-title left-text">What Our Clients Say About Us</h2>
                        </div>
                        <div data-w-id="7a9238cd-8eca-8dcb-06f7-24ffb3281312" style="opacity:0" class="slider-container">
                            <div data-delay="2000" data-animation="slide" class="slider-services w-slider"
                                data-autoplay="true" data-easing="ease" data-hide-arrows="false"
                                data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3"
                                data-duration="1000" data-infinite="true">
                                <div class="mask-services w-slider-mask">
                                    <div class="slide-services w-slide">
                                        <div data-w-id="964176f0-c412-5316-1601-27bfbc9f30a1" style="opacity:0"
                                            class="slider-content-wrapper">
                                            <p class="home-testimonial-text">I wholeheartedly recommend Security for their
                                                outstanding security services. Their team installed a state-of-the-art video
                                                surveillance system at our commercial property, and we have been thoroughly
                                                impressed with the quality of the cameras and the seamless monitoring
                                                experience.</p>
                                            <div class="bottom-testimon">
                                                <div class="author-testimon-wrap">
                                                    <h5 class="author">John Dain</h5>
                                                    <p class="job">Manager</p>
                                                </div>
                                                <div class="star-wrapper"><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="star" class="star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-services w-slide">
                                        <div class="slider-content-wrapper">
                                            <p class="home-testimonial-text">I am extremely satisfied with the alarm
                                                system installation and monitoring services provided by Security. Their
                                                prompt response and efficient monitoring have proven invaluable in
                                                ensuring the safety of our home. Their knowledgeable staff took the time
                                                to understand our specific needs.</p>
                                            <div class="bottom-testimon">
                                                <div class="author-testimon-wrap">
                                                    <h5 class="author">Sarah Month</h5>
                                                    <p class="job">IT Assistance</p>
                                                </div>
                                                <div class="star-wrapper"><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="star" class="star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-services w-slide">
                                        <div class="slider-content-wrapper">
                                            <p class="home-testimonial-text">I cannot thank Security enough for their
                                                exceptional cybersecurity services. As a small business owner, I was
                                                concerned about the growing cyber threats. Their team conducted a
                                                thorough assessment of our network, identified vulnerabilities, and
                                                implemented robust security measures.</p>
                                            <div class="bottom-testimon">
                                                <div class="author-testimon-wrap">
                                                    <h5 class="author">David Rain</h5>
                                                    <p class="job">Manager</p>
                                                </div>
                                                <div class="star-wrapper"><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="star" class="star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-services w-slide">
                                        <div class="slider-content-wrapper">
                                            <p class="home-testimonial-text">We recently hosted a high-profile event
                                                and enlisted the services of [Company Name] for event security. Their
                                                team did an outstanding job in ensuring a safe and secure environment
                                                for all attendees. Their security personnel were well-trained,
                                                courteous, and maintained a strong presence throughout the event. </p>
                                            <div class="bottom-testimon">
                                                <div class="author-testimon-wrap">
                                                    <h5 class="author">Jennifer Lorton</h5>
                                                    <p class="job">Manager</p>
                                                </div>
                                                <div class="star-wrapper"><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="star" class="star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-services w-slide">
                                        <div class="slider-content-wrapper">
                                            <p class="home-testimonial-text">I had the pleasure of working with
                                                Security for our access control solutions. From the initial consultation
                                                to the installation process, their team displayed a high level of
                                                expertise and professionalism. They helped us select the right access
                                                control system for our office building and ensured smooth
                                                implementation.</p>
                                            <div class="bottom-testimon">
                                                <div class="author-testimon-wrap">
                                                    <h5 class="author">Mark Tomson</h5>
                                                    <p class="job">Assistance</p>
                                                </div>
                                                <div class="star-wrapper"><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="star" class="star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide-services w-slide">
                                        <div class="slider-content-wrapper">
                                            <p class="home-testimonial-text">I want to express my gratitude to
                                                Security for their outstanding security consultancy services. Their team
                                                conducted a comprehensive security assessment of our premises and
                                                provided us with a detailed report outlining potential risks and
                                                recommended security measures. </p>
                                            <div class="bottom-testimon">
                                                <div class="author-testimon-wrap">
                                                    <h5 class="author">Emily Salton</h5>
                                                    <p class="job">Manager</p>
                                                </div>
                                                <div class="star-wrapper"><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="star" class="star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /><img
                                                        src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6477074b62e82f889b75a459_Star%201.png"
                                                        loading="lazy" alt="Star" /></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-w-id="7a9238cd-8eca-8dcb-06f7-24ffb328134b" style="opacity:0"
                                    class="left-arrow-services w-slider-arrow-left">
                                    <p class="arrow-icon-slider"></p>
                                </div>
                                <div data-w-id="7a9238cd-8eca-8dcb-06f7-24ffb328134d" style="opacity:0"
                                    class="right-arrow-services w-slider-arrow-right">
                                    <p class="arrow-icon-slider right"></p>
                                </div>
                                <div class="slide-nav w-slider-nav w-round"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <section class="section blue-bg">
        <div class="base-container w-container">
            <h2 data-w-id="c1b5b0d8-7bf3-cd82-c06a-d5998dba1439" style="opacity: 1" class="about-us-title">
                Our user-friendly security cameras are designed for easy installation,
                making technical expertise unnecessary. Whether you prefer a wired or
                wireless camera, we offer a range of options to suit your
                requirements.
            </h2>
            <div class="about-us-progress-wrap">
                <div class="about-us-progress-wrapper">
                    <p data-w-id="c61d6fa1-957f-1ab7-3672-364439d8976e" style="opacity: 1"
                        class="short-description text-white">
                        Explore a variety of accessories designed to complement your security system, enhancing its
                        functionality and reliability. Our selection includes DVRs, NVRs, and advanced cloud storage
                        solutions. With our cloud storage options, securely store your footage online and enjoy convenient
                        access from any location, at any time.
                    </p>
                    <div data-w-id="640c8964-e629-12d6-4d35-987e10a8663a" style="opacity: 1"
                        class="about-us-progressbar-wrap">
                        <div class="progressbar-item">
                            <h6 class="progress-title primary-text">
                                Incident Resolution Rate <span>91%</span>
                            </h6>
                            <div class="progressbar-con">
                                <div class="progressbar-gray-line"></div>
                                <div class="progress-bar-91 yellow"></div>
                            </div>
                        </div>
                        <div class="progressbar-item">
                            <h6 class="progress-title primary-text">
                                Response Time <span>82%</span>
                            </h6>
                            <div class="progressbar-con">
                                <div class="progressbar-gray-line"></div>
                                <div class="progress-bar-80 yellow"></div>
                            </div>
                        </div>
                        <div class="progressbar-item">
                            <h6 class="progress-title primary-text">
                                System Reliability <span>90%</span>
                            </h6>
                            <div class="progressbar-con">
                                <div class="progressbar-gray-line"></div>
                                <div class="progress-bar-90 yellow"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="https://assets-global.website-files.com/64735306bb4de7eb23c0f5ee/6478611ce2b1b054206e1d11_image%201.webp"
                    loading="lazy" style="opacity: 1" data-w-id="8f2126c2-27c1-7a42-dc7b-383043da2720"
                    alt="about us image" class="wrapper-with-progress-bar" />
            </div>
        </div>
    </section>
@endsection
