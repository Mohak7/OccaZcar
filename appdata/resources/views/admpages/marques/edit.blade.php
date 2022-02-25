@extends('template\layoutadmin')

@section('title', 'Marques')

@section('contentadmin')

    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i>
            Mise a jour de {{$marque->nom_marque}}
            <a href="{{route('listemarque')}}" class="btn btn-danger btn-sm" title="Retour">
                <i class="fa fa-backward"></i>
            </a>
        </h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="{{route('updeditmarque',$marque->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input class=" form-control"  name="nom_marque" minlength="2" type="text" value="{{old('nom_marque') == $marque->nom_marque ? '' : $marque->nom_marque}}" placeholder="Entre le nom de votre element"/>
                            @error('nom_marque')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-lg-10">
                            <div class="checkbox">
                                <label>
                                    @if($marque->status == NULL)
                                        <input type="radio" style="width: 20px" name="status" value="0" checked/> Desactive
                                        <input type="radio" style="width: 20px" name="status" value="1" /> Active
                                    @else
                                        <input type="radio" style="width: 20px" name="status" value="0"/> Desactive
                                        <input type="radio" style="width: 20px" name="status" value="1" checked/> Active
                                    @endif
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-theme" type="submit">Save</button>
                            <a href="{{route('listemarque')}}" class="btn btn-theme04">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form-panel -->
    </div>
    <!-- /col-lg-12 -->



@endsection

