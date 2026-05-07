<?php
/**
 * Funds and Awards Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Funds and Awards - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 300px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Funds and Awards</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#travel-grant" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Travel Grant</a>
                            <a href="#registration-waiver" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Registration Waiver</a>
                            <a href="#wie-award" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">WIE - Women in Engineering Award</a>
                            <a href="#best-paper-award" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Best Paper Award</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

                <!-- Funds and Awards Section -->
                <div id="main-content" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 2rem; color: var(--primary-color);">Funds and Awards</h2>
                        <p style="margin-bottom: 1rem; font-weight: bold;">Application Deadline: 11 Sep, 2025</p>
                        <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                            To encourage young researchers to join the conference, the conference committee has decided to offer some grants and fee waiver programs. The travel grants will reimburse partial or full travel expenses, provided the participant presents their paper in person at the conference venue. Similarly, the registration waiver will cover partial or full registration costs, provided the paper is presented at FMLDS2025.
                        </p>
                        <p style="margin-bottom: 1.5rem; line-height: 1.8;">
                            The Technical Committee will shortlist candidates based on the review scores and comments of their submitted papers. Final recipients will be selected by the sponsor and notified after the paper acceptance deadline.
                        </p>
                        <p style="margin-bottom: 2rem; line-height: 1.8;">
                            The grants are as follows:
                        </p>

                        <h3 id="travel-grant" style="margin-bottom: 1rem; color: var(--primary-color);">Travel Grant</h3>
                        <ul style="padding-left: 2rem; line-height: 2;">
                            <li>This grant will reimburse partial or full travel expenses, provided that the participant presents their paper in person at the conference venue.</li>
                        </ul>

                        <h3 id="registration-waiver" style="margin-top: 2rem; margin-bottom: 1rem; color: var(--primary-color);">Registration Waiver</h3>
                        <ul style="padding-left: 2rem; line-height: 2;">
                            <li>This grant will reimburse partial or full registration cost, provided that the participant presents their paper in person at the conference venue.</li>
                        </ul>

                        <h3 id="wie-award" style="margin-top: 2rem; margin-bottom: 1rem; color: var(--primary-color);">WIE - Women in Engineering Award</h3>
                        <ul style="padding-left: 2rem; line-height: 2;">
                            <li>This grant offers a crest for the best WIE presentation, provided that the participant presents their paper in person at the conference venue.</li>
                        </ul>

                        <h3 id="best-paper-award" style="margin-top: 2rem; margin-bottom: 1rem; color: var(--primary-color);">Best Paper Award</h3>
                        <ul style="padding-left: 2rem; line-height: 2;">
                            <li>This grant will offer a crest for the best paper, provided that the participant presents their paper in person at the conference venue.</li>
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
        // Special handling for funds and awards page, as the content is within one section
        if (targetId === "travel-grant" || targetId === "registration-waiver" || targetId === "wie-award" || targetId === "best-paper-award") {
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