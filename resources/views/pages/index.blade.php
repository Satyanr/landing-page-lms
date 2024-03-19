@extends('layout.app')

@push('css')
    <style>
        .vector1 {
            /* Vector */

            position: absolute;
            right: 0vh;
            top: 31px;

        }
    </style>
@endpush

@section('content')
    <div class="container-fluid my-4">
        <div class="row align-items-end">
            <div class="col">
                <div class="vector1">
                    <img src="{{ asset('Assets/images/shape.png') }}" alt="" class="img-fluid" width="200">
                </div>
            </div>
        </div>
        <div class="row align-items-end mb-5" style="height: 70vh;">
            <div class="col">
                <div class="row">
                    <div class="col text-center"
                        style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                        <h1 class="text-white">AWAN PENGGERAK</h1>
                        <div class="row">
                            <div class="col">
                                <span class="text-white">Solusi Peningkatan Kompetensi Pendidik dan Tenaga <br> Kependidikan
                                    di
                                    Daerah Khusus/3T</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-white py-3">
            <div class="col">
                @livewire('pelatihan-livewire')
            </div>
        </div>
        <div class="row" style="background-color: white;">
            <div class="col pb-5">
                <div class="row border-5 border-top border-bottom border-primary">
                    <div class="col text-primary text-center py-4">
                        Topik bisa dipelajari secara bertahap. Pilih terlebih <br> dahulu modul yang sesuai dengan
                        kebutuhan.
                    </div>
                </div>

                <div class="row py-3 bg-white">
                    <div class="col pb-5 px-5 text-center m-auto">
                        <span class="text-primary fs-3">
                            Ekosistem <strong>Awan
                                Penggerak</strong> memudahkan pendidik dan tenaga kependidikan untuk mengakses informasi,
                            referensi,
                            serta inspirasi yang ada dalam
                            Platform Merdeka Mengajar (PMM)
                        </span>
                        <hr class="border-5 text-warning">
                        <span class="text-primary">
                            Untuk mengakses beragam informasi tersebut,
                            silahkan kunjungi fitur-fitur unggulan Awan Penggerak
                        </span>
                    </div>
                    <div class="col-auto" style="margin-left: auto;">
                        <img src="{{ asset('Assets/images/studying-people.png') }}" class="img-fluid" width="400">
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-white">
            <img class="img-fluid" src="{{ asset('Assets/images/teks.png') }}" alt="">
        </div>
        <div class="row pt-3 pb-5" style="background: linear-gradient(to bottom, white 40%, blue 50%);">
            <div class="col d-flex justify-content-center">
                <div class="card text-center mb-3 shadow p-3 mb-5 bg-body-tertiary rounded border-0" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="py-3 col-auto"
                                style="
                                width: 180px;
                                height: 180px;
                                background: radial-gradient(48.84% 48.84% at 50% 50%, rgba(181, 195, 245, 0.87) 0%, rgba(237, 241, 255, 0) 100%);
                                ">
                                <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assettoga.png') }}"
                                    alt="" width="150">
                            </div>
                        </div>
                        <h5 class="card-title text-primary">Pelatihan Mandiri</h5>
                        <hr class="text-warning border-5">
                        <p class="card-text text-primary">
                            Fitur ini berisi ragam topik pelatihan mandiri tentang Kurikulum Merdeka dan topik lainnya yang
                            dapat diakses dengan memasukkan kunci pendaftaran (enrolment key)
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card text-center mb-3 shadow p-3 mb-5 bg-body-tertiary rounded border-0" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="py-3 col-auto"
                                style="
                                width: 180px;
                                height: 180px;
                                background: radial-gradient(48.84% 48.84% at 50% 50%, rgba(181, 195, 245, 0.87) 0%, rgba(237, 241, 255, 0) 100%);
                                ">
                                <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assetassasment.png') }}"
                                    alt="" width="80">
                            </div>
                        </div>
                        <h5 class="card-title text-primary">Asesmen Murid</h5>
                        <hr class="text-warning border-5">
                        <p class="card-text text-primary">
                            Fitur ini berisi rekomendasi soal asesmen berdasarkan fase (kelas) dan mata pelajaran untuk
                            membantu Guru melakukan penilaian kepada murid
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card text-center mb-3 shadow p-3 mb-5 bg-body-tertiary rounded border-0" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="py-3 col-auto"
                                style="
                                width: 180px;
                                height: 180px;
                                background: radial-gradient(48.84% 48.84% at 50% 50%, rgba(181, 195, 245, 0.87) 0%, rgba(237, 241, 255, 0) 100%);
                                ">
                                <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assetkamus.png') }}"
                                    alt="" width="150">
                            </div>
                        </div>
                        <h5 class="card-title text-primary">Perangkat Ajar</h5>
                        <hr class="text-warning border-5">
                        <p class="card-text text-primary">
                            Fitur ini berisi rekomendasi buku bacaan elektronik, arti video pembelajaran, modul ajar yang
                            dapat menjadi inspirasi Guru saat mengajar
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card text-center mb-3 shadow p-3 mb-5 bg-body-tertiary rounded border-0" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="py-3 col-auto"
                                style="
                                width: 180px;
                                height: 180px;
                                background: radial-gradient(48.84% 48.84% at 50% 50%, rgba(181, 195, 245, 0.87) 0%, rgba(237, 241, 255, 0) 100%);
                                ">
                                <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assetform.png') }}"
                                    alt="" width="110">
                            </div>
                        </div>
                        <h5 class="card-title text-primary">CP, TP, dan ATP</h5>
                        <hr class="text-warning border-5">
                        <p class="card-text text-primary">
                            Fitur ini berisi Capaian Pembelajaran, Tujuan Pembelajaran, dan ALur fase (kelas) dan mata
                            pelajaran yang dapat dimanfaatkan oleh Guru
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card text-center mb-3 shadow p-3 mb-5 bg-body-tertiary rounded border-0" style="width: 18rem;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="py-3 col-auto"
                                style="
                                width: 180px;
                                height: 180px;
                                background: radial-gradient(48.84% 48.84% at 50% 50%, rgba(181, 195, 245, 0.87) 0%, rgba(237, 241, 255, 0) 100%);
                                ">
                                <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assetlaptop.png') }}"
                                    alt="" width="140">
                            </div>
                        </div>
                        <h5 class="card-title text-primary">Video Inspirasi</h5>
                        <hr class="text-warning border-5">
                        <p class="card-text text-primary">
                            Fitur ini berisi ragam video inspirasi yang dibuat oleh Guru dan satuan kerja Kemendikbudristek
                            untuk memahami dan menerapkan Kurikulum Merdeka
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card text-center mb-3 shadow p-3 mb-5 bg-body-tertiary rounded border-0"
                    style="width: 18rem;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="py-3 col-auto"
                                style="
                                width: 180px;
                                height: 180px;
                                background: radial-gradient(48.84% 48.84% at 50% 50%, rgba(181, 195, 245, 0.87) 0%, rgba(237, 241, 255, 0) 100%);
                                ">
                                <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assetkom.png') }}"
                                    alt="" width="150">
                            </div>
                        </div>
                        <h5 class="card-title text-primary">Komunitas Belajar</h5>
                        <hr class="text-warning border-5">
                        <p class="card-text text-primary">
                            Fitur ini merupakan fasilitas bagi para Guru untuk saling berbagi dan terhubung dengan Guru lain
                            di dalam komunitas belajar
                        </p>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card text-center mb-3 shadow p-3 mb-5 bg-body-tertiary rounded border-0"
                    style="width: 18rem;">
                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="py-3 col-auto"
                                style="
                                width: 180px;
                                height: 180px;
                                background: radial-gradient(48.84% 48.84% at 50% 50%, rgba(181, 195, 245, 0.87) 0%, rgba(237, 241, 255, 0) 100%);
                                ">
                                <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assetbook.png') }}"
                                    alt="" width="150">
                            </div>
                        </div>
                        <h5 class="card-title text-primary">Kebijakan dan Regulasi</h5>
                        <hr class="text-warning border-5">
                        <p class="card-text text-primary">
                            Fitur ini berisi ragam Kebijakan dan Regulasi (peraturan, pedoman, dan panduan) terkait dengan
                            Kurikulum Merdeka
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row pt-5" style="background-color: white;">
            <div class="col">
                <div class="row text-center" style="background-color: #F3D37F;">
                    <div class="col d-flex justify-content-center py-2">
                        <span class="text-primary fs-3 text-bg-light p-2 rounded-pill">Capaian <strong>Awan
                                Penggerak</strong> hari
                            ini *)</span>
                    </div>
                </div>
                <div class="row py-3">
                    <div class="col">
                        <div class="row mt-5 pt-5 text-center" style="background-image: url('Assets/images/map.png'); background-size: cover;">
                            <div class="col">
                                <span class="text-dark">001</span><br>
                                <span class="text-dark">Provinsi</span>
                            </div>
                            <div class="col">
                                <span class="text-dark">0001</span><br>
                                <span class="text-dark">Kabupaten</span>
                            </div>
                            <div class="col">
                                <span class="text-dark">00001</span><br>
                                <span class="text-dark">Satuan Pendidikan</span>
                            </div>
                            <div class="col">
                                <span class="text-dark">00001</span><br>
                                <span class="text-dark">Guru dan Tenaga Kependidikan</span>
                            </div>
                            <div class="col">
                                <span class="text-dark">00001</span><br>
                                <span class="text-dark">Materi Belajar</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row bg-white py-3">
            <div class="col text-center" style="height: 10vh">
                <h4>Yang Sering Di Tanyakan</h4>
            </div>
            <div class="row">
                <div class="col d-flex">
                    <div class="card border-primary" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.asassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card border-primary" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card border-primary" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col d-flex">
                    <div class="card border-primary" style="width: 18rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3">
            <div class="col text-center">
                <span class="display-6 text-white"> Pengembang dan Kontributor <strong> Awan Penggerak </strong></span>
            </div>
        </div>
    </div>
@endsection

@push('js')
@endpush
