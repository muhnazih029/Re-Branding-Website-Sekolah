export default class ScrollToTop {
    constructor() {
        this.button = document.getElementById("scrollToTopBtn");
        this.init();
    }

    init() {
        if (!this.button) return;

        window.addEventListener("scroll", this.handleScroll.bind(this), {
            passive: true,
        });
        this.button.addEventListener("click", this.scrollToTop.bind(this));
    }

    handleScroll() {
        if (window.scrollY > 300) {
            this.showButton();
        } else {
            this.hideButton();
        }
    }

    showButton() {
        this.button.classList.remove("hidden", "opacity-0", "translate-y-8");
        this.button.classList.add("opacity-100", "translate-y-0");
    }

    hideButton() {
        this.button.classList.add("opacity-0", "translate-y-8");
        this.button.classList.remove("opacity-100", "translate-y-0");
        setTimeout(() => {
            this.button.classList.add("hidden");
        }, 300);
    }

    scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });
    }
}
