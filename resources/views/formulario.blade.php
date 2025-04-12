<form action="{{ route('manifestacao.criar') }}" method="POST">
    @csrf
    <input type="text" name="nome_autor">
    <input type="text" name="titulo">
    <select name="categoria">
        <option value="elogio">Elogio</option>
        <option value="sugestao">Sugestão</option>
        <option value="reclamacao">Reclamação</option>
        <option value="denuncia">Denúncia</option>
    </select>
    <textarea name="descricao"></textarea> 
    <select name="tipo_usuario">
        <option value="aluno"> Aluno</option>
        <option value="servidor">Servidor</option>
        <option value="visitante">Visistante</option>
    </select> 
    <button type="submit">Salvar</button>
</form>