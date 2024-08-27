// Animasi News (Tentang kami)

document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    });

    const elements = document.querySelectorAll(".news, .course-col");
    elements.forEach((element) => observer.observe(element));
});

// Animasi Galeri (Gallery Kami)
document.addEventListener("DOMContentLoaded", function () {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("visible");
            }
        });
    });

    const elements = document.querySelectorAll(".gallery, .gallery-col");
    elements.forEach((element) => {
        element.classList.add("hidden");
        observer.observe(element);
    });
});
