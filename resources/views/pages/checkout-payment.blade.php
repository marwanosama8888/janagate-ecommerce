@section('main')
    <script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{ $responseData['id'] }}"></script>
    <form action="{{ route('redirect') }}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>
@endsection


