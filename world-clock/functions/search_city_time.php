<?php
function searchCityData($code)
{
    require __DIR__ . '/../config/cities.php';

    if (isset($cities[$code])) {
        $city = $cities[$code];
        $dateTime = new DateTime('now', new DateTimeZone($city['time_zone']));
        $city['time'] = $dateTime->format('H:i');

        return $city;
    }
}
