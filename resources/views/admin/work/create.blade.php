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
                職歴・会社名
                <input type="text" name="name" value="{{ old('name')}}">
                <br>
               <p>詳細</p>
                <textarea class="form-control" name="description" rows="20">{{ old('description') }}</textarea>
                <br>
                <input type="file" name="file">
                <button type="submit">アップロード</button>
                {{ csrf_field()}}
                <br>
                <br>
                <input type="submit" value="送信">
            </form>
        </div>
    </div>
</div>
@endsection