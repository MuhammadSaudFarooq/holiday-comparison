@extends('layouts.app-master')

@section('content')
    @include('layouts.partials.hero-section')
    <div class="shape_mainsec">
        @include('layouts.partials.flight-filter')

        <section class="home_about_sec inner_about_sec">
            <div class="container">
                <div class="inner_box">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="head_one">
                                <h2>About
                                    Holiday comparison</h2>
                                <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate the look and feel of finished, typeset text. Only for show. He who
                                    searches for meaning here will be sorely disappointed. This is dummy copy. It is not
                                    meant to be read. It has been placed here solely to demonstrate the look and feel of
                                    finished, typeset text. Only for show. He who searches for meaning here will be
                                    sorely disappointed.</p>
                                <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate the look and feel of finished, typeset text. Only for show. He who
                                    searches for meaning here will be sorely disappointed. This is dummy copy. It is not
                                    meant to be read. It has been placed here solely to demonstrate the look and feel of
                                    finished, typeset text. Only for show. This is dummy copy. It is not meant to be
                                    read. It has been placed here solely to demonstrate the look and feel of finished,
                                    typeset text. Only for show. He who searches for meaning here will be sorely
                                    disappointed..</p>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#" class="yellow_btn"><svg width="21" height="21" viewBox="0 0 21 21"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.47884 18.4277L9.14551 18.4277L13.3122 11.761L17.8955 11.761C18.5872 11.761 19.1455 11.2027 19.1455 10.511C19.1455 9.81936 18.5872 9.26103 17.8955 9.26103L13.3122 9.26103L9.14551 2.59436L7.47884 2.59436L9.56218 9.26103L4.97884 9.26103L3.72884 7.59436L2.47884 7.59436L3.31218 10.511L2.47884 13.4277L3.72884 13.4277L4.97884 11.761L9.56218 11.761L7.47884 18.4277Z"
                                            fill="#4777BA" />
                                    </svg>
                                    Jakarta - Bali
                                </a>
                                <img class="illus_img" decoding="async" loading="lazy"
                                    src="./assets/img/innabout_illus_img.png" alt="innabout_illus_img">
                                <div class="popup_box_loc">
                                    <a href="#">
                                        <div class="img">
                                            <img decoding="async" loading="lazy" src="./assets/img/explore_mini.png"
                                                alt="explore_mini">
                                        </div>
                                        <div class="content">
                                            <h3>Explore Labuan Bajo</h3>
                                            <p>
                                                <svg width="9" height="11" viewBox="0 0 9 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0.168945 4.94404C0.168945 2.6441 2.09089 0.785156 4.41567 0.785156C6.747 0.785156 8.66895 2.6441 8.66895 4.94404C8.66895 6.103 8.24745 7.17897 7.5537 8.09094C6.78835 9.09691 5.84502 9.97339 4.78322 10.6614C4.5402 10.8204 4.32088 10.8324 4.05417 10.6614C2.98631 9.97339 2.04299 9.09691 1.2842 8.09094C0.589937 7.17897 0.168945 6.103 0.168945 4.94404ZM3.01606 5.07353C3.01606 5.84401 3.64477 6.44999 4.41567 6.44999C5.18707 6.44999 5.82183 5.84401 5.82183 5.07353C5.82183 4.30905 5.18707 3.67357 4.41567 3.67357C3.64477 3.67357 3.01606 4.30905 3.01606 5.07353Z"
                                                        fill="#4777BA" />
                                                </svg>
                                                NTT, Indonesua
                                            </p>
                                        </div>
                                    </a>
                                </div>

                                <div class="popup_box_loc right">
                                    <a href="#">
                                        <div class="img">
                                            <img decoding="async" loading="lazy" src="./assets/img/leparl_hotel.png"
                                                alt="leparl_hotel">
                                        </div>
                                        <div class="content">
                                            <h3>Le Pirate Hotel</h3>
                                            <p>
                                                <svg width="9" height="11" viewBox="0 0 9 11" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M0.168945 4.94404C0.168945 2.6441 2.09089 0.785156 4.41567 0.785156C6.747 0.785156 8.66895 2.6441 8.66895 4.94404C8.66895 6.103 8.24745 7.17897 7.5537 8.09094C6.78835 9.09691 5.84502 9.97339 4.78322 10.6614C4.5402 10.8204 4.32088 10.8324 4.05417 10.6614C2.98631 9.97339 2.04299 9.09691 1.2842 8.09094C0.589937 7.17897 0.168945 6.103 0.168945 4.94404ZM3.01606 5.07353C3.01606 5.84401 3.64477 6.44999 4.41567 6.44999C5.18707 6.44999 5.82183 5.84401 5.82183 5.07353C5.82183 4.30905 5.18707 3.67357 4.41567 3.67357C3.64477 3.67357 3.01606 4.30905 3.01606 5.07353Z"
                                                        fill="#4777BA" />
                                                </svg>
                                                Flores, Indonesia
                                            </p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="head_one text-center mt-5 py-5">

                        <p>This is dummy copy. It is not meant to be read. It has been placed here solely to demonstrate
                            the look and feel of finished, typeset text. Only for show. He who searches for meaning here
                            will be sorely disappointed. This is dummy copy. It is not meant to be read. It has been
                            placed here solely to demonstrate the look and feel of finished, typeset text. Only for
                            show. This is dummy copy. It is not meant to be read. It has been placed here solely to
                            demonstrate the look and feel of finished, typeset text. Only for show. He who searches for
                            meaning here will be sorely disappointed.. This is dummy copy. It is not meant to be read.
                            It has been placed here solely to demonstrate the look and feel of finished, typeset text.
                            Only for show. He who searches for meaning here will be sorely disappointed. This is dummy
                            copy.</p>

                    </div>

                    <div class="about_img_sec">
                        <div class="img">
                            <img decoding="async" loading="lazy" src="./assets/img/about_img_sec1.jpg" alt="about_img_sec1">
                        </div>
                        <div class="img">
                            <img decoding="async" loading="lazy" src="./assets/img/about_img_sec2.jpg" alt="about_img_sec2">
                        </div>
                        <div class="img">
                            <img decoding="async" loading="lazy" src="./assets/img/about_img_sec3.jpg" alt="about_img_sec3">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- <section class="why_book_sec inner_why_book_sec">
                <div class="container">
                    <div class="stroke_head text-center">
                        <h2>WHy book With Us</h2>
                    </div>

                    <div class="why_book_sec_inn">
                        <div class="row align-items-end">
                            <div class="col-md-5">
                                <div class="img">
                                    <img decoding="async" loading="lazy" src="./assets/img/whybook_img.png"
                                        alt="whybook_img">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="icon_box_text">
                                            <div class="icon_img">
                                                <img decoding="async" loading="lazy" src="./assets/img/atol_img.png"
                                                    alt="atol_img">
                                            </div>
                                            <div class="icon_text">
                                                <h3>
                                                    ATOL protected
                                                </h3>
                                                <p>
                                                    This is dummy copy. It is not meant to be read It has been.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="icon_box_text">
                                            <div class="icon_img yellow">
                                                <img decoding="async" loading="lazy" src="./assets/img/spread_img.png"
                                                    alt="spread_img">
                                            </div>
                                            <div class="icon_text">
                                                <h3>
                                                    Spread the cost
                                                </h3>
                                                <p>
                                                    This is dummy copy. It is not meant to be read It has been.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="icon_box_text">
                                            <div class="icon_img">
                                                <img decoding="async" loading="lazy" src="./assets/img/low_img.png"
                                                    alt="low_img">
                                            </div>
                                            <div class="icon_text">
                                                <h3>
                                                    Low deposits
                                                </h3>
                                                <p>
                                                    This is dummy copy. It is not meant to be read It has been.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="icon_box_text">
                                            <div class="icon_img yellow">
                                                <img decoding="async" loading="lazy" src="./assets/img/unmatched_img.png"
                                                    alt="unmatched_img">
                                            </div>
                                            <div class="icon_text">
                                                <h3>
                                                    Unmatched ease
                                                </h3>
                                                <p>
                                                    This is dummy copy. It is not meant to be read It has been.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="icon_box_text">
                                            <div class="icon_img">
                                                <img decoding="async" loading="lazy" src="./assets/img/unbeat_img.png"
                                                    alt="unbeat_img">
                                            </div>
                                            <div class="icon_text">
                                                <h3>
                                                    Unbeatable prices
                                                </h3>
                                                <p>
                                                    This is dummy copy. It is not meant to be read It has been.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="icon_box_text">
                                            <div class="icon_img yellow">
                                                <img decoding="async" loading="lazy"
                                                    src="./assets/img/holidayfinger_img.png" alt="holidayfinger_img">
                                            </div>
                                            <div class="icon_text">
                                                <h3>
                                                    Holidays at your fingertips
                                                </h3>
                                                <p>
                                                    This is dummy copy. It is not meant to be read It has been.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->


        <section class="why_book_sec inner_why_book_sec">
            <div class="container">
                <div class="stroke_head text-center">
                    <h2>why you need us</h2>
                </div>

                <div class="why_book_sec_inn">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="img">
                                <img decoding="async" loading="lazy" src="./assets/img/whybook_img.png"
                                    alt="whybook_img">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="icon_box_text">
                                        <div class="icon_img">
                                            <img decoding="async" loading="lazy" src="./assets/img/atol_img.png"
                                                alt="atol_img">
                                        </div>
                                        <div class="icon_text">
                                            <h3>
                                                Save Time and Effort:
                                            </h3>
                                            <p>
                                                We streamline the process of finding the perfect holiday by doing the
                                                research for you. No more endless searching and comparing – we provide you
                                                with tailored options based on your preferences.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="icon_box_text">
                                        <div class="icon_img yellow">
                                            <img decoding="async" loading="lazy" src="./assets/img/spread_img.png"
                                                alt="spread_img">
                                        </div>

                                        <div class="icon_text">
                                            <h3>
                                                Personalized Recommendations:
                                            </h3>
                                            <p>
                                                We understand that every traveler is unique. We take your preferences into
                                                account, offering personalized recommendations that match your interests,
                                                budget, and travel style.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="icon_box_text">
                                        <div class="icon_img">
                                            <img decoding="async" loading="lazy" src="./assets/img/low_img.png"
                                                alt="low_img">
                                        </div>
                                        <div class="icon_text">
                                            <h3>
                                                User-Friendly Interface
                                            </h3>
                                            <p>
                                                Our website is easy to navigate and user-friendly. You don't need to be a
                                                tech expert to use our platform. Booking your dream holiday has never been
                                                so straightforward.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="icon_box_text">
                                        <div class="icon_img yellow">
                                            <img decoding="async" loading="lazy" src="./assets/img/unmatched_img.png"
                                                alt="unmatched_img">
                                        </div>
                                        <div class="icon_text">
                                            <h3>
                                                Best Price Guarantee:
                                            </h3>
                                            <p>
                                                Our platform is designed to find the most cost-effective flight and holiday
                                                packages available. We constantly monitor prices to ensure you get the best
                                                deals, saving you money on your travels.
                                            </p>
                                        </div>

                                    </div>

                                    <div class="icon_box_text">
                                        <div class="icon_img">
                                            <img decoding="async" loading="lazy" src="./assets/img/unbeat_img.png"
                                                alt="unbeat_img">
                                        </div>
                                        <div class="icon_text">
                                            <h3>
                                                Comprehensive Information:
                                            </h3>
                                            <p>
                                                We provide detailed information about your holiday options, including flight
                                                details, accommodations, and destination highlights. This empowers you to
                                                make informed decisions about your travel plans.
                                            </p>
                                        </div>
                                    </div>

                                    <div class="icon_box_text">
                                        <div class="icon_img yellow">
                                            <img decoding="async" loading="lazy" src="./assets/img/holidayfinger_img.png"
                                                alt="holidayfinger_img">
                                        </div>
                                        <div class="icon_text">
                                            <h3>
                                                Access to Real-Time Information:
                                            </h3>
                                            <p>
                                                We prioritize your satisfaction and are here to assist you every step of the
                                                way. Our dedicated team provides you with access to up-to-date data,
                                                ensuring that you make informed decisions for your travel plans.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
