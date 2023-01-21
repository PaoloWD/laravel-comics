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