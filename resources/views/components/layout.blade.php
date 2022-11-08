<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/css/body1.css')}}" rel="stylesheet">
    <title>mebel.pr</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light"><a class="navbar navbar-brand" href="{{route('main')}}">mebel.pr</a>
    <form class="d-flex" role="search" method="get" action="{{'search'}}" >
        <input class="form-control me-2" type="search" placeholder="{{__('public.search')}}..." aria-label="{{__('public.search')}}" id="s" name="s">
        <button class="btn btn-outline-success" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">{{__('public.search')}}</font></font></button>
    </form>
    <div class="container-fluid "><a href="/kitchen" class="text-muted" >{{__('public.kitchen')}}</a>
    <a class="text-muted" href="/living_room">{{__('public.living_room')}}</a>
    <a class="text-muted" href="/bedroom">{{__('public.bedroom')}}</a>
    {{-- <a class="text-muted" href="#">{{__('public.others')}}</a> --}}
    </div>
    <div>
        {{__('public.language')}}:


        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('public.language')}} :
            </a>

            <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="{{ url('/uz') }}">uz</a></li>
                <li><a class="dropdown-item" href="{{ url('/ru') }}">ru</a></li>
                <li><a class="dropdown-item" href="{{ url('/en') }}">en</a></li>
            </ul>
        </div>

    </div>
</nav>



{{$slot}}









<footer class="footer">
    <div class="footer footer-brand">mebel.pr</div>


</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
