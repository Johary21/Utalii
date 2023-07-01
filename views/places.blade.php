@extends('partials.nav')

@extends('layouts.index')

@section('title', 'Utalii')

@section('content')
    <div class="container" style="margin-top: 70px;">
        <div class="jumbotron">
            <h1 class="display-4">Discover Your Next Adventure</h1>
            <p class="lead">Explore the beauty of Tanzania with our curated selection of tours and activities.</p>
            <hr class="my-4">
            <p>Book your next adventure today and experience the trip of a lifetime.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Browse Tours</a>
        </div>

        <hr>

        <h3>Featured Destinations</h3>
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="{{ asset('global_assets/images/Places/serengeti.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Serengeti National Park</h5>
                    <p class="card-text">Experience the breathtaking wildlife and stunning landscapes of Serengeti National Park.</p>
                    <a href="#" class="btn btn-primary">Explore Serengeti</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('global_assets/images/Places/kilimanjaro.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mount Kilimanjaro</h5>
                    <p class="card-text">Embark on a thrilling adventure and conquer the highest peak in Africa, Mount Kilimanjaro.</p>
                    <a href="#" class="btn btn-primary">Explore Kilimanjaro</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('global_assets/images/Places/zanzibar.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Zanzibar</h5>
                    <p class="card-text">Relax on the stunning beaches and immerse yourself in the vibrant culture of Zanzibar.</p>
                    <a href="#" class="btn btn-primary">Explore Zanzibar</a>
                </div>
            </div>
        </div>

        <br>
        {{-- second part of the places --}}
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top" src="{{ asset('global_assets/images/Places/Ruaha.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Ruaha National Park</h5>
                    <p class="card-text">Immerse yourself in the wilderness of Ruaha National Park and witness its abundant wildlife and stunning landscapes.</p>
                    <a href="#" class="btn btn-primary">Explore Ruaha</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('global_assets/images/Places/Mafia.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Mafia Island</h5>
                    <p class="card-text">Escape to the untouched beauty of Mafia Island and indulge in its pristine beaches and marine life.</p>
                    <a href="#" class="btn btn-primary">Explore Mafia</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="{{ asset('global_assets/images/Places/Ngorongoro.png') }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Ngorongoro Crater</h5>
                    <p class="card-text">Discover the world's largest unbroken caldera and witness the diverse wildlife in Ngorongoro Crater.</p>
                    <a href="#" class="btn btn-primary">Explore Ngorongoro</a>
                </div>
            </div>
        </div>
<br><br>
<br><br>
    </div>
@endsection

@extends('partials.footer')
