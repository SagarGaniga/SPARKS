
@include('include.header')



<section class="content">
    <div class="container-fluid">
        {{-- <div class="block-header">
            <h2>DASHBOARD</h2>
        </div> --}}
       
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        {{-- <div class="header">
                            <h2>Your Profile Info</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div> --}}
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">
                                <h3 style="color: red">Account Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                             <input type="text" class="form-control" name="username"  aria-required="true" value ="{{$user[0]->name}}" readonly="true">
                                            <label class="form-label">Username</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="email" value="{{$user[0]->email}}"  aria-required="true" readonly>
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="phone" value="{{$user[0]->phone}}"  aria-required="true" readonly>
                                            <label class="form-label">Phone No.</label>
                                        </div>
                                    </div>
                                </fieldset>

                                <h3 style="color: red">Profile Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" value="{{$user[0]->linkedin_profile}}"  aria-required="true" readonly>
                                            <label class="form-label">Linkedin</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="surname" class="form-control" value="{{$user[0]->github_profile}}"  aria-required="true" readonly>
                                            <label class="form-label">Github</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" value="{{$user[0]->resume_link}}"  aria-required="true" readonly>
                                            <label class="form-label">Resume</label>
                                        </div>
                                    </div>
                                    
                                </fieldset>

                                <h3 style="color: red">Terms & Conditions - Finish</h3>
                                <fieldset>
                                    <input id="acceptTerms-2" name="acceptTerms" checked="true" type="checkbox" required>
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions  that my profile detail will be used to evaluate me for various event selection process</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>

@include('include.footer')
