@extends('layouts/navadmin')
@section('container')

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <!-- Groups section start -->
            <section id="groups">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card-group">
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="assets3/images/samples/1.png" alt="Card image cap"/>
                                    <div class="card-body">
                                        <h4 class="card-title">Katalog</h4>
                                        <p class="text-muted mt-3 mb-0">
                                            <a href="/adminkatalog" class="desc-title">Lihat Data Katalog</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="assets3/images/samples/2.png"alt="Card image cap"/>
                                    <div class="card-body">
                                        <h4 class="card-title">Pesanan</h4>
                                        <p class="text-muted mt-3 mb-0">
                                            <a href="/tabelpesan" class="desc-title">Lihat Data Pesanan</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid" src="assets3/images/samples/3.png" alt="Card image cap"/>
                                    <div class="card-body">
                                        <h4 class="card-title">Laporan</h4>
                                        <p class="text-muted mt-3 mb-0">
                                            <a href="/adminkatalog" class="desc-title">Lihat Data Laporan</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <img class="card-img-top img-fluid"src="assets3/images/samples/4.png"alt="Card image cap"/>
                                    <div class="card-body">
                                        <h4 class="card-title">Profile</h4>
                                        <p class="text-muted mt-3 mb-0">
                                            <a href="/adminkatalog" class="desc-title">Lihat Data Profile</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
@endsection