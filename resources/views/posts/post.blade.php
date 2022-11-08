<x-layout>




<table>

<tr>
    @foreach($posts as $post)
<td>
<div class="container">
    <div class="card" style="width: 18rem; height: 40rem;">
        <img  src="/storage/{{$post->img}}" class="card-img-top" height="200px" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$post->furniture}}</h5>
            <p class="card-text">{{substr($post->info,0,70)}}<a href="/living_room/{{$post->furniture}}/info_block" class="list-group-item ">...</a> </p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{__('public.price')}}: {{$post->price}} so'm</li>
            <li class="list-group-item">{{__('public.composition')}}: {{$post->composition}}</li>
            <li class="list-group-item">{{__('public.color')}}: {{$post->color}}</li>
        </ul>
        <div class="card-body">
            <a href="/living_room/{{$post->furniture}}/info_block" class="card-link">{{__('public.information')}}</a>
            <a href="/living_room/{{$post->furniture}}/comments" class="card-link">{{__('public.comments')}}</a>
        </div>
    </div>
</div>
</td>

    @if($loop->iteration % 3 === 0)
</tr>
<tr>
    @endif

    @endforeach
</tr>

</table>
    {{$posts->appends(['s'=>request()->s])->links()}}










</x-layout>
