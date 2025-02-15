<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppControler;

use App\Http\Controllers\MembrosController;
use App\Http\Controllers\CultoController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AppControler::class,'index'] 
);

Route::get('/index', [AppControler::class,'index'] 
);

Route::get('/membros', [MembrosController::class,'index'] 
);

Route::get('/membros/novo', [MembrosController::class,'create'] 
);

Route::post('/membros/salvar', [MembrosController::class,'store']);

Route::get('/membros/{id}/editar', [MembrosController::class,'edit']);

Route::put('/membros/{id}', [MembrosController::class,'update']);

Route::delete('/membros/destroy/{id}', [MembrosController::class,'destroy']);

Route::get('/index.html', function () {
    return view('index');
});


Route::get('/culto', [CultoController::class,'index'] 
);
Route::get('/culto/novo', [CultoController::class,'create'] 
);

Route::post('/culto/salvar', [CultoController::class,'store'] 
);

Route::get('/culto/saida', [CultoController::class,'saida'] 
);

Route::delete('/culto/deletar', [CultoController::class,'destroy'] 
);

Route::get('/iniciar_culto', function () {
    return view('iniciar_culto');
});

Route::get('/iniciar_culto.html', function () {
    return view('iniciar_culto');
});


// // Rota para a página de cadastro escolha
// Route::get('/cadastroescolha.html', function () {
//     return view('cadastroescolha');
// });

// // Rota para a página de check-in
// Route::get('/check_in.html', function () {
//     return view('check_in');
// });

// // Rota para a página de cadastro de criança
// Route::get('/cadastro_crianca', function () {
//     return view('cadastro_crianca');
// });

// // Rota para a página de cadastro de criança
// Route::get('/cadastro_responsavel.html', function () {
//     return view('cadastro_responsavel');
// });



