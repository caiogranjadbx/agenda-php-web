<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda de Contatos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h1 class="h3 mb-1">Agenda de Contatos</h1>
                        <p class="text-muted mb-0">Gerencie seus contatos e favoritos</p>
                    </div>

                    <div>
                        <a href="{{ route('contacts.favorites') }}" class="btn btn-warning">
                            ★ Favoritos
                        </a>

                        <a href="{{ route('contacts.create') }}" class="btn btn-primary">
                            + Novo Contato
                        </a>
                    </div>
                </div>

                @if($contacts->isEmpty())
                    <div class="alert alert-info mb-0">
                        Nenhum contato encontrado.
                    </div>
                @else
                    <div class="list-group">
                        @foreach ($contacts as $contact)
                            <a href="{{ route('contacts.show', $contact) }}" class="list-group-item list-group-item-action border-0 border-bottom py-3">
                                <div class="d-flex align-items-center">
                                    
                                    <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                                        {{ strtoupper(substr($contact->first_name, 0, 1)) }}
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start">
                                            <h2 class="h6 mb-1">
                                                {{ $contact->first_name }} {{ $contact->last_name }}
                                            </h2>

                                            @if ($contact->favorite)
                                                <span class="text-warning fs-5">★</span>
                                            @endif
                                        </div>

                                        <div class="text-muted small">
                                            {{ $contact->phone1 }}

                                            @if($contact->email)
                                                <br>
                                                {{ $contact->email }}
                                            @endif
                                        </div>
                                    </div>

                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>

</body>
</html>