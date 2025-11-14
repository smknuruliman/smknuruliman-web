<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>SPMB SMK NURUL IMAN</title>
  <!-- Tailwind CDN (untuk demo cepat) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="min-h-screen bg-slate-50 flex items-center justify-center p-6 bg-center bg-cover"
  style="background-attachment: fixed; background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ asset('images/pp1.webp') }}'); backdrop-filter: blur(10px);">
  @if(session('success'))
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        title: 'Berhasil!',
        text: "{{ session('success') }}",
        icon: 'success',
        confirmButtonColor: '#4F46E5', // warna indigo
        confirmButtonText: 'OK'
      });
    });
  </script>
@endif

@if ($errors->any())
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        title: 'Gagal!',
        text: 'Terjadi kesalahan, periksa kembali input Anda.',
        icon: 'error',
        confirmButtonColor: '#EF4444'
      });
    });
  </script>
@endif

  <main class="w-full max-w-2xl bg-white rounded-2xl shadow-lg p-6">
    <header class="mb-4">
      <h1 class="text-2xl font-semibold">Pendaftaran SPMB 2026 SMK NURUL IMAN</h1>
      <p class="text-sm text-slate-500">Isi 5 input per langkah. Total 15 input.</p>
    </header>

    <!-- Progress -->
    <div class="mb-6">
      <div class="flex items-center justify-between text-xs text-slate-600 mb-2">
        <span>Langkah <span id="currentStepTxt">1</span> dari 3</span>
        <span id="progressPercentTxt">0%</span>
      </div>
      <div class="w-full bg-slate-200 rounded-full h-2 overflow-hidden">
        <div id="progressBar" class="h-2 bg-indigo-500 w-0 transition-all"></div>
      </div>
    </div>

    <form action="{{ route('Spmb.store') }}" method="POST" enctype="multipart/form-data" novalidate>
      @csrf
      <!-- Step 1 -->
      <fieldset data-step="1" class="step">
        <legend class="sr-only">Langkah 1</legend>
        <div class="grid grid-cols-1 gap-4">
          <div>
            <label class="block text-sm font-medium mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
            <input name="full_name" required type="text" class="input w-full" placeholder="Nama lengkap sesuai KTP">
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>

          <div class="flex gap-4">
            <div class="flex-1">
              <label class="block text-sm font-medium mb-1">Tempat Lahir <span class="text-red-500">*</span></label>
              <input name="birth_place" required type="text" class="input w-full" placeholder="Contoh: Jakarta">
              <p class="error text-xs text-red-500 mt-1 hidden"></p>
            </div>
            <div class="w-40">
              <label class="block text-sm font-medium mb-1">Tanggal Lahir <span class="text-red-500">*</span></label>
              <input name="birth_date" required type="date" class="input w-full">
              <p class="error text-xs text-red-500 mt-1 hidden"></p>
            </div>
          </div>

          <div class="flex gap-4 items-end">
            <div class="w-1/2">
              <label class="block text-sm font-medium mb-1">Jenis Kelamin <span class="text-red-500">*</span></label>
              <select name="gender" required class="input w-full">
                <option value="">Pilih...</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
                <option value="Lainnya">Lainnya</option>
              </select>
              <p class="error text-xs text-red-500 mt-1 hidden"></p>
            </div>

            <div class="flex-1">
              <label class="block text-sm font-medium mb-1">Email <span class="text-red-500">*</span></label>
              <input name="email" required type="email" class="input w-full" placeholder="contoh@domain.com">
              <p class="error text-xs text-red-500 mt-1 hidden"></p>
            </div>
          </div>
        </div>
      </fieldset>

      <!-- Step 2 -->
      <fieldset data-step="2" class="step hidden">
        <legend class="sr-only">Langkah 2</legend>
        <div class="grid grid-cols-1 gap-4">
          <div>
            <label class="block text-sm font-medium mb-1">No. HP / WhatsApp <span class="text-red-500">*</span></label>
            <input name="phone" required type="tel" class="input w-full" placeholder="0812xxxx">
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Alamat Lengkap <span class="text-red-500">*</span></label>
            <input name="address" required type="text" class="input w-full" placeholder="Jalan / RT-RW / Kota">
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>

          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-medium mb-1">Asal Sekolah <span class="text-red-500">*</span></label>
              <input name="prev_school" required type="text" class="input w-full" placeholder="Nama sekolah">
              <p class="error text-xs text-red-500 mt-1 hidden"></p>
            </div>

            <div>
              <label class="block text-sm font-medium mb-1">NISN <span class="text-red-500">*</span></label>
              <input name="nisn" required type="text" class="input w-full" placeholder="Contoh: 0012345678">
              <p class="error text-xs text-red-500 mt-1 hidden"></p>
            </div>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Tahun Lulus <span class="text-red-500">*</span></label>
            <input name="graduation_year" required type="number" min="1900" max="2099" class="input w-full" placeholder="2025">
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>
        </div>
      </fieldset>

      <!-- Step 3 -->
      <fieldset data-step="3" class="step hidden">
        <legend class="sr-only">Langkah 3</legend>
        <div class="grid grid-cols-1 gap-4">
          <div>
            <label class="block text-sm font-medium mb-1">Pilihan Program Studi <span class="text-red-500">*</span></label>
            <select name="major" required class="input w-full">
              <option value="">Pilih program studi...</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Manajemen">Manajemen</option>
              <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
              <option value="Akuntansi">Akuntansi</option>
            </select>
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Nilai Rata-rata Raport / UTBK</label>
            <input name="avg_grade" type="text" class="input w-full" placeholder="Contoh: 85.5">
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Prestasi / Penghargaan (jika ada)</label>
            <textarea name="achievements" rows="3" class="input w-full" placeholder="Tuliskan prestasi singkat"></textarea>
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Nama Orang Tua / Wali <span class="text-red-500">*</span></label>
            <input name="parent_name" required type="text" class="input w-full" placeholder="Nama orang tua/wali">
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>

          <div>
            <label class="block text-sm font-medium mb-1">Unggah Foto (JPG/PNG) <span class="text-slate-400 text-xs">(opsional)</span></label>
            <input name="photo" type="file" accept="image/*" class="w-full">
            <p id="photoPreview" class="text-xs text-slate-500 mt-2 hidden"></p>
            <p class="error text-xs text-red-500 mt-1 hidden"></p>
          </div>
        </div>
      </fieldset>

      <!-- Navigation -->
      <div class="mt-6 flex items-center justify-between">
        <button type="button" id="prevBtn" class="btn hidden bg-slate-200 text-slate-700 px-4 py-2 rounded-md">Kembali</button>
        <div class="flex items-center gap-3">
          <button type="button" id="nextBtn" class="btn bg-indigo-600 text-white px-4 py-2 rounded-md">Selanjutnya</button>
          <button type="submit" id="submitBtn" class="btn bg-green-600 text-white px-4 py-2 rounded-md hidden">Kirim</button>
        </div>
      </div>
    </form>

    <div id="successMsg" class="mt-6 hidden rounded-md bg-green-50 border border-green-200 p-4 text-green-800">
      Pendaftaran berhasil disimpan (demo). Cek console untuk data yang dikirim.
    </div>
  </main>

  <script>
     const form = document.getElementById('multistepForm');
    const steps = Array.from(document.querySelectorAll('.step'));
    const totalSteps = steps.length;
    let current = 1;

    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const submitBtn = document.getElementById('submitBtn');
    const progressBar = document.getElementById('progressBar');
    const progressPercentTxt = document.getElementById('progressPercentTxt');
    const currentStepTxt = document.getElementById('currentStepTxt');

    // Update UI for step
    function showStep(n) {
      steps.forEach(s => s.classList.add('hidden'));
      const target = document.querySelector(`fieldset[data-step="${n}"]`);
      if (target) target.classList.remove('hidden');

      prevBtn.classList.toggle('hidden', n === 1);
      nextBtn.classList.toggle('hidden', n === totalSteps);
      submitBtn.classList.toggle('hidden', n !== totalSteps);

      // progress
      const pct = Math.round(((n-1) / (totalSteps)) * 100);
      progressBar.style.width = pct + '%';
      progressPercentTxt.textContent = pct + '%';
      currentStepTxt.textContent = n;
    }

    // Validate current step: all required inputs must be filled and email pattern
    function validateStep(n) {
      const fieldset = document.querySelector(`fieldset[data-step="${n}"]`);
      const inputs = Array.from(fieldset.querySelectorAll('input, select, textarea'));
      let ok = true;

      inputs.forEach(inp => {
        const errEl = inp.parentElement.querySelector('.error') || inp.parentElement.parentElement.querySelector('.error');
        if (errEl) errEl.classList.add('hidden');

        // required validation
        if (inp.hasAttribute('required')) {
          if (!inp.value || (inp.type === 'file' && inp.files.length === 0)) {
            ok = false;
            if (errEl) {
              errEl.textContent = 'Field ini wajib diisi.';
              errEl.classList.remove('hidden');
            }
            return;
          }
        }

        // email validation
        if (inp.type === 'email' && inp.value) {
          const re = /^[^@\s]+@[^@\s]+\.[^@\s]+$/;
          if (!re.test(inp.value)) {
            ok = false;
            if (errEl) {
              errEl.textContent = 'Masukkan alamat email yang valid.';
              errEl.classList.remove('hidden');
            }
          }
        }

        // file validation (if any)
        if (inp.type === 'file' && inp.files.length > 0) {
          const f = inp.files[0];
          const validTypes = ['image/jpeg','image/png','image/jpg'];
          if (!validTypes.includes(f.type)) {
            ok = false;
            if (errEl) {
              errEl.textContent = 'Gunakan file JPG/PNG.';
              errEl.classList.remove('hidden');
            }
          }
        }
      });

      return ok;
    }

    // Next / Prev handlers
    nextBtn.addEventListener('click', () => {
      if (!validateStep(current)) return;
      if (current < totalSteps) {
        current++;
        showStep(current);
      }
    });

    prevBtn.addEventListener('click', () => {
      if (current > 1) {
        current--;
        showStep(current);
      }
    });

    // Photo preview
    const photoInput = form.querySelector('input[name="photo"]');
    const photoPreview = document.getElementById('photoPreview');
    if (photoInput) {
      photoInput.addEventListener('change', () => {
        const f = photoInput.files[0];
        if (!f) {
          photoPreview.classList.add('hidden');
          photoPreview.textContent = '';
          return;
        }
        const reader = new FileReader();
        reader.onload = (e) => {
          photoPreview.classList.remove('hidden');
          photoPreview.textContent = `Preview: ${f.name} — (lihat di console sebagai data URL)`;
          // For demo, we won't inject the image into DOM to keep layout simple.
          console.log('Photo data URL (truncated):', e.target.result.slice(0,80) + '...');
        };
        reader.readAsDataURL(f);
      });
    }

    // On submit
    // form.addEventListener('submit', (ev) => {
    //   ev.preventDefault();

    //   // Validate last step
    //   if (!validateStep(current)) return;

    //   // Gather data
    //   const fd = new FormData(form);
    //   const payload = {};
    //   for (const [k,v] of fd.entries()) {
    //     // For file, show name only
    //     if (v instanceof File) {
    //       payload[k] = v.name || '';
    //     } else {
    //       payload[k] = v;
    //     }
    //   }

    //   console.log('=== FORM DATA ===');
    //   console.table(payload);

    //   // Show success message (demo)
    //   document.getElementById('successMsg').classList.remove('hidden');
    //   // Update progress to 100%
    //   progressBar.style.width = '100%';
    //   progressPercentTxt.textContent = '100%';
    //   // Optionally disable buttons
    //   nextBtn.disabled = true;
    //   prevBtn.disabled = true;
    //   submitBtn.disabled = true;
    // });

    // initial render
    showStep(current);

    // Optional: allow Enter to act like Next on non-submit fields
    form.addEventListener('keydown', (e) => {
      if (e.key === 'Enter') {
        const active = document.activeElement;
        // prevent immediate form submission when in middle steps
        if (current < totalSteps && (active && active.tagName !== 'TEXTAREA')) {
          e.preventDefault();
          nextBtn.click();
        }
      }
    });
  </script>

  <style>
    /* small utility to make inputs consistent */
    .input {
      @apply border border-slate-200 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-300;
    }
    .btn { @apply hover:opacity-95 transition; }
  </style>
</body>
</html>
