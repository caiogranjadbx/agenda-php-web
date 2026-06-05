<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agenda de Contatos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container mt-4">
        <h1>Agenda de Contatos</h1>

        <a href="{{route('contacts.create')}}" class="btn btn-primary mb-3">
            Novo Contato
        </a>

        <a href="{{route('contacts.favorites')}}" class="btn btn-warning mb-3">
            Favoritos ★
        </a>

        @if($contacts->isEmpty())
            <p>Nenhum contato encontrado.</p>
        @else
            <div class="list-group">
                @foreach ($contacts as $contact)
                    <a href="{{ route('contacts.show', $contact) }}" class="list-group-item list-group-item-action">
                        <strong>
                            {{ $contact->first_name }} {{$contact->last_name}}
                        </strong>

                        @if ($contact->favorite)
                            <span class="text-warning">★</span>
                        @endif

                        <br>

                        <span>{{ $contact->phone1 }}</span>

                        @if($contact->email)
                            <br>
                            <span>{{ $contact->email }}</span>
                        @endif
                    </a>
                @endforeach
            </div>
        @endif
    </div>

</body>
</html>