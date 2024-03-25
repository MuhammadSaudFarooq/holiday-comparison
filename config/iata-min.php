<?php

$iata_codes = [
    [
        "iata" => "ATL",
        "name" => "Hartsfield-Jackson Atlanta International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "DXB",
        "name" => "Dubai International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "DFW",
        "name" => "Dallas Fort Worth International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "LHR",
        "name" => "Heathrow Airport",
        "type" => "airport",
    ],
    [
        "iata" => "HND",
        "name" => "Tokyo Haneda Airport",
        "type" => "airport",
    ],
    [
        "iata" => "DEN",
        "name" => "Denver International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "IST",
        "name" => "Istanbul Airport",
        "type" => "airport",
    ],
    [
        "iata" => "LAX",
        "name" => "Los Angeles International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "ORD",
        "name" => "O'Hare International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "DEL",
        "name" => "Indira Gandhi International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "CGK",
        "name" => "Soekarno-Hatta International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "CDG",
        "name" => "Charles de Gaulle Airport",
        "type" => "airport",
    ],
    [
        "iata" => "CAN",
        "name" => "Guangzhou Baiyun International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "JFK",
        "name" => "John F. Kennedy International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "AMS",
        "name" => "Amsterdam Airport Schiphol",
        "type" => "airport",
    ],
    [
        "iata" => "LAS",
        "name" => "Harry Reid International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "MAD",
        "name" => "Adolfo Suárez Madrid-Barajas Airport",
        "type" => "airport",
    ],
    [
        "iata" => "FRA",
        "name" => "Frankfurt Airport",
        "type" => "airport",
    ],
    [
        "iata" => "SIN",
        "name" => "Singapore Changi Airport",
        "type" => "airport",
    ],
    [
        "iata" => "MCO",
        "name" => "Orlando International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "ICN",
        "name" => "Seoul Incheon International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "PVG",
        "name" => "Shanghai Pudong International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "CLT",
        "name" => "Charlotte Douglas International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "PEK",
        "name" => "Beijing Capital International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "SZX",
        "name" => "Shenzhen Bao'an International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "MIA",
        "name" => "Miami International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "BKK",
        "name" => "Suvarnabhumi Airport",
        "type" => "airport",
    ],
    [
        "iata" => "BOM",
        "name" => "Chhatrapati Shivaji Maharaj International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "SEA",
        "name" => "Seattle-Tacoma International Airport",
        "type" => "airport",
    ],
    [
        "iata" => "SFO",
        "name" => "San Francisco International Airport",
        "type" => "airport",
    ],

];

$iata_codes_upd = [];

foreach ($iata_codes as $key => $value) {
    if ($value['name'] != null) {
        $iata_codes_upd[] = $value;
    }
}

$iata_values = array_column($iata_codes_upd, 'iata');
array_multisort($iata_values, SORT_ASC, $iata_codes_upd);
return $iata_codes_upd;
