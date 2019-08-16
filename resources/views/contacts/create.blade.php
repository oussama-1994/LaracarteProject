@extends('layouts.master',['title'=>'Contact'])
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                <h2>Get In Touch</h2>

                <p><span class="text-muted">If you having trouble with this service, please <a href="mailto:{{config('laracastemail.var_mail')}}
" data-helpful="laracarte" data-helpful-modal="on">ask for help</a>.</span></p>

                <form action="{{route('contact')}}" method="POST" >
                {{csrf_field()}}
                    <div class="form-group has-error">
                        <label class="control-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" required="required">
                        {{$errors->first('name')}}

                    </div>

                    <div class="form-group ">
                        <label class="control-label">Email</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" required="required">
                        {{$errors->first('email')}}

                    </div>


                    <div class="form-group ">
                        <textarea class="form-control" name="contenu" rows="10" cols="10" required="required">{{old('contenu')}}</textarea>
                        {{$errors->first('message')}}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info btn-block">Submit Enquiry &raquo;</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
