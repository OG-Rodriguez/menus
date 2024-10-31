@extends('layout')

@section('title', 'Contact')

@section('content')
    <h1>Contact Section</h1>
    <p>Get in touch with us by filling out the form below.</p>
    <form action="#" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message"></textarea><br><br>

        <button type="submit">Send</button>
    </form>
@endsection
