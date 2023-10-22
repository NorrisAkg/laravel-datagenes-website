@extends('layouts.master')

@section('page_name', 'Contact')

@section('content')
    <section class="contact-section">
        <div class="contact-text">
            <h2 class="contact-text-title section-title"> Contact us </h2>

            <p class="contact-text-content">
                Fill the form to send us a message
            </p>
        </div>

        <form method="POST" action="send-message">
            @csrf
            <div class="contact-form">

                <div class="form-row">
                    <input name="firstname" placeholder="Firstname" class="form-control" />
                    <input name="lastname" placeholder="Lastname" class="form-control" />
                </div>

                <div class="form-row">
                    <input name="email" placeholder="Email" class="form-control" />
                    <input name="telephone" placeholder="Telephone" class="form-control" />
                </div>

                <div class="subject-field" style="">
                    <input name="subject" placeholder="Subject" class="form-control" />
                </div>

                <div class="message-field">
                    <textarea name="message" placeholder="Write your message..." class="form-control"></textarea>
                </div>

                <div class="submit-container">
                    <button class='submit-button' type="submit">Send</button>
                </div>
            </div>
        </form>

    </section>
@endsection
