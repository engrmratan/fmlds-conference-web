<?php
require_once __DIR__ . '/assets/bootstrap.php';

$pageTitle = '2026 IEEE International Conference on Future Machine Learning and Data Science (FMLDS)';
include_header();

function renderHomepagePeopleCards(array $people, string $link, string $fallbackImage, array $animationDelay): void
{
    foreach ($people as $index => $person) {
        $delay = $animationDelay[$index % count($animationDelay)];
        ?>
        <article class="speaker-card-compact <?php echo htmlspecialchars($person['animation']); ?> homepage-person-card" style="animation-delay: <?php echo $delay; ?>s;">
            <span class="speaker-type-badge homepage-person-badge"><?php echo htmlspecialchars($person['type']); ?></span>
            <img src="<?php echo htmlspecialchars($person['photo']); ?>" alt="<?php echo htmlspecialchars($person['name']); ?>" class="speaker-image homepage-person-image" onerror="this.src='<?php echo htmlspecialchars($fallbackImage); ?>'">
            <a href="<?php echo htmlspecialchars($link); ?>" class="speaker-name-link homepage-person-link"><?php echo htmlspecialchars($person['name']); ?></a>
            <p class="speaker-title homepage-person-affiliation"><?php echo htmlspecialchars($person['affiliation']); ?></p>
        </article>
        <?php
    }
}
?>

<section class="section conference-title-section">
    <div class="particle-1"></div>
    <div class="particle-2"></div>
    <div class="particle-3"></div>
    <div class="container">
        <div class="conference-title-content">
            <h1 class="conference-welcome-line">Welcome to</h1>
            <h1>2026 IEEE International Conference on</h1>
            <h2>Future Machine Learning and Data Science (FMLDS)</h2>
            <p class="conference-date-location">20-23 November, 2026 | Kobe, Japan</p>
            <div class="small-logos" aria-label="Conference partners">
                <div class="small-logo-text"><img src="uploads/images/ieee.png" alt="IEEE"></div>
                <div class="small-logo-text"><img src="uploads/images/gcstmr.png" alt="GCSTMR"></div>
            </div>
        </div>
    </div>
</section>

<section class="section conference-quick-links">
    <div class="container">
        <div class="quick-links-grid">
            <a href="pages/submission.php" class="quick-link-card">
                <i class="fa-solid fa-up-right-from-square link-icon"></i>
                <h3>Paper Submission</h3>
                <p>Submit your paper or abstract for FMLDS2026.</p>
            </a>
            <a href="pages/program-schedule.php" class="quick-link-card">
                <i class="fa-solid fa-calendar-days link-icon"></i>
                <h3>Tentative Program</h3>
                <p>View the conference program and session schedule.</p>
            </a>
            <a href="pages/registration.php" class="quick-link-card">
                <i class="fa-solid fa-ticket link-icon"></i>
                <h3>Registration</h3>
                <p>Register for in-person or virtual participation.</p>
            </a>
            <a href="pages/sponsorships.php" class="quick-link-card">
                <i class="fa-solid fa-handshake link-icon"></i>
                <h3>Sponsorship</h3>
                <p>Partner with FMLDS2026 and showcase your organization.</p>
            </a>
        </div>
    </div>
</section>

