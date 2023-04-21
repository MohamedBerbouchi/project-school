

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
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>PRENOM</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>DATE_NAISSANCE</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>LIEU_NAISSANCE</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>ADRESSE</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>VILLE</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>CIN</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>TEL</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NIVEAU SCOLAIRE</label>
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
                            </div>

                            <div class="col-md-6">
                               

                                <div class="form-group">
                                    <label>DERNIER DIPLOME:</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>DERNIER ETABLISSMENT:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>NUM D'INSCRIPTION</label>
                                    <input type="text" class="form-control">
                                </div>
                
                                <div class="form-group">
                                    <label>DATE D'INSCRIPTION :</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>CODE NATIONAL:</label>
                                    <input type="date" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>PHOTO:</label>
                                    <input type="file" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Filière:</label>
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
                                    <label>Année scolaie:</label>
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
                                    <label>Classe:</label>
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

 
