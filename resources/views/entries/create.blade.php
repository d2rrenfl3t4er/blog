{{Form::model($entry, [
  'route' => 'entries.store'
  ])}}
@include('entries.partials.fields')
{{Form::submit()}}
{{Form::close()}}
