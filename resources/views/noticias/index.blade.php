<x-master title="Lista">

    <div class="container pt-5">

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
        
       
    
        <table class="table table-striped table-hover table-responsive-md">
            <thead class="thead-light">
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
                            <a href="/noticias/{{ $noticia->id }}/edit" class="btn btn-warning btn-sm">Editar</a>
                            <form action="/noticias/{{ $noticia->id }}" class="d-inline-block" method="POST" onsubmit="confirmaExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ $noticia->status_formatado }}</td>
                        <td>{{ optional($noticia->data_publicacao)->format("d/m/Y") }}</td>
                        <td><img src="{{ $noticia->imagem}}" height="40px"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $noticias->links() }} 
    </div>

</x-master>