<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet" />
        <meta name="csrf-token" value="{{ csrf_token() }}" />
	<style>
		ol {
			list-style-type: none;
		}
		.row img {
			width: 100%;
			height: 200px;
			vertical-align: unset !important;
		}
	</style>
    </head>
    <body>
        <div id="app">
        	<div class="container">
          		<Day1></Day1>	
        	</div>
        </div>
         <script src="{{ mix('js/extend.js') }}" type="text/javascript"></script>
    </body>

</html>