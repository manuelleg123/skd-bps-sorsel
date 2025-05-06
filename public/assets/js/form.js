// Inisialisasi semua tooltip
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));

let currentStep = 0;
const steps = document.querySelectorAll('.step');

const stepTitles = [
    'BLOK I. Keterangan Responden',
    'Blok II. Kepuasan terhadap Layanan Data dan Informasi Statistik BPS',
    'BLOK III. Catatan'
];

const stepDescriptions = [
    '',
    `
    <div class="alert-info alert" role="alert">
        <p>
            Menurut pendapat Saudara, bagaimana tingkat kepentingan dan tingkat kepuasan Saudara pada rincian pelayanan berikut?
        </p>
        <p>
            <strong>Tingkat kepentingan</strong> adalah gambaran pelayanan yang seharusnya diberikan BPS sesuai dengan keinginan/harapan konsumen. <br>
            <strong>Tingkat kepuasan</strong> adalah gambaran pelayanan yang sudah diberikan BPS kepada konsumen. <br>
            <strong>Skala 1-10</strong> adalah skala yang digunakan untuk mengukur tingkat kepuasan dan kepentingan (tidak puas/penting - sangat puas/penting). <br>
        </p>
    </div>
    `,
    ''
];

function showStep(index) {
    steps.forEach((step, i) => {
        step.style.display = i === index ? 'block' : 'none';
    });
    currentStep = index;

    document.getElementById('blok_header').textContent = stepTitles[index];
    document.getElementById('form_description').innerHTML = stepDescriptions[index];
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

function nextStep() {
    const inputs = steps[currentStep].querySelectorAll('input');
    let valid = true;

    inputs.forEach(input => {
        if (!input.checkValidity()) {
            input.classList.add('invalid');
            valid = false;
        } else {
            input.classList.remove('invalid');
        }
    });

    if (!valid) {
        Swal.fire({
            icon: 'warning',
            title: 'Input tidak lengkap',
            text: 'Silakan lengkapi semua field terlebih dahulu.'
        });
        return;
    }

    if (currentStep < steps.length - 1) {
        showStep(currentStep + 1);
    }
}

function prevStep() {
    if (currentStep > 0) {
        showStep(currentStep - 1);
    }
}

function submitForm() {
    Swal.fire({
        title: 'Apakah Anda yakin?',
        text: "Pastikan semua data sudah benar sebelum dikirim.",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: "#0d6efd",
        cancelButtonColor: '#dc3545',
        confirmButtonText: 'Ya, kirim sekarang!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            const form = document.getElementById('multiStepForm');
            const formData = new FormData(form);

            fetch('/form/submit', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(res => {
                    if (res.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil!',
                            text: 'Data berhasil dikirim.'
                        });
                        form.reset();
                        showStep(0);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Mengirim',
                            html: Object.values(res.errors).join('<br>')
                        });
                    }
                })
                .catch(err => {
                    Swal.fire({
                        icon: 'error',
                        title: 'Kesalahan Server',
                        text: 'Terjadi kesalahan saat mengirim data.'
                    });
                });
        }
    });
}


document.addEventListener('DOMContentLoaded', () => {
    showStep(0);
});

const inputs_blok_II = document.querySelectorAll('.number');

inputs_blok_II.forEach((input) => {
    input.addEventListener('input', () => {
        const nilai = Number(input.value);
        const errorMessage = input.nextElementSibling;

        errorMessage.style.display = 'none'; // Sembunyikan pesan kesalahan
        if (nilai < 1 || nilai > 10) {
            input.classList.add('is-invalid');
            input.classList.remove('is-valid');
            errorMessage.style.display = 'block'; // Tampilkan pesan kesalahan
        } else {
            input.classList.remove('is-invalid');
            input.classList.add('is-valid');
            errorMessage.style.display = 'none'; // Sembunyikan pesan kesalahan
        }
    });
});

const form_control = document.querySelectorAll('.form-control');
form_control.forEach((input) => {
    input.addEventListener('input', () => {
        const value = input.value.trim();
        if (value.length > 0) {
            input.classList.add('is-valid');
            input.classList.remove('is-invalid');
        } else {
            input.classList.remove('is-valid');
            input.classList.add('is-invalid');
        }
    });
});

