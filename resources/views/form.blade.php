<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>
    <form action="{{url('/')}}" method="post">
    @csrf
        <label id="nome">Nome</label>
        <input type="text" name="nome" id="nome"><br>

        <label id="email">E-mail</label>
        <input type="text" name="email" id="email"><br>

        <label for="data_nascimento">Data de Nascimento</label>
        <input type="text" name="data_nascimento" id="data_nascimento"><br>
        
        
        <select name="nivel_id" id="">
            @foreach($niveis as $nivel)
                <option value="{{$nivel->id}}">{{$nivel->nome}}</option>
            @endforeach    

        </select><br>
        <input type="submit" value="enviar">
    </form>
</body>
</html>