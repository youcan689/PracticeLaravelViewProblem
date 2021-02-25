<h1>hi</h1>
@if(count($heros)>0)

    @foreach($heros as $hero)
        @if($loop->first || $loop->last)
        <li>
            <strong>{{$hero}}</strong>
        </li>
        @else
        <li>
            {{$hero}}   
        </li>
        @endif
    @endforeach



@endif

 