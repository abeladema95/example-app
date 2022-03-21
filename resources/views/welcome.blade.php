@extends('baseview')

@section('content')
<body class="u-body-flex u-body-flex-column">
    <h1 class="u-big">Hello {{$user->name}}</h1>
    <a href="{{'/user/' . $user->email . '/products'}}"> <button class="button button--purple">Mijn producten</button></a>
</body>
