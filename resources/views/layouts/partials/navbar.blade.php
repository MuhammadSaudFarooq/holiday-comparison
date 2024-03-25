<header>
    <div class="top_head">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="logo">
                        <a href="./">
                            <img src="./assets/img/Logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="main-header">
                        <div class="containers">
                            <div class="menu-Bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="menuWrap">
                                        <ul class="header-menu">
                                            <li class="active_nav"><a href="{{ url('/') }}">Home</a></li>
                                            <li><a href="{{ url('destinations') }}">Destinations</a></li>
                                            <li><a href="{{ url('offers') }}">Offers</a></li>
                                            <li><a href="{{ url('about-us') }}">About Us</a></li>
                                            <li><a href="{{ url('faqs') }}">Faq's</a></li>
                                            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                                            @auth
                                                {{ auth()->user()->name }}
                                                <li><a href="{{ route('logout.perform') }}">Logout</a></li>
                                            @endauth

                                            @guest
                                                <li><a href="{{ route('login.perform') }}">Login / Register</a></li>
                                            @endguest

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
