@extends('layouts.app-master')

@section('content')
    @include('layouts.partials.hero-section')
    <div class="shape_mainsec">
        @include('layouts.partials.flight-filter')

        <section class="popular_dest_sec">
            <div class="container">
                <div class="head_one text-center">
                    <h2>Popular Destinations</h2>
                </div>

                <div class="row mt-4 popular_dest_main">
                    <div class="col-md-4">
                        <a href="./offers-detail-page.php">
                            <div class="popular_box">
                                <div class="img">
                                    <img decoding="async" loading="lazy" src="./assets/img/destination_img.jpg"
                                        alt="destination_img">
                                </div>
                                <div class="content">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="detail">
                                            <h2>This is dummy title of 1</h2>
                                            <h3>3Days 4 Nights</h3>
                                        </div>
                                        <div class="detail-rating">
                                            <p class="d-flex align-items-center"><img decoding="async" loading="lazy"
                                                    src="./assets/img/rating_star.png" alt="rating_star"> 4.7</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between my-4">
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/plane.png"
                                                alt="plane">
                                            <h5>2 Flights</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/hotel.png"
                                                alt="hotel">
                                            <h5>1 Hotel</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/car.png"
                                                alt="car">
                                            <h5>2 Transfers</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/man.png"
                                                alt="man">
                                            <h5>4 Activities</h5>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>Tour combo with return airport transfer</li>
                                        <li>City Tour</li>
                                        <li>Curious Corner</li>
                                    </ul>

                                    <div class="price">
                                        <p>£88,952 <small>Per person</small></p>
                                    </div>

                                    <div class="arowbtn">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 32 32" fill="none">
                                            <path d="M26.6663 16L5.33301 16" stroke="#141B34" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20 9.33342C20 9.33342 26.6667 14.2433 26.6667 16.0001C26.6667 17.7569 20 22.6667 20 22.6667"
                                                stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="popular_box">
                                <div class="img">
                                    <img decoding="async" loading="lazy" src="./assets/img/destination_img1.jpg"
                                        alt="destination_img1">
                                </div>
                                <div class="content">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="detail">
                                            <h2>This is dummy title of 1</h2>
                                            <h3>3Days 4 Nights</h3>
                                        </div>
                                        <div class="detail-rating">
                                            <p class="d-flex align-items-center"><img decoding="async" loading="lazy"
                                                    src="./assets/img/rating_star.png" alt="rating_star"> 4.7</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between my-4">
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/plane.png"
                                                alt="plane">
                                            <h5>2 Flights</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/hotel.png"
                                                alt="hotel">
                                            <h5>1 Hotel</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/car.png"
                                                alt="car">
                                            <h5>2 Transfers</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/man.png"
                                                alt="man">
                                            <h5>4 Activities</h5>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>Tour combo with return airport transfer</li>
                                        <li>City Tour</li>
                                        <li>Curious Corner</li>
                                    </ul>

                                    <div class="price">
                                        <p>£88,952 <small>Per person</small></p>
                                    </div>


                                    <div class="arowbtn">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 32 32" fill="none">
                                            <path d="M26.6663 16L5.33301 16" stroke="#141B34" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20 9.33342C20 9.33342 26.6667 14.2433 26.6667 16.0001C26.6667 17.7569 20 22.6667 20 22.6667"
                                                stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="popular_box">
                                <div class="img">
                                    <img decoding="async" loading="lazy" src="./assets/img/destination_img2.jpg"
                                        alt="destination_img2">
                                </div>
                                <div class="content">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="detail">
                                            <h2>This is dummy title of 1</h2>
                                            <h3>3Days 4 Nights</h3>
                                        </div>
                                        <div class="detail-rating">
                                            <p class="d-flex align-items-center"><img decoding="async" loading="lazy"
                                                    src="./assets/img/rating_star.png" alt="rating_star"> 4.7</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between my-4">
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/plane.png"
                                                alt="plane">
                                            <h5>2 Flights</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/hotel.png"
                                                alt="hotel">
                                            <h5>1 Hotel</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/car.png"
                                                alt="car">
                                            <h5>2 Transfers</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/man.png"
                                                alt="man">
                                            <h5>4 Activities</h5>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>Tour combo with return airport transfer</li>
                                        <li>City Tour</li>
                                        <li>Curious Corner</li>
                                    </ul>

                                    <div class="price">
                                        <p>£88,952 <small>Per person</small></p>
                                    </div>


                                    <div class="arowbtn">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 32 32" fill="none">
                                            <path d="M26.6663 16L5.33301 16" stroke="#141B34" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20 9.33342C20 9.33342 26.6667 14.2433 26.6667 16.0001C26.6667 17.7569 20 22.6667 20 22.6667"
                                                stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="popular_box">
                                <div class="img">
                                    <img decoding="async" loading="lazy" src="./assets/img/destination_img3.jpg"
                                        alt="destination_img3">
                                </div>
                                <div class="content">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="detail">
                                            <h2>This is dummy title of 1</h2>
                                            <h3>3Days 4 Nights</h3>
                                        </div>
                                        <div class="detail-rating">
                                            <p class="d-flex align-items-center"><img decoding="async" loading="lazy"
                                                    src="./assets/img/rating_star.png" alt="rating_star"> 4.7</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between my-4">
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/plane.png"
                                                alt="plane">
                                            <h5>2 Flights</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/hotel.png"
                                                alt="hotel">
                                            <h5>1 Hotel</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/car.png"
                                                alt="car">
                                            <h5>2 Transfers</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/man.png"
                                                alt="man">
                                            <h5>4 Activities</h5>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>Tour combo with return airport transfer</li>
                                        <li>City Tour</li>
                                        <li>Curious Corner</li>
                                    </ul>

                                    <div class="price">
                                        <p>£88,952 <small>Per person</small></p>
                                    </div>


                                    <div class="arowbtn">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 32 32" fill="none">
                                            <path d="M26.6663 16L5.33301 16" stroke="#141B34" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20 9.33342C20 9.33342 26.6667 14.2433 26.6667 16.0001C26.6667 17.7569 20 22.6667 20 22.6667"
                                                stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="popular_box">
                                <div class="img">
                                    <img decoding="async" loading="lazy" src="./assets/img/destination_img4.jpg"
                                        alt="destination_img4">
                                </div>
                                <div class="content">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="detail">
                                            <h2>This is dummy title of 1</h2>
                                            <h3>3Days 4 Nights</h3>
                                        </div>
                                        <div class="detail-rating">
                                            <p class="d-flex align-items-center"><img decoding="async" loading="lazy"
                                                    src="./assets/img/rating_star.png" alt="rating_star"> 4.7</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between my-4">
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/plane.png"
                                                alt="plane">
                                            <h5>2 Flights</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/hotel.png"
                                                alt="hotel">
                                            <h5>1 Hotel</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/car.png"
                                                alt="car">
                                            <h5>2 Transfers</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/man.png"
                                                alt="man">
                                            <h5>4 Activities</h5>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>Tour combo with return airport transfer</li>
                                        <li>City Tour</li>
                                        <li>Curious Corner</li>
                                    </ul>

                                    <div class="price">
                                        <p>£88,952 <small>Per person</small></p>
                                    </div>


                                    <div class="arowbtn">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 32 32" fill="none">
                                            <path d="M26.6663 16L5.33301 16" stroke="#141B34" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20 9.33342C20 9.33342 26.6667 14.2433 26.6667 16.0001C26.6667 17.7569 20 22.6667 20 22.6667"
                                                stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4">
                        <a href="#">
                            <div class="popular_box">
                                <div class="img">
                                    <img decoding="async" loading="lazy" src="./assets/img/destination_img5.jpg"
                                        alt="destination_img5">
                                </div>
                                <div class="content">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="detail">
                                            <h2>This is dummy title of 1</h2>
                                            <h3>3Days 4 Nights</h3>
                                        </div>
                                        <div class="detail-rating">
                                            <p class="d-flex align-items-center"><img decoding="async" loading="lazy"
                                                    src="./assets/img/rating_star.png" alt="rating_star"> 4.7</p>
                                        </div>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between my-4">
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/plane.png"
                                                alt="plane">
                                            <h5>2 Flights</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/hotel.png"
                                                alt="hotel">
                                            <h5>1 Hotel</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/car.png"
                                                alt="car">
                                            <h5>2 Transfers</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/man.png"
                                                alt="man">
                                            <h5>4 Activities</h5>
                                        </div>
                                    </div>

                                    <ul>
                                        <li>Tour combo with return airport transfer</li>
                                        <li>City Tour</li>
                                        <li>Curious Corner</li>
                                    </ul>

                                    <div class="price">
                                        <p>£88,952 <small>Per person</small></p>
                                    </div>


                                    <div class="arowbtn">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            viewBox="0 0 32 32" fill="none">
                                            <path d="M26.6663 16L5.33301 16" stroke="#141B34" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M20 9.33342C20 9.33342 26.6667 14.2433 26.6667 16.0001C26.6667 17.7569 20 22.6667 20 22.6667"
                                                stroke="#141B34" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>

                                    </div>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="load_btn">
                        <a href="#">View More</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="why_book_sec">
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
                                                research for you. No more endless searching and comparing – we provide
                                                you with tailored options based on your preferences.
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
                                                We understand that every traveler is unique. We take your preferences
                                                into account, offering personalized recommendations that match your
                                                interests, budget, and travel style.
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
                                                Our website is easy to navigate and user-friendly. You don't need to be
                                                a tech expert to use our platform. Booking your dream holiday has never
                                                been so straightforward.
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
                                                Our platform is designed to find the most cost-effective flight and
                                                holiday packages available. We constantly monitor prices to ensure you
                                                get the best deals, saving you money on your travels.
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
                                                We provide detailed information about your holiday options, including
                                                flight details, accommodations, and destination highlights. This
                                                empowers you to make informed decisions about your travel plans.
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
                                                We prioritize your satisfaction and are here to assist you every step of
                                                the way. Our dedicated team provides you with access to up-to-date data,
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

        <section class="home_about_sec">
            <div class="container">
                <div class="inner_box">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="head_one white">
                                <h2>About <br>
                                    Holiday comparison</h2>
                                <p>This is dummy copy. It is not meant to be read. It has been placed here solely to
                                    demonstrate the look and feel of finished, typeset text. Only for show. He who
                                    searches
                                    for meaning here will be sorely disappointed. This is dummy copy. It is not meant to
                                    be
                                    read. It has been placed here solely to demonstrate the look and feel of finished,
                                    typeset text. Only for show. He who searches for meaning here will be sorely
                                    disappointed.</p>
                                <a href="#" class="yellow_btn">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img">
                                <a href="#" class="yellow_btn"><svg width="21" height="21"
                                        viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.47884 18.4277L9.14551 18.4277L13.3122 11.761L17.8955 11.761C18.5872 11.761 19.1455 11.2027 19.1455 10.511C19.1455 9.81936 18.5872 9.26103 17.8955 9.26103L13.3122 9.26103L9.14551 2.59436L7.47884 2.59436L9.56218 9.26103L4.97884 9.26103L3.72884 7.59436L2.47884 7.59436L3.31218 10.511L2.47884 13.4277L3.72884 13.4277L4.97884 11.761L9.56218 11.761L7.47884 18.4277Z"
                                            fill="#4777BA" />
                                    </svg>
                                    Jakarta - Bali
                                </a>
                                <img class="illus_img" decoding="async" loading="lazy" src="./assets/img/illus_img.png"
                                    alt="illus_img">
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
                </div>
            </div>
        </section>

        <section class="like_togo_sec">
            <div class="container">
                <div class="head_one green text-center">
                    <h2>would you like to go?</h2>
                </div>

                <div class="like_img_sec">
                    <div class="like_img_box">
                        <img decoding="async" loading="lazy" src="./assets/img/like_img_one.jpg" alt="like_img_one">
                        <div class="content">
                            <a href="#">
                                New York
                            </a>
                        </div>
                    </div>
                    <div class="like_img_box">
                        <img decoding="async" loading="lazy" src="./assets/img/like_img_2.jpg" alt="like_img_2">
                        <div class="content">
                            <a href="#">
                                New York
                            </a>
                        </div>
                    </div>
                    <div class="like_img_box">
                        <img decoding="async" loading="lazy" src="./assets/img/like_img_3.jpg" alt="like_img_3">
                        <div class="content">
                            <a href="#">
                                New York
                            </a>
                        </div>
                    </div>
                    <div class="like_img_box">
                        <img decoding="async" loading="lazy" src="./assets/img/like_img_4.jpg" alt="like_img_4">
                        <div class="content">
                            <a href="#">
                                New York
                            </a>
                        </div>
                    </div>
                    <div class="like_img_box">
                        <img decoding="async" loading="lazy" src="./assets/img/like_img_5.jpg" alt="like_img_5">
                        <div class="content">
                            <a href="#">
                                New York
                            </a>
                        </div>
                    </div>
                    <div class="like_img_box">
                        <img decoding="async" loading="lazy" src="./assets/img/like_img_6.jpg" alt="like_img_6">
                        <div class="content">
                            <a href="#">
                                New York
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="javascript:;" class="yellow_btn">View More</a>
                </div>

            </div>
        </section>

        <section class="holiday_deal_sec">
            <div class="container">
                <div class="stroke_head text-center blue">
                    <h2>Holiday Deals</h2>
                </div>

                <div class="holiday_deal_slider">
                    <div class="holiday_deal_box">
                        <a href="./offers-detail.php">
                            <div class="holiday_img_box">
                                <img decoding="async" loading="lazy" src="./assets/img/deals_img1.jpg" alt="deals_img1">
                                <div class="content">
                                    <h3>
                                        Summer 2024 <br> Holidays
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="holiday_deal_box">
                        <a href="#">
                            <div class="holiday_img_box">
                                <div class="icon_imgs">
                                    <div class="inner">
                                        <p>20% OFF</p>
                                    </div>
                                </div>
                                <img decoding="async" loading="lazy" src="./assets/img/deals_img2.jpg" alt="deals_img2">
                                <div class="content">
                                    <h3>
                                        Family <br> Holidays
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="holiday_deal_box">
                        <a href="#">
                            <div class="holiday_img_box">
                                <img decoding="async" loading="lazy" src="./assets/img/deals_img3.jpg" alt="deals_img3">
                                <div class="content">
                                    <h3>
                                        Luxury <br> Holidays
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="holiday_deal_box">
                        <a href="#">
                            <div class="holiday_img_box">
                                <div class="icon_imgs">
                                    <div class="inner">
                                        <p>20% OFF</p>
                                    </div>
                                </div>
                                <img decoding="async" loading="lazy" src="./assets/img/deals_img4.jpg" alt="deals_img4">
                                <div class="content">
                                    <h3>
                                        Free Child <br> Place Finder
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="holiday_deal_box">
                        <a href="#">
                            <div class="holiday_img_box">
                                <div class="icon_imgs">
                                    <div class="inner">
                                        <p>15% OFF</p>
                                    </div>
                                </div>
                                <img decoding="async" loading="lazy" src="./assets/img/deals_img5.jpg" alt="deals_img5">
                                <div class="content">
                                    <h3>
                                        December <br> Holidays
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="holiday_deal_box">
                        <a href="#">
                            <div class="holiday_img_box">
                                <div class="icon_imgs">
                                    <div class="inner">
                                        <p>10% OFF</p>
                                    </div>
                                </div>
                                <img decoding="async" loading="lazy" src="./assets/img/deals_img6.jpg" alt="deals_img6">
                                <div class="content">
                                    <h3>
                                        City <br> Breaks
                                    </h3>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </section>

        <section class="faq_sec">
            <div class="container">
                <div class="head_one text-center">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div id="main">
                    <div class="container">
                        <div class="accordion" id="faq">
                            <div class="card">
                                <div class="card-header" id="faqhead1">
                                    <a href="#" class="btn btn-header-link" data-toggle="collapse"
                                        data-target="#faq1" aria-expanded="true" aria-controls="faq1">Lorem Ipsum is
                                        simply dummy text of
                                        the printing and typesetting industry. </a>
                                </div>

                                <div id="faq1" class="collapse show" aria-labelledby="faqhead1" data-parent="#faq">
                                    <div class="card-body">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq2" aria-expanded="true" aria-controls="faq2">Lorem Ipsum is
                                        simply dummy text of the printing and typesetting industry. </a>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq3" aria-expanded="true" aria-controls="faq3">Lorem Ipsum is
                                        simply dummy text of the printing and typesetting industry. </a>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq4" aria-expanded="true" aria-controls="faq4">Lorem Ipsum is
                                        simply dummy text of the printing and typesetting industry. </a>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq5" aria-expanded="true" aria-controls="faq5">Lorem Ipsum is
                                        simply dummy text of the printing and typesetting industry. </a>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley. Lorem Ipsum is simply dummy text of the printing
                                        and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                                        text ever since the 1500s, when an unknown printer took a galley.
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
