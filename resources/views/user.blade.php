<h1>Lista de Alunos </h1>
<hr>
@foreach($alunos as $aluno)
    <p>{{$aluno->nome}} -- {{$aluno->filmes}}</p>
@endforeach