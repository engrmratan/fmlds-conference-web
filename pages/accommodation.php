<?php
/**
 * Accommodation Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Accommodation - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Accommodation</h1>
        
        <div class="card" style="max-width: 900px; margin: 0 auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 1.5rem; color: var(--primary-color);">Conference Venue</h2>
                <p style="line-height: 1.8; font-size: 1.1rem;">
                    The event will be held at the <strong>Holiday Inn, La Mirada – Buena Park, Anaheim</strong>, 
                    just a 7-minute drive from Disneyland. It is well connected by public transport to major 
                    landmarks such as Disneyland, Downtown LA, Hollywood, Long Beach, and more.
                </p>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Hotel Information</h3>
                <p style="margin-top: 1rem; line-height: 1.8;">
                    Special conference rates may be available at the Holiday Inn. Please check back for booking 
                    information and special rates for conference attendees.
                </p>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Nearby Accommodations</h3>
                <p style="margin-top: 1rem; line-height: 1.8;">
                    There are numerous hotels and accommodations available in the Anaheim/Buena Park area, 
                    ranging from budget-friendly options to luxury hotels. The area is well-served by public 
                    transportation, making it easy to reach the conference venue.
                </p>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Contact</h3>
                <p style="margin-top: 1rem; line-height: 1.8;">
                    For accommodation inquiries, please contact us at <a href="mailto:info@fmlds.org">info@fmlds.org</a>.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
