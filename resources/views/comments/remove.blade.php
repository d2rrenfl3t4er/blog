@extends('base')

@section('title', __('Remove comment'))

@section('main')

{{
Form::model($comment, [
'method' => 'DELETE',
'route' => [
'comments.destroy',
$comment->id,
]
])
}}

{{ $comment->title }}

{{
Form::submit(
__('Remove comment'),
[
'class' => 'btn btn-block btn-success',
]
)
}}
{{ Form::close() }}
@endsection
