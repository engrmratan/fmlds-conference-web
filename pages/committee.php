<?php
/**
 * Committee Page
 * Displays committee members with left sidebar navigation
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Committee - FMLDS';
include dirname(__DIR__) . '/includes/header.php';

// Committee data organized by categories
$committeeData = [
    'chairs' => [
        'title' => 'Chairs',
        'members' => [
            [
                'name' => 'Professor Haiyan Qiao',
                'affiliation' => 'California State University, San Bernardino, USA',
                'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ],
            [
                'name' => 'Professor Deo Chimba',
                'affiliation' => 'Tennessee State University, USA',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ],
            [
                'name' => 'Professor Syed Ahmad Chan Bukhari',
                'affiliation' => 'St. John\'s University, USA',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ]
        ]
    ],
    'co-chairs' => [
        'title' => 'Co-Chairs',
        'members' => [
            [
                'name' => 'Professor Adel Ali Al Jumaily',
                'affiliation' => 'Melbourne Institute of Technology, Australia',
                'photo' => 'https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ],
            [
                'name' => 'Professor Komalpreet Kaur',
                'affiliation' => 'Salem State University, USA',
                'photo' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ],
            [
                'name' => 'Associate Professor Rafiqul Islam',
                'affiliation' => 'Charles Stuart University, Australia',
                'photo' => 'https://images.unsplash.com/photo-1580489944761-15a19d654d0b?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Associate Professor'
            ],
            [
                'name' => 'Dr Syed Shamsul Islam',
                'affiliation' => 'Edith Cowan University, Australia',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Doctor'
            ]
        ]
    ],
    'special-session-chairs' => [
        'title' => 'Special Session/Workshop Chairs',
        'members' => [
            [
                'name' => 'Professor Essam Rashed',
                'affiliation' => 'University of Hyogo, Japan',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ],
            [
                'name' => 'Associate Professor Mohamed Mabrok',
                'affiliation' => 'Qatar University, Qatar',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Associate Professor'
            ],
            [
                'name' => 'Dr Mahmoud Bekhit',
                'affiliation' => 'Australian Catholic University, Australia',
                'photo' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Doctor'
            ]
        ]
    ],
    'members' => [
        'title' => 'Members',
        'members' => [
            [
                'name' => 'Professor Girija Chetty',
                'affiliation' => 'University of Canberra, Australia',
                'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ],
            [
                'name' => 'Professor Dipankar Das',
                'affiliation' => 'Rajshahi University, Bangladesh',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ],
            [
                'name' => 'Professor Zahidul Islam',
                'affiliation' => 'Islamic University, Bangladesh',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Professor'
            ],
            [
                'name' => 'Associate Professor Norshuhani Zamin',
                'affiliation' => 'De La Salle University, Philippines',
                'photo' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Associate Professor'
            ],
            [
                'name' => 'Associate Professor Baisakhi Chakraborty',
                'affiliation' => 'NIT, India',
                'photo' => 'https://images.unsplash.com/photo-1580489944761-15a19d654d0b?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Associate Professor'
            ],
            [
                'name' => 'Associate Professor Ghada Khoriba',
                'affiliation' => 'Nile University, Egypt',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Associate Professor'
            ]
        ]
    ],
    'industry-track-chairs' => [
        'title' => 'Industry Track Chairs',
        'members' => [
            [
                'name' => 'Anupam Chansarkar',
                'affiliation' => 'Amazon, California, USA',
                'photo' => 'https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Senior Engineer'
            ],
            [
                'name' => 'Abhijeet Mukkawar',
                'affiliation' => 'Siemens, Texas, USA',
                'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Principal Engineer'
            ]
        ]
    ],
    'women-engineering-chairs' => [
        'title' => 'Women in Engineering Chairs',
        'members' => [
            [
                'name' => 'Dr Naila Mukhtar',
                'affiliation' => 'The University of Sydney, Australia',
                'photo' => 'https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Doctor'
            ],
            [
                'name' => 'Dr Behnaz Merikhi',
                'affiliation' => 'Northeastern University – Toronto, Canada',
                'photo' => 'https://images.unsplash.com/photo-1580489944761-15a19d654d0b?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Doctor'
            ],
            [
                'name' => 'Dr Meriam Gay Bautista-Jurney',
                'affiliation' => 'Lawrence Berkeley National Laboratory, California, USA',
                'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Doctor'
            ]
        ]
    ],
    'publication-chairs' => [
        'title' => 'Publication Chairs',
        'members' => [
            [
                'name' => 'Dr Rezaul Bashar',
                'affiliation' => 'GCSTMR, Australia',
                'photo' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Doctor'
            ],
            [
                'name' => 'Dr Zakir Hossain',
                'affiliation' => 'Curtin University, Australia',
                'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Doctor'
            ],
            [
                'name' => 'Dr Minhaz Uddin Ahmed',
                'affiliation' => 'Inha University in Tashkent, Uzbekistan',
                'photo' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=300&fit=crop&crop=faces',
                'title' => 'Doctor'
            ]
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
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Technical Committee</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <?php foreach ($committeeData as $key => $category): ?>
                                <a href="#<?php echo $key; ?>" class="btn <?php echo $key === 'chairs' ? '' : 'btn-secondary'; ?>" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;"><?php echo $category['title']; ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">
                <?php foreach ($committeeData as $key => $category): ?>
                    <div id="<?php echo $key; ?>" class="card committee-section <?php echo $key === 'chairs' ? 'active' : ''; ?>" style="margin-bottom: 3rem;">
                        <div class="card-body">
                            <h2 style="margin-bottom: 2rem; color: var(--primary-color);"><?php echo $category['title']; ?></h2>

                            <div class="speakers-grid">
                                <?php foreach ($category['members'] as $member): ?>
                                    <div class="speaker-card">
                                        <img src="<?php echo htmlspecialchars($member['photo']); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>" class="speaker-image" onerror="this.src='<?php echo SITE_URL; ?>/assets/images/logo.png'">
                                        <h4 class="speaker-name"><?php echo htmlspecialchars($member['name']); ?></h4>
                                        <p class="speaker-title"><?php echo htmlspecialchars($member['title']); ?></p>
                                        <p style="font-size: 0.7rem; color: var(--text-light); margin-top: 0.4rem; text-align: center;"><?php echo htmlspecialchars($member['affiliation']); ?></p>
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

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
