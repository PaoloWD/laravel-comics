<footer>
    <div class="jumbotron-footer">
        <div class="container">
            <div class="d-flex text-white justify-content-between">
                <div class="d-flex gap-4 mt-4">
                    <div>
                        <div>
                            DC COMICS
                            <ul class="p-0">
                                @foreach ($links["links_header"] as $link)
                                    <div><a href="/">{{$link}}</a></div>
                                @endforeach
                            </ul>
                        </div>
                        <div>
                            SHOP
                            <ul class="p-0">
                                @foreach ($links["links_footer_shop"] as $link)
                                    <div><a href="/">{{$link}}</a></div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div>DC
                        <ul class="p-0">
                            @foreach ($links["links_footer_dc"] as $link)
                                <div><a href="/">{{$link}}</a></div>
                            @endforeach
                        </ul>
                    </div>
                    <div>SITES
                        <ul class="p-0">
                            @foreach ($links["links_footer_site"] as $link)
                                <div><a href="/">{{$link}}</a></div>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="text-end">
                    <img class="logo-bg-dc" src="{{Vite::asset("resources/images/dc-logo-bg.png")}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark py-3">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <button class="btn btn-dark border-primary">SIGN-UP NOW!</button>
                <div class="text-primary">
                    ICONS
                </div>
            </div>
        </div>
    </div>
</footer>