@vite(['resources/css/events/create_acat.css'])

<x-admin-layout>
    @section('title', 'Adicionar Coleta')

    @section('content')
        <section>
            <form action="/dashboard/create" method="POST" enctype="multipart/form-data" class="create-event">
                @csrf

                <div class="form-group">
                    <label for="title">Nome:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome da coleta">
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <input name="description" id="description" class="form-control"
                        placeholder="Descrição da coleta"></input>
                </div>
                <div class="form-group">
                    <label for="image">Imagem:</label>
                    <input type="file" id="image" name="image" class="from-control-file">
                </div>

                {{-- AQUELA GAMBIARRA DO CARALHO... --}}
                <input type="text" name="type" id="type" value="acat" style="display: none">

                <center>
                    <input type="submit" value="Adicionar Coleta">
                </center>
            </form>
        </section>
    @endsection
</x-admin-layout>
