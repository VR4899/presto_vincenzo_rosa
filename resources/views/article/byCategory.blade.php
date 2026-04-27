<x-layout title="Articoli della categoria: {{$category->name }}">
    <div class="row height-custom justify-content-center align-items-center py-5">

        @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article"/>
            </div>

        @empty
            <div class="col-12 text-center">
                <h3> {{ __('ui.no_articles') }}</h3>

                @auth
                    <a class="btn btn-dark my-5" href="{{ route('create.article') }}">
                        Pubblica un articolo
                    </a>
                @endauth
            </div>
        @endforelse

    </div>
</x-layout>