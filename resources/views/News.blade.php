@include('head')
@include('header')
@foreach($news as $new)
    <a style="display: block" href="{{asset('news/'.$new->id)}}">
        <h1>{{$new->title}}</h1>
        <span>{{$new->category}}</span>
        <span>{{$new->updated_at}}</span>
        <span>Просмотрено {{$new->view_count}}</span>
    </a>
@endforeach
@include('footer')
