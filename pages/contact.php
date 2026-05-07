<?php
/**
 * Contact Page
 * Contact information and form
 */
require_once dirname(__DIR__) . '/config/config.php';

$pageTitle = 'Contact - FMLDS';
$message = '';
$messageType = '';

// Handle contact form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = sanitizeInput($_POST['name']);
    $email = sanitizeInput($_POST['email']);
    $subject = sanitizeInput($_POST['subject']);
    $messageText = sanitizeInput($_POST['message']);
    
    // In production, send email here
    // For now, just show success message
    $message = 'Thank you for your message. We will get back to you soon.';
    $messageType = 'success';
}

include dirname(__DIR__) . '/includes/header.php';
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Contact Us</h1>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; margin-top: 3rem;">
            <!-- Contact Information -->
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Get in Touch</h3>
                    <p class="card-text">
                        <strong><i class="fas fa-envelope"></i> Email:</strong><br>
                        info@fmlds.org
                    </p>
                    <p class="card-text" style="margin-top: 1rem;">
                        <strong><i class="fas fa-phone"></i> Phone:</strong><br>
                        +61 431 070 618
                    </p>
                    <p class="card-text" style="margin-top: 1rem;">
                        For any inquiries about the conference, registration, or general information, 
                        please feel free to contact us using the form or contact information above.
                    </p>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Send us a Message</h3>
                    
                    <?php if ($message): ?>
                        <div class="alert alert-<?php echo $messageType; ?>">
                            <?php echo htmlspecialchars($message); ?>
                        </div>
                    <?php endif; ?>
                    
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn" style="width: 100%;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
