<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .form-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        input, textarea {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            width: 100%;
            background-color: #28a745;
            color: white;
            border: none;
            padding: 12px;
            font-size: 18px;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        .thank-you {
            display: none;
            font-size: 20px;
            color: #28a745;
            font-weight: bold;
        }

        /* Responsive Styles */
        @media (max-width: 500px) {
            .form-container {
                width: 100%;
                padding: 15px;
            }
            input, textarea {
                font-size: 14px;
                padding: 10px;
            }
            button {
                font-size: 16px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container" id="formContainer">
        <form id="queryForm" action="sendmail.php" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="query" placeholder="Enter your query" rows="4" required></textarea>
            <input type="hidden" name="_subject" value="New Query Submission">
            <input type="hidden" name="_captcha" value="false">
            <button type="submit">Submit</button>
        </form>
        <div class="thank-you" id="thankYouMessage">
            Thank you! Your query has been submitted.
        </div>
    </div>

    <script>
        document.getElementById("queryForm").addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent actual form submission
            document.getElementById("queryForm").style.display = "none"; // Hide form
            document.getElementById("thankYouMessage").style.display = "block"; // Show message
            setTimeout(() => {
                document.getElementById("queryForm").submit(); // Submit form after delay
            }, 1500); // Wait 1.5 seconds before submitting
        });
    </script>
</body>
</html>
