<h1>Lista de Atividades </h1>
<hr>
@foreach($atividades as $atividade)
    <h3> {{ $atividade -> scheduleto}}</h3>
    <p>Ola, aqui é pra aparecer informações do banco de dados </p>
@endforeach
