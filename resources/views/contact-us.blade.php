@extends('layout.app')

{{-- @section('title', 'Home') --}}

@section('content')
    <section class="section about-banner">
        <div class="base-container w-container">
            <div class="about-us-banner-wrapper contact-us">
                <h6 data-w-id="7ec2bacd-b961-2771-3f3a-c20071fb0065" style="opacity: 0" class="small-title">
                    Contact us
                </h6>
                <h1 data-w-id="7ec2bacd-b961-2771-3f3a-c20071fb0067" style="opacity: 0" class="home-1-banner-title">
                    Get in Touch: Contact Our Security Experts Today
                </h1>
                <p data-w-id="7ec2bacd-b961-2771-3f3a-c20071fb0069" style="opacity: 0"
                    class="title-description tablet-center-width">
                    Trust our experts to install security cameras in your home, ensuring
                    maximum coverage and protection.
                </p>
            </div>
        </div>
    </section>
    <div class="section">
        <div class="base-container w-container">
            <div class="contacts-wrapper">
                <div data-w-id="66e64b10-ddaf-41f1-e621-5af172c529ad" class="contacts-content-wrapper">
                    <div class="contacts-title">
                        <h3 data-w-id="623dbe5a-2f8c-af8d-645a-09f8f74b7342">
                            Contact our support team to take care your business
                        </h3>
                    </div>
                    <p data-w-id="6fd70183-160b-4ca3-6f77-e0bb036de701" class="short-text">
                        At Security, we prioritize the success and satisfaction of our
                        clients. Our dedicated support team is here to provide exceptional
                        care for your business needs.
                    </p>
                    <div data-w-id="5c5755d2-bf55-44a7-6173-837626efdc75" class="contacts-divider"></div>
                    <div data-delay="4000" data-animation="slide" class="contacts-location-slider w-slider"
                        data-autoplay="false" data-easing="ease" data-hide-arrows="false" data-disable-swipe="false"
                        data-autoplay-limit="0" data-nav-spacing="3" data-duration="500" data-infinite="true">
                        <div class="w-slider-mask">
                            {{-- <div class="w-slide">
                                <div class="contacts-detail-wrapper">
                                    <h6 data-w-id="382420eb-1d64-9299-a764-92f5db60f556">
                                        London
                                    </h6>
                                    <div data-w-id="382420eb-1d64-9299-a764-92f5db60f558" class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <p class="paragraph-no-margin">
                                            14 Tottenham Road, London, England
                                        </p>
                                    </div>
                                    <div data-w-id="382420eb-1d64-9299-a764-92f5db60f55d" class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <a href="tel:+12124258617" class="paragraph-no-margin">+1 212 425 8617</a>
                                    </div>
                                    <div data-w-id="382420eb-1d64-9299-a764-92f5db60f562" class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <a href="mailto:information@office.com"
                                            class="paragraph-no-margin">information@office.com</a>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="w-slide">
                                <div class="contacts-detail-wrapper">
                                    <h6>Canada</h6>
                                    <div class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <p class="paragraph-no-margin">
                                            19445-62A Avenue
                                            Surrey,BC V3S 7L7
                                        </p>
                                    </div>
                                    <div class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <a href="tel:+16047676970" class="paragraph-no-margin">604 767 6970</a>
                                    </div>
                                    <div class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <a href="mailto:information@office.com"
                                            class="paragraph-no-margin">masoudsecurity@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="w-slide">
                                <div class="contacts-detail-wrapper">
                                    <h6>New York</h6>
                                    <div class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <p class="paragraph-no-margin">
                                            5 Washington Square, New York, USA
                                        </p>
                                    </div>
                                    <div class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <a href="tel:+12124258617" class="paragraph-no-margin">+1 212 425 8617</a>
                                    </div>
                                    <div class="contacts-detail">
                                        <p class="contacts-icon"></p>
                                        <a href="mailto:information@office.com"
                                            class="paragraph-no-margin">information@office.com</a>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <div data-w-id="a9732cee-8e6d-a7cb-49ca-10b7915eb91b"
                            class="contacts-left-arrow w-slider-arrow-left">
                            <div class="contacts-slider-arrow-icon"></div>
                        </div>
                        <div data-w-id="a9732cee-8e6d-a7cb-49ca-10b7915eb91d"
                            class="contacts-right-arrow w-slider-arrow-right">
                            <div class="contacts-slider-arrow-icon"></div>
                        </div>
                        <div class="hidden w-slider-nav w-round"></div>
                        <div data-w-id="4d5b9da8-feed-51c4-345f-7c4d3371186b" class="contacts-arrows-divider"></div>
                    </div>
                </div>
                <div id="Contact-us" data-w-id="92a8d9be-2b86-6361-2ecb-849b408b23c7" class="contacts-form-wrapper">
                    <h3 class="contacts-form-title">Send us a message</h3>
                    <div class="form-block-contacts w-form">
                        <form id="email-form" name="email-form" data-name="Email Form" method="get" class="form-contacts"
                            data-wf-page-id="64735306bb4de7eb23c0f6c0"
                            data-wf-element-id="ea41af14-8b87-8ae8-ae5d-f8373dc8aafa">
                            <input class="contact-us-input w-input" maxlength="256" name="name" data-name="Name"
                                placeholder="Your name" type="text" id="name" required="" /><input
                                class="contact-us-input w-input" maxlength="256" name="email" data-name="Email"
                                placeholder="Your email" type="email" id="email" required="" />
                            <textarea placeholder="Your text" maxlength="5000" id="field" name="field" data-name="field" required=""
                                class="contact-us-text-area w-input"></textarea><input type="submit" data-wait="Please wait..."
                                class="primary-button full-width-mobile w-button" value="Submit" />
                        </form>
                        <div class="success-message w-form-done">
                            <div>Thank you! Your submission has been received!</div>
                        </div>
                        <div class="error-message w-form-fail">
                            <div>Oops! Something went wrong while submitting the form.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section without-top-spacing">
        <div class="base-container w-container">
            <div class="section-title-wrapper width">
                <h2 data-w-id="77ed0b3f-71e5-4f7e-045c-b1162c176008" style="opacity: 1" class="section-title">
                    Services included in every plan
                </h2>
                <p data-w-id="77ed0b3f-71e5-4f7e-045c-b1162c17600a" style="opacity: 1" class="section-title-description">
                    Rest assured that with our plans, you&#x27;ll receive a
                    comprehensive package that covers all aspects of your security
                    requirements, ensuring the safety and peace of mind you deserve.
                </p>
            </div>
            <div class="services-wrapper spacing">
                <div data-w-id="32cf3b16-32ab-e8b4-7f9d-44251cec289f" style="opacity: 1" class="item">
                    <div class="yellow-line"></div>
                    <div class="home-services-item height">
                        <div class="relative-wrapper display">
                            <div class="more-features-icon"></div>
                            <h4 class="services-title">Services</h4>
                            <p class="services-info">
                                From cutting-edge surveillance systems to advanced access
                                control solutions and alarm system installation, we have you
                                covered.
                            </p>
                            {{-- <div class="services-link-wrap">
                  <a href="/services" class="third-button">learn more</a>
                </div> --}}
                        </div>
                    </div>
                </div>
                <div data-w-id="5b7055fe-1657-5139-c6fe-016974237594" style="opacity: 1" class="item">
                    <div class="yellow-line"></div>
                    <div class="home-services-item height">
                        <div class="relative-wrapper display">
                            <div class="more-features-icon"></div>
                            <h4 class="services-title">Pricing</h4>
                            <p class="services-info">
                                Our pricing plans are designed to accommodate various budgets
                                and requirements, ensuring that you receive the best value for
                                your investment.
                            </p>
                            {{-- <div class="services-link-wrap">
                  <a href="/pricing" class="third-button">learn more</a>
                </div> --}}
                        </div>
                    </div>
                </div>
                <div data-w-id="c4ad2c23-30f4-66dd-87a1-1f255beef314" style="opacity: 1" class="item">
                    <div class="yellow-line"></div>
                    <div class="home-services-item height">
                        <div class="relative-wrapper display">
                            <div class="more-features-icon"></div>
                            <h4 class="services-title">Support</h4>
                            <p class="services-info">
                                Our dedicated support team is here to assist you every step of
                                the way, ensuring that you have a smooth and seamless
                                experience with our security solutions.
                            </p>
                            {{-- <div class="services-link-wrap">
                  <a href="#Contact-us" class="third-button">learn more</a>
                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="logo-section" style="background-color: transparent">
        <div class="base-container w-container">

            <div data-w-id="b8d0eb75-4007-e500-5daf-0584f91df042" style="opacity: 1" class="slider-container">
                <div data-delay="2000" data-animation="slide" class="slider-services w-slider" data-autoplay="true"
                    data-easing="ease" data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0"
                    data-nav-spacing="2" data-duration="2000" data-infinite="true">
                    <div class="mask-services w-slider-mask">
                        <img src="{{ asset('images/peak.png') }}" loading="lazy" alt="logo image"
                            class="home-logo-image slide-services w-slide" />

                        <img src="{{ asset('images/cctv2.png') }}" loading="lazy" alt="logo image"
                            class="home-logo-image slide-services w-slide" />

                        <img src="{{ asset('images/phone.png') }}" loading="lazy" alt="logo image"
                            class="home-logo-image slide-services w-slide" />
                        <img src="{{ asset('images/form.png') }}" loading="lazy" alt="logo image"
                            class="home-logo-image slide-services w-slide" />
                        <img src="{{ asset('images/cctv.png') }}" loading="lazy" alt="logo image"
                            class="home-logo-image slide-services w-slide" />

                        <img src="{{ asset('images/guard.png') }}" loading="lazy" alt="logo image"
                            class="home-logo-image slide-services w-slide" />


                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
