<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="display-4 pt-5">Registrati</h1>
            </div>
        </div>
    </div>

    <x-error-messages />

    <div class="row justify-content-center align-items-center height-custom w-100">
        <div class="col-12-col-md-6">
            <form method="POST" action="{{route('register')}}" class="bg-body-tertiary shadow rounded p-5 pe-5 mx-5">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('ui.name') }}:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                </div>
                <div class="mb-3">
                    <label for="registerEmail" class="form-label">{{ __('ui.email') }}:</label>
                    <input type="email" class="form-control" id="registerEmail" name="email" value="{{ old('email') }}">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('ui.password') }}:</label>
                    <input type="password" class="form-control" id="password" name="password" value="{{ old('password') }}">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('ui.password_confirm') }}:</label>
                    <input type="password" class="form-control" id="password" name="password_confirmation">
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-dark">{{ __('ui.register_title') }}</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>