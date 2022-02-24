@extends('template\layoutadmin')

@section('title', 'Categories')

@section('contentadmin')

    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <h4>
                    <i class="fa fa-angle-right"></i>
                    Liste de Categorie
                    <a href="{{route('newcate')}}" class="btn btn-primary btn-sm" title="Nouveau Element">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <a href="{{route('listedelcate')}}" class="btn btn-danger btn-sm" title="Suprimer Element">
                        <i class="fa fa-trash"></i>
                    </a>
                </h4>
                <hr>
                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> Categorie</th>
                    <th><i class="fa fa-bookmark"></i> Date</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                </tr>
                </thead>

                {{ $catelist->links('pagination::bootstrap-4') }}
                <tbody>

                @forelse ($catelist as $liste)
                    <tr>
                        <td>
                            <a href="{{route('showcate',$liste->id)}}">
                                {{$liste->namecate}}
                            </a>
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
                            <form action="{{route('delcate',$liste->id)}}" method="post" class='form-inline'>
                                @csrf
                                @method('DELETE')

                            <a href="{{route('showcate',$liste->id)}}" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                            <a href="{{route('editcate',$liste->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>

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

