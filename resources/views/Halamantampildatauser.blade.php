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

<link rel="stylesheet" href="{{asset('artikles/css/screen.css')}}" type="text/css" media="screen" title="default" />
{{--[if IE]--}}
<link rel="stylesheet" media="all" type="text/css" href="{{asset('artikles/css/pro_dropline_ie.css')}}" />
{{--![endif]--}}

</script>

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
                <span> {!! link_to(route('homelog.index'),"Pesankereta.com",array('class'=>"navbar-brand"))!!}</span>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
                    @if(Sentinel::check())	
						<li role="presentation"  class="active"> {!! link_to(route('Viewuser.index'),"Lihat Data(user)")!!}</li>
						<li role="presentation">{!! link_to(route('Adduser.create'),"Isi Data(user)")!!}</li>
						<li role="presentation">{!! link_to(route('logout'),"Logout")!!}</li>
						@endif				
											
					</ul>
				</div>
			</div>			
		</div>
	</nav>
   
<div id="isitengah">
<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="{{asset('artikles/images/shared/side_shadowleft.jpg')}}" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="{{asset('artikles/images/shared/side_shadowright.jpg')}}" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		{{--  start content-table-inner ...................................................................... START --}}
		<div id="content-table-inner">
		
			{{--  start table-content  --}}
			<div id="table-content">
			
			
		 
				{{--  start product-table ..................................................................................... --}}
			
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nomor Kursi</a></th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Nama Pemesan</a></th>
					<th class="table-header-repeat line-left"><a href="">jenis Kelamin</a></th>
          <th class="table-header-repeat line-left"><a href="">No ktp</a></th>
          <th class="table-header-repeat line-left"><a href="">Alamat</a></th>
          <th class="table-header-repeat line-left"><a href="">Jumlah tiket</a></th>
          <th class="table-header-repeat line-left"><a href="">Pembayaran</a></th>
		  <th class="table-header-repeat line-left"><a href="">Metode Pembayaran</a></th>		
				
                </tr>
                @foreach($tiket as $tampil)
				<tr>
			
				  @if($nama==$tampil->nama_pemesan)
					<td>{!!$tampil->nomorkursi!!}</td>
					<td>{!!$tampil->nama_pemesan !!}</td>
					<td>{!!$tampil->jenis_kelamin!!}</td>
                    <td>{!!$tampil->no_ktp!!}</td>
                     <td>{!!$tampil->alamat!!}</td>
                     <td>{!!$tampil->jumlahtiket!!}</td>
                      <td>{!!$tampil->pembayaran!!}</td>
					  <td>{!!$tampil->jenispembayaran!!}</td>
					@endif
			 
                </tr>
                @endforeach
				</table>
				{{--  end product-table................................... --}}
			
			</div>
			{{--  end content-table  --}}
		
			{{--  start actions-box ............................................... --}}
		
			
			<div class="clear"></div>
		 
		</div>
		{{--  end content-table-inner ............................................END  --}}
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>
</div>

	

  </body>
  </html>