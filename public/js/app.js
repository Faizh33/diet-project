document.addEventListener("DOMContentLoaded", () => {
    const slideInTexts = document.querySelectorAll(".slide-in-text");
    const zooms = document.querySelectorAll(".zooming");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    slideInTexts.forEach(text => observer.observe(text));
    zooms.forEach(zoom => observer.observe(zoom));
});