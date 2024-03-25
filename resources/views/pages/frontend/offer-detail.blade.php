@extends('layouts.app-master')

@section('content')
    @include('layouts.partials.hero-section')
    <div class="shape_mainsec">
        @include('layouts.partials.flight-filter')
        <section class="offer_detail_sec">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="head_one">
                            <h2>Summer 2024 Holidays</h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="sort-data">
                            <label for="text">Sort By</label>
                            <select name="sort">
                                <option value="1">Most Popular</option>
                                <option value="1">Most Popular</option>
                                <option value="1">Most Popular</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="inner-data">
                    <div class="detail_box_img">
                        <div class="imgs">
                            <img decoding="async" loading="lazy" src="./assets/img/detail_box_img1.jpg"
                                alt="detail_box_img1">
                        </div>
                        <div class="content">
                            <h2>This is dummy title of 1</h2>
                            <h3>3Days 4 Nights</h3>
                            <div class="rating">
                                <img decoding="async" loading="lazy" src="./assets/img/rating_star_full.png"
                                    alt="rating_star_full">
                                <span>
                                    4.7
                                </span>
                            </div>
                            <a href="#" class="white_btn">View Deal</a>
                        </div>
                    </div>
                    <div class="detail_box-main-cont">
                        <div class="row my-5">
                            <div class="col-md-6">
                                <div class="left">
                                    <div class="d-flex align-items-center">
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/planebig.png"
                                                alt="planebig">
                                            <h5>2 Flights</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/hotelbig.png"
                                                alt="hotelbig">
                                            <h5>1 Hotel</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/carbig.png"
                                                alt="carbig">
                                            <h5>2 Transfers</h5>
                                        </div>
                                        <div class="icons_box text-center">
                                            <img decoding="async" loading="lazy" src="./assets/img/manbig.png"
                                                alt="manbig">
                                            <h5>4 Activities</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="right">
                                    <div class="d-flex align-items-center justify-content-end ">
                                        <div class="price">
                                            <small>Per person</small>
                                            <p>£88,952 </p>
                                        </div>
                                        <div class="price">
                                            <small>28 Jan 2024</small>
                                            <p>7 nights</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-content">
                            <h3>
                                About Hotel
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley.</p>

                            <h3>
                                Accommodation
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley.</p>

                            <h3>
                                Pool and wellness
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley.</p>

                            <h3>
                                Food and drink
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley.</p>

                            <h3>
                                Children
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley.</p>

                            <h3>
                                Outside the hotel
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley. Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley.</p>
                        </div>
                    </div>
                </div>

                <div class="inner-listing-data">
                    <div class="cards">
                        <h3>Top Facilities</h3>
                        <ul>
                            <li>
                                Beachfront
                            </li>
                            <li>
                                WiFi
                            </li>
                            <li>Air conditioning</li>
                            <li>Family rooms</li>
                            <li>Restaurant</li>
                            <li>Bar</li>
                            <li>Water slides</li>
                            <li>Spa</li>
                            <li>Gym</li>
                        </ul>
                    </div>

                    <div class="cards twice">
                        <h3>Facilities</h3>
                        <ul>
                            <li>
                                WiFi
                            </li>
                            <li>Currency exchange</li>
                            <li>Air conditioning</li>
                            <li>ATM</li>
                            <li>24-hour reception</li>
                            <li>Daily housekeeping</li>
                            <li>Heating</li>
                            <li>Room service</li>
                            <li>Car hire</li>
                            <li>Dry cleaning*</li>
                            <li>Lift</li>
                            <li>Laundry*</li>
                            <li>Concierge service</li>
                            <li>Meeting and banquet facilities*</li>
                            <li>Luggage storage</li>
                            <li>Safety deposit box </li>
                            <li>Tour desk</li>
                            <li>charge applies</li>
                        </ul>
                    </div>

                    <div class="cards">
                        <h3>Children</h3>
                        <ul>
                            <li>
                                Beachfront
                            </li>
                            <li>
                                WiFi
                            </li>
                            <li>Air conditioning</li>
                            <li>Family rooms</li>
                            <li>Restaurant</li>
                            <li>Bar</li>
                            <li>Water slides</li>
                            <li>Spa</li>
                            <li>Gym</li>
                        </ul>
                    </div>
                </div>

                <div class="inner-listing-data">
                    <div class="cards twice">
                        <h3>Pool and wellness</h3>
                        <ul>
                            <li>
                                WiFi
                            </li>
                            <li>Currency exchange</li>
                            <li>Air conditioning</li>
                            <li>ATM</li>
                            <li>24-hour reception</li>
                            <li>Daily housekeeping</li>
                            <li>Heating</li>
                            <li>Room service</li>
                            <li>Car hire</li>
                            <li>Dry cleaning*</li>
                            <li>Lift</li>
                            <li>Laundry*</li>
                            <li>Concierge service</li>
                            <li>Meeting and banquet facilities*</li>
                            <li>Luggage storage</li>
                            <li>Safety deposit box </li>
                            <li>Tour desk</li>
                            <li>charge applies</li>
                        </ul>
                    </div>

                    <div class="cards">
                        <h3>Food and Drink</h3>
                        <ul>
                            <li>
                                Beachfront
                            </li>
                            <li>
                                WiFi
                            </li>
                            <li>Air conditioning</li>
                            <li>Family rooms</li>
                            <li>Restaurant</li>
                            <li>Bar</li>
                            <li>Water slides</li>
                            <li>Spa</li>
                            <li>Gym</li>
                        </ul>
                    </div>
                </div>

                <div class="inner-listing-data">
                    <div class="cards">
                        <h3>Room facilities</h3>
                        <ul>
                            <li>
                                Beachfront
                            </li>
                            <li>
                                WiFi
                            </li>
                            <li>Air conditioning</li>
                            <li>Family rooms</li>
                            <li>Restaurant</li>
                            <li>Bar</li>
                            <li>Water slides</li>
                            <li>Spa</li>
                            <li>Gym</li>
                        </ul>
                    </div>

                    <div class="cards twice">
                        <h3>Activities</h3>
                        <ul>
                            <li>
                                WiFi
                            </li>
                            <li>Currency exchange</li>
                            <li>Air conditioning</li>
                            <li>ATM</li>
                            <li>24-hour reception</li>
                            <li>Daily housekeeping</li>
                            <li>Heating</li>
                            <li>Room service</li>
                            <li>Car hire</li>
                            <li>Dry cleaning*</li>
                            <li>Lift</li>
                            <li>Laundry*</li>
                            <li>Concierge service</li>
                            <li>Meeting and banquet facilities*</li>
                            <li>Luggage storage</li>
                            <li>Safety deposit box </li>
                            <li>Tour desk</li>
                            <li>charge applies</li>
                        </ul>
                    </div>


                </div>

                <div class="timings_data">
                    <div class="box">
                        <h3>All Inclusive</h3>
                        <ul>
                            <li>
                                Early breakfast: 05:00 - 07:00
                            </li>
                            <li>Breakfast: 07:00 - 10:00</li>
                            <li>Late breakfast: 10:00 - 11:00</li>
                            <li>Lunch: 12:30 - 14:30</li>
                            <li>Dinner: 19:00 - 21:30</li>
                        </ul>
                    </div>

                    <div class="box">
                        <h3>Sports and activities</h3>
                        <ul>
                            <li>
                                Tennis
                            </li>
                            <li>Table Tennis </li>
                            <li>Entertainment </li>
                            <li>Animation </li>
                            <li>Mini golf</li>
                        </ul>
                    </div>

                    <div class="box">
                        <h3>Drinks and snacks</h3>
                        <ul>
                            <li>
                                Snacks: 12:00 - 16:00
                            </li>
                            <li>Poolside bar</li>
                            <li>Snacks: 11:00 - 17:00</li>
                            <li>Drinks: 10:00 - 18:00</li>
                            <li>Ice-cream Daily: 12:00 - 16:00 </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
