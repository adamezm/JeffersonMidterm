<?php
$pageTitle = "World Explorer | Country Details";
require_once '_header.php';
require_once 'functions.php';

$code = $_GET['code'] ?? '';
$data = getApiData('?limit=100&pretty=1');

$country = null;

if ($data !== null && !empty($code)) {
    foreach ($data['data']['objects'] as $item) {
        $alpha2 = $item['codes']['alpha_2'] ?? '';

        if (strcasecmp($alpha2, $code) === 0) {
            $country = $item;
            break;
        }
    }
}
?>

<main class="details-background">
    <div class="details-overlay">
        <section class="container my-5">

            <?php if ($country === null): ?>
                <div class="details-card text-center">
                    <h1>Country Not Found</h1>

                    <p>
                        The country details could not be loaded. Please return to the countries page and try again.
                    </p>

                    <a href="countries.php" class="btn btn-country">
                        Back To Countries
                    </a>
                </div>
            <?php else: ?>
                <?php
                $name = $country['names']['common'] ?? 'Unknown Country';
                $officialName = $country['names']['official'] ?? 'N/A';
                $region = $country['region'] ?? 'N/A';
                $subregion = $country['subregion'] ?? 'N/A';
                $capital = $country['capitals'][0]['name'] ?? 'N/A';
                $population = $country['population'] ?? 0;
                $area = $country['area']['kilometers'] ?? 0;
                $flag = $country['flag']['url_png'] ?? '';
                $map = $country['links']['google_maps'] ?? '';
                $timezone = $country['timezones'][0] ?? 'N/A';

                $languages = [];
                if (!empty($country['languages'])) {
                    foreach ($country['languages'] as $language) {
                        if (!empty($language['name'])) {
                            $languages[] = $language['name'];
                        }
                    }
                }

                $currencies = [];
                if (!empty($country['currencies'])) {
                    foreach ($country['currencies'] as $currency) {
                        $currencyName = $currency['name'] ?? '';
                        $currencyCode = $currency['code'] ?? '';
                        $currencySymbol = $currency['symbol'] ?? '';

                        $currencyText = trim($currencyName . ' ' . $currencyCode . ' ' . $currencySymbol);

                        if (!empty($currencyText)) {
                            $currencies[] = $currencyText;
                        }
                    }
                }
                ?>

                <section class="details-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-5">
                            <?php if (!empty($flag)): ?>
                                <img src="<?php echo htmlspecialchars($flag); ?>"
                                     class="detail-flag"
                                     alt="<?php echo htmlspecialchars($name); ?> Flag">
                            <?php else: ?>
                                <div class="detail-no-flag">No Flag Available</div>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-7">
                            <p class="detail-label">Country Profile</p>

                            <h1><?php echo htmlspecialchars($name); ?></h1>

                            <p class="official-name">
                                <?php echo htmlspecialchars($officialName); ?>
                            </p>

                            <a href="countries.php" class="btn btn-country">
                                Back To Countries
                            </a>
                        </div>
                    </div>
                </section>

                <section class="row g-4 mt-2">
                    <div class="col-md-4">
                        <div class="detail-info-card">
                            <h3>Capital</h3>
                            <p><?php echo htmlspecialchars($capital); ?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="detail-info-card">
                            <h3>Region</h3>
                            <p><?php echo htmlspecialchars($region); ?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="detail-info-card">
                            <h3>Subregion</h3>
                            <p><?php echo htmlspecialchars($subregion); ?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="detail-info-card">
                            <h3>Population</h3>
                            <p><?php echo number_format($population); ?></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="detail-info-card">
                            <h3>Area</h3>
                            <p><?php echo number_format($area); ?> km²</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="detail-info-card">
                            <h3>Time Zone</h3>
                            <p><?php echo htmlspecialchars($timezone); ?></p>
                        </div>
                    </div>
                </section>

                <section class="row g-4 mt-2">
                    <div class="col-md-6">
                        <div class="detail-list-card">
                            <h3>Languages</h3>

                            <?php if (!empty($languages)): ?>
                                <ul>
                                    <?php foreach ($languages as $language): ?>
                                        <li><?php echo htmlspecialchars($language); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p>N/A</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="detail-list-card">
                            <h3>Currencies</h3>

                            <?php if (!empty($currencies)): ?>
                                <ul>
                                    <?php foreach ($currencies as $currency): ?>
                                        <li><?php echo htmlspecialchars($currency); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p>N/A</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>

                <?php if (!empty($map)): ?>
                    <section class="details-card mt-4 text-center">
                        <h2>Map Location</h2>

                        <p>
                            View this country on Google Maps.
                        </p>

                        <a href="<?php echo htmlspecialchars($map); ?>"
                           target="_blank"
                           class="btn btn-country">
                            Open Map
                        </a>
                    </section>
                <?php endif; ?>
            <?php endif; ?>

        </section>
    </div>
</main>

<?php require_once '_footer.php'; ?>