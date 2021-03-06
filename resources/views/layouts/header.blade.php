<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>@yield('title')</title>
<!-- icon fontawesome -->
<link rel="stylesheet" href="{{asset('assets/css/all.min.css')}}" />
<!-- bootstrap file -->
<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" />

<link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"
/>

<!-- googl fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
<link
  href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;700&display=swap"
  rel="stylesheet"
/>

<link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"
/>

@yield('links')

<!-- my css file -->
@if ( LaravelLocalization::getCurrentLocale() == 'en' )
<link rel="stylesheet" href="{{asset('assets/css/mainen.css')}}" />

@else
<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

@endif
