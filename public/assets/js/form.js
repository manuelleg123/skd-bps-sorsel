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

    // const progress = ((index + 1) / steps.length) * 100;
    // document.getElementById('progressBar').style.width = progress + '%';
    document.getElementById('blok_header').textContent = stepTitles[index];
    document.getElementById('form_description').innerHTML = stepDescriptions[index];
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // bikin animasi halus
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
