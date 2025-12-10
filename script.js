function kirimPesanWhatsApp() {
    // Ambil nilai dari input
    const nama = document.getElementById('whatsapp-nama').value;
    const tel = document.getElementById('whatsapp-tel').value;
    const pesan = document.getElementById('whatsapp-pesan').value;

    // Nomor WhatsApp tujuan (ganti dengan nomor Anda)
    // Gunakan format internasional, misalnya: +6285643764042
    const nomorTujuan = '+6287739165643'; 

    // Buat pesan yang akan dikirim
    let pesanLengkap = `Halo, saya ${encodeURIComponent(nama)}.`;
    if (tel) {
        pesanLengkap += `%0A%0ANomor Telepon Saya: ${encodeURIComponent(tel)}.`;
    }
    pesanLengkap += `%0A%0APesan:%0A${encodeURIComponent(pesan)}`;

    // Buat URL WhatsApp
    // Perbaikan: Hapus spasi dan pastikan format nomor benar di dalam string literal
    const url = `https://wa.me/${+6287739165643}?text=${pesanLengkap}`;

    // Buka URL di tab baru
    window.open(url, '_blank');
}