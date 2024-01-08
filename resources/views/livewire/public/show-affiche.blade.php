<!-- resources/views/livewire/show-affiche.blade.php -->

<div class="p-container">
    <p style="font-weight: 700">Classé du plus récent au moins récent (30/page).</p>

    @foreach ($affiches as $affiche)
        <div class="container-contenu-propos">
            <a href="{{route('affiches.detail', $affiche->id)}}" class="title-option-propos">
                {{$affiche->categorie->nom}} - @if($affiche->nom != '') {{$affiche->nom}} - @endif
            </a>
            <a href="{{route('affiches.detail', $affiche->id)}}" class="title-option-propos">{{$affiche->semestre->nom}}</a>
            <h6 class="description-propos-h5"><span style="text-decoration: underline">Session</span> :
                <strong>{{$affiche->session}}</strong>
            </h6>
            <h6 class="description-propos-h6"><span style="text-decoration: underline">Université</span> :
                {{$affiche->semestre->universite->nom}}
            </h6>
            <h6 class="description-propos-h6"><span style="text-decoration: underline">Images</span> :
                {{count($affiche->images)}}
            </h6>
            <p class="">
                <span style="text-decoration: underline">Publié par les chefs</span> : {{$affiche->user->nom_prenom}}
            </p>
            <p class="description-propos">
                <span style="text-decoration: underline">Publié le</span> : {{$affiche->created_at->format('d/m/y')}}
            </p>
        </div>
    @endforeach

    {{-- {{ $affiches->links() }} --}}

    

</div>
