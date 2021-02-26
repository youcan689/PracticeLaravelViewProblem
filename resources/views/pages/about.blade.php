@extends('layouts/application')
@section('main')
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

@endsection


 @section('title','程式累積腳踏實地')
 @section('footer')
<script>
alert('為你自己學');
</script>
 @endsection
 