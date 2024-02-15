<header>
    <link rel="stylesheet" href="{{ asset('assets/styles/pages/main.css') }} ">
</header>
<ul>
    @foreach ( $data as $major )
        <li>id : {{ $major['id'] }}</li>
        <li>major : {{ $major['name'] }}</li>
        ___________________________________________
    @endforeach
</ul>
