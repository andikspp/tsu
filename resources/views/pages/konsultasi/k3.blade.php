@extends('layouts.docs')

@section('title', 'Konsultasi K3')

@section('sidebar')
<div class="accordion" id="accord">
    <div class="nav-item border-bottom border-muted border-0 py-2">
        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item1" style="font-size:16px">
            Penerapan Higiene Industri (Industrial Hygiene) di Tempat Kerja
        </a>
        <ol id="menu_item1" class="submenu collapse ms-2 mt-1" data-bs-parent="#accrd">
            <li>
                <a class="nav-link" href="#k3">
                    Penanggung jawab K3
                </a>
            </li>
            <li>
                <a class="nav-link" href="#syarat_k3">
                    Syarat lingkungan kerja K3
                </a>
            </li>
            <li>
                <a class="nav-link" href="#teknis_penerapan_k3">
                    Petunjuk teknis penerapan K3
                </a>
            </li>
        </ol>
    </div>
    <div class="nav-item border-bottom border-muted border-0 py-2">
        <a class="nav-link" data-bs-toggle="collapse" data-bs-target="#menu_item2" style="font-size:16px">
            Pertanyaan tentang K3
        </a>
        <ol id="menu_item2" class="submenu collapse ms-2 mt-1" data-bs-parent="#acord">
            <li>
                <a class="nav-link" href="#kewajiban_pengusaha">
                    Apa yang Menjadi Kewajiban Pengusaha dan/atau Pengurus Terkait K3 Lingkungan Kerja?
                </a>
            </li>
            <li>
                <a class="nav-link" href="#kewajiban_syarat_k3">
                    Apa yang Harus Dilakukan Pengusaha dan/atau Pengurus dalam Menerapkan Syarat-syarat K3 Lingkungan
                    Kerja?
                </a>
            </li>
            <li>
                <a class="nav-link" href="#5_faktor_k3">
                    Bagaimana Pedoman Baru Mengenai Faktor Fisika, Kimia, Biologi, Ergonomi, dan Psikologi?
                </a>
            </li>
            <li>
                <a class="nav-link" href="#higiene_sanitasi">
                    Bagaimana Pedoman Baru Mengenai Higiene dan Sanitasi?
                </a>
            </li>
        </ol>
    </div>
</div>
@endsection

