@extends('home')
@section('student')

<h1>Sekolah</h1>

<a href="{{ route('sekolahs.tambah') }}" class="btn btn-primary">tambah data</a>

<div class="card mt-3">
    <div class="table-responsive">
      <table class="table table-vcenter card-table">
        <thead>
          <tr>
            <th>Nama Sekolah</th>
            <th>Alamat</th>
            <th>Jurusan</th>
            <th>Jumlah Guru</th>
            <th class="w-1"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($sekolahs as $sekolah)
            
            <td>{{ $sekolah -> nama_sekolah }}</td>
            <td>{{ $sekolah -> alamat }}</td>
            <td>{{ $sekolah -> jurusan }}</td>
            <td>{{ $sekolah -> jumlah_guru }}</td>
            <td>
                <a href="{{ route('sekolahs.edit', $sekolah->id) }}">Edit</a>
                <form action="{{ route('sekolahs.destroy', $sekolah->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <!-- Footer -->
  <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
			  <li class="list-inline-item">
                    <a href="https://github.com/SahrulHakim" target="_blank" class="link-secondary" rel="noopener">
                      <!-- Download SVG icon from http://tabler-icons.io/i/heart -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Sahrul Hakim
                    </a>
                  </li>
              </div>
			  <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright Sahrul Lukman Hakim 2023	
                  </li>
                </ul>
              </div>
              
            </div>
          </div>
        </footer>

@endsection