@extends('layouts.docs')

@section('title', 'Konsultasi Lingkungan')

@section('sidebar')
<div class="accordion" id="accord">
    <div class="nav-item border-bottom border-muted border-0 py-2">
        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" href="#konling"
            style="font-size:16px"> Komponen dalam Perizinan
            Berusaha
        </a>
        <ol id="menu_item1" class="submenu collapse ms-2 mt-1" data-bs-parent="#accrd">
            <li><a class="nav-link" href="#dokumen_persetujuan_teknis">Penyusunan Dokumen
                    Persetujuan
                    Teknis</a></li>
            <li>
                <a class="nav-link" href="#persetujuan_lingkungan">Penyusunan Dokumen Lingkungan
                    untuk memperoleh
                    Persetujuan
                    Lingkungan sebagai Perizinan Berusaha</a>
            </li>
            <li>
                <a class="nav-link" href="#pemantauan_amdal">Dokumen Pemantauan pelaksanaan Amdal
                    atau UKL-UPL</a>
            </li>
        </ol>

    </div>
    <div class="nav-item border-bottom border-muted border-0 py-2">
        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" href="#konling"
            style="font-size:16px">
            Deskripsi Jasa Konsultan Lingkungan
        </a>
        <ol id="menu_item2" class="submenu collapse ms-2 mt-1" data-bs-parent="#acord">
            <li><a class="nav-link" href="#kewenangan_pengurusan_perizinan">Kewenangan Pengurusan
                    Perizinan</a></li>
            <li>
                <a class="nav-link" href="#persyaratan_kewajiban_amdal_atau_ukl_upl">Persyaratan
                    Kewajiban Amdal atau UKL-UPL</a>
            </li>
            <li><a class="nav-link" href="#persetujuan_teknis">Persetujuan Teknis</a></li>
            <li><a class="nav-link" href="#penyusunan_ukl_upl">Penyusunan UKL-UPL</a></li>
            <li><a class="nav-link" href="#penyusunan_amdal">Penyusunan Amdal</a></li>
        </ol>
    </div>
    <div class="nav-item border-bottom border-muted border-0 py-2">
        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item3" href="#konling"
            style="font-size:16px">
            Tim Penyusun Dokumen Lingkungan
        </a>
        <ol id="menu_item3" class="submenu collapse ms-2 mt-1" data-bs-parent="#accrd">
            <li><a class="nav-link" href="#sri_heleosi">Sri Heleosi, S. Hut, M.Si</a></li>
            <li>
                <a class="nav-link" href="#dhona_arianti">Dhona Arianti, S.Si, M.Si</a>
            </li>
            <li><a class="nav-link" href="#yuli_irmayanti">Yuli Irmayanti, S.Si, M.K.K.K</a></li>
            <li><a class="nav-link" href="#ade_haryadi">Ade Haryadi, S.P</a></li>
        </ol>
    </div>
</div>
@endsection

