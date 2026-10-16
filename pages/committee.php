<?php
/**
 * Committee Page
 * Displays committee members with left sidebar navigation
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Committee - FMLDS';
include_header();

// Committee data organized by categories
$committeeData = [
    'honorary-general-chairs' => [
        'title' => 'Honorary General Chairs',
        'members' => [
            [
                'name' => 'Professor Yutaka Hata',
                'affiliation' => 'Vice-President of the University of Hyogo, Japan',
                'photo' => 'https://fmlds.org/2026/img/members/ProfYutakaHata.jpg',
                'title' => 'Honorary General Chair'
            ]
        ]
    ],
    'general-chairs' => [
        'title' => 'General Chairs',
        'members' => [
            [
                'name' => 'Professor Essam Rashed',
                'affiliation' => 'University of Hyogo, Japan',
                'photo' => 'https://fmlds.org/img/tc-member/ProfEssam_Rashed.jpeg',
                'title' => 'General Chair'
            ],
            [
                'name' => 'Professor Mohamed Mabrok',
                'affiliation' => 'Qatar University, Qatar',
                'photo' => 'https://fmlds.org/img/tc-member/ProfMabrok.JPG',
                'title' => 'General Chair'
            ]
        ]
    ],
    'technical-program-chairs' => [
        'title' => 'Technical Program Chairs',
        'members' => [
            [
                'name' => 'Professor Adel Al-Jumaily',
                'affiliation' => 'Melbourne Institute of Technology (Sydney), Australia',
                'photo' => 'https://fmlds.org/2026/img/AProfJumaily1.png',
                'title' => 'Technical Program Chair'
            ],
            [
                'name' => 'Professor Rafiqul Islam',
                'affiliation' => 'Charles Stuart University, Australia',
                'photo' => 'https://fmlds.org/2026/img/ProfRafiqulIslam1.png',
                'title' => 'Technical Program Chair'
            ],
            [
                'name' => 'Professor Tomoe Entani',
                'affiliation' => 'University of Hyogo, Japan',
                'photo' => 'https://fmlds.org/2026/img/Prof_Entani-1.png',
                'title' => 'Technical Program Chair'
            ],
            [
                'name' => 'Professor Haiyan Qiao',
                'affiliation' => 'California State University, San Bernardino, USA',
                'photo' => 'https://fmlds.org/2026/img/ProfHaiyaQiao-1.png',
                'title' => 'Technical Program Chair'
            ],
            [
                'name' => 'Dr Syed Shamsul Islam',
                'affiliation' => 'Edith Cowan University, Australia',
                'photo' => 'https://fmlds.org/2026/img/DrShams.png',
                'title' => 'Technical Program Chair'
            ],
            [
                'name' => 'Dr Norshuhani Zamin',
                'affiliation' => 'Universiti Tenaga Nasional (UNITEN), Malaysia',
                'photo' => 'https://fmlds.org/2026/img/ProfNorshuhani-1.png',
                'title' => 'Technical Program Chair'
            ]
        ]
    ],
    'sponsorship-exhibition-industry-chairs' => [
        'title' => 'Sponsorship and Exhibition (Industry) Chairs',
        'members' => [
            [
                'name' => 'Professor Tesuya Saito',
                'affiliation' => 'Globiz Professional University, Japan',
                'photo' => 'https://fmlds.org/2026/img/ProfTesuyaSaito1.jpg',
                'title' => 'Sponsorship and Exhibition Chair'
            ],
            [
                'name' => 'Professor Jeffrey C. Yu',
                'affiliation' => 'George Washington University, USA',
                'photo' => 'https://fmlds.org/img/tc-member/ProfJeffYu.jpg',
                'title' => 'Sponsorship and Exhibition Chair'
            ],
            [
                'name' => 'A/Professor Neyara Radwan',
                'affiliation' => 'Liwa University, UAE',
                'photo' => 'https://fmlds.org/2026/img/DrNeyara.png',
                'title' => 'Sponsorship and Exhibition Chair'
            ],
            [
                'name' => 'Mr Abhijeet Mukkawar',
                'affiliation' => 'Siemens, Texas, USA',
                'photo' => 'https://fmlds.org/img/Plenary/MrAbhijeet.png',
                'title' => 'Sponsorship and Exhibition Chair'
            ]
        ]
    ],
    'keynote-plenary-chair' => [
        'title' => 'Keynote and Plenary Chair',
        'members' => [
            [
                'name' => 'Professor Komalpreet Kaur',
                'affiliation' => 'Salem State University, USA',
                'photo' => 'https://fmlds.org/img/tc-member/ProfKomalpreet.jpeg',
                'title' => 'Keynote and Plenary Chair'
            ]
        ]
    ],
    'awards-chairs' => [
        'title' => 'Awards Chairs',
        'members' => [
            [
                'name' => 'Professor Ryo Haraguchi',
                'affiliation' => 'University of Hyogo, Japan',
                'photo' => 'https://fmlds.org/2026/img/ProfHaraguchi-1.png',
                'title' => 'Awards Chair'
            ],
            [
                'name' => 'Professor Altaf-Ul Amin',
                'affiliation' => 'Nara Institute of Science and Technology, Japan',
                'photo' => 'https://fmlds.org/2026/img/ProfAltafAmin-1.png',
                'title' => 'Awards Chair'
            ]
        ]
    ],
    'workshop-tutorial-chairs' => [
        'title' => 'Workshop/Tutorial Chairs',
        'members' => [
            [
                'name' => 'Dr Yasmeen Goerge',
                'affiliation' => 'Monash University, Australia',
                'photo' => 'https://fmlds.org/2026/img/DrYasmeen.png',
                'title' => 'Workshop/Tutorial Chair'
            ],
            [
                'name' => 'Dr Riaz-Ul-Haque Mian',
                'affiliation' => 'Shimane University, Japan',
                'photo' => 'https://fmlds.org/2026/img/#',
                'title' => 'Workshop/Tutorial Chair'
            ]
        ]
    ],
    'special-session-chairs' => [
        'title' => 'Special Session Chairs',
        'members' => [
            [
                'name' => 'Professor Deo Chimba',
                'affiliation' => 'Tennessee State University, USA',
                'photo' => 'https://fmlds.org/img/tc-member/ProfDeoChimba1.png',
                'title' => 'Special Session Chair'
            ],
            [
                'name' => 'Professor Mohammad Hassanzadeh',
                'affiliation' => 'Lawrence Technological University, USA',
                'photo' => 'https://fmlds.org/2026/img/ProfHassanzadeh-1.png',
                'title' => 'Special Session Chair'
            ]
        ]
    ],
    'women-in-engineering' => [
        'title' => 'Women in Engineering',
        'members' => [
            [
                'name' => 'Associate Professor Fariah Mahzabeen',
                'affiliation' => 'North South University, Bangladesh',
                'photo' => 'https://fmlds.org/img/Plenary/Fariah.png',
                'title' => 'Women in Engineering'
            ],
            [
                'name' => 'Dr Khulan Khalzaa',
                'affiliation' => 'Tokushima University, Japan',
                'photo' => 'https://fmlds.org/img/tc-member/DrKhulan_Khalzaa1.png',
                'title' => 'Women in Engineering'
            ],
            [
                'name' => 'Dr Satori Hachisuka',
                'affiliation' => 'University of Tokyo, Japan',
                'photo' => 'https://fmlds.org/2026/img/DrSatori-1.png',
                'title' => 'Women in Engineering'
            ]
        ]
    ],
    'publication-chairs' => [
        'title' => 'Publication Chairs',
        'members' => [
            [
                'name' => 'Dr Rezaul Bashar',
                'affiliation' => 'Western Sydney University, Australia',
                'photo' => 'https://fmlds.org/img/tc-member/DrRezaul1.jpg',
                'title' => 'Publication Chair'
            ],
            [
                'name' => 'Dr Zakir Hossain',
                'affiliation' => 'Curtin University, Australia',
                'photo' => 'https://fmlds.org/2026/img/Zakir-1.png',
                'title' => 'Publication Chair'
            ]
        ]
    ],
    'publicity-chairs' => [
        'title' => 'Publicity Chairs',
        'members' => [
            [
                'name' => 'Dr Narottam Das',
                'affiliation' => 'Central Queensland University, Australia',
                'photo' => 'https://fmlds.org/2026/img/DrNarottamDas-1.png',
                'title' => 'Publicity Chair'
            ],
            [
                'name' => 'Dr Mohammad Mehedi Hassan',
                'affiliation' => 'The University of Informatics, Japan',
                'photo' => 'https://fmlds.org/2026/img/DrMehedi-1.png',
                'title' => 'Publicity Chair'
            ],
            [
                'name' => 'Dr Shihao Ye',
                'affiliation' => 'Hubei Three Gorges Polytechnic, China',
                'photo' => 'https://fmlds.org/2026/img/DrShihao-1.png',
                'title' => 'Publicity Chair'
            ]
        ]
    ],
    'local-organizing-chairs' => [
        'title' => 'Local Organizing Chairs',
        'members' => [
            [
                'name' => 'Ahmed Elboardy',
                'affiliation' => 'University of Hyogo, Japan',
                'photo' => 'https://fmlds.org/2026/img/ahmed-1.png',
                'title' => 'Local Organizing Chair'
            ],
            [
                'name' => 'Yiming Jia',
                'affiliation' => 'University of Hyogo, Japan',
                'photo' => 'https://fmlds.org/2026/img/Yiming.jpg',
                'title' => 'Local Organizing Chair'
            ],
            [
                'name' => 'Mina Yousef',
                'affiliation' => 'University of Hyogo, Japan',
                'photo' => 'https://fmlds.org/2026/img/Mina.jpg',
                'title' => 'Local Organizing Chair'
            ],
            [
                'name' => 'Makoto Kanehira',
                'affiliation' => 'University of Hyogo, Japan',
                'photo' => 'https://fmlds.org/2026/img/makoto.jpg',
                'title' => 'Local Organizing Chair'
            ]
        ]
    ],
    'technical-committee-members' => [
        'title' => 'Technical Committee Members',
        'members' => [
            [
                'name' => 'Professor Ghada Khoriba',
                'affiliation' => 'Nile University, Egypt',
                'photo' => 'https://fmlds.org/2026/img/Prof_Ghada-1.png',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Professor Jocelyn Cu',
                'affiliation' => 'De La Salle University, Philippines',
                'photo' => 'https://fmlds.org/2026/img/ProfJocelynn.png',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Professor Zahidul Islam',
                'affiliation' => 'Islamic University, Bangladesh',
                'photo' => 'https://fmlds.org/2026/img/ProfZahid1.png',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Professor Tamer Arafa',
                'affiliation' => 'Nile University, Egypt',
                'photo' => 'https://fmlds.org/2026/img/Prof_Tamer.jpeg',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Dr Jang-Hee Yoo',
                'affiliation' => 'Electronics and Telecommunications Research Institute (ETRI), Korea Republic',
                'photo' => 'https://fmlds.org/2026/img/Jang-Hee%20Yoo-1.png',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Dr Khan Farhan Rafat',
                'affiliation' => 'NBF, Pakistan',
                'photo' => 'https://fmlds.org/2026/img/ProfKhanRafat.jpg',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Dr Noor Akma Abu Bakar',
                'affiliation' => 'Universiti Tenaga Nasional (UNITEN), Malaysia',
                'photo' => 'https://fmlds.org/2026/img/DrNoor-1.png',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Dr Zahraa Abdallah',
                'affiliation' => 'University of Bristol, UK',
                'photo' => 'https://fmlds.org/2026/img/Dr_Zahraa1.png',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Dr Alaa Tharwat',
                'affiliation' => 'Bielefeld University of applied sciences and Arts, Germany',
                'photo' => 'https://fmlds.org/2026/img/DrAlaa-1.png',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Dr Khairi Azhar Aziz',
                'affiliation' => 'Universiti Tenaga Nasional (UNITEN), Malaysia',
                'photo' => 'https://fmlds.org/2026/img/DrAziz-1.png',
                'title' => 'Technical Committee Member'
            ],
            [
                'name' => 'Dr Nurul Akhmal',
                'affiliation' => 'Dhofar University, Oman',
                'photo' => 'https://fmlds.org/2026/img/NurulAkhmal.png',
                'title' => 'Technical Committee Member'
            ]
        ]
    ]
];
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 300px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Technical Committee</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <?php $firstCommitteeKey = array_key_first($committeeData); ?>
                            <?php foreach ($committeeData as $key => $category): ?>
                                <a href="#<?php echo $key; ?>" class="btn <?php echo $key === $firstCommitteeKey ? '' : 'btn-secondary'; ?>" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;"><?php echo $category['title']; ?></a>
                            <?php endforeach; ?>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">
                <?php foreach ($committeeData as $key => $category): ?>
                    <div id="<?php echo $key; ?>" class="card committee-section <?php echo $key === $firstCommitteeKey ? 'active' : ''; ?>" style="margin-bottom: 3rem;">
                        <div class="card-body">
                            <h2 style="margin-bottom: 2rem; color: var(--primary-color);"><?php echo $category['title']; ?></h2>

                            <div class="speakers-grid">
                                <?php foreach ($category['members'] as $member): ?>
                                    <div class="speaker-card">
                                        <img src="<?php echo htmlspecialchars($member['photo']); ?>" alt="<?php echo htmlspecialchars($member['name']); ?>" class="speaker-image" onerror="this.src='uploads/images/logo.png'">
                                        <h4 class="speaker-name"><?php echo htmlspecialchars($member['name']); ?></h4>
                                        <p class="speaker-title"><?php echo htmlspecialchars($member['title']); ?></p>
                                        <p style="font-size: 0.7rem; color: var(--text-light);"><?php echo htmlspecialchars($member['affiliation']); ?></p>
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

<?php include_footer(); ?>
