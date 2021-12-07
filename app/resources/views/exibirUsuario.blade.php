<!DOCTYPE html>
<html lang="PT-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-light p-3">
    <h1 class="text-center">Lista de Usuarios</h1>

    <table class="table bg-light mt-3">
        <thead>
            <tr>Nome:   </tr>
            <tr>  Idade:</tr>
        </thead>
        @foreach($users as $user)
        <tbody>
            <td>{{ $user->name }}</td>
            <td>{{ $user->year }}</td>
        </tbody>
        @endforeach
    </table>

    <table class="table bg-light mt-3">
        <thead>
            <tr>Titulo: | </tr>
            <tr>Tamanho (MB): | </tr>
            <tr>N Assinatura:  | </tr>
            <tr>Assinatura Resp:  | </tr>
            <tr>Quantidade de Pag:   </tr>
        </thead>
        @foreach($documents as $document)
        <tbody>
            <td>{{ $document->title }}</td>
            <td>{{ $document->size_document }}</td>
            <td>{{ $document->number_signature }}</td>
            <td>{{ $document->signature_responsible }}</td>
            <td>{{ $document->qtd_pages }}</td>
        </tbody>
        @endforeach
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
