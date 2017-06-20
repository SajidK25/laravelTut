<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>
@foreach ($posts as $post)
  <ul>
    <li>
      <a href="{{ route('post.show',$post->id) }}"><h1>{{ $post->title }}</h1></a>


      <li>
        <ul>{{ $post->content }}</ul>

    <ul>
      <a href="{{ route('post.edit',$post->id) }}">delete</a>
@endforeach

</body>
</html>
