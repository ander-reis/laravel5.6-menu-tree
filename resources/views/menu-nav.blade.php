@extends('layouts.app')

@section('content')
    <div class="container">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

{{--                    {{ dd($menuItems) }}--}}

                    {{--exemplo com menuItems--}}
                    @foreach($menuItems as $key => $menuItem)
                        @if($menuItem['child'] == null)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ $menuItem['link'] }}">{{ $menuItem['label'] }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ $menuItem['link'] }}" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ $menuItem['label'] }}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    @foreach($menuItem['child'] as $key => $item)
                                        <a class="dropdown-item" href="#">{{ $item['label'] }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @endif
                    @endforeach

                    {{--exemplo com menu separado--}}
                    {{--@foreach($menuList as $key => $menuItem)--}}
                        {{--@if($menuItem == null)--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="#">{{ $key }}</a>--}}
                            {{--</li>--}}
                        {{--@else--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                    {{--{{ $key }}--}}
                                {{--</a>--}}
                                {{--<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
                                    {{--@foreach($menuItem as $key => $item)--}}
                                        {{--<a class="dropdown-item" href="#">{{ $item['label'] }}</a>--}}
                                    {{--@endforeach--}}
                                {{--</div>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    {{--@endforeach--}}


                    {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Features</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Pricing</a>--}}
                    {{--</li>--}}

                    {{--<li class="nav-item dropdown">--}}
                        {{--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                            {{--Dropdown link--}}
                        {{--</a>--}}
                        {{--<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">--}}
                            {{--<a class="dropdown-item" href="#">Action</a>--}}
                            {{--<a class="dropdown-item" href="#">Another action</a>--}}
                            {{--<a class="dropdown-item" href="#">Something else here</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                </ul>
            </div>
        </nav>


    </div>
@endsection
