@extends('layout')

@section('content')
    <main>
        <div class="container">
            <a href="/dashboard/menu-items" class="link link--primary text-uppercase sm-text back-btn">Go back</a>
            <h1>New Menu Item</h1>
            <form method="POST" action="/dashboard/menu-items" class="ml-0">
                @csrf
                <label for="item-name">
                    <p>Name</p>
                <input type="text" name="name" id="item-name" value="{{old('name')}}">
                    @error('name')
                <p style="margin-bottom:0;"><small style="color:red;">{{$errors->first('name')}}</small></p>
                    @enderror
                </label>
                <label for="item-price">
                    <p>Price</p>
                <input type="number" min="1" step="0.01" name="price" id="item-price" value="{{old('price')}}">
                    @error('price')
                <p style="margin-bottom:0;"><small style="color:red;">{{$errors->first('price')}}</small></p>
                    @enderror
                </label>
                <label for="item-description">
                    <p>Description</p>
                <input type="text" name="description" id="item-description" value="{{old('description')}}">
                    @error('description')
                <p style="margin-bottom:0;"><small style="color:red;">{{$errors->first('description')}}</small></p>
                    @enderror
                </label>
                <label for="item-category">
                    <p>Category</p>
                <select name="category_id" id="item-category">
                    <option selected value=""> -- select a category -- </option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}" @if (old('category_id') == $category->id) {{ 'selected' }} @endif>{{$category->name}}</option>
                    @endforeach
                    {{-- <option value="starters" @if (old('category') == "starters") {{ 'selected' }} @endif>Starters</option>
                        <option value="deserts" @if (old('category') == "deserts") {{ 'selected' }} @endif>Deserts</option> --}}
                    </select>
                    @error('category_id')
                <p style="margin-bottom:0;"><small style="color:red;">{{$errors->first('category_id')}}</small></p>
                    @enderror
                </label>
                <br><br>
                <input type="submit" value="Add New Item">
            </form>
        </div>
    </main>
@endsection