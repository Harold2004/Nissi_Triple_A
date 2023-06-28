@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo inventario</title>
    <link rel="icon" type="image/png" href="{{asset('IMG/cadena.png')}}">
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="./CSS/dash.css">
    <!-- CUSTOM JS -->
    <script src="./java.script/dash.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e777a8bf29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('CSS/estilos4.css')}}" />
</head>
<body>
    <div style="display: flex;">
    <div class="menu-dashboard">
        <!-- TOP MENU -->
        <div class="top-menu">
            <div class="logo">
                <img src="./ladingPage2_files/images.png" alt="">
                <span>NISSI</span>
            </div>
            <div class="toggle">
                <i class='bx bx-menu'></i>
            </div>
        </div>
        <!-- INPUT SEARCH -->
        <div class="input-search">
            <i class='bx bx-search'></i>
            <input type="text" class="input" placeholder="Buscar">
        </div>
        <!-- MENU -->
        <div class="menu">
            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <a href="{{ route('home') }}"><span>Dashboard</span></a>

            </div>

            <div class="enlace">
                <i class="bx bx-user"></i>
                <span>Usuarios</span>
            </div>

            <div class="enlace">
                <i class="bx bx-grid-alt"></i>
                <a href="{{ route('crud.index') }}"><span>Inventario</span></a>

            </div>

            <div class="enlace">
                <i class="bx bx-message-square"></i>
                <span>Mantenimientos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-heart"></i>
                <span>Favoritos</span>
            </div>

            <div class="enlace">
                <i class="bx bx-cog"></i>
                <span>Configuración</span>
            </div>
        </div>
    </div>
        <div style="width: 100%;height: 100%;">
        @if(session("correcto"))
            <div class="alert alert-success">{{session("correcto")}}</div>
        @endif
        @if(session("incorrecto"))
            <div class="alert alert-danger">{{session("incorrecto")}}</div>
        @endif
        <script>
            var res=function(){
                var not=confirm("¿Estas seguro de eliminar?");
                return not;
            }
        </script>

        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#ModalAñadirproductos">Añadir producto</button>
        <div class="modal fade" id="ModalAñadirproductos" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Regirstro productos</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route("crud.create")}}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Codigo del producto</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtcodigo">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Nombre producto</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtnombre">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Descripcion</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtdescripcion">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Valor</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtvalor">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Id Categoria</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtcategoria">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> id marca</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtmarca">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> id inventario</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtinventario">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Registrar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID_PRODUCTO</th>
                        <th scope="col">PRODUCTO</th>
                        <th scope="col">DESCRIPCION</th>
                        <th scope="col">VALOR_UNITARIO</th>
                        <th scope="col">CATEGORIA_ID</th>
                        <th scope="col">MARCA_ID</th>
                        <th scope="col">INVENTARIO_ID</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($datos as $item)
                    <tr>
                        <th>{{$item->ID_PRODUCTO}}</th>
                        <td>{{$item->PRODUCTO}}</td>
                        <td>{{$item->DESCRIPCION}}</td>
                        <td>${{$item->VALOR_UNITARIO}}</td>
                        <td>{{$item->categoria_ID_CATEGORIA}}</td>
                        <td>{{$item->marca_ID_MARCA}}</td>
                        <td>{{$item->inventario_ID_PRODUCTO}}</td>
                        <td>
                            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal{{$item->ID_PRODUCTO}}"
                                class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="{{route("crud.delete",$item->ID_PRODUCTO)}}" onclick="return res()" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></i></a>
                        </td>
                        <!-- Button trigger modal -->

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$item->ID_PRODUCTO}}" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modificar productos</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route("crud.update")}}" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Codigo del producto</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtcodigo" value="{{$item->ID_PRODUCTO}}"readonly>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Nombre producto</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtnombre"value="{{$item->PRODUCTO}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Descripcion</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtdescripcion"value="{{$item->DESCRIPCION}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Valor</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtvalor"value="{{$item->VALOR_UNITARIO}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> Id Categoria</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtcategoria"value="{{$item->categoria_ID_CATEGORIA}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> id marca</label>
                                                <input type="number" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtmarca"value="{{$item->marca_ID_MARCA}}">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label"> id inventario</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1"
                                                    aria-describedby="emailHelp"name="txtinventario"value="{{$item->inventario_ID_PRODUCTO}}"readonly>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cerrar</button>
                                                <button type="submit" class="btn btn-primary">Modificar</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
</body>

</html>
@endsection