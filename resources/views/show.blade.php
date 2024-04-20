
@if($data)
@foreach($data as $item)
    <p> {{$item->name}} </p>
@endforeach
@endif
