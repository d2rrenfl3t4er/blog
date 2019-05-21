@extends('base')

@section('title', __('comments'))

@section('main')
<p>

{{
Html::secureLink(
route('comments.create'),
__('Create comment')

)
}}
</p>
<div class="table-responsive">
<table class="table table-hover table-striped">
<tr>
<th>{{ __('Title') }}</th>
<th>{{ __('Content') }}</th>
<th>
<span class="glyphicon glyphicon-pencil" aria-hidden="true">
</span>
</th>
<th>
<span class="glyphicon glyphicon-remove" aria-hidden="true">
</span>
</th>
</tr>
@foreach ($comments as $comment)
<tr>
<td>{{ $comment->title }}</td>
<td>{{ $comment->content }}</td>
<td>{{ Html::secureLink(
route('comments.edit', comment->id),
__('Edit comment')
) }}</td>
<td>{{ Html::secureLink(
route('comments.remove', $comment->id),
__('Remove comment')
) }}</td>
</tr>
@endforeach
</table>
</div>
@endsection
