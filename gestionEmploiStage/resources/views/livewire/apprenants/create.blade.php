<div class="row p-4 pt-5">
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Formulaire de création d'un nouveau apprenant</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form wire:submit.prevent="addApprenant()">
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Nom</label>
                            <input type="text" wire:model="newApprenant.nom" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Prenom</label>
                            <input type="text" wire:model="newApprenant.prenom" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Sexe</label>
                    <select name="" id="" wire:model="newApprenant.sexe" class="form-control">
                        <option value="">------------</option>
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Date de naissance</label>
                    <input type="date" wire:model="newApprenant.date_naissance" class="form-control">
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Filiere</label>
                            <select name="" id="" wire:model="newApprenant.filiere_id" class="form-control">
                                <option value="">------------</option>
                                @foreach ($filieres as $filiere)
                                    <option value="{{ $filiere->id }}">{{ $filiere->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Promotion</label>
                            <select name="" id="" wire:model="newApprenant.promotion_id" class="form-control">
                                <option value="">------------</option>
                                @foreach ($promotions as $promotion)
                                    <option value="{{ $promotion->id }}">{{ $promotion->libelle }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Enregistrer</button>
              <button type="button" wire:click="goToListApprenant()" class="btn btn-danger">Retourner à la liste des apprenants</button>
            </div>
          </form>
        </div>
        <!-- /.card -->

    </div>
</div>
