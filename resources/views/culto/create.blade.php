<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igreja Kids - Check-in</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../css/culto-create.css">

</head>
<body>

<div class="container" id="checkIn">
    <div class="header">
        <div class="logo">
            <a href="../iniciar_culto" class="btn-back"><i class="fas fa-arrow-left"></i> Voltar</a>
            <h1>Igreja <span>Kids</span></h1>
        </div>
    </div>
    <div class="subheader">
        <h4>Quem está entrando?</h4>
    </div>
    <div class="form-container">
        <form method="POST" action="/culto/salvar">
            @csrf
            <div class="form-group">
                <label for="membro_id">Selecione o Membro</label>
                <select class="form-control" id="membro_id" name="membro_id" required>
                    @foreach($membrosDisponiveis as $membro)
                        <option value="{{ $membro->id }}">
                            {{ $membro->nome }} - Responsável: {{ $membro->responsavel }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-custom"><i class="fas fa-check"></i> Registrar Entrada</button>
        </form>
    </div>
</div>

</body>
</html>
