<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            background-image: url('{{ asset('images/bgresult.webp') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: #4A236A;
        }

        h1 {
            font-size: 24px;
            color: #5B2A82;
            margin: 0;
        }

        .content {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            bottom: 10px;
            top: 31%;
        }

        .content>* {
            margin-bottom: 5px;
        }

        .poster {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }

        .download-btn {
            padding: 10px 30px;
            background-color: #5B2A82;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 3vh;
        }

        .next-btn {
            padding: 10px 30px;
            background-color: #5B2A82;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 100%;
        }

        /* Responsive Styles */
        @media (max-width:400px) {
            h1 {
                font-size: 20px;
            }

            .poster {
                max-width: 65%;
            }
        }
    </style>
</head>

<body>
    <div class="content">
        <img id="poster" class="poster" src="{{ asset('images/pstt' . $quote . '.webp') }}" alt="Poster" />
        <button id="downloadLink" class="download-btn">Save & Share</button>
        <a href="{{ route('end') }}">
            <button class="next-btn">Next</button>
        </a>
    </div>

    <script>
        document.getElementById('downloadLink').addEventListener('click', function() {
            const poster = document.getElementById('poster');
            const imageUrl = poster.src;

            const link = document.createElement('a');
            link.href = imageUrl;
            link.download = 'poster.webp';

            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });
    </script>
</body>

</html>
