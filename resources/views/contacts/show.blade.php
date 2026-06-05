<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-start mb-4">
                    <div class="d-flex align-items-center">
                        <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 56px; height: 56px; font-size: 24px;">
                            {{ strtoupper(substr($contact->first_name, 0, 1)) }}
                        </div>

                        <div>
                            <h1 class="h3 mb-1">
                                {{ $contact->first_name }} {{ $contact->last_name }}

                                @if ($contact->favorite)
                                    <span class="text-warning">★</span>
                                @endif
                            </h1>

                            @if ($contact->company)
                                <p class="text-muted mb-0">{{ $contact->company }}</p>
                            @else
                                <p class="text-muted mb-0">Contato pessoal</p>
                            @endif
                        </div>
                    </div>

                    <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">
                        Voltar
                    </a>
                </div>

                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <div class="border rounded p-3 h-100 bg-white">
                            <p class="text-muted mb-1">Telefone 1</p>
                            <strong>{{ $contact->phone1 }}</strong>
                        </div>
                    </div>

                    @if ($contact->phone2)
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100 bg-white">
                                <p class="text-muted mb-1">Telefone 2</p>
                                <strong>{{ $contact->phone2 }}</strong>
                            </div>
                        </div>
                    @endif

                    @if ($contact->phone3)
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100 bg-white">
                                <p class="text-muted mb-1">Telefone 3</p>
                                <strong>{{ $contact->phone3 }}</strong>
                            </div>
                        </div>
                    @endif

                    @if ($contact->email)
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100 bg-white">
                                <p class="text-muted mb-1">Email</p>
                                <strong>{{ $contact->email }}</strong>
                            </div>
                        </div>
                    @endif

                    @if ($contact->address)
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100 bg-white">
                                <p class="text-muted mb-1">Endereço</p>
                                <strong>{{ $contact->address }}</strong>
                            </div>
                        </div>
                    @endif

                    @if ($contact->birthday)
                        <div class="col-md-6 mb-3">
                            <div class="border rounded p-3 h-100 bg-white">
                                <p class="text-muted mb-1">Aniversário</p>
                                <strong>{{ $contact->birthday }}</strong>
                            </div>
                        </div>
                    @endif
                </div>

                @if ($contact->notes)
                    <div class="border rounded p-3 bg-white mb-4">
                        <p class="text-muted mb-1">Notas</p>
                        <p class="mb-0">{{ $contact->notes }}</p>
                    </div>
                @endif

                <div class="d-flex flex-wrap gap-2">
                    <a href="{{ route('contacts.edit', $contact) }}" class="btn btn-primary">
                        Editar
                    </a>

                    <form action="{{ route('contacts.favorite', $contact) }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button type="submit" class="btn btn-warning">
                            @if ($contact->favorite)
                                Remover dos Favoritos
                            @else
                                Adicionar aos Favoritos
                            @endif
                        </button>
                    </form>

                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir este contato?')">
                            Excluir
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>