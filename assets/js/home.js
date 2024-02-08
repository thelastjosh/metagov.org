document.addEventListener("DOMContentLoaded", function (event) {
  const prefersReducedMotion = window.matchMedia(
    "(prefers-reduced-motion: reduce)"
  ).matches;

  Draggable.create(".draggable");

  const animateWindows = () => {
    if (prefersReducedMotion) return;
    gsap.fromTo(
      ".draggable",
      {
        opacity: 0,
        scale: 0.5,
      },
      {
        scale: 1,
        opacity: 1,
        duration: 0.3,
        delay: 0.3,
        ease: "expo.out",
        stagger: 0.15, // 0.1 seconds between when each ".box" element starts animating
      }
    );
  };

  animateWindows();
});
