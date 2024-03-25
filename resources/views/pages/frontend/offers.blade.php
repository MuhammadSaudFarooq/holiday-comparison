@extends('layouts.app-master')

@section('content')
    @include('layouts.partials.hero-section')
    <div class="shape_mainsec">
        @include('layouts.partials.flight-filter')

        <section class="holiday_deal_sec">
            <div class="container">
                <div class="head_one">
                    <h2>Holiday Deals</h2>
                </div>
                <div class="row holiday_deal_sec_inner">
                    <div class="col-md-6 load-item-1">
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
                    </div>
                    <div class="col-md-6 load-item-1">
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
                    </div>

                    <div class="col-md-6 load-item-1">
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
                    </div>
                    <div class="col-md-6 load-item-1">
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
                    </div>

                    <div class="col-md-6 load-item-1">
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
                    </div>
                    <div class="col-md-6 load-item-1">
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

                    <div class="col-md-6 load-item-1">
                        <div class="holiday_deal_box">
                            <a href="#">
                                <div class="holiday_img_box">
                                    <img decoding="async" loading="lazy" src="./assets/img/destination_img5.jpg"
                                        alt="destination_img5">
                                    <div class="content">
                                        <h3>
                                            All-Inclusive <br> Holidays
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6 load-item-1">
                        <div class="holiday_deal_box">
                            <a href="#">
                                <div class="holiday_img_box">
                                    <div class="icon_imgs">
                                        <div class="inner">
                                            <p>20% OFF</p>
                                        </div>
                                    </div>
                                    <img decoding="async" loading="lazy" src="./assets/img/destination_img.jpg"
                                        alt="destination_img">
                                    <div class="content">
                                        <h3>
                                            Winter <br> Holidays
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <div id="Load-More-1" class="text-center mt-5">
                    <a href="javascript:;" class="yellow_btn meet-btn">Load More</a>
                </div>







            </div>
        </section>

    </div>
@endsection
