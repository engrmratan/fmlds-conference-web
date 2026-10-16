<?php
/**
 * Presentation Instructions Page
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Presentation Instructions - FMLDS';
include_header();
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 300px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Presentation Instructions</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#general-instructions" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">General Instructions</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

                <!-- Presentation Instructions Section -->
                <div id="main-content" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Presentation Instructions</h2>

                        <h3 id="general-instructions" style="margin-bottom: 1rem; color: var(--primary-color);">General Instructions:</h3>
                        <ul style="padding-left: 2rem; line-height: 2;">
                            <li>Please prepare a PowerPoint presentation.</li>
                            <li>A presenter will have 10 to 12 minutes to present the paper, including time for questions and answers.</li>
                            <li>Please refer to our presentation template available in both <a href="./2025/docs/FMLDS2025-PowerpointTemplate.pptx" target="_blank" rel="noopener noreferrer" style="color: var(--primary-color); text-decoration: underline;">PowerPoint</a> and <a href="./2025/docs/FMLDS2025-PowerpointTemplate.pdf" target="_blank" rel="noopener noreferrer" style="color: var(--primary-color); text-decoration: underline;">PDF</a> formats.</li>
                            <li>Presenters are welcome to use their own template as well.</li>
                        </ul>
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
        if (targetId === "general-instructions") {
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

<?php include_footer(); ?>