{{-- Using bootstrap model --}}

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Enregistré une nouveau résultat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('delegue.resultats.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Nom du module</label>
                        <input type="text" name="nom_module" class="form-control" placeholder="Veuillez entre un nom" id="recipient-name">
                    </div>
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Niveau d'etude</label>
                        <input type="text" name="niveau_licence" class="form-control" placeholder="Veuillez entre le niveau d'etude" id="recipient-name">
                    </div>
                    <div class="">
                        <label for="recipient-name" class="col-form-label">Session</label>
                        <input type="text" name="session" class="form-control" placeholder="Normal ou ratrappage ?" id="recipient-name">
                    </div>
                    <div class="">
                        <label for="recipient-file" class="col-form-label">Choisir des images</label>
                        <input type="file" class="form-control" id="recipient-file">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-cool"><i class="fa-sharp fa-plus" style="color: #feffff;"></i> Ajouter</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-xmark" style="color: #feffff;"></i> Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>