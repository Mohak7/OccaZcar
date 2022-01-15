@extends('template\layoutadmin')

@section('title', 'Categories')

@section('contentadmin')

    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i>
            {{$category->namecate}}

            <a href="{{route('listecate')}}" class="btn btn-danger btn-sm" title="Retour">
                <i class="fa fa-backward"></i>
            </a>
        </h4>
        <div class="form-panel">
            <div class=" form">
                <div class="cmxform form-horizontal style-form" id="commentForm">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Name</label>
                        <div class="col-lg-10">
                            <input class=" form-control"  minlength="2" value="{{$category->namecate}}" readonly/>
                        </div>
                    </div>

                    <div class="form-group ">
                        <div class="col-lg-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="1"
                                    @if ($category->status != NULL)
                                    checked
                                    @endif
                                     />   Activer
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /form-panel -->
    </div>
    <!-- /col-lg-12 -->



@endsection

