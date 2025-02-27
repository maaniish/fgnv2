<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impact Gallery | NGO Name</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    .gallery-item {
      transition: all 0.3s ease;
    }
    .gallery-item:hover {
      transform: scale(1.02);
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
    .filter-button.active {
      background-color: #3B82F6;
      color: white;
    }
    .lightbox {
      display: none;
      position: fixed;
      z-index: 1000;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.85);
      justify-content: center;
      align-items: center;
      transition: all 0.3s ease;
    }
    .lightbox-content {
      max-width: 90%;
      max-height: 90%;
    }
    .lightbox-navigation {
      position: absolute;
      width: 100%;
      display: flex;
      justify-content: space-between;
      padding: 0 30px;
      box-sizing: border-box;
    }
    .lightbox-btn {
      width: 50px;
      height: 50px;
      background-color: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
    .lightbox-btn:hover {
      background-color: rgba(255, 255, 255, 0.4);
    }
    .page-header-bg {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.7)), url('/api/placeholder/1920/500') center/cover no-repeat;
    }
    .cause-icon {
      transition: all 0.3s ease;
    }
    .filter-button:hover .cause-icon {
      transform: translateY(-3px);
    }
    .fade-in {
      animation: fadeIn 0.5s ease-in;
    }
    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
  </style>
