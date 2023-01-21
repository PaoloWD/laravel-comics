@extends("layouts.app")

@section("partials.home_books")
<div class="bg-dark text-white comics-section">
    <div class="container">
        <div class="row py-5">
            @foreach ($comics as $comic)
                {{-- {{$comic["title"]}} <br> --}}
                <div class="card bg-dark flex-grow-1 col-2 border-0">
                    <img src={{$comic['thumb']}} class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                    <p class="card-text bg-dark">{{$comic['title']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


@section("partials.home_mid_banner")
<div class="bg-primary p-4">
    <div class="container">
        <div class="d-flex justify-content-around mid_banner">
            <div class="d-flex gap-3 align-items-center">
                @foreach ($links["links_mid_banner"] as $link)
                <div class="d-flex gap-3 align-items-center">
                    <div>
                        <img class="icons" src="{{Vite::asset($link["img"])}}" alt="">
                    </div>
                    <div class="text-white">
                        <a href="/">{{$link["link"]}}</a>
                    </div>
                </div>
                    
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection


