@extends('master')
@section('konten')
    <!-- Header-->
    <header class="bg-dark py-5">
      <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
          <h1 class="display-4 fw-bolder">Sewa Mobil</h1>
          <p class="lead fw-normal text-white-50 mb-0">
            hanya dengan satu sentuhan
          </p>
        </div>
      </div>
    </header>
<!-- Section-->
<section class="py-5">
  <div class="container px-4 px-lg-5 mt-5">
    <h3 class="text-center mb-5">Daftar Tempat Rental Mobil</h3>
    <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-3 justify-content-center">
      
      <!-- Kartu 1 -->
      <div class="col mb-5">
        <div class="card h-100">
          <div class="card-body pt-4">
            <div class="text-center">
              <h5 class="fw-bolder">Rental Mobil Bonde Jaya</h5>
              <p><strong>Alamat:</strong> Jl. Poros Bonde No. 23, Bone</p>
              <p><strong>No. Telp:</strong> 0821-3456-7890</p>
              <p><strong>Deskripsi:</strong> Menyediakan berbagai jenis mobil keluarga dan travel dengan harga terjangkau dan pelayanan ramah.</p>
            </div>
          </div>
          <div class="card-footer border-top-0 bg-transparent text-center">
            <a class="btn btn-info mt-auto text-white" href="{{ route('mobil') }}">Detail</a>
          </div>
        </div>
      </div>

      <!-- Kartu 2 -->
      <div class="col mb-5">
        <div class="card h-100">
          <div class="card-body pt-4">
            <div class="text-center">
              <h5 class="fw-bolder">Rental Mobil Cepat Laju</h5>
              <p><strong>Alamat:</strong> Jl. Sultan Hasanuddin No. 12, Makassar</p>
              <p><strong>No. Telp:</strong> 0852-9988-7766</p>
              <p><strong>Deskripsi:</strong> Rental mobil cepat dan terpercaya, cocok untuk keperluan perjalanan dalam dan luar kota.</p>
            </div>
          </div>
          <div class="card-footer border-top-0 bg-transparent text-center">
            <a class="btn btn-info mt-auto text-white" href="{{ route('mobil') }}">Detail</a>
          </div>
        </div>
      </div>

      <!-- Kartu 3 -->
      <div class="col mb-5">
        <div class="card h-100">
          <div class="card-body pt-4">
            <div class="text-center">
              <h5 class="fw-bolder">Rental Mobil Amanah</h5>
              <p><strong>Alamat:</strong> Jl. Andi Mappanyukki No. 45, Parepare</p>
              <p><strong>No. Telp:</strong> 0813-7765-4321</p>
              <p><strong>Deskripsi:</strong> Rental mobil terpercaya dengan pilihan armada terbaru dan layanan sopir profesional.</p>
            </div>
          </div>
          <div class="card-footer border-top-0 bg-transparent text-center">
            <a class="btn btn-info mt-auto text-white" href="{{ route('mobil') }}">Detail</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
    
@endsection