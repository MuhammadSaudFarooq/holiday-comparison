@extends('layouts.app-master')
@section('content')
    @include('layouts.partials.hero-section')
    <div class="shape_mainsec">
        @include('layouts.partials.flight-filter')
        <section class="offer_detail_sec">
            <div class="container">
                @if (isset($flight_data) && isset($hotel_data) && !empty($flight_data) && !empty($hotel_data))
                    @php
                        $index = (int) $_GET['id'] - 1;
                        $flight_detail = $flight_data[1][$index];
                        $flight_extras = $flight_data[2];
                        // echo '<pre>';
                        // print_r($flight_data);
                        // print_r($hotel_data);
                        // echo '</pre>';
                    @endphp
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <div class="head_one">
                                <h2>Summer 2024 Holidays</h2>
                            </div>
                        </div>
                        {{-- <div class="col-md-5">
                        <div class="sort-data">
                            <label for="text">Sort By</label>
                            <select name="sort">
                                <option value="">Default</option>
                                <option value="most-popular">Most Popular</option>
                                <option value="hight-to-low">Price: Hight to Low</option>
                                <option value="low-to-high">Price: Low to High</option>
                            </select>
                        </div>
                    </div> --}}
                    </div>
                    <div class="inner-data">
                        <div class="detail_box_img">
                            <div class="imgs">
                                <img decoding="async" loading="lazy" src="./assets/img/detail_box_img1.jpg"
                                    alt="detail_box_img1">
                            </div>
                            <div class="content">
                                <h2>
                                    @php
                                        $dateString = date($flight_detail->lastTicketingDate);
                                        $dateObj = new DateTime($dateString);
                                        $desiredFormat = 'D d M Y';
                                        $formattedDate = $dateObj->format($desiredFormat);
                                        echo 'Flight: ' . $formattedDate;
                                    @endphp
                                </h2>
                                {{-- <div class="rating">
                                    <img decoding="async" loading="lazy" src="./assets/img/rating_star_full.png"
                                        alt="rating_star_full">
                                    <span>
                                        4.7
                                    </span>
                                </div> --}}
                                {{-- <a href="#" class="white_btn">View Deal</a> --}}
                            </div>
                        </div>
                        <div class="detail_box-main-cont">
                            <div class="row my-5">
                                <div class="col-md-6">
                                    <div class="left">
                                        <div class="d-flex align-items-center">
                                            <div class="icons_box text-center">
                                                <img decoding="async" loading="lazy"
                                                    src="{{ asset('assets/img/seat.png') }}" alt="plane">
                                                <h5>{{ (int) $flight_detail->numberOfBookableSeats > 1 ? $flight_detail->numberOfBookableSeats . ' Seats' : $flight_detail->numberOfBookableSeats . ' Seat' }}
                                                </h5>
                                            </div>
                                            <div class="icons_box text-center">
                                                <img decoding="async" loading="lazy"
                                                    src="{{ asset('assets/img/duration.png') }}" alt="hotel">
                                                <h5>
                                                    @php
                                                        $dur = $flight_detail->itineraries[0]->duration;
                                                        $d = new DateInterval($dur);
                                                        $duration = $d->format('%h hour %i min');
                                                        $duration = str_replace(' 0 min', '', $duration);
                                                        $duration = str_replace('0 hour', '', $duration);
                                                    @endphp
                                                    {{ $duration }}
                                                </h5>
                                            </div>
                                            <div class="icons_box text-center">
                                                <img decoding="async" loading="lazy"
                                                    src="{{ asset('assets/img/flight-route.png') }}" alt="car">
                                                <h5>{{ count($flight_detail->itineraries[0]->segments) }} Route
                                                </h5>
                                            </div>
                                            {{-- <div class="icons_box text-center">
                                                <img decoding="async" loading="lazy" src="./assets/img/manbig.png"
                                                    alt="manbig">
                                                <h5>4 Activities</h5>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="right">
                                        <div class="d-flex align-items-center justify-content-end ">
                                            <div class="price">
                                                <small>Per person</small>
                                                <p>£{{ number_format((int) $flight_detail->price->total) }} </p>
                                            </div>
                                            <div class="price">
                                                <small>Fare Type</small>
                                                <p>{{ $flight_detail->pricingOptions->fareType[0] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="post-content">
                                <h3>Itineraries</h3>
                                @php
                                    $count = 1;
                                @endphp
                                @foreach ($flight_detail->itineraries[0]->segments as $segment_key => $segment_value)
                                    <div>
                                        <h6>{{ 'Segment: ' . $count }}</h6>
                                        <p>
                                            <b>Departure (IATA Code):</b> {{ $segment_value->departure->iataCode }}<br />
                                            <b>Departure Time:</b> {{ $segment_value->departure->at }}<br />
                                            <b>Arrival (IATA Code):</b> {{ $segment_value->arrival->iataCode }}<br />
                                            <b>Arrival Time:</b> {{ $segment_value->arrival->iataCode }}<br />
                                            <b>Number Of Stops:</b> {{ $segment_value->numberOfStops }}<br />
                                            <b>Carrier Code:</b> {{ $segment_value->carrierCode }}<br />
                                            <b>Number:</b> {{ $segment_value->number }}<br />
                                            <b>Aircraft Code:</b> {{ $segment_value->aircraft->code }}<br />
                                            <b>Operating Carrier Code:</b>
                                            {{ $segment_value->operating->carrierCode }}<br />
                                        </p>
                                    </div>
                                    @php
                                        $count++;
                                    @endphp
                                @endforeach

                                <h3>
                                    Flight Extras
                                </h3>
                                <ul class="flight_detail">
                                    @foreach ($flight_extras as $k => $v)
                                        @if ($k == 'aircraft')
                                            <b>Aircraft</b>
                                            @php
                                                $a_count = 1;
                                                foreach ($flight_extras->aircraft as $aircraft) {
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
                                                foreach ($flight_extras->carriers as $carriers) {
                                                    if ($c_count <= 3) {
                                                        echo '<li>' . $carriers . '</li>';
                                                    }

                                                    $c_count++;
                                                }
                                            @endphp
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="inner-listing-data">
                        <h2>Hotels</h2>
                        @foreach ($hotel_data[0] as $key => $value)
                            <div class="cards">
                                <h3>{{ $value->name }}</h3>
                                <b>Rating:</b> {{ $value->rating }}<br />
                                <b>Distance:</b>
                                {{ $value->distance->value . ' ' . $value->distance->unit }}<br />
                                <b>View Location:</b> <a
                                    href="{{ 'https://www.google.com/maps?q=' . $value->geoCode->latitude . ',' . $value->geoCode->longitude }}" target="_blank">View</a><br />
                                <b>Country Code:</b> {{ $value->address->countryCode }}<br />
                                <b>Amenities:</b>
                                @foreach ($value->amenities as $item)
                                    <li>{{ str_replace('_', ' ', $item) }}</li>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                @else
                    <h3>No data available.</h3>
                @endif
            </div>
        </section>
    </div>
@endsection
