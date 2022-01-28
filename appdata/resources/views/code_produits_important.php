
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
                <table class="table ">
                    <tr>
                        <td>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Categorie</label>
                                    <select id="inputState" class="form-control" name="cateid">
                                        <option selected value="0">....Choose Category...</option>
                                        <option value="1">...</option>
                                    </select>
                                    <span class="custom-control-description">Toggle this custom radio</span>
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Marque</label>
                                    <input type="text" class="form-control"  placeholder="La marque">
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td>

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
                        </td>
                    </tr>


                    <tr>
                        <td>
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

                        </td>
                    </tr>

                    <tr>
                        <td>

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
                        </td>
                    </tr>

                    <tr>
                        <td>
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

                        </td>
                    </tr>


                    <tr>
                        <td>
                            <div class="form-row">
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox"> statut
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </td>
                    </tr>
                </table>

            </form>



        </div>
        <div class="col-md-4">
            <a href="#" class="btn btn-xs btn-primary ">New Image</a>

            <div id="photo-viewer"></div>
            <div id="thumbnails">
                <a href="{{asset('assets/images')}}/photo-1.jpg" class="thumb active" title="Pierre Cardin"><img src="{{asset('assets/images')}}/thumb-1.jpg" alt="Mens Polo Shirt" /></a>
                <a href="{{asset('assets/images')}}/photo-2.jpg" class="thumb" title="Pierre Cardin"><img src="{{asset('assets/images')}}/thumb-2.jpg" alt="Mens Polo Shirt" /></a>
                <a href="{{asset('assets/images')}}/photo-3.jpg" class="thumb" title="Pierre Cardin"><img src="{{asset('assets/images')}}/thumb-3.jpg" alt="Mens Polo Shirt" /></a>
                <a href="{{asset('assets/images')}}/photo-4.jpg" class="thumb" title="Pierre Cardin"><img src="{{asset('assets/images')}}/thumb-4.jpg" alt="Mens Polo Shirt" /></a>
                <a href="{{asset('assets/images')}}/photo-5.jpg" class="thumb" title="Pierre Cardin"><img src="{{asset('assets/images')}}/thumb-5.jpg" alt="Mens Polo Shirt" /></a>
                <a href="{{asset('assets/images')}}/photo-5.jpg" class="thumb" title="Pierre Cardin"><img src="{{asset('assets/images')}}/thumb-5.jpg" alt="Mens Polo Shirt" /></a>
                <a href="{{asset('assets/images')}}/photo-5.jpg" class="thumb" title="Pierre Cardin"><img src="{{asset('assets/images')}}/thumb-5.jpg" alt="Mens Polo Shirt" /></a>
            </div>

            {{--<img src="{{asset('assets/images/default.jpeg')}}" class="img-thumbnail">--}}
        </div>

    </div>







</div>
<!-- /col-lg-12 -->







