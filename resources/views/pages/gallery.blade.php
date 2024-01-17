@extends('layouts.app')

@section("content")
<div>
    <div class="container min-vh-100 py-4">
        <h2 class="text-left text-decoration-underline mb-4">Fasilitas</h2>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="min-height: 100px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;">
                                    <img src="{{ url('images/galeri/fasil1.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/fasil2.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/fasil3.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/fasil4.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/fasil1.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/fasil3.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-left text-decoration-underline mb-4">Tempat Uji Kompetensi</h2>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="min-height: 100px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;">
                                    <img src="{{ url('images/galeri/tuk1.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/tuk2.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/tuk3.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/tuk4.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/tuk5.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/tuk6.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-left text-decoration-underline mb-4">Konsultan Lingkungan</h2>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="min-height: 100px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;">
                                    <img src="{{ url('images/galeri/kl1.jpg') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/kl2.jpg') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/kl3.jpg') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/kl4.jpg') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/kl5.jpg') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/kl6.jpg') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="text-left text-decoration-underline mb-4">Konsultan K3</h2>
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="min-height: 100px;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;">
                                    <img src="{{ url('images/galeri/k3-1.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/k3-2.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/k3-3.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/k3-4.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/k3-5.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card" style="height: 400px; overflow: hidden;">
                                <div style="position: relative; width: 100%; height: 100%;"><img
                                        src="{{ url('images/galeri/k3-6.png') }}"
                                        style="object-fit: cover; width: 100%; height: 100%;" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection