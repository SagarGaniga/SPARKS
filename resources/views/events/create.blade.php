@include('include.header')

<section class="content">
<h1>Create Event</h1>
  
{!! Form::open(['action' => 'EventsController@store', 'method'=> 'POST','enctype'=>'multipart/form-data']) !!}
    
<div class="container-fluid">
<div class="block-header">
<div class="row clearfix">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Event Title
                                <small></small>
                            </h2>
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
                        </div>
                        <div class="body">
                            <div class="form-group demo-tagsinput-area">
                                <div class="form-line">
                                <div class="form-group">
                                    {{form::text('name','',['placeholder' => 'name','class' => 'form-control'])}} 
                                </div>
                                    <!-- <input type="text" class="form-control" data-role="tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
</div>
</div>

    <div class="form-group">
    {{form::label('description','EVENT DESCRIPTION')}}
    {{form::textarea('description','',['id' => 'article-ckeditor', 'class' => 'form-control','placeholder' => 'Describe about your Event'])}}
    </div> 


  <div class="custom-control body ms form-group">
    <label for="domainselect">Select domains for your Event</label>
    
    <select multiple class="form-control custom-select custom-select-lg mb-3" id="domainselect" name="domainselect[]" size="8" required>

      @foreach($domains as $domain)

        <option>{{$domain->name}}</option>

      @endforeach
    </select>
  </div>

<br>

    <div class="form-group">
        {{form::label('cover_image','Upload Cover Image for the Event')}}
        {{Form::file('cover_image')}}
    </div>




<br>
    <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
   
    <label class="custom-control-label" for="customControlValidation1">I Agree to all the <a href="/">terms and conditions</a></label>
  </div>
<br>




{{form::submit('Submit',['class' => 'btn btn-primary' ]) }}



{!! Form::close() !!}
</section> 

@include('include.footer')