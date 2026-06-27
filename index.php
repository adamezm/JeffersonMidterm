<?php
$pageTitle = "World Explorer | Home";
require_once '_header.php';
?>

<header>
    <div id="worldCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#worldCarousel" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#worldCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#worldCarousel" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#worldCarousel" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#worldCarousel" data-bs-slide-to="4"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/dominicanrepublic.jpg" class="carousel-image" alt="Dominican Republic">

                <div class="carousel-caption">
                    <h1>Explore The World</h1>

                    <p>
                        Discover countries, capitals, cultures, and beautiful destinations from around the globe.
                    </p>

                    <a href="countries.php" class="btn btn-country">
                        Explore Countries
                    </a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/france.jpg" class="carousel-image" alt="France">

                <div class="carousel-caption">
                    <h1>Experience New Destinations</h1>

                    <p>
                        Learn about countries, regions, and iconic landmarks.
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/egypt.jpg" class="carousel-image" alt="Egypt">

                <div class="carousel-caption">
                    <h1>Travel Through History</h1>

                    <p>
                        Discover ancient civilizations and different cultures.
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/fiji.jpg" class="carousel-image" alt="Fiji">

                <div class="carousel-caption">
                    <h1>Island Adventures</h1>

                    <p>
                        Explore tropical destinations and hidden gems.
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="images/mountains.jpg" class="carousel-image" alt="Mountains">

                <div class="carousel-caption">
                    <h1>See The Beauty Of Our Planet</h1>

                    <p>
                        Browse countries, capitals, regions, and national flags.
                    </p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#worldCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#worldCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</header>

<main class="container py-5">
    <section class="intro-section">
        <h2>Welcome To World Explorer</h2>

        <p>
            World Explorer allows visitors to browse countries, discover capitals,
            learn about regions, and explore national flags from around the world.
        </p>
    </section>

    <div class="row g-4 mt-4">
        <div class="col-md-4">
            <div class="home-feature-card">
                <h3>Countries</h3>

                <p>
                    Browse detailed information about countries from every continent.
                </p>

                <a href="countries.php">Explore Countries →</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="home-feature-card">
                <h3>Regions</h3>

                <p>
                    Organize countries by region and discover geographic connections.
                </p>

                <a href="regions.php">Browse Regions →</a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="home-feature-card">
                <h3>Details</h3>

                <p>
                    Learn about capitals, flags, and cultural information.
                </p>

                <a href="countries.php">View Countries →</a>
            </div>
        </div>
    </div>
</main>

<?php require_once '_footer.php'; ?>