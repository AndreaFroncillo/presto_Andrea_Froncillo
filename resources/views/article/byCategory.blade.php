<x-layout>
    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2 text-white">{{ __('ui.articles_by_category') }} <span class="fw-bold fst-italic">{{__("ui.$category->name")}}</span></h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5 g-4">
            @forelse ($articles as $article)
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                <x-card :article="$article" class="card-w"/>
            </div>
            @empty
            <div class="col-12 text-center">
                <h3>
                    {{ __('ui.articles_by_category') }}!
                </h3>
                @auth
                <a href="{{route('create.article')}}" class="btn btn-dark my-5">{{ __('ui.publish_article') }}</a>
                @endauth
            </div>
            @endforelse
        </div>
    </div>
</x-layout>