<html>
<body>
  <p>A list of items.</p>
  <ul>
    @foreach ($data as $item)
      <li>{{{ $item }}</li>
    @endforeach
  </ul>
</body>
</html>