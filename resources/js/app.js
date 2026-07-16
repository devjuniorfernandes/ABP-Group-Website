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

    // 4. Business Carousel slider navigation
    const carousel = document.getElementById('business-carousel');
    const btnPrev = document.getElementById('carousel-prev');
    const btnNext = document.getElementById('carousel-next');

    if (carousel && btnPrev && btnNext) {
        const getCardWidth = () => {
            const firstCard = carousel.querySelector('.shrink-0');
            return firstCard ? firstCard.clientWidth + 32 : 380; // card width + gap
        };

        btnPrev.addEventListener('click', () => {
            carousel.scrollBy({ left: -getCardWidth(), behavior: 'smooth' });
        });

        btnNext.addEventListener('click', () => {
            carousel.scrollBy({ left: getCardWidth(), behavior: 'smooth' });
        });
    }

    // 5. Fallback for scroll-driven animations in browsers without support (e.g. Firefox)
    if (!CSS.supports('(animation-timeline: view()) and (animation-range: entry)')) {
        const parallaxSection = document.querySelector('.parallax-section-timeline');
        const leftLayer = document.querySelector('.parallax-layer-left');
        const rightLayer = document.querySelector('.parallax-layer-right');

        if (parallaxSection && (leftLayer || rightLayer)) {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        window.addEventListener('scroll', onParallaxScroll, { passive: true });
                        onParallaxScroll(); // initial update
                    } else {
                        window.removeEventListener('scroll', onParallaxScroll);
                    }
                });
            }, { threshold: 0 });

            observer.observe(parallaxSection);

            function onParallaxScroll() {
                const scrollY = window.scrollY;
                const rect = parallaxSection.getBoundingClientRect();
                const sectionTop = rect.top + scrollY;
                const sectionHeight = rect.height;
                const windowHeight = window.innerHeight;

                if (scrollY >= sectionTop - windowHeight && scrollY <= sectionTop + sectionHeight) {
                    const scrollPercent = (scrollY - (sectionTop - windowHeight)) / (sectionHeight + windowHeight);

                    if (leftLayer) {
                        const angle = scrollPercent * 45;
                        const scale = 1 + scrollPercent * 0.15;
                        const translate = scrollPercent * -5;
                        leftLayer.style.transform = `rotate(${angle}deg) scale(${scale}) translate(${translate}%, ${translate}%)`;
                    }

                    if (rightLayer) {
                        const angle = scrollPercent * -60;
                        const scale = 1 + scrollPercent * 0.25;
                        const translate = scrollPercent * 5;
                        rightLayer.style.transform = `rotate(${angle}deg) scale(${scale}) translate(${translate}%, ${translate}%)`;
                    }
                }
            }
        }
    }

    // 6. Stats Counter Animation using IntersectionObserver
    const counters = document.querySelectorAll('[data-counter]');
    if (counters.length > 0) {
        const runCounter = (counter) => {
            const target = parseInt(counter.getAttribute('data-target'), 10) || 0;
            const duration = 2000; // Animation duration in ms
            const prefix = counter.getAttribute('data-prefix') || '';
            const suffix = counter.getAttribute('data-suffix') || '';
            const startTime = performance.now();

            const updateCount = (currentTime) => {
                const elapsed = currentTime - startTime;
                const progress = Math.min(elapsed / duration, 1);

                // Easing function: easeOutQuad
                const easeProgress = progress * (2 - progress);
                const currentValue = Math.floor(easeProgress * target);

                counter.textContent = `${prefix}${currentValue}${suffix}`;

                if (progress < 1) {
                    requestAnimationFrame(updateCount);
                } else {
                    counter.textContent = `${prefix}${target}${suffix}`;
                }
            };

            requestAnimationFrame(updateCount);
        };

        const counterObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    runCounter(counter);
                    observer.unobserve(counter); // Only run once
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

        counters.forEach(counter => {
            // Read initial text as backup target if data-target is not set
            if (!counter.hasAttribute('data-target')) {
                const text = counter.textContent.trim();
                const num = parseInt(text.replace(/[^0-9]/g, ''), 10);
                if (!isNaN(num)) {
                    counter.setAttribute('data-target', num);
                    if (text.startsWith('+')) counter.setAttribute('data-prefix', '+');
                    if (text.endsWith('k+')) {
                        counter.setAttribute('data-suffix', 'k+');
                    } else if (text.endsWith('+')) {
                        counter.setAttribute('data-suffix', '+');
                    } else if (text.endsWith('%')) {
                        counter.setAttribute('data-suffix', '%');
                    }
                }
            }
            // Set initial state to 0 with prefix/suffix
            const prefix = counter.getAttribute('data-prefix') || '';
            const suffix = counter.getAttribute('data-suffix') || '';
            counter.textContent = `${prefix}0${suffix}`;

            counterObserver.observe(counter);
        });
    }

    // 7. Sustainability Section Background Parallax effect
    const sustainabilitySection = document.querySelector('.sustainability-section');
    const sustainabilityBg = document.querySelector('.sustainability-bg');
    if (sustainabilitySection && sustainabilityBg) {
        let sectionTop = sustainabilitySection.offsetTop;
        let sectionHeight = sustainabilitySection.offsetHeight;
        let windowHeight = window.innerHeight;

        const updateDimensions = () => {
            sectionTop = sustainabilitySection.offsetTop;
            sectionHeight = sustainabilitySection.offsetHeight;
            windowHeight = window.innerHeight;
        };

        window.addEventListener('resize', updateDimensions);
        window.addEventListener('orientationchange', updateDimensions);

        setTimeout(updateDimensions, 100);

        let ticking = false;

        function onSustainabilityScroll() {
            if (!ticking) {
                window.requestAnimationFrame(() => {
                    const scrollY = window.scrollY;
                    if (scrollY >= sectionTop - windowHeight && scrollY <= sectionTop + sectionHeight) {
                        const distance = scrollY - (sectionTop - windowHeight);
                        const speed = 0.12;
                        const translateY = distance * speed;
                        sustainabilityBg.style.transform = `translate3d(0, ${translateY}px, 0) scale(1.25)`;
                    }
                    ticking = false;
                });
                ticking = true;
            }
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    window.addEventListener('scroll', onSustainabilityScroll, { passive: true });
                    updateDimensions();
                    onSustainabilityScroll();
                } else {
                    window.removeEventListener('scroll', onSustainabilityScroll);
                }
            });
        }, { threshold: 0 });

        observer.observe(sustainabilitySection);
    }
});
