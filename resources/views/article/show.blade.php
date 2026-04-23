<x-layout title="{{ __('ui.detail_title') }} {{ $article->title }}">
    <div class="row height-custom justify-content-center aligt-item-center text-center">
        <div class="col-12 col-md-6 mb-3">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://picsum.photos/1001" class="d-block w-100" alt="immagine casuale">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1002" class="d-block w-100" alt="immagine casuale">
                    </div>
                    <div class="carousel-item">
                        <img src="https://picsum.photos/1003" class="d-block w-100" alt="immagine casuale">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-3 height-custom text-center">
            <h2 class="display-5"><span class="fw-bold">{{ __('ui.title') }}:</span> {{$article->title}} </h2>
            <div class="d-flex flex-column justify-content-center h-75">
                <h4 class="fw-bold">{{ __('ui.price') }}: {{$article->price}}€</h4>
                <h5>{{ __('ui.description') }}:</h5>
                <p>{{$article->description}}</p>
            </div>
        </div>
    </div>

</x-layout>