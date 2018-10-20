@extends('layouts.master')

@section('content')

  <div id="categories-menu">
      
    <div class="container">
        
      <ul class="menu horizontal align-center">
          
        @foreach ($categories as $cat)

          <li>
            <a href="{{ URL::to('category/' . $cat->slug) }}">
              {{ $cat->name }}
            </a>
          </li>

        @endforeach

      </ul>

    </div>

  </div>

  <section id="product-page">

    <div class="container">
      
      <div class="row">
          
        <div class="col col-sm-12">
          <h1>{{ $product->name }}</h1>
        </div>

      </div>

      <div class="row">
        
        <div class="col col-sm-5">

          <div class="product-image-section">

            <img class="product-main-thumb" src="{{ $thumbnails->count() == 0 ? asset('img/no_thumb.png') : asset('img/products/'.$thumbnails->first()->file_name) }}">
            
          </div>
          
        </div>

        <div class="col col-sm-7">

          <div class="product-info-section">
            
            <div class="price clearfix">
              <h2>
                Cena s DPH
              </h2>
              <h2 class="value align-right">
                {{ $product->priceWithVat() }}
              </h2>
            </div>

            <div class="line-separator"></div>

            <div class="brief-info">
              
              <ul class="brief-info-list">

                <li class="clearfix">
                  <span class="left">
                    Záruka:
                  </span>
                  <span class="right align-right bold">
                    {{ $product->warranty }}
                  </span>
                </li>

                <li class="clearfix">
                  <span class="left">
                    Kód produktu:
                  </span>
                  <span class="right align-right bold">
                    {{ $product->product_code }}
                  </span>
                </li>

                <li class="clearfix">
                  <span class="left">
                    Skladom:
                  </span>
                  <span class="right align-right bold">
                    {{ $product->stock }} ks
                  </span>
                </li>

              </ul>

            </div>

          </div>

        </div>

      </div>

      <div class="row margin-top">
        
        <div class="col col-sm-12">
          
          <div class="product-info-section">

            {!! $product->description !!}

          </div>

        </div>

      </div>

    </div>

  </section>

@stop