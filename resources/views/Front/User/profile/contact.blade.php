@extends('Front.User.layout.app')<!--Page title-->
@section('title')
Security
@endsection
@section('header') 
<style >
	.Profile-class{
		padding: 10px;
	}
	.Profile-class li {
		padding: 10px ;
		border-bottom: 1px dashed #ddd;
		font-size: 18px;
	}
</style>
<div class="col-12 px-0 py-5 ">
	<div  class="m-auto" >
		<div class="form_grid border-0"> 
			           @include('Front/includes/errors')
					    <form class="contact_form" id="contact_form" name="contact_form" action="{{route('sendMessage')}}" method="post">
							@csrf
							<div class="row">
				                <div class="col-md-6">
				                    <div class="form-group">
										<input id="form_name" name="name" class="form-control" required="required" type="text" placeholder="Name">
									</div>
				                </div>
				                <div class="col-md-6">
				                    <div class="form-group">
				                    	<input id="form_email" name="email" class="form-control required email" required="required" type="email" placeholder="Email">
				                    </div>
				                </div>
				                <div class="col-md-6">
				                    <div class="form-group">
				                    	<input id="form_phone" name="phone" class="form-control required phone" required="required" type="phone" placeholder="Phone">
				                    </div>
				                </div>
				                <div class="col-md-6">
				                    <div class="form-group">
					                    <input id="form_subject" name="title" class="form-control required" required="required" type="text" placeholder="Subject">
									</div>
				                </div>
				                <div class="col-sm-12">
		                            <div class="form-group">
		                                <textarea id="form_message" name="message" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
		                            </div>
				                    <div class="form-group mb0">
					                    <button type="submit" class="btn btn-lg btn-thm">Send Message</button>
				                    </div>
				                </div>
			                </div>
			            </form>
					</div>


	</div>
</div>
 
@endsection