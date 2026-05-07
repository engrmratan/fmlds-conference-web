<?php
/**
 * Program Schedule Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Tentative Program - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 230px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Tentative Program - FMLDS 2026</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#day0" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Day 0 - Registration & Women in Engineering</a>
                            <a href="#day1" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Day 1 - Main Conference</a>
                            <a href="#day2" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Day 2 - Main Conference</a>
                            <a href="#day3" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Day 3 - Main Conference</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

                <!-- Day 0 - Registration, Networking & Women in Engineering -->
                <div id="day0" class="card" style="margin-bottom: 3rem;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Day 0- Registration, Networking & Women in Engineering (Friday, 20 November 2026)</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">(Friday, 20 November 2026)</h3>

                <table style="width: 100%; border-collapse: collapse; margin: 2rem 0;">
                    <tbody>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; width: 20%;">4:00 pm -6:00pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Registration</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">4:30pm -5:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Greetings and Networking</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">5:30pm -6:00pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Women in Engineering</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

                <!-- Day 1 - Main Conference -->
                <div id="day1" class="card" style="margin-bottom: 3rem;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Day 1 - Main Conference (Saturday, 21 November 2026)</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Day 1 - Main Conference (Saturday, 21 November 2026)</h3>

                <table style="width: 100%; border-collapse: collapse; margin: 2rem 0;">
                    <tbody>
                        <tr style="border: 1px solid var(--border-color); background: var(--light-bg);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; width: 20%;">8:30am -9:00am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">Registration</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">9:00am -9:30am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Opening Ceremony</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">9:30am -10:30am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Plenary Speech</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color); background: var(--light-bg);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">10:30am -11:00am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">TEA BREAK</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">11:00am -12:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">
                                <strong>Session A</strong><br>Future Machine Learning
                                <br><br>
                                <strong>Session B</strong><br>Cyber Security
                            </td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color); background: var(--light-bg);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">12:30pm -1:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">LUNCH BREAK</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">1:30pm -2:00pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Keynote Speech</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">2:00pm -3:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">
                                <strong>Session A</strong><br>Advanced Machine Learning
                                <br><br>
                                <strong>Session B</strong><br>Cyber Security
                            </td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color); background: var(--light-bg);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">3:30pm -3:45pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">AFTERNOON TEA BREAK</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">3:45pm -5:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">POSTER SESSION - Machine Learning and Cyber Security</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

                <!-- Day 2 - Main Conference -->
                <div id="day2" class="card" style="margin-bottom: 3rem;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Day 2 - Main Conference (Sunday, 22 November 2026)</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Day 2 - Main Conference (Sunday, 22 November 2026)</h3>

                <p style="margin-bottom: 2rem; font-weight: bold;">Third Day- 22 November 2026 (Sunday)</p>

                <table style="width: 100%; border-collapse: collapse; margin: 2rem 0;">
                    <tbody>
                        <tr style="border: 1px solid var(--border-color); background: var(--light-bg);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; width: 20%;">8:30am -9:00am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">Registration</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">9:00am -9:45am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Plenary Speech</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">9:45am -10:45am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">
                                <strong>Session A</strong><br>Data Science
                                <br><br>
                                <strong>Session B</strong><br>Machine Learning (ML) in Transport Systems and Safety
                            </td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color); background: var(--light-bg);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">10:45am -11:00am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">TEA BREAK</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">11:00am -11:30am</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Keynote Speech</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">11:30am -12:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">
                                <strong>Session A</strong><br>Computer Vision
                                <br><br>
                                <strong>Session B</strong><br>ML in Transport
                            </td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color); background: var(--light-bg);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">12:30pm -1:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">LUNCH BREAK</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">1:30pm -2:00pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Keynote Speech</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">2:00pm -3:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">
                                <strong>Session A</strong><br>Pattern Recognition
                                <br><br>
                                <strong>Session B</strong><br>ML in Engineering Application
                            </td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color); background: var(--light-bg);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">3:30pm -3:45pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">AFTERNOON TEA BREAK</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">3:45pm -5:45pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">INDUSTRY EXPO and POSTER SESSION- Data Science, ML in Transport and ML in Engineering Application</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color); background: var(--primary-color); color: white;">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">6:30pm -9:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">CONFERENCE DINNER - Registered Guest Only</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

                <!-- Day 3 - Main Conference -->
                <div id="day3" class="card" style="margin-bottom: 3rem;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Day 3 - Main Conference (Monday, 23 November 2026)</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Day 3 - Main Conference (Monday, 23 November 2026)</h3>

                <p style="margin-bottom: 2rem; font-weight: bold;">Fourth Day- 23 November 2026 (Monday)</p>

                <table style="width: 100%; border-collapse: collapse; margin: 2rem 0;">
                    <tbody>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; width: 20%;">9:00am -3:30pm</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color);">Virtual Presentation</td>
                        </tr>
                    </tbody>
                </table>
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

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
