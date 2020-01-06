@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <form action="{{ route('logout') }}" method="post">
                        @csrf <button type="submit" class="p-2 bg-gray-500 text-gray-200">logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
