<?php
require __DIR__ . '/vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai = new OpenAi('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');

$prompt = $_POST['prompt'];

$complete = $open_ai->image([
    "prompt" => $prompt,
    "n" => 3, //number of image
    "size" => "256x256", //Size of image
    "response_format" => "b64_json"
]);

echo $complete;
?>