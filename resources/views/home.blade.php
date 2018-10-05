@include('include.header')



<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
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
                                    <div class="col-sm-6 col-md-3">
                                        <div class="thumbnail">
                                            <img src="http://placehold.it/500x300">
                                            <div class="caption">
                                                <h3>{{$event->name}}</h3>
                                                <p>
                                                    {{$event->description}}
                                                </p>
                                                <p>
                                                    <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">Register</a>
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
