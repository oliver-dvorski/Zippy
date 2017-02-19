<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} - 404</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:100" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Raleway', sans-serif;
            font-size: 32px;
            text-align: center;
            color: #383838;
            background: #42afe3;
            color: #fff;
            font-weight: 100;
        }

        .flex {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            width: 700px;
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-weight: 100;
            font-size: 2em;
            margin-bottom: 20px;
        }

        hr {
            width: 100px;
            border: 1px solid #fff;
            margin: 40px 0;
        }

        iframe {
            max-width: 90%;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <div class="flex">
        <h1>Error: 404</h1>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Sagg08DrO5U" frameborder="0" allowfullscreen></iframe>
        <hr>
        <p>Enjoy the music and try reloading the page once the video ends</p>
    </div>
</body>
</html>