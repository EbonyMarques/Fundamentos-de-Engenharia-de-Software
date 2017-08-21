<?php

function curl($url) {

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

if (true) {
    //$urlContents = curl("http://api.openweathermap.org/data/2.5/weather?q=3453926&type=accurate&appid=8045fcb7d8cd01bc3ae907e0defaefef&mode=json");
    //$urlContents = curl("http://api.openweathermap.org/data/2.5/forecast?id=524901&type=accurate&appid=8045fcb7d8cd01bc3ae907e0defaefef");
    $urlContents = curl("http://api.openweathermap.org/data/2.5/weather?id=6320527&APPID=8045fcb7d8cd01bc3ae907e0defaefef");
    $weatherArray = json_decode($urlContents, true);

    //var_dump($weatherArray["weather"]);
    $weather = "The weather in Piedade, PE is currently " . $weatherArray["weather"][0]["description"] . ".";
    var_dump($weather);

    $uvConteudo = curl("http://api.openweathermap.org/data/2.5/uvi?appid=8045fcb7d8cd01bc3ae907e0defaefef&lat=-8.14568&lon=-34.973808");
    $uvInformacoes = json_decode($uvConteudo, true);
    var_dump($uvInformacoes);

}

?>