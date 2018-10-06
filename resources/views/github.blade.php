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
                        
                        <div class="body">
                            <div class="row">
                              
                               <div class='container-fluid'>
                                   <form id="wizard_with_validation" method="POST">
                                        <h3 style="color: red">Github Basic Information</h3><br>
                                        <fieldset>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                     <input type="text" class="form-control" name="username"  aria-required="true" value ="{{$user->login}}" readonly="true">
                                                    <label class="form-label">Username</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="email" value="{{$user->public_repos}}"  aria-required="true" readonly>
                                                    <label class="form-label">Public Repos</label>
                                                </div>
                                            </div>
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input type="text" class="form-control" name="phone" value="{{$user->followers}}"  aria-required="true" readonly>
                                                    <label class="form-label">Public Followers</label>
                                                </div>
                                            </div>
                                            
                                        </fieldset>

                                        
                                    </form> 
                                </div>
                                
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
