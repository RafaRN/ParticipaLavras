<!--Menu do Site-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('participaLavras') }}">ParticipaLavras!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cadastrar') }}">Cadastrar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('autenticar') }}">Entrar</a>
            </li>
        </ul>
    </div>
</nav>