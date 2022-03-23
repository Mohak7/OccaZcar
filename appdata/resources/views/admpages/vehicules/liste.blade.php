@extends('template\layoutadmin')

@section('title', 'Vehicule')

@section('contentadmin')

<style media="screen">
table.table tbody tr td,
table.table thead tr th,
table.table thead {
border-left: 1px solid red;
border-right: 1px solid red;
}

/*Pour masques les modification global des table*/
#tablenone.table tbody tr td,
#tablenone.table thead tr th,
#tablenone.table thead {
    border-left: 1px solid transparent;
    border-right: 1px solid transparent;
    /*background-color: red;*/
    font-weight: bold;
}
</style>


    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4>
                    <i class="fa fa-angle-right"></i>
                    Liste de Vehicule
                    <a href="{{route('newprod')}}" class="btn btn-primary btn-sm" title="Nouveau Element">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" title="Suprimer Element">
                        <i class="fa fa-trash"></i>
                    </a>
                </h4>
                <hr>

                {{ $listevh->links('pagination::bootstrap-4') }}


                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> #</th>
                    <th><i class="fa fa-bullhorn"></i> Images</th>
                    <th><i class="fa fa-bullhorn"></i> vehicule</th>
                    <th><i class="fa fa-bullhorn"></i> Prix</th>
                    <th><i class="fa fa-bookmark"></i> Date</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                </tr>
                </thead>


                <tbody>

                @forelse ($listevh as $liste)
                    <tr>

                        <td>{{ $liste->id }}</td>

                        <td>
                            {{--nous allons creer une condition pour verifier si il es nulle ou pas-- et limit sur 1--}}

                           fffffffimages

                            {{--@forelse ($photovoiture($liste->id,'1') as $photos)--}}
                            {{--<img src="{{asset('assets/images/'.$photos->photoname)}}" class="img-thumbnail" width="50">--}}
                            {{--@empty--}}
                            {{--<img src="{{asset('assets/images/default.jpeg')}}" class="img-circle" width="50">--}}
                            {{--@endforelse--}}

                        </td>

                        <td>
                            <table class="table table-hover" id="tablenone">
                                <tr class="warning">
                                    <td>
                                        {{$liste->category_id}}==
                                        {{$liste->cateviewone->id}}==
                                        {{$liste->cateviewone->namecate}}

                                    </td>
                                    <td>
                                        {{$liste->modelecar_id}}==
                                        {{$liste->modelecaroneview->id}}==
                                        {{$liste->modelecaroneview->nom_modele}}==
                                        {{$liste->modelecaroneview->marque_id}}==
                                    </td>
                                    <td>
                                        {{$liste->annonce_id}}===
                                        {{$liste->annonceoneview->id}}===
                                        {{$liste->annonceoneview->codeannonce}}
                                    </td>
                                </tr>
                                <tr class="info">
                                    <td>{{$liste->annee}}</td>

                                    <td>
                                        {{$liste->couleur_id}}===
                                        {{$liste->couleuroneview->id}}===
                                        {{$liste->couleuroneview->name_color}}===
                                        {{$liste->couleuroneview->code_color}}===
                                    </td>

                                    <td>
                                        {{$liste->transmission_id}}==
                                        {{$liste->transmission_id}}==
                                        {{$liste->transmission_id}}==
                                        {{$liste->transmission_id}}==
                                    </td>
                                </tr>
                                <tr class="warning">
                                    <td>{{$liste->carburant_id}}</td>
                                    <td>{{$liste->Kilomettre}}</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-target="#myModal_{{$liste->id}}">More..</a>
                                    </td>
                                </tr>

                            </table>








                            {{--{{$liste->id}}--}}

                            {{--LEs Models des elements --}}

                            <!-- Modal -->
                            <div class="modal fade" id="myModal_{{$liste->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel"> Categorie nom </h4>
                                        </div>
                                        <div class="modal-body">


                                            <div class="col-md-12">

                                                <div class="col-md-3">
                                                    {{--nous allons creer une condition pour verifier si il es nulle ou pas--}}
                                                    {{--@forelse (App\Models\Photoproduits::Photovoiture($liste->id) as $photos)--}}
                                                        {{--<img src="{{asset('assets/images/'.$photos->photoname)}}" class="img-thumbnail" width="100">--}}
                                                    {{--@empty--}}
                                                        {{--<img src="{{asset('assets/images/default.jpeg')}}" class="img-circle" width="100">--}}
                                                    {{--@endforelse --}}
                                                    {{----}}

                                                    {{--@forelse (photovoiturehelp($liste->id) as $photos)--}}
                                                        {{--<img src="{{asset('assets/images/'.$photos->photoname)}}" class="img-thumbnail" width="100">--}}
                                                    {{--@empty--}}
                                                        {{--<img src="{{asset('assets/images/default.jpeg')}}" class="img-circle" width="100">--}}
                                                    {{--@endforelse--}}

                                                    photo
                                                </div>

                                                <div class="col-md-9">
                                                    <p>
                                                        Categorie <span class="badge badgescoloradd"> Categorie </span> |
                                                        Marque <span class="badge badgescoloradd"> Marque </span> |
                                                        Modele <span class="badge badgescoloradd">modele</span> |
                                                        No Annonce <span class="badge badgescoloradd" style="background-color:@php echo 'red' @endphp"> red</span>
                                                    </p>

                                                    <p>
                                                        Annee <span class="badge badgescoloradd">Annee</span> |
                                                        Couleur <span class="badge badgescoloradd">Couleur</span> |
                                                        Transmission <span class="badge badgescoloradd">transmission</span>
                                                    </p>

                                                    <p>
                                                        Vitesse <span class="badge badgescoloradd">nbrvitesse</span> |
                                                        Carburant <span class="badge badgescoloradd">Carburant</span> |
                                                        Kilomettre <span class="badge badgescoloradd">Kilomettre</span> |
                                                    </p>

                                                    <p>
                                                        first_proprio <span class="badge badgescoloradd">first_proprio</span>
                                                    </p>
                                                    <p>
                                                        Description
                                                        <textarea class="form-control" rows="3">Description</textarea>
                                                    </p>
                                                </div>




                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--LEs Models des elements --}}














                        </td>
                        <td>
                            {{--Ce fonction exite que dans le fasade de laravel pour convertir les nombres en Monnaie format--}}
                            <span class="fa fa-eur"></span> {{ number_format($liste->prix, 2, ',', '.') }}
                        </td>
                        <td>{{$liste->created_at}}</td>
                        <td>
                            @if ($liste->status == 1)
                                <span class="label label-success label-mini">ON</span>
                            @else
                                <span class="label label-warning label-mini">OFF</span>
                            @endif
                        </td>
                        <td>
                            <form action="#" method="post" class='form-inline'>
                                @csrf
                                @method('DELETE')

                            <a href="{{route('showprod',$liste->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

                            <script>
                                function ConfirmDeletebutton()
                                {
                                    return confirm("Are you sure you want to delete?");
                                }
                            </script>
                            <button Onclick="return ConfirmDeletebutton();" type="submit" name="actiondelete" class=" form-group btn btn-danger btn-xs">
                            <i class="fa fa-trash-o "></i>
                            </button>
                            </form>
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="4">
                            <center>
                                <p>Empty Data</p>
                            </center>

                        </td>
                    </tr>


                @endforelse











                </tbody>
            </table>

            {{ $listevh->links('pagination::bootstrap-4') }}
        </div>
        <!-- /content-panel -->
    </div>

@endsection
