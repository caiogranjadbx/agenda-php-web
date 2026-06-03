<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Contato</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container mt-4">
        <a href="{{ route ('contacts.index') }}" class="btn btn-secondary mb-3">
            Voltar
        </a>

        <div class="card">
            <div class="card-body">
                <h1 class="card-title">
                    {{ $contact->first_name }} {{ $contact->last_name}}

                    @if ($contact->favorite)
                        <span class="text-warning">★</span>
                    @endif
                </h1>

                @if ($contact->company)
                    <p>
                        <strong>Empresa:</strong>
                        {{ $contact->company }}
                    </p>
                @endif

                <p>
                    <strong>Telefone 1:</strong>
                    {{ $contact->phone1 }}
                </p>

                @if ($contact->phone2)
                    <p>
                        <strong>Telefone 2:</strong>
                        {{ $contact->phone2 }}
                    </p>
                @endif

                @if ($contact->phone3)
                    <p>
                        <strong>Telefone 3:</strong>
                        {{ $contact->phone3 }}
                    </p>
                @endif

                @if ($contact->email)
                    <p>
                        <strong>Email:</strong>
                        {{ $contact->email }}
                    </p>
                @endif

                @if ($contact->address)
                    <p>
                        <strong>Endereço:</strong>
                        {{ $contact->address }}
                    </p>
                @endif

                @if ($contact->birthday)
                    <p>
                        <strong>Aniversário:</strong>
                        {{ $contact->birthday }}
                    </p>
                @endif

                @if ($contact->notes)
                    <p>
                        <strong>Notas:</strong>
                        {{ $contact->notes }}
                    </p>
                @endif
            </div>
        </div>
    </div>

</body>
</html>