

@extends('layouts.index')



@section('content')
<div class="content container-fluid">

    <div class="page-header">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="page-title">Edit Stagiaire</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{  route('home') }}">Tableau de bord</a></li>
                    <li class="breadcrumb-item"><a href="{{  route('stagiaires.index') }}">Stagiaires</a></li>
                    <li class="breadcrumb-item active">edit stagiaire</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="row shadow  mb-5 bg-body rounded">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('stagiaires.update',1) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PRENOM</label>
                                    <input type="text" name="prenom" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" name="nom" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>DATE_NAISSANCE</label>
                                    <input type="date" name="date_naissance" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>LIEU_NAISSANCE</label>
                                    <input type="text" name="lieu_naissance" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>ADRESSE</label>
                                    <input type="text" name="adresse" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>VILLE</label>
                                    <input type="text" name="ville" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>CIN</label>
                                    <input type="text" name="cin" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>TEL</label>
                                    <input type="text" name="tel" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIVEAU SCOLAIRE</label>
                                    <select class="select" name="niveau_scolaire">
                                        <option>Select Country</option>
                                        <option selected>Afghanistan</option>
                                        <option>Afghanistan</option>
                                        <option>Albania</option>
                                        <option>Algeria</option>
                                        <option>American Samoa</option>
                                        <option>Andorra</option>
                                        <option>Angola</option>
                                        <option>Anguilla</option>
                                        <option >United States</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                               

                                <div class="form-group">
                                    <label>DERNIER DIPLOME:</label>
                                    <input type="text" name="dernier_diplome" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>DERNIER ETABLISSMENT:</label>
                                    <input type="text" name="dernier_etablissement" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NUM D'INSCRIPTION</label>
                                    <input type="text" name="num_inscription" class="form-control">
                                </div>
                
                                <div class="form-group">
                                    <label>DATE D'INSCRIPTION :</label>
                                    <input type="date" name="date_inscription" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>CODE NATIONAL:</label>
                                    <input type="text" name="code_national" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>PHOTO:</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Filière:</label>
                                    <select class="select" name="id_filiere">
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
                                    <label>Année scolaie:</label>
                                    <select class="select" name="annee_scolaire">
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
                                    <label>Classe:</label>
                                    <select class="select" name="classe">
                                    <option> 1ere Annee</option>
                                    <option> 2eme Annee</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="text-end mt-4">
                            <button type="submit" class="btn btn-primary">Enregistrer <i class="fe fe-save "></i> </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 
