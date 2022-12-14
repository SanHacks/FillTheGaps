<?php
//Based on tutorials and scripts at:
// https://github.com/karamusluk/OpenAI-GPT-3-API-Wrapper-for-PHP-8/blob/master/OpenAI.php
// https://githubhelp.com/karamusluk/OpenAI-GPT-3-API-Wrapper-for-PHP-8
//Thanks to this for hints about connecting PHP and JavaScript:
// https://stackoverflow.com/questions/15757750/how-can-i-call-php-functions-by-javascript
require_once "Openapi.php";
$apikey = $_GET["apikey"];
$instance = new OpenAIownapikey($apikey);
$prompt = $_GET["prompt"];
$instance->setDefaultEngine("text-davinci-002"); // by default it is davinci
$res = $instance->complete(
 $prompt,
 100,
 [
 "temperature"   => 0.9,
        "start_text"    => "\nA:",
        "restart_text"  => "\n\nQ: "
    ]
 ]
);
echo $res;
?>