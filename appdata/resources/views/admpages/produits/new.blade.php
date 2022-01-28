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

            <div class="col-md-12">
                <div class="col-md-8">

                    <form method="Post" action="{{route('insertprod')}}">
                        @csrf
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
                                            <select id="inputState" class="form-control">
                                                <option selected>..Choose Type...</option>
                                                <option>...</option>
                                            </select>
                                            <p class="alert alert-danger">Toggle this custom radio</p>
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
                                            <p class="alert alert-danger">Toggle this custom radio</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Moteur</label>
                                            <input type="text" class="form-control" placeholder="Le numero Moteur">
                                            <p class="alert alert-danger">Toggle this custom radio</p>
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
                                            <p class="alert alert-danger">Toggle this custom radio</p>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Cynlindre</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>..Choose Type...</option>
                                                <option>...</option>
                                            </select>
                                            <p class="alert alert-danger">Toggle this custom radio</p>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputZip">Portiere</label>
                                            <select id="inputState" class="form-control">
                                                <option selected>..Choose nombre...</option>
                                                <option>...</option>
                                            </select>
                                            <p class="alert alert-danger">Toggle this custom radio</p>
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
                                            <p class="alert alert-danger">Toggle this custom radio</p>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputState">Annee</label>
                                            <input type="text" class="form-control" placeholder="L'annee">
                                            <p class="alert alert-danger">Toggle this custom radio</p>
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









@endsection

