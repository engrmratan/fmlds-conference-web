<?php
/**
 * Paper Preparation Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Paper Preparation - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 300px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Paper Preparation</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#general-policy" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">General Policy</a>
                            <a href="#paper-formatting" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Paper Formatting</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

                <!-- Manuscript (Paper) Preparation Section -->
                <div id="main-content" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Manuscript (Paper) Preparation</h2>
                        <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                            Guide to authors for preparing the manuscript (regular paper):
                        </p>

                        <h3 id="general-policy" style="margin-bottom: 1rem; color: var(--primary-color);">General Policy</h3>
                        <ul style="padding-left: 2rem; line-height: 2;">
                            <li>Papers must be submitted in final and publishable form.</li>
                            <li>The paper or its content must not be presented or published elsewhere prior to this conference.</li>
                            <li>An author must not submit more than 3 papers.</li>
                            <li>The contents of submitted papers must not significantly overlap with the content of any paper currently under review or that will be submitted during the FMLDS2025.</li>
                            <li>The submitted papers must go through plagiarism checking software. Less than 30% similarity is highly appreciated. Authors should properly site their self references to avoid higher similarity score.</li>
                            <li>The Technical committee retains the right to reject any papers in violation of these requirements.</li>
                        </ul>

                        <h3 id="paper-formatting" style="margin-top: 2rem; margin-bottom: 1rem; color: var(--primary-color);">Paper Formatting</h3>
                        <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                            Submitted papers should be between 4 and 6 pages in length. Additional pages incur publication fees of USD $200 per page. Please ensure your paper is properly formatted. Authors are required to use the IEEE word A4 template in preparing the paper.
                            <a href="https://www.ieee.org/conferences/publishing/templates.html" target="_blank" style="color: var(--primary-color); text-decoration: underline;">Click here to download it.</a>
                        </p>
                        <p style="margin-top: 1.5rem; line-height: 1.8;">
                            More details for IEEE Conference Templates, please visit at
                            <a href="https://www.ieee.org/conferences/publishing/templates.html" target="_blank" style="color: var(--primary-color);">https://www.ieee.org/conferences/publishing/templates.html</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const navLinks = document.querySelectorAll('.card nav a');
    const contentSections = document.querySelectorAll('.card[id]');

    function hideAllSections() {
        contentSections.forEach(section => {
            section.style.display = 'none';
        });
    }

    function showSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.style.display = 'block';
        }
    }

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

    // Initialize - activate the first section or section based on URL hash
    const initialHash = window.location.hash.substring(1);
    if (initialHash) {
        activateSection(initialHash);
    } else if (contentSections.length > 0) {
        const firstSectionId = contentSections[0].id;
        activateSection(firstSectionId);
    }

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            activateSection(targetId);
            window.history.pushState(null, '', '#' + targetId); // Update URL hash
        });
    });

    function activateSection(targetId) {
        hideAllSections();
        // Special handling for this page, as the content is within one section and we scroll to anchors
        if (targetId === "general-policy" || targetId === "paper-formatting") {
             showSection("main-content");
             const targetElement = document.getElementById(targetId);
             if (targetElement) {
                 targetElement.scrollIntoView({ behavior: 'smooth' });
             }
        } else {
            showSection(targetId);
        }
        updateNavLinkClasses(targetId);
    }
});
</script>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>