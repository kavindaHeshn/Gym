document.addEventListener("DOMContentLoaded", function() {
    const sections = document.querySelectorAll(".coaching");
    sections.forEach(section => {
        section.addEventListener("mouseover", function() {
            this.style.transform = "scale(1.05)";
        });
        section.addEventListener("mouseout", function() {
            this.style.transform = "scale(1)";
        });
    });
});
