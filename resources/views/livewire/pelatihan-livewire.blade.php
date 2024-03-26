<div>
    <div class="row justify-content-center">
        <div class="col-5 d-flex">
            <label class="visually-hidden" for="ModulSer">Cari Modul</label>
            <div class="input-group">
                <div class="input-group-text bg-primary text-white"><i class="fa-solid fa-magnifying-glass"></i></div>
                <input type="text" class="form-control" id="ModulSer" placeholder="Cari Modul" wire:model='searchModul'
                    wire:input='resetPage'>
            </div>
        </div>
    </div>
    @if ($this->searchModul != null)
        <div class="row">
            <div class="col">
                <h1>Anda Mencari: {{ $this->searchModul }}</h1>
            </div>
        </div>
        <div class="row pt-3" style="background: white;">
            @forelse ($moduls as $modul)
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
                            <h5 class="card-title text-primary">{{ $modul->shortname }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $modul->fullname }}</h6>
                            <hr class="text-warning border-5">
                            <p class="card-text text-primary">
                                {!! $modul->summary !!}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col text-center">
                    <h1 class="text-secondary"><i class="fa-solid fa-triangle-exclamation"></i> Modul Tidak Ditemukan
                    </h1>
                </div>
            @endforelse
        </div>
    @else
        <div class="row">
            <div class="col">
                <h1>Merdeka</h1>
            </div>
        </div>
        <div class="row pt-3 justify-content-center" style="background: white;">
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
                            <h5 class="card-title text-primary">{{ $modul->shortname }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $modul->fullname }}</h6>
                            <hr class="text-warning border-5">
                            <p class="card-text text-primary">
                                {!! $modul->summary !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if ($moduls->hasMorePages())
            <div class="row mb-3 justify-content-center" wire:loading.remove wire:target='loadMore'>
                <div class="col-auto">
                    <a href="javascript:void(0)" class="btn btn-outline-primary" wire:click='loadMore'> Lihat Lebih
                        Banyak</a>
                </div>
            </div>
            <div class="row mb-3 justify-content-center">
                <div class="col-auto" wire:loading wire:target='loadMore'>
                    <div class="loader"></div>
                </div>
            </div>
        @endif

    @endif
</div>
