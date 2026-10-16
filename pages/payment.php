<?php
/**
 * Payment Page
 * Handles payment processing
 */
require_once __DIR__ . '/../assets/bootstrap.php';

$pageTitle = 'Payment - FMLDS';
$csrfToken = generateCSRFToken();

if (!isset($_SESSION['registration_amount'])) {
    $_SESSION['registration_amount'] = 500;
}

$registration = $_SESSION['registration'] ?? [
    'first_name' => 'Conference',
    'last_name'  => 'Registrant',
    'email'      => 'info@fmlds.org'
];

$amount        = $_SESSION['registration_amount'];
$registrationId = 'REG_' . time();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!validateCSRFToken($_POST['csrf_token'] ?? '')) {
        http_response_code(403);
        $message = 'Invalid request. Please try again.';
        $messageType = 'error';
    } else {
        $paymentMethod = sanitizeInput($_POST['payment_method'] ?? '');
        $paymentId     = 'PAY_' . time() . '_' . $registrationId;

        unset($_SESSION['registration_amount']);

        $message = 'Thank you for your interest! Payment processing will be available soon. Contact us at info@fmlds.org for registration information.';
        $messageType = 'success';
    }
}

include_header();
?>

<section class="section">
    <div class="container">
        <div class="form-container">
            <h1 class="section-title">Payment</h1>
            
            <?php if (isset($message)): ?>
                <div class="alert alert-<?php echo $messageType; ?>">
                    <?php echo htmlspecialchars($message); ?>
                </div>
                <?php if ($messageType === 'success'): ?>
                    <div class="text-center mt-3">
                        <a href="index.php" class="btn">Return to Home</a>
                    </div>
                <?php endif; ?>
            <?php else: ?>
                <div style="margin-bottom: 2rem;">
                    <h3>Registration Details</h3>
                    <p><strong>Name:</strong> <?php echo htmlspecialchars($registration['first_name'] . ' ' . $registration['last_name']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($registration['email']); ?></p>
                    <p><strong>Amount:</strong> $<?php echo number_format($amount, 2); ?></p>
                </div>
                
                <form method="POST" action="">
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($csrfToken); ?>">
                    <div class="form-group">
                        <label for="payment_method">Select Payment Method *</label>
                        <select id="payment_method" name="payment_method" required>
                            <option value="">Select Payment Method</option>
                            <option value="stripe">Credit/Debit Card (Stripe)</option>
                            <option value="paypal">PayPal</option>
                            <option value="bank_transfer">Bank Transfer</option>
                        </select>
                    </div>
                    
                    <div id="payment-details" style="display: none;">
                        <p style="color: var(--text-light); font-size: 0.9rem; margin-top: 1rem;">
                            <em>Note: This is a demo payment system. In production, integrate with actual payment gateway.</em>
                        </p>
                    </div>
                    
                    <button type="submit" class="btn" style="width: 100%; margin-top: 1rem;">Process Payment</button>
                </form>
            <?php endif; ?>
        </div>
    </div>
</section>

<script>
document.getElementById('payment_method').addEventListener('change', function() {
    const details = document.getElementById('payment-details');
    if (this.value) {
        details.style.display = 'block';
    } else {
        details.style.display = 'none';
    }
});
</script>

<?php include_footer(); ?>
