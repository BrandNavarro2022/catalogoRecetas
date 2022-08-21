@extends('layout')

@section('content')
    <!-- Page Content -->
    <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/bootstrap/themes/382017/component_slider.css?1619113824">
    <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/bootstrap/themes/382017/component_instagram.css?1619113824">
    <link rel="stylesheet" type="text/css" href="https://assets.jumpseller.com/store/bootstrap/themes/382017/component_testimonials.css?1619113824">
    <div id="components">
        <div id="component-76145">
            <div id="featured-products-76145" class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="page-header">Todos las Recetas</h2>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    @foreach ($recetas as $receta)
                    <div class="col-md-3 col-6 product-block">
                        <div class="product-card">
                            <a href="{{ route('verReceta',$receta->id) }}">
                                <img class="img-fluid img-portfolio img-hover mb-3" src="images/{{$receta->imagen}}"  alt="{{$receta->nombre}}">
                            </a>
                            <div >
                                <h5 class="text-center title"><a href="{{ route('verReceta',$receta->id) }}">{{ $receta->nombre }}</a></h5>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- /.row -->
            </div>
        </div>
    </div>
    <style>
        .product-block {
            padding: 20px;
        }
        .product-card {
            border: 1px solid #0D84FD;
            padding: 5px;
            border-radius: 10px;
        }
        .fav-btn{
            margin-left: 15px;
        }
        .title{
            margin: 10px 0;
            font-size:15px;
        }
        img{
            display: block;
            margin: 0 auto;
            height: 200px !important;
            width: auto;
        }
    </style>
@endsection
