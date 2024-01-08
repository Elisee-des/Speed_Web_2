<!-- resources/views/livewire/filter-affiche.blade.php -->

<div>
    <div class="border-bottom-search" wire:loading:remove>
        <form>
            <div class="row g-3 justifiy-content-space-between">
                <div class="col-xl-12">
                    <div class="search-box">
                        <input wire:model="query" wire:keyup.debounce='filter' type="text" class="form-control search mt-4"
                            placeholder="Rechercher par filière, semestre, delèguè, session, nom du module">
                        <i class="ri-search-line search-icon"></i>
                    </div>
                </div>

                {{-- <div class="col-xl-6 d-flex align-items-center justify-content-center">
                    <div class="row g-3">
                        <div>
                            <button type="button" class="btn btn-primary w-100 btn-cool"
                                style="padding: auto;, background-color: #008069!important"
                                onclick="SearchData();"> <i
                                    class="ri-equalizer-fill me-2 align-bottom"></i>Rechercher</button>
                        </div>
                    </div>
                </div> --}}
            </div>
        </form>
    </div>

    <div class="border-bottom-search" wire:loading:remove>
        <form>
            <div class="row g-3">
                <div class="col-xl-12">
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <div>
                                <select wire:model='categorie_id' wire:change='filter' class="form-control" data-plugin="choices" data-choices
                                    data-choices-search-false name="choices-single-default" id="idStatus">
                                    <option value="" selected>Cliquez pour sectionner(Tous)</option>
                                    @foreach ($categories as $categorie)
                                    <option value='{{$categorie->id}}'>{{$categorie->nom}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--end col-->

                        {{-- <div class="col-sm-6">
                            <div>
                                <button type="button" class="btn btn-primary w-100 btn-cool" onclick="SearchData();"> <i
                                        class="ri-equalizer-fill me-2 align-bottom"></i>Filitrage automatique</button>
                            </div>
                        </div> --}}
                        <!--end col-->
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="spiner">
        <div wire:loading class="spinner-border text-primary avatar-sm w-16" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>


<!-- resources/views/livewire/search-affiche.blade.php -->

{{-- <div>
    <form wire:submit.prevent="filter">
        <div class="row g-3 justifiy-content-space-between">
            <div class="col-xl-6">
                <div class="search-box">
                    <input wire:model="query" wire:keyup.debounce.500ms='filter' type="text" class="form-control search mt-4" placeholder="Rechercher par filière, semestre, délégué, session, nom du module">
                    <i class="ri-search-line search-icon"></i>
                </div>
            </div>

            <div class="col-xl-6 d-flex align-items-center justify-content-center">
                <div class="row g-3">
                    <div>
                        <button type="submit" class="btn btn-primary w-100 btn-cool" style="padding: 7px 115px;, background-color: #008069!important">
                            <i class="ri-equalizer-fill me-2 align-bottom"></i>Rechercher
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <form>
        <div class="row g-3">
            <div class="col-xl-12">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div>
                            <select wire:model='categorie_id' wire:change='filter' class="form-control" data-plugin="choices" data-choices data-choices-search-false name="choices-single-default" id="idStatus">
                                <option value="" selected>Cliquez pour sélectionner</option>
                                @foreach ($categories as $categorie)
                                    <option value='{{$categorie->id}}'>{{$categorie->nom}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--end col-->

                    <div class="col-sm-6">
                        <div>
                            <button type="button" class="btn btn-primary w-100 btn-cool" wire:click="filter">
                                <i class="ri-equalizer-fill me-2 align-bottom"></i>Cliquez pour filtrer
                            </button>
                        </div>
                    </div>
                    <!--end col-->
                </div>
            </div>
        </div>
    </form>
</div> --}}
