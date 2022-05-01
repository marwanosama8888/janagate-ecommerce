
@extends('layouts.header')
@section('links')
<style>
    /* start small card */
.small-card {
  height: 100vh;
  background: #03e3fc;
  width: 70%;
  display: flex;
  padding: 0 50px;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  gap: 20px;
}

.div-small-card {
  width: 100%;
}


.card-footer a {
  text-decoration: none;
  color: #008897;
}

.btn-small-card {
  text-decoration: none;
  color: #008897;
}

.card-body h5 span {
  color: #008897;
}
/* end small card */
</style>
@endsection
<div class="container small-card">

    <!-- ^^^^^^^^^^^^^^^^^^^^^^ -->
    <div class="card text-center div-small-card">
      <div class="card-header">
          <h4>faild</h4>
      </div>
      <div class="card-body">
        <h5 class="card-title">Hello my Dear <span>{{ucfirst($username)}}</span></h5>
        <p class="card-text">
            Unfortunately, Your Product {{$productName}} has been refused .
            You welcom any time to ask for the reason        </p>
        <a href="#" class="btn-small-card">Janagate</a>
      </div>
      <div class="card-footer text-muted">
          <a href="https://www.tiktok.com/@janagate?is_from_webapp=1&sender_device=pc">janagate.Tiktok</a>
      </div>
    </div>
  </div>
