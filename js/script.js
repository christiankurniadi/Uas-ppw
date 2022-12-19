const header = document.querySelector("header");
const links = document.querySelectorAll(".header__links a");
// const ageVerification = document.querySelector(".age-verification-overlay");

let prevScrollpos = window.pageYOffset;
window.addEventListener("scroll", function () {
  if (window.scrollY > 0) {
    header.classList.add("active-scroll");
    for (let i = 0; i < links.length; i++) {
      links[i].style.color = "white";
    }
  } else {
    header.classList.remove("active-scroll");
    for (let i = 0; i < links.length; i++) {
      links[i].style.color = "white";
    }
  }
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    // Function untuk menampilkan header ketika user scroll ke atas layar
    header.style.top = "0";
    for (let i = 0; i < links.length; i++) {
      if (window.scrollY > 0) {
        links[i].style.color = "black";
      }
    }
  } else {
    // Function untuk menyembunyikon header ketika user scroll ke bawah layar
    header.style.top = "-74px";
  }
  prevScrollpos = currentScrollPos;
});

// window.onload = function () {
//   ageVerification.style.display = "block";
// };

// document.addEventListener("click", function (e) {
//   if (e.target.classList.contains("age-verification-btn-yes")) {
//     ageVerification.style.display = "none";
//   }
// });
