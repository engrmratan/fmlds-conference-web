<?php
/**
 * FMLDS Bidding Page
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'FMLDS Bidding - FMLDS';
include_header();
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">FMLDS Bidding</h1>
        
        <div class="card" style="max-width: 900px; margin: 0 auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Host Future FMLDS Conference</h2>
                <p style="line-height: 1.8;">
                    Interested in hosting a future FMLDS conference? We welcome proposals from institutions and 
                    organizations around the world.
                </p>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Bidding Process</h3>
                <p style="margin-top: 1rem; line-height: 1.8;">
                    To submit a bid to host a future FMLDS conference, please contact the organizing committee 
                    with your proposal including:
                </p>
                <ul style="margin-top: 1rem; padding-left: 2rem; line-height: 2;">
                    <li>Proposed location and venue</li>
                    <li>Local organizing committee</li>
                    <li>Supporting institutions</li>
                    <li>Infrastructure and facilities</li>
                    <li>Expected attendance</li>
                </ul>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Contact</h3>
                <p style="margin-top: 1rem; line-height: 1.8;">
                    For bidding inquiries, please contact us at <a href="mailto:info@fmlds.org">info@fmlds.org</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include_footer(); ?>