<section class="section welcome-section">
    <div class="container">
        <div class="welcome-main-content">
            <div class="welcome-section-one">
                <div class="welcome-header">
                    <h3 class="welcome-sub-title">Future Machine Learning and Data Science (FMLDS) 2026</h3>
                </div>

                <div class="welcome-content-text">
                    <p>
                        FMLDS2026 will bring international experts in Future Machine Learning Technologies, Artificial Intelligence, Computer Vision, Machine Learning Applications in Engineering and Data Science. It will feature keynote addresses from prominent world industry and academic leaders in Machine Learning and Data Science. It will span a wide spectrum of areas within Machine Learning and Data Science research, providing a platform for established and emerging researchers as well as industry practitioners to exchange insights and innovative ideas. FMLDS2026 will host oral, poster, and virtual presentations.                     </p>
                    <p>
                        FMLDS2026 will be hosted in The University of Hyogo, Japan. It is a public university located in Hyogo Prefecture. The University of Hyogo is a comprehensive university established by integrating universities with different fields of study against the background of the diverse regional characteristics of the sea and mountains. Kobe is the capital city of Hyōgo Prefecture, Japan, which is the seventh-largest city and the third-largest port city after Tokyo and Yokohama. It is located in the Kansai region, which makes up the southern side of the main island of Honshū, on the north shore of Osaka Bay. It is part of the Keihanshin metropolitan area along with Osaka and Kyoto. It is located about 35 km (22 mi) west of Osaka and 70 km (43 mi) southwest of Kyoto. The nearest International Airport is 'Kansai International Airport', Osaka, Japan.                     </p>
                    <p>
                        Kobe is known for Kobe beef, Arima Onsen, the Ikuta Shrine, Kobe Port Tower, and its UNESCO-recognized design culture. The city is also home to Japan's first golf course and Japan's first mosque. <a href="https://en.wikipedia.org/wiki/Kobe" target="_blank" rel="noopener">Wikipedia</a>.
                    </p>
                </div>

                <div class="welcome-location-badge">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Kobe, Japan</span>
                </div>
            </div>

            <div class="welcome-special-sessions">
                <h4>Special Sessions</h4>
                <div class="sessions-grid-two">
                    <?php
                    $defaultSessions = [
                        ['title' => 'Application of Machine Learning and Artificial Intelligence in Transportation Systems and Safety', 'desc' => 'AI-driven solutions for smart transportation'],
                        ['title' => 'Machine Learning Applications in Biomedical and Bioinformatics', 'desc' => 'ML techniques for biomedical data analysis'],
                        ['title' => 'Application of Machine Learning in Engineering', 'desc' => 'ML applications across engineering domains'],
                        ['title' => 'Machine Learning for Empathic Computing', 'desc' => 'AI systems with emotional intelligence'],
                    ];

                    foreach ($defaultSessions as $session) {
                    ?>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><a href="pages/sessions/index.php"><?php echo htmlspecialchars($session['title']); ?></a></h3>
                                <?php if (!empty($session['desc'])): ?>
                                    <p class="card-text"><?php echo htmlspecialchars($session['desc']); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section speakers-section">
    <div class="container">
        <h2 class="section-title homepage-section-heading">Speakers</h2>
        <div class="speakers-grid-four">
            <?php
            $homepageSpeakers = [
                [
                    'name' => 'Professor Toshio Fukuda',
                    'affiliation' => 'Nagoya University, Japan',
                    'photo' => 'uploads/images/plenary/ProfToshioFukuda.jpg',
                    'type' => 'Plenary Speaker',
                    'animation' => 'animation-fade-up'
                ],
                [
                    'name' => 'Professor Kaoru Ota',
                    'affiliation' => 'Tohoku University, Japan',
                    'photo' => 'uploads/images/plenary/ProfOta.jpg',
                    'type' => 'Plenary Speaker',
                    'animation' => 'animation-slide-left'
                ],
                [
                    'name' => 'Professor Yulan Guo',
                    'affiliation' => 'Sun Yat-sen University, China',
                    'photo' => 'uploads/images/keynote/ProfYulan.png',
                    'type' => 'Keynote Speaker',
                    'animation' => 'animation-slide-right'
                ],
                [
                    'name' => 'Professor Dr. Mohammed Nazim Uddin',
                    'affiliation' => 'Vice-Chancellor, East Delta University, Bangladesh',
                    'photo' => 'uploads/images/keynote/ProfNazim.jpg',
                    'type' => 'Keynote Speaker',
                    'animation' => 'animation-zoom-in'
                ],
                [
                    'name' => "Professor Syed Ahmad Chan Bukhari",
                    'affiliation' => "St. John's University, USA",
                    'photo' => 'uploads/images/keynote/Bukhari.png',
                    'type' => 'Keynote Speaker',
                    'animation' => 'animation-fade-up'
                ],
                [
                    'name' => 'Professor Rahamatullah Khondoker',
                    'affiliation' => 'Technische Hochschule Mittelhessen, Germany',
                    'photo' => 'uploads/images/keynote/Rahamatullah.png',
                    'type' => 'Keynote Speaker',
                    'animation' => 'animation-slide-left'
                ]
            ];

            $animationDelay = [0, 0.15, 0.3, 0.45];

            renderHomepagePeopleCards($homepageSpeakers, 'pages/speakers.php', 'uploads/images/logo.png', $animationDelay);
            renderHomepagePeopleCards($homepageSpeakers, 'pages/speakers.php', 'uploads/images/logo.png', $animationDelay);
            ?>
        </div>
    </div>
</section>

<section class="section conference-tracks">
    <div class="video-background">
        <video autoplay muted loop playsinline preload="metadata" poster="uploads/images/fmlds2026.jpg">
            <source src="uploads/video.mp4" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-fallback"></div>
    <div class="container">
        <h2 class="section-title">Conference Tracks</h2>
        <p class="section-intro section-intro-light">Explore the core research areas covered by FMLDS2026.</p>

        <div class="tracks-grid">
            <div class="track-item">Future Machine Learning</div>
            <div class="track-item">Advancements of Machine Learning</div>
            <div class="track-item">Machine Learning in Engineering Applications</div>
            <div class="track-item">Pattern Recognition</div>
            <div class="track-item">Computer Vision and Graphics</div>
            <div class="track-item">Robotics and Automation</div>
            <div class="track-item">Bioinformatics and Biomedical Applications</div>
            <div class="track-item">Data Classification and Regression</div>
            <div class="track-item">Data Science and Big Data</div>
            <div class="track-item">Cyber Security and Privacy for Big Data</div>
            <div class="track-item">Knowledge Discovery, Integration and Transformation</div>
            <div class="track-item">Machine Learning in Social Media and Social Network</div>
            <div class="track-item">Machine Learning in Finance and Data Mining</div>
            <div class="track-item">Machine Learning in Internet of Things (IoT)</div>
        </div>
    </div>
</section>

<section class="section event-location">
    <div class="container">
        <div class="event-location-content">
            <div class="event-location-text">
                <span class="section-eyebrow">Venue</span>
                <h2>The event will be held at The University of Hyogo</h2>
                <h3>Kobe, Japan - 20-23 November, 2026</h3>
                <p>
                    The University of Hyogo is a public university located in Hyogo Prefecture, Japan. Kobe is the capital city of Hyogo Prefecture, located about 35 km west of Osaka and 70 km southwest of Kyoto.
                </p>
            </div>
            <div class="event-location-photos">
                <div class="location-photo-grid">
                    <img src="uploads/images/fmlds2026.jpg" alt="The University of Hyogo" class="location-photo">
                    <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=400&h=300&fit=crop" alt="Kobe Cityscape" class="location-photo">
                    <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=400&h=300&fit=crop" alt="Kobe Port Tower" class="location-photo">
                    <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?w=400&h=300&fit=crop" alt="Japanese Garden" class="location-photo">
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_footer();
?>
