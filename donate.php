<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make a Donation</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .donation-amount-btn.active {
            background-color: #1a56db;
            color: white;
        }
        .custom-amount:focus {
            border-color: #1a56db;
        }
    </style>
</head>
<body class="bg-gray-50">
<?php include './includes/header.php'; ?>
    <div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <!-- Header Section -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Make a Difference Today</h1>
                <p class="text-lg text-gray-600">Your donation helps us create positive change in our community</p>
            </div>

            <!-- Main Content -->
            <div class="bg-white rounded-2xl shadow-xl p-8">
                <!-- Progress Bar -->
                <div class="mb-8">
                    <div class="flex justify-between text-sm mb-2">
                        <span class="text-gray-600">Monthly Goal: $10,000</span>
                        <span class="text-blue-600 font-medium">$7,240 Raised</span>
                    </div>
                    <div class="h-3 bg-gray-200 rounded-full">
                        <div class="h-3 bg-blue-600 rounded-full" style="width: 72%"></div>
                    </div>
                </div>

                <!-- Donation Form -->
                <form id="donationForm" class="space-y-6">
                    <!-- Amount Selection -->
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-4">Select Amount</label>
                        <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mb-4">
                            <button type="button" class="donation-amount-btn bg-gray-100 hover:bg-blue-50 text-gray-800 font-medium py-3 px-4 rounded-lg transition-colors" data-amount="10">$10</button>
                            <button type="button" class="donation-amount-btn bg-gray-100 hover:bg-blue-50 text-gray-800 font-medium py-3 px-4 rounded-lg transition-colors" data-amount="25">$25</button>
                            <button type="button" class="donation-amount-btn bg-gray-100 hover:bg-blue-50 text-gray-800 font-medium py-3 px-4 rounded-lg transition-colors" data-amount="50">$50</button>
                            <button type="button" class="donation-amount-btn bg-gray-100 hover:bg-blue-50 text-gray-800 font-medium py-3 px-4 rounded-lg transition-colors" data-amount="100">$100</button>
                        </div>
                        <div class="mt-4">
                            <input type="number" id="customAmount" placeholder="Custom Amount" class="custom-amount w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-200 transition-colors">
                        </div>
                    </div>

                    <!-- Donation Frequency -->
                    <div>
                        <label class="block text-gray-700 text-sm font-medium mb-4">Donation Frequency</label>
                        <div class="flex space-x-4">
                            <label class="flex items-center">
                                <input type="radio" name="frequency" value="one-time" class="h-4 w-4 text-blue-600" checked>
                                <span class="ml-2 text-gray-700">One-time</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="frequency" value="monthly" class="h-4 w-4 text-blue-600">
                                <span class="ml-2 text-gray-700">Monthly</span>
                            </label>
                        </div>
                    </div>

                    <!-- Personal Information -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">First Name</label>
                            <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-200">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">Last Name</label>
                            <input type="text" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-200">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">Email</label>
                            <input type="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-200">
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-medium mb-2">Phone (Optional)</label>
                            <input type="tel" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-200">
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="w-full bg-blue-600 text-white font-medium py-4 px-6 rounded-lg hover:bg-blue-700 transition-colors">
                        Donate Now
                    </button>
                </form>

                <!-- Security Badge -->
                <div class="mt-8 text-center">
                    <div class="inline-flex items-center text-sm text-gray-500">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        Secure donation processed by Stripe
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Handle donation amount selection
        const donationBtns = document.querySelectorAll('.donation-amount-btn');
        const customAmountInput = document.getElementById('customAmount');

        donationBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                donationBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');
                // Clear custom amount
                customAmountInput.value = '';
            });
        });

        customAmountInput.addEventListener('input', () => {
            // Remove active class from all buttons when custom amount is entered
            donationBtns.forEach(btn => btn.classList.remove('active'));
        });

        // Handle form submission
        document.getElementById('donationForm').addEventListener('submit', (e) => {
            e.preventDefault();
            
            // Get selected amount
            let amount = customAmountInput.value;
            if (!amount) {
                const activeBtn = document.querySelector('.donation-amount-btn.active');
                if (activeBtn) {
                    amount = activeBtn.dataset.amount;
                }
            }

            // Get donation frequency
            const frequency = document.querySelector('input[name="frequency"]:checked').value;

            // Here you would typically send this data to your backend
            console.log('Processing donation:', {
                amount: amount,
                frequency: frequency
            });

            // Show success message (in production, this would happen after successful payment)
            alert('Thank you for your donation!');
        });
    </script>
</body>
</html>