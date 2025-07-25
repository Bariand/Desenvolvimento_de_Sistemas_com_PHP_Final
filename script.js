let index = 1;
function trocarSlide() {
    const slide = document.getElementById("slide");
    slide.style.opacity = 0;
    setTimeout(() => {
        index++;
        if (index > 3) index = 1;
        slide.src = "imagens/slide" + index + ".jpg";
        slide.style.opacity = 1;
    }, 500);
}
setInterval(trocarSlide, 3000);

function setupcarrossel(prevBtnId, nextBtnId, rowId) {
    const prevBtn = document.getElementById(prevBtnId);
    const nextBtn = document.getElementById(nextBtnId);
    const row = document.getElementById(rowId);
    const itemWidth = 210;
    let scrollPosition = 0;

    prevBtn.addEventListener("click", () => {
        scrollPosition -= itemWidth * 3;
        if (scrollPosition < 0) scrollPosition = 0;
        row.scrollTo({ left: scrollPosition, behavior: 'smooth' });
    });

    nextBtn.addEventListener("click", () => {
        scrollPosition += itemWidth * 3;
        if (scrollPosition > row.scrollWidth - row.clientWidth) {
            scrollPosition = row.scrollWidth - row.clientWidth;
        }
        row.scrollTo({ left: scrollPosition, behavior: 'smooth' });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    setupcarrossel("pizza-prev", "pizza-next", "pizza-row");
    setupcarrossel("vinho-prev", "vinho-next", "vinho-row");

    document.querySelectorAll('a.smooth-scroll').forEach(link => {
        link.addEventListener("click", e => {
            e.preventDefault();
            const target = document.querySelector(link.hash);
            if (target) target.scrollIntoView({ behavior: "smooth" });
        });
    });
});
