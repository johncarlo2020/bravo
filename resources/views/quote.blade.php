<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Selection Page</title>
    <style>
        body {
            margin: 0;
            overflow: hidden;
            padding: 0;
            font-family: Arial, sans-serif;
            background-image: url('{{ asset('images/bgform.webp') }}');

            background-size: cover;
            background-position: center;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
        }

        .title-container {
            background-color: white;
            padding: 19px;
            border-radius: 10px;
            box-shadow: inset 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 0 auto 20px;
            width: 62%;
            max-width: 400px;
        }

        h1 {
            font-size: 23px;
            color: #5B2A82;
            margin: 0;
        }

        .quote-btn {
            width: 300px;
            padding: 15px;
            margin-top: 10px;
            background-color: white;
            color: #5B2A82;
            border: 1px solid #5B2A82;
            border-radius: 10px;
            font-size: 15px;
            cursor: pointer;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.2s, color 0.2s;
        }

        .quote-btn.selected {
            background-color: #5B2A82;
            color: white;
        }

        .continue-btn {
            width: 300px;
            padding: 15px;
            margin-top: 40px;
            background-color: #5B2A82;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .continue-btn:hover {
            background-color: #4A236A;
        }

        @media (max-width: 400px) {
            .title-container {
                width: 60%;
                /* Adjust width for small screens */
            }

            .quote-btn,
            .continue-btn {
                width: 70%;
                /* Make buttons full width */
                font-size: 12px;
                /* Slightly smaller font size */
            }

            h1 {
                font-size: 17px;
                /* Smaller title for mobile */
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title-container">
            <h1>Pick your positive word</h1>
        </div>

        <!-- Quote buttons -->
        @foreach ($quotes as $quote)
            <button type="button" class="quote-btn" onclick="selectQuote('{{ $quote->id }}')">
                {{ $quote->name }}
            </button>
        @endforeach

        <!-- Continue button inside form -->
        <form id="quoteForm" action="{{ route('result') }}" method="POST">
            @csrf
            <input type="hidden" name="selected_quote" id="selectedQuote">
            <button type="submit" class="continue-btn">Continue</button>
        </form>

        <script>
            function selectQuote(quote) {
                // Set the selected quote value
                document.getElementById('selectedQuote').value = quote;

                // Style selected button if needed
                const buttons = document.querySelectorAll('.quote-btn');
                buttons.forEach(btn => btn.classList.remove('selected')); // Remove 'selected' class from all buttons
                event.target.classList.add('selected'); // Add 'selected' class to clicked button
            }
        </script>

</body>

</html>
