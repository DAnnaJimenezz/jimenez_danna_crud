<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title> @yield('title', 'Sistema Talento Humano') </title>
</head>
<body> 
    <main>
        <h2>
            Talentos CIDE
        </h2>
        @auth
            <p>Bienvenido {{ auth()->user()->name }}</p>            
                @if (auth()->user()->role_id == 1)
                    <p>Administrador</p>
                        <nav>
                            <menu>
                                <a href="#">Mi Cuenta</a>
                                <a href="#">Gestionar roles</a>
                            </menu>
                        </nav>                        
                @elseif (auth()->user()->role_id == 2)
                    <nav>
                        <p>Rol: Instructor</p>
                        <menu>
                            <a href{{ route('instructor') }}">Cuenta Instructor</a>
                        </menu>
                    </nav> 
                @elseif (auth()->user()->role_id == 3)
                    <p>Reclutador</p>
                    <nav>
                        <menu>
                            <a href="#">Mi Cuenta</a>
                            <a href="{{ route('user') }}">Listar usuarios</a>
                            <a href="#">Empresas</a>
                            <a href="#">Requisiciones</a>
                            <a href="#">Profesiones</a>
                            <a href="#">Ocupaciones</a>
                            <a href="#">Cargos</a>
                            <a href="#">Ver candidatos</a>                                    
                            <a href="#">Gestionar vacantes</a>
                        </menu>
                    </nav>

                @elseif (auth()->user()->role_id == 4)
                    <p>Candidato</p>
                    <nav>
                        <menu>
                            <a href="{{ route('candidate') }}">Mi Cuenta</a>
                            <a href="#">Vacantes</a>
                            <a href="#">Hoja de vida</a>
                            <a href="#">Mis postulaciones</a>
                        </menu>
                    </nav>
                @else
                    <p>Rol no encontrado</p>
                @endif
                
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button>
                        Cerrar sesión
                    </button>
                </form>
        @endauth

        @guest
            <p>Usuario invitado</p>  
            <nav>
                <menu>
                    <a href="{{ route('auth.create') }}">Crear Usuario</a>
                    <a href="{{ route('instructor.create') }}">Crear Instructor</a>
                    <a href="{{ route('candidate.create') }}">Crear Candidate</a>
                    <a href="{{ route('login') }}">Iniciar sesión</a>
                </menu>  
            </nav>
        @endguest
    </main>
    @yield('content')
</body>
</html>