<?php

function getImageUrl($recipeId, $imageType, $size) {
    $basePath = "https://spoonacular.com/recipeImages/";
    $imageUrl = $basePath . $recipeId . "-" . $size . "." . $imageType;
    return $imageUrl;
}

$recipeId1 = rand(1, 100000);
$recipeId2 = rand(1, 100000);
$recipeId3 = rand(1, 100000);

?>

@extends('common.navbar')

@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Slideshow Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #86a58d; /* Green background color */
        }

        .slideshow-container {
            position: relative;
            max-width: 100%;
            margin: 20px auto;
        }

        .slide {
            display: none;
        }

        .slide img {
            width: 70%; /* Adjust the width as needed */
            length: 50%;
            height: auto;
            margin: 0 auto;
        }

        .slide-caption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.5);
            color: #fff;
            padding: 10px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="slideshow-container">
                <div class="slide">
                    <img src="{{ getImageUrl($recipeId1, 'jpg', '556x370') }}" alt="Slide 1">
                    <div class="slide-caption">
                        <h3>Slide 1</h3>
                        <p>This is the caption for slide 1.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ getImageUrl($recipeId2, 'jpg', '556x370') }}" alt="Slide 2">
                    <div class="slide-caption">
                        <h3>Slide 2</h3>
                        <p>This is the caption for slide 2.</p>
                    </div>
                </div>
                <div class="slide">
                    <img src="{{ getImageUrl($recipeId3, 'jpg', '556x370') }}" alt="Slide 3">
                    <div class="slide-caption">
                        <h3>Slide 3</h3>
                        <p>This is the caption for slide 3.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Initialize the slideshow
        $('.slideshow-container').each(function() {
            var slides = $(this).find('.slide');
            var currentSlide = 0;

            // Function to show the next slide
            function showNextSlide() {
                slides.eq(currentSlide).fadeOut();
                currentSlide = (currentSlide + 1) % slides.length;
                slides.eq(currentSlide).fadeIn();
            }

            // Start the slideshow
            slides.hide();
            slides.first().show();
            setInterval(showNextSlide, 3000);
        });
    });
</script>
</body>
</html>
@endsection
