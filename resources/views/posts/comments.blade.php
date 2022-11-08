<x-layout>
    <div class="container align-centre">

        <form class="d-flex"  method="get" action="/push/{{$f}}" id="btn1" >


            <div class="mb-3">

                <label for="exampleFormControlTextarea1" class="form-label">Sharh {{$f}}</label>
                <br>

                <label for="exampleFormControlInput1" class="form-label">{{__('public.name')}}</label>
                <input type="text" class="form-control" id="text2" name="text2" placeholder="{{__('public.name')}}">


                <textarea class="form-control" name="text"  id="text" rows="3" ></textarea>
            </div>


        </form>
        <button class="btn btn-outline-success" type="submit" form="btn1" value="Submit" >{{__('public.send')}}</button>

        
        
        
    </div>
    <div class="container">
        <h2>{{__('public.comments')}}</h2>

    </div>
    @foreach($c as $com)
    <div class="card">
        <div class="card-title">
            Sharh yozuvchi : {{$com->users}}
            <div class="card-text">

                <p>sharh : {{$com->comments}}</p>

            </div>

        </div>


    </div>
    @endforeach




</x-layout>
