@extends('layout')

@section('css')
    <style>
        .row {
            margin-bottom: 4%;
        }
        label {
            margin-bottom: 1% 
        }
    </style>
@endsection

@section('content')
    <div class="card card body">
        <div class="col-md-12 p-5">
            <form action="{{ route('manifestacao.criar') }}" method="POST" id="form">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Nome do autor *</label>
                        <input type="text" name="nome_autor" id="nome_autor" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Título da manifestação *</label>
                        <input type="text" name="titulo" id="titulo" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Categoria *</label>
                        <select name="categoria" id="categoria" class="form-select">
                            <option disabled selected>Selecione</option>
                            <option value="elogio">Elogio</option>
                            <option value="sugestao">Sugestão</option>
                            <option value="reclamacao">Reclamação</option>
                            <option value="denuncia">Denúncia</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Descrição *</label>
                        <textarea name="descricao" id="descricao" class="form-control"></textarea> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <label for="">Tipo de usuário</label>
                        <select name="tipo_usuario" id="tipo_usuario" class="form-select">
                            <option disabled selected>Selecione</option>
                            <option value="aluno"> Aluno</option>
                            <option value="servidor">Servidor</option>
                            <option value="visitante">Visistante</option>
                        </select>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-md-12"> 
                        <button type="submit" class="btn btn-success w-100">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        if("{{ session()->has('codigo') }}") {
            var codigo = "{{ session()->get('codigo') }}"
            
            Swal.fire({
                title: "Sucesso! Código de rastreio: "+codigo,
                icon: "success",
                draggable: true
            });
        }
        
        document.getElementById('form').addEventListener('submit', function(e) {
            e.preventDefault();

            if(document.getElementById('nome_autor').value.trim() == '')
                return msg('Nome autor')
            if(document.getElementById('titulo').value.trim() == '')
                return msg('Título')
            if(document.getElementById('categoria').value == 'Selecione')
                return msg('Categoria')
            if(document.getElementById('descricao').value.trim() == '')
                return msg('Descrição')
            if(document.getElementById('tipo_usuario').value == 'Selecione')
                return msg('Tipo usuário')

            document.getElementById('form').submit();
        });

        function msg(campo)
        {
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Preencha o campo "+campo,
            });
        }
    </script>
@endsection