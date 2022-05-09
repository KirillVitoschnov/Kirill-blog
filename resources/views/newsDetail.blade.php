@include('head')
@include('header')
<h1>{{$news->title}}</h1>
<h3>{{$news->text}}</h3>
{{$news->view_count}}
@include('footer')
