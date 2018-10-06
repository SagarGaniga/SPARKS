@include('include.header')



<section class="content">
    <div class="container-fluid">
       {{--  <div class="block-header">
            <h2>DASHBOARD</h2>
        </div> --}}
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Connect To Linkedin
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
                                <a href="/authlink">
                               <button class="btn btn-info btn-lg" style="border-radius: 50px;width: 200px;">Connect Linkedin</button></a> 
                                </a>
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
