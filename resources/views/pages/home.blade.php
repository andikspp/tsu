@extends('layouts.app')

@section('content')
<div>
    <x-carousel />

    {{-- Company Profile --}}
    <div class="container">
        <div class="row mt-3" style="padding: 50px 100px 0 100px;">
            <div class="col-md-auto">
                <img src="{{ url('images/logo.png') }}" alt="Logo" width="150" height="100"
                    class="d-inline-block align-text-center my-3">
            </div>
            <div class="col">
                <h3><b>PT Techno Saintifik Utama (TSU)</b></h3>
                <p style="text-align:justify; font-size:13px;">Kami merupakan sebuah perusahaan multi nasional yang
                    didirikan berdasarkan
                    Akta Notaris Etty Nugrahawati, S.H, Nomor 26 tanggal 12 Juni 2023 dengan SK Kemenhumkam No.
                    AHU-0042640.AH.01.01.TAHUN 2023 tanggal 13 Juni 2023 dan Nomor Induk Berusaha (NIB) 3006230064247.
                    PT
                    Techno Saintifik Utama berdomisili di Bogor yang berfokus pada Bidang Pelatihan & Sertifikasi
                    Kommpetensi, Konsultan Lingkungan, Keselamatan dan Kesehatan Kerja (K3), Sertifikasi Produk Halal,
                    dan
                    Perusahaan Perdagangan untuk Produk Kosmetik dan Farmasi.</p>
            </div>
        </div>

        <div class="row mb-3" style="padding: 0 100px 50px 100px;">
            <div class="col-sm-12">
                <br>

                <h4><b>Tim Kami</b></h4>

                <p style="text-align:justify">Kami mempunyai tim profesional yang kompeten pada setiap bidangnya untuk
                    melaksanakan kegiatan operasional kami sesuai dengan standar dan persyaratan. Tim professional kami
                    memiliki
                    latar belakang pendidikan formal dan non formal yang mumpuni, sertifikasi kompetensi yang mendu
                    kung, serta
                    berpengalaman dalam melaksanakan kegiatan-kegiatan di berbagai bidang perusahaan dan disiplin ilmu.
                </p>
                <div class="row">
                    <div class="col-6">
                        <h4>Visi</h4>
                        <p>TUK PT Techno Saintifik Utama mempunyai komitmen untuk memberikan pelayanan yang mengutamakan
                            mutu
                            dan
                            kepuasan pelanggan.</p>

                    </div>
                    <div class="col-6">
                        <h4>Misi</h4>
                        <p>1. Menyediakan pelayanan yang optimal kepada pelanggan.<br>
                            2. Memenuhi standar mutu dan regulasi yang terkait.<br>
                            3. Meningkatkan kompetensi sumber daya manusia.<br>
                            4. Menciptakan kerjasama yang berkesinambungan dengan semua pemangku kepentingan
                            (stakeholder).<br>
                            5. Berkesesuaian terhadap Sistem Manajemen Mutu.</p>
                    </div>


                </div>
            </div>
        </div>
    </div>

    {{-- Jasa --}}
    <div>
        <img src="{{ url('images/beranda/orang.png') }}" alt="workers" width="100%" height="200px"
            style="object-fit: cover; object-position:top">
        <div style="background-color: #032D5F; color: white;" class="py-3">
            <div style="text-align:center; font-size: 30px; font-weight:bold;">
                Jasa Kami
            </div>
        </div>

        {{-- List Jasa --}}
        <div class="container">
            <div class="row p-3" style="margin: 50px 150px 50px 150px;">
                <div class="col-md-6 d-flex justify-content-between flex-column align-items-end" id="jasa1">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <img src="{{ url('images/beranda/resume.png') }}" alt="TUK" width="75" height="75">
                        <p style="font-size:16px;" class="mt-3">Tempat Uji Kompetensi</p>
                        <p style="text-align:justify; font-size:12px;">
                            PT Techno Saintifik Utama (TSU) merupakan TUK Mandiri
                            terverifikasi
                            dan
                            mendapatkan Sertifikat Lisensi dari Lembaga Sertifikasi Profesi (LSP) sebagai penyelenggara
                            pelatihan
                            dan
                            sertifikasi kompetensi berbasis BNSP, menerapkan Sistem Manajemen Mutu sesuai dengan Pedoman
                            BNSP
                            206-2014
                            guna memberikan jaminan konsistensi kompetensi pengujian dalam lingkup kegiatannya serta
                            menjamin
                            ketidakberpihakan dan keamanan Materi Uji Kompetensi.</p>
                    </div>
                    <a href="{{ route('tuk.index')}}"><button class="btn btn-custom2">Baca Selengkapnya</button></a>
                </div>
                <div class="col-md-6 d-flex justify-content-between flex-column align-items-end border-start border-end border-muted border-0"
                    id="jasa2">
                    <div class="d-flex justify-content-center flex-column align-items-center">
                        <img src="{{ url('images/beranda/businessman.png') }}" alt="Konsultasi" width="75" height="75">
                        <p style="font-size:16px;" class="mt-3">Jasa Konsultasi</h3>
                        <p style="text-align:justify; font-size:12px;">
                            PT Techno Saintifik Utama bekerjasama dengan laboratorium penguji
                            lingkungan yang terakreditasi KAN dan teregistrasi KLHK dalam melaksanakan pengambilan
                            sampel,
                            pengukuran, dan
                            pengujian
                            laboratorium dengan peralatan-peralatan yang digunakan terkalibrasi, metode pengujian yang
                            telah
                            tervalidasi,
                            dan personal pengambil contoh uji telah memiliki sertifikat kompetensi yang sesuai.</p>
                    </div>
                    <a href="{{ route('konsultasi.index')}}"><button class=" btn btn-custom2">Baca
                            Selengkapnya</button></a>
                </div>
            </div>
        </div>
    </div>

    {{-- Contacts --}}
    <div class="container-fluid" style="position: relative; padding: 0; background-size: cover; background-position: center;">
    <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('{{ asset('images/beranda/gedung.png') }}') no-repeat center center; background-size: cover; filter: brightness(50%) opacity(0.8);"></div>
    <div class="container" style="position: relative; z-index: 1; color: white; padding: 50px 0;">
            <div class="row" style="padding: 50px 100px 50px 100px;">
                <div class="col-6">
                    <div class="row">
                        <div class="border-start border-2 border-warning px-2 ms-3 mb-2">Contact</div>
                        <p class="h3 text-white" style="font-size:35px; font-weight:600;">Punya Pertanyaan?
                            Konsultasikan
                            dengan Kami
                        </p>
                        <p class="h5 my-4">
                            Atau pergi ke halaman
                            <a href="{{ route('konsultasi.index')}}" class="text-white">berikut</a>
                        </p>
                    </div>
                    <div class="row"></div>
                    </h5>
                    <div class="row">
                        <div class="col">
                            <div class="row mt-2 align-items-center">
                                <div class="col-2">
                                    <a href="mailto:info.technosaintifikutama@gmail.com">
                                        <img src="{{ url('images/beranda/Icon.png') }}" alt="Email">
                                    </a>
                                </div>
                                <div class="col">
                                    <b>Email</b><br>
                                    admin@technosain.com
                                </div>
                            </div>
                            <div class="row mt-2 align-items-center">
                                <div class="col-2">
                                    <a href="https://wa.me/6289659987807">
                                        <img src="{{ url('images/beranda/Icon.png') }}" alt="Handphone">
                                    </a>
                                </div>
                                <div class="col">
                                    <h6>
                                        <b>Whatsapp</b> <br>0812-8833-2775
                                    </h6>
                                </div>
                            </div>
                            <div class="row mt-2 align-items-center">
                                <div class="col-2">
                                    <a href="https://www.instagram.com/pt_techno_saintifik_utama/">
                                        <img src="{{ url('images/beranda/insta.png') }}" alt="instagram">
                                    </a>
                                </div>
                                <div class="col">
                                    <h6>
                                        <b>Instagram</b><br>PT TECHNO SAINTIFIK UTAMA
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <!-- Formulir -->
                    <section class="google-map py-1">
                        <iframe frameborder="0" width="550px" height="450px"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.260664192965!2d106.67734907499153!3d-6.360299093629743!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e5b479d35101%3A0x4ca8083b25166afd!2sIndonesian%20Life%20Sciences%20Center!5e0!3m2!1sen!2sid!4v1704692807434!5m2!1sen!2sid"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <!-- <iframe 
                  src="https://maps.google.com/maps?q=Suite%20100%20San%20Francisco%2C%20LA%2094107%20United%20States&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near"></iframe> -->
                    </section><!-- /.GoogleMap -->
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="container p-4">

    </div>
</div>
@endsection