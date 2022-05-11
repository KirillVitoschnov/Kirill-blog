@include('head')
@include('header')
<div class="container">
    <form method="get" action="{{route('newsList')}}" class="news-filter-main">
        <input type="text" value="{{request('search')}}" name="search" placeholder="Поиск новостей">
{{--        <div>--}}
{{--            <input type="radio" id="date"--}}
{{--                   name="sortBy" value="date">--}}
{{--            <label for="date">Сортировать по дате публикации</label>--}}

{{--            <input type="radio" id="popular"--}}
{{--                   name="sortBy" value="popular">--}}
{{--            <label for="popular">Сортировать по популярности</label>--}}

{{--        </div>--}}
        <button type="submit">Submit</button>
    </form>
    @foreach($news as $new)
        <a style="display: block" href="{{asset('news/'.$new->id)}}">
            <h1>{{$new->title}}</h1>
            <span>{{$new->category}}</span>
            <span>{{$new->updated_at}}</span>
            <span>Просмотрено {{$new->view_count}}</span>
        </a>
    @endforeach
</div>
@include('footer')
