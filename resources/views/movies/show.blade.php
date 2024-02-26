@extends('layouts.app')

@section('page-title', 'Home')

@section('main-content')
<h1>
    Laravel Start 1
</h1>

<h2>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h3>
                        {{ $movie->title }}
                    </h3>

                    <p>
                        {{ $movie->author }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</h2>
@endsection