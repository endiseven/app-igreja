<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Membro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../../css/membros-edit.css">
</head>
<body>

<div class="container" id="pagina2">
    <div class="header">
        <div class="logo">
            <a href="../" class="btn-back"><i class="fas fa-arrow-left"></i> Voltar</a>
            <h1>Igreja <span>Kids</span></h1>
        </div>
    </div>
    <div class="subheader">
        <h4>Editar Membro</h4>
    </div>
    <div class="form-container">
        <form method="POST" action="/membros/{{ $membro->id }}">
        @csrf
        @method('PUT')
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ $membro->nome }}" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" value="{{ $membro->data_nascimento }}">
            </div>
            <div class="form-group">
                <label for="responsavel">Responsável</label>
                <input type="text" class="form-control" id="responsavel" name="responsavel" value="{{ $membro->responsavel }}" placeholder="Responsável">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" value="{{ $membro->telefone }}" placeholder="Telefone">
            </div>            
            <button type="submit" class="btn btn-success btn-custom"><i class="fas fa-check"></i> Salvar Alterações</button>
        </form>
    </div>
</div>

</body>
</html>
