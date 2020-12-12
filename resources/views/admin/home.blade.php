@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 80px;padding-top: 80px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Ciao Giorgia, sei loggata!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
