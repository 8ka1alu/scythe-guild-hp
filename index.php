<?php

header('Location: /login.php');
$data = "https://spreadsheets.google.com/feeds/list/1xV4Ajow8nKEIQb5Q8YkFEy3DTKiyhubZm7otB0LefCA/od6/public/values?alt=json";
$json = file_get_contents($data);
$json_decode = json_decode($json);

$names = $json_decode->feed->entry;

foreach ($names as $name) {
    echo $name->{'gsx$番号'}->{'$t'};
    echo $name->{'gsx$id'}->{'$t'};
    echo $name->{'gsx$pass'}->{'$t'};
        echo ",";
}
?>
