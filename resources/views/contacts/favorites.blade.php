<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favoritos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>

    <div class="container mt-4">
        <h1>Contatos Favoritos</h1>

        <a href="{{ route('contacts.index') }}" class="btn btn-secondary mb-3">
            Voltar aos Contatos
        </a>

        @if ($contacts->isEmpty())
            <p>Nenhum Contato Favorito</p>
        @else
            <ul class="list-group">
                @foreach ($contacts as $contact)
                    <li class="list-group-item">
                        <strong>
                            {{ $contact->first_name }} {{ $contact->last_name}}
                        </strong>

                        <span class="text-warning">★</span>

                        @if($contact->company)
                            <br>
                            <span>{{ $contact->company }}</span>
                        @endif

                        @if ($contact->email)
                            <br>
                            <span>{{ $contact->email }}</span>
                        @endif

                        <br>

                        <a href="{{ route('contacts.show', $contact) }}" class="btn btn-sm btn-outline-primary mt-2">
                            Ver Detalhes
                        </a>
                    </li>  
                @endforeach
            </ul>
        @endif
    </div>
    
</body>
</html>