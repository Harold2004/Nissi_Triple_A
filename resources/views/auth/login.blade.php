@extends('layouts.app', ['class' => 'login-page', 'page' => __('Inicir Sessions'), 'contentClass' => 'login-page'])

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css')}}" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{('CSS/Validaciones.css')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{('/favicon-32x32.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e777a8bf29.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('CSS/estilos4.css')}}" />
    <title>Inicio sesion</title>
</head>
<body>
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Inicio</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up" ><label for="tab-2" class="tab">Registro</label>
		<div class="login-form">
			<div class="sign-in-htm">
                <div class="text">
                    <p class="p1">Inicia sesion con tu cuenta Nissi Triple A</p>
                    </div>
                <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="group">
                        <label for="pass" class="label">Correo electronico</label>
                        <input id="email" type="email" class="input" class="form-control @error('email') is-invalid @enderror" class="input"name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Vamostilin@gmail.com">              
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>    
                    <div class="group">
                        <label for="password" class="label">Contraseña</label>
                        <input id="password" type="password" class="input"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"placeholder="*******">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" name="remember"checked {{ old('remember') ? 'checked' : '' }}>
                        <label for="check"><span class="icon"></span> remember me</label>
                    </div>
                    <div class="group">
                    <button type="submit" class="button-1">Iniciar Sesion</button>
                    </div>
                    <div class="hr"></div>
                        <div class="foot-lnk" style="display: flex;justify-content: space-around;">
                        <a href="{{ route('password.request') }}" style="color: #ffffff;font-size:18px;"> ¿Se te olvido la contraseña?</a>
                        <label for="tab-2" style="color: #f58402;font-size:20px;"> Registrarme</label>
                        </div>
                </div>
                    <div class="col-lg-6 col-12 mx-auto">
                            @if(Session::has('Felicidades'))
                            <div class="alert alert-success text-center">
                                {{Session::get('Felicidades')}}
                            </div>
                            @endif 
            </form>
			<div class="sign-up-htm">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf  
                    <div class="group">                    
                        <label for="pass" class="label">Nombre</label>
                        <input id="name" type="text" class="input" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Tilin">>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Telefono</label>
                        <input id="name" type="text" class="input" class="form-control @error('name') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required autocomplete="telefono" autofocus placeholder="5555555">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Dirrecion</label>
                        <input id="name" type="text" class="input" class="form-control @error('name') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus placeholder="Calle #57B...">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                    <label for="user" class="label">Correo electronico</label>
                    <input id="email" type="email"class="input" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"placeholder="Vamostilin@gmail.com">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                    <label for="password" class="label">Contraseña</label>
                    <input id="password" type="password"class="input" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"placeholder="******">
                        @error('Contraseña_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="group">
                    <label for="password" class="label">Repetir contraseña</label>
                    <input id="password-confirm" type="password" class="input" class="form-control" name="password_confirmation" required autocomplete="new-password"placeholder="******">
                    </div>
                    <div class="group">
                    <button type="submit"  class="button-2" >Registrarme</button>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                    <label for="tab-1" style="color: #f58402;font-size:18px;"> ¿ya tienes cuenta?</label>
                    </div>
                </form>
                </div>
			</div>
		</div>
	</div>
</div>

@endsection
