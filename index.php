<?php
require_once 'config/config.php';

$pageTitle = '2025 IEEE International Conference on Future Machine Learning and Data Science (FMLDS)';
include 'includes/header.php';

?>

<section class="section conference-title-section">
    <div class="particle-1"></div>
    <div class="particle-2"></div>
    <div class="particle-3"></div>
    <div class="container">
        <div class="conference-title-content">
            <h1 style="font-style: italic;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;font-size: 18px;font-weight: 500; margin-bottom: 0.5rem;"> Welcome to</h1>
            <h1>2026 IEEE International Conference on</h1>
            <h2>Future Machine Learning </br> and Data Science (FMLDS)</h2>
            <p class="conference-date-location">20-23 November, 2026 | Kobe, Japan</p>
            <div class="small-logos">
                <div class="small-logo-text"><img src="<?php echo SITE_URL; ?>/assets/images/ieee.png" alt=""></div>
                <div class="small-logo-text"><img src="<?php echo SITE_URL; ?>/assets/images/gcstmr.png" alt=""></div>
            </div>
        </div>
    </div>
</section>

<section class="section welcome-section">
    <div class="container">
        <div class="welcome-main-content">
            <div class="welcome-section-one">
                <div class="welcome-header">
                    <h3 class="welcome-sub-title"> Future Machine Learning and Data Science (FMLDS) 2026</h3>
                </div>
                <div class="welcome-content-text">
                    <p>
                        FMLDS2026 will bring international experts in Future Machine Learning Technologies, Artificial Intelligence, Computer Vision, Machine Learning Applications in Engineering and Data Science. It will feature keynote addresses from prominent world industry and academic leaders in Machine Learning and Data Science. It will span a wide spectrum of areas within Machine Learning and Data Science research, providing a platform for established and emerging researchers as well as industry practitioners to exchange insights and innovative ideas. </br></br>
                        FMLDS2026 will be hosted in The University of Hyogo, Japan. It is a public university located in Hyogo Prefecture. The University of Hyogo is a comprehensive university established by integrating universities with different fields of study against the background of the diverse regional characteristics of the sea and mountains. Kobe is the capital city of Hyōgo Prefecture, Japan, which is the seventh-largest city and the third-largest port city after Tokyo and Yokohama. It is located in the Kansai region, which makes up the southern side of the main island of Honshū, on the north shore of Osaka Bay. It is part of the Keihanshin metropolitan area along with Osaka and Kyoto. It is located about 35 km (22 mi) west of Osaka and 70 km (43 mi) southwest of Kyoto. The nearest International Airport is 'Kansai International Airport', Osaka, Japan. </br></br>
                        Kobe is the most famous for its Kobe beef (which is raised in the surrounding Hyōgo Prefecture) and Arima Onsen (hot springs). Notable buildings include the Ikuta Shrine as well as the Kobe Port Tower. Nearby mountains such as Mount Rokkō and Mount Maya overlook the city. The city is recognized as a "Design City" by UNESCO. Kobe is the site of Japan's first golf course, Kobe Golf Club, established by Arthur Hesketh Groom in 1903, and Japan's first mosque, Kobe Mosque, built in 1935. </br></br>                   
                    </p>
                    <div class="welcome-location-badge">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Kobe, Japan</span>
                    </div>
                </div>
            </div>
            
            <div class="welcome-section-two">
                <div class="welcome-section-two-inner">
                    <div class="welcome-ieee-text">
                        <div class="welcome-ieee-header">
                            <div class="ieee-icon-wrapper">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <h3 class="welcome-ieee-title">The IEEE FMLDS2026</h3>
                        </div>
                        <div class="welcome-ieee-content">
                            <p>
                                FMLDS2026 welcomes paper submissions from both academic and industry researchers across all areas of Machine Learning and Data Science. Submissions may be either a 4-6 page regular paper or a 1-page abstract. All submitted papers will undergo a rigorous review process by at least two independent referees. Accepted, registered, and presented regular papers will be published in the conference proceedings by IEEE Xplore.                            
                            </p>
                            <div class="welcome-ieee-badge">
                                <i class="fas fa-check-circle"></i>
                                <span>IEEE Xplore Publication</span>
                            </div>
                        </div>
                    </div>
                    <div class="welcome-ieee-image">
                        <img src="<?php echo SITE_URL; ?>/assets/images/fmlds2026.jpg" alt="IEEE FMLDS Conference" class="welcome-ieee-photo">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section plenary-speakers-section">
    <div class="container">
        <h2 class="section-title" style="text-align: left; border-bottom: 2px solid var(--border-color); padding-bottom: 1rem; margin-bottom: 2rem;">
            <strong>Plenary and Keynote Speakers</strong>
        </h2>

        <div class="speakers-grid">
            <?php
            $defaultSpeakers = [
                ['name' => 'Professor Roummel Marcia', 'affiliation' => 'University of California, Merced, USA', 'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=faces'],
                ['name' => 'Professor Essam Rashed', 'affiliation' => 'University of Hyogo, Japan', 'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=faces'],
                ['name' => 'Professor Manish Wadhwa', 'affiliation' => 'Salem State University, USA', 'photo' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=400&fit=crop&crop=faces'],
                ['name' => 'Professor Virginia de Sa', 'affiliation' => 'University of California, San Diego, USA', 'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop&crop=faces'],
                ['name' => 'Associate Professor Salman Asif', 'affiliation' => 'University of California, Riverside, USA', 'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop&crop=faces']
            ];
            foreach ($defaultSpeakers as $speaker) {
                ?>
                <div class="speaker-card-compact">
                    <img src="<?php echo htmlspecialchars($speaker['photo']); ?>" alt="<?php echo htmlspecialchars($speaker['name']); ?>" class="speaker-image">
                    <h4 class="speaker-name"><?php echo htmlspecialchars($speaker['name']); ?></h4>
                    <p class="speaker-title"><?php echo htmlspecialchars($speaker['affiliation']); ?></p>
                    <a href="<?php echo SITE_URL; ?>/speakers" class="btn btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem; font-size: 0.9rem;">Visit Profile</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<section class="section industry-speakers-section">
    <div class="container">
        <h2 class="section-title" style="text-align: left; border-bottom: 2px solid var(--border-color); padding-bottom: 1rem; margin-bottom: 2rem;">
            <strong>Industry Track Speakers</strong>
        </h2>

        <div class="speakers-grid">
            <?php
            $defaultIndustry = [
                ['name' => 'Mr Anupam Chansarkar', 'affiliation' => 'Amazon, California, USA', 'photo' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=400&fit=crop&crop=faces'],
                ['name' => 'Mr Abhijeet Mukkawar', 'affiliation' => 'Siemens, Texas, USA', 'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=faces']
            ];
            foreach ($defaultIndustry as $speaker) {
                ?>
                <div class="speaker-card-compact">
                    <img src="<?php echo htmlspecialchars($speaker['photo']); ?>" alt="<?php echo htmlspecialchars($speaker['name']); ?>" class="speaker-image">
                    <h4 class="speaker-name"><?php echo htmlspecialchars($speaker['name']); ?></h4>
                    <p class="speaker-title"><?php echo htmlspecialchars($speaker['affiliation']); ?></p>
                    <a href="<?php echo SITE_URL; ?>/speakers" class="btn btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem; font-size: 0.9rem;">More</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<section class="section women-speakers-section">
    <div class="container">
        <h2 class="section-title" style="text-align: left; border-bottom: 2px solid var(--border-color); padding-bottom: 1rem; margin-bottom: 2rem;">
            <strong>Women In Engineering</strong>
        </h2>

        <div class="speakers-grid">
            <?php
            $defaultWomen = [
                ['name' => 'Dr Naila Mukhtar', 'affiliation' => 'The University of Sydney, Australia', 'photo' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop&crop=faces'],
                ['name' => 'Dr Behnaz Merikhi', 'affiliation' => 'Northeastern University – Toronto, Canada', 'photo' => 'https://images.unsplash.com/photo-1580489944761-15a19d654d0b?w=400&h=400&fit=crop&crop=faces'],
                ['name' => 'Dr Meriam Gay Bautista-Jurney', 'affiliation' => 'Lawrence Berkeley National Laboratory, California, USA', 'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop&crop=faces'],
                ['name' => 'Dr Fariah Mahzabeen', 'affiliation' => 'North South University, Bangladesh', 'photo' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=400&fit=crop&crop=faces']
            ];
            foreach ($defaultWomen as $speaker) {
                ?>
                <div class="speaker-card-compact">
                    <img src="<?php echo htmlspecialchars($speaker['photo']); ?>" alt="<?php echo htmlspecialchars($speaker['name']); ?>" class="speaker-image">
                    <h4 class="speaker-name"><?php echo htmlspecialchars($speaker['name']); ?></h4>
                    <p class="speaker-title"><?php echo htmlspecialchars($speaker['affiliation']); ?></p>
                    <a href="<?php echo SITE_URL; ?>/speakers" class="btn btn-secondary" style="margin-top: 1rem; padding: 0.5rem 1rem; font-size: 0.9rem;">More</a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<section class="section conference-tracks">
    <div class="video-background">
        <video autoplay muted loop playsinline preload="metadata" poster="<?php echo SITE_URL; ?>/assets/images/fmlds2026.jpg">
            <source src="<?php echo SITE_URL; ?>/assets/images/video.mp4" type="video/mp4">
        </video>
        <div class="video-overlay"></div>
    </div>
    <div class="video-fallback" style="display: none; position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: linear-gradient(135deg, var(--dark-blue) 0%, var(--primary-color) 100%); z-index: 0;"></div>
    <div class="container">
        <h2 class="section-title">
            <strong>Conference Tracks</strong>
        </h2>
        
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

<section class="section">
    <div class="container">
        <h2 class="section-title" style="text-align: left; border-bottom: 2px solid var(--border-color); padding-bottom: 1rem; margin-bottom: 2rem;">
            <strong>Special Sessions</strong>
        </h2>
        
        <div class="sessions-grid-two">
            <?php
            $defaultSessions = [
                ['title' => 'Advances in HealthAI: Innovations and Applications', 'desc' => 'Exploring cutting-edge AI applications in healthcare'],
                ['title' => 'Machine Learning Applications in Biomedical and Bioinformatics', 'desc' => 'ML techniques for biomedical data analysis'],
                ['title' => 'Foundation Models in Biomedicine', 'desc' => 'Large-scale models for biomedical research'],
                ['title' => 'Machine Learning for Empathic Computing', 'desc' => 'AI systems with emotional intelligence'],
                ['title' => 'Application of Machine learning and Artificial intelligence in transportation Systems and Safety', 'desc' => 'AI-driven solutions for smart transportation'],
                ['title' => 'Application of Machine learning in Engineering Applications', 'desc' => 'ML applications across engineering domains']
            ];
            foreach ($defaultSessions as $session) {
                ?>
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo htmlspecialchars($session['title']); ?></h3>
                        <?php if (!empty($session['desc'])): ?>
                            <p class="card-text"><?php echo htmlspecialchars($session['desc']); ?></p>
                        <?php endif; ?>
                        <a href="<?php echo SITE_URL; ?>/sessions" class="btn btn-secondary">More Details</a>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<section class="section key-dates-section">
    <div class="container">
        <h2 class="section-title">Key Dates</h2>
        <div class="key-dates-grid">
            <div class="date-card">
                <div class="date-icon">
                    <i class="fas fa-upload"></i>
                </div>
                <div class="date-content">
                    <h3>Paper Submission</h3>
                    <p class="date-deadline">March 15, 2025</p>
                    <span class="date-status">Extended Deadline</span>
                </div>
            </div>
            <div class="date-card">
                <div class="date-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="date-content">
                    <h3>Acceptance Notification</h3>
                    <p class="date-deadline">April 30, 2025</p>
                    <span class="date-status">Rolling Basis</span>
                </div>
            </div>
            <div class="date-card">
                <div class="date-icon">
                    <i class="fas fa-camera"></i>
                </div>
                <div class="date-content">
                    <h3>Camera Ready</h3>
                    <p class="date-deadline">May 15, 2025</p>
                    <span class="date-status">Final Submission</span>
                </div>
            </div>
            <div class="date-card">
                <div class="date-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="date-content">
                    <h3>Conference Dates</h3>
                    <p class="date-deadline">Nov 02-05, 2025</p>
                    <span class="date-status">Los Angeles, USA</span>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo SITE_URL; ?>/key-dates" class="btn">View All Dates</a>
        </div>
    </div>
</section>

<section class="section call-for-papers-highlight">
    <div class="container">
        <div class="cfp-content">
            <div class="cfp-text">
                <h2 class="section-title">Call for Papers</h2>
                <p class="cfp-description">
                    FMLDS2025 invites researchers, practitioners, and industry professionals to submit their original research papers across all areas of Machine Learning and Data Science. We welcome both theoretical and applied contributions.
                </p>
                <div class="cfp-details">
                    <div class="cfp-item">
                        <i class="fas fa-file-alt"></i>
                        <span>4-6 page regular papers</span>
                    </div>
                    <div class="cfp-item">
                        <i class="fas fa-lightbulb"></i>
                        <span>1-page abstracts</span>
                    </div>
                    <div class="cfp-item">
                        <i class="fas fa-users"></i>
                        <span>Multiple tracks available</span>
                    </div>
                </div>
                <div class="cfp-actions">
                    <a href="<?php echo SITE_URL; ?>/call-for-papers" class="btn">Submit Paper</a>
                    <a href="<?php echo SITE_URL; ?>/call-for-papers" class="btn btn-secondary">View Tracks</a>
                </div>
            </div>
            <div class="cfp-visual" style="margin-top: 30px;">
                <div class="cfp-stats">
                    <div class="stat-circle">
                        <span class="stat-number">500+</span>
                        <span class="stat-label">Expected Submissions</span>
                    </div>
                    <div class="stat-circle">
                        <span class="stat-number">100+</span>
                        <span class="stat-label">Accepted Papers</span>
                    </div>
                    <div class="stat-circle">
                        <span class="stat-number">50+</span>
                        <span class="stat-label">Reviewers</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section event-location">
    <div class="container">
        <div class="event-location-content">
            <div class="event-location-text">
                <h2>The event will be held at The University of Hyogo</h2>
                <h3>Kobe, Japan - 20-23 November, 2026</h3>
                <p>
                    The University of Hyogo is a public university located in Hyogo Prefecture, Japan. It is a comprehensive university established by integrating universities with different fields of study. Kobe is the capital city of Hyogo Prefecture, located about 35 km west of Osaka and 70 km southwest of Kyoto.
                </p>
                <div class="location-features">
                    <div class="location-feature">
                        <i class="fas fa-plane"></i>
                        <span>Kansai International Airport</span>
                    </div>
                    <div class="location-feature">
                        <i class="fas fa-train"></i>
                        <span>Excellent public transport</span>
                    </div>
                    <div class="location-feature">
                        <i class="fas fa-utensils"></i>
                        <span>Famous for Kobe beef</span>
                    </div>
                </div>
            </div>
            <div class="event-location-photos">
                <div class="location-photo-grid">
                    <img src="<?php echo SITE_URL; ?>/assets/images/fmlds2026.jpg" alt="The University of Hyogo" class="location-photo">
                    <img src="https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=400&h=300&fit=crop" alt="Kobe Cityscape" class="location-photo">
                    <img src="https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=400&h=300&fit=crop" alt="Kobe Port Tower" class="location-photo">
                    <img src="https://images.unsplash.com/photo-1528164344705-47542687000d?w=400&h=300&fit=crop" alt="Japanese Garden" class="location-photo">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section important-dates-section">
    <div class="container">
        <h2 class="section-title">Important Dates</h2>
        <div class="dates-timeline">
            <div class="date-item">
                <div class="date-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="date-content">
                    <h4>Paper Submission Deadline</h4>
                    <p>August 30, 2026</p>
                </div>
            </div>
            <div class="date-item">
                <div class="date-icon">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="date-content">
                    <h4>Acceptance Notification</h4>
                    <p>September 30, 2026</p>
                </div>
            </div>
            <div class="date-item">
                <div class="date-icon">
                    <i class="fas fa-credit-card"></i>
                </div>
                <div class="date-content">
                    <h4>Early Bird Registration</h4>
                    <p>October 15, 2026</p>
                </div>
            </div>
            <div class="date-item">
                <div class="date-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="date-content">
                    <h4>Conference Dates</h4>
                    <p>November 20-23, 2026</p>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="<?php echo SITE_URL; ?>/key-dates" class="btn">View All Dates</a>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>
