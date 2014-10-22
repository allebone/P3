@extends('layouts/default')
@section('content')

<div class="container">
	
	<div class="container container-margin-bottom">
		<div class="row marketing">
			<div class="jumbotron col-lg-6 pull-left">
				<h1>Lorem Ipsum Generator</h1>
				<p> In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.</p>
				<p>Create random filler text for your applications.</p>
				<p>
					<a id="btn1" class="btn btn-lg btn-success" href="#sec1" role="button">Lorem Ipsum Generator</a>
				</p>
			</div>
			<div class="jumbotron col-lg-6 pull-right">
				<h1>Random User Generator</h1>
				<p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>
				<p>
					<a id="btn2" class="btn btn-lg btn-success" href="#sec2" role="button">Random User Generator</a>
				</p>
			</div>
		</div>
	</div>

	<div class="container section padding-top" id="sec1">	
		{{Form::open(array('id'=>'frmlorem','onSubmit'=>'return false'))}}	
		<div class="col-md-3 row-margin-bottom col-centered text-center">
			<h3>{{Form::label('paragraphs', 'How many paragraphs', array('class' => 'label label-success'))}}</h3>
			{{ Form::number('paragraphs', 2, array('class' => 'form-control input-md', 'maxlength'=>'2','required', 'title'=>'Enter digits, max 99','min'=>'1', 'max'=>'99')) }}

			<div class="text-center row-margin-bottom">
				{{Form::submit(null,array('class' => 'btn btn-lg btn-success center-block','id'=>'btnsubmitparas'))}}
			</div>
		</div>
		{{ Form::textarea('txtareaparas', null,array('rows'=>'25','class'=>'form-control text-area','id'=>'txtareaparas','readonly')) }}
		{{Form::close()}}
	</div>

	<div class="container section padding-top" id="sec2">	
		{{Form::open(array('id'=>'frmusers','onSubmit'=>'return false'))}}	
		<div class="col-md-3 row-margin-bottom col-centered text-center">
			<h3>{{Form::label('users', 'How many users', array('class' => 'label label-success'))}}</h3>
			{{ Form::number('users', 2, array('class' => 'form-control input-md', 'maxlength'=>'2','required', 'title'=>'Enter digits, max 99','min'=>'1', 'max'=>'99')) }}
			<h3>Include</h3>

			{{Form::checkbox('birthdate','birthdate')}}
			{{Form::label('birthdate', 'Birthdate')}}</br>
			
			{{Form::checkbox('location','location')}}
			{{Form::label('location', 'Location')}}</br>
			

			{{Form::checkbox('profile','profile')}}
			{{Form::label('profile', 'Profile')}}</br>

			<div class="text-center row-margin-bottom">
				{{Form::submit(null,array('class' => 'btn btn-lg btn-success center-block','id'=>'btnsubmitusers'))}}
			</div>
		</div>
		<div class="col-md-6 col-centered">
			{{ Form::textarea('textareausers', null,array('rows'=>'20','class'=>'form-control  text-area','id'=>'textareausers','readonly')) }}
		</div>
		{{Form::close()}}
	</div>
</div> <!-- /container -->
@stop