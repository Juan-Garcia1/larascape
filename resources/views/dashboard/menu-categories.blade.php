@extends('layout')

@section('title')
    <title>Dashboard | Menu Categories</title>
@endsection

@section('content')
<main>
        <div class="container">
            <a href="/dashboard" class="link link--primary text-uppercase sm-text back-link">Back to dashboard</a>
            <header class="dashboard-header">
                <h1 class="dashboard-header__title">Menu Categories</h1>
                <a href="/dashboard/menu-categories/create" class="dashboard-header__btn">Add new category</a>
            </header>
            @if ($categories->isEmpty())
                <p>There are no categories available. Please <a href="/dashboard/menu-categories/create" class="link link--primary">add a category</a>.</p>
            @else
            <table class="table">
                    <thead class="table__head">
                        <tr>
                            <th class="table__header">Category Name</th>
                            <th class="table__header"></th>
                        </tr>
                    </thead>
                    <tbody class="table__body">
                        @foreach ($categories as $category)
                        <tr>
                                <td class="table__data">{{$category->name}}</td>
                                <td class="table__data table__data--center">
                                        <form method="POST" action="/dashboard/menu-categories/{{$category->id}}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="" value="{{$category->id}}">
                                            <input type="submit" class="table__delete-btn" value="X">
                                        </form>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            @endif
            
        </div>
    </main>
@endsection