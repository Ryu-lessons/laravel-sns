@extends('app')

@section('title', '記事更新')

@section('content')
@include('nav')
<div class="contaniner">
    <div class="row">
        <div class="col-12">
            <div class="card mt-3">
                <div class="card-body pt-0">
                    @include('error_card_list')
                    <div class="card-text">
                        <form method="POST" action="{{ route('articles.update', ['article' => $article]) }}">
                            @method('PATCH')
                            @include('articles.form')
                            <button class="btn blue-gradient btn-block" type="submit">更新する</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
