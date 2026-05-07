<?php
/**
 * Speakers Page
 * Displays speakers with left sidebar navigation
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Speakers - FMLDS';
include dirname(__DIR__) . '/includes/header.php';

// Static speaker data organized by categories
$speakersData = [
    'plenary' => [
        'title' => 'Keynote Speakers',
        'speakers' => [
            ['name' => 'Professor Roummel Marcia', 'affiliation' => 'University of California, Merced, USA', 'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=faces', 'title' => 'Professor', 'bio' => 'Expert in machine learning and data science with extensive research in computer vision and AI applications.'],
            ['name' => 'Professor Essam Rashed', 'affiliation' => 'University of Hyogo, Japan', 'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=faces', 'title' => 'Professor', 'bio' => 'Leading researcher in future machine learning technologies and artificial intelligence applications.'],
            ['name' => 'Professor Manish Wadhwa', 'affiliation' => 'Salem State University, USA', 'photo' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=400&fit=crop&crop=faces', 'title' => 'Professor', 'bio' => 'Specializes in machine learning applications in engineering and data science research.'],
            ['name' => 'Professor Virginia de Sa', 'affiliation' => 'University of California, San Diego, USA', 'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=400&h=400&fit=crop&crop=faces', 'title' => 'Professor', 'bio' => 'Renowned expert in neural networks and computational neuroscience.'],
            ['name' => 'Associate Professor Salman Asif', 'affiliation' => 'University of California, Riverside, USA', 'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop&crop=faces', 'title' => 'Associate Professor', 'bio' => 'Research focuses on signal processing and machine learning algorithms.']
        ]
    ],
    'industry' => [
        'title' => 'Industry Track Speakers',
        'speakers' => [
            ['name' => 'Mr Anupam Chansarkar', 'affiliation' => 'Amazon, California, USA', 'photo' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=400&fit=crop&crop=faces', 'title' => 'Senior Engineer', 'bio' => 'Leading AI/ML initiatives at Amazon with focus on scalable machine learning solutions.'],
            ['name' => 'Mr Abhijeet Mukkawar', 'affiliation' => 'Siemens, Texas, USA', 'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=faces', 'title' => 'Principal Engineer', 'bio' => 'Expert in industrial applications of machine learning and IoT systems at Siemens.']
        ]
    ],
    'women' => [
        'title' => 'Women In Engineering',
        'speakers' => [
            ['name' => 'Dr Naila Mukhtar', 'affiliation' => 'The University of Sydney, Australia', 'photo' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop&crop=faces', 'title' => 'Senior Lecturer', 'bio' => 'Researcher in machine learning applications and women in STEM initiatives.'],
            ['name' => 'Dr Behnaz Merikhi', 'affiliation' => 'Northeastern University – Toronto, Canada', 'photo' => 'https://images.unsplash.com/photo-1580489944761-15a19d654d0b?w=400&h=400&fit=crop&crop=faces', 'title' => 'Assistant Professor', 'bio' => 'Expert in data science and artificial intelligence with focus on ethical AI.'],
            ['name' => 'Dr Meriam Gay Bautista-Jurney', 'affiliation' => 'Lawrence Berkeley National Laboratory, California, USA', 'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=400&h=400&fit=crop&crop=faces', 'title' => 'Research Scientist', 'bio' => 'Leading research in scientific computing and machine learning applications.'],
            ['name' => 'Dr Fariah Mahzabeen', 'affiliation' => 'North South University, Bangladesh', 'photo' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=400&h=400&fit=crop&crop=faces', 'title' => 'Assistant Professor', 'bio' => 'Specializes in machine learning and data science education.']
        ]
    ],
    'men' => [
        'title' => 'Men In Engineering',
        'speakers' => [
            ['name' => 'Professor John Smith', 'affiliation' => 'MIT, USA', 'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=400&h=400&fit=crop&crop=faces', 'title' => 'Professor', 'bio' => 'Leading researcher in artificial intelligence and machine learning algorithms.'],
            ['name' => 'Dr Michael Johnson', 'affiliation' => 'Stanford University, USA', 'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=400&fit=crop&crop=faces', 'title' => 'Associate Professor', 'bio' => 'Expert in deep learning and neural network architectures.'],
            ['name' => 'Professor David Chen', 'affiliation' => 'UC Berkeley, USA', 'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&h=400&fit=crop&crop=faces', 'title' => 'Professor', 'bio' => 'Research focuses on computer vision and pattern recognition.']
        ]
    ]
];
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 230px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Speakers</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <?php foreach ($speakersData as $key => $category): ?>
                                <a href="#<?php echo $key; ?>" class="btn <?php echo $key === 'plenary' ? '' : 'btn-secondary'; ?>" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;"><?php echo $category['title']; ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">
                <?php foreach ($speakersData as $key => $category): ?>
                    <div id="<?php echo $key; ?>" class="card speaker-section <?php echo $key === 'plenary' ? 'active' : ''; ?>" style="margin-bottom: 3rem;">
                        <div class="card-body">
                            <h2 style="margin-bottom: 2rem; color: var(--primary-color);"><?php echo $category['title']; ?></h2>

                            <div class="speakers-grid">
                                <?php foreach ($category['speakers'] as $speaker): ?>
                                    <div class="speaker-card">
                                        <img src="<?php echo htmlspecialchars($speaker['photo']); ?>" alt="<?php echo htmlspecialchars($speaker['name']); ?>" class="speaker-image" onerror="this.src='https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop&crop=faces'">
                                        <h4 class="speaker-name"><?php echo htmlspecialchars($speaker['name']); ?></h4>
                                        <p class="speaker-title"><?php echo htmlspecialchars($speaker['title']); ?></p>
                                        <p style="font-size: 0.7rem; color: var(--text-light); margin-top: 0.4rem;"><?php echo htmlspecialchars($speaker['affiliation']); ?></p>
                                        <?php if (!empty($speaker['bio'])): ?>
                                            <p style="font-size: 0.8rem; margin-top: 0.8rem; text-align: left;"><?php echo htmlspecialchars(substr($speaker['bio'], 0, 150)) . '...'; ?></p>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get all navigation links and content sections
    const navLinks = document.querySelectorAll('.card nav a');
    const contentSections = document.querySelectorAll('.card[id]');

    // Function to hide all sections
    function hideAllSections() {
        contentSections.forEach(section => {
            section.classList.remove('active');
        });
    }

    // Function to update active classes for nav links
    function updateNavLinkClasses(activeLinkId) {
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href === '#' + activeLinkId) {
                link.classList.remove('btn-secondary');
                link.classList.add('btn');
            } else {
                link.classList.remove('btn');
                link.classList.add('btn-secondary');
            }
        });
    }

    // Function to show specific section
    function showSection(sectionId) {
        const section = document.getElementById(sectionId);
        if (section) {
            section.classList.add('active');
        }
    }

    // Function to show specific section and update nav link
    function activateSection(targetId) {
        hideAllSections();
        showSection(targetId);
        updateNavLinkClasses(targetId);
    }

    // Initialize - activate the first section
    if (contentSections.length > 0) {
        const firstSectionId = contentSections[0].id;
        activateSection(firstSectionId);
    }

    // Add click event listeners to navigation links
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Get target section id from href
            const targetId = this.getAttribute('href').substring(1); // Remove the '#'

            // Activate the target section
            activateSection(targetId);
        });
    });
});
</script>

<?php
include dirname(__DIR__) . '/includes/footer.php';
?>

<?php
include dirname(__DIR__) . '/includes/footer.php';
?>
