<x-layout>
    <div class="container-fluid text-center bg-body-tertiary bg-custom">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-4 fw-bolder">Presto.it</h1>
                <div>
                    @auth
                    <a href="{{route('create.article')}}" class="btn btn-dark"></a>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</x-layout>