/**
 * Xi mang Cam Pha - Vanilla JS
 * Mobile menu, PDF modal, scroll reveal.
 */
document.addEventListener('DOMContentLoaded', function () {
    initMobileMenu();
    initPdfModal();
    initScrollReveal();
    initHorizontalCarousels();
    initStickyCategoryTabs();
});

/**
 * Sticky Category Tabs - Shadow on scroll
 */
function initStickyCategoryTabs() {
    const tabs = document.querySelector('.sticky-category-tabs');
    if (!tabs) return;

    // Create a sentinel element to detect when the tabs become sticky
    const sentinel = document.createElement('div');
    sentinel.classList.add('sticky-sentinel');
    sentinel.style.position = 'absolute';
    sentinel.style.top = '0';
    sentinel.style.height = '1px';
    sentinel.style.width = '100%';
    sentinel.style.pointerEvents = 'none';
    sentinel.style.visibility = 'hidden';
    
    // Insert sentinel before the tabs wrapper
    tabs.parentNode.insertBefore(sentinel, tabs);

    const headerHeight = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--site-header-height')) || 72;

    const observer = new IntersectionObserver(
        ([entry]) => {
            // If the sentinel is NOT intersecting with the top of the viewport 
            // (considering the header offset), then the tabs are "stuck"
            tabs.classList.toggle('is-stuck', entry.boundingClientRect.top < headerHeight);
        },
        {
            rootMargin: `-${headerHeight}px 0px 0px 0px`,
            threshold: [0, 1]
        }
    );

    observer.observe(sentinel);
}

function initHorizontalCarousels() {
    document.querySelectorAll('[data-carousel]').forEach((track) => {
        const section = track.closest('section');
        if (!section) return;

        const prev = section.querySelector('.js-carousel-prev');
        const next = section.querySelector('.js-carousel-next');

        if (!prev || !next) return;

        const getStep = () => {
            const firstItem = track.querySelector('.snap-start');
            if (!firstItem) return 320;
            const style = window.getComputedStyle(track);
            const gap = parseInt(style.columnGap || style.gap || '24', 10);
            return firstItem.getBoundingClientRect().width + gap;
        };

        const updateButtons = () => {
            const maxScroll = track.scrollWidth - track.clientWidth - 2;
            prev.disabled = track.scrollLeft <= 2;
            next.disabled = track.scrollLeft >= maxScroll;
        };

        prev.addEventListener('click', () => {
            track.scrollBy({ left: -getStep(), behavior: 'smooth' });
        });

        next.addEventListener('click', () => {
            track.scrollBy({ left: getStep(), behavior: 'smooth' });
        });

        track.addEventListener('scroll', updateButtons, { passive: true });
        window.addEventListener('resize', updateButtons);
        
        // Initial state
        setTimeout(updateButtons, 100);
    });
}

function initMobileMenu() {
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileClose = document.getElementById('mobile-menu-close');
    const mobileNav = document.getElementById('mobile-nav');

    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', function () {
            mobileNav.classList.remove('hidden');
            mobileNav.setAttribute('aria-hidden', 'false');
            mobileToggle.setAttribute('aria-expanded', 'true');
        });
    }

    if (mobileClose && mobileNav) {
        mobileClose.addEventListener('click', function () {
            mobileNav.classList.add('hidden');
            mobileNav.setAttribute('aria-hidden', 'true');
            if (mobileToggle) {
                mobileToggle.setAttribute('aria-expanded', 'false');
            }
        });
    }

    if (mobileNav) {
        mobileNav.addEventListener('click', function (event) {
            if (event.target === mobileNav) {
                mobileNav.classList.add('hidden');
                mobileNav.setAttribute('aria-hidden', 'true');
                if (mobileToggle) {
                    mobileToggle.setAttribute('aria-expanded', 'false');
                }
            }
        });
    }
}

