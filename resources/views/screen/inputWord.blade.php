@extends('layouts.myapp')

<!-- タイトル -->
@section('title', 'ワード・登録')

<!-- コンテンツ部分 -->
@section('content')
  <form action="/monsters/create" method="post">
    {{ csrf_field() }}
    <table border="1">
      <tr>
        <th>ワード</th>
        <td>
          <input type="text" name="words" value="{{old('words')}}">
          @if ($errors->has('words'))
          <ul class="error">
            @foreach ($errors->get('words') as $e)
            <li>{{$e}}</li>
            @endforeach
          </ul>
          @endif
        </td>
      </tr>
      <tr>
        <th>意味</th>
        <td>
          <input type="text" name="meanings" value="{{old('meanings')}}">
          @if ($errors->has('meanings'))
          <ul class="error">
            @foreach ($errors->get('meanings') as $e)
            <li>{{$e}}</li>
            @endforeach
          </ul>
          @endif
        </td>
      </tr>
      <tr>
      <th>分類</th>
        <td>
          <input type="text" name="category" value="{{old('category')}}">
          @if ($errors->has('category'))
          <ul class="error">
            @foreach ($errors->get('category') as $e)
            <li>{{$e}}</li>
            @endforeach
          </ul>
          @endif
        </td>
      <input type="hidden" name="register" value="{{old('tegister')}}">
      <tr>
        <td colspan="2" align="center"><input type="submit" value="登録"></td>
      </tr>
    </table>
  </form>
@endsection
