<?php
$pageTitle = "World Explorer | Regions";
require_once '_header.php';
?>

<main class="regions-background">
    <div class="regions-overlay">
        <section class="container my-5">
            <section class="region-hero">
                <div class="region-hero-overlay">
                    <h1>Explore Regions</h1>
					
                    <p>
                        Discover countries grouped by region around the world.
                    </p>
                </div>	
            </section>
			
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <a href="countries.php?region=Africa">
						<div class="region-card africa">
                            <h2>Africa</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="countries.php?region=Americas">
                        <div class="region-card americas">
                            <h2>Americas</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-6 col-lg-4">
                    <a href="countries.php?region=Asia">
                        <div class="region-card asia">
                            <h2>Asia</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="countries.php?region=Europe">
                        <div class="region-card europe">
                            <h2>Europe</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-6">
                    <a href="countries.php?region=Oceania">
                        <div class="region-card oceania">
                            <h2>Oceania</h2>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</main>

<?php require_once '_footer.php'; ?>