function initPdfModal() {
    const modal = document.getElementById('pdfModal');
    const modalDialog = modal?.querySelector('[data-pdf-modal-dialog]');
    const modalTitle = document.getElementById('pdfModalTitle');
    const modalFrame = document.getElementById('pdfModalFrame');
    const modalLoading = document.getElementById('pdfModalLoading');
    const modalOpen = document.getElementById('pdfModalOpen');
    const modalFallback = document.getElementById('pdfModalFallback');
    const modalClose = document.getElementById('pdfModalClose');
    const triggers = document.querySelectorAll('[data-pdf-trigger]');

    if (!modal || !modalDialog || !modalTitle || !modalFrame || !modalLoading || !modalOpen || !modalFallback || !modalClose || !triggers.length) {
        return;
    }

    const buildPreviewUrl = (url) => {
        const [baseUrl] = url.split('#');
        return `${baseUrl}#view=FitH&pagemode=none&navpanes=0&toolbar=1`;
    };

    const openModal = (url, title) => {
        const previewUrl = buildPreviewUrl(url);

        modalTitle.textContent = title || 'Tai lieu PDF';
        modalLoading.classList.remove('hidden');
        modalFrame.src = previewUrl;
        modalOpen.href = url;
        modalFallback.href = url;
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        modal.setAttribute('aria-hidden', 'false');
        document.body.classList.add('overflow-hidden');
    };

    const closeModal = () => {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        modal.setAttribute('aria-hidden', 'true');
        modalLoading.classList.remove('hidden');
        modalFrame.src = '';
        modalOpen.href = '#';
        modalFallback.href = '#';
        document.body.classList.remove('overflow-hidden');
    };

    triggers.forEach((trigger) => {
        trigger.addEventListener('click', function () {
            const url = this.getAttribute('data-pdf-url');
            const title = this.getAttribute('data-pdf-title');

            if (!url) {
                return;
            }

            openModal(url, title);
        });
    });

    modalClose.addEventListener('click', closeModal);

    modal.addEventListener('click', function (event) {
        if (event.target === modal) {
            closeModal();
        }
    });

    modalDialog.addEventListener('click', function (event) {
        event.stopPropagation();
    });

    modalFrame.addEventListener('load', function () {
        modalLoading.classList.add('hidden');
    });

    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape' && modal.getAttribute('aria-hidden') === 'false') {
            closeModal();
        }
    });
}

function initScrollReveal() {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (prefersReducedMotion) {
        document.querySelectorAll('[data-animate]').forEach((element) => {
            element.classList.add('is-visible');
            element.style.opacity = '1';
            element.style.transform = 'none';
        });
        return;
    }

    const staggerDelay = 120;

    const clearAnimationTimer = (element) => {
        if (!element._animateTimer) {
            return;
        }

        clearTimeout(element._animateTimer);
        delete element._animateTimer;
    };

    const showAnimatedElement = (element, delay = 0) => {
        clearAnimationTimer(element);

        element._animateTimer = window.setTimeout(() => {
            element.classList.add('is-visible');
            delete element._animateTimer;
        }, delay);
    };

    const hideAnimatedElement = (element) => {
        clearAnimationTimer(element);
        element.classList.remove('is-visible');
    };

    const revealCallback = (entries) => {
        entries.forEach((entry) => {
            const target = entry.target;

            if (target.hasAttribute('data-stagger-container')) {
                const children = target.querySelectorAll('[data-animate]');

                if (entry.isIntersecting) {
                    children.forEach((child, index) => {
                        const customDelay = child.getAttribute('data-animate-delay');
                        const delay = customDelay ? parseInt(customDelay, 10) : index * staggerDelay;
                        showAnimatedElement(child, delay);
                    });
                } else {
                    children.forEach((child) => {
                        hideAnimatedElement(child);
                    });
                }

                return;
            }

            if (entry.isIntersecting) {
                const delay = parseInt(target.getAttribute('data-animate-delay') || '0', 10);
                showAnimatedElement(target, delay);
            } else {
                hideAnimatedElement(target);
            }
        });
    };

    const revealObserver = new IntersectionObserver(revealCallback, {
        root: null,
        threshold: 0.15,
        rootMargin: '0px 0px -40px 0px',
    });

    document.querySelectorAll('[data-animate]:not([data-stagger-container] [data-animate])').forEach((element) => {
        revealObserver.observe(element);
    });

    document.querySelectorAll('[data-stagger-container]').forEach((element) => {
        revealObserver.observe(element);
    });

    document.querySelectorAll('.timeline-line-animate').forEach((element) => {
        revealObserver.observe(element);
    });
}
