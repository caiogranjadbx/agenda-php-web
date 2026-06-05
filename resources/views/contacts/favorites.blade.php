<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favoritos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body class="bg-light">

    <div class="container py-5">
        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h1 class="h3 mb-1">Contatos Favoritos</h1>
                        <p class="text-muted mb-0">Acesse rapidamente seus contatos principais</p>
                    </div>

                    <a href="{{ route('contacts.index') }}" class="btn btn-outline-secondary">
                        Voltar aos Contatos
                    </a>
                </div>

                @if ($contacts->isEmpty())
                    <div class="alert alert-warning mb-0">
                        Nenhum contato favorito ainda.
                    </div>
                @else
                    <div class="list-group">
                        @foreach ($contacts as $contact)
                            <div class="list-group-item border-0 border-bottom py-3">
                                <div class="d-flex align-items-center">

                                    <a href="{{ route('contacts.show', $contact) }}" class="text-decoration-none text-dark flex-grow-1">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-circle bg-warning text-dark d-flex align-items-center justify-content-center me-3" style="width: 48px; height: 48px;">
                                                {{ strtoupper(substr($contact->first_name, 0, 1)) }}
                                            </div>

                                            <div>
                                                <strong>
                                                    {{ $contact->first_name }} {{ $contact->last_name }}
                                                </strong>

                                                @if ($contact->company)
                                                    <br>
                                                    <span class="text-muted small">
                                                        {{ $contact->company }}
                                                    </span>
                                                @endif

                                                <br>

                                                <span class="text-muted">
                                                    {{ $contact->phone1 }}
                                                </span>

                                                @if ($contact->email)
                                                    <br>
                                                    <span class="text-muted small">
                                                        {{ $contact->email }}
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </a>

                                    <form action="{{ route('contacts.favorite', $contact) }}" method="POST" class="ms-3">
                                        @csrf
                                        @method('PATCH')

                                        <button type="submit" class="btn btn-link p-0 text-decoration-none" title="Remover dos favoritos">
                                            <span class="text-warning fs-2">★</span>
                                        </button>
                                    </form>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>

</body>
</html>