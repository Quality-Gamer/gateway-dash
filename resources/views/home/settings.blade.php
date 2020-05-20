@extends('layouts.app')

@section('content')
<!-- Widgets  -->
<div class="row">
    <div class="card col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card-header">
        <ul class="nav nav-tabs">
            <li id="li-0" class="active"><a onclick="changeTab(0)" style="cursor:pointer">Microsserviços</a></li>
            <li id="li-1"><a onclick="changeTab(1)" style="cursor:pointer">Acessos</a></li>
            <li id="li-2"><a onclick="changeTab(2)" style="cursor:pointer">Cache</a></li>
        </ul>
        </div>
        <div id="tab-0" class="card-body">
                <table id="bootstrap-data-table-0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><div align="center">Microsserviço</div></th>
                            <th><div align="center">Editar</div></th>
                            <th><div align="center">Bloquear</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">usuario</td>
                            <td align="center"><button class="btn btn-info"><i class="fa fa-edit"></i></button></td>
                            <td align="center"><button class="btn btn-danger"><i class="fa fa-lock"></i></button></td>
                        </tr>
                        <tr>
                            <td align="center">manager</td>
                            <td align="center"><button class="btn btn-info"><i class="fa fa-edit"></i></button></td>
                            <td align="center"><button class="btn btn-danger"><i class="fa fa-lock"></i></button></td>
                        </tr>
                    </tbody>
                </table>
                <div style="display:flex;justify-content:space-around;margin-bottom:20px;" align="center" id="pag-0">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                        <span class="page-link">Anterior</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                        <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                        </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link">Próximo</a>
                        </li>
                    </ul>
                </nav>
                </div>
                <div align="center">
                    <button style="border-radius:300px;-webkit-border-radius:300px;-moz-border-radius:300px" class="btn btn-info"><i class="fa fa-plus"></i></button>
                </div>

        </div>

        <div id="tab-1" class="card-body d-none">
                <table id="#bootstrap-data-table-1" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><div align="center">Key</div></th>
                            <th><div align="center">Esconder</div></th>
                            <th><div align="center">Bloquear</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td id="key-id" align="center">KUpATmNSZlVqWG4ycjV1OHgvQT9EKEctS2FQZFNnVms=</td>
                            <td onclick="hideKey('#key-id')" align="center"><button class="btn btn-info"><i class="fa fa-eye"></i></button></td>
                            <td align="center"><button class="btn btn-danger"><i class="fa fa-lock"></i></button></td>
                        </tr>
                    </tbody>
                </table>
                <div style="display:flex;justify-content:space-around;margin-bottom:20px;" align="center" id="pag-1">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                        <span class="page-link">Anterior</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                        <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                        </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link">Próximo</a>
                        </li>
                    </ul>
                </nav>
                </div>
                <div align="center">
                    <button style="border-radius:300px;-webkit-border-radius:300px;-moz-border-radius:300px" class="btn btn-info"><i class="fa fa-plus"></i></button>
                </div>
        </div>

        <div id="tab-2" class="card-body d-none">
                <table id="#bootstrap-data-table-2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><div align="center">Microsserviços</div></th>
                            <th><div align="center">Action</div></th>
                            <th><div align="center">Limpar</div></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td align="center">usuario</td>
                            <td align="center">login</td>
                            <td align="center"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                    </tbody>
                </table>
                <div style="display:flex;justify-content:space-around;margin-bottom:20px;" align="center" id="pag-2">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                        <span class="page-link">Anterior</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                        <span class="page-link">
                            2
                            <span class="sr-only">(current)</span>
                        </span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                        <a class="page-link">Próximo</a>
                        </li>
                    </ul>
                </nav>
                </div>
                <div align="center">
                    <button style="border-radius:300px;-webkit-border-radius:300px;-moz-border-radius:300px" class="btn btn-danger"><i class="fa fa-trash"> <b>Tudo</b></i></button>
                </div>
        </div>

    </div>
</div>
@endsection

@section('scripts')
<script>
    const changeTab = (tab) => {
        t0 = $("#tab-0");
        t1 = $("#tab-1");
        t2 = $("#tab-2");

        if(tab == 0){
            t1.addClass("d-none");
            t2.addClass("d-none");
            t0.removeClass("d-none");
            $("#li-1").removeClass("active");
            $("#li-2").removeClass("active");
            $("#li-0").addClass("active");
        } else if(tab == 1){
            t0.addClass("d-none");
            t2.addClass("d-none");
            t1.removeClass("d-none");
            $("#li-0").removeClass("active");
            $("#li-2").removeClass("active");
            $("#li-1").addClass("active");
        } else {
            t1.addClass("d-none");
            t0.addClass("d-none");
            t2.removeClass("d-none");
            $("#li-1").removeClass("active");
            $("#li-0").removeClass("active");
            $("#li-2").addClass("active");
        }
    }

    const hideKey = (id) => {
        var has = $(id).hasClass("blur");
        
        if(has){
            $(id).removeClass("blur");
        } else {
            $(id).addClass("blur");
        }
    }
</script>
@endsection