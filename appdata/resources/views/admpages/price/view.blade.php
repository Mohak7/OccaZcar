@extends('template\layoutadmin')

@section('title', 'Produit')

@section('contentadmin')





    <div class="col-lg-12">

    @forelse ($prod as $data)
            <h4><i class="fa fa-angle-right"></i>
                Visualisation de l'Element {{$data->modele}}
                <a href="{{route('listeprod')}}" class="btn btn-danger btn-sm" title="Retour">
                    <i class="fa fa-backward"></i>
                </a>
            </h4>


            <div class="col-md-12">
                <div class="col-md-8">

                    <table class="table ">
                        <tr>
                            <td>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Categorie</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{$data->Categorieviews->namecate}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Marque</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{$data->marque}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Modele</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{$data->modele}}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Couleur</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{$data->couleurvoiture->nameprodcolor}} {{$data->couleurvoiture->codecolor}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Carburant</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{carburanhelp($data->carburant)}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Transmission</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{transmissionhelp($data->transmission)}}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>






                        <tr>
                            <td>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Moteur</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{$data->puissancemonteur}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Vitesse</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{nbrvitessehelp($data->nbrvitesse)}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Cynlindre</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{nbrecylindrehelp($data->nbrecylindre)}}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Portiere</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{nbrportierenohelp($data->nbrportiereno)}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Siege</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{nbrsiergehelp($data->nbrsierge)}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Annee</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{$data->annecar}}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">chassis</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{$data->chassis}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">nbrkm</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{$data->nbrkm}}</p>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">consommation</label>
                                        <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                        <p style="font-weight: bold">{{consommationhelp($data->consommation)}}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <div class="form-group col-md-12">
                                    <label for="inputPassword4">morsdetails</label>
                                    <a href="#" class="tbn btn-md btn-danger"><span class="fa fa-edit"></span></a>
                                    <textarea class="form-control" rows="3">{{$data->mordetails}}</textarea>
                                </div>
                            </td>
                        </tr>

                    </table>


                </div>






                <div class="col-md-4">
                    <a href="#" class="btn btn-xs btn-primary">New Image</a>
                    <br>

                    @if(count(photovoiturehelp($data->id)) != NULL)

                    @foreach (photovoiturehelp($data->id) as $photo)



                    <div class="col-sm-6">
                            <table>
                                   <tr>
                                       <td><img src="{{asset('assets/images/'.$photo->photoname)}}" class="img-thumbnail"></td>
                                       <td>
                                           <a href="" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#myModal_edit_{{ $photo->id}}"><i class="fa fa-pencil"></i></a>
                                           <a href="" class="btn btn-xs btn-danger" data-toggle="modal" data-target="#myModal_del_{{ $photo->id}}"><i class="fa fa-trash"></i></a>
                                       </td>
                                   </tr>
                            </table>
                    </div>


                    <!-- Modal delete-->
                    <div class="modal fade" id="myModal_del_{{ $photo->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Images {{ $photo->id}}</h4>
                                </div>
                                <div class="modal-body">
                                    <img src="{{asset('assets/images/'.$photo->photoname)}}" class="img-thumbnail">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Edite-->
                    <div class="modal fade" id="myModal_edit_{{$photo->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Images {{ $photo->id}}</h4>
                                </div>
                                <form action="">
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <div class="col-md-6">
                                                <img src="{{asset('assets/images/'.$photo->photoname)}}" class="img-thumbnail">
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputFile">File input</label>
                                                    <input type="file" id="exampleInputFile">
                                                    <p class="help-block">Example block-level help text here.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    @else
                        <img src="{{asset('assets/images/default.jpeg')}}" class="img-thumbnail">
                    @endif

                </div>

            </div>




        @empty
        <p>No Data find</p>
    @endforelse




    </div>
    <!-- /col-lg-12 -->









@endsection
