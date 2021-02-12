@extends('layouts.profile')
@section('title', 'Myプロフィールの新規作成')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
            <h2>MYプロフィール新規作成</h2>
            <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                            @endforeach
                            </ul>
                    @endif
                    <div class="form-group row">
                    <label class="col-md-2" for="name">名前</label>
                    <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="gender">性別</label>
                        <div class="col-md-10">
                        <input id="gender-m" type="radio"  name="gender" value="male">
                            <label for="gender-m">男性</label>
                            <input id="gender-f" type="radio"  name="gender" value="female">
                            <label for="gender-f">女性</label>
                            </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="hobby">趣味</label>
                        <div class="col-md-10">
                        <textarea class="form-control" name="hobby" rows="20">{{ old('hobby') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label class="col-md-2" for="introduction">自己紹介</label>
                        <div class="col-md-10">
                        <textarea class="form-control" name="introduction" rows="20">{{ old('introduction') }}</textarea>
                        </div>
                    </div>
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                    </form>
            </div>
        </div>
    </div>
    @endsection 
                            