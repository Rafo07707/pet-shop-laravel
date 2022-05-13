@extends('layouts.master')

@section('title')
    Pet Shop Home Page
@endsection

@section('styles')

@endsection

@section('content')
        <div class="contact-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ti-location-pin"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Our Location</h4>
                                <p>012 345 678 / 123 456 789</p>
                                <p><a href="#">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ti-mobile"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Contact us Anytime</h4>
                                <p>Mobile: 012 345 678</p>
                                <p>Fax: 123 456 789</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="contact-info-wrapper text-center mb-30">
                            <div class="contact-info-icon">
                                <i class="ti-email"></i>
                            </div>
                            <div class="contact-info-content">
                                <h4>Write Some Words</h4>
                                <p><a href="#">Support24/7@example.com </a></p>
                                <p><a href="#">info@example.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="contact-message-wrapper">
                            <h4 class="contact-title">GET IN TOUCH</h4>
                            <div class="contact-message">
                                <form id="contact-form" action=" mail.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="contact-form-style mb-20">
                                                <input name="name" placeholder="Full Name" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="contact-form-style mb-20">
                                                <input name="email" placeholder="Email Address" type="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style mb-20">
                                                <input name="subject" placeholder="Subject" type="text">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact-form-style">
                                                <textarea name="message" placeholder="Message"></textarea>
                                                <button class="submit btn-style" type="submit">SEND MESSAGE</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3046.846165488956!2d44.46784391522507!3d40.21248477938952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x406a975265a1336b%3A0xee2d161657a1b4b!2zMTYg0LrQstCw0YDRgtCw0Ls!5e0!3m2!1sru!2s!4v1652466526641!5m2!1sru!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

            </div>
        </div>





		<!-- all js here -->
@endsection

@section('scripts')

@endsection


