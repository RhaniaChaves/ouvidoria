@extends('layout')

@section('content')
    <div class="container">
        <div class="card card-body">
            <label for="">Informe o código de rastreio</label>
            <input class="form-control" type="text" id="codigo_rastreio" />
            <button class="btn btn-success my-3" onclick="buscar()">Buscar</button>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function buscar()
        {
            var codigo = document.getElementById('codigo_rastreio').value;

            axios.get(codigo).then(function (response) {
                Swal.fire({
                    title: "Status atual da manifestação: "+response.data.status,
                    icon: "success",
                    draggable: true
                });
            })
            .catch(function (error) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Não foi possível consultar a manifestação!",
                });
            });

        }
    </script>
@endsection