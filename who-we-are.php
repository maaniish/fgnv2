<?php
$pageTitle = "Who We Are";
$currentPage = "who-we-are";  // This matches the navigation item
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - Future Generation Nepal</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
</head>
<body>
    <?php include './includes/header.php'; ?>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 py-8">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
            <!-- Main Content Area -->
            <div class="md:col-span-8">
                <h1 class="text-4xl font-bold text-gray-900 mb-6">Who We Are</h1>
                
                <div class="prose max-w-none">
                    <p class="text-lg text-gray-700 mb-6">
                        Future Generation Nepal (FGN) is dedicated to reconnecting trafficked children with their families
                        and preventing the trafficking of children through education, advocacy, and support for rural communities.
                    </p>

                    <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">Our Mission</h2>
                    <p class="text-gray-700 mb-6">
                        Our mission is to prevent the trafficking of Nepali children into children's homes, 
                        reunite trafficked children with their families, and advocate for family-based care over 
                        institutionalization.
                    </p>

                    <h2 class="text-2xl font-semibold text-gray-900 mt-8 mb-4">Our Vision</h2>
                    <p class="text-gray-700 mb-6">
                        We envision a Nepal where no child is separated from their family due to trafficking, 
                        where families are supported to care for their children, and where institutions are 
                        the last resort, not the first response.
                    </p>

                    <!-- Add more sections as needed -->
                </div>
            </div>

            <!-- Sidebar -->
            <div class="md:col-span-4">
                <div class="bg-gray-50 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Quick Facts</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span class="text-gray-700">Founded in [Year]</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span class="text-gray-700">[X] Children Reunited</span>
                        </li>
                        <li class="flex items-start">
                            <span class="text-blue-600 mr-2">•</span>
                            <span class="text-gray-700">[Y] Communities Supported</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-blue-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-blue-900 mb-4">Get Involved</h3>
                    <p class="text-blue-800 mb-4">
                        Join us in our mission to protect Nepal's children and support families.
                    </p>
                    <a href="donate.php" class="block w-full bg-blue-600 text-white text-center py-2 px-4 rounded-md hover:bg-blue-700 transition duration-150">
                        Support Our Work
                    </a>
                </div>
            </div>
        </div>
    </main>

    <!-- You might want to include a footer component here -->
</body>
</html>