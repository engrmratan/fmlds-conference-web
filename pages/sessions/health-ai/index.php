<?php
/**
 * Health AI Special Session Page
 */
require_once __DIR__ . '/../../../assets/bootstrap.php';

$pageTitle = 'Advances in HealthAI - Special Session - FMLDS';
include_header();

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
        <div class="session-detail-shell">
            <a href="pages/sessions/index.php" class="session-detail-back">
                Back to Special Sessions
            </a>

            <div class="session-detail-hero">
                <div>
                    <span class="session-detail-kicker">Special Session</span>
                    <h1 class="session-detail-title"><?php echo htmlspecialchars($session['title']); ?></h1>
                    <p class="session-detail-subtitle"><?php echo htmlspecialchars($session['description']); ?></p>
                </div>

                <div class="session-detail-quick-card">
                    <div class="session-detail-quick-item">
                        <span>Date: <?php echo formatDate($session['date']); ?></span>
                    </div>
                    <div class="session-detail-quick-item">
                        <span>Time: <?php echo date('h:i A', strtotime($session['time'])); ?></span>
                    </div>
                    <div class="session-detail-quick-item">
                        <span>Location: <?php echo htmlspecialchars($session['location']); ?></span>
                    </div>
                    <div class="session-detail-quick-item">
                        <span>Organizer: <?php echo htmlspecialchars($session['organizer']); ?></span>
                    </div>
                </div>
            </div>

            <div class="session-detail-layout">
                <div class="session-detail-main">
                    <div class="session-detail-content-box">
                        <div class="session-detail-content-row">
                            <span class="session-detail-content-label">Overview</span>
                            <p><?php echo htmlspecialchars($session['overview']); ?></p>
                        </div>

                        <div class="session-detail-content-row">
                            <span class="session-detail-content-label">Objective</span>
                            <p><?php echo htmlspecialchars($session['objective']); ?></p>
                        </div>

                        <div class="session-detail-content-row">
                            <span class="session-detail-content-label">Topics of Interest</span>
                            <ul class="session-detail-topic-list">
                                <?php foreach (explode(', ', $session['topics_of_interest']) as $topic): ?>
                                    <li><?php echo htmlspecialchars($topic); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="session-detail-content-row">
                            <span class="session-detail-content-label">Target Audience</span>
                            <p><?php echo htmlspecialchars($session['target_audience']); ?></p>
                        </div>
                    </div>
                </div>

                <aside class="session-detail-sidebar">
                    <div class="session-detail-meta">
                        <h2 class="session-detail-panel-title">Session Details</h2>
                        <div class="session-detail-meta-grid">
                            <div class="session-detail-meta-item">
                                <strong>Date</strong>
                                <span><?php echo formatDate($session['date']); ?></span>
                            </div>
                            <div class="session-detail-meta-item">
                                <strong>Time</strong>
                                <span><?php echo date('h:i A', strtotime($session['time'])); ?></span>
                            </div>
                            <div class="session-detail-meta-item">
                                <strong>Location</strong>
                                <span><?php echo htmlspecialchars($session['location']); ?></span>
                            </div>
                            <div class="session-detail-meta-item">
                                <strong>Organizer</strong>
                                <span><?php echo htmlspecialchars($session['organizer']); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="session-detail-callout">
                        <h2 class="session-detail-callout-title">Present your work</h2>
                        <p>Use the Call for Papers to submit an abstract related to this special session topic.</p>
                        <div class="session-detail-cta">
                            <a href="pages/call-for-papers.php" class="btn">Submit Abstract</a>
                            <a href="pages/sessions/index.php" class="btn btn-secondary">All Sessions</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>

<?php include_footer(); ?>
