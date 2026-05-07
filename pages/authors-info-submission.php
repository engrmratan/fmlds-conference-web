<?php
/**
 * Manuscript Submission Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Paper/Abstract Submission - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 300px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Submission Info</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#submission" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Paper/Abstract Submission</a>
                            <a href="#acknowledgement" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Acknowledgement</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

                <!-- Paper/Abstract Submission Section -->
                <div id="main-content" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 id="submission" style="margin-bottom: 2rem; color: var(--primary-color);">Paper/Abstract Submission</h2>
                        <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                            Please submit your manuscript/abstract (Industry Track Only) via
                        </p>
                        <p style="text-align: center; margin-bottom: 2rem;">
                            <a href="https://cmt3.research.microsoft.com/FMLDS2025." target="_blank" class="btn">Submit Your Paper on Microsoft CMT</a>
                        </p>

                        <h3 id="acknowledgement" style="margin-top: 2rem; margin-bottom: 1rem; color: var(--primary-color);">Acknowledgement</h3>
                        <p style="line-height: 1.8;">
                            The Microsoft CMT service was used for managing the peer-reviewing process for this conference. This service was provided for free by Microsoft and they bore all expenses, including costs for Azure cloud services as well as for software development and support.
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
        if (targetId === "submission" || targetId === "acknowledgement") {
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