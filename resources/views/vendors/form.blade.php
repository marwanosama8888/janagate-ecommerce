@extends('layouts.master')
@section('title')
التاجر
@endsection
@section('links')
    <!-- start new links for ajax  -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
  />
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
    rel="stylesheet"
  />
    <!-- end new links for ajax  -->
@endsection
@section('content')

    <section class="sec-page">
        <div class="container">
            <div class="page-all">
                @if(Session::has('success'))

                <div class="alert alert-success text-center">
                    {{Session::get('success')}}

                </div>
             @endif

             @if(Session::has('fail'))

             <div class="alert alert-danger text-center">
                {{Session::get('fail')}}

             </div>
         @endif
                <form id="myForm" action="{{ url('vendor/store') }}" method="POST" enctype="multipart/form-data">
                    <!-- ************** -->
                    @csrf
                    <div class="enwan-page">
                        <div class="arrow-page">
                            <a href="{{ route('vendor-category') }}">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                        <h5>{{ trans('vendor.image') }}</h5>
                    </div>

                    <div class="box-img-all">
                        <div class="box-div">
                          <div class="box-img">
                            <img id="file-ip-1-preview" src="./images/img-box-page.png" alt="" />
                            <p>{{ trans('vendor.fstimg') }}</p>
                          </div>
                          <div class="div-upload">
                            <div class="center">
                              <div class="form-input">
                                <div class="preview">
                                  <!-- <img id="file-ip-1-preview" /> -->
                                </div>
                                <label for="file-ip-1">Upload Image</label>
                                <input
                                  type="file"
                                  name="image1"
                                  id="file-ip-1"
                                  accept="image/*"
                                  onchange="showPreview(event);"
                                />
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="box-div">
                          <div class="box-img">
                            <img id="file-ip-2-preview" src="./images/img-box-page.png" alt="" />
                            <p>{{ trans('vendor.sndimg') }}</p>
                          </div>
                          <div class="div-upload">
                            <div class="center">
                              <div class="form-input">
                                <div class="preview">
                                  <!-- <img id="file-ip-2-preview" /> -->
                                </div>
                                <label for="file-ip-2">Upload Image</label>
                                <input
                                  type="file"
                                  name="image2"

                                  id="file-ip-2"
                                  accept="image/*"
                                  onchange="showPreview2(event);"
                                />
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="box-div">
                          <div class="box-img">
                            <img id="file-ip-3-preview" src="./images/img-box-page.png" alt="" />
                            <p>{{ trans('vendor.trdimg') }}</p>
                          </div>
                          <div class="div-upload">
                            <div class="center">
                              <div class="form-input">
                                <div class="preview">
                                  <!-- <img id="file-ip-3-preview" /> -->
                                </div>
                                <label for="file-ip-3">Upload Image</label>
                                <input
                                  type="file"
                                  name="image3"

                                  id="file-ip-3"
                                  accept="image/*"
                                  onchange="showPreview3(event);"
                                />
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="box-div">
                          <div class="box-img">
                            <img id="file-ip-4-preview" src="./images/img-box-page.png" alt="" />
                            <p>{{ trans('vendor.fthimg') }}</p>
                          </div>
                          <div class="div-upload">
                            <div class="center">
                              <div class="form-input">
                                <div class="preview">
                                  <!-- <img id="file-ip-4-preview" /> -->
                                </div>
                                <label for="file-ip-4">Upload Image</label>
                                <input
                                  type="file"
                                  name="image4"

                                  id="file-ip-4"
                                  accept="image/*"
                                  onchange="showPreview4(event);"
                                />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    <!-- ************** -->
                    <div class="sec-two">
                        <h5>{{ trans('vendor.title') }}</h5>
                        <input type="text" name="product_title" placeholder=" ﻣﺜﺎل:" required />
                        <h6>{{ trans('vendor.addtitle') }}</h6>
                    </div>
                    <hr />
                    <div class="sec-three">
                        <h5>{{ trans('vendor.category') }}</h5>
                        <select name="sub_category" required>
                        @foreach ($data['subCategories'] as  $item)

                            <option value="{{$item['id']}}" >{{$item['name']}}</option>

                            @endforeach
                        </select>
                    </div>
                    <hr />
                    <div class="sec-four">
                        <h5>{{ trans('vendor.price') }}</h5>
                        <input name="price" type="number" />
                      </div>
                      <hr />
                      <div class="sec-five">
                        <h5>{{ trans('vendor.info') }}</h5>
                        <input name="info" type="text" />
                        <h5>{{ trans('vendor.material') }}</h5>
                        <input name="material" type="text" />
                        <h5>{{ trans('vendor.weight') }}</h5>
                        <input name="weight" type="number" />
                        <h5>{{ trans('vendor.handw') }}</h5>
                        <input name="widthHeight" type="text" />
                      </div>
                      <hr />
                      <div class="sec-sex">
                        <h5>{{ trans('vendor.desc') }}</h5>
                        <textarea  name="description" >{{ trans('vendor.desc') }}</textarea>

                    </div>
                    <div class="input-group m-5">
                        <input
                          type="text"
                          class="form-control p-4"
                          data-role="tagsinput"
                        />
                      </div>
                    <button class="btn-ersal">{{ trans('vendor.send') }}</button>
                    </form>
            </div>

        </div>
    </section>
@endsection
@section('scripts')
<style>
    .m-5 {
      margin: 30px 0 !important;
    }

    .bootstrap-tagsinput {
      padding: 10px 0;
    }

    .bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: white !important;
    background-color: silver;
    padding: 5px;
    border-radius: 5px;
    line-height: 2.5;
  }
  </style>

<script>
    $(function () {
          $('input')
            .on('change', function (event) {
              var $element = $(event.target);
              var $container = $element.closest('.example');

              if (!$element.data('tagsinput')) return;

              var val = $element.val();
              if (val === null) val = 'null';
              var items = $element.tagsinput('items');

              $('code', $('pre.val', $container)).html(
                $.isArray(val)
                  ? JSON.stringify(val)
                  : '"' + val.replace('"', '\\"') + '"'
              );
              $('code', $('pre.items', $container)).html(
                JSON.stringify($element.tagsinput('items'))
              );
            })
            .trigger('change');
        });
        </script>
<script>

    document.getElementById("myForm").onkeypress = function(e) {
     var key = e.charCode || e.keyCode || 0;
     if (key == 13) {
       e.preventDefault();
     }
   }
 </script>

@endsection
