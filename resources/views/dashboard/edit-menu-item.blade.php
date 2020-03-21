@extends('layout')

@section('title')
    <title>{{$menuItem->name}}</title>
@endsection

@section('content')
    <main>
        <div class="container">
            <a href="/dashboard/menu-items" class="link link--primary text-uppercase sm-text back-btn">Go back</a>
            <h1>Edit Menu Item</h1>
            <form method="POST" action="/dashboard/menu-items/{{$menuItem->id}}" class="ml-0">
                @csrf
                @method('PUT')
                <label for="item-name">
                    <p>Name</p>
                    <input type="text" name="name" id="item-name" value="{{$menuItem->name}}">
                    @error('name')
                <p style="margin-bottom:0;"><small style="color:red;">{{$errors->first('name')}}</small></p>
                    @enderror
                </label>
                <label for="item-price">
                    <p>Price</p>
                    <input type="number" name="price" id="item-price" step="0.01" value="{{$menuItem->price}}">
                    @error('price')
                <p style="margin-bottom:0;"><small style="color:red;">{{$errors->first('price')}}</small></p>
                    @enderror
                </label>
                <label for="item-description">
                    <p>Description</p>
                    <input type="text" name="description" id="item-description" value="{{$menuItem->description}}">
                    @error('description')
                <p style="margin-bottom:0;"><small style="color:red;">{{$errors->first('description')}}</small></p>
                    @enderror
                </label>
                <br><br>
                <input type="submit" value="Save">
            </form>
        </div>
    </main>
@endsection