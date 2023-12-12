@extends('layouts.master')
@section('title', 'Frequently Asked Questions (FAQ)')
@section('content')
<div class="mt-4 mb-5">
    <h4 class="text-center">Frequently Asked Questions (FAQ)</h4>
</div>
<div class="container mb-5">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    What is the delivery / pick-up time?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Our delivery / pick-up time is from 3pm to 5pm.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Can I change or cancel my order?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">We are unable to change or cancel the order once it's confirmed.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    How much is the delivery fee?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">We are using Grab / Lalamove for delivery. Delivery rate is based on the distance from our place to the delivery location. Please contact us for delivery fee inquiry.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Do I need to order in advance?
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, we need 2 days advance booking to prepare your order.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    How do I make payment?
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">We only accept online banking and Touch 'n Go e-wallet at the moment. Please send the proof to us to confirm your order.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Can I request for a greeting card?
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, you may write your message in the remark section.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                    Do you provide candles in my cake (whole cake) order?
                </button>
            </h2>
            <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Yes, candles are included for WHOLE CAKE ONLY.</div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    Should I kept my dessert refrigerated upon delivery / collection?
                </button>
            </h2>
            <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight"
                data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Our desserts contain cream and should be kept refrigerated at all times.</div>
            </div>
        </div>
    </div>
</div>

<style>
    .accordion-button{
        font-weight: bold;
        color: brown;
    }
</style>
@endsection