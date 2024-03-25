<div>
    <div class="row justify-content-center">
        <div class="col-5 d-flex">
            <label class="visually-hidden" for="ModulSer">Cari Modul</label>
            <div class="input-group">
                <div class="input-group-text bg-primary text-white"><i class="fa-solid fa-magnifying-glass"></i></div>
                <input type="text" class="form-control" id="ModulSer" placeholder="Cari Modul"
                    wire:model='searchModul'>
            </div>
        </div>
    </div>
    @if ($this->searchModul != null)
        <div class="row">
            <div class="col">
                <h1>Anda Mencari: {{ $this->searchModul }}</h1>
            </div>
        </div>
        <div class="row pt-3 pb-5" style="background: white;">
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
                                <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assettoga.png') }}"
                                    alt="" width="150">
                            </div>
                        </div>
                        <h5 class="card-title text-primary">Pelatihan Mandiri</h5>
                        <hr class="text-warning border-5">
                        <p class="card-text text-primary">
                            Fitur ini berisi ragam topik pelatihan mandiri tentang Kurikulum Merdeka dan topik lainnya
                            yang
                            dapat diakses dengan memasukkan kunci pendaftaran (enrolment key)
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col">
                <h1>Merdeka</h1>
            </div>
        </div>
        <div class="row pt-3 pb-5 justify-content-center" style="background: white;">
            @foreach ($moduls as $modul)
                <div class="col-auto px-3 d-flex">
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
                                    <img class="img-fluid" src="{{ asset('Assets/images/asseticon/assettoga.png') }}"
                                        alt="" width="150">
                                </div>
                            </div>
                            <h5 class="card-title text-primary">Pelatihan Mandiri</h5>
                            <hr class="text-warning border-5">
                            <p class="card-text text-primary">
                                Fitur ini berisi ragam topik pelatihan mandiri tentang Kurikulum Merdeka dan topik
                                lainnya
                                yang
                                dapat diakses dengan memasukkan kunci pendaftaran (enrolment key)
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row mb-3 justify-content-center">
            <div class="col-auto">
                <a href="javascript:void(0)" class="btn btn-outline-primary"> Lihat Lebih Banyak</a>
            </div>
        </div>

    @endif
</div>
