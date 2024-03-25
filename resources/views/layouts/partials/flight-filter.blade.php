@php
    $iata_codes = config('iata-min');
@endphp
<section class="flight_form_sec">
    <div class="container">
        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ (isset($type) && $type == 'flight') ? 'active' : ((!isset($type)) ? 'active' : '') }}" id="Flight-tab" data-toggle="tab" href="#Flight" role="tab"
                    aria-controls="Flight" aria-selected="true">Flights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (isset($type) && $type == 'hotel') ? 'active' : '' }}" id="Holidays-tab" data-toggle="tab" href="#Holidays" role="tab"
                    aria-controls="Holidays" aria-selected="false">Hotels</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane {{ (isset($type) && $type == 'flight') ? 'show active' : ((!isset($type)) ? 'show active' : '') }}" id="Flight" role="tabpanel" aria-labelledby="Flight-tab">
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
                                            {{ isset($_POST['airport']) && $_POST['airport'] == $value['iata'] ? 'selected' : '' }}>
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
                                            {{ isset($_POST['destination']) && $_POST['destination'] == $value['iata'] ? 'selected' : '' }}>
                                            {{ $value['name'] }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="box1">
                                <label for="">Departing </label>
                                <input type="date" name="date" id="book_date"
                                    value="{{ isset($_POST['date']) && $_POST['date'] != '' ? $_POST['date'] : date('Y-m-d') }}"
                                    min="{{ date('Y-m-d') }}" />
                            </div>

                            <div class="box1">
                                <label for="">Adults</label>
                                <input type="number" name="adults"
                                    value="{{ isset($_POST['adults']) && $_POST['adults'] != '' ? $_POST['adults'] : '1' }}"
                                    min="1" required>
                            </div>

                            <div class="box1">
                                <label for="">Children</label>
                                <input type="number" name="children"
                                    value="{{ isset($_POST['children']) && $_POST['children'] != '' ? $_POST['children'] : '0' }}"
                                    min="0">
                            </div>

                            <div class="box1">
                                <button type="submit">Search</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="tab-pane {{ (isset($type) && $type == 'hotel') ? 'show active' : '' }}" id="Holidays" role="tabpanel" aria-labelledby="Holidays-tab">
                <div class="flight_bg blue">
                    <form action="{{ url('destinations') }}" class="form1 hotel_form" method="post">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="type" value="hotel">
                        <div class="select_opt">
                            <div class="box1">
                                <label for="">City</label>
                                <select name="city" required>
                                    <option value="" disabled selected>Select city...</option>
                                    @foreach ($iata_codes as $key => $value)
                                        <option value="{{ $value['iata'] }}"
                                            {{ isset($_POST['city']) && $_POST['city'] == $value['iata'] ? 'selected' : '' }}>
                                            {{ $value['name'] }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class="box1">
                                <label for="">Radius</label>
                                <input type="number" name="radius"
                                    value="{{ isset($_POST['radius']) && $_POST['radius'] != '' ? $_POST['radius'] : '5' }}"
                                    min="1" required>
                            </div>

                            <div class="box1">
                                <label for="">Rating</label>
                                <select name="rating">
                                    <option value="" disabled selected>Choose rating...</option>
                                    @php
                                        for ($i = 1; $i <= 5; $i++) {
                                            echo "<option value='" . $i . "' ".((isset($_POST['rating']) && $_POST['rating'] == $i) ? 'selected' : '').">" . $i . '</option>';
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
