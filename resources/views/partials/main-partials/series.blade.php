<section id="series" class="py-5">
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="card mb-5" >
                        <img src="{{$comic['thumb']}}" class="card-img-top">
                        <div class="card-body px-0">
                            <h5 class="card-title">{{$comic['title']}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
