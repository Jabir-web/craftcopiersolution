<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Page Not Found | Craft Copier Solution</title>
    <meta name="description" content="Sorry, the page you are looking for does not exist. Find printer sales, repairs, rentals, and more at Craft Copier Solution.">
    <meta name="robots" content="noindex, follow">
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
    <main class="container" role="main" tabindex="-1">
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <nav aria-label="Helpful links">
            <p><a href="{{ route('homepage') }}">Go back to Homepage</a></p>
            <p><a href="{{ route('aboutpage') }}">About Us</a> | <a href="{{ route('contactpage') }}">Contact</a> | <a href="{{ route('homepage') }}#our-best-machines">Services</a></p>
        </nav>
    </main>
    <footer style="margin-top:2em;color:#aaa;font-size:14px;">
        &copy; {{ date('Y') }} Craft Copier Solution. All rights reserved.
    </footer>
</body>
</html>
