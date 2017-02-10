@extends('master')

@section('title')
Aanmelden als jongere
@stop

@section('content')
	
	<section class="container-fluid xs-space-inside-sides-sm space-inside-sides-xl no-overflow ">
		

		<div class="row fadeInDown wow">

			<div class="col-lg-12 space-outside-lg xs-text-center "> 

				<h1>{{ $data['aanmeldenJongeren']->title }}</h1>

			</div>

			@if(session('succeed'))
				<div class="col-lg-12 space-outside-down-lg fadeInDown wow">
					<div class="alert alert-success" role="alert">
						<p class="text bold">
							
							{!! session('succeed') !!} 

						</p>
					</div>
				</div>
			@endif

			<div class="col-lg-5 space-outside-down-lg">
				
				<div class="image aanmelden-foto">
					
					<img class="height-auto" src="images/resultaten5.jpg" alt="jongere die zich wil aanmelden">

				</div>

					<a href='folder-mentor' class="btn-standard bg-main text-color-light light space-outside-sm">PDF hier downloaden</a>

			</div>
			
			<div class="col-lg-7 space-inside-sides-md">
				
				<p class="text space-outside-down-lg ">
					{!! nl2br($data['aanmeldenJongeren']->body) !!}	

				</p>

				<a href="/over-ons" class="btn-standard bg-secondary text-color-light light space-outside-down-lg"> MEER OVER MENTOR4YOU</a>

			</div>

		</div>

		<div class="divider bg-accent"></div>

	</section>

	<section class="container-fluid  space-outside-lg xs-space-inside-sides-sm space-inside-sides-xl fadeInDown wow">

			
		<div class="row">
			
			<div class="col-lg-12 col-xs-12 xs-space-inside-sides-md space-outside-down-lg xs-text-center">
			
				<h1> {{ $data['aanmelden']->title }}	 </h1>	

			</div>

			<div class="col-lg-8 col-xs-12 xs-space-inside-sides-md space-outside-down-md">
				
				<p>{!! nl2br($data['aanmelden']->body) !!}	</p>

			</div>


			<div class="col-lg-12">
				
				<p class="text bold ">
					
					Vul het onderstaand formulier in

				</p>

			</div>

		<form method='post' action='/mail/jongere-mail'>

		{{ csrf_field() }}

		<div class="col-lg-12 space-outside-md">


			<div class="row">
					

				<div class="col-lg-5 space-outside-up-sm"> 
	    		
					<label>Voornaam</label>
					<input type='text' name='voornaam' placeholder='Voornaam' class='input border border-accent space-outside-xs' required />

	    		</div>

	    		<div class="col-lg-5 clear-left space-outside-up-sm"> 

	    			<label>Achternaam</label>
					<input type='text' name='achternaam' placeholder='Achternaam' class='input border border-accent space-outside-xs' required />

	    		</div>

				<div class="col-lg-5 clear-left space-outside-up-sm"> 

					<label>Telefoonnummer</label>
					<input type='text' name='telefoonnummer' placeholder='Telefoonnummer' class='input border border-accent space-outside-xs' required />

				</div>

				<div class="col-lg-5 clear-left space-outside-up-sm"> 

					<label>Emailadres</label>
					<input type='text' name='emailadres' placeholder='Emailadres' class='input border border-accent space-outside-xs' required />

				</div>

				<div class="col-lg-5 clear-left space-outside-up-sm"> 

					<label>Gemeente</label>
					

				</div>

				<div class="col-lg-5 clear-left space-outside-up-sm"> 

					<label>Geboortedatum</label>
					<input type='text' name='geboortedatum' class='input border border-accent space-outside-xs font-xs datepicker' />

				</div>
				
				<div class="col-lg-7 clear-left space-outside-up-sm"> 	
					<label>Bericht</label>
					<textarea name='bericht' class='textarea border border-accent space-outside-xs' required></textarea>
				</div>

				<div class="col-lg-12 space-outside-sm"> 
					 <input type='submit' name='Verzenden' value='Verzenden' class='btn-standard bg-secondary light text-color-light' />
				</div>
				
			</div>

		</div>

			</form>

				

			</div>


		</div>


	</section>

@stop