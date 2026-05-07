<?php
/**
 * News Page
 * Displays news articles
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'News - FMLDS';

// Static news data
$newsArticles = [
    [
        'id' => 1,
        'title' => 'FMLDS 2026 Call for Papers Now Open',
        'content' => 'We are excited to announce that the Call for Papers for FMLDS 2026 is now open! The conference will be held in Kobe, Japan from November 20-23, 2026. We welcome submissions across all areas of Machine Learning and Data Science, including but not limited to: Future Machine Learning, Advancements of Machine Learning, Machine Learning in Engineering Applications, Pattern Recognition, Computer Vision and Graphics, Robotics and Automation, Bioinformatics and Biomedical Applications, Data Classification and Regression, Data Science and Big Data, Cyber Security and Privacy for Big Data, Knowledge Discovery, Integration and Transformation, Machine Learning in Social Media and Social Network, Machine Learning in Finance and Data Mining, and Machine Learning in Internet of Things (IoT).',
        'author' => 'Conference Committee',
        'published_at' => '2026-01-15',
        'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800&h=400&fit=crop'
    ],
    [
        'id' => 2,
        'title' => 'Registration Fees and Deadlines Announced',
        'content' => 'Registration for FMLDS 2026 is now available with competitive pricing for different categories. Early bird registration is available until August 30, 2026. Academic registration starts at $500 for early bird, while industry professionals can register for $800. Student rates are also available at $300. All accepted papers will be published in IEEE Xplore. Don\'t miss the early bird deadline to save on registration fees!',
        'author' => 'Registration Team',
        'published_at' => '2026-02-01',
        'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&h=400&fit=crop'
    ],
    [
        'id' => 3,
        'title' => 'Keynote Speakers Announced',
        'content' => 'We are thrilled to announce our distinguished keynote speakers for FMLDS 2026. Professor Roummel Marcia from UC Merced will speak on "Future Directions in Machine Learning". Professor Essam Rashed from the University of Hyogo will present on "AI in Engineering Applications". Professor Manish Wadhwa from Salem State University will discuss "Data Science in the Modern Era". Additional speakers will be announced in the coming weeks.',
        'author' => 'Program Committee',
        'published_at' => '2026-02-15',
        'image' => 'https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=800&h=400&fit=crop'
    ],
    [
        'id' => 4,
        'title' => 'Special Sessions and Workshops',
        'content' => 'FMLDS 2026 will feature several exciting special sessions and workshops. Topics include "Advances in HealthAI: Innovations and Applications", "Machine Learning Applications in Biomedical and Bioinformatics", "Foundation Models in Biomedicine", "Machine Learning for Empathic Computing", and "Application of Machine learning and Artificial intelligence in transportation Systems and Safety". These sessions provide unique opportunities for in-depth discussions and networking.',
        'author' => 'Technical Committee',
        'published_at' => '2026-03-01',
        'image' => 'https://images.unsplash.com/photo-1556761175-4b46a572b786?w=800&h=400&fit=crop'
    ]
];

// Check if viewing single news item
if (isset($_GET['id'])) {
    $newsId = (int)$_GET['id'];
    $selectedNews = null;

    foreach ($newsArticles as $article) {
        if ($article['id'] === $newsId) {
            $selectedNews = $article;
            break;
        }
    }

    if ($selectedNews) {
        $pageTitle = htmlspecialchars($selectedNews['title']) . ' - News - FMLDS';
        include dirname(__DIR__) . '/includes/header.php';
        ?>

        <section class="section">
            <div class="container">
                <div style="max-width: 800px; margin: 0 auto;">
                    <a href="<?php echo SITE_URL; ?>/news" class="btn btn-secondary" style="margin-bottom: 2rem;">← Back to News</a>

                    <div class="card">
                        <?php if (!empty($selectedNews['image'])): ?>
                            <img src="<?php echo htmlspecialchars($selectedNews['image']); ?>" alt="<?php echo htmlspecialchars($selectedNews['title']); ?>" class="card-image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h1 style="font-size: 2rem; margin-bottom: 1rem;"><?php echo htmlspecialchars($selectedNews['title']); ?></h1>

                            <div style="margin-bottom: 1.5rem; color: var(--text-light);">
                                <?php if ($selectedNews['author']): ?>
                                    <span><i class="fas fa-user"></i> <?php echo htmlspecialchars($selectedNews['author']); ?></span>
                                <?php endif; ?>
                                <span style="margin-left: 1rem;"><i class="fas fa-calendar"></i> <?php echo formatDate($selectedNews['published_at']); ?></span>
                            </div>

                            <div style="line-height: 1.8; font-size: 1.05rem;">
                                <?php echo nl2br(htmlspecialchars($selectedNews['content'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
        include dirname(__DIR__) . '/includes/footer.php';
        exit;
    }
}

// List all news
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">News & Announcements</h1>
        <p class="section-subtitle">Stay updated with the latest conference news</p>
        
        <div class="card-grid">
            <?php
            if (!empty($newsArticles)) {
                foreach ($newsArticles as $news) {
                    ?>
                    <div class="card">
                        <?php if (!empty($news['image'])): ?>
                            <img src="<?php echo htmlspecialchars($news['image']); ?>" alt="<?php echo htmlspecialchars($news['title']); ?>" class="card-image">
                        <?php endif; ?>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo htmlspecialchars($news['title']); ?></h3>
                            <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 1rem;">
                                <i class="fas fa-calendar"></i> <?php echo formatDate($news['published_at']); ?>
                            </p>
                            <p class="card-text"><?php echo substr(strip_tags($news['content']), 0, 150) . '...'; ?></p>
                            <a href="<?php echo SITE_URL; ?>/news/<?php echo $news['id']; ?>" class="btn btn-secondary">Read More</a>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<div style="grid-column: 1/-1; text-align: center; padding: 3rem;"><p>No news available at the moment. Please check back later.</p></div>';
            }
            ?>
        </div>
    </div>
</section>

<?php
include dirname(__DIR__) . '/includes/footer.php';
?>
