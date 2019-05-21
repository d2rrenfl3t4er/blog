
@extends('base')

@section('title', __('Create comment'))

@section('main')

{{
Form::model($comment, [
'method' => 'POST',
'route' => 'comments.store'
])
}}

@include('comments.partials.form')

{{
Form::submit(
__('Save comment'),
[
'class' => 'btn btn-block btn-success',
]
)
}}
{{ Form::close() }}
@endsection
