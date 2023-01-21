<header>
   <div class="top-banner bg-primary text-white px-5">
        <div class="d-flex justify-content-end gap-5">
            <div class="pr-5 small">DC POWER VISA</div> 
            <div class="small">ADDICTIONAL DC SITE</div>
        </div>
   </div>
   <nav>
    <div class="container">
        <div class="d-flex my-3 justify-content-between align-items-center">
            <div><img class="logo-header" src="{{ Vite::asset("resources/images/dc-logo.png")}}" alt=""></div>
            <div>
                <ul class="d-flex gap-3 m-0">
                    @foreach ($links["links_header"] as $link)
                        <li>
                           <a class="py-3" href="{{route($link)}}">{{$link}}</a>
                        </li>
                    
                        
                    @endforeach
                </ul>
            </div>
            <div>SEARCH</div>
        </div>
    </div>
   </nav>
   <div class="jumbotron">
    
   </div>
</header>