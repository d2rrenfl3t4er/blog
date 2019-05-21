<!doctype html>
<html lang="{{ App::getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="HandheldFriendly" content="true">
<meta name="MobileOptimized" content="width">
<meta name="viewport"
content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<title>@yield('title')</title>
{{ i l b bl d h }}


@include('partials.bootstrap')

@stack('styles')

@stack('scripts')
</head>
<body>
@yield('main')
@if (Session::has('message'))

<div class="alert alert-success">
{{ Session::get('message') }}
</div>
@endif
@if ($errors->count())

<div class="alert alert-danger">
{{ Html::ul($errors->all()) }}
</div>
@endif
</body>
</html>
