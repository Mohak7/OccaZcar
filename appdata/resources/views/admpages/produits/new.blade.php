@extends('template\layoutadmin')

@section('title', 'Categories')

@section('contentadmin')

        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>
                Creation de nouvel Element
                <a href="{{route('listeprod')}}" class="btn btn-danger btn-sm" title="Retour">
                    <i class="fa fa-backward"></i>
                </a>
            </h4>

            <div class="col-md-12">
                <div class="col-md-8">

                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Categorie</label>
                                <select id="inputState" class="form-control">
                                    <option selected>....Choose Category...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Marque</label>
                                <input type="text" class="form-control"  placeholder="La marque">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputZip">Couleur</label>
                                <select id="inputState" class="form-control">
                                    <option selected>..Choose Color...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCity">Carburant</label>
                                <select id="inputState" class="form-control">
                                    <option selected>..Choose Type...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Transmission</label>
                                <select id="inputState" class="form-control">
                                    <option selected>..Choose Type...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Modele</label>
                                <input type="text" class="form-control"  placeholder="Le modele">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Moteur</label>
                                <input type="text" class="form-control" placeholder="Le numero Moteur">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputZip">Vitesse</label>
                                <select id="inputState" class="form-control">
                                    <option selected>..Choose Type...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Cynlindre</label>
                                <select id="inputState" class="form-control">
                                    <option selected>..Choose Type...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputZip">Portiere</label>
                                <select id="inputState" class="form-control">
                                    <option selected>..Choose nombre...</option>
                                    <option>...</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">Siege</label>
                                <select id="inputState" class="form-control">
                                    <option selected>..Choose nombre...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputState">Annee</label>
                                <input type="text" class="form-control" placeholder="L'annee">
                            </div>
                        </div>




                        <div class="form-group">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox"> statut
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>



                </div>
                <div class="col-md-4">

                    <div class="row">
                        <!-- Product main img -->
                        <div class="col-md-5 col-md-push-2">
                            <div id="product-main-img">
                                <div class="product-preview">
                                    <img src="{{asset('assets/images/default.jpeg')}}" alt="">
                                </div>

                                <div class="product-preview">
                                    <img src="{{asset('assets/images/default.jpeg')}}" alt="">
                                </div>

                                <div class="product-preview">
                                    <img src="{{asset('assets/images/default.jpeg')}}" alt="">
                                </div>

                                <div class="product-preview">
                                    <img src="{{asset('assets/images/default.jpeg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- /Product main img -->

                        <!-- Product thumb imgs -->
                        <div class="col-md-2  col-md-pull-5">
                            <div id="product-imgs">
                                <div class="product-preview">
                                    <img src="{{asset('assets/images/default.jpeg')}}" alt="">
                                </div>

                                <div class="product-preview">
                                    <img src="{{asset('assets/images/default.jpeg')}}" alt="">
                                </div>

                                <div class="product-preview">
                                    <img src="{{asset('assets/images/default.jpeg')}}" alt="">
                                </div>

                                <div class="product-preview">
                                    <img src="{{asset('assets/images/default.jpeg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- /Product thumb imgs -->


                    <img src="{{asset('assets/images/default.jpeg')}}" class="img-thumbnail">



                </div>

            </div>







        </div>
        <!-- /col-lg-12 -->









@endsection

