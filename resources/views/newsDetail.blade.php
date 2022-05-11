@include('head')
@include('header')
<div class="container">
<h1>{{$news->title}}</h1>
<h3>{{$news->text}}</h3>
{{$news->view_count}}
</div>
@include('footer')
