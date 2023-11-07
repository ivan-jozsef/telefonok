@php
$phones = [
1 => "iPhone",
2 => "Pixel",
3 => "3310",
4 => "Moto G54"
];
@endphp

<nav class="navbar navbar-expand-md navbar-dark" style="background-color: #233049;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route("home")}}">Telefonok</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    @php
                    $url = route('home');
                    @endphp
                    @if(request()->routeIs('home'))
                    <a class="nav-link active" aria-current="page" href="{{$url}}">Főoldal</a>
                    @else
                    <a class="nac-link" href="{{$url}}">Főoldal</a>
                    @endif
                </li>
                @foreach($phones as $id => $name)
                <li class="nav-item">
                    @php
                    $url = route('phones.show', ['id' => $id]);
                    @endphp
                    @if(request()->routeIs('phones.show') && request()->route("id") == $id)
                    <a class="nav-link active" aria-current="page" href="{{$url}}">{{$name}}</a>
                    @else
                    <a class="nav-link" href="{{$url}}">{{$name}}</a>
                    @endif
                </li>
                @endforeach


            </ul>

        </div>
    </div>
</nav>