<?php
/**
 * One Page Abstract Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'One Page Abstract - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 300px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">One Page Abstract</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#general-policy" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">General Policy</a>
                            <a href="#abstract-formatting" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Abstract Formatting</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

                <!-- One Page Abstract Section -->
                <div id="main-content" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 2rem; color: var(--primary-color);">One Page Abstract Preparation</h2>
                        <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                            Guide to authors for preparing the one page abstract (Industry Track Only):
                        </p>

                        <h3 id="general-policy" style="margin-bottom: 1rem; color: var(--primary-color);">General Policy</h3>
                        <ul style="padding-left: 2rem; line-height: 2;">
                            <li>Abstracts must be submitted in final form.</li>
                            <li>The abstract must not be presented or published elsewhere prior to this conference.</li>
                            <li>An author must not submit more than 3 abstracts.</li>
                        </ul>

                        <h3 id="abstract-formatting" style="margin-top: 2rem; margin-bottom: 1rem; color: var(--primary-color);">Abstract Formatting</h3>
                        <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                            Abstract should be 1 page in length. <a href="https://www.fmlds.org/docs/Abstract_Template_FMLDS.docx" target="_blank" style="color: var(--primary-color); text-decoration: underline;">Click here</a> to download the template.
                        </p>
                        <p style="font-weight: bold; margin-bottom: 1rem;">
                            NOTE: Abstracts will not be published in the conference proceedings.
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
        if (targetId === "general-policy" || targetId === "abstract-formatting") {
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