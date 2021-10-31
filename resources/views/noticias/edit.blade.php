<x-master title="Edição">

    <div class="container pt-5">

        @if(session()->has('mensagem'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('mensagem') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <p><strong>Erro ao realizar esta operação</strong></p>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <form action="/noticias/{{$noticia->id}}/edit" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" value="{{$noticia->titulo}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea name="conteudo"  class="form-control" rows="5"  >{{$noticia->conteudo}}</textarea>
            </div>

            <div class="form-group">
                <label for="imagem">Imagem Destaque</label>
                <input type="file" name="imagem"/>
                @if ($noticia->imagem)
                    <img src="{{$noticia->imagem}}" height="80px" class="d-block">
                @endif
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="A" {{ $noticia->status == "A" ? "selected='selected'" : "" }}>Ativo</option>
                    <option value="I" {{ $noticia->status == "I" ? "selected='selected'" : "" }}>Inativo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data_publicacao">Data da Publicação</label>
                <input type="text" name="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR" value="{{ optional($noticia->data_publicacao)->format('d/m/Y') }}">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

            <a href="/noticias" class="btn btn-light">Voltar</a>

        </form>

        <h4 class="mt-4">Comentários</h4>
        @foreach ($noticia->comentarios as $comentario)
            <div>
                {{ $comentario->conteudo }}
                <p class="text-muted">Criado em: {{ $comentario->created_at->format('d/m/Y H:i') }}</p>
            </div>
        @endforeach

    </div>

   <?php
    // use Illuminate\Support\Carbon;

    //     $saoPaulo = Carbon::now(new DateTimeZone('America/Sao_Paulo'));
    //     $manaus = Carbon::now(new DateTimeZone('America/Manaus'));
        
    //     $londres = Carbon::now(new DateTimeZone('Europe/London'));
        
    //     print('São Paulo - ' . $saoPaulo); echo '<br/>';
    //     print('Manaus - ' . $manaus); echo '<br/>';
    //     print('Londres - ' . $londres); echo '<br/>';

    //     $d = Carbon::now();
    //     print($d->toTimeString());
    ?> 



 </x-master>