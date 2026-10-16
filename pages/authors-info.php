<?php
/**
 * Authors Info Page
 * Main page for authors information
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Authors Info - FMLDS';
include_header();

// Check for sub-page
$subPage = isset($_GET['page']) ? sanitizeInput($_GET['page']) : '';
$subPageFile = '';
if ($subPage !== '' && preg_match('/^[a-z0-9-]+$/', $subPage)) {
    $subPageFile = page_file_path('authors-info/' . $subPage . '.php');
    if (is_file($subPageFile)) {
        include $subPageFile;
        exit;
    }
}
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Authors Information</h1>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
            <a href="pages/funds-awards.php" class="card" style="text-decoration: none;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fas fa-trophy"></i> Funds and Awards</h3>
                    <p class="card-text">Information about funding opportunities and awards for authors.</p>
                </div>
            </a>
            
            <a href="pages/one-page-abstract.php" class="card" style="text-decoration: none;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fas fa-file-alt"></i> One Page Abstract - Industry Track</h3>
                    <p class="card-text">Guidelines for submitting one-page abstracts for the industry track.</p>
                </div>
            </a>
            
            <a href="pages/paper-preparation.php" class="card" style="text-decoration: none;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fas fa-edit"></i> Regular Paper Preparation</h3>
                    <p class="card-text">Guidelines and templates for preparing regular papers.</p>
                </div>
            </a>
            
            <a href="pages/authors-info-submission.php" class="card" style="text-decoration: none;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fas fa-upload"></i> Paper/Abstract Submission</h3>
                    <p class="card-text">Submit your paper or abstract through our submission system.</p>
                </div>
            </a>
            
            <a href="pages/presentation.php" class="card" style="text-decoration: none;">
                <div class="card-body">
                    <h3 class="card-title"><i class="fas fa-presentation"></i> Presentation Instructions</h3>
                    <p class="card-text">Guidelines for preparing and delivering your presentation.</p>
                </div>
            </a>
        </div>
    </div>
</section>

<?php include_footer(); ?>
