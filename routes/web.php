<?php

//Página Principal
Route::get('/', function () {
    return view('welcome');
});

//Login e cadastro: User e Admin

Auth::routes();

//Página Inicial Usuário Padrão
Route::get('/home', 'HomeController@index')->name('home');

//Página Inicial Administrador
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');

//Página login Administrador
Route::get('/admin/login', 'Auth\AdminLoginController@index')->name('admin.login');

//Página login Administrador - Ação: Logar
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

//Usuário (Perfil, Visualizar Usuários, Apagar Usuário, Editar Senha, Editar Email)

//Página Perfil do Usuário Padrão
Route::get('/perfil', 'UserController@perfil')
    ->middleware('auth')
    ->name('perfil.usuario.atual');

//Página Usuários do Administrador
Route::get('/usuarios', 'UserController@index')
    ->name('usuarios');

//Apagar usuário do sistema
Route::get('/usuarios/apagar/{id}', 'UserController@destroy')
    ->name('usuario.apagar');

//Página editar senha do usuário
Route::get('/usuario/editarSenha', 'UserController@editarSenha')
    ->middleware('auth')
    ->name('senha.editar');

//Ação de editar senha
Route::post('/usuarios/editar/senha', 'UserController@editPassword')
    ->middleware('auth')
    ->name('senha.editar');

//Página editar email do usuário padrão
Route::get('/usuarios/editar/email', 'UserController@editarEmail')
    ->name('email.editar');

//Ação editar email
Route::post('/usuarios/editar/email', 'UserController@editEmail')
    ->name('email.editar');

//Categoria (Visualizar Categorias, Criar Categorias, Salvar Categoria, Editar Categoria, Atualizar Categoria)

//Página Categorias
Route::get('/categorias', 'CategoriaController@index')
    //->middleware('auth:admin')
    ->name('categorias');

//Página Cadastrar Nova Categoria
Route::get('/categorias/novo', 'CategoriaController@create')
    //->middleware('auth:admin')
    ->name('categorias.novo');

//Ação cadastrar categoria
Route::post('/categorias', 'CategoriaController@store')
    ->name('categorias');

//Página Editar categoria
Route::get('/categorias/editar/{id}', 'CategoriaController@edit')
    //->middleware('auth:admin')
    ->name('categorias.editar');

//Ação Editar Categoria
Route::post('/categorias/{id}', 'CategoriaController@update')
    //->middleware('auth:admin')
    ->name('categoria.editar');

//Propostas

//Página propostas usuário padrão
Route::get('/propostas', 'PropostaController@index')->name('propostas');

//Página propostas admin
Route::get('/propostas-admin','PropostaController@indexAdmin')->name('propostas-admin');

//Página cadastrar proposta
Route::get('/propostas/novo', 'PropostaController@create')->name('propostas.novo');

//Ação cadastrar Propostas
Route::post('/propostas', 'PropostaController@store')->name('propostas');

//Ação apagar propostas - administrador
Route::get('/propostas/apagar/{id}', 'PropostaController@destroy')->name('propostas.apagar');

//Ação classificar propostas
Route::post('/propostas-admin/{id}', 'PropostaController@classificar');

//Página Denunciar Proposta
Route::get('/propostas/denunciar/{id}', 'PropostaController@denunciar')->name('denunciar.proposta');

//Ação Denunciar Proposta
Route::post('/propostas/denunciar/{id}', 'PropostaController@enviarDenuncia')->name('enviar.denuncia');

//Denuncia

Route::get('/denuncias', 'DenunciaController@index')->name('denuncias');

Route::get('/denuncias/apagarProposta/{id_den}/{id_prop}', 'DenunciaController@apagarProposta');

//Para arrumar e testar

Route::get('/email', function(){
    return view('auth/passwords/email'); //Redefinir senha -> Enviar o link de redefinição de senha
});

Route::get('/reset', function(){
    return view('auth/passwords/reset'); //Redefinir senha ->E-mail, senha e confirmar senha
});

Route::get('/verify', function(){
    return view('auth/verify'); //Verifique eu endereço de email - Antes de prosseguir, verifique seu e-mail em busca de um link de verificação. 
});

//Páginas menu texto

//Página Normas
Route::get('/normas', function (){
    return view('normas');
})->name('normas');

//Página Perguntas Frequentes
Route::get('/perguntasFrequentes', function (){
    return view('perguntasFrequentes');
})->name('perguntasFrequentes');

//Página Sobre o ParticipaLavras!
Route::get('/participaLavras', function (){
    return view('participaLavras');
})->name('participaLavras');

//Página Informações
Route::get('/informacoes', function (){
    return view('informacoes');
})->name('informacoes');


