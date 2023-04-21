

@extends('layouts.index')



@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Modifier la Filières</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{  route('home') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{  route('stagiaires.index') }}">Filières</a></li>
                    <li class="breadcrumb-item active">Modifier la Filières</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row shadow p-3 bg-body rounded">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Niveau diplôme</label>
                                    <select class="select">
                                        <option>Select Country</option>
                                        <option>Afghanistan</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>American Samoa</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>
                                        <option>Anguilla</option>
                                        <option selected>United States</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Durée de Formation</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Niveau d'admission</label>
                                    <select class="select">
                                        <option>Select Country</option>
                                        <option>Afghanistan</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>American Samoa</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>
                                        <option>Anguilla</option>
                                        <option selected>United States</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Stage1</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Stage2</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Frais d'inscription</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Frais mansuel</label>
                                    <input type="text" class="form-control">
                                </div>
                                
                            </div>

                            <div class="col-md-6">
                            

                            <div class="form-group">
                                    <label>Frais d'examen</label>
                                    <input type="text" class="form-control">
                                    
                                </div>

                                <div class="form-group">
                                    <label>Frais de diplôme</label>
                                    <input type="text" class="form-control">
                                </div>
                
                                <div class="form-group">
                                    <label>Date crèation :</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>N° d'autorisation:</label>
                                    <input type="text" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Date qualification :</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>N° de qualification :</label>
                                    <input type="text" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label> Date accréditation:</label>
                                    <input type="date" class="form-control">

                                </div>
                                <div class="form-group">
                                    <label>N° accréditation:</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary">Enregistrer la Filières <i class="fe fe-save "></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


