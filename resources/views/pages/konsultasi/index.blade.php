@extends('layouts.app')

@section("content")
<div class="container">
    <div style="padding: 50px 100px 50px 100px;">
        <p class="fs-2 text-left mb-3" style="font-weight: bold;">Konsultan</p>
        <div style="text-align: justify;">
            Lorem ipsum dolor sit amet consectetur. Arcu pellentesque turpis viverra volutpat hendrerit odio ut.
            Mauris eu enim ac
            mattis. Suspendisse maecenas mauris nisl at facilisi. Vestibulum consequat iaculis vulputate suscipit.
            Sed ut diam id
            cursus egestas auctor elit tellus. Dolor nunc urna id enim at. Mi viverra est enim vitae. Eleifend
            accumsan in molestie
            lacus magna faucibus nunc non. Amet ac varius mus eros ac. In fermentum eget nunc eu. Volutpat hac ut
            enim scelerisque
            et odio scelerisque eu. Condimentum egestas ac mauris eu duis erat at. Eget consectetur eleifend tellus
            mi justo massa
            suspendisse magna. Semper morbi adipiscing ut a. Nec sit sed porta sed faucibus enim tincidunt diam.
            Neque sed egestas
            etiam ut mauris viverra est proin sagittis. Sed quisque mauris scelerisque amet pellentesque posuere
            tortor urna
            adipiscing. Dui in nunc tincidunt faucibus dignissim quisque facilisis blandit. Posuere morbi bibendum
            sed viverra vel
            enim eget. Facilisi id vel quis turpis eget arcu faucibus at. Leo nisi ipsum egestas nulla sagittis
            nulla.
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col d-flex justify-content-center p-4 text-center flex-column">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 150px;">
                        <div style="min-height: 150px;" class="d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                class="bi bi-capsule my-4" viewBox="0 0 16 16">
                                <path
                                    d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429z" />
                            </svg>
                        </div>

                    </div>
                    <div class="d-flex flex-column justify-content-center flex-grow-1">

                        <p class="fs-4">Konsultasi Lingkungan</p>
                        <div class="flex-grow-1">

                            <p style="text-align:justify">PT Techno Saintifik Utama bekerjsama dengan laboratorium
                                penguji
                                lingkungan yang terakreditasi KAN dan teregistrasi KLHK dalam melaksanakan pengambilan
                                sampel, pengukuran, dan pengujian laboratorium dengan peralatan-peralatan yang digunakan
                                terkalibrasi, metode pengujian yang telah tervalidasi, dan personal pengambil contoh uji
                                telah memiliki sertifikat kompetensi yang sesuai.</p>
                        </div>

                        <button type="submit" class="btn btn-custom2" style="background-color: #032D5F;"><a
                                href="{{ route('konsultasi.lingkungan') }}"
                                style="color: white; text-decoration: none;"><b> Read More </b></a></button>
                    </div>
                </div>
                <div class="col d-flex justify-content-center border-start p-4 text-center flex-column">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 150px;">
                        <div style="min-height: 150px;" class="d-flex justify-content-center align-items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                <path
                                    d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75M7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116" />
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0" />
                            </svg>
                        </div>

                    </div>
                    <div class="d-flex flex-column justify-content-center flex-grow-1">

                        <p class="fs-4">Konsultasi K3</p>
                        <div class="flex-grow-1">

                            <p style="text-align:justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Aliquid maiores sit dolor fugit architecto nulla blanditiis,
                                eos adipisci alias odit explicabo earum commodi dignissimos et quo. Molestiae modi
                                voluptas fuga.</p>
                        </div>

                        <button type="submit" class="btn btn-custom2" style="background-color: #032D5F;"><a
                                href="{{ route('konsultasi.k3') }}" style="color: white; text-decoration: none;"><b>
                                    Read More </b></a></button>
                    </div>
                </div>
                <!---<div class="col d-flex justify-content-center border-start p-4 text-center flex-column">
                    <div class="d-flex justify-content-center align-items-center" style="min-height: 150px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                            class="bi bi-cup-straw" viewBox="0 0 16 16">
                            <path
                                d="M13.902.334a.5.5 0 0 1-.28.65l-2.254.902-.4 1.927c.376.095.715.215.972.367.228.135.56.396.56.82 0 .046-.004.09-.011.132l-.962 9.068a1.28 1.28 0 0 1-.524.93c-.488.34-1.494.87-3.01.87-1.516 0-2.522-.53-3.01-.87a1.28 1.28 0 0 1-.524-.93L3.51 5.132A.78.78 0 0 1 3.5 5c0-.424.332-.685.56-.82.262-.154.607-.276.99-.372C5.824 3.614 6.867 3.5 8 3.5c.712 0 1.389.045 1.985.127l.464-2.215a.5.5 0 0 1 .303-.356l2.5-1a.5.5 0 0 1 .65.278zM9.768 4.607A13.991 13.991 0 0 0 8 4.5c-1.076 0-2.033.11-2.707.278A3.284 3.284 0 0 0 4.645 5c.146.073.362.15.648.222C5.967 5.39 6.924 5.5 8 5.5c.571 0 1.109-.03 1.588-.085zm.292 1.756C9.445 6.45 8.742 6.5 8 6.5c-1.133 0-2.176-.114-2.95-.308a5.514 5.514 0 0 1-.435-.127l.838 8.03c.013.121.06.186.102.215.357.249 1.168.69 2.438.69 1.27 0 2.081-.441 2.438-.69.042-.029.09-.094.102-.215l.852-8.03a5.517 5.517 0 0 1-.435.127 8.88 8.88 0 0 1-.89.17zM4.467 4.884s.003.002.005.006zm7.066 0-.005.006c.002-.004.005-.006.005-.006M11.354 5a3.174 3.174 0 0 0-.604-.21l-.099.445.055-.013c.286-.072.502-.149.648-.222" />
                        </svg>
 
                    </div> --->
                    <!---<div class="d-flex flex-column justify-content-center flex-grow-1">

                        <p class="fs-4">Konsultasi AMDK</p>
                        <div class="flex-grow-1">

                            <p style="text-align:justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                                Aliquid maiores sit dolor fugit
                                architecto nulla blanditiis, eos adipisci alias odit explicabo earum commodi
                                dignissimos
                                et quo. Molestiae modi voluptas fuga.</p>
                        </div>

                        <button type="submit" class="btn btn-custom2" style="background-color: #032D5F;"><a href=""
                                style="color: white; text-decoration: none;"><b> Read More </b></a></button>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection