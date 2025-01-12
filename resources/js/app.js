import './bootstrap';

// Data keahlian untuk efek ketikan
const skills = ["Web Developer", "Content Creator"];
const typingEffect = document.getElementById("typing-effect");

let skillIndex = 0; // Indeks keahlian
let charIndex = 0; // Indeks karakter saat ini
let isDeleting = false; // Status penghapusan teks
let typingSpeed = 100; // Kecepatan mengetik (ms)
let deletingSpeed = 50; // Kecepatan menghapus (ms)

function typeSkill() {
    const currentSkill = skills[skillIndex];

    if (!isDeleting) {
        // Ketik teks karakter demi karakter
        typingEffect.textContent = currentSkill.substring(0, charIndex + 1);
        charIndex++;

        if (charIndex === currentSkill.length) {
            // Tunggu sebelum mulai menghapus
            isDeleting = true;
            setTimeout(typeSkill, 1000); // Durasi jeda sebelum menghapus
            return;
        }
    } else {
        // Hapus teks karakter demi karakter
        typingEffect.textContent = currentSkill.substring(0, charIndex - 1);
        charIndex--;

        if (charIndex === 0) {
            // Beralih ke keahlian berikutnya
            isDeleting = false;
            skillIndex = (skillIndex + 1) % skills.length; // Loop kembali ke skill pertama
        }
    }

    // Atur kecepatan mengetik dan menghapus
    const delay = isDeleting ? deletingSpeed : typingSpeed;
    setTimeout(typeSkill, delay);
}

// Memulai efek ketikan
typeSkill();

// Fungsi Navbar Transparan
window.addEventListener("scroll", function () {
    const navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
      navbar.classList.add("backdrop-blur-md", "bg-transparent", "transition-all", "duration-300");
    } else {
      navbar.classList.remove("backdrop-blur-md", "bg-transparent");
      navbar.classList.add("bg-main");
    }
  });

  document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.querySelector('[data-collapse-toggle="navbar-sticky"]');
    const navbar = document.getElementById('navbar-sticky');

    toggleButton.addEventListener('click', () => {
        if (navbar.classList.contains('hidden')) {
            // Tampilkan menu dengan animasi
            navbar.classList.remove('hidden'); // Hapus kelas `hidden` agar elemen muncul
            setTimeout(() => {
                navbar.classList.add('translate-y-0', 'opacity-100'); // Mulai animasi
                navbar.classList.remove('-translate-y-5', 'opacity-0');
            }, 10); // Beri sedikit delay agar transisi aktif
        } else {
            // Sembunyikan menu dengan animasi
            navbar.classList.add('-translate-y-5', 'opacity-0'); // Mulai animasi keluar
            navbar.classList.remove('translate-y-0', 'opacity-100');

            // Tambahkan kelas `hidden` setelah animasi selesai
            setTimeout(() => {
                navbar.classList.add('hidden'); // Sembunyikan setelah animasi selesai
            }, 500); // Durasi sesuai `duration-500` di Tailwind
        }
    });
});
document.getElementById('profile-menu-toggle').addEventListener('click', function () {
    const menu = document.getElementById('profile-menu');
    menu.classList.toggle('hidden');
});