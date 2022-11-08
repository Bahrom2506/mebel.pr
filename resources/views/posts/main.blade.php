

<x-layout>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('images/rasm1.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/rasm2.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/rasm3.jpg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('images/rasm4.jpg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>






    <div class="list-group">
        <a  class="list-group-item list-group-item-action active" aria-current="true">
            {{__('public.categories')}}
        </a>
        <a href="{{url('kitchen')}}" class="list-group-item list-group-item-action">{{__('public.kitchen')}}</a>
        <a href="{{url('living_room')}}" class="list-group-item list-group-item-action">{{__('public.living_room')}}</a>
        <a href="{{url('bedroom')}}" class="list-group-item list-group-item-action">{{__('public.bedroom')}}</a>

    </div>


</x-layout>
