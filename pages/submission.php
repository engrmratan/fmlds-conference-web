<?php
/**
 * Submission Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Paper Submission - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 230px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Paper Submission</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#instruction" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Author Instruction</a>
                            <a href="#paperformat" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Paper Format</a>
                            <a href="#proceedings" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Conference Proceedings</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

        <!-- Author Instruction -->
        <div id="instruction" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Author Instruction</h2>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">General Policy</h3>
                <ul style="padding-left: 2rem; line-height: 2;">
                    <li>Papers must be submitted in their final, publishable form following the IEEE paper format, with a length of 4–6 pages.</li>
                    <li>The paper or it's content must not be presented or published elsewhere prior to this conference.</li>
                    <li>The paper or it's content must not be prepared by Artificial Intelligence Software, like ChatGPT.</li>
                    <li>An author must not submit more than 3 papers.</li>
                    <li>The contents of submitted papers must not significantly overlap with the content of any paper currently under review or that will be submitted during the FMLDS2026.</li>
                    <li>The submitted papers must go through plagiarism checking software. Less than 30% similarity is highly appreciated. Authors should properly site their self references to avoid higher similarity score.</li>
                    <li>The Technical committee retains the right to reject any papers in violation of these requirements.</li>
                </ul>
            </div>
        </div>

        <!-- Paper Format -->
        <div id="paperformat" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Paper Format</h2>

                <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                    Submitted papers should be between 4 and 6 pages in length. Additional pages incur publication fees of USD $100 per page. Please ensure your paper is properly formatted. Authors are required to use the IEEE word A4 template in preparing the paper.
                </p>

                <div style="background: var(--light-bg); padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                    <p style="text-align: center; font-size: 1.1rem; margin-bottom: 1rem;">
                        Click here to download it.
                    </p>
                    <div style="text-align: center;">
                        <a href="https://www.ieee.org/conferences/publishing/templates.html" target="_blank" class="btn">Download IEEE Template</a>
                    </div>
                </div>

                <p style="margin-top: 1.5rem; line-height: 1.8;">
                    More details for IEEE Conference Templates, please visit at
                    <a href="https://www.ieee.org/conferences/publishing/templates.html" target="_blank" style="color: var(--primary-color);">https://www.ieee.org/conferences/publishing/templates.html</a>
                </p>
            </div>
        </div>

        <!-- Conference Proceedings -->
        <div id="proceedings" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Conference Proceedings</h2>

                <p style="line-height: 1.8;">
                    All the full papers submitted to FMLDS2026 will be refereed by at least two independent reviewers based on the relevance of the conference, significance, technical quality, manuscript organization and uptodate references, and if accepted, registered and presented in the conference will be published in the conference proceedings by IEEE Xplore.
                </p>
            </div>
        </div>

                <div class="text-center">
                    <a href="https://edas.info/" target="_blank" class="btn">Submit Your Paper on EDAS</a>
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