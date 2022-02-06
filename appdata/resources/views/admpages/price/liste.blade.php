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
                    Liste de Prix Produits
                    <a href="{{route('newpriceprod')}}" class="btn btn-primary btn-sm" title="Nouveau Element">
                        <i class="fa fa-plus-circle"></i>
                    </a>
                    <a href="#" class="btn btn-danger btn-sm" title="Suprimer Element">
                        <i class="fa fa-trash"></i>
                    </a>
                </h4>
                <hr>

                <thead>
                <tr>
                    <th><i class="fa fa-bullhorn"></i> #</th>
                    <th><i class="fa fa-bullhorn"></i> Prix</th>
                    <th><i class="fa fa-bullhorn"></i> Produits</th>
                    <th><i class="fa fa-bookmark"></i> Date</th>
                    <th><i class=" fa fa-edit"></i> Status</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>



                    <tr>
                        <td>id</td>

                        <td class="text-right">
                            E 100'000'000.00
                        </td>

                        <td>
                            <div class="col-xs-12">
                                <div class="thumb col-xs-2">
                                    <img class="img-circle" src="{{asset('assets/images/default.jpeg')}}" width="35px" height="35px" align="">
                                </div>
                                <div class="details col-xs-10">
                                    <p>
                                        <span class="badge bg-theme">Category</span> <span class="badge bg-important">Produits Marque</span><br/>
                                        <muted>Model | Couleur |  <a href="#">More...</a></muted>
                                    </p>
                                </div>
                            </div>










                            {{--<img src="{{asset('assets/images/default.jpeg')}}" class="img-circle" width="50">--}}
                        </td>
                        <td>Date</td>
                        <td>Status</td>


                        <td>
                            <form action="#" method="post" class='form-inline'>
                                @csrf
                                @method('DELETE')
                            <a href="{{route('showprod',1)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
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



                </tbody>
            </table>







        </div>
        <!-- /content-panel -->
    </div>

@endsection
