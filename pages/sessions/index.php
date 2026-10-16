<?php
/**
 * Special Sessions Overview Page
 * Displays cards for all special sessions with links to individual pages
 */
require_once __DIR__ . '/../../assets/bootstrap.php';

$pageTitle = 'Special Sessions - FMLDS';
include_header();

// Static sessions data with URLs
$sessions = [
    [
        'title' => 'Advances in HealthAI: Innovations and Applications',
        'description' => 'Exploring cutting-edge AI applications in healthcare, from diagnostic tools to personalized medicine.',
        'date' => '2026-11-20',
        'time' => '09:00:00',
        'location' => 'Main Auditorium',
        'organizer' => 'Dr. Sarah Chen',
        'url' => 'health-ai'
    ],
    [
        'title' => 'Machine Learning Applications in Biomedical and Bioinformatics',
        'description' => 'ML techniques for biomedical data analysis and bioinformatics research.',
        'date' => '2026-11-20',
        'time' => '14:00:00',
        'location' => 'Conference Room A',
        'organizer' => 'Prof. Michael Rodriguez',
        'url' => 'biomedical'
    ],
    [
        'title' => 'Foundation Models in Biomedicine',
        'description' => 'Large-scale models for biomedical research and applications.',
        'date' => '2026-11-21',
        'time' => '10:00:00',
        'location' => 'Main Auditorium',
        'organizer' => 'Dr. Emily Watson',
        'url' => 'foundation-models'
    ],
    [
        'title' => 'Machine Learning for Empathic Computing',
        'description' => 'AI systems with emotional intelligence and human-centered design.',
        'date' => '2026-11-21',
        'time' => '15:00:00',
        'location' => 'Conference Room B',
        'organizer' => 'Prof. David Kim',
        'url' => 'empathic-computing'
    ],
    [
        'title' => 'Application of Machine learning and Artificial intelligence in transportation Systems and Safety',
        'description' => 'AI-driven solutions for smart transportation and safety systems.',
        'date' => '2026-11-22',
        'time' => '09:00:00',
        'location' => 'Main Auditorium',
        'organizer' => 'Dr. James Thompson',
        'url' => 'transportation-safety'
    ],
    [
        'title' => 'Application of Machine learning in Engineering Applications',
        'description' => 'ML applications across various engineering domains.',
        'date' => '2026-11-22',
        'time' => '14:00:00',
        'location' => 'Conference Room A',
        'organizer' => 'Prof. Lisa Park',
        'url' => 'engineering-applications'
    ]
];
?>

<section class="section sessions-section">
    <div class="container">
        <h1 class="section-title">Special Sessions</h1>
        <p class="section-subtitle">Explore focused sessions designed for researchers, practitioners, and innovators shaping the future of machine learning and data science.</p>

        <div class="session-list">
            <?php
            if (!empty($sessions)) {
                foreach ($sessions as $session) {
                    ?>
                    <article class="session-card">
                        <h2 class="session-card-title">
                            <a href="pages/sessions/<?php echo htmlspecialchars($session['url']); ?>/index.php">
                                <?php echo htmlspecialchars($session['title']); ?>
                            </a>
                        </h2>

                        <p class="session-card-description">
                            <?php echo htmlspecialchars($session['description']); ?>
                        </p>

                        <div class="session-card-meta">
                            <?php if ($session['date']): ?>
                                <span>Date: <?php echo formatDate($session['date']); ?></span>
                            <?php endif; ?>
                            <?php if ($session['time']): ?>
                                <span>Time: <?php echo date('h:i A', strtotime($session['time'])); ?></span>
                            <?php endif; ?>
                            <?php if ($session['location']): ?>
                                <span>Location: <?php echo htmlspecialchars($session['location']); ?></span>
                            <?php endif; ?>
                        </div>

                        <div class="session-card-footer">
                            <div class="session-card-organizer">
                                <span>Organizer</span>
                                <strong><?php echo htmlspecialchars($session['organizer']); ?></strong>
                            </div>
                            <a href="pages/sessions/<?php echo htmlspecialchars($session['url']); ?>/index.php" class="session-card-link">
                                View Details
                            </a>
                        </div>
                    </article>
                    <?php
                }
            } else {
                echo '<div class="session-empty">Special sessions will be announced soon. Please check back later.</div>';
            }
            ?>
        </div>
    </div>
</section>

<?php
include_footer();
?>
