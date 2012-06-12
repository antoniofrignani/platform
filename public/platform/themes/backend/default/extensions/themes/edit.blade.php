@layout('templates.template')

@section('title')
	{{ Lang::line('themes::themes.general.title') }}
@endsection

@section('links')
	{{ Theme::asset('themes::css/themes.less') }}
@endsection

@section('body_scripts')
	{{ Theme::asset('themes::js/themes.js') }}
@endsection

@section('content')

<section id="themes">

		<header class="row">
			<div class="span12">
				<img src="{{ Theme::asset('../../'.$theme['dir'].'/assets/img/theme-thumbnail.png') }}" title="{{ $theme['dir'] }}">
				<h1>{{ $theme['name'] }}</h1>
				<p>{{ $theme['description'] }} by {{ $theme['author'] }} v{{ $theme['version'] }}</p>
			</div>
		</header>

		<hr>

		<div class="theme row">
			<div class="span12">

				@if (count($theme['options']))
					{{ Form::open(null, 'POST', array('id' => 'theme-options', 'class' => 'well form-horizontal')) }}

						<input type="hidden" name="theme" value="{{ $theme['dir'] }}">
						@if (isset($theme['id']))
						<input type="hidden" name="id" value="{{ $theme['id'] }}">
						@endif

						@foreach ($theme['options'] as $id => $option)
						<fieldset>
							<legend>{{ $option['text'] }}</legend>
							@foreach ($option['styles'] as $style => $value)
								<label>{{ $style }}</label>
								<input type="text" name="options[{{$id}}][styles][{{$style}}]" value="{{ $value }}">
							@endforeach
						</fieldset>
						@endforeach
						<div class="form-actions">
			            	<button class="btn btn-primary" type="submit" name="form_options" value="apply">Apply Changes</button>
			            	<a class="btn" href="../../{{ URI::segment(4) }}">Finished</a>
			          	</div>



					{{ Form::close() }}
				@endif
			</div>
		</div>

</section>

@endsection
