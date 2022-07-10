@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Chat</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-footer d-flex">
                    <input type="text" class="form-control">
                    <div class="m-1"></div>
                    <button class="btn btn-outline-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script>
        Echo.public()
    </script>
@endpush
