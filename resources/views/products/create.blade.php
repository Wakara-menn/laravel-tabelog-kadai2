@extends('layouts.app')

@section('content')
<div class="container">
    <h1>新しい店舗を追加</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="product-name">店舗名</label>
            <input type="text" name="name" id="product-name" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-price">価格</label>
            <input type="text" name="price" id="product-price" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-category">カテゴリ</label>
            <select name="category_id" class="form-control" id="product-category">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="product-address">住所</label>
            <input type="text" name="address" id="product-address" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-businesshours">営業時間</label>
            <input type="text" name="businesshours" id="product-businesshours" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-regularholiday">定休日</label>
            <input type="text" name="regularholiday" id="product-regularholiday" class="form-control">
        </div>
        <div class="form-group">
            <label for="product-description">店舗説明</label>
            <textarea name="description" id="product-description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">店舗を登録</button>
    </form>

    <a href="{{ route('products.index') }}">店舗一覧に戻る</a>
</div>
@endsection