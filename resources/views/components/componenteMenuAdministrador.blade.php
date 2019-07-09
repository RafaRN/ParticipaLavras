<!--Menu do Site-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('participaLavras') }}">ParticipaLavras!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('paginaInicial') }}">Página Inicial</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('analisarProposta') }}">Analisar Propostas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('classificarPropostas') }}">Classificar Propostas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('visualizarInformacoes') }}">Visualizar Informações</a>
            </li>
            <li class="nav-item dropdown">
                <a id="btnUsuarioMenu" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Administrador
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('alterarSenha') }}">Alterar Senha</a>
                    <a class="dropdown-item" href="#">Sair</a> <!--Vou ter que ver como sai-->
                </div>
            </li>
        </ul>
    </div>
</nav>

    