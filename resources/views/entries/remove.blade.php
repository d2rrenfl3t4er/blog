{{Form::model($entry, [
  'method' => 'DELETE',
  'rout' => ['entries.destroy', $entry=>id],
  ])}}

{{Form::submit()}}
{{Form::close()}}
