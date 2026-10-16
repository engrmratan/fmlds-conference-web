<?php
/**
 * Call for Papers Page
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Call for Papers - FMLDS';
include_header();
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
                            <a href="#key-dates" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Key Dates</a>
                            <a href="#general-track" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP General Track</a>
                            <a href="#biomedical-bioinformatics" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP Biomedical and Bioinformatics</a>
                            <a href="#transportation-safety" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP Transportation Systems and Safety</a>
                            <a href="#engineering-applications" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP Engineering Applications</a>
                            <a href="#empathic-computing" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP Empathic Computing</a>
                            <a href="#explainable-trustworthy-ai" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">CFP Explainable and Trustworthy AI</a>
                            <a href="#submission-info" class="btn btn-secondary" style="width: 100%; text-align: left; margin: 0; padding: 0.75rem 1rem; font-size: 0.7rem;">Submission Information</a>
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
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; background: var(--primary-color); color: white;">Paper submission and grant application deadline - 2nd round</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">07 July, 2026 11:59:59 pm Japan Standard Time</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; background: var(--primary-color); color: white;">Paper acceptance notification - 1st round</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">07 July, 2026</td>
                        </tr>
                        <tr style="border: 1px solid var(--border-color);">
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold; background: var(--primary-color); color: white;">Paper acceptance notification - 2nd round</td>
                            <td style="padding: 1rem; border: 1px solid var(--border-color); font-weight: bold;">15 August, 2026</td>
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
                    It will of course welcome papers on, but by no means be restricted to, the existing disciplines listed below.
                </p>
            </div>
        </div>

        <!-- Key Dates -->
        <div id="key-dates" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Key Dates</h2>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Event</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Paper Submission Deadline</strong></td>
                                <td>To be announced</td>
                            </tr>
                            <tr>
                                <td><strong>Notification of Acceptance</strong></td>
                                <td>To be announced</td>
                            </tr>
                            <tr>
                                <td><strong>Camera Ready Submission</strong></td>
                                <td>To be announced</td>
                            </tr>
                            <tr>
                                <td><strong>Early Bird Registration</strong></td>
                                <td>To be announced</td>
                            </tr>
                            <tr>
                                <td><strong>Regular Registration</strong></td>
                                <td>To be announced</td>
                            </tr>
                            <tr>
                                <td><strong>Conference Dates</strong></td>
                                <td><strong>20-23 November 2026</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p style="margin-top: 2rem; text-align: center; color: var(--text-light);">
                    Please check back regularly for updated key dates and deadlines.
                </p>
            </div>
        </div>

        <!-- General Track -->
        <div id="general-track" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">General Track</h2>

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
        <div id="biomedical-bioinformatics" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Call for Machine Learning Applications in Biomedical and Bioinformatics</h2>

                <p style="line-height: 1.8; margin-bottom: 1.5rem;">
                    This track focuses on innovative applications of machine learning across biomedical sciences and bioinformatics. We encourage submissions that address challenges, present new models, tools, or frameworks, and foster interdisciplinary approaches bridging healthcare, biology, and computational intelligence.
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Topics of Interest</h3>
                <ul style="padding-left: 2rem; line-height: 2;">
                    <li>Computational Biology and Medical Informatics</li>
                    <li>Machine Learning for Medical Imaging and Diagnostic Systems</li>
                    <li>Deep Learning in Bioinformatics and Genomics</li>
                    <li>Computational Approaches for Drug Discovery and Systems Biology</li>
                    <li>AI for Patient-Centric Clinical Decision Support</li>
                </ul>
            </div>
        </div>

        <div id="transportation-safety" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Call for Machine Learning Applications in Transportation Systems and Safety</h2>

                <p style="line-height: 1.8; margin-bottom: 2rem;">
                    This special session invites cutting-edge research and innovative applications that leverage Artificial Intelligence (AI) and Machine Learning (ML) to transform all facets of transportation systems. From enhancing roadway safety and traffic operations to revolutionizing freight logistics, public transit, non-motorized travel, materials performance, infrastructure planning, and more, this session will showcase how intelligent algorithms are reshaping the future of mobility.
                </p>

                <p style="line-height: 1.8;">
                    We welcome abstracts, technical papers, and presentations that apply AI/ML to transportation safety analytics, intelligent transportation systems (ITS), traffic simulation and modeling, predictive maintenance, demand forecasting, infrastructure management, equity and accessibility analysis, and more. Contributions that demonstrate practical implementations, interdisciplinary approaches, and policy implications are especially encouraged.
                </p>
            </div>
        </div>

        <div id="engineering-applications" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Call for Machine Learning in Engineering Applications</h2>

                <p style="line-height: 1.8;">
                    This special session focuses on the application of machine learning techniques in various engineering domains, including construction, water engineering, manufacturing, process automation, sensor data analysis, engineering simulation, and other industrial applications. We welcome papers that demonstrate practical implementations of ML algorithms in engineering contexts, addressing real-world challenges and providing innovative solutions.
                </p>
            </div>
        </div>

        <div id="empathic-computing" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Call for Machine Learning for Empathic Computing: Intelligent Systems that Understand and Respond to Human Emotions</h2>

                <p style="line-height: 1.8; margin-bottom: 1.5rem;">
                    This special session invites original research contributions and applied studies focused on the intersection of machine learning and empathic computing. It aims to provide a forum for researchers, developers, and practitioners to share insights, methodologies, and innovations in designing systems that recognize and respond to affective states. The session welcomes interdisciplinary contributions from AI, psychology, education, neuroscience, and human-computer interaction (HCI).
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Topics of Interest</h3>
                <ul style="padding-left: 2rem; line-height: 2;">
                    <li>Emotion recognition using deep learning and multimodal data</li>
                    <li>Adaptive systems for mental health and well-being</li>
                    <li>Affective modeling in educational technologies</li>
                    <li>AI-driven assistive tools for people with disabilities</li>
                    <li>Social signal processing in human-robot interaction</li>
                    <li>Ethical and privacy considerations in empathic systems</li>
                    <li>User modeling and personalization in empathic interfaces</li>
                    <li>Empathic dialogue systems and conversational agents</li>
                    <li>Real-time emotion-aware feedback in AR/VR environments</li>
                    <li>Applications in healthcare, education, gaming, and automotive industries</li>
                </ul>
            </div>
        </div>

        <div id="explainable-trustworthy-ai" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Call for Explainable and Trustworthy Artificial Intelligence</h2>

                <p style="line-height: 1.8; margin-bottom: 1.5rem;">
                    This track welcomes research on transparent, reliable, fair, secure, and human-centered AI systems. We invite submissions that advance explainable machine learning, trustworthy AI governance, robust model evaluation, and responsible deployment in real-world applications.
                </p>

                <h3 style="margin-bottom: 1rem; color: var(--primary-color);">Topics of Interest</h3>
                <ul style="padding-left: 2rem; line-height: 2;">
                    <li>Explainable AI and interpretable machine learning</li>
                    <li>Trustworthy, fair, and accountable AI systems</li>
                    <li>Robustness, safety, and uncertainty estimation</li>
                    <li>Privacy-preserving machine learning</li>
                    <li>Human-centered AI and human-AI collaboration</li>
                    <li>AI governance, ethics, and responsible deployment</li>
                    <li>Trustworthy AI for healthcare, transportation, finance, and smart cities</li>
                </ul>
            </div>
        </div>

        <div id="submission-info" class="card" style="max-width: 1200px; margin: 0 auto 3rem auto;">
            <div class="card-body">
                <h2 style="margin-bottom: 2rem; color: var(--primary-color); text-align: center;">Submission Information</h2>

                <p style="line-height: 1.8; margin-bottom: 1.5rem;">
                    Authors are invited to submit full papers through the Microsoft CMT conference submission system. Submissions must follow the IEEE conference paper format and should be prepared for potential publication in the conference proceedings.
                </p>

                <ul style="padding-left: 2rem; line-height: 2; margin-bottom: 2rem;">
                    <li>Papers must be submitted in their final, publishable form following the IEEE paper format, with a length of 4–6 pages.</li>
                    <li>The paper or its content must not be presented or published elsewhere prior to this conference.</li>
                    <li>An author must not submit more than 3 papers.</li>
                    <li>The contents of submitted papers must not significantly overlap with the content of any paper currently under review or that will be submitted during FMLDS2026.</li>
                    <li>Submitted papers must go through plagiarism checking software. Less than 30% similarity is highly appreciated.</li>
                    <li>The Technical Committee retains the right to reject any papers in violation of these requirements.</li>
                </ul>

                <div style="text-align: center;">
                    <a href="https://cmt3.research.microsoft.com/FMLDS2026" target="_blank" class="btn">Submit Your Paper on CMT</a>
                </div>
            </div>
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

<?php include_footer(); ?>
