<x-master title="Inserção">

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

        <form action="/noticias" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" name="titulo" placeholder="Digite o título da notícia" class="form-control">
            </div>

            <div class="form-group">
                <label for="conteudo">Conteúdo</label>
                <textarea name="conteudo" placeholder="Digite o conteúdo da notícia" class="form-control" rows="5"></textarea>
            </div>

            <div class="form-group">
                <label for="imagem">Imagem Destaque</label>
                <input type="file" name="imagem"/>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" class="form-control">
                    <option value="A">Ativo</option>
                    <option value="I">Inativo</option>
                </select>
            </div>

            <div class="form-group">
                <label for="data_publicacao">Data da Publicação</label>
                <input type="text" name="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR">
            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>

            <a href="/noticias" class="btn btn-light">Voltar</a>

        </form>


    </div>

    <!-- <?php
    // use Illuminate\Support\Carbon;

    //     $saoPaulo = Carbon::now(new DateTimeZone('America/Sao_Paulo'));
    //     $manaus = Carbon::now(new DateTimeZone('America/Manaus'));
        
    //     $londres = Carbon::now(new DateTimeZone('Europe/London'));
        
    //     print('São Paulo - ' . $saoPaulo); echo '<br/>';
    //     print('Manaus - ' . $manaus); echo '<br/>';
    //     print('Londres - ' . $londres); echo '<br/>';

    //     $d = Carbon::now();
    //     print($d->toTimeString());
    ?> -->


 </x-master>