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
            flex-direction: column;
            padding: 1px;
            font-family: Arial, sans-serif;
            color: #4A236A;
        }

        h1 {
            font-size: 24px;
            color: #5B2A82;
            margin: 0;
        }

        .poster {
            width: 100%;
            max-width: 300px;
            margin: 20px 0;
            border-radius: 10px;
        }

        .download-btn,
        .next-btn {
            padding: 10px 30px;
            background-color: #5B2A82;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            position: absolute;
        }


        .download-btn {
            top: 70%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .next-btn {
            bottom: 10%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Responsive Styles */
        @media (max-width:400px) {
            h1 {
                font-size: 20px;
                /* Reduce font size for small screens */
            }

            .poster {
                max-width: 65%;
                /* Allow the poster to take more width on small screens */
            }

            .download-btn,
            .next-btn {
                width: 30%;
                /* Make buttons wider */
                font-size: 14px;
                /* Adjust font size for buttons */
                padding: 10px 0;
                /* Adjust padding */
            }
        }
    </style>
</head>

<body>

    <img id="poster" class="poster" src="{{ asset('images/pstt' . $quote . '.webp') }}" alt="Poster" />
    <button id="downloadLink" class="download-btn">Save & Share</button>
    <br>
    <a href="{{ route('end') }}">
        <button class="next-btn">Next</button>

    </a>

</body>

<script>
    document.getElementById('downloadLink').addEventListener('click', function() {
        const poster = document.getElementById('poster');
        const imageUrl = poster.src; // Get the image URL

        // Create a temporary link element
        const link = document.createElement('a');
        link.href = imageUrl; // Set the link href to the image URL
        link.download = 'poster.webp'; // Set the name for the downloaded file

        // Append to the body, trigger the download, and remove the link
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    });
</script>

</html>
