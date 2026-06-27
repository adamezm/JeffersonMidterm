<?php
if (!isset($pageTitle)) {
    $pageTitle = "World Explorer";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title><?php echo htmlspecialchars($pageTitle); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <link rel="stylesheet" href="style.css?v=10">

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark">

    <div class="container">

        <a class="navbar-brand" href="index.php">
            🌎 World Explorer
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse"
             id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="countries.php">
                        Countries
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="regions.php">
                        Regions
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">
                        About
                    </a>
                </li>

            </ul>

        </div>

    </div>

</nav>