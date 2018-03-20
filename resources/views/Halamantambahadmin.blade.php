<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesan tiket </title>
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
                    @if(Sentinel::check())	
						<li role="presentation"  class="active"> {!! link_to(route('Viewadmin.index'),"Lihat Data")!!}</li>
						<li role="presentation">{!! link_to(route('Addadmin.create'),"Isi Data")!!}</li>
						<li role="presentation">{!! link_to(route('logout'),"Logout")!!}</li>
						@endif				
											
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
              <h1>Pesan Tiket </h1>
              <br>
              <h2 id="error"></h2>
              <br>       
  {!! Form::open(['route' => 'Addadmin.store', 'class' => 'form-horizontal', 'role' => 'form']) !!}
      <table witdh="200px">
          <tr>
              <td id="label">Nama pemesan</td>
              <td colspan="2">&nbsp;: {!! Form::text('nama_pemesan', null, array('size'=>14,'placeholder'=>'masukan nama pemesan')) !!}	
							</td>
                         
                  </tr>
<tr>
    <td>&nbsp;</td>
    
    <td>&nbsp;</td>
</tr>

<tr>
             <td>{!!Form::radio('jenis_kelamin', 'Laki-laki')!!} Laki-Laki </td>
             <td>{!!Form::radio('jenis_kelamin', 'Wanita')!!} Wanita</td>
</tr>
<tr>
    <td>&nbsp;</td>
    
    <td>&nbsp;</td>
</tr>
  <tr>
  <td id="label">No ktp</td>
              <td colspan="2">&nbsp;: {!! Form::text('no_ktp', null, array('size'=>14,'placeholder'=>'masukan no ktp')) !!}	
							</td>
                      
                  </tr>
</tr>
</table>
<p>Masukan alamat:</p>
{!! Form::textarea('alamat') !!}
<br>
Jumlah tiket:
<br>
{!! Form::number('jumlah', 0)!!}
<br>
<br>

Bayar &nbsp;&nbsp;&nbsp;&nbsp;
{!! Form::text('pembayaran', null, array('size'=>14,'placeholder'=>'masukan jumlah pembayaran')) !!}	
<br>
<br>
Jenis Pembayar &nbsp;&nbsp;&nbsp;&nbsp;
{{ Form::select('jenispembayaran', [
   '' => '--Pilih Jenis Pembayaran--',
   'ATM' => 'Menggunakan Debit',
   'Cash' => 'Pembayaran tunai']
) }}
<br>
<br>
<br>
<br>
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