@extends('master')
@section('title', 'Salom Tashkent!')
@section('content')
    @include('navbar')
    <div id="mybreadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/news">Habarlar</a></li>
                <li class="breadcrumb-item active" aria-current="page">Salom Tashkent</li>
            </ol>
        </nav>
    </div>
    <div id="mycarousel">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTbdt64OxNZcVUJM2g5zV1x0L_HVZR7fFXVpQ&usqp=CAU" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://img.youtube.com/vi/PfyEJYJbjL4/maxresdefault.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTcT-OQw-e8PXc-wFmfTxqdE0LIatMebvO_xw&usqp=CAU" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div id="myjumbotron">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <div id="mycards">
        <div class="mycard" style="width: 18rem;">
            <img src="https://9to5mac.com/wp-content/uploads/sites/6/2018/12/Apple-Pay-promo.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="mycard" style="width: 18rem;">
            <img src="https://cdn.mos.cms.futurecdn.net/Ye8aESmHTxrXZzLUsQfKBR.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="mycard" style="width: 18rem;">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRJFFUSrCzFFio2edpCAAMOZ0IisYiD7xVGVA&usqp=CAU" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>
    <div id="mypagination">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection

