<?php
/**
 * Special Sessions Overview Page
 * Displays cards for all special sessions with links to individual pages
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Special Sessions - FMLDS';
include dirname(__DIR__) . '/includes/header.php';

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

<section class="section">
    <div class="container">
        <h1 class="section-title">Special Sessions</h1>
        <p class="section-subtitle">Explore our special sessions and workshops</p>

        <div class="card-grid">
            <?php
            if (!empty($sessions)) {
                foreach ($sessions as $session) {
                    ?>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo htmlspecialchars($session['title']); ?></h3>

                            <p class="card-text"><?php echo htmlspecialchars($session['description']); ?></p>

                            <div style="margin-top: 1.5rem; padding-top: 1rem; border-top: 1px solid var(--border-color);">
                                <?php if ($session['date']): ?>
                                    <p style="font-size: 0.9rem;"><strong><i class="fas fa-calendar"></i> Date:</strong> <?php echo formatDate($session['date']); ?></p>
                                <?php endif; ?>

                                <?php if ($session['time']): ?>
                                    <p style="font-size: 0.9rem;"><strong><i class="fas fa-clock"></i> Time:</strong> <?php echo date('h:i A', strtotime($session['time'])); ?></p>
                                <?php endif; ?>

                                <?php if ($session['location']): ?>
                                    <p style="font-size: 0.9rem;"><strong><i class="fas fa-map-marker-alt"></i> Location:</strong> <?php echo htmlspecialchars($session['location']); ?></p>
                                <?php endif; ?>

                                <?php if ($session['organizer']): ?>
                                    <p style="font-size: 0.9rem;"><strong><i class="fas fa-user"></i> Organizer:</strong> <?php echo htmlspecialchars($session['organizer']); ?></p>
                                <?php endif; ?>
                            </div>

                            <div style="margin-top: 2rem; text-align: center;">
                                <a href="<?php echo SITE_URL; ?>/sessions/<?php echo $session['url']; ?>" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<div style="grid-column: 1/-1; text-align: center; padding: 3rem;"><p>Special sessions will be announced soon. Please check back later.</p></div>';
            }
            ?>
        </div>
    </div>
</section>

<?php
include dirname(__DIR__) . '/includes/footer.php';
?>
