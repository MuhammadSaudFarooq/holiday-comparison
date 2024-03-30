@php
    $iata_codes = config('iata-min');
@endphp
<section class="flight_form_sec">
    <div class="container">
        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ isset($type) && $type == 'flight' ? 'active' : (!isset($type) ? 'active' : '') }}"
                    id="Flight-tab" data-toggle="tab" href="#Flight" role="tab" aria-controls="Flight"
                    aria-selected="true">Flights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ isset($type) && $type == 'hotel' ? 'active' : '' }}" id="Holidays-tab"
                    data-toggle="tab" href="#Holidays" role="tab" aria-controls="Holidays"
                    aria-selected="false">Hotels</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane {{ isset($type) && $type == 'flight' ? 'show active' : (!isset($type) ? 'show active' : '') }}"
                id="Flight" role="tabpanel" aria-labelledby="Flight-tab">
                <div class="flight_bg">
                    <form action="{{ url('destinations') }}" class="form1 flight_form" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="type" value="flight">
                        <div class="select_opt">
                            <div class="box1">
                                <label for="">Departing From?</label>
                                <select name="airport" required>
                                    <option value="" disabled selected>Select departure airport</option>
                                    @foreach ($iata_codes as $key => $value)
                                        <option value="{{ $value['iata'] }}"
                                            {{ (isset($_POST['airport']) && $_POST['airport'] == $value['iata']) || (isset($_GET['originLocationCode']) && $_GET['originLocationCode'] == $value['iata']) ? 'selected' : '' }}>
                                            {{ $value['name'] }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="box1">
                                <label for="">Where To?</label>
                                <select name="destination" id="destination" required>
                                    <option value="" disabled selected>Select destination airport</option>
                                    @foreach ($iata_codes as $key => $value)
                                        <option value="{{ $value['iata'] }}"
                                            {{ (isset($_POST['destination']) && $_POST['destination'] == $value['iata']) || (isset($_GET['destinationLocationCode']) && $_GET['destinationLocationCode'] == $value['iata']) ? 'selected' : '' }}>
                                            {{ $value['name'] }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="box1">
                                <label for="">Departing </label>
                                @php
                                    if (isset($_POST['date']) && $_POST['date'] != '') {
                                        $filter_date = $_POST['date'];
                                    } elseif (isset($_GET['departureDate']) && $_GET['departureDate'] != '') {
                                        $filter_date = $_GET['departureDate'];
                                    } else {
                                        $filter_date = date('Y-m-d');
                                    }
                                @endphp
                                <input type="date" name="date" id="book_date" value="{{ $filter_date }}"
                                    min="{{ date('Y-m-d') }}" />
                            </div>

                            <div class="box1">
                                <label for="">Adults</label>
                                @php
                                    if (isset($_POST['adults']) && $_POST['adults'] != '') {
                                        $filter_adults = $_POST['date'];
                                    } elseif (isset($_GET['adults']) && $_GET['adults'] != '') {
                                        $filter_adults = $_GET['adults'];
                                    } else {
                                        $filter_adults = '1';
                                    }
                                @endphp
                                <input type="number" name="adults" value="{{ $filter_adults }}" min="1"
                                    required>
                            </div>

                            <div class="box1">
                                <label for="">Children</label>
                                @php
                                    if (isset($_POST['children']) && $_POST['children'] != '') {
                                        $filter_children = $_POST['date'];
                                    } elseif (isset($_GET['children']) && $_GET['children'] != '') {
                                        $filter_children = $_GET['children'];
                                    } else {
                                        $filter_children = '0';
                                    }
                                @endphp
                                <input type="number" name="children" value="{{ $filter_children }}" min="0">
                            </div>

                            <div class="box1">
                                <button type="submit">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="tab-pane {{ isset($type) && $type == 'hotel' ? 'show active' : '' }}" id="Holidays"
                role="tabpanel" aria-labelledby="Holidays-tab">
                <div class="flight_bg blue">
                    <form action="{{ url('destinations') }}" class="form1 hotel_form" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="type" value="hotel">
                        <div class="select_opt">
                            <div class="box1">
                                <label for="">City</label>
                                @php
                                    $city = '';
                                    if (isset($_POST['city']) && $_POST['city'] != '') {
                                        $city = $_POST['city'];
                                    } elseif (isset($_GET['city']) && $_GET['city'] != '') {
                                        $city = $_GET['city'];
                                    }
                                @endphp
                                <select name="city" required>
                                    <option value="" disabled selected>Select city...</option>
                                    @foreach ($iata_codes as $key => $value)
                                        <option value="{{ $value['iata'] }}"
                                            {{ $city == $value['iata'] ? 'selected' : '' }}>
                                            {{ $value['name'] }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="box1">
                                <label for="">Radius</label>
                                @php
                                    $radius = '';
                                    if (isset($_POST['radius']) && $_POST['radius'] != '') {
                                        $radius = $_POST['radius'];
                                    } elseif (isset($_GET['radius']) && $_GET['radius'] != '') {
                                        $radius = $_GET['radius'];
                                    }
                                @endphp
                                <input type="number" name="radius"
                                    value="{{ $radius != '' ? $radius : '5' }}" min="1" required>
                            </div>

                            <div class="box1">
                                <label for="">Rating</label>
                                @php
                                    $rating = '';
                                    if (isset($_POST['rating']) && $_POST['rating'] != '') {
                                        $rating = $_POST['rating'];
                                    } elseif (isset($_GET['rating']) && $_GET['rating'] != '') {
                                        $rating = $_GET['rating'];
                                    }
                                @endphp
                                <select name="rating">
                                    <option value="1, 2, 3, 4, 5" selected>Choose rating...</option>
                                    @php
                                        for ($i = 1; $i <= 5; $i++) {
                                            echo "<option value='" .
                                                $i .
                                                "' " .
                                                ($rating == $i ? 'selected' : '') .
                                                '>' .
                                                $i .
                                                '</option>';
                                        }
                                    @endphp
                                </select>
                            </div>

                            <div class="box1">
                                <button type="submit">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>
