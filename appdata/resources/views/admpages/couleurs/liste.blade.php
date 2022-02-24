@extends('template\layoutadmin')

@section('title', 'Couleur')

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
                    Liste de Couleur
                    <a href="{{route('newcolor')}}" class="btn btn-primary btn-sm" title="Nouveau Element">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <a href="{{route('listedelcolor')}}" class="btn btn-danger btn-sm" title="Suprimer Element">
                        <i class="fa fa-trash"></i>
                    </a>
                </h4>
                <hr>

                {{ $color->links('pagination::bootstrap-4') }}


                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> #</th>
                    <th><i class="fa fa-bullhorn"></i> Nom </th>
                    <th><i class="fa fa-bullhorn"></i> Code Couleur</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                </tr>
                </thead>


                <tbody>

                @forelse ($color as $liste)
                    <tr>

                        <td>{{ $liste->id }}</td>

                        <td>{{$liste->name_color}} </td>

                        <td>
                            <div style="background-color: {{$liste->code_color}}; width:20%">Color</div>
                        </td>
                        <td>
                            @if ($liste->status == 1)
                                <span class="label label-success label-mini">ON</span>
                            @else
                                <span class="label label-warning label-mini">OFF</span>
                            @endif
                        </td>
                        <td>
                            <form action="{{route('delcolor',$liste->id)}}" method="post" class='form-inline'>
                                @csrf
                                @method('DELETE')

                            <a href="{{route('editcolor',$liste->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

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

            {{ $color->links('pagination::bootstrap-4') }}
        </div>
        <!-- /content-panel -->
    </div>

@endsection
