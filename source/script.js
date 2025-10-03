// Form Hubungi Kami
const hubungiForm = document.querySelector('.hubungi');

if (hubungiForm) {
    hubungiForm.addEventListener('submit', function(e) {
        e.preventDefault(); 

        const pesan = document.querySelector('.hubungi input[type="text"]').value.trim();

        if (pesan === '') {
            alert('Pesan tidak boleh kosong!');
            return;
        }

        alert('Pesan terkirim! Kami akan segera merespons.');
        hubungiForm.reset(); 
    });
}
