@extends('errors::layout')
    <!DOCTYPE html>
<html>
<head>
    <title>Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 36px;
            color: #333;
            margin-top: 100px;
        }

        p {
            font-size: 18px;
            color: #777;
            margin-top: 20px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
<h1>500 - Internal Server Error</h1>
<p>error code: 500</p>
<p>Oops! Something went wrong.
    Our team has been notified and
    is working on fixing the issue</p>
<p>You can go back to the <a href="/">home page</a>.</p>
</html>