@section('main')
<div class="mb-5">
    <h4 class="text-center mb-4">Komponen dalam Perizinan Berusaha</h4>
    <ol>
        <li id="dokumen_persetujuan_teknis" class="mb-2">
            <h5>Penyusunan Dokumen Persetujuan Teknis</h5>
            <p class="mb-0">Yaitu dokumen yang wajib disusun jika usaha dan/kegiatan mencakup :</p>
            <ol style="list-style-type:lower-roman">
                <li>Pembuangan Air Limbah</li>
                <li>Pembuangan Gas Udara Emisi</li>
                <li>Pengelolaan Limbah B3</li>
                <li>Analisis Dampak Lingkungan</li>
            </ol>
            <p class="mb-0">Acuan : PermenLHK No. 5 Tahun 2021 untuk penapisan kategori jenis
                dokumen : Kajian Teknis atau Studi Teknis.
            </p>
            <p class="mb-0">
                <b>Untuk Pertek air Limbah :</b><br>
                Dalam kajian teknis yang harus dipenuhi adalah standar teknis pemenuhan BMAL yang
                terdiri dari deskripsi kegiatan, rona
                lingkungan awal, prakiraan dampak, rencana pengelolaan lingkungan termasuk sistem
                pengolahan AL dan atau fasilitas
                injeksi; rencana pemantauan lingkungan. Lainnya yang harus dipenuhi adalah
                internalisasi biaya lingkungan, SML dan
                kompetensi SDM. Pada standar teknis semua sama kecuali rona lingkungan diganti
                dengan rujukan BMAL yang ditetapkan
                menteri dan tidak ada prakiraan dampak.<br>
                Standar teknis pada pembuangan air limbah ke badan permukaan pada deskripsi kegiatan
                pmeliputi jenis dan kapasitas
                usaha/kegiatan, jumlah dan jenis bahan baku atau penolong yang digunakan, proses
                usaha atau kegiatan yang dijalankan
                termasuk kegiatan penunjang yang berpotensi menghasilkan air limbah, neraca air,
                fluktuasi atau kontinuitas produksi dan
                air limbah, lay out masing-masing unit proses kerja dan instalasi pengolah limbah.
                Rona lingkungan awal terdiri dari perhitungan kapasitas pengolahan air limbah,
                keperluan perhitungan prakiraan dampak,
                komponen lingkungan yang terkena dampak. Prakiraan dampak meliputi perhitungan BMAL,
                sebaran AL, sifat penting dampak,
                penetapan titik pantau pada badan air permukaan.<br>
                Rencana pemantauan dan pengolaan lingkungan terdiri dari kapasitas instalasi
                pengolah AL, teknologi sistim pengolahan
                AL, unit prosesing atau unit operasi, kriteria disain setiap unit proses, alur
                proses dan layout instalasi pengolahan
                air limbah, pengelolaan lumpur atau gas yang dihasilkan.
                Rencana pemantauan lingkungan terdiri dari titik penataan, pembuangan AL, pemantauan
                badan air permukaan; mutu air
                limbah, mutu air, mutu air tanah; frekuensi. Hal lain yang harus masuk adalah sistim
                penangunggalangan keadaan darurat,
                internalisasi biaya lingkungan, periode waktu uji coba. Juga harus ada standar
                kompetensi sumber daya manusia dan sistim
                manajemen lingkungan.<br>
                Pemanfaatan air limbah ke formasi tertentu sama kecuali rona lingkungan awal hanya
                komponen lingkungan yang relevan
                untuk mengkaji pemanfaatan air limbah. Sedang pada RPPL terdiri dari instalasi
                pengolahan AL yang direncanakan dan tata
                pemanfaatan : injeksi dan pond.<br>
                RPL terdiri dari air limbah : titik penataan, mutu AL; injeki meiliputi titik
                penataan, parameter, frekuensi; air tanah
                terdiri dari sumur pantau, parameter dan frekuensi. Rencana pemanfaatan terdapat 2
                cara yaitu pompa dan sumur injeksi
                untuk akuifer bebas maupun tertekan, pond untuk akuifer bebas dan berpasir. Jarak
                pond ke permukaan air tanah > 5 m dan
                lokasi resapan bukan daerah karst. BMAL untuk menahan instrusi air laut dan imbuhan
                air tanah kelas 2 sedang untuk
                resapan kelas 3.<br>
                Mekanisme penerbitan persetujuan teknis untuk pemenuhan BMAL adalah penanggung jawab
                usaha/kegiatan wajib amdal atau
                UKL/UPL mengajukan permohonan pengajuan teknis melalui Sistim Informasi Dokumen
                Lingkungan kepada menteri, gubernur,
                bupati/walikota sesuai kewenangan perizinan usaha dan Perling. Lengkap tidaknya
                permohonan ini harus dijawab dalam 10
                hari.<br>
                Menteri menugaskan pejabat bidang PPKL, sedang gubernur, bupati, walikota menugaskan
                pejabat bidang LH melakukan
                pemeriksaan teknis dalam 2 hari kerja. Bila permohonan lengkap dan benar maka
                dilakukan penilaian sustansi dalam 30 hari
                kerja. Bila kesesuaian tidak terpenuhi maka persetujuan teknis ditolak , bila
                terpenuhi maka masuk dalam mekanisme
                penerbitan surat kelayakan operasional (SLO).<br>
                Mekanisme penerbitan SLO adalah bila sistim pengolahan air limbah selesai dan
                penyelesaian uji coba air limbah melapor
                pada menteri, gubernur, bupati/walikota sesuai kewenanangan Perling maka pejabat
                madya bidang PPKL (menteri) dan pejabat
                bidang LH (gubernur, bupati/walikota) melakukan verifikasi dalam 5 hari kerja.<br>
                Bila sesuai pertek maka SLO terbit dan dimulai operasional pengawasan ketaatan dalam
                perijinan usaha. Bila tidak sesuai
                maka dalam 3 hari kerja harus ada arahan perbaikan sarpras, perubahan pertek dan
                jangka waktu perbaikan. Setelah
                dilakukan perbaikan maka dilakukan verifikasi. Jika sesuai SLO terbit jika tidak
                maka dilakukan penegakkan hukum.
            </p>
        </li>
        <li id="persetujuan_lingkungan" class="mb-2">
            <h5>Penyusunan Dokumen Lingkungan untuk memperoleh Persetujuan Lingkungan sebagai
                Perizinan
                Berusaha</h5>
            <ol style="list-style-type:upper-roman">
                <li>Untuk Rencana Usaha dan/ Kegiatan yang belum terbangun yaitu Dokumen Amdal atau
                    Dokumen UKL-UPL.
                </li>
                <li>
                    <p class="mb-0">Untuk Kegiatan Usaha yang sedang berjalan :</p>
                    <ol style="list-style-type:lower-alpha">
                        <li>
                            Dokumen Adendum Amdal yaitu perubahan Amdal karena adanya
                            perubahan-perubahan signifikan dan belum tercakup di dalam
                            Amdal yang ada, terdapat 3 kategori yaitu Amdal A, Amdal B, atau Amdal
                            C.
                        </li>
                        <li>
                            Dokumen Addendum UKL-UPL yaitu perubahan karena adanya
                            perubahan-perubahan signifikan dan belum tercakup dalam dokumen
                            UKL-UPL yang ada, namun belum wajib Amdal.
                        </li>
                        <li>
                            Dokumen Amdal Baru yaitu Amdal yang dibuat karena adanya peningkatan
                            kewajiban dari UKL-UPL menjadi Amdal atau
                            penggantian dokumen Amdal yang sudah ada akibat sudah tidak relevan
                            dengan peraturan2 terbaru dan/ kondisi kegiatan
                            usaha sudah berubah total.
                        </li>
                        <li>
                            Dokumen UKL-UPL Baru yaitu dokumen yang dibuat jika dokumen UKL-UPL yang
                            ada sudah tidak relevan dengan peraturan2
                            terbaru dan/ kondisi kegiatan usaha sudah berubah total.
                        </li>
                        <li>
                            Dokumen DELH yaitu dokumen selevel Amdal yang harus disusun namun
                            kegiatan usaha sudah berjalan.
                        </li>
                        <li>
                            Dokumen DPLH yaitu dokumen selevel UKL-UPL yang harus disusun namun
                            kegiatan usaha sudah berjalan.
                        </li>
                    </ol>
                </li>
            </ol>
        </li>
        <li id="pemantauan_amdal">
            <h5>Dokumen Pemantauan pelaksanaan Amdal atau UKL-UPL</h5>
            <p>Dokumen DPLH yaitu dokumen selevel UKL-UPL yang harus disusun namun kegiatan usaha
                sudah berjalan.</p>
        </li>
    </ol>
