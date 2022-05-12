@include('head')
@include('header')
<div class="container">
    <form class="search-wrapper" method="get"  action="{{route('newsList')}}" >
        <input type="text" name="search" class="search" placeholder="Поиск">
        <input type="submit" name="submit" class="submit" value="Найти">
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
