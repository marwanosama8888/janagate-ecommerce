@extends('layouts.master')

@section('title')
    Contact Us
@endsection
@section('content')
    <div class="contact-bg">
        {!! $data->campain_url !!}
        <script async src="https://www.tiktok.com/embed.js"></script>
    </div>

    <!-- start etsl bena all -->
    <section class="sec-etsl-bena-all">
        <div class="container">
            <div class="etsl-bena-allll">
                <div class="etsl-bena-input">
                    <h3>{{ trans('contact.now') }}</h3>
                    <form id="SubmitForm" action="{{ route('landing.page') }}" method="get">

                        <input type="text" id="nameInput" name="name" placeholder="{{ trans('contact.name') }}"
                            required />
                        <input type="email" id="emailInput" name="email" placeholder="{{ trans('contact.email') }}"
                            required />
                        <input type="number" id="phoneInput" name="phone" placeholder="{{ trans('contact.phone') }}" />
                        <textarea id="messageInput" name="message">{{ trans('contact.message') }}</textarea>
                        <button type="submit">{{ trans('contact.send') }}</button>

                    </form>
                </div>
                <div class="etsl-bena-text">
                    <h1>{{ trans('contact.stay') }}</h1>
                    <p>
                        {{ trans('contact.vision') }}
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
        $('#SubmitForm').on('submit', function(e) {
            e.preventDefault();

            let name = $('#nameInput').val();
            let email = $('#emailInput').val();
            let phone = $('#phoneInput').val();
            let message = $('#messageInput').val();


            $.ajax({
                url: "{{ route('new.message') }}",
                type: "GET",
                data: {
                    name: name,
                    email: email,
                    phone: phone,
                    message: message,

                },
                success: function(response) {
                    alert('Message Send To Janagate Successfuly');
                },
                error: function(response) {},
            });
        });
    </script>
@endsection
