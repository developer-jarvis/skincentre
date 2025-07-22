<?php
$apiKey = "AIzaSyAQmH8jiXi4vj7Kf_H8R_ExVYsb282yVg8";
$channelId = "UC1ABnHdhni4dGwjtP3bXlAg";
$maxResults = 100; // जितने videos दिखाने हैं

$url = "https://www.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&part=snippet,id&order=date&maxResults=$maxResults";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

$videos = [];

foreach ($data['items'] as $item) {
    if (isset($item['id']['videoId'])) {
        $videos[] = [
            'videoId' => $item['id']['videoId'],
            'title' => $item['snippet']['title'],
            'thumbnail' => $item['snippet']['thumbnails']['medium']['url']
        ];
    }
}

header('Content-Type: application/json');
echo json_encode($videos);
?>