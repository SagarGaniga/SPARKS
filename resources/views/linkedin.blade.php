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
                                {{-- <small>Hackathons, Programming Challenges and Coding Competitions</small> --}}
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
                               @if(!empty($user['name']))
                               <div class='container-fluid'>
                                   <form id="wizard_with_validation" method="POST">
                                        <h3 style="color: red">Linkedin Basic Information</h3>
                                        <fieldset>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                     <input type="text" class="form-control" name="username"  aria-required="true" value ="{{$user['name']}}" readonly="true">
                                                    <label class="form-label">Username</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="email" value="{{$user['connections']}}"  aria-required="true" readonly>
                                                    <label class="form-label">Connections</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="phone" value="{{$user['location']}}"  aria-required="true" readonly>
                                                    <label class="form-label">Location</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize"  name="phone" value=""  aria-required="true" readonly>{{$user['summary']}}</textarea>
                                                    <label class="form-label">Summary</label>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <h3 style="color: red">Experience</h3>
                                        
                                        @foreach($user['positions']['values'] as $data2)
                                        {{-- hello --}}
                                        
                                         
                                       
                                       {{-- <div class='container-fluid'> --}}
                                       <fieldset>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" 
                                                    @if(!empty($data2['company']['name']))
                                                        value="{!!$data2['company']['name']!!}"
                                                    @endif
                                                            
                                                    aria-required="true" readonly>
                                                    <label class="form-label">Organization</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" name="name" class="form-control" 
                                                    @if(!empty($data2['company']['industry']))
                                                        value="{!!$data2['company']['industry']!!}"
                                                    @endif

                                                    aria-required="true" readonly>
                                                    <label class="form-label">Company</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <textarea rows="4" class="form-control no-resize"  name="phone" style="text-align: left;" value=""  aria-required="true" readonly>@if(!empty($data2['summary']))
                                                       {{$data2['summary']}}
                                                    @endif
                                            </textarea>
                                                    <label class="form-label">Summary</label>
                                                </div>
                                            </div>
                                            
                                        </fieldset>

                                        {{-- </div> --}}
                                        @endforeach
                                    </form> 
                                </div>
                                @else
                                    <a href="/authlink">
                                   <button class="btn btn-info btn-lg" style="border-radius: 50px;width: 200px;text-align: center;">Connect Linkedin</button></a> 
                                    </a>
                                @endif
                            </div>
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
