 // section visi misi
    document.addEventListener("DOMContentLoaded", () => {
      const toggleBtn = document.getElementById("toggleMisi");
      const extraMisi = document.querySelectorAll(".extra-misi");
      let isShown = false;

      toggleBtn.addEventListener("click", () => {
        extraMisi.forEach(misi => {
          misi.classList.toggle("hidden");
        });
        isShown = !isShown;
        toggleBtn.textContent = isShown ? "Sembunyikan" : "Lihat Semua";
      });
    });
    // section gruu
   function slideGuru(direction) {
    const container = document.getElementById('guruContainer');
    const scrollAmount = 300; // jarak geser per klik
    container.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
  }