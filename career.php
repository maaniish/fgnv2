<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Careers | NGO Name</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    .job-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .job-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }
    .banner-overlay {
      background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.5) 50%, rgba(0,0,0,0.3) 100%);
    }
  </style>
</head>
<?php include './includes/header.php'; ?>

<body class="bg-gray-50 text-gray-800 ">

  <!-- Hero Banner -->
  <div class="relative bg-cover bg-center h-64 md:h-96" style="background-image: url('/api/placeholder/1200/600')">
    <div class="absolute inset-0 banner-overlay"></div>
    <div class="relative container mx-auto px-4 h-full flex flex-col justify-center">
      <h1 class="text-3xl md:text-5xl font-bold text-white mb-4">Join Our Mission</h1>
      <p class="text-xl text-white max-w-2xl">Discover rewarding careers that make a meaningful impact in communities around the world.</p>
    </div>
  </div>

  <!-- Main Content -->
  <div class="container mx-auto px-4 py-12">
    <!-- Why Join Us Section -->
    <section class="mb-16">
      <h2 class="text-3xl font-bold text-center mb-12">Why Join Our Team?</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
          <div class="bg-green-100 p-4 rounded-full inline-block mb-4">
            <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2">Global Impact</h3>
          <p class="text-gray-600">Work on projects that create real change in communities across the globe.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
          <div class="bg-green-100 p-4 rounded-full inline-block mb-4">
            <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2">Professional Growth</h3>
          <p class="text-gray-600">Develop your skills through meaningful work and continuous learning opportunities.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md text-center">
          <div class="bg-green-100 p-4 rounded-full inline-block mb-4">
            <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
            </svg>
          </div>
          <h3 class="text-xl font-semibold mb-2">Inclusive Culture</h3>
          <p class="text-gray-600">Join a diverse team united by passion and purpose in a supportive environment.</p>
        </div>
      </div>
    </section>

    <!-- Current Openings Section -->
    <section class="mb-16">
      <h2 class="text-3xl font-bold text-center mb-4">Current Openings</h2>
      <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">Explore our current job opportunities and find where your skills and passion can make a difference.</p>
      
      <!-- Filters -->
      <div class="flex flex-wrap gap-4 mb-8 justify-center">
        <button class="filter-btn bg-green-600 text-white px-4 py-2 rounded-md" data-filter="all">All Positions</button>
        <button class="filter-btn bg-white text-gray-700 px-4 py-2 rounded-md shadow-sm" data-filter="field">Field Work</button>
        <button class="filter-btn bg-white text-gray-700 px-4 py-2 rounded-md shadow-sm" data-filter="office">Office Work</button>
        <button class="filter-btn bg-white text-gray-700 px-4 py-2 rounded-md shadow-sm" data-filter="remote">Remote</button>
      </div>
      
      <!-- Job Listings -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Job Card 1 -->
        <div class="job-card bg-white rounded-lg shadow-md overflow-hidden" data-category="field">
          <div class="bg-green-500 text-white p-4">
            <span class="text-xs font-semibold bg-white text-green-600 px-2 py-1 rounded-full">Field Work</span>
            <h3 class="text-xl font-bold mt-2">Field Program Coordinator</h3>
            <p class="text-green-100">Nairobi, Kenya</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Lead our water sanitation program initiatives in rural communities of Kenya.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm text-green-600 font-semibold">Full Time</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm">View Details</button>
            </div>
          </div>
        </div>
        
        <!-- Job Card 2 -->
        <div class="job-card bg-white rounded-lg shadow-md overflow-hidden" data-category="remote">
          <div class="bg-green-500 text-white p-4">
            <span class="text-xs font-semibold bg-white text-green-600 px-2 py-1 rounded-full">Remote</span>
            <h3 class="text-xl font-bold mt-2">Grant Writer</h3>
            <p class="text-green-100">Remote (Global)</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Develop compelling grant proposals to secure funding for our global initiatives.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm text-green-600 font-semibold">Contract</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm">View Details</button>
            </div>
          </div>
        </div>
        
        <!-- Job Card 3 -->
        <div class="job-card bg-white rounded-lg shadow-md overflow-hidden" data-category="office">
          <div class="bg-green-500 text-white p-4">
            <span class="text-xs font-semibold bg-white text-green-600 px-2 py-1 rounded-full">Office Work</span>
            <h3 class="text-xl font-bold mt-2">Donor Relations Manager</h3>
            <p class="text-green-100">New York, USA</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Build and maintain relationships with major donors and corporate partners.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm text-green-600 font-semibold">Full Time</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm">View Details</button>
            </div>
          </div>
        </div>
        
        <!-- Job Card 4 -->
        <div class="job-card bg-white rounded-lg shadow-md overflow-hidden" data-category="field">
          <div class="bg-green-500 text-white p-4">
            <span class="text-xs font-semibold bg-white text-green-600 px-2 py-1 rounded-full">Field Work</span>
            <h3 class="text-xl font-bold mt-2">Community Health Educator</h3>
            <p class="text-green-100">Bangkok, Thailand</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Implement health education programs in underserved communities in Southeast Asia.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm text-green-600 font-semibold">Full Time</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm">View Details</button>
            </div>
          </div>
        </div>
        
        <!-- Job Card 5 -->
        <div class="job-card bg-white rounded-lg shadow-md overflow-hidden" data-category="office">
          <div class="bg-green-500 text-white p-4">
            <span class="text-xs font-semibold bg-white text-green-600 px-2 py-1 rounded-full">Office Work</span>
            <h3 class="text-xl font-bold mt-2">Finance Officer</h3>
            <p class="text-green-100">London, UK</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Manage financial operations and ensure compliance with international funding regulations.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm text-green-600 font-semibold">Full Time</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm">View Details</button>
            </div>
          </div>
        </div>
        
        <!-- Job Card 6 -->
        <div class="job-card bg-white rounded-lg shadow-md overflow-hidden" data-category="remote">
          <div class="bg-green-500 text-white p-4">
            <span class="text-xs font-semibold bg-white text-green-600 px-2 py-1 rounded-full">Remote</span>
            <h3 class="text-xl font-bold mt-2">Digital Communications Specialist</h3>
            <p class="text-green-100">Remote (Americas)</p>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-4">Develop and implement digital communication strategies to amplify our mission and impact.</p>
            <div class="flex justify-between items-center">
              <span class="text-sm text-green-600 font-semibold">Part Time</span>
              <button class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-md text-sm">View Details</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- CTA Section -->
    <section class="bg-green-50 rounded-xl p-8 md:p-12 mb-16">
      <div class="max-w-2xl mx-auto text-center">
        <h2 class="text-3xl font-bold mb-4">Don't See Your Perfect Role?</h2>
        <p class="text-gray-700 mb-6">We're always looking for passionate individuals to join our team. Send us your resume, and we'll keep you in mind for future opportunities.</p>
        <button class="bg-green-600 hover:bg-green-700 text-white px-6 py-3 rounded-md text-lg font-medium">Submit Your Resume</button>
      </div>
    </section>
    
    <!-- Values Section -->
    <section class="mb-16">
      <h2 class="text-3xl font-bold text-center mb-12">Our Values</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex items-start">
          <div class="bg-green-100 p-3 rounded-full mr-4">
            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Integrity</h3>
            <p class="text-gray-600">We hold ourselves to the highest ethical standards and are committed to transparency in all our operations.</p>
          </div>
        </div>
        <div class="flex items-start">
          <div class="bg-green-100 p-3 rounded-full mr-4">
            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Innovation</h3>
            <p class="text-gray-600">We embrace creative thinking and seek sustainable solutions to complex global challenges.</p>
          </div>
        </div>
        <div class="flex items-start">
          <div class="bg-green-100 p-3 rounded-full mr-4">
            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Empowerment</h3>
            <p class="text-gray-600">We believe in building capacity and enabling communities to create their own sustainable future.</p>
          </div>
        </div>
        <div class="flex items-start">
          <div class="bg-green-100 p-3 rounded-full mr-4">
            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
            </svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold mb-2">Global Perspective</h3>
            <p class="text-gray-600">We recognize our interconnectedness and work to create solutions that benefit communities worldwide.</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- JavaScript for filtering jobs -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all filter buttons
      const filterButtons = document.querySelectorAll('.filter-btn');
      // Get all job cards
      const jobCards = document.querySelectorAll('.job-card');
      
      // Add click event to each filter button
      filterButtons.forEach(button => {
        button.addEventListener('click', function() {
          // Get the filter value
          const filterValue = this.getAttribute('data-filter');
          
          // Remove active class from all buttons
          filterButtons.forEach(btn => {
            btn.classList.remove('bg-green-600', 'text-white');
            btn.classList.add('bg-white', 'text-gray-700');
          });
          
          // Add active class to clicked button
          this.classList.remove('bg-white', 'text-gray-700');
          this.classList.add('bg-green-600', 'text-white');
          
          // Filter job cards
          jobCards.forEach(card => {
            if (filterValue === 'all' || card.getAttribute('data-category') === filterValue) {
              card.style.display = 'block';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });
    });
  </script>
</body>
</html>