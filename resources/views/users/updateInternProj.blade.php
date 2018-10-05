@include('include.header')



<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Update</h2>
        </div>
        <div class="row clearfix">
            <!-- Task Info -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Update projects and internships
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
                            <h3>Projects</h3>
                            <div class="row">
                                @foreach ($projects as $project)
                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="{{$project['name']}}">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="{{$project['details']}}">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="{{$project['github_link']}}">
                                                </div>
                                        </div>
                                                <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="material-icons">person</i>
                                                        </span>
                                                        <div class="form-line">
                                                        <input type="text" class="form-control date" placeholder="{{$project['Description']}}">
                                                        </div>
                                                    </div>
                                            </div>
                                @endforeach
                                
                            </div>
                            <h3>Internships</h3>
                            <div class="row">
                                @foreach ($internships as $internship)
                                <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                        <input type="text" class="form-control date" placeholder="{{$internship['organisation']}}">
                                        </div>
                                    </div>
                                    <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">person</i>
                                            </span>
                                            <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="{{$internship['description']}}">
                                            </div>
                                        </div>
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="material-icons">person</i>
                                                </span>
                                                <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="{{$internship['duration']}}">
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

{{-- @if(!empty($data)){
    {{$data}}
}
@endif --}}

@include('include.footer')
