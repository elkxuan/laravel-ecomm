@extends('layouts.master')
@section('title', __('faq.faq.title'))
@section('content')
<div class="mt-4 mb-5">
    <h4 class="text-center">@lang('faq.faq.title')</h4>
</div>
<div class="container mb-5">
    <div class="accordion accordion-flush" id="accordionFlushExample">
        @foreach(range(1, 8) as $i)
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-heading{{ $i }}">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{ $i }}" aria-expanded="false" aria-controls="flush-collapse{{ $i }}">
                        @lang('faq.faq.question' . $i)
                    </button>
                </h2>
                <div id="flush-collapse{{ $i }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $i }}"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">@lang('faq.faq.answer' . $i)</div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .accordion-button {
        font-weight: bold;
        color: brown;
    }
</style>
@endsection
