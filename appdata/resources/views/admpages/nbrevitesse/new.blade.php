@extends('template\layoutadmin')

@section('title', 'Nombre de Vitesse')

@section('contentadmin')

        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>
                Creation Nombre de Vitesse
                <a href="{{route('listenbrv')}}" class="btn btn-danger btn-sm" title="Retour">
                    <i class="fa fa-backward"></i>
                </a>
            </h4>
            <form method="Post" action="{{route('insertnbrv')}}">
                @csrf
            <div class="col-md-12">
                <div class="col-md-8">

                        <table class="table ">
                            <tr>
                                <td>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputPassword4">Nombre</label>
                                            <input type="text" class="form-control"  placeholder="Un nombre" name="number" value="{{old('number')}}">
                                            @error('number')
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
                                            <label for="inputEmail4">Attribut 29</label>
                                            <input type="text" class="form-control"  placeholder="Inserer votre Attribut" name="attribut_29" value="{{old('attribut_29')}}">
                                            @error('attribut_29')
                                            <p class="alert alert-danger">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <div class="form-row">
                                            <div class="form-group">
                                                <label for="agree" class="control-label col-lg-2 col-sm-3">Status</label>
                                                <div class="col-lg-10 col-sm-9">
                                                    <input type="checkbox" style="width: 20px" class="checkbox form-control"  name="status" value="1"/>
                                                </div>
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

            </div>
            </form>







        </div>
        <!-- /col-lg-12 -->









@endsection

