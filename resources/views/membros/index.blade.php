<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igreja Kids - Cadastro da Criança</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/membros-index.css">
</head>
<body>

<div class="container" id="pagina2">
    <div class="header">
        <div class="logo">
            <a href="../index" class="btn-back"><i class="fas fa-arrow-left"></i> Voltar</a>
            <h1>Igreja <span>Kids</span></h1>
        </div>
    </div>
    <div class="subheader">
        <h4>Listagem de Membros</h4>
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
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($membros as $membro)
                    <tr>
                        <!-- <td>{{ $membro->id }}</td> -->
                        <td>{{ $membro->nome }}</td>
                        <td>{{ $membro->data_nascimento }}</td>
                        <td>{{ $membro->responsavel }}</td>
                        <td>{{ $membro->telefone }}</td>
                        <td>
                            
                        <a href="/membros/{{ $membro->id }}/editar" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Editar</a>

                            <form action="/membros/destroy/{{ $membro->id }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
