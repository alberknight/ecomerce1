<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="CSS/checkout.css">
</head>
<body>
    <header>
        <h1>Complete Your Purchase</h1>
    </header>
    <main class="checkout-container">
        <form id="checkout-form">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" placeholder="Enter your delivery address" required></textarea>
            </div>
            <div class="form-group">
                <label for="payment-method">Payment Method:</label>
                <select id="payment-method" required>
                    <option value="" disabled selected>Select a payment method</option>
                    <option value="credit-card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="bank-transfer">Bank Transfer</option>
                </select>
            </div>
            <button type="submit" class="checkout-button">Place Order</button>
        </form>
        <div id="success-message" class="hidden">Thank you for your purchase!</div>
    </main>
    <script src="JavaScript/checkout.js"></script>
</body>
</html>
