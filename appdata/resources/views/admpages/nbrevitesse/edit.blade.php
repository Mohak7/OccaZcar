@extends('template\layoutadmin')

@section('title', 'Nombre de Vitesse')

@section('contentadmin')

    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i>
            Mise a jour de nouvelle Element
            <a href="{{route('listenbrv')}}" class="btn btn-danger btn-sm" title="Retour">
                <i class="fa fa-backward"></i>
            </a>
        </h4>


        <form method="Post" action="{{route('updeditnbrv',$nbrv->id)}}">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <div class="col-md-8">

                    <table class="table ">
                        <tr>
                            <td>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Le nombre de Vitesse</label>
                                        <input type="text" class="form-control"  placeholder="Insere un nombre" name="number" value="{{$nbrv->number}}">
                                        {{--{{ old('name_color') == $key ? "selected" : "" }}--}}
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
                                        <label for="inputEmail4">L'Attribut</label>
                                        <input type="text" class="form-control"  placeholder="Inserer l'attribut" name="attribut_29" value="{{$nbrv->attribut_29}}">
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
                                        <label class="control-label col-lg-2 col-sm-3">Status</label>
                                        <div class="col-lg-10 col-sm-9">
                                            @if($nbrv->status == NULL)
                                                <input type="radio" style="width: 20px" name="status" value="0" checked/> Desactive
                                                <input type="radio" style="width: 20px" name="status" value="1" /> Active
                                            @else
                                                <input type="radio" style="width: 20px" name="status" value="0"/> Desactive
                                                <input type="radio" style="width: 20px" name="status" value="1" checked/> Active
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>


                        <tr>
                            <td>
                                <button type="submit" class="btn btn-primary">Edite</button>
                            </td>
                        </tr>
                    </table>




                </div>

            </div>
        </form>







    </div>
    <!-- /col-lg-12 -->









@endsection

