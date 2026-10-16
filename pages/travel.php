<?php
/**
 * Travel Information Page
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Travel - FMLDS';
include_header();
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 230px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Travel</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#Visa" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">VISA Information</a>
                            <a href="#Kobe" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Kobe, Japan</a>
                            <a href="#HowTo" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Getting to Kobe</a>
                            <a href="#Accommodation" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Accommodation in Kobe</a>
                            <a href="#AroundKobe" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Getting Around Kobe</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

        <!-- VISA Information -->
        <div id="Visa" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">VISA Information</h2>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">VISA Invitation letter will only be issued for</h4>
                <ul style="padding-left: 2rem; line-height: 2;">
                    <li>Speakers</li>
                    <li>Authors/Presenters</li>
                    <li>Committee members</li>
                    <li>Attendees who have paid their registration fee</li>
                    <li>Exhibitors who have paid their exhibitor fee</li>
                </ul>

                <div style="background: var(--light-bg); padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">VISA Application Process</h4>
                    <ul style="padding-left: 2rem; line-height: 2;">
                        <li>Check visa requirements for your country</li>
                        <li>Apply for visa at least 2-3 months before the conference</li>
                        <li>Obtain invitation letter if required</li>
                        <li>Prepare necessary documents</li>
                        <li>Contact the Japanese embassy or consulate in your country</li>
                    </ul>
                </div>

                <p style="margin-top: 1.5rem; line-height: 1.8;">
                    If you require an invitation letter for visa purposes, please contact us at
                    <a href="mailto:info@fmlds.org">info@fmlds.org</a> after completing your registration.
                </p>
            </div>
        </div>

        <!-- About Kobe, Japan -->
        <div id="Kobe" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">About Kobe, Japan</h2>

                <p style="line-height: 1.8;">
                    Kobe is the capital city of Hyōgo Prefecture, Japan, which is the seventh-largest city and the third-largest port city after Tokyo and Yokohama. It is located in the Kansai region, which makes up the southern side of the main island of Honshū, on the north shore of Osaka Bay. It is part of the Keihanshin metropolitan area along with Osaka and Kyoto. It is located about 35 km (22 mi) west of Osaka and 70 km (43 mi) southwest of Kyoto. The nearest International Airport is 'Kansai International Airport', Osaka, Japan.
                </p>

                <div style="margin-top: 2rem;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Kobe Highlights</h4>
                    <ul style="padding-left: 2rem; line-height: 2;">
                        <li>World-famous Kobe beef</li>
                        <li>Arima Onsen (hot springs)</li>
                        <li>Ikuta Shrine</li>
                        <li>Kobe Port Tower</li>
                        <li>Mount Rokkō and Mount Maya</li>
                        <li>Design City (UNESCO recognition)</li>
                        <li>Japan's first golf course (Kobe Golf Club)</li>
                        <li>Japan's first mosque (Kobe Mosque)</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Getting to Kobe -->
        <div id="HowTo" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Getting to Kobe</h2>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">By Air</h4>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Itami Airport, in nearby Itami, serves primarily domestic flights throughout Japan. Kobe Airport, built on a reclaimed island south of Port Island, also offers mostly domestic and charter flights, while Kansai International Airport in Osaka mainly serves international flights in the area.
                </p>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">By Rail</h4>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    The JR West Sanyō Shinkansen stops at Shin-Kobe Station. Sannomiya Station is the main commuter hub in Kobe, serving as the transfer point for major intercity rail services: the JR Kobe Line connects Kobe to Osaka and Himeji, while both the Hankyū Kobe Line and the Hanshin Main Line run from Kobe to Umeda Station in Osaka. Sanyō Electric Railway trains from Himeji reach Sannomiya via the Kōbe Rapid Transit Railway. Kōbe Electric Railway runs north to Sanda and Arima Onsen.
                </p>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Kobe Municipal Subway provides connections to Shin-Kobe and Sannomiya stations from Kobe's western and eastern suburbs. Additionally, Kobe New Transit runs two lines serving Kobe Airport and Rokko Island.
                </p>
            </div>
        </div>

        <!-- Accommodation in Kobe -->
        <div id="Accommodation" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Accommodation in Kobe</h2>

                <p style="margin-bottom: 2rem; line-height: 1.8;">
                    Kobe offers a wide range of accommodation options from luxury hotels to budget guesthouses. The conference venue is located at The University of Hyogo, which is easily accessible from central Kobe.
                </p>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Recommended Areas</h4>
                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li><strong>Kobe Station Area:</strong> Convenient transportation hub</li>
                    <li><strong>Sannomiya:</strong> Central business district with shopping and dining</li>
                    <li><strong>Motomasa:</strong> Near the conference venue</li>
                    <li><strong>Arima Onsen:</strong> Traditional hot spring area</li>
                </ul>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Booking Tips</h4>
                <ul style="padding-left: 2rem; line-height: 2;">
                    <li>Book early as November is a popular time for conferences</li>
                    <li>Consider hotels with train station access for convenience</li>
                    <li>Check for conference rates and special packages</li>
                    <li>Use hotel booking platforms like Booking.com, Agoda, or Rakuten Travel</li>
                </ul>
            </div>
        </div>

        <!-- Getting Around Kobe -->
        <div id="AroundKobe" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Getting Around Kobe</h2>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Public Transportation</h4>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Kobe has an excellent public transportation system:
                </p>
                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li><strong>JR Trains:</strong> Connect major stations and the airport</li>
                    <li><strong>Subway:</strong> Covers central Kobe areas</li>
                    <li><strong>Buses:</strong> Extensive network throughout the city</li>
                    <li><strong>Cable Cars:</strong> For scenic routes to viewpoints</li>
                </ul>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">IC Cards</h4>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Consider getting an IC card for easy travel:
                </p>
                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li><strong>ICOCA:</strong> Rechargeable card for trains and buses</li>
                    <li><strong>PiTaPa:</strong> Contactless smart card</li>
                    <li>Available at train stations and convenience stores</li>
                </ul>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Taxis and Ride Services</h4>
                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li>Taxis are readily available and reasonably priced</li>
                    <li>Ride-sharing services like Uber are available in Kobe</li>
                    <li>Most taxi drivers speak limited English</li>
                </ul>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Walking and Cycling</h4>
                <ul style="padding-left: 2rem; line-height: 2;">
                    <li>Many areas are walkable, especially in central Kobe</li>
                    <li>Bicycle rentals available in some areas</li>
                    <li>Well-maintained sidewalks and pedestrian paths</li>
                </ul>
            </div>
        </div>

                <!-- Useful Links -->
                <div class="text-center">
                    <h3 style="margin-bottom: 1.5rem; color: var(--primary-color);">Useful Links</h3>
                    <div style="display: flex; justify-content: center; gap: 2rem; flex-wrap: wrap;">
                        <a href="https://www.kobe-cvb.jp/en/" target="_blank" rel="noopener noreferrer" class="btn">Kobe Official Tourism</a>
                        <a href="https://www.hyperdia.com/" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">Train Schedules</a>
                        <a href="https://www.japan-guide.com/e/e2161.html" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">Kobe Travel Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all navigation links and content sections
    const navLinks = document.querySelectorAll('.card nav a');
    const contentSections = document.querySelectorAll('.card[id]');

    // Function to hide all sections
    function hideAllSections() {
        contentSections.forEach(section => {
            section.style.display = 'none';
        });
    }

    // Function to update active classes for nav links
    function updateNavLinkClasses(activeLinkId) {
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === '#' + activeLinkId) {
                link.classList.remove('btn-secondary');
                link.classList.add('btn');
            } else {
                link.classList.remove('btn');
                link.classList.add('btn-secondary');
            }
        });
    }

    // Function to show specific section
    function showSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.style.display = 'block';
        }
    }

    // Function to show specific section and update nav link
    function activateSection(targetId) {
        hideAllSections();
        showSection(targetId);
        updateNavLinkClasses(targetId);
    }

    // Initialize - activate the first section
    if (contentSections.length > 0) {
        const firstSectionId = contentSections[0].id;
        activateSection(firstSectionId);
    }

    // Add click event listeners to navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Get target section id from href
            const targetId = this.getAttribute('href').substring(1); // Remove the '#'

            // Activate the target section
            activateSection(targetId);
        });
    });
});
</script>

<?php include_footer(); ?>
