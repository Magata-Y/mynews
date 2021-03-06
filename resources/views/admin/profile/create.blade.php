<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>MyNews</title>
    </head>
    <body>
        @extends('layouts.admin')
        
        @section('title', 'My プロフィールの作成')
        
        @section('content')
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <h2>My プロフィール</h2>
                        <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
                            
                            @if (count($errors) > 0)
                                <ul>
                                    @foreach($errors->all() as $e)
                                        <li>{{ $e }}</li>
                                        @endforeach
                                </ul>
                            @endif
                            <div class="form-group row">
                                <label class="col-md-2" for="name">氏名</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2" for="gender">性別</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2" for="hobby">趣味</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="hobby" rows="5">{{ old('hobby') }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2" for="introduction">自己紹介欄</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="introduction" rows="15">{{ old('introduction') }}</textarea>
                                </div>
                            </div>
                            {{ csrf_field() }}
                            <input type="submit" class="btn btn-primary" value="更新">
                        </form>
                    </div>
                </div>
            </div>
        @endsection
    </body>
</html>