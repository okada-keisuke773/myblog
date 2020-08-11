@extends('layouts.work')

@section('title', '職務経歴')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h2>職務経歴</h2>
            <form action="{{action('Admin\WorkController@create')}}" method="post" enctype="multipart/form-data">
                @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                        <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group row">
                    <label class="col-md-2" for="title">職歴・会社名</label>
                    <div class="col-md-10">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                    </div>
                </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="body">詳細</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="description" rows="20">{{ old('description') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2" for="file">ファイル</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <button type="submit">アップロード</button>
                        </div>
                    </div>
                {{ csrf_field()}}
                <br>
                <br>
                <input type="submit" value="送信">
            </form>
        </div>
    </div>
</div>
@endsection