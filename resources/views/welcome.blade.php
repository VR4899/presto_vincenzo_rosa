<x-layout title="Homepage">

    <div class="row height-custom justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
            <dvi class="col-12 col-md-3">
                <x-card :article="$article"/>
            </dvi>
        @empty
        <div class="col-12">
            <h3 class="text-center">
                Non sono stati creati articoli
            </h3>
        </div>
            
        @endforelse

    </div>


</x-layout>