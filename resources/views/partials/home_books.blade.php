<div class="bg-dark text-white">
    <div class="container">
        <div class="row g-5">
            @foreach ($comics as $comic)
                {{-- {{$comic["title"]}} <br> --}}
                <div class="card bg-dark col-2 border-0" style="width: 18rem;">
                    <img src={{$comic['thumb']}} class="card-img-top" alt="...">
                    <div class="card-body bg-dark">
                    <p class="card-text bg-dark">{{$comic['title']}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>