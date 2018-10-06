@include('include.header')

<section class="content">
<a href="/events" class="btn btn-default">Go back</a>
<h1>{{$event->name}}</h1>
             <img  style="width:25%" src="/storage/event_images/{{$event->event_image}}">
<br><br>
<div>


{!!$event->description!!}

</div>

<hr>
<small>Created at:   {{$event->created_at}}  by {{$organizer_name[0]}}</small>
<hr>
@if($organizer_id==$event->organizer_id)
<a href="/events/{{$event->id}}/edit" class="btn btn-default">Edit Event</a>
{!!Form::open(['action'=>['EventsController@destroy',$event->id],'method'=>'POST','class'=>'pull-right'])!!}
    
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}
@endif
 
</section>

@include('include.footer')