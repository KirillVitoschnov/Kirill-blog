@include('head')
@include('header')
<div class="container">
    <form class="search-wrapper" method="get" action="{{route('newsList')}}">
        <input type="text" name="search" class="search" placeholder="Поиск" value="{{request('search')}}">
        <button type="submit" class="submit">Найти</button>
    </form>
    <div class="news-wrapper">
        @foreach($news as $new)
            <a class="news-card-wrapper" style="display: block" href="{{asset('news/'.$new->id)}}">
                <img height="300px" width="100%" src="{{'/files/news_images/'.$new->image}}" alt="">
                <div>
                    <h1>{{$new->title}}</h1>
                    <span>{{$new->category_name[0]->category}}</span>
                    <span>{{$new->updated_at}}</span>
                    <span>Просмотрено {{$new->view_count}}</span>
                </div>
            </a>
        @endforeach
    </div>
    <div class="news-pagination">{{$news->links()}}</div>
</div>
@include('footer')
