<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php latihan 3 </title>
    <link href="{{asset('kereta/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('kereta/css/pesantiket.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('kereta/css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('kereta/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('kereta/css/jquery.bxslider.css')}}">
	<link href="{{asset('kereta/css/style.css')}}" rel="stylesheet">
  
  </head>
  <body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
		
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                <span> {!! link_to(route('home.index'),"Pesankereta.com",array('class'=>"navbar-brand"))!!}</span>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"  class="active">  {!! link_to(route('Login.index'),"Login")!!}</li>
						<li role="presentation">{!! link_to(route('Signup.index'),"Signup")!!}</li>
											
					</ul>
				</div>
			</div>			
		</div>
	</nav>
   
<div id="isi">
<div id="gbox">
          <div id="gbox-top"> </div>
          <div id="gbox-bg">
            <div id="gbox-grd">
              <h1>Login </h1>
              <br>
              <h2 id="error"></h2>
              <br>       
{!! Form::open(['route' => 'login.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
      <table witdh="200px">
          <tr>
              <td id="label">Username</td>
              <td colspan="2">&nbsp;: {!! Form::text('email', null, array('size'=>14,'placeholder'=>'input email')) !!}	
							</td>
                            <td> {!! $errors->first('email') !!}	</td>
</tr>
<tr>
    <td>&nbsp;</td>
    
    <td>&nbsp;</td>
</tr>

<tr>
              <td id="label">Password</td>
              <td colspan="2">&nbsp;:{!! Form::password('password', null, array('size'=>14,'placeholder'=>'input password')) !!}</td>
              <td> {!! $errors->first('password') !!}	</td>
</tr>
<tr>
<td>{!! link_to(route('reminders.create'),'Forgot Password?')!!}</td>

</tr>
<tr>
    <td>&nbsp;</td>
    
    <td>&nbsp;</td>
</tr>
 
</table>
@if(count($errors)>0)
	 
	     <ul>
		   @foreach($errors->all() as $error)
		     <li>{{$error}}</li>
			 @endforeach
			</ul>
			
			@endif
	

  {!! Form::submit('Login') !!}&nbsp;&nbsp; {!! Form::reset('Reset') !!}
  {!! Form::close() !!}
</div>
</div>
</div>
</div>

	


  </body>
  </html>