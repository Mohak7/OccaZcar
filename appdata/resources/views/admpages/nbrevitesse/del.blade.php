@extends('template\layoutadmin')

@section('title', 'Nombre de Vitesse')

@section('contentadmin')

    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4>
                    <i class="fa fa-angle-right"></i>
                    Nombre de Vistesse Suprimer
                    <a href="{{route('listenbrv')}}" class="btn btn-danger btn-sm" title="Retour">
                        <i class="fa fa-backward"></i>
                    </a>
                </h4>
                <hr>
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Nombre </th>
                    <th><i class="fa fa-bullhorn"></i> Attribut 29</th>
                    <th><i class="fa fa-bookmark"></i> Date supression</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                </tr>
                </thead>


                <tbody>

                @forelse ($nbrs  as $liste)
                    <tr>
                        <td> {{$liste->number}}</td>
                        <td>{{$liste->attribut_29}}</td>
                        <td>{{$liste->deleted_at}}</td>
                        <td>
                            @if ($liste->status == 1)
                                <span class="label label-success label-mini">ON</span>
                            @else
                                <span class="label label-warning label-mini">OFF</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{route('deletecompletenbrv',$liste->id)}}" method="post" class='form-inline'>
                                @csrf
                                @method('DELETE')
                                <a href="{{route('restorenbrv',$liste->id)}}" class="btn btn-warning btn-xs"><i class="fa fa-trash"></i></a>

                                <script>
                                    function ConfirmDeletebutton()
                                    {
                                        return confirm("Are you sure you want to delete defeinitely?");
                                    }
                                </script>
                                <button Onclick="return ConfirmDeletebutton();" type="submit" class=" form-group btn btn-danger btn-xs">
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
        </div>
        <!-- /content-panel -->
    </div>

@endsection

