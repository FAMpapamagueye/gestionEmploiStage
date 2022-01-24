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
                            <input type="text" wire:model="newApprenant.nom" class="form-control @error('newApprenant.nom') is-invalid @enderror" placeholder="Nom">
                            @error('newApprenant.nom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Prenom</label>
                            <input type="text" wire:model="newApprenant.prenom" class="form-control @error('newApprenant.prenom') is-invalid @enderror" placeholder="Prenom">
                            @error('newApprenant.prenom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Sexe</label>
                    <select name="" id="" wire:model="newApprenant.sexe" class="form-control @error('newApprenant.sexe') is-invalid @enderror">
                        <option value="">------------</option>
                        <option value="H">Homme</option>
                        <option value="F">Femme</option>
                    </select>
                    @error('newApprenant.sexe')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Date de naissance</label>
                    <input type="date" wire:model="newApprenant.date_naissance" class="form-control @error('newApprenant.date_naissance') is-invalid @enderror">
                    @error('newApprenant.date_naissance')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label>Filiere</label>
                            <select name="" id="" wire:model="newApprenant.filiere_id" class="form-control @error('newApprenant.filiere_id') is-invalid @enderror">
                                <option value="">------------</option>
                                @foreach ($filieres as $filiere)
                                    <option value="{{ $filiere->id }}">{{ $filiere->libelle }}</option>
                                @endforeach
                            </select>
                            @error('newApprenant.filiere_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Promotion</label>
                            <select name="" id="" wire:model="newApprenant.promotion_id" class="form-control @error('') is-invalid @enderror">
                                <option value="">------------</option>
                                @foreach ($promotions as $promotion)
                                    <option value="{{ $promotion->id }}">{{ $promotion->libelle }}</option>
                                @endforeach
                            </select>
                            @error('newApprenant.prenom')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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

<script>
    window.addEventListener('showSuccessMessage', event=>{
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: event.detail.message || 'Opération effectuée evec succès',
            showConfirmButton: false,
            timer: 10000
        })
    })
</script>
