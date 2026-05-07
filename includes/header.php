<?php
if (!isset($pageTitle)) {
    $pageTitle = 'FMLDS - Conference';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- SEO Meta Tags -->
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <meta name="description" content="2026 IEEE International Conference on Future Machine Learning and Data Science (FMLDS) - Kobe, Japan">
    <meta name="keywords" content="FMLDS, Machine Learning, Data Science, IEEE Conference, Kobe, Japan">
    <meta name="author" content="FMLDS Conference Committee">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo htmlspecialchars($pageTitle); ?>">
    <meta property="og:description" content="2026 IEEE International Conference on Future Machine Learning and Data Science">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/fmlds2026.jpg">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    <meta property="og:type" content="website">

    <!-- Preconnect for performance -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">

    <!-- DNS prefetch -->
    <link rel="dns-prefetch" href="//images.unsplash.com">

    <!-- Stylesheets with preload -->
    <link rel="preload" href="<?php echo SITE_URL; ?>/assets/css/style.css" as="style">
    <link rel="stylesheet" href="<?php echo SITE_URL; ?>/assets/css/style.css">

    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" as="style">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo SITE_URL; ?>/assets/images/logo.png">
    <link rel="apple-touch-icon" href="<?php echo SITE_URL; ?>/assets/images/logo.png">
</head>
<body>
<div class="main-wrapper">
    <nav class="navbar">
        <!--
        <div class="navbar-top">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="navbar-top-info">
                        <a href="mailto:info@fmlds.org">
                            <i class="fas fa-envelope"></i> info@fmlds.org
                        </a>
                        <a href="tel:+61431070618">
                            <i class="fas fa-phone"></i> +61 431 070 618
                        </a>
                    </div>
                </div>
            </div>
        </div>
        -->
        <div class="navbar-main">
            <div class="container">
                <div class="nav-wrapper">
                    <div class="logo">
                        <a href="<?php echo SITE_URL; ?>">
                            <div class="logo-container">
                                <img src="<?php echo SITE_URL; ?>/assets/images/logo.png" alt="FMLDS Logo">
                            </div>
                        </a>
                    </div>
                    
                    <!-- Mobile Menu Toggle -->
                    <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Toggle menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    
                    <!-- Navigation Menu -->
                    <ul class="nav-menu" id="navMenu">
                    <li><a href="<?php echo SITE_URL; ?>">Home</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/speakers">Speakers</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/call-for-papers">Call for Papers</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/news">News</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/submission">Submission</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/key-dates">Key Dates</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/program-schedule">Program</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/travel">Travel</a></li>
                    <li><a href="<?php echo SITE_URL; ?>/sessions">Sessions</a></li>
                    <li> <a href="<?php echo SITE_URL; ?>/committee">Committee </a> </li>
                    <li><a href="<?php echo SITE_URL; ?>/registration">Registration</a></li>
                    <li class="dropdown">
                        <a href="<?php echo SITE_URL; ?>/authors-info">Authors Info <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo SITE_URL; ?>/authors-info/funds-awards">Funds and Awards</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/authors-info/one-page-abstract">One Page Abstract - Industry Track</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/authors-info/paper-preparation">Regular Paper Preparation</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/authors-info/submission">Paper/Abstract Submission</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/authors-info/presentation">Presentation Instructions</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="<?php echo SITE_URL; ?>/about">MORE <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo SITE_URL; ?>/about">About</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/information">Information</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/accommodation">Accommodation</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/conference-flyer">Conference Flyer</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/sponsorships">Sponsorships</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/past-events">Past Events</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/contact">Contact</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/fmlds-bidding">FMLDS Bidding</a></li>
                            <li><a href="<?php echo SITE_URL; ?>/payment">Payment</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <?php
    // Show conference header on all pages except index/homepage
    $currentPage = basename($_SERVER['PHP_SELF']);
    $requestUri = $_SERVER['REQUEST_URI'];
    $requestPath = parse_url($requestUri, PHP_URL_PATH) ?: '/';
    $sitePath = parse_url(SITE_URL, PHP_URL_PATH) ?: '';
    $normalizedRequestPath = rtrim($requestPath, '/') ?: '/';
    $normalizedSitePath = rtrim($sitePath, '/') ?: '/';
    $isHomePage = (
        $currentPage == 'index.php' ||
        $normalizedRequestPath == '/' ||
        $normalizedRequestPath == $normalizedSitePath ||
        strpos($requestPath, '/index') !== false
    );
    
    if (!$isHomePage):
    ?>
    <div class="conference-header">
        <div class="container">
            <div class="conference-header-content">
                <div class="conference-dates">
                    <div class="date-month">Nov</div>
                    <div class="date-days">02-05</div>
                    <div class="date-year">2025</div>
                </div>
                <div class="conference-title">
                    <h1>2025 IEEE International Conference on</h1>
                    <h2>Future Machine Learning and Data Science (FMLDS)</h2>
                    <p class="conference-location">Los Angeles, USA</p>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
