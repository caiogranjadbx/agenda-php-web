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

        <a href="{{route('contacts.create')}}" class="btn btn-primary mb-3">Novo Contato</a>

        @if($contacts->isEmpty())
            <p>Nenhum contato encontrado.</p>
        @else
            <ul class="list-group">
                @foreach ($contacts as $contact)
                    <li class="list-group-item">
                        <strong>{{ $contact->first_name }} {{ $contact->last_name }}</strong><br>
                        <span>{{ $contact->phone1 }}</span>

                        @if ($contact->email)
                            <br>
                            <span>{{ $contact->email }}</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </div>

</body>
</html>