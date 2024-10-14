<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Page</title>
    <style>
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
            flex-direction: column;
            padding: 20px;
            font-family: Arial, sans-serif;
            color: #4A236A;
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;

            padding-right: 22px;

            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 80%;
            max-width: 450px;
            margin-top: 20px;
        }


        .logo {
            width: 150px;
            margin-bottom: 10px;
        }

        label[for="name"],
        label[for="email"],
        label[for="phone"] {
            color: #5B2A82;
            font-weight: 700;
            font-size: 15px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 16px;
            display: block;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"] {
            font-size: 16px;
            width: 92%;
            padding: 10px;
            border: 1px solid #5B2A82;
            border-radius: 3px;
            margin: auto;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            margin-top: 10px;
            justify-content: center;
        }

        .checkbox-container label {
            font-size: 12px;
        }

        .submit-btn {
            background-color: #5B2A82;
            color: white;
            padding: 7px 40px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
            margin-top: 15px;
        }



        .submit-btn:hover {
            background-color: #4A236A;
        }

        @media (max-width: 400px) {
            .form-container {
                padding: 20px;
                /* Reduce padding on small screens */
                width: 80%;
                /* Adjust width for small screens */
                max-width: none;
                /* Remove max-width */
            }

            .logo {
                width: 100px;
            }

            input[type="text"],
            input[type="email"],
            input[type="tel"] {
                width: 90%;
            }

            .submit-btn {
                padding: 7px 40px;
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="logo">


    <div class="form-container">
        <form action="{{ route('user') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required maxlength="30">
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" required pattern="^[0-9]*$">
            </div>
            <div class="checkbox-container">
                <input type="checkbox" id="promotions" name="promotions" required>
                <label for="promotions"> I have read and agree to the website <a
                        href="https://www.suriaklcc.com.my/privacy-policy">privacy policy</a></label>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>

    </div>
</body>

</html>
