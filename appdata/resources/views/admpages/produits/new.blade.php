@extends('template\layoutadmin')

@section('title', 'Produit')

@section('contentadmin')

        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>
                Creation de nouvel Element
                <a href="{{route('listeprod')}}" class="btn btn-danger btn-sm" title="Retour">
                    <i class="fa fa-backward"></i>
                </a>
            </h4>
            <form method="Post" action="{{route('insertprod')}}">
                @csrf
            <div class="col-md-12">
                <div class="col-md-8">



                        <table class="table ">
                            <tr>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Categorie</label>
                                            <select id="inputState" class="form-control" name="category_id">
                                                <option value="">....Choose Category...</option>
                                                @foreach ($catelist as $cate)
                                                    {{--<option value="$cate->id">{{$cate->namecate}}</option>--}}
                                                    <option {{ old('category_id') == $cate->id ? "selected" : "" }} value="{{ $cate->id}}">{{$cate->namecate}}</option>
                                                @endforeach
                                            </select>
                                            @error('category_id')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Marque</label>
                                            <input type="text" class="form-control"  placeholder="La marque" name="marque" value="{{old('marque')}}">
                                            @error('marque')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Couleur</label>
                                            <select id="inputState" class="form-control" name="productcouleur_id">
                                                <option value="">..Choose Color...</option>
                                                @foreach ($colors as $cate)
                                                    {{--<option value="$cate->id">{{$cate->namecate}}</option>--}}
                                                    <option
                                                        {{ old('productcouleur_id') == $cate->id ? "selected" : "" }}
                                                        value="{{ $cate->id}}"
                                                        style="color:black; background-color: {{$cate->codecolor}}"
                                                    >{{$cate->nameprodcolor}}</option>
                                                @endforeach
                                            </select>
                                            @error('productcouleur_id')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">Carburant</label>
                                            <select id="inputState" class="form-control" name="carburant">
                                                <option value="">..Choose Type...</option>
                                                @foreach (carburanhelp() as $key => $cate)
                                                    <option {{ old('carburant') == $key ? "selected" : "" }} value="{{ $key}}" >{{$cate}}</option>
                                                @endforeach
                                            </select>
                                            @error('carburant')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Transmission</label>
                                            <select id="inputState" class="form-control" name="transmission">
                                                <option value="">..Choose Type...</option>
                                                @foreach (transmissionhelp() as $key => $cate)
                                                    <option {{ old('transmission') == $key ? "selected" : "" }} value="{{ $key}}" >{{$cate}}</option>
                                                @endforeach
                                            </select>
                                            @error('transmission')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Modele</label>
                                            <input type="text" class="form-control"  placeholder="Le modele" name="modele" value="{{old('modele')}}">
                                            @error('modele')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Moteur</label>
                                            <input type="text" class="form-control" placeholder="Le numero Moteur" name="puissancemonteur" value="{{old('puissancemonteur')}}">
                                            @error('puissancemonteur')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Vitesse</label>nbrvitesse
                                            <select id="inputState" class="form-control" name="nbrvitesse">
                                                <option value="">..Choose Type...</option>
                                                @foreach (nbrvitessehelp() as $key => $cate)
                                                    <option {{ old('nbrvitesse') == $key ? "selected" : "" }} value="{{ $key}}" >{{$cate}}</option>
                                                @endforeach
                                            </select>
                                            @error('nbrvitesse')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Cynlindre</label>
                                            <select id="inputState" class="form-control" name="nbrecylindre">
                                                <option value="">..Choose Type...</option>
                                                @foreach (nbrecylindrehelp() as $key => $cate)
                                                    <option {{ old('nbrecylindre') == $key ? "selected" : "" }} value="{{ $key}}" >{{$cate}}</option>
                                                @endforeach
                                            </select>
                                            @error('nbrecylindre')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Portiere</label>
                                            <select id="inputState" class="form-control" name="nbrportiereno">
                                                <option value="">..Choose nombre...</option>
                                                @foreach (nbrportierenohelp() as $key => $cate)
                                                    <option {{ old('nbrportiereno') == $key ? "selected" : "" }} value="{{ $key}}" >{{$cate}}</option>
                                                @endforeach
                                            </select>
                                            @error('nbrportiereno')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td>

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputCity">Siege</label>
                                            <select id="inputState" class="form-control" name="nbrsierge">
                                                <option value="">..Choose nombre...</option>
                                                @foreach (nbrsiergehelp() as $key => $cate)
                                                    <option {{ old('nbrsierge') == $key ? "selected" : "" }} value="{{ $key}}" >{{$cate}}</option>
                                                @endforeach
                                            </select>
                                            @error('nbrsierge')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Annee</label>
                                            <input type="text" class="form-control " placeholder="L'annee" name="annecar" value="{{old('annecar')}}"/>
                                            @error('annecar')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </td>
                            </tr>
                        </table>




                </div>
                <div class="col-md-4">
                   {{-- consommation //'Electrique','Moteur'
                    chassis // numbre
                    nbrkm // numbre
                    mordetails //texte--}}
                    <div class="form-group col-md-12">
                        <label for="inputPassword4">chassis</label>
                        <input type="text" class="form-control"  placeholder="Le Chassis" name="chassis" value="{{old('chassis')}}">
                    </div>
                     <div class="form-group col-md-12">
                        <label for="inputPassword4">nbrkm</label>
                        <input type="text" class="form-control"  placeholder="La nombre de Kilometre" name="nbrkm" value="{{old('nbrkm')}}">
                    </div>
                     <div class="form-group col-md-12">
                        <label for="inputPassword4">consommation</label>
                         <select id="inputState" class="form-control" name="consommation">
                             <option value="">..Choose nombre...</option>
                             @foreach (consommationhelp() as $key => $cate)
                                 <option {{ old('consommation') == $key ? "selected" : "" }} value="{{ $key}}" >{{$cate}}</option>
                             @endforeach
                         </select>
                    </div>
                     <div class="form-group col-md-12">
                        <label for="inputPassword4">morsdetails</label>
                         <textarea class="form-control" rows="3" name="mordetails" placeholder="Votre texte">{{old('mordetails')}}</textarea>
                    </div>




                </div>

            </div>
            </form>







        </div>
        <!-- /col-lg-12 -->









@endsection

