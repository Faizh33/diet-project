document.addEventListener("DOMContentLoaded", () => {
    const zooms = document.querySelectorAll(".zooming");

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    zooms.forEach(zoom => observer.observe(zoom));
});