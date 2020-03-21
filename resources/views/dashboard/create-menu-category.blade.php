@extends('layout')

@section('content')
    <main>
        <div class="container">
            <a href="/dashboard/menu-categories" class="link link--primary text-uppercase sm-text back-btn">Go back</a>
            <h1>New Menu Category</h1>
            <form method="POST" action="/dashboard/menu-categories" class="ml-0">
                @csrf
                <label for="category-name">
                    <p>Category Name</p>
                    <input type="text" name="name" id="category-name">
                    @error('name')
                <p style="margin-bottom:0;"><small style="color:red;">{{$errors->first('name')}}</small></p>
                    @enderror
                </label>
                <br><br>
                <input type="submit" value="Add New Category">
            </form>
        </div>
    </main>
@endsection