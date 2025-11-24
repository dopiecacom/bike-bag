document.addEventListener('DOMContentLoaded', function() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuContent = mobileMenu ? mobileMenu.querySelector('div') : null;
    const body = document.body;
    const hamburgerLine1 = document.getElementById('hamburger-line-1');
    const hamburgerLine2 = document.getElementById('hamburger-line-2');
    const hamburgerLine3 = document.getElementById('hamburger-line-3');

    function openMenu() {
        if (!mobileMenu || !mobileMenuOverlay || !mobileMenuContent) return;
        
        mobileMenuOverlay.classList.remove('hidden');
        mobileMenu.classList.remove('hidden');
        mobileMenu.classList.remove('pointer-events-none');
        
        requestAnimationFrame(function() {
            mobileMenuOverlay.classList.remove('opacity-0');
            mobileMenuOverlay.classList.add('opacity-100');
            mobileMenuContent.classList.remove('-translate-x-full');
            mobileMenuContent.classList.add('translate-x-0');
        });
        
        body.style.overflow = 'hidden';
        
        if (hamburgerLine1 && hamburgerLine2 && hamburgerLine3) {
            hamburgerLine1.style.transform = 'rotate(45deg) translateY(8px)';
            hamburgerLine2.style.opacity = '0';
            hamburgerLine3.style.transform = 'rotate(-45deg) translateY(-8px)';
        }
    }

    function closeMenu() {
        if (!mobileMenu || !mobileMenuOverlay || !mobileMenuContent) return;
        
        mobileMenuOverlay.classList.remove('opacity-100');
        mobileMenuOverlay.classList.add('opacity-0');
        mobileMenuContent.classList.remove('translate-x-0');
        mobileMenuContent.classList.add('-translate-x-full');
        
        setTimeout(function() {
            mobileMenuOverlay.classList.add('hidden');
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.add('pointer-events-none');
        }, 300);
        
        body.style.overflow = '';
        
        if (hamburgerLine1 && hamburgerLine2 && hamburgerLine3) {
            hamburgerLine1.style.transform = '';
            hamburgerLine2.style.opacity = '';
            hamburgerLine3.style.transform = '';
        }
    }

    if (mobileMenuToggle && mobileMenu && mobileMenuOverlay) {
        mobileMenuToggle.addEventListener('click', function() {
            const isOpen = !mobileMenu.classList.contains('hidden');
            
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        mobileMenuOverlay.addEventListener('click', function() {
            closeMenu();
        });

        const mobileMenuLinks = mobileMenu.querySelectorAll('a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function() {
                closeMenu();
            });
        });
    }
});