</div>
<div class="mb-5">
    <h4 class="text-center mb-4">Deskripsi dalam Perizinan Berusaha</h4>
    <ol>
        <li id="kewenangan_pengurusan_perizinan" class="mb-2">
            <h5>Kewenangan Pengurusan Perizinan</h5>
            <ol style="list-style-type:upper-roman">
                <li>Untuk Kepemilikan PMA:</li>
                <ol style="list-style-type:lower-alpha">
                    <li>Persetujuan Teknis di KLHK Pusat</li>
                    <li>Amdal di KLHK Pusat</li>
                    <li>UKL-UPL di KLHK Pusat</li>
                </ol>

                <li>Untuk Kepemilikan PMDN:</li>
                <ol style="list-style-type:lower-alpha">
                    <li>Persetujuan Teknis di DLH Daerah</li>
                    <li>Amdal di KLHK Pusat</li>
                    <li>UKL-UPL di DLH Daerah, namun jika melintasi 2 provinsi kewenangan di KLHK
                        Pusat</li>
                </ol>
            </ol>
        </li>
        <li id="persyaratan_kewajiban_amdal_atau_ukl_upl" class="mb-2">
            <h5>Persyaratan Kewajiban Amdal atau UKL-UPL</h5>
            <p class="mb-0">
                Penapisan kewajiban Amdal atau UKL UPL bagi pelaku usaha dan/kegiatan mengacu kepada
                Peraturan Menteri Lingkungan Hidup
                dan kehutanan No. 4 Tahun 2021.
            </p>
        </li>
        <li id="persetujuan_teknis" class="mb-2">
            <h5>Persetujuan Teknis</h5>
            <p class="mb-0">
                Merupakan syarat wajib dan menjadi komponen penting dalam penyusunan dokumen Amdal
                atau UKL-UPL. Pengurusan Persetujuan
                Teknis sekitar 5-6 bulan.
                Sertifikat Laik Operasi (SLO) diperoleh apabila pelaksanaan pengelolaan sesuai
                dengan Persetujuan Teknis yang telah
                diperoleh. Pengajuan SLO dilakukan setelah masa percobaan implementasi selama 6
                bulan.
            </p>
        </li>
        <li id="penyusunan_ukl_upl" class="mb-2">
            <h5>Penyusunan UKL-UPL</h5>
            <p class="mb-0">
                Penyusunan dokumen UKL-UPL dan proses sampai dengan terbit Persetujuan
                Lingkungan sekitar 6 bulan.
            </p>
        </li>
        <li id="penyusunan_amdal" class="mb-2">
            <h5>Penyusunan Amdal</h5>
            <ol style="list-style-type:lower-roman">
                <li>Tim penyusun dokumen Amdal harus disusun oleh personal yang memiliki sertifikasi
                    kompetensi sedikitnya 2 orang
                    KTPA (Ketua tim Penyusun Amdal) dan 2 ATPA orang (Anggota Tim Penyusun Amdal).
                </li>
                <li>Lokasi Rencana Usaha dan/Kegiatan wajib sesuai dengan Rencana Tata Ruang Wilayah
                    (RTRW) dan Peta Indikatif
                    Penundaan Pemberian Izin Baru (PIPPIB).</li>
                <li>Deskripsi komponen rencana usaha dan/kegiatan penyebab dampak dan pengelolaan
                    lingkungan hidup yang sudah
                    direncanakan termasuk alternatif.</li>
                <li>Deskripsi Rona Lingkungan Hidup Awal yang merupakan komponen lingkungan hidup
                    yang diprakirakan akan terkena
                    dampak.</li>
                <li>Pengumuman dan Konsultasi Publik merupakan kegiatan pelibatan masyarakat sekitar
                    yang akan memberikan saran,
                    pendapat, dan tanggapan untuk pengambilan keputusan.</li>
                <li>Deskripsi usaha dan/kegiatan lain di sekitar area rencana usaha dan/kegiatan.
                </li>
                <li>Penyusunan dokumen Formulir Kerangka Acuan.</li>
                <li>Rapat penilaian kesesuaian dokumen dengan KLHK.</li>
                <li>Penyusunan Dokumen Amdal.</li>
                <li>Penyusunan Dokumen RKL-RPL.</li>
                <li>Rapat Tim Teknis Pembahasan Kelayakan Amdal.</li>
                <li>Penerbitan Persetujuan Lingkungan.</li>
            </ol>
            <p class="mt-1">Penyelesaian proses ini sekitar 12 bulan atau lebih tergantung antrian
                di KLHK.</p>
        </li>
    </ol>
</div>
<div class="mb-5">
    <h4 class="text-center mb-4">Tim Penyusun Dokumen Lingkungan</h4>
    <x-timpenyusun />
</div>
<p>
    PT Techno Saintifik Utama bekerjsama dengan laboratorium penguji lingkungan yang terakreditasi KAN dan teregistrasi
    KLHK
    dalam melaksanakan pengambilan sampel, pengukuran, dan pengujian laboratorium dengan peralatan-peralatan yang
    digunakan
    terkalibrasi, metode pengujian yang telah tervalidasi, dan personal pengambil contoh uji telah memiliki sertifikat
    kompetensi yang sesuai.
</p>
@endsection