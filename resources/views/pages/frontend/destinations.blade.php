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
                            <h2>Popular Destinations</h2>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="sort-data">
                            <label for="text">Sort By</label>
                            <select name="sort">
                                <option value="">Default</option>
                                <option value="most-popular">Most Popular</option>
                                <option value="hight-to-low">Price: Hight to Low</option>
                                <option value="low-to-high">Price: Low to High</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="inner-det">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="left">
                                <div class="price_person">
                                    <p>Price per person</p>
                                    <div class="En_btn">
                                        <label class="toggle">
                                            <input type="checkbox">
                                            <span class="slider"></span>
                                            <span class="labels" data-on="AR" data-off="EN"></span>
                                        </label>
                                    </div>
                                    <p>Total price</p>
                                </div>

                                <div class="inner-det">
                                    <div class="card_box">
                                        <h3>
                                            Board Basis
                                        </h3>

                                        <div class="checker_Detal">

                                            <label class="radio-button-container">All Inclusive
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Full Board
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Breakfast & Dinner
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Breakfast Included
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Self Catering
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Room Only
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="card_box">
                                        <h3>
                                            Star Rating
                                        </h3>

                                        <div class="checker_Detal">

                                            <label class="radio-button-container">5- Star Hotel
                                                <input type="radio" checked="checked" name="radio1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">4- Star Hotel
                                                <span>500+</span>
                                                <input type="radio" name="radio1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">3- Star Hotel
                                                <span>500+</span>
                                                <input type="radio" name="radio1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">2- Star Hotel
                                                <span>500+</span>
                                                <input type="radio" name="radio1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">1- Star Hotel
                                                <span>500+</span>
                                                <input type="radio" name="radio1">
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                    </div>

                                    <div class="card_box">
                                        <h3>
                                            Maximum Budget
                                        </h3>

                                        <div class="checker_Detal">

                                            <label class="radio-button-container">No maximum
                                                <input type="radio" checked="checked" name="radio2">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">£1500 / person
                                                <input type="radio" name="radio2">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">£2000 / person
                                                <input type="radio" name="radio2">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">£4000 / person
                                                <input type="radio" name="radio2">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">£6000 / person
                                                <input type="radio" name="radio2">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">£8000 / person
                                                <input type="radio" name="radio2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="card_box">
                                        <h3>
                                            Types of Holidays
                                        </h3>

                                        <div class="checker_Detal">

                                            <label class="radio-button-container">Adults Only Hotels
                                                <input type="radio" checked="checked" name="radio3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Beach
                                                <span>500+</span>
                                                <input type="radio" name="radio3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Close to Airport
                                                <span>500+</span>
                                                <input type="radio" name="radio3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Couples
                                                <span>500+</span>
                                                <input type="radio" name="radio3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Family
                                                <span>500+</span>
                                                <input type="radio" name="radio3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Honeymoon
                                                <span>500+</span>
                                                <input type="radio" name="radio3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Luxury Hotels
                                                <span>500+</span>
                                                <input type="radio" name="radio3">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Spa and Relaxation
                                                <span>500+</span>
                                                <input type="radio" name="radio3">
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                    </div>

                                    <div class="card_box">
                                        <h3>
                                            Facilities
                                        </h3>

                                        <div class="checker_Detal">

                                            <label class="radio-button-container">Air Conditioning
                                                <input type="radio" checked="checked" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Bar
                                                <span>500+</span>
                                                <input type="radio" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Beauty Treatments
                                                <span>500+</span>
                                                <input type="radio" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Disabled Facilities
                                                <span>500+</span>
                                                <input type="radio" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Gym
                                                <span>500+</span>
                                                <input type="radio" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Massage
                                                <span>500+</span>
                                                <input type="radio" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Satellite TV
                                                <span>500+</span>
                                                <input type="radio" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">WiFi
                                                <span>500+</span>
                                                <input type="radio" name="radio4">
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                    </div>

                                    <div class="card_box">
                                        <h3>
                                            Pool
                                        </h3>

                                        <div class="checker_Detal">

                                            <label class="radio-button-container">Indoor Pool
                                                <input type="radio" checked="checked" name="radio5">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Infinity Pool
                                                <span>500+</span>
                                                <input type="radio" name="radio5">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Kids Pool
                                                <span>500+</span>
                                                <input type="radio" name="radio5">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Outdoor Pool
                                                <span>500+</span>
                                                <input type="radio" name="radio5">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Pool Bar
                                                <span>500+</span>
                                                <input type="radio" name="radio5">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Swimming Pool
                                                <span>500+</span>
                                                <input type="radio" name="radio5">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Water Slides
                                                <span>500+</span>
                                                <input type="radio" name="radio5">
                                                <span class="checkmark"></span>
                                            </label>


                                        </div>
                                    </div>

                                    <div class="card_box">
                                        <h3>
                                            KIds
                                        </h3>

                                        <div class="checker_Detal">

                                            <label class="radio-button-container">Kids Club
                                                <input type="radio" checked="checked" name="radio6">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Kids Pool
                                                <span>500+</span>
                                                <input type="radio" name="radio6">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Playground
                                                <span>500+</span>
                                                <input type="radio" name="radio6">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Theme Parks
                                                <span>500+</span>
                                                <input type="radio" name="radio6">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-button-container">Water Slides
                                                <span>500+</span>
                                                <input type="radio" name="radio6">
                                                <span class="checkmark"></span>
                                            </label>

                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row ">
                                @if (isset($flight_data) && $flight_data[0]->count > 0 && $type == 'flight')
                                    @foreach ($flight_data[1] as $key => $value)
                                        @php
                                            $link = '';
                                            if (isset($_POST['destination']) && $_POST['destination'] != '') {

                                                $link =
                                                    '?originLocationCode=' .
                                                    $_POST['airport'] .
                                                    '&destinationLocationCode=' .
                                                    $_POST['destination'] .
                                                    '&departureDate=' .
                                                    $_POST['date'] .
                                                    '&adults=' .
                                                    $_POST['adults'] .
                                                    '&children=' .
                                                    $_POST['children'] .
                                                    '&type=flight';
                                            }
                                            // echo '<pre>';
                                            // print_r($value);
                                            // $value->price->currency
                                            // $value->price->total
                                            // $value->numberOfBookableSeats
                                            // $value->itineraries[0]->duration
                                            // $value->itineraries[0]->segments
                                            // echo '</pre>';
                                        @endphp
                                        <div class="col-md-6 load-item-2">
                                            <a href="{{ url('/offers-detail' . $link . '&id=' . $value->id) }}">
                                                <div class="popular_box">
                                                    <div class="img">
                                                        <img decoding="async" loading="lazy"
                                                            src="./assets/img/destination_img.jpg" alt="destination_img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="detail">
                                                                <h2>
                                                                    @php
                                                                        $dateString = date($value->lastTicketingDate);
                                                                        $dateObj = new DateTime($dateString);
                                                                        $desiredFormat = 'D d M Y';
                                                                        $formattedDate = $dateObj->format(
                                                                            $desiredFormat,
                                                                        );
                                                                        echo 'Flight: ' . $formattedDate;
                                                                    @endphp
                                                                </h2>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-between my-4">
                                                            <div class="icons_box text-center">
                                                                <img decoding="async" loading="lazy"
                                                                    src="{{ asset('assets/img/seat.png') }}"
                                                                    alt="plane">
                                                                <h5>{{ (int) $value->numberOfBookableSeats > 1 ? $value->numberOfBookableSeats . ' Seats' : $value->numberOfBookableSeats . ' Seat' }}
                                                                </h5>
                                                            </div>
                                                            <div class="icons_box text-center">
                                                                <img decoding="async" loading="lazy"
                                                                    src="{{ asset('assets/img/duration.png') }}"
                                                                    alt="hotel">
                                                                <h5>
                                                                    @php
                                                                        $dur = $value->itineraries[0]->duration;
                                                                        $d = new DateInterval($dur);
                                                                        $duration = $d->format('%h hour %i min');
                                                                        $duration = str_replace(
                                                                            ' 0 min',
                                                                            '',
                                                                            $duration,
                                                                        );
                                                                        $duration = str_replace(
                                                                            '0 hour',
                                                                            '',
                                                                            $duration,
                                                                        );
                                                                    @endphp
                                                                    {{ $duration }}
                                                                </h5>
                                                            </div>
                                                            <div class="icons_box text-center">
                                                                <img decoding="async" loading="lazy"
                                                                    src="{{ asset('assets/img/flight-route.png') }}"
                                                                    alt="car">
                                                                <h5>{{ count($value->itineraries[0]->segments) }} Route
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <ul class="flight_detail">
                                                            @foreach ($flight_data[2] as $k => $v)
                                                                @if ($k == 'aircraft')
                                                                    <b>Aircraft</b>
                                                                    @php
                                                                        $a_count = 1;
                                                                        foreach (
                                                                            $flight_data[2]->aircraft
                                                                            as $aircraft
                                                                        ) {
                                                                            if ($a_count <= 3) {
                                                                                echo '<li>' . $aircraft . '</li>';
                                                                            }

                                                                            $a_count++;
                                                                        }
                                                                    @endphp
                                                                @endif

                                                                @if ($k == 'carriers')
                                                                    <b>Carriers</b>
                                                                    @php
                                                                        $c_count = 1;
                                                                        foreach (
                                                                            $flight_data[2]->carriers
                                                                            as $carriers
                                                                        ) {
                                                                            if ($c_count <= 3) {
                                                                                echo '<li>' . $carriers . '</li>';
                                                                            }

                                                                            $c_count++;
                                                                        }
                                                                    @endphp
                                                                @endif
                                                            @endforeach
                                                        </ul>

                                                        <div class="price">
                                                            <p>£{{ number_format((int) $value->price->total) }}
                                                                <small>Per
                                                                    person</small>
                                                            </p>
                                                        </div>

                                                        <div class="arowbtn">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                height="32" viewBox="0 0 32 32" fill="none">
                                                                <path d="M26.6663 16L5.33301 16" stroke="#141B34"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M20 9.33342C20 9.33342 26.6667 14.2433 26.6667 16.0001C26.6667 17.7569 20 22.6667 20 22.6667"
                                                                    stroke="#141B34" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>

                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @elseif (isset($hotel_data) && $hotel_data[1]->count > 0 && $type == 'hotel')
                                    @foreach ($hotel_data[0] as $key => $value)
                                        @php
                                            // echo '<pre>';
                                            // print_r($value);
                                            // echo '</pre>';
                                        @endphp
                                        <div class="col-md-6 load-item-2">
                                            <a href="{{ url('/offers-detail') }}">
                                                <div class="popular_box">
                                                    <div class="img">
                                                        <img decoding="async" loading="lazy"
                                                            src="./assets/img/destination_img.jpg" alt="destination_img">
                                                    </div>
                                                    <div class="content">
                                                        <div class="d-flex align-items-center justify-content-between">
                                                            <div class="detail">
                                                                <h2>{{ $value->name }}</h2>
                                                            </div>
                                                            <div class="detail-rating">
                                                                <p class="d-flex align-items-center"><img decoding="async"
                                                                        loading="lazy" src="./assets/img/rating_star.png"
                                                                        alt="rating_star"> {{ $value->rating }}</p>
                                                            </div>
                                                        </div>

                                                        <div
                                                            class="d-flex align-items-center justify-content-between my-4">
                                                            <div class="icons_box text-center">
                                                                <img decoding="async" loading="lazy"
                                                                    src="{{ asset('assets/img/hotel-id.png') }}"
                                                                    alt="plane">
                                                                <h5>{{ $value->hotelId }}</h5>
                                                            </div>
                                                            <div class="icons_box text-center">
                                                                <a
                                                                    href="{{ 'https://www.google.com/maps?q=' . $value->geoCode->latitude . ',' . $value->geoCode->longitude }}">
                                                                    <img decoding="async" loading="lazy"
                                                                        src="{{ asset('assets/img/location.png') }}"
                                                                        alt="hotel">
                                                                </a>
                                                                <h5>Location</h5>
                                                            </div>
                                                            <div class="icons_box text-center">
                                                                <img decoding="async" loading="lazy"
                                                                    src="{{ asset('assets/img/distance.png') }}"
                                                                    alt="car">
                                                                <h5>{{ $value->distance->value . ' ' . $value->distance->unit }}
                                                                </h5>
                                                            </div>
                                                        </div>

                                                        <ul>
                                                            @php
                                                                if (
                                                                    isset($value->amenities) &&
                                                                    $value->amenities != ''
                                                                ) {
                                                                    $am_count = 1;
                                                                    foreach ($value->amenities as $amenity) {
                                                                        if ($am_count <= 3) {
                                                                            echo '<li>' .
                                                                                str_replace('_', ' ', $amenity) .
                                                                                '</li>';
                                                                        }
                                                                        $am_count++;
                                                                    }
                                                                }
                                                            @endphp
                                                        </ul>

                                                        <div class="arowbtn">

                                                            <svg xmlns="http://www.w3.org/2000/svg" width="32"
                                                                height="32" viewBox="0 0 32 32" fill="none">
                                                                <path d="M26.6663 16L5.33301 16" stroke="#141B34"
                                                                    stroke-width="1.5" stroke-linecap="round"
                                                                    stroke-linejoin="round" />
                                                                <path
                                                                    d="M20 9.33342C20 9.33342 26.6667 14.2433 26.6667 16.0001C26.6667 17.7569 20 22.6667 20 22.6667"
                                                                    stroke="#141B34" stroke-width="1.5"
                                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                            </svg>

                                                        </div>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                @else
                                    <div>
                                        <p>No flights/hotels found.</p>
                                    </div>
                                @endif
                            </div>
                            @if (!empty($_POST))
                                <div id="Load-More-2" class="text-center mt-5">
                                    <a href="javascript:;" class="yellow_btn meet-btn">Load More</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
