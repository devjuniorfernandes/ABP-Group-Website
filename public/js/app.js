document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.main-header');
    const mobileToggle = document.querySelector('.mobile-toggle');
    const mobileDrawer = document.querySelector('.mobile-drawer');

    // 1. Header scroll effect
    const handleScroll = () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    };
    
    window.addEventListener('scroll', handleScroll);
    handleScroll(); // Initial run

    // 2. Mobile drawer toggle
    if (mobileToggle && mobileDrawer) {
        mobileToggle.addEventListener('click', () => {
            mobileDrawer.classList.toggle('active');
            mobileToggle.classList.toggle('active');
            
            // Toggle body scroll
            if (mobileDrawer.classList.contains('active')) {
                document.body.style.overflow = 'hidden';
                // Transform hamburger to X
                mobileToggle.children[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                mobileToggle.children[1].style.opacity = '0';
                mobileToggle.children[2].style.transform = 'rotate(-45deg) translate(6px, -6px)';
            } else {
                document.body.style.overflow = '';
                mobileToggle.children[0].style.transform = '';
                mobileToggle.children[1].style.opacity = '';
                mobileToggle.children[2].style.transform = '';
            }
        });
    }

    // 3. Dropdowns on mobile
    const dropdownToggle = document.querySelector('.dropdown-toggle');
    if (dropdownToggle && window.innerWidth < 1024) {
        dropdownToggle.addEventListener('click', (e) => {
            e.preventDefault();
            const submenu = dropdownToggle.nextElementSibling;
            if (submenu) {
                submenu.style.position = 'static';
                submenu.style.opacity = submenu.style.opacity === '1' ? '0' : '1';
                submenu.style.visibility = submenu.style.visibility === 'visible' ? 'hidden' : 'visible';
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            }
        });
    }
});
