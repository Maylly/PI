@vite(['resources/css/events/create_eco.css'])

<x-admin-layout>
    @section('title', 'Adicionar produção ECO')

    @section('content')
        <section>
            <form action="/dashboard/create" method="POST" enctype="multipart/form-data" class="create-event">
                @csrf

                <div class="form-group">
                    <label for="title">Nome:</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Nome da produção">
                </div>
                <div class="form-group">
                    <label for="image">Imagem:</label>
                    <input type="file" id="image" name="image" class="from-control-file">
                </div>

                {{-- AQUELA GAMBIARRA DO CARALHO... --}}
                <input type="text" name="type" id="type" value="eco" style="display: none">

                <center>
                    <input type="submit" value="Adicionar Produção">
                </center>
            </form>
        </section>
    @endsection
</x-admin-layout>
