@extends('layout')

@section('title')
    <title>Dashboard</title>
@endsection

@section('content')
    <div class="dashboard wrapper">
        <nav class="dashboard__nav">
            <ul class="dashboard__nav-list">
                <li class="dashboard__nav-link"><a href="/dashboard/menu-items">Menu Items</a></li>
                <li class="dashboard__nav-link"><a href="/dashboard/menu-categories">Menu Categories</a></li>
                <li class="dashboard__nav-link"><a href="/">Back To Site</a></li>
                <li class="dashboard__nav-link dashboard__nav-link--logout"><a href="" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Logout</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
            </ul>
        </nav>
        <main class="dashboard__main">
            <div class="container">
                <h1>Welcome back</h1>
                <ul class="dashboard__list">
                    <li class="dashboard__item">
                        <h2 class="dashboard__item-number">{{$totalMenuItems}}</h2>
                        <p class="dashboard__item-description">menu items</p>
                    </li>
                    <li class="dashboard__item">
                        <h2 class="dashboard__item-number">{{$totalCategories}}</h2>
                        <p class="dashboard__item-description">menu categories</p>
                    </li>
                </ul>
            </div>
        </main>
    </div>
@endsection