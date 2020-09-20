@extends('master')
@section('title', 'Salom Tashkent!')
@section('content')
    @include('navbar')
    <div id="mybreadcrumb">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="/salom">Salom Tashkent</a></li>
                <li class="breadcrumb-item active" aria-current="page">Habarlar</li>
            </ol>
        </nav>
    </div>
    <div id="myjumbotron">
        <div class="jumbotron">
            <div class="accordion" id="accordionExample">
                @foreach($news_items as $row=>$news_item)
                    <div class="card">
                    <div class="card-header" id="heading{{$row}}">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse{{$row}}" aria-expanded="true" aria-controls="collapse{{$row}}">
                                {{$news_item->title}}
                            </button>
                        </h2>
                    </div>
                    <div id="collapse{{$row}}" class="collapse" aria-labelledby="heading{{$row}}" data-parent="#accordionExample">
                        <div class="card-body">
                            <img class="news_images" src="{{$news_item->urlToImage}}">
                            <hr>
                            {{$news_item->description}}
                        </div>
                    </div>
                </div>
                @endforeach
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

    <style>
        .news_images{
            width: 200px;
        }
    </style>
@endsection

