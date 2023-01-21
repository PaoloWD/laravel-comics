@extends("layouts.app")

@section("partials.comics.description")
<div class="container">
    <div class="fw-bold my-3">{{$comics[0]["title"]}}</div>
    <div>
        <div class="d-flex gap-5 bg-success mb-3 px-5 py-2 justify-content-between align-items-center">
            <div class="d-flex  gap-5 flex-grow-1 justify-content-between">
                <div class="small text-white">{{$comics[0]["price"]}}</div>
                <div class="small text-white">AVAILABLE</div>
            </div>
            <div class="bg-success small text-white">CHECK AVAILABILITY</div>
        </div>
    </div>
    <div>
        {{$comics[0]["description"]}}
    </div>
    
        
</div>
@endsection


@section("partials.comics.details")
<div class="container">
<div class="bg-light">
    <div class="d-flex">
        <div>
            <div>
                TALENT
            </div>
            <div class="d-flex">
                <div class="small">Art By:</div>
                <div>
                    @foreach ($comics[0]["artists"] as $artist)
                        {{$artist}}
                    @endforeach
                </div>
            </div>
            <div class="d-flex">
                <div class="small">Written by:</div>
                <div>
                    @foreach($comics[0]["writers"] as $writers)
                        {{$writers}}
                    @endforeach
                </div>
            </div>
        </div>
        <div>SPECS
            <div class="d-flex">
                <div class="small">Series:</div>
                <div class="small">{{$comics[0]["series"]}}</div>
            </div>
            <div class="d-flex">
                <div class="small">U.S. Price</div>
                <div class="small">{{$comics[0]["price"]}}</div>
            </div>
            <div class="d-flex">
                <div class="small">On Sale Date</div>
                <div class="small">{{$comics[0]["sale_date"]}}</div>
            </div>
        </div>
        
        </div>
    </div>
</div>
</div>
@endsection

