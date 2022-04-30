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
                @foreach ($category as $item)
                    <a href="{{ url('category/' . $item->slug) }}">
                        {{ $item->name }}
                    </a>
                @endforeach
            </div>


            @if (isset($message))
            <center>

                    <div class="alert alert-danger text-center">
                        There Is No Product With This Name </div>
            </center>
            @else

            <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
            <div class="card-categories">

                <div class="row">
                        @foreach ($result as $data )

                        <div class="col-md-3">
                            <a href="{{ url('product/' . $data->slug) }}">
                                <div class="card">
                                    <div class="div-img">
                                        <img src="{{ $data->getMedia() ? $data->getFirstMediaUrl() : url('https://picsum.photos/820/300') }}"
                                            alt="" />
                                    </div>
                                    <div class="text-card">
                                        <p>{{ $data->name }}</p>
                                        <div class="stars">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <p>{{ $data->price }} ريال</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                @endif

            </div>
            <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

            <div class="pagination-catego" dir="ltr">
                @if (isset($result))
                    {!! $result->links() !!}
                @else
                    <p>Please Check Another Category</p>
                @endif

            </div>
        </div>
    </section>
    <!-- end section categories -->
@endsection
