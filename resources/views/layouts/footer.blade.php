<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 bg-light py-3 text-center justify-content-center">
                <img src="{{ url('images/logo.png') }}" alt="Logo" width="150" height="100"
                    class="d-inline-block align-text-center my-3">
                <div class="border-top border-1 d-flex flex-column justify-content-between gap-1 pt-3 w-50 mx-auto">
                    Hubungi Kami</h5>
                    <p class="mb-0">0812-8833-2775</p>
                    <a href="mailto:info.technosaintifikutama@gmail.com" class="text-dark">
                        admin@technosain.com
                    </a>
                </div>
            </div>
            <div class="col-sm-8" style="background-color: #A1CEF8; color: #fff; padding: 1.25rem;">
                <div class="row mx-5">
                    <div class="col-6 text-dark text-start pe-5"><br>
                        <h4><b>Techno Saintifik Utama</b></h4>
                        <h6 class="text-dark" style="text-align: justify;" >PT Techno Saintifik Utama berdomisili di Bogor yang berfokus pada Bidang Pelatihan & Sertifikasi Kommpetensi, Konsultan Lingkungan, Keselamatan dan Kesehatan Kerja (K3), Sertifikasi Produk Halal, dan Perusahaan Perdagangan untuk Produk Kosmetik dan Farmasi.</h6>
                    </div>
                    <div class="col-3 text-dark"><br>
                        <h4><b>Bidang Kami</b></h4>
                        <a class="dropdown-item" href="{{route('tuk.index')}}">Sertifikasi Kompetensi</a>
                        <a class="dropdown-item" href="{{route('konsultasi.index')}}">Konsultan</a>
                        <a class="dropdown-item" href="{{route('lisensi.index')}}">Lisensi</a>
                    </div>
                    <div class="col-3 text-dark"><br>
                        <h4><b>Konsultan</b></h4>
                        <a class="dropdown-item" href="{{route('konsultasi.lingkungan')}}">Konsultan Lingkungan</a>
                        <a class="dropdown-item" href="{{route('konsultasi.k3')}}">Konsultan K3</a>
                    </div>
                    <!---<div class="col-4 text-dark text-starts"><br>
                        <h4><b>Pendaftaran Lisensi</b></h4>
                        <a href="#" class="text-dark">
                            <p class="mb-0">Lisensi A</p>
                        </a>
                        <a href="#" class="text-dark">
                            <p class="mb-0">Lisensi B</p>
                        </a>
                        <a href="#" class="text-dark">
                            <p class="mb-0">Lisensi C</p>
                        </a> 
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class=" border-top border-1 border-muted">
        <p class="text-center mb-0">&copy; 2024 TSU. All rights reserved.</p>
    </div>
</footer>