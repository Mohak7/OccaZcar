@extends('template\layoutadmin')

@section('title', 'Nombre de vitesse')

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
                    Nombre de vitesse
                    <a href="{{route('newnbrv')}}" class="btn btn-primary btn-sm" title="Nouveau Element">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <a href="{{route('listedelnbrv')}}" class="btn btn-danger btn-sm" title="Suprimer Element">
                        <i class="fa fa-trash"></i>
                    </a>
                </h4>
                <hr>


                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> #</th>
                    <th><i class="fa fa-bullhorn"></i> Nombre </th>
                    <th><i class="fa fa-bullhorn"></i> Attribut 29</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                </tr>
                </thead>


                <tbody>

                @forelse ($nbrv as $liste)
                    <tr>

                        <td>{{ $liste->id }}</td>

                        <td>{{$liste->number}} </td>

                        <td>{{$liste->attribut_29}}</td>
                        <td>
                            @if ($liste->status == 1)
                                <span class="label label-success label-mini">ON</span>
                            @else
                                <span class="label label-warning label-mini">OFF</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{route('delnbrv',$liste->id)}}" method="post" class='form-inline'>
                                @csrf
                                @method('DELETE')

                            <a href="{{route('editnbrv',$liste->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

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

        </div>
        <!-- /content-panel -->
    </div>

@endsection
