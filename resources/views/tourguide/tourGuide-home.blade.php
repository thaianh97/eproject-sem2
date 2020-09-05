@extends('layout.tourGuide-layout')

@section('title')

    <h2>Home</h2>
    <p>Welcome <span class="bread-ntd">tourGuide</span></p>

@endsection
@section('content')

        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" >
                        <div class="calender-inner"  >
                            <div id='calendar' class="fc fc-unthemed fc-ltr">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection

