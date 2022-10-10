<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Novo aluno</h1>
  <form action="/Aluno" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Nome:</label>
      <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome do evento">
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control" id="filmes" name="filmes" placeholder="Local do evento">
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>