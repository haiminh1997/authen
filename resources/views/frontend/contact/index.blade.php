
@extends('frontend.layouts.fashion')
@section('title')
    Contact us
@endsection

@section('content')
<div class="contact">
    <div class="container">
        <h3>Contact Us</h3>
        <div class="col-md-3 col-sm-3 contact-left">
            <div class="address">
                <h4>ADDRESS</h4>
                <h5>345 Setwant natrer,</h5>
                <h5>Washington. United States.</h5>
            </div>
            <div class="phone">
                <h4>PHONE</h4>
                <h5>+1(401) 1234 567.</h5>
                <h5>+1(804) 4261 150.</h5>
            </div>
            <div class="email">
                <h4>EMAIL</h4>
                <h5><a href="mailto:info@example.com">example@gmail.com</a></h5>
                <h5><a href="mailto:info@example.com">example2@yahoo.com</a></h5>
            </div>
        </div>
        <div class="col-md-9 col-sm-9 contact-right">
            <form action="#" method="post">
                <input type="text" name="your name" placeholder="Your name" required=" ">
                <input type="text" name="your email" placeholder="Your email" required=" ">
                <input type="text" name="your subject" placeholder="Your subject" required=" ">
                <input type="text" name="your phone number" placeholder="Phone number" required=" ">
                <textarea  name="your message" placeholder="Your message" required=" "></textarea>
                <input type="submit" value="Send message">
            </form>
        </div>
    </div>
</div>
<div class="map-w3ls">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.281963705778!2d105.7852926142445!3d20.981331594773177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135accdcf7b0bd1%3A0xc1cf5dd00247628a!2zSOG7jWMgVmnhu4duIEPDtG5nIG5naOG7hyBCxrB1IENow61uaCBWaeG7hW4gVGjDtG5nIC0gUFRJVA!5e0!3m2!1svi!2s!4v1568425217514!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
@endsection
