<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Queen Florist - Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f0f0f0;
            font-family: 'Arial', sans-serif;
        }

        .navbar {
            background: #45496A;
        }

        .navbar-brand {
            color: #fff;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .container {
            margin-top: 20px;
        }

        h1,
        h2,
        h3 {
            color: #472C4C;
        }

        p {
            color: #333;
        }

        .jumbotron {
            background: #E8CCC7;
            color: #fff;
            padding: 80px 20px;
            margin-top: 20px;
        }

        .jumbotron h1 {
            font-size: 3rem;
        }

        .mission-section {
            background: #fff;
            padding: 40px 20px;
            margin-top: 20px;
            border-radius: 8px;
        }

        .mission-section h2 {
            color: #472C4C;
        }

        .mission-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            background: #fff;
        }

        footer {
            background: #7D8BAE;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand ms-3" href="{{ route('homes') }}">Queen Florist</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('prod') }}">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('log') }}">Admin</a></li>
            </ul>
        </div>
    </nav>

    <div class="container text-center">
    <div class="jumbotron">
        <h1 style="color: #ffffff;">Inspired By The Beauty Of Nature</h1>
    </div>
</div>

    <div class="container text-center">
        <div class="mission-section">
            <h2>What We Offer</h2>
            <div class="row pt-4">
                <div class="col-md-4">
                    <div class="mission-card">
                        <h3>01. Wedding Bouquets</h3>
                        <p>We understand your day is very special, and we offer a very personalized service for your most important event. We custom make beautiful wedding flowers, bridal bouquets and bridesmaid bouquets, the groom’s boutonniere’s, and any bouquets for your wedding.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mission-card">
                        <h3>02. Flower Decoration</h3>
                        <p>Extensively delivered to our clients on time, Flower Decoration services are rendered by most skillful and experienced professionals of our team. Apart from this, our low rates and ability to accomplish all the clients’ needs make us a preferred choice.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mission-card">
                        <h3>03. House Plants</h3>
                        <p>With an extensive variety of houseplants offered by our Flower Boutique, you can easily transform your home interior and exterior and create an amazingly bright and unforgettable atmosphere of colorful greenery. We will deliver all houseplants to your doorstep for free.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Queen Florist. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
