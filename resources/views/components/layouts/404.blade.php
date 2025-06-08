<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Page Not Found - Craft Copier Solutions</title>
    <style>
        body {
            background: #f9f9f9;
            font-family: 'Segoe UI', sans-serif;
            text-align: center;
            padding: 50px;
       
        }
        .container {
            background: white;
            max-width: 600px;
            margin: auto;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px #ccc;
        }
        h1 {
            font-size: 80px;
            color: #e74c3c;
        }
        p {
            font-size: 18px;
            color: #555;
        }
        a {
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <p><a href="{{ route('homepage') }}">Go back to Homepage</a></p>
    </div>
</body>
</html>
