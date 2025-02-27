// js/shared.js
document.addEventListener('DOMContentLoaded', function() {
    // Check for mobile devices
    function isMobileDevice() {
        return window.innerWidth < 769;
    }

    // Set active menu item based on current page
    function setActiveMenuItem() {
        // Get current page path
        const path = window.location.pathname;
        
        // Clear all active states first
        const menuItems = document.querySelectorAll('.menu-item');
        menuItems.forEach(item => item.classList.remove('active'));
        
        // Set active class based on current URL
        if (path.endsWith('index.html') || path.endsWith('/ngo-admin/')) {
            document.querySelector('.menu-item[href="../index.html"]').classList.add('active');
        } else {
            // Extract the page name from the path
            const pageName = path.split('/').pop();
            
            // Find and activate the matching menu item
            const activeItem = document.querySelector(`.menu-item[href="${pageName}"]`);
            if (activeItem) {
                activeItem.classList.add('active');
            }
        }
    }

    // Mobile check
    if (isMobileDevice()) {
        document.querySelector('.mobile-warning').style.display = 'flex';
        document.querySelector('.dashboard-container').style.display = 'none';
    }
    
    // Sidebar toggle
    document.getElementById('toggle-sidebar').addEventListener('click', function() {
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('main-content');
        
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('expanded');
    });
    
    // Mobile resize check
    window.addEventListener('resize', function() {
        if (isMobileDevice()) {
            document.querySelector('.mobile-warning').style.display = 'flex';
            document.querySelector('.dashboard-container').style.display = 'none';
        } else {
            document.querySelector('.mobile-warning').style.display = 'none';
            document.querySelector('.dashboard-container').style.display = 'flex';
        }
    });
    
    // Set active menu item after sidebar is loaded
    setActiveMenuItem();
});

// Set active menu item based on current page
function setActiveMenuItem() {
    // Get current page identifier from body
    const currentPage = document.body.getAttribute('data-page');
    
    // Clear all active states first
    const menuItems = document.querySelectorAll('.menu-item');
    menuItems.forEach(item => item.classList.remove('active'));
    
    // Set active class based on data-page attribute
    if (currentPage) {
        const activeItem = document.querySelector(`.menu-item[data-page="${currentPage}"]`);
        if (activeItem) {
            activeItem.classList.add('active');
        }
    }
}