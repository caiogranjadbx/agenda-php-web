<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h1 class="h3 mb-1">Editar Contato</h1>
                        <p class="text-muted mb-0">
                            Atualize as informações de {{ $contact->first_name }} {{ $contact->last_name }}
                        </p>
                    </div>

                    <a href="{{ route('contacts.show', $contact) }}" class="btn btn-outline-secondary">
                        Voltar
                    </a>
                </div>

                <form action="{{ route('contacts.update', $contact) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="first_name" class="form-label">Nome</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ $contact->first_name }}" required>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="last_name" class="form-label">Sobrenome</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $contact->last_name }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="company" class="form-label">Empresa</label>
                        <input type="text" name="company" id="company" class="form-control" value="{{ $contact->company }}">
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="phone1" class="form-label">Telefone 1</label>
                            <input type="text" name="phone1" id="phone1" class="form-control" value="{{ $contact->phone1 }}" required>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="phone2" class="form-label">Telefone 2</label>
                            <input type="text" name="phone2" id="phone2" class="form-control" value="{{ $contact->phone2 }}">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="phone3" class="form-label">Telefone 3</label>
                            <input type="text" name="phone3" id="phone3" class="form-control" value="{{ $contact->phone3 }}">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $contact->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Endereço</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ $contact->address }}">
                    </div>

                    <div class="mb-3">
                        <label for="birthday" class="form-label">Aniversário</label>
                        <input type="date" name="birthday" id="birthday" class="form-control" value="{{ $contact->birthday }}">
                    </div>

                    <div class="mb-4">
                        <label for="notes" class="form-label">Notas</label>
                        <textarea name="notes" id="notes" class="form-control" rows="4">{{ $contact->notes }}</textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('contacts.show', $contact) }}" class="btn btn-outline-secondary">
                            Cancelar
                        </a>

                        <button type="submit" class="btn btn-primary">
                            Salvar Alterações
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

</body>
</html>