@extends('layouts.template')
@section('style')
	<!-- bootstrap datepicker -->
	{{ Html::style(('public/vendor/AdminLTE-2.4.2/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')) }}
	<!-- Select2 -->
	{{ Html::style(('public/vendor/AdminLTE-2.4.2/bower_components/select2/dist/css/select2.min.css')) }}
	{{ Html::style(('public/vendor/mapbox/mapbox-gl.css')) }}
	<style>
		.select2 * {
			moz-border-radius: 0 !important;
			webkit-border-radius: 0 !important;
			border-radius: 0 !important;
			height: 32px !important;
		}
		.ds-box-title {
			font-size: .80em;
		}
		.charts-box {
			min-height: 350px;
			margin: 20px 0;
		}
		.map-box {
			width: 100%;
			min-height: 580px;
			position: relative;
		}
		#map { position:absolute; top:0; bottom:0; width:100%; }
		.mapboxgl-popup {
			max-width: 400px;
			font: 12px/20px 'Helvetica Neue', Arial, Helvetica, sans-serif;
		}
		.map-popup {
			margin: 0;
			padding: 5px;
			list-style: none;
		}
		.map-popup li span {
			display: inline-block;
			width: 46px;
			font-weight: bold;
		}
		.map-overlay {
			position: absolute;
			bottom: 0;
			right: 0;
			background: rgba(255, 255, 255, 0.8);
			margin-right: 20px;
			font-family: Arial, sans-serif;
			overflow: auto;
			border-radius: 3px;
		}
		#legend {
			padding: 10px;
			box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
			line-height: 18px;
			height: 120px;
			margin-bottom: 40px;

		}
		.legend-key {
			display: inline-block;
			border-radius: 20%;
			width: 10px;
			height: 10px;
			margin-right: 5px;
		}
	</style>
@endsection
@section('incHeaderScript')
	{{ Html::script(('public/vendor/Chart.PieceLabel.js/src/Chart.bundle.min.js')) }}
	{{ Html::script(('public/vendor/Chart.PieceLabel.js/src/Chart.PieceLabel.js')) }}
	{{ Html::script(('public/vendor/mapbox/mapbox-gl.js')) }}
@endsection
@section('content')

@stop
@section('script')
