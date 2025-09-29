// ========== Dark Mode Toggle ==========
const nav = document.querySelector("nav");

// buat tombol dark mode
const darkModeBtn = document.createElement("button");
darkModeBtn.textContent = "🌙 Dark Mode";
darkModeBtn.style.marginLeft = "20px";
darkModeBtn.classList.add("btn", "btn-primary");
nav.appendChild(darkModeBtn);

// event listener dark mode
darkModeBtn.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode");
  if (document.body.classList.contains("dark-mode")) {
    darkModeBtn.textContent = "☀️ Light Mode";
  } else {
    darkModeBtn.textContent = "🌙 Dark Mode";
  }
});

// ========== Event pada tombol "Lihat Selengkapnya" ==========
const buttons = document.querySelectorAll(".btn.btn-primary");

buttons.forEach(btn => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    const title = btn.closest(".card-content").querySelector("h3").textContent;
    alert("Kamu memilih: " + title);
  });
});

// ========== Smooth Scroll Navbar ==========
const navLinks = document.querySelectorAll("nav a");

navLinks.forEach(link => {
  link.addEventListener("click", (e) => {
    e.preventDefault();
    const targetId = link.getAttribute("href");
    const targetElement = document.querySelector(targetId);

    window.scrollTo({
      top: targetElement.offsetTop - 60,
      behavior: "smooth"
    });
  });
});
