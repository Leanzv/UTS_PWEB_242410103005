document.addEventListener('DOMContentLoaded', () => {
    document.documentElement.style.opacity = 0;
    document.documentElement.style.transition = 'opacity 400ms ease-in-out';
    requestAnimationFrame(() => {
        document.documentElement.style.opacity = 1;
    });

    const staggers = document.querySelectorAll('.fade-stagger');
    staggers.forEach((el, idx) => {
        el.style.opacity = 0;
        el.style.transform = 'translateY(8px)';
        el.style.transition = 'opacity 300ms ease, transform 300ms ease';
        setTimeout(() => {
            el.style.opacity = 1;
            el.style.transform = 'translateY(0)';
        }, 100 + idx * 80);
    });

    const revealEls = document.querySelectorAll('.reveal-on-scroll');
    const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = 1;
                entry.target.style.transform = 'translateY(0)';
                io.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });

    revealEls.forEach(el => {
        el.style.opacity = 0;
        el.style.transform = 'translateY(12px)';
        el.style.transition = 'opacity 420ms ease, transform 420ms ease';
        io.observe(el);
    });
});

(function() {
    const isTouch = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
    if (isTouch) return;
    document.addEventListener('mouseover', (e) => {
        const card = e.target.closest('.card-anim');
        if (card) {
            card.style.transform = 'translateY(-6px) scale(1.01)';
            card.style.boxShadow = '0 10px 30px rgba(0,0,0,0.12)';
            card.style.transition = 'transform 220ms ease, box-shadow 220ms ease';
        }
    });
    document.addEventListener('mouseout', (e) => {
        const card = e.target.closest('.card-anim');
        if (card) {
            card.style.transform = '';
            card.style.boxShadow = '';
        }
    });
})();