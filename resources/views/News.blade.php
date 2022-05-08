@include('head')
@include('header')
@foreach($news as $new)
    <div>{{$new->title}}</div>
@endforeach
@include('footer')