@section('main')
<div class="mb-5">
    <h4 class="text-center mb-4" id="k3">Penerapan Higiene Industri (Industrial Hygiene) di Tempat Kerja</h4>
    <p>
        Siapa yang harus bertanggung jawab dalam Keselamatan dan Kesehatan Kerja (K3) diperusahaan guna mencegah
        terjadinya kecelakaan dan penyakit akibat Kerja?
    </p>
    <p class="mb-0"> <b>Undang - Undang No. 01 tahun 1970 (Pasal 8) </b>disebutkan bahwa :</p>
    <ol>
        <li>
            Pengurus diwajibkan memeriksakan kesehatan badan, kondisi mental dan kemampuan fisik dari tenaga kerja yang
            akan
            diterimanya maupun akan dipindahkan sesuai dengan sifat-sifat pekerjaan yang diberikan padanya.
        </li>
        <li>
            Pengurus diwajibkan memeriksakan semua tenaga kerja yang berada di bawah pimpinannya, secara berkala pada
            dokter yang
            ditunjuk oleh pengusaha dan dibenarkan oleh direktur.
        </li>
    </ol>
    <p class="mb-0"> <b>Undang - Undang No. 01 tahun 1970 (Pasal 9) </b>disebutkan bahwa pengurus diwajibkan menunjukkan
        dan menjelaskan kepada setiap tenaga kerja baru tentang</p>
    <ol>
        <li>
            Kondisi dan bahaya serta apa yang dapat timbul dalam tempat kerja.
        </li>
        <li>
            Semua pengamanan dan alat perlindungan diri yang diharuskan dalam semua tempat kerjanya serta cara dan sikap
            yang aman
            dalam melaksanakan pekerjaannya.
            Pengurus hanya dapat mempekerjakan tenaga kerja setelah ia yakin bahwa tenaga kerja tersebut telah memahami
            syarat
            keselamatan kerja, dan pengurusan diwajibkan memenuhi dan mentaati semua syarat dan ketentuan yang berlaku
            bagi usaha
            dan tempat kerja yang dijalankannya. Dengan membangun budaya K3 ditempat kerja yang salah satu upayanya
            adalah dengan
            mengembangkan program Higiene Industri diperusahaan.
        </li>
    </ol>
    <p>
        Keselamatan dan kesehatan kerja (K3) adalah hal penting yang harus diterapkan dalam bekerja. Apa pun bidang
        pekerjaannya, K3 adalah yang utama. Perusahaan-perusahaan di Indonesia berskala besar maupun kecil harus
        mengutamakan
        aspek perlindungan pekerja dengan menerapkan standar K3 di lingkungan kerja.
        Peraturan terbaru mengenai K3 di lingkungan kerja ini terdapat pada Peraturan Menteri Ketenagakerjaan
        (Permenaker) RI
        No. 5 Tahun 2018 tentang K3 Lingkungan Kerja (terbit pada tanggal 27 April 2018). Penerbitan Permenaker ini
        untuk
        mewujudkan lingkungan kerja yang aman, sehat, dan nyaman serta mencegah kecelakaan kerja dan penyakit akibat
        kerja
        (PAK).
    </p>
    <p id="syarat_k3">
        Sesuai Permenaker No.5 Tahun 2018 Pasal 4, tujuannya adalah untuk mewujudkan lingkungan kerja yang aman, sehat,
        dan
        nyaman dalam rangka mencegah kecelakaan kerja dan PAK.
        Mengacu kepada Peraturan Menteri Ketenagakerjaan RI No.5 Tahun 2018 tentang K3 Lingkungan Kerja Pasal 3, bahwa
        terdapat
        <b>4 syarat K3 Lingkungan Kerja yang menjadi kewajiban pengurus dan/atau pengusaha, yaitu :</b>
    </p>
    <ol class="mb-3">
        <li>Pengendalian Faktor Fisika dan Faktor Kimia agar berada di bawah Nilai Ambang Batas (NAB),</li>
        <li>Pengendalian Faktor Biologi, Faktor Ergonomi, dan Faktor Psikologi agar memenuhi standar,</li>
        <li>Penyediaan fasilitas kebersihan dan sarana hygiene di tempat kerja yang bersih dan sehat,</li>
        <li>Penyediaan personal K3 yang memenuhi kompetensi dan kewenangan K3 di bidang Lingkungan Kerja.</li>
    </ol>
    <p id="teknis_penerapan_k3">
        <b>
            Petunjuk teknis penerapan mengacu kepada Buku Pedoman Penerapan K3 Lingkungan Kerja terkait :
        </b>
    </p>
    <ol>
        <li>
            <p class="mb-0">Nilai Ambang Batas (NAB) Faktor Fisika</p>
            <p class="mb-0">Parameter:</p>
            <ul>
                <li>Iklim kerja</li>
                <li>Kebisingan</li>
                <li>Getaran</li>
                <li>Radiasi frekuensi radio/gelombang mikro</li>
                <li>Radiasi Sinar Ultra Ungu (UV)</li>
                <li>Medan magnet</li>
                <li>Pencahayaan</li>
            </ul>
        </li>
        <li>
            <p class="mb-0">Nilai Ambang Batas Faktor Kimia</p>
        </li>
        <li>
            <p class="mb-0">Indeks Pajanan Biologis (IPB)</p>
        </li>
        <li>
            <p class="mb-0">Standar Faktor Biologi</p>
            <p class="mb-0">Parameter:</p>
            <ul>
                <li>Jumlah bakteri total</li>
                <li>Jumlah jamur total</li>
                <li>Jumlah mikroorganisme patogen adalah nihil</li>
            </ul>
        </li>
        <li>
            <p class="mb-0">Standar Faktor Ergonomi</p>
            <p class="mb-0">Parameter:</p>
            <ol style="list-style-type:lower-alpha">
                <li>Pengukuran antropometri (sebagai data dasar dan acuan dalam kajian & pengembangan standar)
                </li>
                <li>Desain stasiun kerja
                    <p class="mb-0">Metode:</p>
                    <ul>
                        <li>Metode RULA (Rapid Upper Limb Assessment)</li>
                        <li>Metode REBA (Rapid Entire Body Assissment)</li>
                        <li>The Ovako Working Posture Analysis System (OWAS)</li>
                        <li>Metode Nordic Body Map (NBM)</li>
                        <li>Brieff Survey</li>
                    </ul>
                </li>
                <li>Desain manual handling (menggambarkan tingkat risiko, bukan batas maksimal beban angkat)
                </li>
            </ol>
        </li>
        </ul>
        </li>
        <li>
            <p class="mb-0">Standar Faktor Psikologi</p>
            <p class="mb-0">Untuk menilai tingkat risiko stres akibat sumber-sumber penyebab stres di tempat kerja,
                yaitu: </p>
            <ul>
                <li>Ketaksaan peran</li>
                <li>Konflik peran</li>
                <li>Beban berlebih kuantitatif</li>
                <li>Beban berlebih kualitatif</li>
                <li>Pengembangan karir</li>
                <li>Tanggung jawab terhadap orang lain</li>
            </ul>
        </li>
        <li>
            <p>Standar Kualitas Udara Dalam Ruang (KUDR), rata-rata pengukuran adalah 8 jam kerja</p>
        </li>
    </ol>
    <p>
        PT Techno Saintifik Utama bekerjsama dengan Perusahaan Jasa K3 (PJK3) Riksa Uji yang terdaftar di Kementerian
        Tenaga
        Kerja Republik Indonesia dalam melaksanakan pengambilan sampel, pengukuran, dan pengujian laboratorium dengan
        peralatan-peralatan yang digunakan terkalibrasi, metode pengujian yang telah tervalidasi, dan personal pengambil
        contoh
        uji telah memiliki sertifikat kompetensi yang sesuai.
    </p>
