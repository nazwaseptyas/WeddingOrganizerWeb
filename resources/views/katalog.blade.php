@extends('layouts/main')

@section('container')
<style>
    .catalog-image {
        max-width: 100%;
        height: auto;
        display: block;
    }
</style>
    <section id="hero" class="container-fluid">
    <div id="hero-img" class="col-md-5">
        <div class="hero-img-wrapper">
            <img src="assets/img/home2.png" class="img-fluid hero-img" alt="hero banner">
            <div class="overlay"></div>
        </div>
    </div>
    <div id="hero-greeting" class="col-md-5">
        <h1 class="hero1">Wedding Organizer JeWePe</h1><br>
        <h4 class="hero2">Harmoni Sempurna dalam Setiap Detail Pernikahan Anda. Dari konsep hingga pelaksanaan, kami dedikasikan diri untuk menciptakan momen yang tak terlupakan dan penuh makna, memastikan setiap langkah perjalanan cinta Anda menjadi kenangan indah.</h4>
    </div>
</section>
    <section id="gallery" class="container-fluid" style="margin-bottom: 50px; background-color: #F6F1E9; padding:50px;">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h2 class="gallery-title">GALLERY</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-4">
                <img src="assets/img/gallery1.jpg" class="img-fluid gallery-img" alt="Image 1">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="assets/img/gallery2.jpg" class="img-fluid gallery-img" alt="Image 2">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="assets/img/gallery4.png" class="img-fluid gallery-img" alt="Image 4">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-4">
                <img src="assets/img/gallery5.png" class="img-fluid gallery-img" alt="Image 5">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="assets/img/gallery6.png" class="img-fluid gallery-img" alt="Image 6">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="assets/img/gallery7.png" class="img-fluid gallery-img" alt="Image 7">
            </div>
        </div>
    </div>
</section>
    {{-- List katalog --}}
    <section class="container-fluid" style="padding: 30px 100px 30px 100px;">
        <div class="row">   
            <div class="mb-3 mb-sm-0 card-artikel">
                <p class="tab-quote">
                    &nbsp; KATALOG
                </p>
                @if ($data && $data->count() > 0)
                @foreach ($data as $row)
                    <div class="col-md-12 mb-4">
                        <div class="card">
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('detail', $row->id_katalog) }}">
                                        <img src="{{ 'storage/' . $row->gambar }}" alt="{{ $row->nama_paket }}" class="img-fluid catalog-image">
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="font-weight: 600; margin-bottom: 15px;">{{ $row->nama_paket }}</h5>
                                        <p class="card-text" style="text-align: justify;">{{ \Illuminate\Support\Str::limit($row->isi_katalog, 400) }}</p>
                                        <a href="{{ route('detail', $row->id_katalog) }}" class="btn btn-danger btn-custom" style="width: 250px;">Lihat Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12">
                    <p>Tidak ada data katalog yang ditampilkan.</p>
                </div>
            @endif
            </div>
        </div>
    </section>
@endsection
