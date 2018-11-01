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

                    @foreach($menus as $menu)
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ $menu->name }}</a>
                        </li>
                        @foreach($menusItems as $menusItem)
                            @if($menu->id == $menusItem->menu)
                                {{--<p>{{ $menusItem->label }}</p>--}}

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{ $menu->name }}
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>

                            @endif
                        @endforeach
                    @endforeach

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
