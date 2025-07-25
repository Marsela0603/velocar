@use(App\Models\User)
<x-layout>
    <x-slot name="page_name">Jenis Kendaraan</x-slot>

    <x-slot name="navbar">
    <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
    <li class="breadcrumb-item active">Jenis Kendaraan</li>
    </x-slot>

    <x-slot name="page_content">
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tabel Jenis Kendaraan</h5>
              <p>Jelajahi berbagai pilihan kendaraan yang kami tawarkan. Mulai dari mobil untuk perjalanan singkat hingga bus yang nyaman untuk perjalanan grup besar.
              </p>
              @if (session('pesan'))
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('pesan') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
              @auth
              @if (Auth::user()->role == User::ROLE_ADMIN)
              <a href="{{ url('/dashboard/jenis_kendaraan/create') }}" class="btn btn-primary"><i class="bi bi-plus-circle"></i> Tambah</a>
              @endif
              @endauth
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th class="text-center">No</th>
                    <th class="text-center">Nama</th>
                    <th class="text-center">Deskripsi</th>
                    <th class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jenis_kendaraans as $jk)
                  <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $jk->nama }}</td>
                    <td class="text-center">{{ $jk->deskripsi }}</td>
                    <td class="text-center">
                    <div class="btn-group" role="group" aria-label="Actions">
                    <a href="{{ url('/dashboard/jenis_kendaraan/show', $jk->id) }}" class="btn btn-info"><i class="bi bi-info-circle"></i></a>
                    @auth
                    @if (Auth::user()->role == User::ROLE_ADMIN)
                    <a href="{{ url('/dashboard/jenis_kendaraan/edit', $jk->id) }}" class="btn btn-warning"><i class="bx bx-edit"></i></a>
                    <form action="{{ url('dashboard/jenis_kendaraan/destroy', $jk->id) }}" method="post">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data {{ $jk->nama }}?')">
                        <i class="ri-delete-bin-5-line"></i>
                      </button>
                    </form>
                    @endif
                    @endauth
</div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>
    </x-slot>
</x-layout>