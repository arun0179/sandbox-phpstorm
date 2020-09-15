@extends('layouts.main')

@section('content')
    <h1>Show Page</h1>
    <p>ID: {{$id}}</p>
    <p>Name: {{$name}}</p>

    {{$text}}
    @{!!$text!!}

    <p>{{time()}}</p>
    <p>{{date('Y-M-D H:i:s')}}</p>

    @if ($id > 100)
        <p>{{$id}} > 100</p>
    @endif

{{--    put @ to show in page--}}
{{--    if not--}}
    @unless($id >  100)
        <p>{{$id}} <= 100</p>
    @endunless

    @isset($records)
        <p>มีตัวแปร {{$records}} ให้ใช้งาน</p>
    @endisset

    @empty($array)
        <p>ตรวจสอบแล้วเป็น array ว่างหรือ string ว่างหรือ เป็นค่า null</p>
    @endempty
@endsection
