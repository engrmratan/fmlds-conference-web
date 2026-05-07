<?php
/**
 * Past Events Page
 * Displays past events with multiple images
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Past Events - FMLDS';
include dirname(__DIR__) . '/includes/header.php';

// Static past events data
$pastEvents = [
    [
        'title' => 'FMLDS 2024 - Los Angeles, USA',
        'year' => 2024,
        'text' => 'The 2024 IEEE International Conference on Future Machine Learning and Data Science was held in Los Angeles, USA. The conference featured keynote speeches from leading experts in AI and machine learning, with over 300 attendees from around the world. Topics included deep learning, computer vision, and data science applications.',
        'images' => [
            'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=400&h=300&fit=crop'
        ]
    ],
    [
        'title' => 'FMLDS 2023 - Tokyo, Japan',
        'year' => 2023,
        'text' => 'Held at the University of Tokyo, FMLDS 2023 brought together researchers and industry professionals to discuss the latest advancements in machine learning and data science. The conference included workshops on AI ethics, federated learning, and edge computing.',
        'images' => [
            'https://images.unsplash.com/photo-1540959733332-eab4deabeeaf?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1528164344705-47542687000d?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1480796927426-f609979314bd?w=400&h=300&fit=crop'
        ]
    ],
    [
        'title' => 'FMLDS 2022 - Singapore',
        'year' => 2022,
        'text' => 'The 2022 conference in Singapore focused on the intersection of AI and real-world applications. Attendees explored topics ranging from natural language processing to autonomous systems, with special emphasis on sustainable AI development.',
        'images' => [
            'https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1525625293386-3f8f99389edd?w=400&h=300&fit=crop',
            'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?w=400&h=300&fit=crop'
        ]
    ]
];
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Past Events</h1>
        <p class="section-subtitle">Explore our previous conference events</p>
        
        <div class="card-grid">
            <?php
            if (!empty($pastEvents)) {
                foreach ($pastEvents as $event) {
                    ?>
                    <div class="card">
                        <?php if (!empty($event['images'])): ?>
                            <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.5rem; padding: 1rem;">
                                <?php
                                $imgCount = 0;
                                foreach ($event['images'] as $image):
                                    if ($imgCount >= 4) break;
                                    $imgCount++;
                                    ?>
                                    <img src="<?php echo htmlspecialchars($image); ?>" alt="<?php echo htmlspecialchars($event['title']); ?>" style="width: 100%; height: 120px; object-fit: cover; border-radius: 4px;">
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                        <div class="card-body">
                            <h3 class="card-title"><?php echo htmlspecialchars($event['title']); ?></h3>
                            <?php if ($event['year']): ?>
                                <p style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 0.5rem;"><strong>Year:</strong> <?php echo $event['year']; ?></p>
                            <?php endif; ?>
                            <?php if ($event['text']): ?>
                                <p class="card-text"><?php echo nl2br(htmlspecialchars(substr($event['text'], 0, 200))); ?><?php echo strlen($event['text']) > 200 ? '...' : ''; ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<div style="grid-column: 1/-1; text-align: center; padding: 3rem;"><p>Past events will be displayed here. Please check back later.</p></div>';
            }
            ?>
        </div>
    </div>
</section>

<?php
include dirname(__DIR__) . '/includes/footer.php';
?>
