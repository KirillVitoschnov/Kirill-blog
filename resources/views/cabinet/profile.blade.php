@include('head')
@include('header')
<div id="app">
    <profile-component :user-initial="{{$user}}">

    </profile-component>
</div>
@include('footer')
