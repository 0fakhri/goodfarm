@extends('investor.layouts.app')
@section('content')

<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Investasi</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="apply_form_area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <form action="#" class="apply_form">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="apply_info_text text-center">
                                <h3>How much do you want?</h3>
                                <p>We provide online instant cash loans with quick approval that suit your term length</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="text" placeholder="Your name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="text" placeholder="Phone no.">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <select class="wide">
                                    <option data-display="Purpose">Purpose</option>
                                    <option value="1">Purpose 1</option>
                                    <option value="2">Purpose 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <select class="wide">
                                    <option data-display="Amount">Amount</option>
                                    <option value="1">$10</option>
                                    <option value="2">$20</option>
                                    <option value="3">$30</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <input type="text" name="" id="datepicker" placeholder="Month">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="pay_text">
                                <p>You have to pay: <span>$0</span></p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="single_field">
                                <textarea name="#" id="" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="submit_btn">
                                <button class="boxed-btn3" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection