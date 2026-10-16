<?php
/**
 * Key Dates Page
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Key Dates - FMLDS';
include_header();
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Key Dates</h1>
        
        <div class="card" style="max-width: 800px; margin: 0 auto;">
            <div class="card-body">
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
    </div>
</section>

<?php include_footer(); ?>
