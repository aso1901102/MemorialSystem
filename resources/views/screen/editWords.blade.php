<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <style>
        .footer {
            height: "30%";
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

    <title>メインメニュー</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="content" align="center">
        <form method="post" action="/editfinish">
            {{ csrf_field() }}
            <table border="1">
                <input type = "hidden" name = "id" value = "{{$words->id}}">
                <tr>
            	    <td>ID</td><td>{{$words->id}}</td>
                </tr>
                <tr>
            	    <td>単語</td><td><input type="text" name="words" value = "{{old('words',$words -> words)}}"><br>
                    @if ($errors->has('words'))
                        {{$errors->first('words')}}
                    @endif</td>
                </tr>
                <tr>
                    <td>意味・読み方</td><td><input type="text" name="meanings" value  = "{{old('meanings',$words -> meanings)}}"><br>
                    @if ($errors->has('meanings'))
                        {{$errors->first('meanings')}}
                    @endif</td>
                </tr>
                <tr>
                    <td>分類</td><td>	<select name="category">
                                            <option value="英単語">英単語</option>
                                            <option value="英文法">英文法</option>
                                            <option value="漢字">漢字</option>
                                    	</select>
                    @if ($errors->has('category'))
                        {{$errors->first('category')}}
                    @endif</td>
                </tr>
                <tr>
            	    <td colspan="2" align="center"><input type="submit" value="更新"></td>
                </tr>
            </table>
        </form>
	</div>
</body>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</html>