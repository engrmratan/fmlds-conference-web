<?php
/**
 * Biomedical and Bioinformatics Special Session Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Machine Learning in Biomedical and Bioinformatics - Special Session - FMLDS';
include dirname(__DIR__) . '/includes/header.php';

// Session data
$session = [
    'title' => 'Machine Learning Applications in Biomedical and Bioinformatics',
    'description' => 'ML techniques for biomedical data analysis and bioinformatics research.',
    'overview' => 'This session focuses on the application of machine learning techniques to analyze complex biomedical datasets, including genomics, proteomics, and clinical data.',
    'objective' => 'To demonstrate practical applications of ML in biomedical research and foster collaborations between computer scientists and biomedical researchers.',
    'topics_of_interest' => 'Genomic data analysis, Protein structure prediction, Drug-target interaction prediction, Clinical trial optimization, Biomedical image analysis.',
    'target_audience' => 'Bioinformatics researchers, Computational biologists, Pharmaceutical researchers, and Graduate students.',
    'date' => '2026-11-20',
    'time' => '14:00:00',
    'location' => 'Conference Room A',
    'organizer' => 'Prof. Michael Rodriguez'
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