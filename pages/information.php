<?php
/**
 * Information Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Information - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 300px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Information</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#grants" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem;">Grants & Awards</a>
                            <a href="#venue" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem;">Venue / Location</a>
                            <a href="#jobs" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem;">Job Offers</a>
                            <a href="#policies" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem;">Policies And Information</a>
                            <a href="#downloads" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem;">Downloads</a>
                            <a href="#conference-record" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem;">Conference Record Information</a>
                            <a href="#faq" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem;">FAQ</a>
                            <a href="#message-board" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem;">Message Board</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

        <!-- Grants & Awards -->
        <div id="grants" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Grants & Awards</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Best Paper Awards</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    FMLDS2026 will recognize outstanding contributions with Best Paper Awards in several categories. Awards will be presented during the closing ceremony.
                </p>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Award Categories:</h4>
                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li>Best Paper Award - General Track</li>
                    <li>Best Paper Award - Special Sessions</li>
                    <li>Best Student Paper Award</li>
                    <li>Best Poster Award</li>
                </ul>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Student Travel Grants</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    Limited travel grants are available for student authors whose papers have been accepted for presentation at FMLDS2026. Grants will help cover travel and accommodation expenses.
                </p>

                <div style="background: var(--light-bg); padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Eligibility:</h4>
                    <ul style="padding-left: 2rem; line-height: 2;">
                        <li>Full-time students (undergraduate or graduate)</li>
                        <li>First author of an accepted paper</li>
                        <li>Limited financial means</li>
                        <li>Will present the paper at the conference</li>
                    </ul>
                </div>

                <p style="margin-top: 1.5rem; line-height: 1.8;">
                    Applications for travel grants will be reviewed after paper acceptance notifications. More details will be provided in the acceptance letters.
                </p>
            </div>
        </div>

        <!-- Venue / Location -->
        <div id="venue" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Venue / Location</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Conference Venue</h3>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    <strong>The University of Hyogo</strong><br>
                    2167 Shosha, Himeji, Hyogo 671-2280, Japan
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">About the Venue</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    The University of Hyogo is a public university located in Hyogo Prefecture, Japan. It is a comprehensive university established by integrating universities with different fields of study against the background of the diverse regional characteristics of the sea and mountains.
                </p>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Location Advantages:</h4>
                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li>Located in scenic Kobe area with easy access to Osaka and Kyoto</li>
                    <li>Modern facilities equipped for international conferences</li>
                    <li>Excellent public transportation connections</li>
                    <li>Proximity to Kansai International Airport</li>
                </ul>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Address Details</h3>
                <div style="background: var(--light-bg); padding: 1.5rem; border-radius: 8px;">
                    <p><strong>University of Hyogo</strong></p>
                    <p>2167 Shosha, Himeji, Hyogo 671-2280, Japan</p>
                    <p><strong>Phone:</strong> +81-79-267-4930</p>
                    <p><strong>Website:</strong> <a href="https://www.u-hyogo.ac.jp/english/" target="_blank">https://www.u-hyogo.ac.jp/english/</a></p>
                </div>
            </div>
        </div>

        <!-- Job Offers -->
        <div id="jobs" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Job Offers</h2>

                <p style="margin-bottom: 2rem; line-height: 1.8;">
                    FMLDS2026 provides a platform for networking and career opportunities. Academic institutions, research organizations, and industry partners often post job openings during the conference. Check back regularly for updates on available positions.
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Career Opportunities</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    The conference attracts professionals from leading organizations worldwide. This creates excellent opportunities for:
                </p>

                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li>Academic positions (faculty, research positions)</li>
                    <li>Industry roles in tech companies</li>
                    <li>Research positions in national laboratories</li>
                    <li>Postdoctoral opportunities</li>
                    <li>Internship positions</li>
                </ul>

                <div style="background: var(--primary-color); color: white; padding: 2rem; border-radius: 8px; text-align: center;">
                    <h4 style="margin-bottom: 1rem;">Job Board</h4>
                    <p>Job postings will be available during the conference. Check the registration desk or this page for updates.</p>
                    <p style="margin-top: 1rem; font-style: italic;">Coming Soon - Job opportunities will be posted closer to the conference date.</p>
                </div>
            </div>
        </div>

        <!-- Policies And Information -->
        <div id="policies" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Policies And Information</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Code of Conduct</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    FMLDS2026 is committed to providing a harassment-free conference experience for everyone. All participants are expected to treat each other with respect and professionalism.
                </p>

                <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Expected Behavior:</h4>
                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li>Be respectful and inclusive</li>
                    <li>Refrain from harassment in any form</li>
                    <li>Respect diverse backgrounds and perspectives</li>
                    <li>Maintain professional conduct</li>
                    <li>Follow venue rules and regulations</li>
                </ul>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Intellectual Property</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    All presented papers and materials are the intellectual property of their authors. IEEE retains the right to publish accepted papers in IEEE Xplore.
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Photography and Recording</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    Photography is permitted for personal use. Commercial recording or photography requires prior permission from the organizers.
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Cancellation Policy</h3>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Registration cancellations must be made in writing. Refunds will be processed according to the following schedule:
                </p>
                <ul style="padding-left: 2rem; line-height: 2;">
                    <li>60+ days before conference: 80% refund</li>
                    <li>30-59 days before conference: 50% refund</li>
                    <li>Less than 30 days: No refund</li>
                </ul>
            </div>
        </div>

        <!-- Downloads -->
        <div id="downloads" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Downloads</h2>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 2rem;">
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Call for Papers</h4>
                        <p style="margin-bottom: 1.5rem;">Complete CFP document with all track details</p>
                        <button class="btn" disabled>Coming Soon</button>
                    </div>

                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Registration Form</h4>
                        <p style="margin-bottom: 1.5rem;">Printable registration form</p>
                        <button class="btn" disabled>Coming Soon</button>
                    </div>

                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <h4 style="margin-bottom: 1rem; color: var(--primary-color);">IEEE Templates</h4>
                        <p style="margin-bottom: 1.5rem;">Paper formatting templates</p>
                        <a href="https://www.ieee.org/conferences/publishing/templates.html" target="_blank" class="btn">Download</a>
                    </div>

                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Venue Map</h4>
                        <p style="margin-bottom: 1.5rem;">University of Hyogo campus map</p>
                        <button class="btn" disabled>Coming Soon</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Conference Record Information -->
        <div id="conference-record" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Conference Record Information</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">ISBN Information</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    The conference proceedings will be assigned an ISBN number and published in IEEE Xplore. All accepted papers will be included in the proceedings.
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">DOI Assignment</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    Each paper will receive a unique Digital Object Identifier (DOI) for permanent citation and referencing.
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Indexing</h3>
                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    The proceedings will be indexed in major databases including:
                </p>
                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li>IEEE Xplore Digital Library</li>
                    <li>Scopus</li>
                    <li>Web of Science</li>
                    <li>Google Scholar</li>
                </ul>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Open Access</h3>
                <p style="margin-bottom: 1rem; line-height: 1.8;">
                    Authors have the option to make their papers Open Access through IEEE's Open Access program for an additional fee.
                </p>
            </div>
        </div>

        <!-- FAQ -->
        <div id="faq" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Frequently Asked Questions (FAQ)</h2>

                <div style="margin-bottom: 2rem;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Q: What is the paper submission deadline?</h4>
                    <p><strong>A:</strong> The paper submission deadline is April 30, 2026 (11:59:59 pm Japan Standard Time).</p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Q: How many papers can I submit?</h4>
                    <p><strong>A:</strong> An author can submit a maximum of 3 papers. However, each accepted paper requires separate registration.</p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Q: Is there a template for paper formatting?</h4>
                    <p><strong>A:</strong> Yes, authors must use the IEEE conference paper template. Download it from the IEEE website.</p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Q: What is the registration fee?</h4>
                    <p><strong>A:</strong> Registration fees vary by category and timing. Check the registration page for current fees.</p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Q: Will the conference be hybrid?</h4>
                    <p><strong>A:</strong> The main conference will be in-person. Some sessions may be available virtually.</p>
                </div>

                <div style="margin-bottom: 2rem;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Q: Can I get a visa invitation letter?</h4>
                    <p><strong>A:</strong> Visa invitation letters are issued only to registered speakers, authors, committee members, and paid attendees.</p>
                </div>

                <div style="background: var(--light-bg); padding: 2rem; border-radius: 8px; text-align: center;">
                    <p style="margin-bottom: 1rem;"><strong>More questions?</strong></p>
                    <p>Contact us at <a href="mailto:info@fmlds.org">info@fmlds.org</a> for additional information.</p>
                </div>
            </div>
        </div>

        <!-- Message Board -->
        <div id="message-board" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Message Board</h2>

                <p style="margin-bottom: 2rem; line-height: 1.8;">
                    Stay connected with fellow attendees and organizers. This message board will be active during the conference for announcements, updates, and community discussions.
                </p>

                <div style="background: var(--light-bg); padding: 3rem; border-radius: 8px; text-align: center;">
                    <h4 style="margin-bottom: 1rem; color: var(--primary-color);">Coming Soon</h4>
                    <p>The message board will be activated closer to the conference date. Check back for updates and announcements.</p>
                    <div style="margin-top: 2rem;">
                        <button class="btn" disabled>Access Message Board</button>
                    </div>
                </div>

                <h3 style="margin-top: 3rem; margin-bottom: 1rem; color: var(--primary-color);">Latest Announcements</h3>
                <div style="space-y: 1rem;">
                    <div style="border: 1px solid var(--border-color); padding: 1rem; border-radius: 8px;">
                        <p style="font-weight: bold; margin-bottom: 0.5rem;">Welcome to FMLDS2026!</p>
                        <p>We are excited to welcome you to Kobe, Japan for this year's conference. Stay tuned for more updates.</p>
                        <p style="font-size: 0.9rem; color: var(--text-light); margin-top: 0.5rem;">Posted: January 15, 2026</p>
                    </div>
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

    // Function to remove active class from all nav links
    function removeActiveClasses() {
        navLinks.forEach(link => {
            link.classList.remove('btn');
            link.classList.add('btn-secondary');
        });
    }

    // Function to show specific section
    function showSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.style.display = 'block';
        }
    }

    // Function to set active nav link
    function setActiveLink(targetId) {
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === '#' + targetId) {
                link.classList.remove('btn-secondary');
                link.classList.add('btn');
            }
        });
    }

    // Initialize - hide all sections and show first one
    hideAllSections();
    if (contentSections.length > 0) {
        const firstSectionId = contentSections[0].id;
        showSection(firstSectionId);
        setActiveLink(firstSectionId);
    }

    // Add click event listeners to navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Get target section id from href
            const targetId = this.getAttribute('href').substring(1); // Remove the '#'

            // Hide all sections
            hideAllSections();

            // Remove active classes from all nav links
            removeActiveClasses();

            // Show target section
            showSection(targetId);

            // Set clicked link as active
            setActiveLink(targetId);
        });
    });
});
</script>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>