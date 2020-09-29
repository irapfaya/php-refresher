<?php
$images = [
    [
        'file' => 'brief',
        'caption' => 'Workplace chilling tins'
    ],
    [
        'file' => 'desk',
        'caption' => 'Lovely Overhead view'
    ],
    [
        'file' => 'fan',
        'caption' => 'Rainbow styled classic fan coming back from energy management meeting'
    ],
    [
        'file' => 'macbook',
        'caption' => 'The pride of apple computers'
    ],
    [
        'file' => 'wireframe',
        'caption' => 'Mockup design stage one'
    ],
    [
        'file' => 'teal',
        'caption' => 'Hollywood grading style'
    ],
    [
        'file' => 'team',
        'caption' => 'we just getting started'
    ],
    [
        'file' => 'window',
        'caption' => 'Early Sunny Day at work'
    ],
];
$i = random_int(0, count($images) - 1);
$selectedImage = "images/{$images[$i]['file']}.jpg";
$caption = $images[$i]['caption'];

if (file_exists($selectedImage) && is_readable($selectedImage)) {
    $imageSize = getimagesize($selectedImage);
}
