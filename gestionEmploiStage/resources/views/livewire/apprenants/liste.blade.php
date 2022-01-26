<div class="row p-4 pt-5">
    <div class="col-10">
        <div class="card">
            <div class="card-header bg-primary d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fas fa-users fa-2x "></i>Liste des apprenants</h3>
                <div class="card-tools d-flex align-items-center">
                    <a href="" class="btn btn-link text-white mr-4 d-block" wire:click.prevent="goToAddUser()"><i class="fas fa-user-plus"></i> Nouvel apprenants</a>
                    <div class="input-group input-group-md" style="width: 250px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                    <thead>
                        <tr>
                            <th style="width : 5%;" class="text-center"></th>
                            <th style="width : 25%;" class="text-center">Apprenants</th>
                            <th style="width : 20%;" class="text-center">Filiere</th>
                            <th style="width : 30%;" class="text-center">Promotion</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($apprenants as $apprenant)
                            <tr>
                                <td class="text-center">
                                    @if($apprenant->sexe == 'H')
                                        <img src="{{ asset('images/man.png') }}" alt="" width="24">
                                    @else
                                        <img src="{{ asset('images/woman.png') }}" alt="" width="24">
                                    @endif
                                </td>
                                <td class="text-center">{{ $apprenant->prenom }} {{ $apprenant->nom }}</td>
                                <td>{{ $apprenant->filiere->libelle}}</td>
                                <td class="text-center"><span class="tag tag-success">Promotion {{ $apprenant->promotion->libelle }}</span></td>
                                <td class="text-center">
                                    <button class="btn btn-link"><i class="far fa-edit"></i></button>
                                    <button class="btn btn-link"><i class="far fa-trash-alt" wire:click="confirmDelete('{{ $apprenant->prenom }} {{ $apprenant->nom }}', {{ $apprenant->id }})"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            {{-- <div class="card-footer">
                <div class="float-right">
                    {{ $apprenants->links() }}
                </div>
            </div> --}}
        </div>
    </div>
    <div class="col-2">
        <h3>Filtres</h3>
        <div class="form-check">
            @foreach ($promotions as $promotion)
               <input class="form-check-input" type="checkbox" value="" id="{{ $promotion->id }}" wire:model="promotionFilters.{{ $promotion->id }}">
                <label class="form-check-label" for="{{ $promotion->id }}">
                    Promotion {{ $promotion->libelle }}
                </label>
                <br><br>
            @endforeach
        </div>

            <div class="form-check">
                @foreach ($filieres as $filiere)
                <input class="form-check-input" type="checkbox" value="" id="{{ $filiere->id }}" wire:model="filiereFilters.{{ $filiere->id }}">
                    <label class="form-check-label" for="{{ $filiere->id }}">
                        {{ $filiere->libelle }}
                    </label>
                    <br><br>
                @endforeach
            </div>
    </div>
</div>

<script>
    window.addEventListener('showConfirmMessage', event=>{
        Swal.fire({
        title: event.detail.message.title,
        text: event.detail.message.text,
        icon: event.detail.message.type,
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Continuer',
        cancelButtonText: 'Annuler'
        }).then((result) => {
        if (result.isConfirmed) {
            @this.deleteApprenant(event.detail.message.data.user_id)
        }
        })
    })


    window.addEventListener('showSuccessMessage', event=>{
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: event.detail.message || 'Opération effectuée evec succès',
            showConfirmButton: false,
            timer: 3000
            }
        )
    })
</script>
    </div>
</div>

