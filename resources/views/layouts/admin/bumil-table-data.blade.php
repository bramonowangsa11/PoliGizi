@extends('layouts.bootstrap')
@section('content')
{{-- start --}}
<div class="row w-full vh-120">
  {{-- sidebar --}}
  <div class="col-md-3 vh-120">
      <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-secondary" style="width: 280px; height:128vh">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Hi, Admin</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="/admin" class="nav-link text-white" aria-current="page">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
              Imunisasi
            </a>
          </li>
          <li>
            <a href="/ibu-hamil" class="nav-link text-white active">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Ibu Hamil
            </a>
          </li>
          <li>
            <a href="/input-table" class="nav-link text-white dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
              input Data
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/admin">Imunisasi</a>
                <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Submenu 3</a>
            </div>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
              Products
            </a>
          </li>
          <li>
            <a href="#" class="nav-link text-white">
              <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
              Customers
            </a>
          </li>
        </ul>
        <hr>
        <div class="dropdown">
          <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/logout">Sign out</a></li>
          </ul>
        </div>
      </div>
  </div>
  {{-- side bar end --}}
  {{-- content --}}
  <div class="col-md-9 vh-100">
    <div class="row col-md-12">
      <div class=" col-md-7 mt-2">
          <h1>TABEL IMUNISASI</h1>
          @if(Session::has('success'))
                      <div class="alert alert-success">
                          {{ Session::get('success') }}
                      </div>
                  @endif
      </div>
      <div class=" col-md-4">
        <form class="form-inline my-2 my-lg-0">
          <div class="row mt-2">
            <div class="col-md-9">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-md-3">
              <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
            </div>
          </div>
          </form>
      </div>
      <div class="col-md-2">
        <a href="/input-bumil">
        <button type="button" class="btn btn-success btn-sm">tambah</button>
        </a>
      </div>
      </div>
      <div class="container vh-100">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal Pemeriksaan</th>
                <th>Nama Ibu</th>
                <th>Nama Suami</th>
                <th>NIK Ibu</th>
                <th>NIK Suami</th>
                <th>NO KK</th>
                
                <th>Alamat</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- @foreach ($imunisasis as $key=> $imunisasi)
                <tr>
                  <td>{{$key+1}}</td>
                  <td>{{$imunisasi->tanggal}}</td>
                  <td>{{$imunisasi->nama_anak}}</td>
                  <td>{{$imunisasi->nik_anak}}</td>
                  <td>{{$imunisasi->nama_orangtua}}</td>
                  <td>{{$imunisasi->tgl_lahir}}</td>
                  <td>{{$imunisasi->alamat}}</td>
                  <td>
                    <a href="{{ route('imunisasi.show', ['id' => $imunisasi->id]) }}">
                      <button type="button" class="btn btn-info btn-sm" >Detail</button>
                    </a>
                  </td>
                </tr>
              @endforeach --}}
              <tr>
                <td>1</td>
                <td>12/12/2024</td>
                <td>Sutinah</td>
                <td>Suyanto</td>
                <td>34031011080001</td>
                <td>34031011080002</td>
                <td>34031011080003</td>

                <td>Gunungkidul</td>
             
                <td>
                    <a href="/detail-bumil">
                      <button type="button" class="btn btn-info btn-sm" >Detail</button>
                    </a>
                  </td>
              </tr>
            </tbody>
          </table>
          {{-- {{ $imunisasis->links() }} --}}
      </div>
  </div>
{{-- end --}}
</div>
