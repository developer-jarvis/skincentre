<?php
header('Content-Type: application/json');

$api_key = "AIzaSyD9J_1CrI3_IFXZpiP8JVb_ssss3G3ND4c";
$place_id = "ChIJqXS5n7tZ7TkRAH79ne_ejZA";

$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id&fields=name,rating,reviews&key=$api_key";

$response = file_get_contents($url);
$data = json_decode($response, true);

$reviews = [];

if (isset($data['result']['reviews'])) {
    foreach ($data['result']['reviews'] as $review) {
        $reviews[] = [
            'author_name' => $review['author_name'],
            'rating' => $review['rating'],
            'text' => $review['text']
        ];
    }
}

echo json_encode($reviews);
?>