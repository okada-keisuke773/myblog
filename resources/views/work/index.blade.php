@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                <div class="file">
                                    @if ($headline->file)
                                    <a href="{{ asset('storage/file/' . $headline->file) }}">参考ファイル</a>
                                    @endif
                                </div>
                                <div class="name p-2">
                                    <h1>{{ Str::limit($headline->name, 70) }}</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="description mx-auto">{{ Str::limit($headline->description, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                                </div>
                                <div class="name">
                                    {{ Str::limit($post->name, 150) }}
                                </div>
                                <div class="description mt-3">
                                    {{ Str::limit($post->description, 1500) }}
                                </div>
                            </div>
                            <div class="file col-md-6 text-right mt-4">
                                @if ($post->file)
                                    <a href="{{ asset('storage/file/' . $headline->file) }}">参考ファイル</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr color="#c0c0c0">
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection