@extends('common.navbar')

@section('content')
<?php

function getRandomFoodImage() {
    $recipeId = rand(1, 500);
    $imageType = 'jpg';
    $size = '556x370';
    $imageUrl = "https://spoonacular.com/recipeImages/{$recipeId}-{$size}.{$imageType}";
    return $imageUrl;
}

// Check if it's an AJAX request for a new random image
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest') {
    // Return a JSON response with the new random image URL
    $response = array('imageUrl' => getRandomFoodImage());
    header('Content-Type: application/json');
    echo json_encode($response);
    exit();
}

?>

    <!DOCTYPE html>
<html>
<head>
    <title>Random Food Picture</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #86a58d; /* Green background color */
            text-align: center;
        }

        #food-picture {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<h1>Random Food Picture</h1>
<div id="food-picture">
    <img src="<?php echo getRandomFoodImage(); ?>" alt="Food Picture" width="400">
</div>
<button id="change-picture-btn">Change Picture</button>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {

        $('#change-picture-btn').on('click', function() {
            $.ajax({
                url: window.location.href,
                method: 'GET',
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                },
                success: function(response) {
                    $('#food-picture img').attr('src', response.imageUrl);
                },
                error: function() {
                    alert('Failed to fetch a new random image. Please try again.');
                }
            });
        });
    });
</script>
</body>
</html>
@endsection
