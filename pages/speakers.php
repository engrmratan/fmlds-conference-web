<?php
/**
 * Speakers Page
 * Displays speakers for FMLDS2026
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Speakers - FMLDS';
include_header();

// Static speaker data organized by categories
$speakersData = [
    'plenary' => [
        'title' => 'Plenary Speakers',
        'speakers' => [
            [
                'name' => 'Professor Toshio Fukuda',
                'affiliation' => 'Nagoya University, Japan',
                'photo' => 'uploads/images/plenary/ProfToshioFukuda.jpg',
                'title' => 'Professor',
                'bio' => 'Professor Toshio Fukuda is an Emeritus Professor at Nagoya University, Japan, and served as the IEEE President in 2020. He is the Program Director (PD) for the Moonshot Goal 3 "Realization of AI robots that autonomously learn, adapt to their environment, evolve in intelligence and act alongside human beings, by 2050."',
                'more_link' => 'https://www.toshiofukuda.org/'
            ],
            [
                'name' => 'Professor Kaoru Ota',
                'affiliation' => 'Tohoku University, Japan',
                'photo' => 'uploads/images/plenary/ProfOta.jpg',
                'title' => 'Distinguished Professor',
                'bio' => 'Kaoru Ota received her B.S. and Ph.D. degrees from the University of Aizu, Japan, and her M.S. from Oklahoma State University. She is a Distinguished Professor at Tohoku University and Professor at Muroran Institute of Technology. She is a Clarivate Analytics Highly Cited Researcher and Fellow of AAIA.',
                'more_link' => 'https://u.muroran-it.ac.jp/enes/~ota/index.html'
            ]
        ]
    ],
    'keynote' => [
        'title' => 'Keynote Speakers',
        'speakers' => [
            [
                'name' => 'Professor Yulan Guo',
                'affiliation' => 'Sun Yat-sen University, China',
                'photo' => 'uploads/images/keynote/ProfYulan.png',
                'title' => 'Professor',
                'bio' => 'Yulan Guo is a full Professor with the School of Electronics and Communication Engineering, Sun Yat-sen University. His research area lies in computer vision and robotics, particularly in 3D reconstruction, 3D scene parsing, low-level vision, and robotic perception. He has authored over 200 articles.',
                'more_link' => 'https://www.yulanguo.cn'
            ],
            [
                'name' => 'Professor Dr. Mohammed Nazim Uddin',
                'affiliation' => 'Vice-Chancellor, East Delta University, Bangladesh',
                'photo' => 'uploads/images/keynote/ProfNazim.jpg',
                'title' => 'Professor',
                'speech_title' => 'Machine Learning in Health Care: Challenges & Opportunities',
                'bio' => 'Professor Dr. Mohammed Nazim Uddin is a distinguished academic, researcher, and education administrator, presently serving as the Vice Chancellor of East Delta University. His research interests encompass Machine Learning, Deep Learning, Time Series Forecasting, and Artificial Intelligence.'
            ],
            [
                'name' => 'Professor Syed Ahmad Chan Bukhari',
                'affiliation' => 'St. John\'s University, USA',
                'photo' => 'uploads/images/keynote/Bukhari.png',
                'title' => 'Professor',
                'speech_title' => 'TBA',
                'bio' => 'Dr. Bukhari is a tenured associate professor and director of research at CCPS, St. John\'s University. He completed his postdoctoral fellowship at Yale University and was a core research team member at CEDAR Metadata Center, Stanford University. His research focuses on healthcare informatics and data science.',
                'more_link' => 'https://www.stjohns.edu/academics/faculty/syed-ahmad-chan-bukhari'
            ],
            [
                'name' => 'Professor Rahamatullah Khondoker',
                'affiliation' => 'Technische Hochschule Mittelhessen, Germany',
                'photo' => 'uploads/images/keynote/Rahamatullah.png',
                'title' => 'Professor',
                'speech_title' => 'Detection and Mitigation of Cyber Attacks Using AI – Past, Present and Future',
                'bio' => 'Professor Rahamatullah Khondoker is a Professor of IT Security and Digitalization at Technische Hochschule Mittelhessen. His research works with industries drive innovation in AI-powered security, automotive cybersecurity, and resilient digital infrastructures.',
                'more_link' => 'https://www.thm.de/mnd/rahamatullah-khondoker'
            ]
        ]
    ]
];
?>

<section class="section">
    <div class="container">
        <h2 style="margin-bottom: 2rem; color: var(--primary-color);font-size: 2.1rem;text-align: center;">FMLDS2026 Speakers</h2>

        <?php foreach ($speakersData as $key => $category): ?>
            <div id="<?php echo $key; ?>" class="speaker-section" style="margin-bottom: 3rem;">
                <h3 style="margin-bottom: 1.5rem; color: var(--primary-color);"><?php echo $category['title']; ?></h3>

                <div class="speakers-grid">
                    <?php foreach ($category['speakers'] as $speaker): ?>
                        <div class="speaker-card" style="display: flex; gap: 1.5rem; align-items: flex-start;">
                            <img src="<?php echo htmlspecialchars($speaker['photo']); ?>" alt="<?php echo htmlspecialchars($speaker['name']); ?>" class="speaker-image" style="margin: 0; flex-shrink: 0;" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop&crop=faces'">
                            <div style="flex: 1;">
                                <h4 class="speaker-name" style="margin-bottom: 0.3rem;"><?php echo htmlspecialchars($speaker['name']); ?></h4>
                                <p style="font-size: 0.7rem; color: var(--text-light); margin-bottom: 0.5rem;"><?php echo htmlspecialchars($speaker['affiliation']); ?></p>
                                <?php if (!empty($speaker['speech_title'])): ?>
                                    <p style="font-size: 0.8rem; font-weight: 600; color: var(--primary-color); margin-bottom: 0.5rem;">Speech Title: <?php echo htmlspecialchars($speaker['speech_title']); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($speaker['bio'])): ?>
                                    <p style="font-size: 0.85rem; line-height: 1.6; color: var(--text-color);"><?php echo htmlspecialchars($speaker['bio']); ?></p>
                                <?php endif; ?>
                                <?php if (!empty($speaker['more_link'])): ?>
                                    <a href="<?php echo htmlspecialchars($speaker['more_link']); ?>" style="display: inline-block; margin-top: 0.5rem; font-size: 0.75rem; color: var(--primary-color);">More →</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
include_footer();
?>