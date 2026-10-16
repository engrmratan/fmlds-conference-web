<?php
/**
 * Transportation Systems and Safety Special Session Page
 */
require_once __DIR__ . '/../../../assets/bootstrap.php';

$pageTitle = 'ML in Transportation Systems and Safety - Special Session - FMLDS';
include_header();

// Session data
$session = [
    'title' => 'Application of Machine learning and Artificial intelligence in transportation Systems and Safety',
    'description' => 'AI-driven solutions for smart transportation and safety systems.',
    'overview' => 'This session will cover the latest applications of AI and machine learning in transportation systems, including autonomous vehicles, traffic management, and safety monitoring.',
    'objective' => 'To showcase innovative AI solutions for transportation challenges and promote collaboration between industry and academia.',
    'topics_of_interest' => 'Autonomous vehicle systems, Traffic flow optimization, Accident prediction and prevention, Smart city infrastructure, Transportation data analytics.',
    'target_audience' => 'Transportation engineers, Urban planners, Automotive industry professionals, and Policy makers.',
    'date' => '2026-11-22',
    'time' => '09:00:00',
    'location' => 'Main Auditorium',
    'organizer' => 'Dr. James Thompson'
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
