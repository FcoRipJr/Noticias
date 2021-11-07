@extends('adminlte::page')

@section('title', 'Notícias')

@section('content_header')
<h1 class="m-0 text-dark"><i class="fas fa-home"></i> Notícias
    <small class="text-muted">- Index</small>
</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Tabela de Notícias
        </h3>
    </div>

    <div class="card-body">
        @if(session()->has('mensagem'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('mensagem') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <a href="/noticias/create" class="btn btn-primary mb-5">Nova Notícia</a>
        </br>
        <a href="/noticias" class="btn btn-light mb-5">Todas</a>
        <a href="/noticias/ativas" class="btn btn-light mb-5">Ativas</a>
        <a href="/noticias/inativas" class="btn btn-light mb-5">Inativas</a>
        
       
    
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Ações</th>
                    <th>Título</th>
                    <th>Status</th>
                    <th>Data Publicação</th>
                    <th>Imagem</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($noticias as $noticia)
                    <tr>
                        <td>
                            <a href="/noticias/{{ $noticia->id }}/edit" class="btn btn-primary btn-sm">Editar</a>
                            <form action="/noticias/{{ $noticia->id }}" class="d-inline-block" method="POST" onSubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ $noticia->status_formatado }}</td>
                        <td>{{ $noticia->data_publicacao->format("d/m/Y") }}</td>
                        <td><img src="{{ $noticia->imagem}}" height="40px"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
    <!-- <script>
        function confirmarExclusao(event) {
            event.preventDefault();
            swal({
                title: "Você tem certeza que deseja excluir o registro?",
                icon: "warning",
                dangerMode: true,
                buttons: {
                    cancel: "Cancelar",
                    catch: {
                        text: "Excluir",
                        value: true,
                    },
                }
            })
            .then((willDelete) => {
                if (willDelete) {
                    event.target.submit();
                } else {
                    return false;
                }
            });
        }
    </script> -->
</div>


@stop
