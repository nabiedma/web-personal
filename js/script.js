// Add smooth scrolling to all links
const links = document.querySelectorAll(".nav-link");

for (const link of links) {
  link.addEventListener("click", clickHandler);
}
 
function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");
  const offsetTop = document.querySelector(href).offsetTop;
 
  scroll({
    top: offsetTop,
    behavior: "smooth"
  })
};

document.addEventListener('DOMContentLoaded', () => {
    const year = new Date().getFullYear();
    const year_span = document.getElementById("year");
    year_span.textContent = year;
})