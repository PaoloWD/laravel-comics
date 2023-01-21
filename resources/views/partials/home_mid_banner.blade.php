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