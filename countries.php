<?php
$pageTitle = "World Explorer | Countries";
require_once '_header.php';
require_once 'functions.php';

$data = getApiData('?limit=100&pretty=1');
?>

<main class="countries-background">
    <div class="countries-overlay">
        <section class="container my-5">

            <section class="country-hero">
                <div class="country-hero-overlay">
                    <h1>Explore Countries</h1>

                    <p>
                        Browse countries, capitals, regions, and flags from around the world.
                    </p>
                </div>
            </section>

            <section class="search-box">
                <input type="text"
                       id="countrySearch"
                       class="form-control"
                       placeholder="Search countries by name, region, or capital">
            </section>

            <?php if ($data === null): ?>
                <div class="alert alert-danger">
                    Unable to load countries. Please check the API connection.
                </div>
            <?php else: ?>
                <div class="row" id="countryList">
                    <?php foreach ($data['data']['objects'] as $country): ?>
                        <?php
                        $name = $country['names']['common'] ?? 'Unknown Country';
                        $region = $country['region'] ?? 'N/A';
                        $capital = $country['capitals'][0]['name'] ?? 'N/A';
                        $code = $country['codes']['alpha_2'] ?? '';
                        $flag = $country['flag']['url_png'] ?? '';
                        $searchText = strtolower($name . ' ' . $region . ' ' . $capital);
                        ?>

                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4 country-item"
                             data-search="<?php echo htmlspecialchars($searchText); ?>">

                            <div class="card h-100 country-card">
                                <?php if (!empty($flag)): ?>
                                    <img src="<?php echo htmlspecialchars($flag); ?>"
                                         class="country-flag"
                                         alt="<?php echo htmlspecialchars($name); ?> Flag">
                                <?php else: ?>
                                    <div class="no-flag">No Flag Available</div>
                                <?php endif; ?>

                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo htmlspecialchars($name); ?>
                                    </h5>

                                    <p class="card-text">
                                        <strong>Region:</strong> <?php echo htmlspecialchars($region); ?><br>
                                        <strong>Capital:</strong> <?php echo htmlspecialchars($capital); ?>
                                    </p>

                                    <?php if (!empty($code)): ?>
                                        <a href="details.php?code=<?php echo urlencode($code); ?>"
                                           class="btn btn-country">
                                            View Details
                                        </a>
                                    <?php else: ?>
                                        <span class="text-muted small">Details unavailable</span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <p id="noResults" class="no-results">
                    No countries matched your search.
                </p>
            <?php endif; ?>

        </section>
    </div>
</main>

<script>
    const searchInput = document.getElementById("countrySearch");
    const countryItems = document.querySelectorAll(".country-item");
    const noResults = document.getElementById("noResults");

    searchInput.addEventListener("input", function () {
        const searchValue = this.value.toLowerCase();
        let visibleCount = 0;

        countryItems.forEach(function (item) {
            const countryText = item.getAttribute("data-search");

            if (countryText.includes(searchValue)) {
                item.style.display = "block";
                visibleCount++;
            } else {
                item.style.display = "none";
            }
        });

        noResults.style.display = visibleCount === 0 ? "block" : "none";
    });
</script>

<?php require_once '_footer.php'; ?>