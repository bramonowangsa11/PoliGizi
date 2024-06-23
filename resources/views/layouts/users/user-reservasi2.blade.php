@extends('layouts.bootstrap')
@section('content')
    {{-- start --}}
    <div class="container min-vh-100 p-0 m-0 min-vw-100">
        <nav class="navbar navbar-expand-lg navbar-dark p-2 d-md-none m-0 min-vw-100 bg-dark" style="width: 47vh">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler mr-2" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/admin" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Imunisasi
                        </a>
                    </li>
                    <li>
                        <a href="/ibu-hamil" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Ibu Hamil
                        </a>
                    </li>
                    <li>
                        <a href="/data-kb" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            KB
                        </a>
                    </li>
                    <li>
                        <a href="/input-table" class="nav-link text-white dropdown-toggle active" id="navbarDropdown"
                            data-bs-toggle="dropdown">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#table"></use>
                            </svg>
                            input Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/input-table">Imunisasi</a>
                            <a class="dropdown-item" href="/input-bumil">Ibu Hamil</a>
                            <a class="dropdown-item" href="/input-kb">KB</a>
                        </div>
                    </li>
                    <li>
                        <a href="/daftar-reservasi" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Daftar Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/daftar-pasien" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#grid"></use>
                            </svg>
                            Tambah Pasien
                        </a>
                    </li>
                </ul>
            </div>

        </nav>
        <div class="d-flex">
            <div class="sidebar p-3 flex-shrink-0 d-none d-md-block bg-dark m-0 vh-100">
                <h4 class="text-white">Dashboard</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a href="/pasien" class="nav-link text-white" aria-current="page">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#home"></use>
                            </svg>
                            Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/lihat-reservasi-user" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Cek Reservasi
                        </a>
                    </li>
                    <li>
                        <a href="/logout" class="nav-link text-white">
                            <svg class="bi pe-none me-2" width="16" height="16">
                                <use xlink:href="#speedometer2"></use>
                            </svg>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
            {{-- isi konten nya disini --}}
            <div class="content flex-grow-1 p-2" style="width: 47vh">
                {{-- bagian tabel --}}
                <div class="container">
                    <h1>RESERVASI</h1>

                    @if (Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    @if (session('errors'))
                        <div class="alert alert-danger">
                            {{ session('errors') }}
                        </div>
                    @endif
                    <div class="row d-flex justify-content-center align-items-center">


                        <div class="col-md-4 align-items-center ">
                            <form action="reservasi" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="tglReservasi" class="form-label">Tanggal Reservasi</label>
                                    <input type="date" class="form-control" id="tglReservasi"
                                        placeholder="dd/mm/yyyy" name="tgl_reservasi" value="{{ $tgl }}"
                                        readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="Sesi" class="form-label">Sesi Ke-</label>
                                    <select class="form-select" id="Sesi" aria-label="Default select example"
                                        name="sesi">
                                        @foreach ($availableSessions as $session)
                                            <option name='sesi' value="{{ $session }}">Sesi {{ $session }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="layanan" class="form-label">Jenis Layanan</label>
                                    <select class="form-select" id="layanan" aria-label="Default select example"
                                        name="layanan">
                                        <option name="layanan" value="Imunisasi">Imunisasi</option>
                                        <option name="layanan" value="Bumil">Ibu Hamil</option>
                                        <option name="layanan" value="KB">KB</option>
                                    </select>
                                </div>


                                <div class="mb-3">
                                    <label for="keterangan" class="form-label">Keterangan</label>
                                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                                </div>
                                <button class="btn btn-success" type="submit">Reservasi</button>
                            </form>
                        </div>
                        <div class="col-md-3 small ms-lg-5 mt-lg-5">
                            Keterangan :
                            <p>Sesi 1 | Pukul 06.00-06.30</p>
                            <p>Sesi 2 | Pukul 06.30-07.00</p>
                            <p>Sesi 3 | Pukul 07.00-07.30</p>
                            <p>Sesi 4 | Pukul 07.30-08.00</p>
                            <p>Sesi 5 | Pukul 08.00-08.30</p>
                            <p>Sesi 6 | Pukul 08.30-09.00</p>
                            <p>Sesi 7 | Pukul 16.00-16.30</p>
                            <p>Sesi 8 | Pukul 16.30-17.00</p>
                            <p>Sesi 9 | Pukul 17.00-17.30</p>
                            <p>Sesi 10 | Pukul 17.30-18.00</p>
                            <p>Sesi 11 | Pukul 18.00-18.30</p>
                            <p>Sesi 12 | Pukul 18.30-19.00</p>
                            <p>Sesi 13 | Pukul 19.00-19.30</p>
                            <p>Sesi 14 | Pukul 19.30-20.00</p>
                        </div>

                    </div>

                </div>
                {{-- end konten --}}
            </div>
        </div>
        {{-- end --}}
