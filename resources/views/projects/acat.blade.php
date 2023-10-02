@vite(['resources/css/projects/acat.css'])

<x-main-layout>
    @section('title', 'Projeto ACAT')

    @section('content')
    <section>
        <div class="cards-list">
            @foreach ($events as $event)
                <div class="card">
                    <h1 class="card-title">{{ $event->title }}</h1>
                    <img src="{{ asset("assets/img/$event->image") }}" alt="{{ $event->title }}">
                </div>
            @endforeach
        </div>
    </section>
    @endsection
</x-main-layout>
