@vite(['resources/css/events/create.css'])

<x-admin-layout>
    @section('title', 'Adicionar Evento')

    @section('content')
        <section>
            <form action="/dashboard/create" method="POST" enctype="multipart/form-data" class="create-event">
                @csrf

                <div class="form-group">
                    <label for="title">Nome do evento:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
                </div>
                <div class="form-group">
                    <label for="description">Descrição:</label>
                    <input name="description" id="description" class="form-control"
                        placeholder="O que vai acontecer no evento?"></input>
                </div>
                <div class="form-group">
                    <label for="date">Data do evento:</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="image">Imagem do Evento:</label>
                    <input type="file" id="image" name="image" class="from-control-file">
                </div>

                {{-- AQUELA GAMBIARRA DO CARALHO... --}}
                <input type="text" name="type" id="type" value="event" style="display: none">


                <center>
                    <input type="submit" value="Adicionar Evento">
                </center>
            </form>
        </section>
    @endsection
</x-admin-layout>
