{{Form::model($entry, [
  'method' => 'PUT',
  'rout' => ['entries.update', $entry=>id],
  ])}}
@include('entries.partials.fields')
{{Form::submit()}}
{{Form::close()}}
