@extends('layout')

@section('title')
    <title>Dashboard | Menu Items</title>
@endsection

@section('content')
<main>
    <div class="container">
        <a href="/dashboard" class="link link--primary text-uppercase sm-text back-link">Back to dashboard</a>
        <header class="dashboard-header">
            <h1 class="dashboard-header__title">Menu Items</h1>
            <a href="/dashboard/menu-items/create" class="dashboard-header__btn">Add new item</a>
        </header>
        @if ($menuItems->isEmpty())
        <p>There are no menu items available. Go <a href="/dashboard/menu-items/create" class="link link--primary">add an item</a>.</p>
        @else
        <table class="table">
                <thead class="table__head">
                    <tr>
                        <th class="table__header">Name</th>
                        <th class="table__header">Price</th>
                        <th class="table__header"></th>
                        <th class="table__header"></th>
                    </tr>
                </thead>
                <tbody class="table__body">
                    @foreach ($menuItems as $item)
                        <tr>
                            <td class="table__data">{{$item->name}}</td>
                            <td class="table__data">${{number_format($item->price, 2)}}</td>
                        <td class="table__data"><a href="/dashboard/menu-items/{{$item->id}}/edit" class="table__edit-link">edit</a></td>
                            <td class="table__data">
                            <form method="POST" action="/dashboard/menu-items/{{$item->id}}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="" value="{{$item->id}}">
                                <input type="submit" class="table__delete-btn" value="X">
                            </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        {{ $menuItems->links() }}
    </div>
</main>
@endsection