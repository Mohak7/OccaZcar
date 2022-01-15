@extends('template\layoutadmin')

@section('title', 'Categories')

@section('contentadmin')

    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i>
            Mise a jour de {{$category->namecate}}
            <a href="{{route('listecate')}}" class="btn btn-danger btn-sm" title="Retour">
                <i class="fa fa-backward"></i>
            </a>
        </h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="{{route('updeditcate',$category->id)}}">
                    @csrf
                    @method('PUT')
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input class=" form-control"  name="namecate" minlength="2" type="text" value=" {{$category->namecate}}" placeholder="Entre le nom de votre element"/>
                            @error('namecate')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-lg-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1" name="status"
                                           @if ($category->status != NULL)
                                           checked
                                        @endif
                                    > Activer
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-theme" type="submit">Save</button>
                            <a href="{{route('listecate')}}" class="btn btn-theme04">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /form-panel -->
    </div>
    <!-- /col-lg-12 -->



@endsection