</div>
<div class="mb-5">
    <h4 class="text-center mb-4">Pertanyaan tentang K3</h4>
    <ol id="kewajiban_pengusaha" class="mb-2">
        <li class="mb-3">
            <h5>Apa yang Menjadi Kewajiban Pengusaha dan/atau Pengurus Terkait K3 Lingkungan Kerja?</h5>
            <p class="mb-0">Dalam Pasal 2 dan 3 dijelaskan secara gamblang bahwa setiap pengusaha dan/atau pengurus
                wajib
                melaksanakan
                syarat-syarat K3 lingkungan kerja. Syarat-syarat K3 lingkungan kerja tersebut meliputi:</p>
            <ul>
                <li>Pengendalian faktor fisika dan kimia agar berada di bawah NAB</li>
                <li>Pengendalian faktor biologi, faktor ergonomi, dan faktor psikologi kerja agar memenuhi standar</li>
                <li>Penyediaan fasilitas kebersihan dan sarana higiene di tempat kerja yang bersih dan sehat</li>
                <li>Penyediaan personil K3 yang memiliki kompetensi dan kewenangan K3 di bidang lingkungan kerja</li>
            </ul>
        </li>
        <li class="mb-3">
            <h5 id="kewajiban_syarat_k3">
                Apa yang Menjadi Kewajiban Pengusaha dan/atau Pengurus Terkait K3 Lingkungan Kerja?
            </h5>
            <p>
                Sesuai Pasal 5, pelaksanaan syarat-syarat K3 lingkungan kerja dilakukan melalui kegiatan pengukuran dan
                pengendalian
                lingkungan kerja serta penerapan higiene dan sanitasi.
                Pengukuran dan pengendalian lingkungan kerja tersebut meliputi faktor fisika, kimia, biologi, ergonomi,
                dan psikologi.
                Sementara penerapan higiene dan sanitasi meliputi bangunan tempat kerja, fasilitas kebersihan, kebutuhan
                udara, dan tata
                laksana kerumahtanggaan.
                Dalam Pasal 6, pengukuran lingkungan kerja dilakukan untuk mengetahui tingkat pajanan faktor fisika,
                kimia, biologi,
                ergonomi, dan psikologi terhadap pekerja. Pengukuran ini dilakukan sesuai dengan metode uji yang
                ditetapkan Standar
                Nasional Indonesia (SNI) atau jika metode uji belum ditetapkan dalam SNI, pengukuran dapat dilakukan
                dengan metode uji
                lainnya sesuai dengan standar yang telah divalidasi oleh lembaga berwenang.
                Sementara pengendalian lingkungan kerja yang dibahas dalam Pasal 7 dilakukan agar tingkat pajanan faktor
                fisika dan
                kimia berada di bawah NAB dan agar penerapan faktor biologi, ergonomi, dan psikologi memenuhi standar.
                Pengusaha/pengurus perusahaan harus melakukan pengendalian lingkungan kerja sesuai hierarki pengendalian
                meliputi upaya
                eliminasi, substitusi, rekayasa teknologi, administratif, dan/atau penggunaan alat pelindung diri.
            </p>
        </li>
        <li class="mb-3">
            <h5 id="5_faktor_k3">
                Bagaimana Pedoman Baru Mengenai Faktor Fisika, Kimia, Biologi, Ergonomi, dan Psikologi?
            </h5>
            <p class="mb-0"> Pengukuran dan pengendalian faktor fisika, kimia, biologi, ergonomi, dan psikologi
                meliputi:
            </p>
            <ol style="list-style-type:lower-alpha">
                <li>
                    <p class="mb-0"><b>Faktor Fisika</b></p>
                    <p>
                        Faktor fisika adalah faktor yang dapat mempengaruhi aktivitas pekerja yang bersifat fisika,
                        diakibatkan oleh penggunaan
                        mesin, peralatan, bahan, dan kondisi lingkungan di sekitar tempat kerja yang dapat mengakibatkan
                        gangguan dan PAK.
                        Pengukuran dan pengendalian faktor fisika meliputi iklim kerja, kebisingan, getaran, gelombang
                        radio atau gelombang
                        mikro, sinar Ultra Ungu (Ultra Violet), radiasi Medan Magnet Statis, tekanan udara, dan
                        pencahayaan.
                    </p>
                    <p>
                        Dalam Permenaker No.5 Tahun 2018 Pasal 9 diatur mengenai standar iklim kerja dingin, tekanan
                        dingin adalah pengeluaran
                        panas akibat pajanan terus-menerus terhadap dingin yang mempengaruhi kemampuan tubuh untuk
                        menghasilkan panas sehingga
                        mengakibatkan hipotermia (suhu tubuh di bawah 36°C).
                        Standar iklim kerja dingin ini tidak diatur dalam Permenaker No. 13 Tahun 2011. Standar iklim
                        kerja dingin meliputi
                        tabel standar di mana terdapat suhu dingin, kecepatan angin, suhu aktual yang dirasakan dan
                        tingkat bahaya. Standar
                        iklim kerja dingin juga menjelaskan tentang istirahat yang harus diambil untuk shift kerja 4
                        jam.
                    </p>
                    <p>Catatan: NAB faktor fisika tercantum pada lampiran Permenaker No. 5 Tahun 2018 poin 1.</p>
                </li>
                <li>
                    <p class="mb-0"><b>Faktor Kimia</b></p>
                    <p>
                        Faktor kimia adalah faktor yang dapat mempengaruhi aktivitas pekerja yang bersifat kimiawi,
                        diakibatkan oleh penggunaan
                        bahan kimia dan turunannya di tempat kerja yang dapat mengakibatkan penyakit pada pekerja,
                        meliputi kontaminan kimia di
                        udara berupa gas, uap, dan partikulat.
                    </p>
                    <p>
                        Pada pasal 20, pengukuran dan pengendalian faktor kimia harus dilakukan pada tempat kerja yang
                        memiliki potensi bahaya
                        bahan kimia. Pengukuran faktor kimia dilakukan terhadap pajanannya dan pekerja yang terpajan.
                    </p>
                    <p class="mb-0">Hasil pengukuran faktor kimia terhadap pajanan harus dibandingkan dengan:</p>
                    <ul class="my-1">
                        <li>
                            <b>Nilai Ambang Batas (NAB)</b> yang harus dilakukan paling singkat selama 6 jam.
                        </li>
                        <li>
                            <b>Pajanan Singkat Diperkenankan (PSD)</b> yang harus dilakukan paling singkat selama 15
                            menit sebanyak 4 kali
                            dalam durasi 8 jam kerja.
                        </li>
                        <li>
                            <b>Kadar Tertinggi Diperkenankan (KTD)</b> yang harus dilakukan menggunakan alat pembacaan
                            langsung untuk
                            memastikan tidak terlampaui.
                        </li>
                    </ul>
                    <p>
                        Sementara pengukuran faktor kimia terhadap pekerja yang terpajan dilakukan melalui pemeriksaan
                        kesehatan khusus pada
                        spesimen tubuh pekerja dan dibandingkan dengan Indeks Pajanan Biologi (IPB). IPB adalah kadar
                        konsentrasi bahan kimia
                        yang didapatkan dalam spesimen tubuh pekerja dan digunakan untuk menentukan tingkat pajanan
                        terhadap pekerja sehat yang
                        terpajan bahan kimia.
                    </p>
                    <p class="mb-0">
                        Jika hasil pengukuran terhadap pajanan melebihi NAB dan terhadap pekerja yang mengalami pajanan
                        melebihi IPB harus
                        dilakukan pengendalian, di antaranya:
                    </p>
                    <ul>
                        <li>Menghilangkan sumber potensi bahaya kimia di tempat kerja</li>
                        <li>Mengganti bahan kimia dengan bahan kimia lain yang tidak mempunyai potensi bahaya atau
                            potensi bahaya yang lebih
                            rendah</li>
                        <li>Memodifikasi proses kerja yang menimbulkan sumber potensi bahaya kimia</li>
                        <li>Mengisolasi atau membatasi pajanan sumber potensi bahaya kimia</li>
                        <li>Menyediakan sistem ventilasi</li>
                        <li>Membatasi pajanan sumber potensi bahaya kimia melalui pengaturan waktu kerja</li>
                        <li>Merotasi pekerja ke dalam proses pekerjaan yang tidak terdapat potensi bahaya bahan kimia;
                        </li>
                        <li>Penyediaan lembar data keselamatan bahan (LDKB) dan label bahan kimia</li>
                        <li>Penggunaan alat pelindung diri (APD) yang sesuai</li>
                        <li>Pengendalian lainnya sesuai dengan tingkat risiko.</li>
                    </ul>
                    <p class="mt-3">Catatan: NAB faktor kimia tercantum pada lampiran Permenaker No.5 Tahun 2018 poin 3.
                    </p>
                </li>
                <li>
                    <p class="mb-0"><b>Faktor Biologi</b></p>
                    <p>
                        Faktor biologi adalah faktor yang dapat mempengaruhi aktivitas pekerja yang bersifat biologi,
                        diakibatkan oleh makhluk
                        hidup meliputi hewan, tumbuhan dan produknya serta mikroorganisme yang dapat mengakibatkan PAK.
                        Pengukuran, pemantauan, dan pengendalian faktor biologi harus dilakukan pada tempat kerja yang
                        memiliki potensi bahaya
                        faktor biologi.
                    </p>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Potensi Bahaya</th>
                                <th>Pengukuran</th>
                                <th>Pemantauan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mikroorganisme dan/atau toksinnya (virus, bakteri, fungi, & produknya)</td>
                                <td>√</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Arthopoda dan/atau toksinnya (crustacea, arochmid, insect)</td>
                                <td></td>
                                <td>√</td>
                            </tr>
                            <tr>
                                <td>Hewan invertebrata dan/atau toksinnya (protozoa, ascaris)</td>
                                <td></td>
                                <td>√</td>
                            </tr>
                            <tr>
                                <td>Alergen dan toksin dari tumbuhan</td>
                                <td></td>
                                <td>√</td>
                            </tr>
                            <tr>
                                <td>Binatang berbisa</td>
                                <td></td>
                                <td>√</td>
                            </tr>
                            <tr>
                                <td>Binatang buas</td>
                                <td></td>
                                <td>√</td>
                            </tr>
                            <tr>
                                <td>Produk binatang dan tumbuhan yang berbahaya lainnya</td>
                                <td></td>
                                <td>√</td>
                            </tr>
                        </tbody>
                    </table>
                    <p class="mb-0">
                        Jika hasil pengukuran faktor biologi melebihi standar, maka harus dilakukan pengendalian. Semua
                        potensi bahaya kecuali
                        binatang berbisa dan buas dilakukan pengendalian dengan:
                    </p>
                    <ul>
                        <li>Menghilangkan sumber bahaya faktor biologi dari tempat kerja</li>
                        <li>Mengganti bahan dan proses kerja yang menimbulkan sumber bahaya faktor biologi</li>
                        <li>Mengisolasi atau membatasi pajanan sumber bahaya faktor biologi</li>
                        <li>Menyediakan sistem ventilasi</li>
                        <li>Mengatur atau membatasi waktu pajanan terhadap sumber bahaya faktor biologi</li>
                        <li>Menggunakan baju kerja yang sesuai</li>
                        <li>Menggunakan APD yang sesuai</li>
                        <li>Memasang rambu-rambu yang sesuai</li>
                        <li>Memberikan vaksinasi apabila memungkinkan</li>
                        <li>Meningkatkan higiene perorangan</li>
                        <li>Memberikan desinfektan penyediaan fasilitas Sanitasi berupa air mengalir dan antiseptik</li>
                        <li>Pengendalian lainnya sesuai dengan tingkat risiko.</li>
                    </ul>
                    <p class="mt-3">Catatan: NAB faktor kimia tercantum pada lampiran Permenaker No.5 Tahun 2018 poin 3.
                    </p>
                </li>
                <li>
                    <p class="mb-0"><b>Faktor Ergonomi</b></p>
                    <p>
                        Faktor ergonomi adalah faktor yang dapat mempengaruhi aktivitas pekerja, diakibatkan oleh
                        ketidaksesuaian antara
                        fasilitas kerja yang meliputi cara kerja, posisi kerja, alat kerja, dan beban angkat terhadap
                        pekerja.
                    </p>
                    <p class="mb-0">
                        Pengukuran dan pengendalian faktor ergonomi harus dilakukan pada tempat kerja yang memiliki
                        potensi bahaya faktor
                        ergonomi. Potensi bahaya faktor ergonomi meliputi:
                    </p>
                    <ul class="my-1">
                        <li>Cara kerja, posisi kerja, dan postur tubuh yang tidak sesuai saat melakukan
                            pekerjaan
                        </li>
                        <li>Desain alat kerja dan tempat kerja yang tidak sesuai dengan antropometri pekerja</li>
                        <li>Pengangkatan beban yang melebihi kapasitas kerja.</li>
                    </ul>
                    <p class="mb-0">
                        Jika hasil pengukuran terdapat potensi bahaya harus dilakukan pengendalian sehingga dapat
                        memenuhi standar. Pengendalian dilakukan dengan:
                    </p>
                    <ul>
                        <li>Menghindari posisi kerja yang janggal</li>
                        <li>Memperbaiki cara kerja dan posisi kerja</li>
                        <li>Mendesain kembali atau mengganti tempat kerja, objek kerja, bahan, desain tempat kerja, dan
                            peralatan kerja</li>
                        <li>Memodifikasi tempat kerja, objek kerja, bahan, desain tempat kerja, dan peralatan kerja</li>
                        <li>Mengatur waktu kerja dan waktu istirahat</li>
                        <li>Melakukan pekerjaan dengan sikap tubuh dalam posisi netral atau baik</li>
                        <li>Menggunakan alat bantu.</li>
                    </ul>
                    <p>
                        Faktor ergonomi ini tidak ada dalam tiga peraturan sebelumnya yang dicabut oleh Permenaker No.5
                        Tahun 2018. Faktor
                        ergonomi dijelaskan lebih lengkap dalam lampiran Permenaker No.5 tahun 2018.
                    </p>
                    <p class="mt-3">
                        Catatan: Standar faktor ergonomi tercantum pada lampiran Permenaker No.5 Tahun 2018
                        poin 6.
                    </p>
                </li>
                <li>
                    <p class="mb-0"><b>Faktor Psikologi</b></p>
                    <p>
                        Faktor psikologi adalah faktor yang mempengaruhi aktivitas pekerja, diakibatkan oleh hubungan
                        antar personal di
                        tempat kerja, peran dan tanggung jawab terhadap pekerjaan.
                    </p>
                    <p class="mb-0">
                        Pengukuran dan pengendalian faktor psikologi harus dilakukan pada tempat kerja yang memiliki
                        potensi bahaya faktor
                        psikologi. Potensi bahaya faktor psikologi meliputi:
                    </p>
                    <ul class="my-1">
                        <li>Ketidakjelasan/ketaksaan peran</li>
                        <li>Konflik peran</li>
                        <li>Beban kerja berlebih secara kualitatif</li>
                        <li>Beban kerja berlebih secara kuantitatif</li>
                        <li>Pengembangan karier</li>
                        <li>Tanggung jawab terhadap orang lain.</li>
                    </ul>
                    <p>
                        Faktor psikologi juga tidak ada dalam tiga peraturan sebelumnya. Pengukuran faktor psikologi di
                        tempat kerja
                        dilakukan menggunakan metode survei dengan 7 skala. Survei tersebut meliputi tujuan tugas dan
                        pekerjaan, tuntutan
                        pekerjaan, beban kerja, pengembangan karier, peran dalam pekerjaan, dan lain-lain.
                    </p>
                    <p>
                        Jika hasil pengukuran terdapat potensi bahaya faktor psikologi, maka harus dilakukan
                        pengendalian sesuai standar.
                        Pengendalian dilakukan setelah penilaian risiko dan didapatkan faktor yang berkontribusi.
                    </p>
                    <p class="mb-0">
                        Pengendalian melalui manajemen stres dilakukan dengan: </p>
                    <ul>
                        <li>Melakukan pemilihan, penempatan dan pendidikan pelatihan bagi pekerja</li>
                        <li>Mengadakan program kebugaran bagi pekerja</li>
                        <li>Mengadakan program konseling</li>
                        <li>Mengadakan komunikasi organisasional secara memadai</li>
                        <li>Memberikan kebebasan bagi pekerja untuk memberikan masukan dalam proses pengambilan
                            keputusan</li>
                        <li>Mengubah struktur organisasi, fungsi dan/atau dengan merancang kembali pekerjaan yang ada
                        </li>
                        <li>Menggunakan sistem pemberian imbalan tertentu</li>
                        <li>Pengendalian lainnya sesuai dengan kebutuhan.</li>
                    </ul>
                    <p class="mt-3">Catatan: Standar faktor psikologi tercantum pada lampiran Permenaker No.5 Tahun 2018
                        poin 7.</p>
                </li>
            </ol>
        </li>
        <li class="mb-3">
            <h5 id="higiene_sanitasi">
                Bagaimana Pedoman Baru Mengenai Higiene dan Sanitasi?
            </h5>
            <p>
                Higiene adalah usaha kesehatan preventif yang menitikberatkan kegiatannya kepada usaha kesehatan
                individu maupun usaha
                pribadi hidup manusia. Sedangkan sanitasi adalah usaha kesehatan preventif yang menitikberatkan kegiatan
                pada usaha
                kesehatan lingkungan hidup manusia.
            </p>
            <p class="mb-0">
                Penerapan higiene dan sanitasi yang diterapkan di tempat kerja meliputi:
            </p>
            <ol>
                <li>
                    Bangunan tempat kerja yang mencakup halaman, gedung (dinding dan langit-langit, atap, dan lantai),
                    dan bangunan
                    bawah tanah.
                </li>
                <li>
                    Fasilitas kebersihan yang mencakup toilet dan kelengkapannya; loker dan ruang ganti pakaian; tempat
                    sampah; dan
                    peralatan kebersihan.
                </li>
                <li>
                    Kebutuhan atas udara yang bersih dan sehat.
                </li>
                <li>
                    <p class="mb-0">
                        Ketatarumahtanggaan atau tata graha (housekeeping) yang baik meliputi upaya:
                    </p>
                    <ul>
                        <li>
                            Memisahkan alat, perkakas, dan bahan yang diperlukan atau digunakan
                        </li>
                        <li>
                            Menata alat, perkakas, dan bahan sesuai dengan posisi yang ditetapkan
                        </li>
                        <li>
                            Membersihkan alat, perkakas, dan bahan secara rutin
                        </li>
                        <li>
                            Menetapkan dan melaksanakan prosedur kebersihan, penempatan, dan penataan untuk alat,
                            perkakas, dan
                            bahan
                        </li>
                        <li>
                            Mengembangkan prosedur kebersihan, penempatan, dan penataan untuk alat, perkakas, dan bahan.
                        </li>
                    </ul>
                </li>
            </ol>

            <p class="mt-3">
                Catatan: Penjelasan lebih lengkap mengenai penerapan higiene dan sanitasi terdapat dalam Bab III
                Penerapan Higiene
                dan Sanitasi Pasal 26 sampai dengan Pasal 44.
            </p>
            <p>
                Hygiene Industri dikembangkan berdasarkan antisipasi, rekognisi, evaluasi dan upaya kontrol terhadap
                kondisi tempat
                kerja yang dapat menimbulkan kecelakaan kerja maupun penyakit akibat kerja. Pelaksanaannya melalui upaya
                monitoring
                lingkungan kerja dan metode analisisnya untuk mendeteksi adanya paparan terhadap pekerja, serta
                dikendalikan melalui
                kontrol secara teknik, kontrol administrative dan upaya kontrol lainnya yang fungsi dan tujuannya untuk
                mencegah
                gangguan kesehatan bagi pekerjanya. Seorang ahli hygiene Industri melakukan identifikasi bahaya,
                penilaian dan
                pengendalian risiko di tempat kerja, dan peran seorang ahli hygiene industri adalah mengidentifikasi
                akan potensi bahaya
                tersebut serta mengontrolnya melalui berbagai upaya yang sesuai.
            </p>
            <div class="border-start border-muted mx-3 px-3">
                <p>
                    “Tidak hanya kesehatan pekerja itu sendiri yang harus dikelola tetapi wajib juga lingkungan tempat
                    kerja
                    memerlukan
                    perhatian khusus untuk mendukung aktivitas bekerja yang baik. Terciptanya kondisi lingkungan tempat
                    kerja yang sehat
                    akan berdampak meningkatkan produktivitas kerja.”
                </p>
            </div>
            <p>
                Monitoring lingkungan tempat kerja dilakukan sebagai pencegahan terhadap terjadinya penyakit akibat
                lingkungan kerja
                yang tidak sehat. Selain itu, risiko gangguan kesehatan dan kecelakaan juga dapat diminimalkan.
            </p>
            <p class="mb-0">
                Salah satu program Hygiene Industrinya adalah tentang :
            </p>
            <ul>
                <li>Pemahaman akan program Higiene Industri serta peran pelaksanaan Higiene Industri.</li>
                <li>Memahami potensi bahaya yang ada di tempat kerja serta sumbernya di tempat kerja.</li>
                <li>Hazard recognition dan methode kontrol yang sesuai serta manajemen program higiene Industrinya.</li>
                <li>Hazard evaluation, exposure assessment, measurement processes dan dampak terhadap kesehatan
                    pekerjanya.</li>
                <li>Pemetaan potensi bahaya berdasarkan tempat dan intensitas / kadar baik mengenai Exposure Rating,
                    Health Effect
                    Rating yang ditimbulkan dan Qualitative Risk Ranking yang ada ditempat kerja, serta penetapan
                    potensi bahaya yg
                    perlu dimonitor dan memahami tentang peraturan perundangan yang berlaku.</li>
            </ul>
        </li>
    </ol>
</div>
@endsection