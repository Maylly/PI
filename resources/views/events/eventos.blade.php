@vite(['resources/css/events/eventos.css'])

<x-main-layout>
    @section('title', 'Eventos')

    @section('content')
        <section>
            <div class="cards-list">
                @foreach ($events as $event)
                    <div class="card">
                        <h1 class="card-title">{{ $event->title }}</h1>
                        <img src="{{ asset("assets/img/$event->image") }}" alt="{{ $event->title }}">

                        <p>{{ $event->description }}</p>

                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    </div>
                @endforeach
            </div>
        </section>
    @endsection
</x-main-layout>
