<?php
/**
 * About Page
 * Information about the conference
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'About - FMLDS';
include_header();
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">About FMLDS</h1>
        
        <div class="card" style="max-width: 900px; margin: 0 auto;">
            <div class="card-body">
                <h2>International Conference on Future of Machine Learning and Data Science</h2>
                
                <p style="margin-top: 1.5rem; line-height: 1.8;">
                    The International Conference on Future of Machine Learning and Data Science (FMLDS) brings together 
                    researchers, practitioners, and industry leaders to explore the latest developments and future directions 
                    in machine learning and data science.
                </p>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Conference Objectives</h3>
                <ul style="margin-top: 1rem; padding-left: 2rem; line-height: 1.8;">
                    <li>To provide a platform for researchers to present and discuss their latest findings</li>
                    <li>To facilitate knowledge exchange between academia and industry</li>
                    <li>To explore emerging trends and technologies in ML and data science</li>
                    <li>To promote collaboration and networking among participants</li>
                    <li>To address challenges and opportunities in the field</li>
                </ul>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Who Should Attend</h3>
                <ul style="margin-top: 1rem; padding-left: 2rem; line-height: 1.8;">
                    <li>Researchers and academics in machine learning and data science</li>
                    <li>Industry professionals working with ML and data science technologies</li>
                    <li>Students and early-career researchers</li>
                    <li>Entrepreneurs and innovators in the field</li>
                    <li>Policy makers and decision makers interested in AI and data science</li>
                </ul>
                
                <h3 style="margin-top: 2rem; color: var(--primary-color);">Conference Topics</h3>
                <ul style="margin-top: 1rem; padding-left: 2rem; line-height: 1.8;">
                    <li>Machine Learning Algorithms and Models</li>
                    <li>Deep Learning and Neural Networks</li>
                    <li>Data Mining and Knowledge Discovery</li>
                    <li>Big Data Analytics</li>
                    <li>Natural Language Processing</li>
                    <li>Computer Vision</li>
                    <li>Reinforcement Learning</li>
                    <li>AI Ethics and Responsible AI</li>
                    <li>ML Applications in Various Domains</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include_footer(); ?>
