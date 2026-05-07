<?php
/**
 * Call for Papers Page
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Call for Papers - FMLDS';
include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <div style="display: flex; gap: 2rem; margin-top: 2rem;">
            <!-- Left Sidebar Navigation -->
            <div style="flex: 0 0 230px;">
                <div class="card">
                    <div class="card-body">
                        <h3 style="margin-bottom: 1.5rem; color: var(--primary-color); text-align: center;">Call for Papers (CFP)</h3>
                        <nav style="display: flex; flex-direction: column; gap: 0.5rem;">
                            <a href="#roadmap" class="btn" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Road Map</a>
                            <a href="#general-track" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP General Track</a>
                            <a href="#ml-transport" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP ML and AI in Transport</a>
                            <a href="#ml-engineering" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP ML in Engineering Applications</a>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- Right Content Area -->
            <div style="flex: 1;">

        <!-- Road Map Section -->
        <div id="roadmap" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Road Map for Paper Submission</h2>

                <table style="width: 100%; border-collapse: collapse; margin: 2rem 0;">
                    <tbody>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; background: var(--primary-color); color: white;">Paper submission and for Grant Application deadline</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">on 30 April, 2026 11:59:59 pm Japan Standard Time</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; background: var(--primary-color); color: white;">Paper acceptance notification</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">07 July, 2026</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; background: var(--primary-color); color: white;">Grants and awards notification</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">30 August, 2026</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; background: var(--primary-color); color: white;">Early Bird Registration opens</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">07 July, 2026</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; background: var(--primary-color); color: white;">Due date for camera ready paper</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">15 October, 2026</td>
                        </tr>
                    </tbody>
                </table>

                <p style="text-align: center; font-style: italic; margin-top: 2rem;">
                    (It will of course welcome papers on but by no means restricted to in existing disciplines, e.g.)
                </p>
            </div>
        </div>

        <!-- Conference Tracks -->
        <div id="general-track" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Conference Tracks</h2>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
                    <!-- Future Machine Learning -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Future Machine Learning" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Future Machine Learning</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Explainable Artificial Intelligence</li>
                            <li>Quantum Computing</li>
                            <li>Big Data Modeling</li>
                            <li>No-Code Development Environments</li>
                            <li>Reinforcement Learning</li>
                        </ul>
                    </div>

                    <!-- Machine Learning in Engineering Applications -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="ML in Engineering" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Machine Learning in Engineering Applications</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Construction Engineering</li>
                            <li>Water Engineering</li>
                        </ul>
                    </div>

                    <!-- Computer Vision and Graphics -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Computer Vision" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Computer Vision and Graphics</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Biometrics</li>
                            <li>Aqua Farming Technologies</li>
                            <li>Low-Level Vision and Image Processing</li>
                            <li>Motion and Tracking Technologies</li>
                        </ul>
                    </div>

                    <!-- Bioinformatics and Biomedical Applications -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Bioinformatics" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Bioinformatics and Biomedical Applications</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Bioinformatics</li>
                            <li>Video Analysis and Event Recognition</li>
                            <li>Signal Processing</li>
                            <li>Support Vector Machines (SVM)</li>
                            <li>Bayesian Belief Networks</li>
                        </ul>
                    </div>

                    <!-- Data Classification and Regression -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Data Classification" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Data Classification and Regression</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Denoising and Functional Recovery</li>
                            <li>Interpretation and Approximation</li>
                            <li>Spectral and Area Based Methods</li>
                            <li>Data and Image Compression</li>
                        </ul>
                    </div>

                    <!-- Cyber Security and Privacy for Big Data -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Cyber Security" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Cyber Security and Privacy for Big Data</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Cyber-attacks</li>
                            <li>Cyber Security</li>
                        </ul>
                    </div>

                    <!-- Machine Learning in Social Media and Social Network -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Social Media ML" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Machine Learning in Social Media and Social Network</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Classification of Diseases and Genomic Sequencing</li>
                            <li>Social Network Analysis</li>
                        </ul>
                    </div>

                    <!-- Machine Learning in Internet of Things (IoT) -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="IoT ML" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Machine Learning in Internet of Things (IoT)</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Artificial Intelligence Techniques in IoT</li>
                        </ul>
                    </div>

                    <!-- Advancements of Machine Learning -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="ML Advancements" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Advancements of Machine Learning</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Improved Internet Search</li>
                            <li>Chatbots and Conversational AI (e.g., ChatGPT)</li>
                            <li>Applications in Transportation</li>
                            <li>Applications in Music, Art and Leisure</li>
                        </ul>
                    </div>

                    <!-- Pattern Recognition -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Pattern Recognition" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Pattern Recognition</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Fuzzy Logic, Learning Theory</li>
                            <li>Reasoning with incomplete data</li>
                            <li>Set Theory and Probabilistic Approaches Affective Computing</li>
                            <li>Statistical Methods in Motion Tracking</li>
                        </ul>
                    </div>

                    <!-- Robotics and Automation -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Robotics" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Robotics and Automation</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Robotics Application</li>
                            <li>Testing and Performance Evaluation</li>
                        </ul>
                    </div>

                    <!-- Data Science and Big Data -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Data Science" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Data Science and Big Data</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Cloud Computing and High Performance Computing</li>
                            <li>Scalable Computing and Computations on GPU</li>
                            <li>Information Retrieval</li>
                        </ul>
                    </div>

                    <!-- Knowledge Discovery, Integration and Transformation -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Knowledge Discovery" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Knowledge Discovery, Integration and Transformation</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Social Epidemiology, Algorithms in Neuroscience</li>
                            <li>Neuro-psychoanalysis</li>
                        </ul>
                    </div>

                    <!-- Machine Learning in Finance and Data Mining -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Finance ML" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Machine Learning in Finance and Data Mining</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Financial Engineering & Economics Applications</li>
                            <li>Portfolio Optimization and Asset Allocation</li>
                            <li>Algorithmic and Quantitative Trading</li>
                            <li>Financial Data Analysis</li>
                        </ul>
                    </div>

                    <!-- Machine Learning in Language Models -->
                    <div style="text-align: center; padding: 2rem; border: 1px solid var(--border-color); border-radius: 8px;">
                        <img src="https://static.wixstatic.com/media/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png/v1/fill/w_202,h_202,al_c,q_85,usm_0.66_1.00_0.01,enc_avif,quality_auto/4a2cf0_9adbf1baef2040d9b84ce83674310c08~mv2.png" alt="Language Models" style="width: 80px; height: 80px; margin-bottom: 1rem;">
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Machine Learning in Language Models</h3>
                        <ul style="text-align: left; padding-left: 1rem; line-height: 1.8;">
                            <li>Large Language Models (LLMs)</li>
                            <li>Vision Language Models (VLMs)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Special Sessions -->
        <div id="ml-transport" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Call for Machine Learning Applications in Transportation Systems and Safety</h2>

                <p style="line-height: 1.8; margin-bottom: 2rem;">
                    This special session invites cutting-edge research and innovative applications that leverage Artificial Intelligence (AI) and Machine Learning (ML) to transform all facets of transportation systems. From enhancing roadway safety and traffic operations to revolutionizing freight logistics, public transit, non-motorized travel, materials performance, infrastructure planning, and more—this session will showcase how intelligent algorithms are reshaping the future of mobility. We welcome abstracts, technical papers, and presentations that apply AI/ML to transportation safety analytics, intelligent transportation systems (ITS), traffic simulation and modeling, predictive maintenance, demand forecasting, infrastructure management, equity and accessibility analysis, and more. Contributions that demonstrate practical implementations, interdisciplinary approaches, and policy implications are especially encouraged. Join us in exploring the power of data-driven intelligence in building resilient, efficient, and safe transportation systems.
                </p>
            </div>
        </div>

        <div id="ml-engineering" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Call for Machine Learning in Engineering Applications</h2>

                <p style="line-height: 1.8;">
                    This special session focuses on the application of machine learning techniques in various engineering domains, including construction, water engineering, and other industrial applications. We welcome papers that demonstrate practical implementations of ML algorithms in engineering contexts, addressing real-world challenges and providing innovative solutions.
                </p>
            </div>
        </div>

                <div class="text-center">
                    <a href="<?php echo SITE_URL; ?>/submission" class="btn">Submit Paper</a>
                </div>
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
            section.style.display = 'none';
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
            section.style.display = 'block';
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
