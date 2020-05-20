@extends('layouts.app')

@section('content')
<!-- Widgets  -->
<div class="row">
    <div class="card col-12">
        <div class="card-header">Saúde dos Microsserviços</div>
        <div class="card-body">
        <div class="row">
            <div class="sonar-wrapper col-lg-3 col-md-3 col-sm-6 col-12" style="padding-top:0px; padding-bottom:50px">
                <div align="center" class="mb-5"><b>usuario</b></div>
                <div class="sonar-emitter bg-bad">
                    <div class="sonar-wave bg-bad"></div>
                </div>
            </div>
            <div class="sonar-wrapper col-lg-3 col-md-3 col-sm-6 col-12" style="padding-top:0px; padding-bottom:50px">
                <div align="center" class="mb-5"><b>manager</b></div>
                <div class="sonar-emitter bg-good">
                    <div class="sonar-wave bg-good"></div>
                </div>
            </div>
            
            
        </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>

        const getColor = (index) => {
            var colors = ['#9fcbed','#78ff48','#a023e7','#ffcb15','#f5a3bf','#b73d3d','#a023e7','#6e77ac','#ffcb15','#feb89f','#b7e9e0']
            return colors[index];
        }

        const generateColor = () => {
               var red = Math.floor(Math.random() * 255);
               var green = Math.floor(Math.random() * 255);
               var blue = Math.floor(Math.random() * 255);
               return "rgba("+red+","+green+","+blue+")";
        }
</script>
@endsection