</head>
<?php include './includes/header.php'; ?>
<body class="bg-gray-50">

  <!-- Hero Header -->
  <header class="page-header-bg text-white py-20 mb-10">
    <div class="container mx-auto px-4">
      <h1 class="text-4xl md:text-5xl font-bold text-center mb-4">Our Impact Gallery</h1>
      <p class="text-xl md:text-2xl text-center max-w-3xl mx-auto">Witness the real-world change your generosity has created across our causes</p>
    </div>
  </header>

  <!-- Main Gallery Section -->
  <main class="container mx-auto px-4 mb-20">
    
    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-10">
      <button class="filter-button active flex flex-col items-center px-4 py-3 bg-white rounded-lg shadow-md transition-all duration-300 hover:bg-blue-50" data-filter="all">
        <span class="cause-icon text-blue-500 text-2xl mb-1"><i class="fas fa-globe"></i></span>
        <span class="font-medium">All Causes</span>
      </button>
      <button class="filter-button flex flex-col items-center px-4 py-3 bg-white rounded-lg shadow-md transition-all duration-300 hover:bg-blue-50" data-filter="education">
        <span class="cause-icon text-blue-500 text-2xl mb-1"><i class="fas fa-graduation-cap"></i></span>
        <span class="font-medium">Education</span>
      </button>
      <button class="filter-button flex flex-col items-center px-4 py-3 bg-white rounded-lg shadow-md transition-all duration-300 hover:bg-blue-50" data-filter="healthcare">
        <span class="cause-icon text-blue-500 text-2xl mb-1"><i class="fas fa-heartbeat"></i></span>
        <span class="font-medium">Healthcare</span>
      </button>
      <button class="filter-button flex flex-col items-center px-4 py-3 bg-white rounded-lg shadow-md transition-all duration-300 hover:bg-blue-50" data-filter="environment">
        <span class="cause-icon text-blue-500 text-2xl mb-1"><i class="fas fa-leaf"></i></span>
        <span class="font-medium">Environment</span>
      </button>
      <button class="filter-button flex flex-col items-center px-4 py-3 bg-white rounded-lg shadow-md transition-all duration-300 hover:bg-blue-50" data-filter="food">
        <span class="cause-icon text-blue-500 text-2xl mb-1"><i class="fas fa-utensils"></i></span>
        <span class="font-medium">Food Security</span>
      </button>
      <button class="filter-button flex flex-col items-center px-4 py-3 bg-white rounded-lg shadow-md transition-all duration-300 hover:bg-blue-50" data-filter="water">
        <span class="cause-icon text-blue-500 text-2xl mb-1"><i class="fas fa-tint"></i></span>
        <span class="font-medium">Clean Water</span>
      </button>
    </div>

    <!-- Description for selected category -->
    <div id="category-description" class="text-center mb-8 max-w-3xl mx-auto">
      <h2 class="text-2xl font-bold text-gray-800 mb-3">All Causes</h2>
      <p class="text-gray-600">Browse through all the incredible stories and images showing how your donations have made a difference across all our initiatives.</p>
    </div>
    
    <!-- Gallery Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
      <!-- Education -->
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="education">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/400" alt="Education project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-blue-500 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Education</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">New School in Ruralia</h3>
          <p class="text-gray-600 text-sm mt-1">Built with donations from our education initiative, providing 250 children access to quality education.</p>
        </div>
      </div>
      
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="education">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/401" alt="Education project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-blue-500 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Education</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Computer Lab Donation</h3>
          <p class="text-gray-600 text-sm mt-1">Tech literacy program bringing computers to underserved communities.</p>
        </div>
      </div>
      
      <!-- Healthcare -->
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="healthcare">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/402" alt="Healthcare project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-red-500 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Healthcare</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Mobile Clinic Program</h3>
          <p class="text-gray-600 text-sm mt-1">Our mobile clinics have reached 15 remote villages, providing care to over 500 patients monthly.</p>
        </div>
      </div>
      
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="healthcare">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/403" alt="Healthcare project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-red-500 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Healthcare</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Vaccination Drive</h3>
          <p class="text-gray-600 text-sm mt-1">Successful immunization campaign protecting 1,200 children against preventable diseases.</p>
        </div>
      </div>
      
      <!-- Environment -->
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="environment">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/404" alt="Environment project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-green-500 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Environment</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Reforestation Project</h3>
          <p class="text-gray-600 text-sm mt-1">10,000 native trees planted to restore local ecosystem and prevent soil erosion.</p>
        </div>
      </div>
      
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="environment">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/405" alt="Environment project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-green-500 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Environment</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Clean Beach Initiative</h3>
          <p class="text-gray-600 text-sm mt-1">Community volunteers removed over 500kg of plastic waste from coastal areas.</p>
        </div>
      </div>
      
      <!-- Food -->
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="food">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/406" alt="Food security project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-yellow-500 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Food Security</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Community Garden</h3>
          <p class="text-gray-600 text-sm mt-1">Urban farming initiative providing fresh produce to 75 families in food deserts.</p>
        </div>
      </div>
      
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="food">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/407" alt="Food security project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-yellow-500 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Food Security</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Emergency Food Relief</h3>
          <p class="text-gray-600 text-sm mt-1">Distributed meal packages to 350 families affected by recent natural disasters.</p>
        </div>
      </div>
      
      <!-- Water -->
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="water">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/408" alt="Clean water project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-blue-400 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Clean Water</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Well Construction</h3>
          <p class="text-gray-600 text-sm mt-1">New well providing clean water access to an entire village of 400 people.</p>
        </div>
      </div>
      
      <div class="gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer" data-category="water">
        <div class="relative h-52 overflow-hidden">
          <img src="/api/placeholder/500/409" alt="Clean water project" class="w-full h-full object-cover">
          <div class="absolute bottom-0 left-0 bg-blue-400 text-white px-3 py-1 rounded-tr-lg text-sm font-medium">Clean Water</div>
        </div>
        <div class="p-4">
          <h3 class="font-bold text-gray-800">Water Filter Distribution</h3>
          <p class="text-gray-600 text-sm mt-1">120 households now have access to clean drinking water through our filter program.</p>
        </div>
      </div>
    </div>
    
    <!-- "Load More" Button -->
    <div class="flex justify-center mt-10">
      <button id="load-more" class="bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-300 flex items-center">
        <span>Load More</span>
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
      </button>
    </div>
  </main>

  <!-- Call to Action -->
  <section class="bg-blue-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-3xl font-bold mb-6">Ready to Make Your Own Impact?</h2>
      <p class="text-xl max-w-2xl mx-auto mb-8">Join thousands of donors who have changed lives through our cause-focused initiatives.</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="#" class="bg-white text-blue-600 hover:bg-blue-50 font-bold py-3 px-8 rounded-lg transition-colors duration-300">Donate Now</a>
        <a href="#" class="bg-transparent border-2 border-white hover:bg-white hover:text-blue-600 font-bold py-3 px-8 rounded-lg transition-colors duration-300">View All Projects</a>
      </div>
    </div>
  </section>

  <!-- Lightbox Modal -->
  <div class="lightbox" id="lightbox">
    <div class="lightbox-navigation">
      <div class="lightbox-btn prev-btn">
        <i class="fas fa-chevron-left text-white text-xl"></i>
      </div>
      <div class="lightbox-btn next-btn">
        <i class="fas fa-chevron-right text-white text-xl"></i>
      </div>
    </div>
    <div class="lightbox-content">
      <img src="" alt="Enlarged gallery image" id="lightbox-img" class="max-w-full max-h-full">
    </div>
    <div class="absolute top-4 right-4">
      <div class="lightbox-btn close-btn">
        <i class="fas fa-times text-white text-xl"></i>
      </div>
    </div>
    <div class="absolute bottom-4 left-0 right-0 text-center">
      <div class="bg-black bg-opacity-70 inline-block px-6 py-3 rounded-lg">
        <h3 id="lightbox-title" class="text-white text-xl font-bold"></h3>
        <p id="lightbox-desc" class="text-gray-300 mt-1"></p>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Filter functionality
      const filterButtons = document.querySelectorAll('.filter-button');
      const galleryItems = document.querySelectorAll('.gallery-item');
      const categoryDescription = document.getElementById('category-description');
      
      // Category descriptions
      const descriptions = {
        all: {
          title: "All Causes",
          text: "Browse through all the incredible stories and images showing how your donations have made a difference across all our initiatives."
        },
        education: {
          title: "Education",
          text: "Your support helps build schools, provide learning materials, and train teachers in underserved communities."
        },
        healthcare: {
          title: "Healthcare",
          text: "From mobile clinics to vaccination drives, your donations bring vital healthcare to those who need it most."
        },
        environment: {
          title: "Environment",
          text: "Support conservation efforts, reforestation, and climate action initiatives to protect our planet."
        },
        food: {
          title: "Food Security",
          text: "Help us fight hunger through sustainable agriculture, emergency food relief, and community gardens."
        },
        water: {
          title: "Clean Water",
          text: "Your donations fund wells, filtration systems, and sanitation projects that save lives daily."
        }
      };
      
      // Set up filter functionality
      filterButtons.forEach(button => {
        button.addEventListener('click', () => {
          // Update active button
          filterButtons.forEach(btn => btn.classList.remove('active'));
          button.classList.add('active');
          
          // Get filter value
          const filterValue = button.getAttribute('data-filter');
          
          // Update description
          categoryDescription.querySelector('h2').textContent = descriptions[filterValue].title;
          categoryDescription.querySelector('p').textContent = descriptions[filterValue].text;
          
          // Filter gallery items
          galleryItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            
            // Hide all items first
            item.style.display = 'none';
            
            // Then show matching items with animation
            if (filterValue === 'all' || filterValue === itemCategory) {
              setTimeout(() => {
                item.style.display = 'block';
                item.classList.add('fade-in');
                
                // Remove animation class after animation completes
                setTimeout(() => {
                  item.classList.remove('fade-in');
                }, 500);
              }, 50);
            }
          });
        });
      });
      
      // Lightbox functionality
      const lightbox = document.getElementById('lightbox');
      const lightboxImg = document.getElementById('lightbox-img');
      const lightboxTitle = document.getElementById('lightbox-title');
      const lightboxDesc = document.getElementById('lightbox-desc');
      const prevBtn = document.querySelector('.prev-btn');
      const nextBtn = document.querySelector('.next-btn');
      const closeBtn = document.querySelector('.close-btn');
      
      let currentIndex = 0;
      const visibleItems = () => Array.from(galleryItems).filter(item => 
        window.getComputedStyle(item).display !== 'none'
      );
      
      // Set up gallery item click
      galleryItems.forEach(item => {
        item.addEventListener('click', () => {
          const items = visibleItems();
          currentIndex = items.indexOf(item);
          
          // Get image and description
          const img = item.querySelector('img').getAttribute('src');
          const title = item.querySelector('h3').textContent;
          const desc = item.querySelector('p').textContent;
          
          // Populate and show lightbox
          lightboxImg.setAttribute('src', img);
          lightboxTitle.textContent = title;
          lightboxDesc.textContent = desc;
          lightbox.style.display = 'flex';
          document.body.style.overflow = 'hidden';
        });
      });
      
      // Previous button
      prevBtn.addEventListener('click', () => {
        const items = visibleItems();
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        
        const item = items[currentIndex];
        const img = item.querySelector('img').getAttribute('src');
        const title = item.querySelector('h3').textContent;
        const desc = item.querySelector('p').textContent;
        
        lightboxImg.setAttribute('src', img);
        lightboxTitle.textContent = title;
        lightboxDesc.textContent = desc;
      });
      
      // Next button
      nextBtn.addEventListener('click', () => {
        const items = visibleItems();
        currentIndex = (currentIndex + 1) % items.length;
        
        const item = items[currentIndex];
        const img = item.querySelector('img').getAttribute('src');
        const title = item.querySelector('h3').textContent;
        const desc = item.querySelector('p').textContent;
        
        lightboxImg.setAttribute('src', img);
        lightboxTitle.textContent = title;
        lightboxDesc.textContent = desc;
      });
      
      // Close button
      closeBtn.addEventListener('click', () => {
        lightbox.style.display = 'none';
        document.body.style.overflow = 'auto';
      });
      
      // Close on background click
      lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
          lightbox.style.display = 'none';
          document.body.style.overflow = 'auto';
        }
      });
      
      // Keyboard navigation
      document.addEventListener('keydown', (e) => {
        if (lightbox.style.display === 'flex') {
          if (e.key === 'ArrowLeft') {
            prevBtn.click();
          } else if (e.key === 'ArrowRight') {
            nextBtn.click();
          } else if (e.key === 'Escape') {
            closeBtn.click();
          }
        }
      });
      
      // Load more button (simulated functionality)
      const loadMoreBtn = document.getElementById('load-more');
      let clickCount = 0;
      
      loadMoreBtn.addEventListener('click', () => {
        clickCount++;
        if (clickCount >= 2) {
          loadMoreBtn.textContent = "No More Items";
          loadMoreBtn.disabled = true;
          loadMoreBtn.classList.add('bg-gray-400');
          loadMoreBtn.classList.remove('bg-blue-600', 'hover:bg-blue-700');
          return;
        }
        
        // Simulate loading new items (in a real implementation, you would fetch from server)
        const activeFilter = document.querySelector('.filter-button.active').getAttribute('data-filter');
        const categories = ['education', 'healthcare', 'environment', 'food', 'water'];
        
        // Container to add new items
        const gallery = document.querySelector('.grid');
        
        // Add 4 new items
        for (let i = 0; i < 4; i++) {
          const randIndex = Math.floor(Math.random() * categories.length);
          const category = categories[randIndex];
          
          // Skip if active filter doesn't match
          if (activeFilter !== 'all' && activeFilter !== category) {
            i--; // Try again
            continue;
          }
          
          const colorClasses = {
            education: 'bg-blue-500',
            healthcare: 'bg-red-500',
            environment: 'bg-green-500',
            food: 'bg-yellow-500',
            water: 'bg-blue-400'
          };
          
          const newImageNum = 410 + clickCount * 4 + i;
          
          const newItem = document.createElement('div');
          newItem.className = 'gallery-item rounded-lg overflow-hidden shadow-md bg-white cursor-pointer fade-in';
          newItem.setAttribute('data-category', category);
          
          newItem.innerHTML = `
            <div class="relative h-52 overflow-hidden">
              <img src="/api/placeholder/500/${newImageNum}" alt="${category} project" class="w-full h-full object-cover">
              <div class="absolute bottom-0 left-0 ${colorClasses[category]} text-white px-3 py-1 rounded-tr-lg text-sm font-medium">${category.charAt(0).toUpperCase() + category.slice(1)}</div>
            </div>
            <div class="p-4">
              <h3 class="font-bold text-gray-800">New ${category.charAt(0).toUpperCase() + category.slice(1)} Project ${i+1}</h3>
              <p class="text-gray-600 text-sm mt-1">Recent initiative funded by our generous donors making an impact in communities.</p>
            </div>
          `;
          
          gallery.appendChild(newItem);
          
          // Add click event to new item
          newItem.addEventListener('click', () => {
            const items = visibleItems();
            currentIndex = items.indexOf(newItem);
            
            const img = newItem.querySelector('img').getAttribute('src');
            const title = newItem.querySelector('h3').textContent;
            const desc = newItem.querySelector('p').textContent;
            
            lightboxImg.setAttribute('src', img);
            lightboxTitle.textContent = title;
            lightboxDesc.textContent = desc;
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden';
          });
        }
      });
    });
  </script>
</body>
</html>