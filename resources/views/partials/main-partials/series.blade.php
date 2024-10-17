<section id="series">
    <div class="container text-center">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-lg-2">
                    <div class="card mb-5 text-start">
                        <img src="{{$comic['thumb']}}" class="card-img-top">
                        <div class="card-body px-0">
                            <h5 class="card-title">{{$comic['title']}}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button type="button" class="mb-4 btn btn-primary fw-bold text-uppercase">Load More</button>
    </div>
</section>
