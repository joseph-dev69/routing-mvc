
@extends('layouts.app')

@section('content')

    <section class="hero">
        <h1>Welcome to My Website</h1>

        <p>
            Discover our website and learn more about who we are,
            what we do, and how you can get in touch with us.
        </p>

        <a href="/about" class="btn">Learn More</a>
        <a href="/contact" class="btn btn-secondary">
            Contact Us
        </a>
    </section>

    <section class="content">
        <h2>Explore Our Website</h2>
        <p>
            Use the navigation menu to explore our pages
            and discover more information.
        </p>
    </section>

@endsection
