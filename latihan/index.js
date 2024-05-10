const btnLogin = document.querySelector(".nav-login");
const loginForm = document.querySelector(".Login");
const overlay = document.querySelector(".overlay");
const btnClose = document.querySelector(".btn-close");

btnLogin.addEventListener("click", function (e) {
  e.preventDefault();
  loginForm.classList.remove("hiden");
  overlay.classList.remove("hiden");
});

btnClose.addEventListener("click", function (e) {
  e.preventDefault();
  loginForm.classList.add("hiden");
  overlay.classList.add("hiden");
});
