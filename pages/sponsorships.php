<?php
/**
 * Sponsorships Page
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Sponsorships - FMLDS';
include_header();
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <div style="flex: 0 0 230px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Industry / Sponsors</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#conference-sponsorship" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Conference Sponsorship</a>
                            <a href="#exhibition" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Exhibition</a>
                            <a href="#exhibition-schedule" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Exhibition Schedule</a>
                            <a href="#our-sponsors" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Our Sponsors</a>
                            <a href="#our-exhibitors" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Our Exhibitors</a>
                        </nav>
                    </div>
                </div>
            </div>

            <div style="flex: 1;">
                <div id="conference-sponsorship" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Conference Sponsorship</h2>
                        <p style="line-height: 1.8;">
                            Sponsorship opportunities are available for organizations that want to connect with leading researchers, practitioners, industry professionals, and students in Future Machine Learning, Artificial Intelligence, Computer Vision, Machine Learning Applications in Engineering, and Data Science.
                        </p>

                        <div class="table-container" style="margin-top: 2rem;">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sponsorship Package</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Diamond Sponsorship</strong></td>
                                        <td>US $10,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Gold Sponsorship</strong></td>
                                        <td>US $7,500</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Silver Sponsorship</strong></td>
                                        <td>US $5,000</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Bronze Sponsorship</strong></td>
                                        <td>US $2,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <p style="margin-top: 1.5rem; line-height: 1.8;">
                            All sponsorship amounts are listed in USD. For detailed sponsorship packages and benefits, please contact <a href="mailto:info@fmlds.org" style="color: var(--primary-color);">info@fmlds.org</a>.
                        </p>
                    </div>
                </div>

                <div id="exhibition" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Exhibition</h2>
                        <p style="line-height: 1.8;">
                            Dear Industrial Partner, the 2026 IEEE International Conference on Future Machine Learning and Data Science (FMLDS) will take place in Kobe, Japan from November 20 to November 23, 2026.
                        </p>
                        <p style="line-height: 1.8;">
                            This conference will bring international experts in Future Machine Learning Technologies, Artificial Intelligence, Computer Vision, Machine Learning Applications in Engineering, and Data Science. It will feature keynote addresses from prominent world industry and academic leaders in Machine Learning and Data Science.
                        </p>
                        <p style="line-height: 1.8;">
                            The conference will span a wide spectrum of areas within Machine Learning and Data Science research, providing a platform for established and emerging researchers as well as industry practitioners to exchange insights and innovative ideas. It will provide an exceptional opportunity for you to showcase your newest products and services, and we hope you can join us there.
                        </p>
                    </div>
                </div>

                <div id="exhibition-schedule" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Exhibition Schedule</h2>
                        <p style="line-height: 1.8;">TBA</p>
                    </div>
                </div>

                <div id="our-sponsors" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Our Sponsors</h2>
                        <p style="line-height: 1.8;">TBA</p>
                    </div>
                </div>

                <div id="our-exhibitors" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
                    <div class="card-body">
                        <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Our Exhibitors</h2>
                        <p style="line-height: 1.8;">TBA</p>
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

    function showSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.style.display = 'block';
        }
    }

    function activateSection(targetId) {
        hideAllSections();
        showSection(targetId);
        updateNavLinkClasses(targetId);
    }

    if (contentSections.length > 0) {
        const firstSectionId = contentSections[0].id;
        activateSection(firstSectionId);
    }

    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            activateSection(targetId);
        });
    });
});
</script>

<?php include_footer(); ?>
