@extends('template\layoutadmin')

@section('title', 'Annonce')

@section('contentadmin')

    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i>
            Mise a jour de nouvelle Element
            <a href="{{route('listeannonce')}}" class="btn btn-danger btn-sm" title="Retour">
                <i class="fa fa-backward"></i>
            </a>
        </h4>


        <form method="Post" action="{{route('updeditannonce',$annonce->id)}}">
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <div class="col-md-8">

                    <table class="table ">
                        <tr>
                            <td>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Code Annonce</label>
                                        <input type="text" class="form-control"  placeholder="Le numero code d'annonce" name="codeannonce" value="{{old('codeannonce') == $annonce->codeannonce ? '' : $annonce->codeannonce}}">
                                        {{--{{ old('name_color') == $key ? "selected" : "" }}--}}
                                        @error('codeannonce')
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
                                            @if($annonce->status == NULL)
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

