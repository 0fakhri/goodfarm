@extends('investor.layouts.app')
@section('content')

<div class="bradcam_area bradcam_bg_3">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="bradcam_text">
                    <h3>Chat</h3>
                </div>
            </div>
        </div>
    </div>
</div>

<private-chat :user="{{auth()->user()}}"></private-chat>

@endsection