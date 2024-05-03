<?php
    $db = [
        [
            'id' => 1,
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4,
            'image' => './imgs/hotel1.avif'
        ],
        [
            'id' => 2,
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2,
            'image' => './imgs/hotel2.avif'
        ],
        [
            'id' => 3,
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1,
            'image' => './imgs/hotel3.avif'
        ],
        [
            'id' => 4,
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5,
            'image' => './imgs/hotel4.avif'
        ],
        [
            'id' => 5,
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50,
            'image' => './imgs/hotel5.avif'
        ],
        [
            'id' => 6,
            'name' => 'Hotel Splendido',
            'description' => 'Hotel Splendido Descrizione',
            'parking' => true,
            'vote' => 3,
            'distance_to_center' => 8,
            'image' => './imgs/hotel6.avif'
        ],
        [
            'id' => 7,
            'name' => 'Hotel Paradiso',
            'description' => 'Hotel Paradiso Descrizione',
            'parking' => false,
            'vote' => 4,
            'distance_to_center' => 3.2,
            'image' => './imgs/hotel7.avif'
        ],
        [
            'id' => 8,
            'name' => 'Hotel Miramare',
            'description' => 'Hotel Miramare Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 6.8,
            'image' => './imgs/hotel8.avif'
        ],
        [
            'id' => 9,
            'name' => 'Hotel Aurora',
            'description' => 'Hotel Aurora Descrizione',
            'parking' => false,
            'vote' => 3,
            'distance_to_center' => 2.5,
            'image' => './imgs/hotel9.avif'
        ],
        [
            'id' => 10,
            'name' => 'Hotel Mediterraneo',
            'description' => 'Hotel Mediterraneo Descrizione',
            'parking' => true,
            'vote' => 5,
            'distance_to_center' => 12,
            'image' => './imgs/hotel10.avif'
        ]
    ];

    function getHotelByID($db) {
        $hotel = array_filter($db, function ($hotel) {
            return $hotel['id'] == $_GET['id'];
        });
        $detail = array_shift($hotel);
        return $detail;
    }