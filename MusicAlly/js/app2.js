const btn2 = document.querySelector(".btn2");

btn2.addEventListener("click", () => {
  btn2.classList.add("clicked");
  setTimeout(() => {
    btn2.classList.remove("clicked");
  }, 4000);
});

const btn3 = document.querySelector(".btn3");

btn3.addEventListener("click", () => {
  btn3.classList.add("clicked");
  setTimeout(() => {
    btn3.classList.remove("clicked");
  }, 4000);
});

const btn4 = document.querySelector(".btn4");

btn4.addEventListener("click", () => {
  btn4.classList.add("clicked");
  setTimeout(() => {
    btn4.classList.remove("clicked");
  }, 4000);
});
