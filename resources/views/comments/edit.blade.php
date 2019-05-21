
@extends('base')

@section('title', __('Edit comment'))

@section('main')
 {{
Form::model($comment, [
'method' => 'PUT',
'route' => [
'comments.update',
$comment->id,
]
])
}}

@include('comments.partials.form')

{{
Form::submit(
__('Update comment'),
[
'class' => 'btn btn-block btn-success',
]
)
}}
{{ Form::close() }}
@endsection
