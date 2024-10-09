<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Page</title>
    <style>
        @font-face {
            font-family: 'Mundial';
            src: url('{{ asset('font/Mundial-Regular.woff') }}') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        body {
            margin: 0;
            overflow: hidden;
            background-image: url('{{ asset('images/bgform.webp') }}');
            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Mundial', sans-serif;
            color: #4A236A;
        }

        .title {
            text-align: center;
            font-size: 20px;
            font-weight: 600;
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
            top: 16vh;
        }

        .content>* {
            margin-bottom: 5px;
        }

        .poster {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
            margin-bottom: 5%;
        }

        .download-btn {
            padding: 10px 30px;
            background-color: #5B2A82;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .tag {
            font-size: 20px;
            margin-bottom: 5%
        }

        .next-btn {
            padding: 10px 30px;
            background-color: #5B2A82;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
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
        <h1 class="title"> LET WORDS <br> SPREAD KINDNESS</h1>
        <img id="poster" class="poster" src="{{ asset('images/pstt' . $quote . '.webp') }}" alt="Poster" />
        <button id="downloadLink" class="download-btn">Save & Share</button>
        <p class="tag">#BeKindOnline</p>
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
