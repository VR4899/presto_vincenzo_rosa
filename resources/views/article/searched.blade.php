<x-layout title="Risultato per la ricerca: {{ $query }}">

    <div class="row height-custom justify-content-center align-items-center align-items-center text-center">
        @forelse ($articles as $article)
        <div class="col-12 col-md-3">
            <x-card :article="$article" />
        </div>
            
        @empty
        <div class="col-12">
            <h3 class="text-center">
                Nessun articolo corrisponde alla tua ricerca.
            </h3>
        </div>
            
        @endforelse
    </div>
    <div class="d-flex justify-content-center">
        <div>
            {{ $articles->links() }}
        </div>
    </div>

</x-layout>