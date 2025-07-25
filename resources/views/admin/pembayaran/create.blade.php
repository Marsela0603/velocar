<x-layout>
    <x-slot name="page_name">Pembayaran</x-slot>

    <x-slot name="navbar">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/dashboard/pembayaran">Pembayaran</a></li>
        <li class="breadcrumb-item active">Form Pembayaran</li>
    </x-slot>

    <x-slot name="page_content">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Form Pembayaran</h5>

                <!-- General Form Elements -->
                <form action="{{ url('/dashboard/pembayaran/store') }}" method="post">
                    @csrf
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="nama" class="col-sm-2 col-form-label">Jumlah Bayar</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="jumlah_bayar" name="jumlah_bayar" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="peminjaman_id" class="col-sm-2 col-form-label">Nama Peminjam</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="peminjaman_id" name="peminjaman_id" required>
                                <option selected disabled>Pilih nama peminjam</option>
                                @foreach($peminjamans as $peminjaman)
                                    <option value="{{ $peminjaman->id }}">{{ $peminjaman->nama_peminjam }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </div>
                </form><!-- End General Form Elements -->

            </div>
        </div>
    </x-slot>
</x-layout>
