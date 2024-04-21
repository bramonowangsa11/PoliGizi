@extends('layouts.bootstrap')
@section('content')
{{-- start --}}
<div class="row w-full vh-100">
{{-- sidebar --}}
<div class="col-md-3">
    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark vh-100" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
      <span class="fs-4">Hi, Admin</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/detail-table" class="nav-link active" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
          Home
        </a>
      </li>
      <li>
        <a href="#" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="/input-table" class="nav-link text-white">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
          Input Data
        </a>
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
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>
</div>
{{-- end side bar --}}
{{-- content --}}
<div class="col-md-9">
    <div>
        <h1>Detail Tabel</h1>
        @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
        @if($errors->any())
                <div class="alert alert-danger">
                  <ul>  
                    @foreach($errors->all() as $error)
                      <li>
                        {{ $error }}
                      </li>
                    @endforeach
                  </ul>
                </div>
        @endif
    </div>
    <form action="{{ route('imunisasi.update', $imunisasi->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="container">
      <div class="row">
        {{-- kiri --}}
        <div class="col-md-4">
          
          <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputTanggal" class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="inputTanggal" value="{{$imunisasi->tanggal}}" aria-describedby="" name="tanggal">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputNamaAnak" class="form-label">Nama Anak</label>
                        <input type="text" class="form-control" id="inputNamaAnak" value="{{$imunisasi->nama_anak}}" aria-describedby="" name="nama_anak">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputNIK" class="form-label">NIK</label>
                        <input type="text" class="form-control" id="inputNIK" value="{{$imunisasi->nik_anak}}" aria-describedby="" name="nik_anak">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
                        <input type="text" class="form-control" id="inputNamaOrtu" value="{{$imunisasi->nama_orangtua}}" aria-describedby="" name="nama_orangtua">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputTanggalLhr" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="inputTanggalLhr" value="{{$imunisasi->tgl_lahir}}" aria-describedby=""name="tgl_lahir">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>
                    <div class="mb-3 form-outline border-0 border-bottom border-dark">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamat" value="{{$imunisasi->alamat}}" aria-describedby="" name="alamat">
                        {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                    </div>


        </div>
        {{-- tengah --}}
        <div class="col-md-4">
          <div class="mb-3 form-outline border-0 border-bottom border-dark ">
                <label for="inputBeratBadan" class="form-label">Berat Badan</label>
                <input  type="text" class="form-control" id="inputBeratBadan" value="{{$imunisasi->berat_badan}}" aria-describedby="" name="berat_badan">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-4 form-outline border-0 border-bottom border-dark">
                <label for="inputPanjangBadan" class="form-label">Panjang Badan</label>
                <input type="text" class="form-control" id="inputPanjangBadan" value="{{$imunisasi->panjang_badan}}" aria-describedby="" name="panjang_badan">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="inputBCG" class="form-label">HBO</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1" name="HBO" {{$imunisasi->HBO=='1'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2" name="HBO" {{$imunisasi->HBO=='2'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3" name="HBO" {{$imunisasi->HBO=='3'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">3</label>
                    <input type="hidden" name="HBO" value="0">
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="inputBCG" class="form-label">BCG</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" name="BCG" value="1" {{$imunisasi->BCG=='1'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" name="BCG" value="2" {{$imunisasi->BCG=='2'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" name="BCG" value="3" {{$imunisasi->BCG=='3'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">3</label>
                    <input type="hidden" name="BCG" value="0">
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>

            <div class="mb-3">
              <label for="inputBCG" class="form-label">PENTA</label>
              <div>
                  <input type="checkbox" class="form-check-input" id="inputBCG" name="PENTA" value="1" {{$imunisasi->PENTA=='1'? 'checked':''}}>
                  <label for="inputBCG" class="form-label">1</label>
                  <input type="checkbox" class="form-check-input" id="inputBCG" name="PENTA" value="2" {{$imunisasi->PENTA=='2'? 'checked':''}}>
                  <label for="inputBCG" class="form-label">2</label>
                  <input type="checkbox" class="form-check-input" id="inputBCG" name="PENTA" value="3" {{$imunisasi->PENTA=='3'? 'checked':''}}>
                  <label for="inputBCG" class="form-label">3</label>
                  <input type="hidden" name="PENTA" value="0">
              </div>
              {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
          <div class="mb-3">
            <label for="inputBCG" class="form-label">IPV</label>
            <div>
                <input type="checkbox" class="form-check-input" id="inputIPV" name="IPV" value="1" {{$imunisasi->IPV=='1'? 'checked':''}}>
                <label for="inputIPV" class="form-label">1</label>
                <input type="checkbox" class="form-check-input" id="inputIPV" name="IPV" value="2" {{$imunisasi->IPV=='2'? 'checked':''}}>
                <label for="inputIPV" class="form-label">2</label>
                <input type="checkbox" class="form-check-input" id="inputIPV"  name="IPV" value="3" {{$imunisasi->IPV=='3'? 'checked':''}}>
                <label for="inputBCG" class="form-label">3</label>
                <input type="hidden" name="IPV" value="0">
            </div>
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
            


        </div>
        {{-- kanan --}}
        <div class="col-md-4">
          <div class="mb-3">
            <label for="inputBCG" class="form-label">PCV</label>
            <div>
                <input type="checkbox" class="form-check-input" id="inputBCG" name="PCV" value="1" {{$imunisasi->PCV=='1'? 'checked':''}}>
                <label for="inputBCG" class="form-label">1</label>
                <input type="checkbox" class="form-check-input" id="inputBCG" name="PCV" value="2" {{$imunisasi->PCV=='2'? 'checked':''}}>
                <label for="inputBCG" class="form-label">2</label>
                <input type="checkbox" class="form-check-input" id="inputBCG" name="PCV" value="3" {{$imunisasi->PCV=='3'? 'checked':''}}>
                <label for="inputBCG" class="form-label">3</label>
                <input type="hidden" name="PCV" value="0">
            </div>
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
            <div class="mb-3">
                <label for="inputBCG" class="form-label">Rota Virus</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS" value="1" {{$imunisasi->ROTA_VIRUS=='1'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS" value="2" {{$imunisasi->ROTA_VIRUS=='2'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" name="ROTA_VIRUS" value="3" {{$imunisasi->ROTA_VIRUS=='3'? 'checked':''}}>
                    <label for="inputBCG" class="form-label">3</label>
                    <input type="hidden" name="ROTA_VIRUS" value="0">
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="inputTPV" class="form-label">MK</label>
                <input type="checkbox" class="form-check-input" name="MK" id="inputTPV" {{$imunisasi->MK?'checked':''}}>
                <input type="hidden" name="MK" value="0">
            </div>
            <div class="mb-3">
                <label for="inputTPV" class="form-label">Booster</label>
                <div>
                    <input type="checkbox" class="form-check-input" name="booster" id="inputTPV" value="PENTA"  {{$imunisasi->booster=='PENTA'? 'checked':''}}>
                    <label for="inputTPV" class="form-label">Penta</label>
                    <input type="checkbox" class="form-check-input" name="booster" id="inputTPV" value="MK" {{$imunisasi->booster=='MK'? 'checked':''}}>
                    <label for="inputTPV" class="form-label">MK</label>
                </div>
            </div>
            
            <div class=" mb-3">
              <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ubahModal">Ubah</button>
    </form>
              <form action="{{ route('imunisasi.destroy', $imunisasi->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mt-2">Delete</button>
              </form>
              {{-- <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal">Detail</button> --}}
            </div>
        </div>
      </div>


    
      {{-- modal --}}


<!-- Modal ubah-->
<div class="modal fade" id="ubahModal" tabindex="-1" aria-labelledby="ubahModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ubahModalLabel">Ubah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          {{-- kiri --}}
          <div class="col-md-4">
            <div class="mb-3">
          <label for="inputN0" class="form-label">No</label>
          <input type="text" class="form-control" id="inputNo" readonly value="1">
        </div>
        <div class="mb-3">
          <label for="inputTanggal" class="form-label">Tanggal</label>
          <input type="text" class="form-control" id="inputTanggal" readonly value="10/03/2024">
        </div>
        <div class="mb-3">
          <label for="inputNamaAnak" class="form-label">Nama Anak</label>
          <input type="text" class="form-control" id="inputNamaAnak" readonly value="Doley">
        </div>
        <div class="mb-3">
          <label for="inputNIK" class="form-label">NIK</label>
          <input type="number" class="form-control" id="inputNIK" readonly value="3403101108020005">
        </div>
        <div class="mb-3">
          <label for="inputNamaOrtu" class="form-label">Nama Orang Tua</label>
          <input type="text" class="form-control" id="inputNamaOrtu" readonly value="Wahyu">
        </div>
        <div class="mb-3">
          <label for="inputTglLahir" class="form-label">Tanggal Lahir</label>
          <input type="text" class="form-control" id="inputTglLahir" readonly value="11/04/2024">
        </div>
          </div>
          {{-- tengah --}}
          <div class="col-md-4">
            <div class="mb-3">
          <label for="inputAlamat" class="form-label">Alamat</label>
          <input type="text" class="form-control" id="inputAlamat" readonly value="Sanggrahan">
        </div>
        <div class="mb-3">
          <label for="inputBeratBadan" class="form-label">Berat Badan</label>
          <input type="number" class="form-control" id="inputBeratBadan" readonly value="20">
        </div>
        <div class="mb-4">
          <label for="inputPanjangBadan" class="form-label">Panjang Badan</label>
          <input type="number" class="form-control" id="inputPanjangBadan" readonly value="150">
        </div>
        <div class="mb-3">
                <label for="inputBCG" class="form-label">HBO</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                    <label for="inputBCG" class="form-label">3</label>
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="inputBCG" class="form-label">BCG</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                    <label for="inputBCG" class="form-label">3</label>
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
        <div class="mb-3">
          <label for="inputPenta" class="form-label">Penta</label>
          <input type="number" class="form-control" id="inputPenta" readonly value="1">
        </div>

          </div>
          {{-- kanan --}}
          <div class="col-md-4">
            <div class="mb-3">
          <label for="inputTPV" class="form-label">TPV</label>
          <input type="number" class="form-control" id="inputTPV" readonly value="2">
        </div>
            <div class="mb-3 form-outline border-0 border-bottom border-dark">
                <label for="inputTPV" class="form-label">PCV</label>
                <input type="text" class="form-control" id="inputTPV">
            </div>
            <div class="mb-3">
                <label for="inputBCG" class="form-label">Rota Virus</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="1">
                    <label for="inputBCG" class="form-label">1</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="2">
                    <label for="inputBCG" class="form-label">2</label>
                    <input type="checkbox" class="form-check-input" id="inputBCG" value="3">
                    <label for="inputBCG" class="form-label">3</label>
                </div>
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="inputTPV" class="form-label">MK</label>
                <input type="checkbox" class="form-check-input" id="inputTPV">
            </div>
            <div class="mb-2">
                <label for="inputTPV" class="form-label">Booster</label>
                <div>
                    <input type="checkbox" class="form-check-input" id="inputTPV">
                    <label for="inputTPV" class="form-label">Penta</label>
                    <input type="checkbox" class="form-check-input" id="inputTPV">
                    <label for="inputTPV" class="form-label">MK</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="inputTPV" class="form-label">Time Stamp</label>
                <input type="time" class="form-control" id="inputTPV">
            </div>
            <div>
              <button type="button" class="btn btn-success" data-bs-dismiss="modal">Simpan</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
          </div>

        </div>
        <!-- Isi detail data disini -->
        
        
      </div>
    </div>
  </div>
</div>
{{-- end modal ubah --}}




    </div>
</div>
{{-- end --}}
</div>
