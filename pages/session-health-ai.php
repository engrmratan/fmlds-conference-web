<?php
/**
 * Health AI Special Session Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Advances in HealthAI - Special Session - FMLDS';
include dirname(__DIR__) . '/includes/header.php';

// Session data
$session = [
    'title' => 'Advances in HealthAI: Innovations and Applications',
    'description' => 'Exploring cutting-edge AI applications in healthcare, from diagnostic tools to personalized medicine.',
    'overview' => 'This session will showcase the latest developments in AI-powered healthcare solutions, including machine learning algorithms for medical imaging, predictive analytics for patient outcomes, and natural language processing for clinical documentation.',
    'objective' => 'To bring together researchers, clinicians, and industry experts to discuss the current state and future directions of AI in healthcare.',
    'topics_of_interest' => 'Medical imaging analysis, Predictive diagnostics, Drug discovery, Clinical decision support systems, Patient data privacy and security.',
    'target_audience' => 'Healthcare professionals, AI researchers, Medical device developers, Policy makers, and Students in health informatics.',
    'date' => '2026-11-20',
    'time' => '09:00:00',
    'location' => 'Main Auditorium',
    'organizer' => 'Dr. Sarah Chen'
];
?>

<section class="section">
    <div class="container">
        <div style="max-width: 1000px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 2rem;">
                <a href="<?php echo SITE_URL; ?>/sessions" class="btn btn-secondary" style="margin-bottom: 1rem;">← Back to Special Sessions</a>
            </div>

            <div class="card">
                <div class="card-body">
                    <h1 style="margin-bottom: 1rem; color: var(--primary-color);"><?php echo htmlspecialchars($session['title']); ?></h1>

                    <div style="margin-bottom: 2rem;">
                        <p class="card-text" style="font-size: 1.1rem; line-height: 1.6;"><?php echo htmlspecialchars($session['description']); ?></p>
                    </div>

                    <div style="background: var(--light-bg); padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Overview</h3>
                        <p style="line-height: 1.6;"><?php echo htmlspecialchars($session['overview']); ?></p>
                    </div>

                    <div style="margin: 2rem 0;">
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Objective</h3>
                        <p style="line-height: 1.6;"><?php echo htmlspecialchars($session['objective']); ?></p>
                    </div>

                    <div style="margin: 2rem 0;">
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Topics of Interest</h3>
                        <ul style="line-height: 1.8; padding-left: 2rem;">
                            <?php foreach (explode(', ', $session['topics_of_interest']) as $topic): ?>
                                <li><?php echo htmlspecialchars($topic); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div style="margin: 2rem 0;">
                        <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Target Audience</h3>
                        <p style="line-height: 1.6;"><?php echo htmlspecialchars($session['target_audience']); ?></p>
                    </div>

                    <div style="background: var(--primary-color); color: white; padding: 2rem; border-radius: 8px; margin: 2rem 0;">
                        <h3 style="margin-bottom: 1rem;">Session Details</h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                            <div>
                                <strong><i class="fas fa-calendar"></i> Date:</strong><br>
                                <?php echo formatDate($session['date']); ?>
                            </div>
                            <div>
                                <strong><i class="fas fa-clock"></i> Time:</strong><br>
                                <?php echo date('h:i A', strtotime($session['time'])); ?>
                            </div>
                            <div>
                                <strong><i class="fas fa-map-marker-alt"></i> Location:</strong><br>
                                <?php echo htmlspecialchars($session['location']); ?>
                            </div>
                            <div>
                                <strong><i class="fas fa-user"></i> Organizer:</strong><br>
                                <?php echo htmlspecialchars($session['organizer']); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>