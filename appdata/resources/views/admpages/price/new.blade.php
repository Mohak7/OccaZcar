@extends('template\layoutadmin')

@section('title', 'Produit')

@section('contentadmin')

  













        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>
                Creation de nouvel Element
                <a href="{{route('listepriceprod')}}" class="btn btn-danger btn-sm" title="Retour">
                    <i class="fa fa-backward"></i>
                </a>
            </h4>

            Select + Afficher elements

            Select afficher liste select avec info detailler





            <div class="col-md-12">


            <form method="Post" action="#">
                @csrf
                <div class="col-md-5">
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="inputEmail4">Prix</label>
                            <input type="text">
                            @error('category_id')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="inputEmail4">Produits</label>
                            <select id="inputState" class="form-control" name="category_id">
                                <option value="">....Choose Category...</option>
                                {{--@foreach ($catelist as $cate)--}}
                                {{--<option value="$cate->id">{{$cate->namecate}}</option>--}}
                                {{--<option {{ old('category_id') == $cate->id ? "selected" : "" }} value="{{ $cate->id}}">{{$cate->namecate}}</option>--}}
                                {{--@endforeach--}}
                            </select>
                            @error('category_id')
                            <p class="alert alert-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="inputEmail4">Status</label>


                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </div>

            </form>

                <div class="col-md-7">
                    affichage des elements de la selection
                    comme dans model produits dans la liste
                </div>


                            
                               
                                    
                             
            </div>








        </div>
        <!-- /col-lg-12 -->









@endsection

