<!--Menu do Site-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('participaLavras') }}">ParticipaLavras!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li @if($current=="paginaInicial") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('paginaInicial') }}">Página Inicial</a>
            </li>
            <li @if($current=="participaLavras") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('participaLavras') }}">Participa Lavras!</a>
            </li>
            <li @if($current=="normas") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('normas') }}">Normas</a>
            </li>
            <li @if($current=="perguntasFrequentes") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('perguntasFrequentes') }}">Perguntas Frequentes</a>
            </li>
            <li @if($current=="cadastroProposta") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('cadastroProposta') }}">Adicionar Proposta</a>
            </li>
            <li @if($current=="visualizarPropostas") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('visualizarPropostas') }}">Propostas</a>
            </li>
            <!--Apagar isso depois-->
            <li @if($current=="categoriasPropostas") class="nav-item active" @else class="nav-item" @endif>
                <a class="nav-link" href="{{ route('categoriasPropostas') }}">Categorias Propostas</a>
            </li>
            <li class="nav-item dropdown">
                <a id="btnUsuarioMenu" class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Usuário
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('perfil') }}">Perfil</a>
                    <a class="dropdown-item" href="{{ route('alterarSenha') }}">Alterar Senha</a>
                    <a class="dropdown-item" href="{{ route('excluirConta') }}">Excluir Conta</a>
                    <a class="dropdown-item" href="#">Sair</a> <!--Vou ter que ver como sai-->
                </div>
            </li>
        </ul>
    </div>
</nav>