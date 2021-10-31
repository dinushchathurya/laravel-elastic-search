<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="center">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1 class="text-primary" style="text-align: center;">Laravel Elasticsearch search example</h1>
            </div>
        </div>

        <div class="container center">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-6">
                            <form method="get">

                                <div class="input-group">

                                    <input name="search" value="{{ old('search') }}" type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit">search</button>
                                    </span>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="panel-body">

                    <div class="row">

                        <div class="col-lg-6">
                            @if(!empty($customers))
                            @foreach($customers as $key => $value)
                            <h3 class="text-danger">{{ $value['name'] }}</h3>
                            <p>{{ $value['email'] }}</p>
                            <p>{{ $value['phone'] }}</p>
                            @endforeach
                            @endif
                        </div>

                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Create New Customer
                                </div>
                                <div class="panel-body">


                                    @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif

                                    <form method="post" action="{{url('customer/Search/create')}}">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Name:</strong>
                                                    <input type="text" name="name" class="form-control"/>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Email:</strong>
                                                    <input type="email" name="email" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Phone:</strong>
                                                    <input type="text" name="phone" class="form-control" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </body>
</html>
