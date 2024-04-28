function hitungTotalHarga() {
    const hargaBarangA = parseInt(document.getElementById('hargaBarangA').textContent);
    const jumlahBarangA = parseInt(document.getElementById('jumlahBarangA').textContent);
    const totalHargaBarangA = hargaBarangA * jumlahBarangA;

    const hargaBarangB = parseInt(document.getElementById('hargaBarangB').textContent);
    const jumlahBarangB = parseInt(document.getElementById('jumlahBarangB').textContent);
    const totalHargaBarangB = hargaBarangB * jumlahBarangB;

    const hargaBarangC = parseInt(document.getElementById('hargaBarangC').textContent);
    const jumlahBarangC = parseInt(document.getElementById('jumlahBarangC').textContent);
    const totalHargaBarangC = hargaBarangC * jumlahBarangC;

    const totalHarga = totalHargaBarangA + totalHargaBarangB + totalHargaBarangC;

    document.getElementById('totalHargaBarangA').textContent = totalHargaBarangA;
    document.getElementById('totalHargaBarangB').textContent = totalHargaBarangB;
    document.getElementById('totalHargaBarangC').textContent = totalHargaBarangC;
    document.getElementById('totalHarga').textContent = totalHarga;
}
