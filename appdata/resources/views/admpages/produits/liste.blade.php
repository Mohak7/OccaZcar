@extends('template\layoutadmin')

@section('title', 'Produits')

@section('contentadmin')

<style media="screen">
table.table tbody tr td,
table.table thead tr th,
table.table thead {
border-left: 1px solid red;
border-right: 1px solid red;
}
</style>


    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4>
                    <i class="fa fa-angle-right"></i>
                    Liste de Produits
                    <a href="{{route('newprod')}}" class="btn btn-primary btn-sm" title="Nouveau Element">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" title="Suprimer Element">
                        <i class="fa fa-trash"></i>
                    </a>
                </h4>
                <hr>

                {{ $catelist->links('pagination::bootstrap-4') }}


                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> #</th>
                    <th><i class="fa fa-bullhorn"></i> Images</th>
                    <th><i class="fa fa-bullhorn"></i> Categorie</th>
                    <th><i class="fa fa-bullhorn"></i> Marque</th>
                    <th><i class="fa fa-bookmark"></i> Date</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                </tr>
                </thead>


                <tbody>

                @forelse ($catelist as $liste)
                    <tr>

                        <td>{{ $liste->id }}</td>

                        <td>
                            {{--nous allons creer une condition pour verifier si il es nulle ou pas-- et limit sur 1--}}

                            @forelse (photovoiturehelp($liste->id,'1') as $photos)
                                <img src="{{asset('assets/images/'.$photos->photoname)}}" class="img-thumbnail" width="50">
                            @empty
                                <img src="{{asset('assets/images/default.jpeg')}}" class="img-circle" width="50">
                            @endforelse

                            {{--@forelse ($photovoiture($liste->id,'1') as $photos)--}}
                            {{--<img src="{{asset('assets/images/'.$photos->photoname)}}" class="img-thumbnail" width="50">--}}
                            {{--@empty--}}
                            {{--<img src="{{asset('assets/images/default.jpeg')}}" class="img-circle" width="50">--}}
                            {{--@endforelse--}}

                        </td>

                        <td>
                            <a href="#" class="btn btn-sm btn-default" data-toggle="modal" data-target="#myModal_{{$liste->id}}">
                                  {{$liste->Categorieviews->namecate}}
                            </a>
                            {{--{{$liste->id}}--}}

                            {{--LEs Models des elements --}}

                            <!-- Modal -->
                            <div class="modal fade" id="myModal_{{$liste->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">{{$liste->Categorieviews->namecate}}</h4>
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

                                                    @forelse (photovoiturehelp($liste->id) as $photos)
                                                        <img src="{{asset('assets/images/'.$photos->photoname)}}" class="img-thumbnail" width="100">
                                                    @empty
                                                        <img src="{{asset('assets/images/default.jpeg')}}" class="img-circle" width="100">
                                                    @endforelse
                                                </div>

                                                <div class="col-md-9">
                                                    <p>
                                                        Marque <span class="badge badgescoloradd">{{$liste->marque}}</span> |
                                                        Modele <span class="badge badgescoloradd">{{$liste->modele}}</span> |
                                                        Couleur <span class="badge badgescoloradd" style="background-color:@php echo $liste->couleurvoiture->codecolor @endphp">{{$liste->couleurvoiture->nameprodcolor}}</span>
                                                    </p>

                                                    <p>
                                                        Carburant <span class="badge badgescoloradd">{{$liste->carburant}}</span> |
                                                        Transmission <span class="badge badgescoloradd">{{$liste->transmission}}</span>
                                                    </p>

                                                    <p>
                                                        Vitesse <span class="badge badgescoloradd">{{$liste->nbrvitesse}}</span> |
                                                        Moteur <span class="badge badgescoloradd">{{$liste->puissancemonteur}}</span> |
                                                    </p>

                                                    <p>
                                                        Cynlindre <span class="badge badgescoloradd">{{$liste->nbrecylindre}}</span> |
                                                        Portiere <span class="badge badgescoloradd">{{$liste->nbrportiereno}}</span> |
                                                        Siege <span class="badge badgescoloradd">{{$liste->nbrsierge}}</span> |
                                                        Annee <span class="badge badgescoloradd">{{$liste->annecar}}</span>
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
                        <td>{{$liste->marque}}</td>
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

            {{ $catelist->links('pagination::bootstrap-4') }}
        </div>
        <!-- /content-panel -->
    </div>

@endsection
