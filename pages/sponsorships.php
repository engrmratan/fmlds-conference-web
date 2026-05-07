<?php
/**
 * Sponsorships Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Sponsorships - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Sponsorships</h1>
        
        <div class="card" style="max-width: 900px; margin: 0 auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Become a Sponsor</h2>
                <p style="line-height: 1.8;">
                    The 2025 IEEE International Conference on Future Machine Learning and Data Science (FMLDS) offers excellent 
                    sponsorship opportunities for organizations looking to connect with leading researchers, practitioners, and 
                    industry professionals in the field of Machine Learning and Data Science.
                </p>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Benefits of Sponsorship</h3>
                <ul style="margin-top: 1rem; padding-left: 2rem; line-height: 2;">
                    <li>Brand visibility and recognition</li>
                    <li>Access to conference attendees</li>
                    <li>Networking opportunities</li>
                    <li>Exhibition space</li>
                    <li>Logo placement on conference materials</li>
                </ul>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Contact</h3>
                <p style="margin-top: 1rem; line-height: 1.8;">
                    For sponsorship inquiries, please contact us at <a href="mailto:info@fmlds.org">info@fmlds.org</a> or call +61 431 070 618.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
