<x-layout>




    <img src="/storage/{{$posts[0]->img}}" class="img"  height="300px" alt="...">


    <ul class="list-group">
        <li class="list-group-item"><h2><b>{{$posts[0]->furniture}}</b></h2></li>
        <li class="list-group-item"><b>{{__('public.information')}}: </b>{{$posts[0]->info}}</li>
        <li class="list-group-item"><b>{{__('public.price')}}: </b>{{$posts[0]->price}}</li>
        <li class="list-group-item"><b>{{__('public.composition')}}: </b>{{$posts[0]->composition}}</li>
        <li class="list-group-item"><b>{{__('public.color')}}: </b>{{$posts[0]->color}}</li>
        <li class="list-group-item"><a href="/living_room/{{$posts[0]->furniture}}/comments" class="card-link">{{__('public.comments')}}</a></li>
    </ul>


</x-layout>



