<a href="{{route('entries.create')}}"
@foreach ($entries as $entry)
<article>
  <header>
    <h1>{{$entry->title}}</h1>
    <p>{{$entry->user->name}}</p>
  </header>
  @endforeach
