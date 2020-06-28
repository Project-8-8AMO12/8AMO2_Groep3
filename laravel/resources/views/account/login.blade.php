<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>imkersleiden</title>

    <script src="/js/app.js"></script>
    <link href="/css/app.css" rel="stylesheet">
</head>

<body>

<div class="container-fluid">
    <div class="row ">
        <div id="left-panel" class="col-sm-6 d-none d-md-block">
        </div>
        <div class="col-sm-6 my-auto ">
            <div class="col-12 offset-0 col-md-8 offset-md-2 col-xl-6 offset-xl-3 dark-color-3 p-5">
                <div class="row pb-4">
                    <div class="col d-flex">
                        <img src="https://www.imkersleiden.nl/wp-content/uploads/2019/07/Logo-Imkers-Leiden.svg"
                             alt="logo" class="mx-auto">
                    </div>
                </div>

                <form class="row" method="post" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <input type="text" placeholder="Username" name="username"
                           class="form-control form-control-lg dark-color-4 my-3"/>
                    <input type="password" placeholder="Password" name="password"
                           class="form-control form-control-lg dark-color-4 my-3"/>


                    <div class="col-12 px-0 text-center">
                        <span style="color: red;">{{ Session::get('error') }}</span>
                        @foreach($errors->all() as $error)
                            <span style="color: red;">{{ $error }}</span><br/>
                        @endforeach
                    </div>

                    <input type="submit" name="login"
                           class="btn btn-warning btn-lg btn--no-border-radius my-3 mt-4 w-100" value="LOGIN"/>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>
