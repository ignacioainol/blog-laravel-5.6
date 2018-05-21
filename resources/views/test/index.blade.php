<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>{{ $article->title }}</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	<h1>{{ $article->title }}</h1>

		<hr>

	{{ $article->content }}

		<hr>

	{{ $article->user->name }} | {{ $article->category->name }}

	@foreach($article->tags as $tag)
		{{ $tag->name }}
	@endforeach	

</body>
</html>

