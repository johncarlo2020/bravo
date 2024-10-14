<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>End Page</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            height: 100vh;
            background-image: url('{{ asset('images/bgend.webp') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #popup {
            display: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 350px;
            background-color: rgba(255, 255, 255, 255);
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        #popup img {
            width: 100%;
            /* Make the image responsive */
            border-radius: 10px;
        }
    </style>
</head>

<body>

    <div id="popup">
        <img src="{{ asset('images/popup.webp') }}" alt="Popup Image">
    </div>

    <script>
        // Show the popup after 4 seconds
        setTimeout(function() {
            document.getElementById('popup').style.display = 'block';
        }, 2000);
    </script>

</body>

</html>
