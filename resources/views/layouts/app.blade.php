
<!DOCTYPE html>
<html>
<head>
    <title>My Laravel Website</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #243047;
        }

        nav {
            background: #1e3a5f;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        nav h2 {
            color: white;
            margin: 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-size: 15px;
        }

        nav a:hover {
            color: #8dd8ff;
        }

        .hero {
            text-align: center;
            padding: 100px 20px;
            background: linear-gradient(135deg, #dceeff, #f4f7fb);
            min-height: 400px;
        }

        .hero h1 {
            font-size: 42px;
            margin-bottom: 20px;
            color: #1e3a5f;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.7;
            max-width: 650px;
            margin: 0 auto 30px;
            color: #536176;
        }

        .btn {
            display: inline-block;
            background: #2478d4;
            color: white;
            padding: 13px 24px;
            border-radius: 6px;
            text-decoration: none;
            margin: 5px;
        }

        .btn:hover {
            background: #155ca8;
        }

        .btn-secondary {
            background: white;
            color: #2478d4;
            border: 1px solid #2478d4;
        }

        .btn-secondary:hover {
            background: #e8f3ff;
            color: #155ca8;
        }

        .content {
            text-align: center;
            padding: 45px 20px;
        }

        .content h2 {
            color: #1e3a5f;
        }

        footer {
            text-align: center;
            background: #1e3a5f;
            color: white;
            padding: 20px;
            margin-top: 30px;
        }

        @media (max-width: 600px) {
            nav {
                justify-content: center;
                text-align: center;
            }

            nav a {
                margin: 8px;
            }

            .hero {
                padding: 65px 20px;
            }

            .hero h1 {
                font-size: 32px;
            }
        }
    </style>
</head>

<body>

    <nav>
        <h2>My Website</h2>

        <div>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/contact">Contact</a>
        </div>
    </nav>

    @yield('content')

    <footer>
        <p>&copy; 2026 My Laravel Website. All rights reserved.</p>
    </footer>

</body>
</html>
