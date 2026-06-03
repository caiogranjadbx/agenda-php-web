<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adicionar Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">  
</head>

<body>

    <div class="container mt-4">
        <h1>Adicionar Contato</h1>

        <a href="{{ route('contacts.index') }}" class="btn btn-secondary mb-3">Voltar</a>

        <form action="{{ route('contacts.store')}}" method="POST"> 
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">Nome</Label>
                <input type="text" class="form-control" id="first_name" name="first_name">
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Sobrenome</label>
                <input type="text" name="last_name" id="last_name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="company" class="form-label">Empresa</label>
                <input type="text" name="company" id="company" class="form-control">
            </div>

            <div class="mb-3">
                <label for="phone1" class="form-label">Telefone</label>
                <input type="text" name="phone1" id="phone1" class="form-control">
            </div>

            <div class="mb-3">
                <label for="phone2" class="form-label">Telefone 2</label>
                <input type="text" name="phone2" id="phone2" class="form-control">
            </div>

            <div class="mb-3">
                <label for="phone3" class="form-label">Telefone 3</label>
                <input type="text" name="phone3" id="phone3" class="form-control">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control">
            </div>

            <div class="mb-3">
                <label for="birthday" class="form-label">Aniversário</label>
                <input type="text" name="birthday" id="birthday" class="form-control">
            </div>

            <div class="mb-3">
                <label for="notes" class="form-label">Notas</label>
                <input type="text" name="notes" id="notes" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Salvar Contato</button>
        </form>
    </div>
    
</body>
</html>