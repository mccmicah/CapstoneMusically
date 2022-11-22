/* Navbar */
const menu = document.querySelector("#mobile-menu");
const menuLinks = document.querySelector(".navbar__menu");
const navLogo = document.querySelector("#navbar__logo");
const body = document.querySelector("body");

const mobileMenu = () => {
  menu.classList.toggle("is-active");
  menuLinks.classList.toggle("active");
  body.classList.toggle("active");
};

menu.addEventListener("click", mobileMenu);

/* Search Event Homepage box */

let searchable = [
  "Halloweekend Rocks!",
  "Japanese Breakfast",
  "Country Time Fun",
  "End of Summer Bash",
];

const searchInput = document.getElementById("search");
const searchWrapper = document.querySelector(".wrapper");
const resultsWrapper = document.querySelector(".results");

searchInput.addEventListener("keyup", () => {
  let results = [];
  let input = searchInput.value;
  if (input.length) {
    results = searchable.filter((item) => {
      return item.toLowerCase().includes(input.toLowerCase());
    });
  }
  renderResults(results);
});

function renderResults(results) {
  if (!results.length) {
    return searchWrapper.classList.remove("show");
  }

  const content = results
    .map((item) => {
      return `<li><a href="#"> ${item} </a></li>`;
    })
    .join("");

  searchWrapper.classList.add("show");
  resultsWrapper.innerHTML = `<ul>${content}</ul>`;
}