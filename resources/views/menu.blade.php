@extends('layout')

@section('title')
    <title>Larascape | Menu</title>
@endsection

@section('content')
<header class="hero hero--menu menu-img trigger-4">
    <div class="hero__wrapper">
      <div class="title">
        <h2 class="title__sub title__sub--white js-fade-up">menu</h2>
      </div>
      <!-- title end -->
    </div>
  </header>

  <main>

    <div class="container">
      <section class="pt-5 pb-5">
        <p id="two-col-para">Chef Michel Paris Jr and Head Chef Steve Groves have created a menu of dishes using the
          finest seasonal
          produce. Table service throughout for food and drinks. Taking inspiration from around the world, all the
          dishes
          on our menu are designed for sharing. Using incredible British produce, whole animals and fish are butchered
          and prepared on site every day, and paired with ingredients so good they really speak for themselves.</p>
      </section>


      <section>
        <div class="main-menu-board">
          
          @foreach($menuList as $menu)
          
          @if (!$menu->menuItems->isEmpty())
            <div>
                <header class="menu-board-header">
                <h3>{{$menu->name}}</h3>
                  </header>
                  @foreach($menu->menuItems as $item)
                  <div class="menu-item">
                    <p class="dish-name">{{$item->name}} <strong>${{number_format($item->price, 2)}}</strong></p>
                    <small><i>{{$item->description}}</i></small>
                  </div>    
                  <!-- menu-item -->
                  @endforeach
            </div>
            @endif
        @endforeach


          {{-- <div class="starters">
            <header class="menu-board-header">
              <h3>Starters</h3>
            </header>

            <div class="menu-item">
              <p class="dish-name">ENGLISH-ASPARAGUS <strong>$14.95</strong></p>
              <small><i>Asparagus, hens egg, toasted sunflower seeds, Spenwood cheese</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">CORNISH-MACKEREL <strong>$10.45</strong></p>
              <small><i>Cornish mackerel, marinated tomatoes, fragrant curry, tamarillo</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">QUAIL <strong>$9.95</strong></p>
              <small><i>Smoked quail, crispy egg, spelt, girolles, parsley</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">CURRY-TAMARILLOR <strong>$7.95</strong></p>
              <small><i>Cornish mackerel, marinated tomatoes, fragrant curry, tamarillo</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">CRISPY <strong>$12.95</strong></p>
              <small><i>Smoked quail, crispy egg, spelt, girolles, parsley</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">ROASTED STEAK ROULADE <strong>$14.95</strong></p>
              <small><i>Mint parsley with apple cider vinegar, salt, sugar & spices</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">SEASONAL SOUP <strong>$5.95</strong></p>
              <small><i>Daily preparation</i></small>
            </div>
            <!-- menu-item -->

          </div> --}}
          <!-- starters -->

          {{-- <div class="mains">
            <header class="menu-board-header">
              <h3>Mains</h3>
            </header>

            <div class="menu-item">
              <p class="dish-name">SEA-TROUT <strong>$26.95</strong></p>
              <small><i>Roast Trout, English asparagus, Jersey Royals, watercress</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">FILET DE SAUMON <strong>$13.95</strong></p>
              <small><i>Baked salmon fillet, hollandaise sauce, rosemary salt potatoes</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">CONFIT DE CANARD <strong>$12.15</strong></p>
              <small><i>Duck confit, white bean & ham cassoulet, wilted spinach</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">POULET CORDON BLEU <strong>$13.95</strong></p>
              <small><i>Paupiette of chicken, blue cheese & ham, rosemary salt and beans</i></small>
            </div>
            <!-- menu-item -->

          </div> --}}
          <!-- mains -->

          {{-- <div class="desert">
            <header class="menu-board-header">
              <h3>Desert</h3>
            </header>

            <div class="menu-item">
              <p class="dish-name">CREME BRULEE <strong>$5.25</strong></p>
              <small><i>Rich vanilla custard with a caramelised sugar crust</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">TARTE TATIN <strong>$5.95</strong></p>
              <small><i>Caramelised apple tart, vanilla ice cream</i></small>
            </div>
            <!-- menu-item -->

            <div class="menu-item">
              <p class="dish-name">ASSIETTE DE FROMAGES <strong>$6.95</strong></p>
              <small><i>French cheese selection, chutney and biscuits</i></small>
            </div>
            <!-- menu-item -->


          </div> --}}
          <!-- desert -->

        </div>
        <!-- main-menu-board -->

      </section>

    </div>
    <!-- container -->

  </main>

@endsection