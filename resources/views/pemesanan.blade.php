@extends('master')
@section('konten')
<div class="container">
    <h2>Form Pemesanan Mobil</h2>

    <form>

        <div class="form-group">
            <label for="tanggal_mulai">Tanggal Mulai:</label>
            <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai">
        </div>

        <div class="form-group">
            <label for="tanggal_selesai">Tanggal Selesai:</label>
            <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai">
        </div>

        <div class="form-group">
            <label for="durasi">Durasi (hari):</label>
            <input type="number" class="form-control" id="durasi" name="durasi" placeholder="Durasi sewa dalam hari" readonly>
        </div>

        <div class="form-group">
            <label for="total_harga">Total Harga:</label>
            <input type="text" class="form-control" id="total_harga" name="total_harga" placeholder="Total harga sewa" readonly>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Pesan Sekarang</button>
    </form>
</div>

<script>
    // Script untuk hitung durasi dan total harga (misal harga 500000/hari)
    const tanggalMulai = document.getElementById('tanggal_mulai');
    const tanggalSelesai = document.getElementById('tanggal_selesai');
    const durasiInput = document.getElementById('durasi');
    const totalHargaInput = document.getElementById('total_harga');
    const hargaPerHari = 500000; // contoh harga

    function hitungDurasi() {
        const start = new Date(tanggalMulai.value);
        const end = new Date(tanggalSelesai.value);
        if (start && end && end >= start) {
            const diffTime = end - start;
            const diffDays = diffTime / (1000 * 60 * 60 * 24) + 1;
            durasiInput.value = diffDays;
            totalHargaInput.value = (diffDays * hargaPerHari).toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
        } else {
            durasiInput.value = '';
            totalHargaInput.value = '';
        }
    }

    tanggalMulai.addEventListener('change', hitungDurasi);
    tanggalSelesai.addEventListener('change', hitungDurasi);
</script>

@endsection