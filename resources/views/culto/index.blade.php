<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igreja Kids - Cadastro da Criança</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/culto-index.css">
 
</head>
<body>

<div class="container" id="pagina2">
    <div class="header">
        <div class="logo">
            <a href="iniciar_culto" class="btn-back"><i class="fas fa-arrow-left"></i> Voltar</a>
            <h1>Igreja <span>Kids</span></h1>
        </div>
    </div>
    <div class="subheader">
        <h4>Listagem de Participantes</h4>
    </div>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Nome</th>
                    <th>Data de Nascimento</th>
                    <th>Responsável</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($culto as $registro)
                    <tr>
                        <!-- <td>{{ $registro->membro->id }}</td> -->
                        <td>{{ $registro->membro->nome }}</td>
                        <td>{{ $registro->membro->data_nascimento }}</td>
                        <td>{{ $registro->membro->responsavel }}</td>
                        <td>{{ $registro->membro->telefone }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
