<x-main-layout>
    @section('title', 'Eventos')

    @section('content')
        <section>
            <div id="cards-container" class="row">
                @foreach ($events as $event)
                    <div class="card col-md-3">
                        <img src="{{ asset("assets/img/events/$event->image") }}" alt="{{ $event->title }}">
                        <div class="card-body">
                            <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    @endsection
</x-main-layout>