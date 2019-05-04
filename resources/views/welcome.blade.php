@extends('layouts.app')
<script src=" js/reload.js "></script>
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                <div class="front"></div>
                <div class="back"></div>
            </div>

            <div class="links">
                <a href=" {{url('/turns/add')}} ">Pedir turno</a>
            </div>
        </div>
    </div>
@endsection
