@extends('layouts.frontend.app')
@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="categories__item categories__large__item set-bg"
                        data-setbg="{{ asset('me') }}/img/wallpaper.jpg">
                        <div class="">
                        <h1 style="color: white">Get started with us!</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-4 text-center">
                <div class="categories__text ">
                        <h5 style="text-center color: black"><u>KATEGORI UNTUK ANDA</u></h5>
                        </div>
                    <div class="row p-2">
                        @foreach ($data['new_categories'] as $category)
                            <div class="col-lg-4 col-md-4 col-sm-4 p-0">
                                <div class="categories__item set-bg"
                                    data-setbg="{{ asset('storage/' . $category->thumbnails) }}">
                                </div>
                                <div class="categories__text">
                                    <h5 class="text-center">{{ $category->name }}</h5>
                                    <p class="text-center">{{ $category->Products()->count() }} Item</p>
                                    <p class="text-center"><a href="{{ route('category.show',$category->slug) }}">Lihat Produk</a></p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>produk pilihan</h4>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">All</li>
                        @foreach ($data['new_categories'] as $new_categories)
                            <li data-filter=".{{ $new_categories->slug }}">{{ $new_categories->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row property__gallery">
                @foreach ($data['new_categories'] as $new_categories2)
                    @foreach ($new_categories2->Products()->limit(4)->get()
        as $product)
                        <div class="col-lg-3 col-md-4 col-sm-6 mix {{ $new_categories2->slug }}"> 
                            @component('components.frontend.product-card')
                                @slot('image', asset('storage/' . $product->thumbnails)) 
                                @slot('route', route('product.show', ['categoriSlug' => $new_categories2->slug, 'productSlug' =>
                                    $product->slug]))
                                    @slot('name', $product->name)
                                    @slot('price', $product->price)
                                @endcomponent
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Product Section End -->
    @endsection
