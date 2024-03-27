<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfferDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (isset($_GET['originLocationCode']) && isset($_GET['destinationLocationCode']) && isset($_GET['departureDate']) && isset($_GET['adults']) && isset($_GET['type']) && isset($_GET['id']) && $_GET['originLocationCode'] != '' && $_GET['destinationLocationCode'] != '' && $_GET['departureDate'] != '' && $_GET['adults'] != '' && $_GET['type'] != '' && $_GET['id'] != '') {
            $data = [];
            $uni_id = $_GET['id'];
            $originLocationCode = $_GET['originLocationCode'];
            $destinationLocationCode = $_GET['destinationLocationCode'];
            $departureDate = $_GET['departureDate'];
            $adults = $_GET['adults'];
            $children = (isset($_GET['children']) && $_GET['children'] != '') ? $_GET['children'] : '0';
            $auth_url = "https://test.api.amadeus.com/v1/security/oauth2/token";
            $client_id = '5VhFPKxKOSfpMmlofa8hAD4VCdxYgfrs';
            $client_secret = 'GgenTpGge3jL3XE5';
            $access_token = '';

            // Get Auth Token
            $auth_ch = curl_init();
            curl_setopt($auth_ch, CURLOPT_URL, $auth_url);
            curl_setopt($auth_ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($auth_ch, CURLOPT_POST, true);
            curl_setopt($auth_ch, CURLOPT_POSTFIELDS, http_build_query([
                'grant_type' => 'client_credentials',
                'client_id' => $client_id,
                'client_secret' => $client_secret
            ]));
            curl_setopt($auth_ch, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded'
            ]);
            $auth_res = curl_exec($auth_ch);
            if ($auth_res === false) {
                echo 'Curl error: ' . curl_error($auth_ch);
            }
            curl_close($auth_ch);
            $auth_res = json_decode($auth_res);
            // echo "<pre>";
            // echo "----- Auth -----<br>";
            // print_r($auth_res);
            // echo "</pre>";
            // .\Get Auth Token

            $flight_offers_url = "https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=" . $originLocationCode . "&destinationLocationCode=" . $destinationLocationCode . "&departureDate=" . $departureDate . "&adults=" . $adults . "&children=" . $children;

            if ($auth_res->access_token != '') {
                $access_token = $auth_res->access_token;

                // Get Flight Offers
                $flight_offers_ch = curl_init();
                curl_setopt($flight_offers_ch, CURLOPT_URL, $flight_offers_url);
                curl_setopt($flight_offers_ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($flight_offers_ch, CURLOPT_HTTPHEADER, [
                    'Authorization: Bearer ' . $access_token
                ]);
                $flight_offers_res = curl_exec($flight_offers_ch);
                if ($flight_offers_res === false) {
                    echo 'Curl error: ' . curl_error($flight_offers_ch);
                }
                curl_close($flight_offers_ch);
                $flight_offers_res = json_decode($flight_offers_res);
                foreach ($flight_offers_res as $key => $value) {
                    $data['flight_data'][] = $value;
                }
                // $data['type'] = 'flight';
                // echo "<pre>";
                // echo "----- Flight Offer -----<br>";
                // print_r($flight_offers_res->data);
                // echo "</pre>";
                // die();
                // .\Get Flight Offers
            }

            $city = $_GET['destinationLocationCode'];
            $radius = 5;
            $radiusUnit = 'KM';
            $amenities = 'SWIMMING_POOL, SPA, FITNESS_CENTER, AIR_CONDITIONING, RESTAURANT, PARKING, PETS_ALLOWED, AIRPORT_SHUTTLE, BUSINESS_CENTER, DISABLED_FACILITIES, WIFI, MEETING_ROOMS, NO_KID_ALLOWED, TENNIS, GOLF, KITCHEN, ANIMAL_WATCHING, BABY-SITTING, BEACH, CASINO, JACUZZI, SAUNA, SOLARIUM, MASSAGE, VALET_PARKING, BAR or LOUNGE, KIDS_WELCOME, NO_PORN_FILMS, MINIBAR, TELEVISION, WI-FI_IN_ROOM, ROOM_SERVICE, GUARDED_PARKG, SERV_SPEC_MENU';
            $rating = '1, 2, 3, 4, 5';
            $hotelSource = 'ALL';
            $hotel_by_city_url = "https://test.api.amadeus.com/v1/reference-data/locations/hotels/by-city?cityCode=" . $city . "&radius=" . $radius . "&radiusUnit=" . $radiusUnit . "&amenities=" . $amenities . "&ratings=" . $rating . "&hotelSource=" . $hotelSource;

            if ($auth_res->access_token != '') {
                $access_token = $auth_res->access_token;

                // Get Hotels by City
                $hotel_by_city_ch = curl_init();
                curl_setopt($hotel_by_city_ch, CURLOPT_URL, $hotel_by_city_url);
                curl_setopt($hotel_by_city_ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($hotel_by_city_ch, CURLOPT_HTTPHEADER, [
                    'Authorization: Bearer ' . $access_token
                ]);
                $hotel_by_city_res = curl_exec($hotel_by_city_ch);
                if ($hotel_by_city_res === false) {
                    echo 'Curl error: ' . curl_error($hotel_by_city_ch);
                }
                curl_close($hotel_by_city_ch);
                $hotel_by_city_res = json_decode($hotel_by_city_res);
                foreach ($hotel_by_city_res as $value) {
                    $data['hotel_data'][] = $value;
                }
                // $data['type'] = 'hotel';
                // echo "<pre>";
                // echo "----- Hotel by City -----<br>";
                // print_r($hotel_by_city_res);
                // echo "</pre>";
                // .\Get Hotels by City
            }

            // echo "<pre>";
            // echo "----- Combine Data -----<br>";
            // print_r($data);
            // echo "</pre>";
            return view('pages.frontend.offer-detail', $data);
        } else {
            return view('pages.frontend.destinations');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
