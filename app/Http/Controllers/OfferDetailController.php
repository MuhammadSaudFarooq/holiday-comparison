<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OfferDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $client_id = '5VhFPKxKOSfpMmlofa8hAD4VCdxYgfrs';
        $client_secret = 'GgenTpGge3jL3XE5';
        $auth_url = "https://test.api.amadeus.com/v1/security/oauth2/token";

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
        // .\Get Auth Token

        if (isset($_GET['originLocationCode']) && isset($_GET['destinationLocationCode']) && isset($_GET['departureDate']) && isset($_GET['adults']) && isset($_GET['type']) && isset($_GET['id']) && $_GET['originLocationCode'] != '' && $_GET['destinationLocationCode'] != '' && $_GET['departureDate'] != '' && $_GET['adults'] != '' && $_GET['type'] != '' && $_GET['id'] != '') {
            $data = [];
            $id = $_GET['id'];
            $type = $_GET['type'];
            $access_token = '';

            if ($auth_res->access_token != '' && $type == 'flight') {
                $access_token = $auth_res->access_token;

                $originLocationCode = $_GET['originLocationCode'];
                $destinationLocationCode = $_GET['destinationLocationCode'];
                $departureDate = $_GET['departureDate'];
                $adults = $_GET['adults'];
                $children = (isset($_GET['children']) && $_GET['children'] != '') ? $_GET['children'] : '0';

                $flight_offers_url = "https://test.api.amadeus.com/v2/shopping/flight-offers?originLocationCode=" . $originLocationCode . "&destinationLocationCode=" . $destinationLocationCode . "&departureDate=" . $departureDate . "&adults=" . $adults . "&children=" . $children;

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
                // .\Get Flight Offers

                // Get Hotel List
                $city = $_GET['destinationLocationCode'];
                $radius = 5;
                $radiusUnit = 'KM';
                $amenities = 'SWIMMING_POOL, SPA, FITNESS_CENTER, AIR_CONDITIONING, RESTAURANT, PARKING, PETS_ALLOWED, AIRPORT_SHUTTLE, BUSINESS_CENTER, DISABLED_FACILITIES, WIFI, MEETING_ROOMS, NO_KID_ALLOWED, TENNIS, GOLF, KITCHEN, ANIMAL_WATCHING, BABY-SITTING, BEACH, CASINO, JACUZZI, SAUNA, SOLARIUM, MASSAGE, VALET_PARKING, BAR or LOUNGE, KIDS_WELCOME, NO_PORN_FILMS, MINIBAR, TELEVISION, WI-FI_IN_ROOM, ROOM_SERVICE, GUARDED_PARKG, SERV_SPEC_MENU';
                $rating = '1, 2, 3, 4, 5';
                $hotelSource = 'ALL';
                $hotel_by_city_url = "https://test.api.amadeus.com/v1/reference-data/locations/hotels/by-city?cityCode=" . $city . "&radius=" . $radius . "&radiusUnit=" . $radiusUnit . "&amenities=" . $amenities . "&ratings=" . $rating . "&hotelSource=" . $hotelSource;

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $access_token,
                ])->get($hotel_by_city_url);

                if ($response->successful()) {
                    $hotels = $response->json();
                    $data['hotel_data'][] = $hotels;
                }
                // .\Get Hotel List

                return view('pages.frontend.offer-detail', $data);
            } else {
                return view('pages.frontend.destinations');
            }
        } else if (isset($_GET['hotelId']) && isset($_GET['type']) && $_GET['hotelId'] != '' && $_GET['type'] != '') {
            $data = [];
            $hotelId = $_GET['hotelId'];
            $city = $_GET['city'];
            $radius = $_GET['radius'];
            $rating = $_GET['rating'];
            $radiusUnit = 'KM';
            $amenities = 'SWIMMING_POOL, SPA, FITNESS_CENTER, AIR_CONDITIONING, RESTAURANT, PARKING, PETS_ALLOWED, AIRPORT_SHUTTLE, BUSINESS_CENTER, DISABLED_FACILITIES, WIFI, MEETING_ROOMS, NO_KID_ALLOWED, TENNIS, GOLF, KITCHEN, ANIMAL_WATCHING, BABY-SITTING, BEACH, CASINO, JACUZZI, SAUNA, SOLARIUM, MASSAGE, VALET_PARKING, BAR or LOUNGE, KIDS_WELCOME, NO_PORN_FILMS, MINIBAR, TELEVISION, WI-FI_IN_ROOM, ROOM_SERVICE, GUARDED_PARKG, SERV_SPEC_MENU';
            $hotelSource = 'ALL';
            $type = $_GET['type'];
            $access_token = '';
            $hotelDetailByIdUrl = "https://test.api.amadeus.com/v1/reference-data/locations/hotels/by-hotels?hotelIds=" . $hotelId;
            $hotelListByCityUrl = "https://test.api.amadeus.com/v1/reference-data/locations/hotels/by-city?cityCode=" . $city . "&radius=" . $radius . "&radiusUnit=" . $radiusUnit . "&amenities=" . $amenities . "&ratings=" . $rating . "&hotelSource=" . $hotelSource;
            $hotelOfferUrl = 'https://test.api.amadeus.com/v3/shopping/hotel-offers?hotelIds=' . $hotelId;

            if ($auth_res->access_token != '' && $type == 'hotel') {
                $access_token = $auth_res->access_token;

                // Hotel Detail
                // $hotelDetailRes = Http::withHeaders([
                //     'Authorization' => 'Bearer ' . $access_token,
                // ])->get($hotelDetailByIdUrl);

                // if ($hotelDetailRes->successful()) {
                //     $hotelDetail = $hotelDetailRes->json();
                //     $data['hotel_data']['hotel_detail'] = $hotelDetail;
                // }

                // Hotel by City
                $hotelCityRes = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $access_token,
                ])->get($hotelListByCityUrl);

                if ($hotelCityRes->successful()) {
                    $hotelCity = $hotelCityRes->json();
                    $data['hotel_data']['hotel_city'] = $hotelCity['data'];
                }
                // .\Get Flight Offers

                foreach ($hotelCity['data'] as $hotelCityKey => $hotelCityValue) {
                    if ($hotelCityValue['hotelId'] == $hotelId)
                        $data['hotel_data']['hotel_detail'] = $hotelCityValue;
                }

                return view('pages.frontend.offer-detail', $data);
            } else {
                return view('pages.frontend.destinations');
            }
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
