@extends('layouts.app')

@section('content')
<!-- Widgets  -->
<div class="row">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-1">
                        <i class="fa fa-spinner"></i>
                    </div>
                <div class="stat-content">
                    <div class="text-left dib">
                    <div class="stat-text"><span class="count">{{$traffic}}</span></div>
                    <div class="stat-heading">Acessos</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-3">
                        <i class="fa fa-dot-circle-o"></i>
                    </div>
                <div class="stat-content">
                    <div class="text-left dib">
                    <div class="stat-text"><span class="count">{{$cache}}</span></div>
                    <div class="stat-heading">Cache Hit</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-five">
                    <div class="stat-icon dib flat-color-2">
                        <i class="fa fa-thumbs-down"></i>
                    </div>
                <div class="stat-content">
                    <div class="text-left dib">
                    <div class="stat-text"><span class="count">{{$stopped}}</span></div>
                    <div class="stat-heading">Parados</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

<div align="center" class="col-12 mt-5"><h3 style="color:#F00;">Alertas</h3></div>
<div class="col-12 jumbotron jumbotron-fluid alerts-jumbotron mb-5 mt-2">
  <div class="container">
  <div class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
    <span><i class="fa fa-warning"></i></span>
        O microsserviço usuario está fora do ar.
    </div>
  </div>
</div>
  
</div>
@endsection

@section('scripts')
<script>

</script>
@endsection