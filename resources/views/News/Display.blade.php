


@foreach($output as $outputs)
{{$outputs->title}}
{{$outputs->body}}
<img src='{{url("photo/$outputs->image")}}' width="50" height="50">
@endforeach
  

  