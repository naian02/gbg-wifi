
@extends('app')

@section('wifi')

<section>
    <div class="row align-items-center justify-content-center mt-5">
    <h1 style="color: #fff;" class="mb-5">Connect to Wi-Fi</h1>
    <form action="{{ url('/connect-wifi') }}" method="POST">@csrf
        <div class="col-8">
        <label style="color: #fff;" for="ssid">Wi-Fi SSID:</label>
        <input type="text" id="ssid" name="ssid" required><br><br>
        </div>
        <div class="col-8">
        <label style="color: #fff; for="password">Wi-Fi Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        </div>
        <div class="col-8">
        <button type="submit" class="btn btn-white">Connect</button>
        </div>
    </form>

    @if (session('status'))
        <p>{{ session('message') }}</p>
    @endif
</section>
@endsection