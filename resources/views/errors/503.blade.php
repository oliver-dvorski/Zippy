<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
        }

        h1 {
            font-weight: 100;
        }

        hr {
            width: 100px;
            border: 1px solid #fff;
            margin: 40px 0;
        }

    </style>
</head>
<body>
    <div class="flex">
        <h1>{{ config('app.name', 'Goat') }} is temporarily in mantenance mode</h1>
        <hr>
        <p>Please reload this page later</p>
    </div>
</body>
</html>