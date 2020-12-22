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

    <script>
        function confirm_delete() { //確認ボタンをクリックした場合
            document.getElementById('popup').style.display = 'block';
            return false;
        }
    </script>

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
    <!-- Left Side Of Navbar -->
    <!-- タブ -->
	<ul class="nav nav-tabs" id="myTab" role="tablist">
    	<!--<li class="nav-item">
    		<a class="nav-link active" id="home-tab" data-toggle="tab" href="#exam" role="tab" aria-controls="home" aria-selected="true">確認テスト</a>
        </li>-->
    	<li class="nav-item">
    		<a class="nav-link" id="home-tab" data-toggle="tab" href="#enwords" role="tab" aria-controls="twice" aria-selected="false">英単語</a>
        </li>
        <li class="nav-item">
        	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#enrow" role="tab" aria-controls="thirds" aria-selected="false">英文法</a>
        </li>
        <li class="nav-item">
    	    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#jnwords" role="tab" aria-controls="fourth" aria-selected="false">漢字</a>
        </li>
        <li class="nav-item">
    	    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#addition" role="tab" aria-controls="fifth" aria-selected="false">新規追加</a>
        </li>
    </ul>

    <!-- Right Side Of Navbar -->
	<div class="button text-right mr-3">

	</div>

    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="enwords" role="tabpanel" aria-labelledby="home-tab">
            <div class="content mt-3 mb-5" align="center">
                <table border="1">
                    <tr>
                        <th class="text-center">単語</th>
                        <th class="text-center">意味</th>
                        <th class="text-center" colspan = 2>変更</th>
                    </tr>
                    @each('compornent.indexcomp',$enwords,'data')
            	</table>
            </div>
        </div>

        <div class="tab-pane fade" id="enrow" role="tabpanel" aria-labelledby="contact-tab">
            <div class="content mt-3 mb-5" align="center">
                <table border="1">
                    <tr>
                        <th class="text-center">単語</th>
                        <th class="text-center">意味</th>
                        <th class="text-center" colspan = 2>変更</th>
                    </tr>
                    @each('compornent.indexcomp',$enrow,'data')
            	</table>
            </div>

        </div>
        <div class="tab-pane fade" id="jnwords" role="tabpanel" aria-labelledby="contact-tab">
            <div class="content mt-3 mb-5" align="center">
                <table border="1">
                    <tr>
                        <th class="text-center">単語</th>
                        <th class="text-center">読み</th>
                        <th class="text-center" colspan = 2>変更</th>
                    </tr>
                    @each('compornent.indexcomp',$jnwords,'data')
            	</table>
            </div>
        </div>
        <div class="tab-pane fade show active" id="addition" role="tabpanel" aria-labelledby="contact-tab">
            <div class="content" align="center">

                <form method="post" action="/show">
                 {{ csrf_field() }}
            <!-- text form -->
                  <div class = "form-row">
                  	<div class = "form-group col-md-2">
                  	</div>
                  	<div class = "form-group col-md-4">
                  		<div class="md-form">
                  			<input type="text" name= "words" id="nameform" class="form-control" placeholder= "単語" value="{{ old('words') }}">
                  			    @if ($errors->has('words'))
                                    <span class="help-block text-danger">
                                        <strong>{{ $errors->first('words') }}</strong>
                                    </span>
                                @endif
                  		</div>
                  	</div>
                  	<div class = "form-group col-md-4">
                  		<div class="md-form">
                  			<input type="text" name= "meanings" id="mailform" class="form-control" placeholder= "読み方・意味" value="{{ old('meanings') }}">
                  			@if ($errors->has('meanings'))
                                <span class="help-block text-danger">
                                    <strong>{{ $errors->first('meanings') }}</strong>
                                </span>
                            @endif
                  		</div>
                  	</div>
                  </div>

            <!-- radio button -->
                  <div class = "form-row">
                    <div class = "form-group col-md-12">
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id ="rdo1" name = "category" value = "英単語">
                        <label class="custom-control-label" for="rdo1">英単語</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="rdo2" name="category" value="英文法">
                        <label class="custom-control-label" for="rdo2">英文法</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="rdo3" name="category" value = "漢字">
                        <label class="custom-control-label" for="rdo3">漢字</label>
                      </div>
                    @if ($errors->has('category'))
                        <span class="help-block text-danger">
                            <strong>{{ $errors->first('category') }}</strong>
                        </span>
                    @endif
                    </div>
                  </div>

            <!-- submit button -->
                  <div class = "form-row">
                  	<div class = "form-group col-md-2">
                  	</div>
                    <div class = "form-group col-md-8  mb-5">
                      <input type="submit" value="追加" class="btn btn-amber btn-block">
                    </div>
                  </div>
                </form>

            </div>
        </div>
	</div>

    <div class="footer fixed-bottom ">
        <div class = "container-fluid bg-warning text-white text-center pt-1 pb-1" id = "footer">
			<h1>ようこそ、{{ $user -> name }}
    		<button>
                <a href="/logout">
                    Logout
    			</a>
            </button>
        	</h1>
        </div>
    </div>
</body>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
</html>