const form_select = document.querySelectorAll('.form-select');
form_select.forEach((select) => {
    select.addEventListener('change', () => {
        const value = select.value.trim();
        if (value.length > 0) {
            select.classList.add('is-valid');
            select.classList.remove('is-invalid');
        } else {
            select.classList.remove('is-valid');
            select.classList.add('is-invalid');
        }
    });
});

const pekerjaan_utama_select = document.getElementById('pekerjaan_utama');
const item_pekerjaan_utama_lainnya = document.getElementById('item_pekerjaan_utama_lainnya');
const input_pekerjaan_utama_lainnya = document.getElementById('pekerjaan_utama_lainnya');
// const invalid_feedback = document.getElementById('invalid_feedback_pekerjaan_utama_lainnya');

pekerjaan_utama_select.addEventListener('change', function () {
    if (pekerjaan_utama_select.value === 'Lainnya') {
        item_pekerjaan_utama_lainnya.style.display = 'block';
        input_pekerjaan_utama_lainnya.setAttribute('required', 'required');
    } else {
        item_pekerjaan_utama_lainnya.style.display = 'none';
        input_pekerjaan_utama_lainnya.removeAttribute('required');
        input_pekerjaan_utama_lainnya.value = ''; // Reset value
    }
});

input_pekerjaan_utama_lainnya.addEventListener('input', function () {
    const value = input_pekerjaan_utama_lainnya.value.trim();
    if (value.length > 0) {
        input_pekerjaan_utama_lainnya.classList.add('is-valid');
        input_pekerjaan_utama_lainnya.classList.remove('is-invalid');
        // invalid_feedback.style.display = 'none'; // Sembunyikan pesan kesalahan
    } else {
        input_pekerjaan_utama_lainnya.classList.remove('is-valid');
        input_pekerjaan_utama_lainnya.classList.add('is-invalid');
        // invalid_feedback.style.display = 'block'; // Tampilkan pesan kesalahan
    }
});

function jenisLayananToggleValidation() {
    const checkboxes = document.querySelectorAll('#jenis_layanan .custom-control-input');
    const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
    const invalidFeedback = document.getElementById('invalid_feedback_jenis_layanan');


    // Iterasi dan beri class is-valid atau is-invalid pada semua checkbox
    checkboxes.forEach(checkbox => {
        if (anyChecked) {
            checkbox.classList.add('is-valid');
            checkbox.classList.remove('is-invalid');
            invalidFeedback.style.display = 'none'; // Sembunyikan pesan kesalahan

        } else {
            checkbox.classList.add('is-invalid');
            checkbox.classList.remove('is-valid');
            invalidFeedback.style.display = 'block'; // Tampilkan pesan kesalahan
        }
    });
}

function fasilitasYangDigunakanToggleValidation() {
    const checkboxes = document.querySelectorAll('#fasilitas_yang_digunakan .custom-control-input');
    const anyChecked = Array.from(checkboxes).some(checkbox => checkbox.checked);
    const invalidFeedback = document.getElementById('invalid_feedback_fasilitas_yang_digunakan');

    // Iterasi dan beri class is-valid atau is-invalid pada semua checkbox
    checkboxes.forEach(checkbox => {
        if (anyChecked) {
            checkbox.classList.add('is-valid');
            checkbox.classList.remove('is-invalid');
            invalidFeedback.style.display = 'none'; // Sembunyikan pesan kesalahan

        } else {
            checkbox.classList.add('is-invalid');
            checkbox.classList.remove('is-valid');
            invalidFeedback.style.display = 'block'; // Tampilkan pesan kesalahan
        }
    });
}

function pengaduanToggleRadioValidation() {
    // Ambil semua radio button dalam grup #pengaduan
    const radios = document.querySelectorAll('#pengaduan .form-check-input');

    // Cek apakah ada radio button yang dipilih (checked)
    const anyChecked = Array.from(radios).some(radio => radio.checked);

    // Iterasi dan beri class is-valid atau is-invalid pada semua radio button
    radios.forEach(radio => {
        if (anyChecked) {
            radio.classList.add('is-valid');
            radio.classList.remove('is-invalid');
        } else {
            radio.classList.add('is-invalid');
            radio.classList.remove('is-valid');
        }
    });
}