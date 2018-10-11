@include('include.header')
<section class="content">

<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">User_id</th>
      <th scope="col">Status</th>
      <th scope="col">Score</th>
    </tr>
  </thead>
  <tbody>
  @foreach($participants as $participant)
 
    @if($participant->selected)
        <?php $participantstatus = 'Selected'?>       
    @else
        <?php $participantstatus = 'Waiting'?>
    @endif
    <tr>
      <th scope="row">{{$participant->id}}</th>
      <td>{{$participantstatus}}</td>
      <td>{{$participant->score}}</td>
    </tr>


  @endforeach


  </tbody>
</table>


<div class="body">
<div class="fixed-bottom">
            <div class="row clearfix demo-button-sizes">
            <div class="col-xs-6 col-sm-3 col-md-2 col-lg-2">
            <button type="button" class="btn bg-red btn-block btn-lg waves-effect">Download Excel</button>
</div>                                 
</div>
</section>



@include('include.footer')