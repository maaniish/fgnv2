<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FGN News Section</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-100">
    <!-- Main Container -->
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <header class="mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-2">Latest News</h1>
            <div class="flex flex-wrap gap-4 items-center justify-between">
                <div class="flex gap-2">
                    <button id="allNews" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">All News</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Politics</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Business</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition">Technology</button>
                </div>
                <div class="relative">
                    <input type="text" id="searchInput" placeholder="Search news..." class="pl-10 pr-4 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
        </header>

        <!-- Featured News Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
            <div class="featured-news bg-white rounded-xl shadow-lg overflow-hidden">
                <img src="/api/placeholder/800/400" alt="Featured news" class="w-full h-64 object-cover">
                <div class="p-6">
                    <span class="text-sm text-blue-600 font-semibold">Technology</span>
                    <h2 class="text-2xl font-bold text-gray-800 mt-2 mb-4">Artificial Intelligence Breakthrough: New Model Surpasses Human Performance</h2>
                    <p class="text-gray-600 mb-4">Scientists have developed a groundbreaking AI model that demonstrates unprecedented capabilities in problem-solving and pattern recognition...</p>
                    <div class="flex items-center justify-between">
                        <span class="text-sm text-gray-500">5 hours ago</span>
                        <button class="text-blue-600 hover:text-blue-800 font-semibold">Read More →</button>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-1 gap-6">
                <div class="bg-white rounded-lg shadow p-4 flex gap-4">
                    <img src="/api/placeholder/200/200" alt="News thumbnail" class="w-32 h-32 object-cover rounded">
                    <div>
                        <span class="text-sm text-blue-600 font-semibold">Politics</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Global Summit Addresses Climate Change</h3>
                        <p class="text-gray-600 text-sm">World leaders gather to discuss urgent climate action measures...</p>
                        <span class="text-sm text-gray-500 mt-2 block">2 hours ago</span>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-4 flex gap-4">
                    <img src="/api/placeholder/200/200" alt="News thumbnail" class="w-32 h-32 object-cover rounded">
                    <div>
                        <span class="text-sm text-blue-600 font-semibold">Business</span>
                        <h3 class="text-xl font-bold text-gray-800 mb-2">Tech Giant Announces New Innovation Hub</h3>
                        <p class="text-gray-600 text-sm">Major investment in research and development facility...</p>
                        <span class="text-sm text-gray-500 mt-2 block">4 hours ago</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- News Grid Section -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="newsGrid">
            <!-- News cards will be dynamically populated here -->
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button id="loadMore" class="px-8 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Load More News</button>
        </div>
    </div>

    <script>
        // Sample news data
        const newsData = [
            {
                category: 'Technology',
                title: 'New Smartphone Release Sets Industry Standards',
                excerpt: 'Latest flagship device introduces revolutionary features...',
                image: '/api/placeholder/400/300',
                timeAgo: '3 hours ago'
            },
            {
                category: 'Business',
                title: 'Stock Markets React to Economic Report',
                excerpt: 'Global markets show positive trends following latest data...',
                image: '/api/placeholder/400/300',
                timeAgo: '5 hours ago'
            },
            {
                category: 'Politics',
                title: 'Parliament Passes New Environmental Law',
                excerpt: 'Landmark legislation aims to reduce carbon emissions...',
                image: '/api/placeholder/400/300',
                timeAgo: '6 hours ago'
            }
            // Add more news items as needed
        ];

        // Function to create news card
        function createNewsCard(news) {
            return `
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transition transform hover:-translate-y-1 hover:shadow-xl">
                    <img src="${news.image}" alt="News image" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <span class="text-sm text-blue-600 font-semibold">${news.category}</span>
                        <h3 class="text-xl font-bold text-gray-800 mt-2 mb-4">${news.title}</h3>
                        <p class="text-gray-600 mb-4">${news.excerpt}</p>
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-gray-500">${news.timeAgo}</span>
                            <button class="text-blue-600 hover:text-blue-800 font-semibold">Read More →</button>
                        </div>
                    </div>
                </div>
            `;
        }

        // Initialize news grid
        const newsGrid = document.getElementById('newsGrid');
        newsData.forEach(news => {
            newsGrid.innerHTML += createNewsCard(news);
        });

        // Search functionality
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            const filteredNews = newsData.filter(news => 
                news.title.toLowerCase().includes(searchTerm) || 
                news.excerpt.toLowerCase().includes(searchTerm)
            );
            
            newsGrid.innerHTML = '';
            filteredNews.forEach(news => {
                newsGrid.innerHTML += createNewsCard(news);
            });
        });

        // Load more functionality
        const loadMore = document.getElementById('loadMore');
        loadMore.addEventListener('click', () => {
            // Add more news cards (in real implementation, this would fetch from an API)
            newsData.forEach(news => {
                newsGrid.innerHTML += createNewsCard(news);
            });
        });
    </script>
</body>
</html>