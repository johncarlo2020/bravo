<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            background-image: url('{{ asset('images/bgstart.webp') }}');

            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
            text-align: center;
            padding-top: 50px;
            box-sizing: border-box;
        }

        .start-btn {
            background-color: #5B2A82;
            color: white;
            padding: 7px 40px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 300px;
        }

        .start-btn:hover {
            background-color: #4A236A;
        }

        /* Responsive styles */
        @media (max-width: 400px) {
            body {
                padding-top: 20px;
                height: auto;
                min-height: 100vh;
            }

            .start-btn {
                font-size: 16px;
                padding: 10px 40px;
                margin-top: 300px
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <a href="{{ route('form') }}"><button class="start-btn">Start</button></a>

    </div>

</body>

</html>
