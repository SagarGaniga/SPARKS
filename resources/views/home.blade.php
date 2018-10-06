@include('include.header')



<section class="content">
    <div class="container-fluid">
        {{-- <div class="block-header">
            <h2>DASHBOARD</h2>
        </div> --}}
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Events in which you can register!
                                <small>Hackathons, Programming Challenges and Coding Competitions</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row">
                                @foreach ($events as $event)
                                    <div class="col-sm-6 col-md-3" style="height: 320px;width: 300px;">
                                        <div class="thumbnail">
                                            <img src="http://my.kwic.com/~hnag/HNAG_files/events.jpg">
                                            <div class="caption">
                                                <h3>{{$event->name}}</h3>
                                                <p>
                                                    {{$event->description}}
                                                </p>
                                                <p>
                                                    <!-- Trigger the modal with a button -->
                                                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="myModal" role="dialog">
                                                    <div class="modal-dialog">
                                                    
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            <h4 class="modal-title">{{$event->name}}</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>
                                                                <form id="register" method="POST" action="/eventRegister">
                                                                    @csrf
                                                                    <input type="hidden" name="event_id" value="{{$event->id}}">
                                                                    <input type="text" name="skills">
                                                                    <br>
                                                                    <br>  
                                                                    <input type="submit" class="btn btn-primary" value="Register">
                                                                </form>
                                                            </p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                        </div>
                                                        
                                                        </div>
                                                    </div>
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </div>    
                                @endforeach
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Task Info -->
            
        </div>
    </div>
</section>

@include('include.footer')
