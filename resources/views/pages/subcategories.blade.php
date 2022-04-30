@extends('layouts.master')
@section('title')
    المنتجات
@endsection
@section('content')
    <!-- start section categories -->
    <section class="categories-all">
        <div class="container">
            <div class="linkat-categories">

                @php
                    $category = App\Models\Category::all();
                @endphp
                @foreach ($category as $item )

                <a href="{{ url('category/'. $item->slug)}}">
                    {{$item->name}}
                </a>
                @endforeach
            </div>



            {{-- <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ --> --}}
            {{-- <div class="card-categories">
                <div class="row"> --}}
            {{-- @foreach ($data->products as $item)

                        <div class="col-md-3">
                            <a href="{{ url('product/' . $item->slug) }}">
                                <div class="card">
                                    <div class="div-img">
                                        <img src="{{ $item->getMedia() ? $item->getFirstMediaUrl() : url('https://picsum.photos/820/300') }}"
                                            alt="" />
                                    </div>
                                    <div class="text-card">
                                        <p>{{ $item->name }}</p>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p>{{ $item->price }} ريال</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div> --}}


            {{-- </div>
        </div>
        <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^ --> --}}
            <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
            <div class="card-categories">
                <div class="row">
                    @foreach ($data->products as $item)
                        <div class="col-md-3">
                            <a href="{{ url('product/' . $item->slug) }}">
                                <div class="card">
                                    <div class="div-img">
                                        <img src="{{ $item->getMedia() ? $item->getFirstMediaUrl() : url('https://picsum.photos/820/300') }}"
                                            alt="" />
                                    </div>
                                    <div class="text-card">
                                        <p>{{ $item->name }}</p>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p>{{ $item->price }} ريال</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

            <div class="pagination-catego" dir="ltr">
                @if ($data->products->count())
                {!! $data->products->links() !!}

                @else
<p>Please Check Another Category</p>
                @endif

                {{-- <a href="#">
                    1
                </a>
                <a href="#">
                    2
                </a>
                <a href="#">
                    3
                </a>
                <a href="#">
                    4
                </a>
                <a href="#">
                    5
                </a> --}}
            </div>
        </div>
    </section>
    <!-- end section categories -->
@endsection
