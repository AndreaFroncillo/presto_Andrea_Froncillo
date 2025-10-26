<div class="card mx-auto card-w shadow text-center mb-3">
    <img src="{{$article->images->IsNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200'}}" class="card-img-top" alt="{{ __('ui.article_image_alt') }} {{$article->title}}">
    <div class="card-body">
        <h4 class="card-title">{{$article->title}}</h4>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}} €</h6>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary">{{ __('ui.detail') }}</a>
            <a href="{{route('byCategory', ['category' => $article->category])}}" class="btn btn-outline-info btn-sm mt-2 ms-1">{{ __('ui.' . $article->category->name) }}</a>
        </div>
    </div>
</div>