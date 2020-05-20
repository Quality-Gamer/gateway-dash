@extends('layouts.app')

@section('content')
<!-- Widgets  -->
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
         <div align="center">Requests por Microsserviço</div>
         <canvas id="myChart" width="80" height="40"></canvas>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-12">
         <div align="center">Requests por Action</div>
         <canvas id="myChart2" width="80" height="40"></canvas>
    </div>
</div>

<div class="row">
<div id="ms-list" class="card-body mt-4">
    <div>     
        <div align="center" class="card-header mb-2"><b> <h4>Lista de Microsserviços</b></h4></div>
        <div align="center"><button class="btn btn-info mb-2" onclick="changeList('ms')" style="border-radius: 300px; -webkit-border-radius:300px; -moz-border-radius:300px;"><i class="fa fa-repeat"></i></button></div>
    </div> 
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th><div align="center">Microsserviço</div></th>
                        <th><div align="center">Requests</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">usuario</td>
                        <td align="center">400</td>
                    </tr>
                    <tr>
                        <td align="center">manager</td>
                        <td align="center">410</td>
                    </tr>
                </tbody>
            </table>
</div>
<div id="action-list" class="card-body mt-4 d-none">
    <div>     
        <div align="center" class="card-header mb-2"><b> <h4>Lista de Actions</b></h4></div>
        <div align="center"><button class="btn btn-info mb-2"  onclick="changeList('ac')" style="border-radius: 300px; -webkit-border-radius:300px; -moz-border-radius:300px;"><i class="fa fa-repeat"></i></button></div>
    </div> 
            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th><div align="center">Action</div></th>
                        <th><div align="center">Microsserviço</div></th>
                        <th><div align="center">Requests</div></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td align="center">login</td>
                        <td align="center">usuario</td>
                        <td align="center">400</td>
                    </tr>
                    <tr>
                        <td align="center">store</td>
                        <td align="center">manager</td>
                        <td align="center">200</td>
                    </tr>
                    <tr>
                        <td align="center">transaction</td>
                        <td align="center">manager</td>
                        <td align="center">130</td>
                    </tr>
                    <tr>
                        <td align="center">next</td>
                        <td align="center">manager</td>
                        <td align="center">80</td>
                    </tr>
                </tbody>
            </table>
</div>
</div>
@endsection

@section('scripts')

<script>
        const changeList = (tp) => {
            if (tp == 'ac') {
                $("#action-list").addClass("d-none");
                $("#ms-list").removeClass("d-none");
            } else {
                $("#ms-list").addClass("d-none");
                $("#action-list").removeClass("d-none");
            }
        }

        const generateColor = () => {
               var red = Math.floor(Math.random() * 255);
               var green = Math.floor(Math.random() * 255);
               var blue = Math.floor(Math.random() * 255);
               return "rgba("+red+","+green+","+blue+")";
        }

        var ctx = document.getElementById('myChart').getContext('2d');
        var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
		 	datasets: [{ 
                 label: "usuario",
                 data: [400], 
		 		backgroundColor: [
                    generateColor(),
                ],
             },
            { 
                label: "manager",
                data: [410], 
		 		backgroundColor: [
                    generateColor(),
                ], 
            }],
            },
        options: {}
        });


        var ctx2 = document.getElementById('myChart2').getContext('2d');
        var myBarChart = new Chart(ctx2, {
        type: 'bar',
        data: {
		 	datasets: [{ 
                 label: "login",
                 data: [400], 
		 		backgroundColor: [
                    generateColor(),
                ],
             },
            { 
                label: "transaction",
                data: [130], 
		 		backgroundColor: [
                    generateColor(),
                ], 
            },
            { 
                label: "store",
                data: [200], 
		 		backgroundColor: [
                    generateColor(),
                ], 
            },
            { 
                label: "next",
                data: [80], 
		 		backgroundColor: [
                    generateColor(),
                ], 
            }],
            },
        options: {}
        });


        const getColor = (index) => {
            var colors = ['#9fcbed','#78ff48','#a023e7','#ffcb15','#f5a3bf','#b73d3d','#a023e7','#6e77ac','#ffcb15','#feb89f','#b7e9e0']
            return colors[index];
        }

</script>
@endsection