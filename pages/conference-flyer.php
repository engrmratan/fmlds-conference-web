<?php
/**
 * Conference Flyer Page
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Conference Flyer - FMLDS';
include_header();
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Conference Flyer</h1>
        
        <div class="card" style="max-width: 900px; margin: 0 auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Download Conference Flyer</h2>
                <p style="line-height: 1.8;">
                    The conference flyer will be available for download soon. Please check back later or contact us 
                    at <a href="mailto:info@fmlds.org">info@fmlds.org</a> for more information.
                </p>
                
                <div class="text-center mt-3">
                    <a href="pages/contact.php" class="btn" style="opacity: 0.85;">Request Flyer</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include_footer(); ?>
