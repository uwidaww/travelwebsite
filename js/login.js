const inputs = document.querySelectorAll(".input-field");
const toggle_btn = document.querySelectorAll(".toggle");
const main = document.querySelector("main");
const bullets = document.querySelectorAll(".bullets span");
const images = document.querySelectorAll(".image");

inputs.forEach((inp) => {
  inp.addEventListener("focus", () => {
    inp.classList.add("active");
  });
  inp.addEventListener("blur", () => {
    if (inp.value != "") return;
    inp.classList.remove("active");
  });
});

toggle_btn.forEach((btn) => {
  btn.addEventListener("click", () => {
    main.classList.toggle("sign-up-mode");
  });
});

// function moveSlider() {
//   let index = this.dataset.value;

//   let currentImage = document.querySelector(`.img-${index}`);
//   images.forEach((img) => img.classList.remove("show"));
//   currentImage.classList.add("show");

//   const textSlider = document.querySelector(".text-group");
//   textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

//   bullets.forEach((bull) => bull.classList.remove("active"));
//   this.classList.add("active");
// }

// function autoMoveSlider() {
//   let currentIndex = 1;
//   setInterval(() => {
//     moveSlider(currentIndex);
//     currentIndex = (currentIndex % bullets.length) + 1; // Geser ke indeks berikutnya
//   }, 2000);
// }

// autoMoveSlider();

// bullets.forEach((bullet) => {
//   bullet.addEventListener("click", moveSlider);
// });

function moveSlider(index) {
  let currentImage = document.querySelector(`.img-${index}`);
  images.forEach((img) => img.classList.remove("show"));
  currentImage.classList.add("show");

  const textSlider = document.querySelector(".text-group");
  textSlider.style.transform = `translateY(${-(index - 1) * 2.2}rem)`;

  bullets.forEach((bull) => bull.classList.remove("active"));
  bullets[index - 1].classList.add("active");
}

function autoMoveSlider() {
  let currentIndex = 1;
  setInterval(() => {
    moveSlider(currentIndex);
    currentIndex = (currentIndex % bullets.length) + 1;
  }, 3000);
}

autoMoveSlider();  // Panggil fungsi autoMoveSlider untuk memulai otomatisasi

bullets.forEach((bullet, index) => {
  bullet.addEventListener("click", () => moveSlider(index + 1));
});

