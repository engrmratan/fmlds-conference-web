<?php
/**
 * Registration Page
 * Handles conference registration and payment
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Registration - FMLDS';

// Registration fee structure
$registrationFees = [
    'academic' => [
        'early' => 500,
        'regular' => 600,
        'late' => 700
    ],
    'industry' => [
        'early' => 800,
        'regular' => 900,
        'late' => 1000
    ],
    'student' => [
        'early' => 300,
        'regular' => 350,
        'late' => 400
    ]
];

$message = '';
$messageType = '';

// Handle form submission (frontend demo - no actual processing)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstName = sanitizeInput($_POST['first_name']);
    $lastName = sanitizeInput($_POST['last_name']);
    $email = sanitizeInput($_POST['email']);
    $phone = sanitizeInput($_POST['phone']);
    $affiliation = sanitizeInput($_POST['affiliation']);
    $registrationType = sanitizeInput($_POST['registration_type']);
    $feeType = sanitizeInput($_POST['fee_type']);

    // Calculate amount
    $amount = $registrationFees[$registrationType][$feeType];

    // For frontend demo, just show success message
    $message = 'Thank you for your interest! Registration functionality will be available soon. Contact us at info@fmlds.org for more information.';
    $messageType = 'success';
}

include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">        
        <?php if ($message): ?>
            <div class="alert alert-<?php echo $messageType; ?>">
                <?php echo htmlspecialchars($message); ?>
            </div>
        <?php endif; ?>
        
        <!-- Registration Fees Table -->
        <div class="fees-table">
            <h2 style="text-align: center; margin-bottom: 2rem;">Registration Fees</h2>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th>Early Bird</th>
                            <th>Regular</th>
                            <th>Late</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Academic</strong></td>
                            <td>$<?php echo $registrationFees['academic']['early']; ?></td>
                            <td>$<?php echo $registrationFees['academic']['regular']; ?></td>
                            <td>$<?php echo $registrationFees['academic']['late']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Industry</strong></td>
                            <td>$<?php echo $registrationFees['industry']['early']; ?></td>
                            <td>$<?php echo $registrationFees['industry']['regular']; ?></td>
                            <td>$<?php echo $registrationFees['industry']['late']; ?></td>
                        </tr>
                        <tr>
                            <td><strong>Student</strong></td>
                            <td>$<?php echo $registrationFees['student']['early']; ?></td>
                            <td>$<?php echo $registrationFees['student']['regular']; ?></td>
                            <td>$<?php echo $registrationFees['student']['late']; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
