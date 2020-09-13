@extends('layout.tourGuide-layout')

@section('title')

    <h2>Home</h2>
    <p>Welcome <span class="bread-ntd">{{session("username")}}</span></p>

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

@section('script')
    <script src="{{asset('js/calendar/moment.min.js')}}"></script>

    <script type="text/javascript" >
        $(function() {

            var todayDate = moment().startOf('day');
            var YM = todayDate.format('YYYY-MM');

            var YESTERDAY = todayDate.clone().subtract(1, 'day').format('YYYY-MM-DD');
            var TODAY = todayDate.format('YYYY-MM-DD');
            var TOMORROW = todayDate.clone().add(1, 'day').format('YYYY-MM-DD');

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                navLinks: true,
                backgroundColor: '#1f2e86',
                eventTextColor: '#1f2e86',
                textColor: '#378006',
                dayClick: function(date, jsEvent, view) {

                    alert('Clicked on: ' + date.format());

                    alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);

                    alert('Current view: ' + view.name);

                    // change the day's background color just for fun
                    $(this).css('background-color', 'red');

                },
                events: [
                    // {
                    //
                    //
                    // },
                    @foreach($listTransactions as $item)
                    {
                        title: '{{\App\Area::find(\App\Transaction::find($item->transaction_id)->province_id)->province}}',
                        start: "{{substr($item->start, 0, 10)}}",
                        end: "{{date_format(date_add(date_create($item->end),date_interval_create_from_date_string("1 days")),"Y-m-d")}}",
                        color: 'blue'
                    },
                    @endforeach
                    // {
                    //     title: 'ca mau',
                    //     start: YM + '-01',
                    //     end: YM + '-4',
                    //     color: '#59e0c5'
                    // },
                    // {
                    //     title: 'hải phòng',
                    //     start: YM + '-8',
                    //     end: YM + '-9',
                    //     color: '#59e0c5'
                    // },
                    // {
                    // 	id: 999,
                    // 	title: 'Hải phòng',
                    // 	start: YM + '-09T16:00:00',
                    // 	color: '#FF5370'
                    // },
                    // {
                    // 	id: 999,
                    // 	title: 'Quảng ninh',
                    // 	start: YM + '-16T16:00:00',
                    // 	color: '#FF5370'
                    // },
                    // {
                    // 	title: 'Hà giang',
                    // 	start: YESTERDAY,
                    // 	end: TOMORROW,
                    // 	color: '#f3c30b'
                    // },
                    // {
                    // 	title: 'Hà nội',
                    // 	start: TODAY + 'T10:30:00',
                    // 	end: TODAY + 'T12:30:00',
                    // 	color: '#1f2e86'
                    // },
                    // {
                    // 	title: 'Lunch',
                    // 	start: TODAY + 'T12:00:00',
                    // 	color: '#0D4CFF'
                    // },
                    // {
                    // 	title: 'Meeting',
                    // 	start: TODAY + 'T14:30:00',
                    // 	color: '#1f2e86'
                    // },
                    // {
                    // 	title: 'Happy Hour',
                    // 	start: TODAY + 'T17:30:00',
                    // 	color: '#AA00FF'
                    // },
                    // {
                    // 	title: 'Dinner',
                    // 	start: TODAY + 'T20:00:00',
                    // 	color: '#00BCD4'
                    // },
                    // {
                    // 	title: 'Birthday Party',
                    // 	start: TOMORROW + 'T07:00:00',
                    // 	color: '#FF5722'
                    // },
                    // {
                    // 	title: 'Click for Google',
                    // 	url: 'http://google.com/',
                    // 	start: YM + '-28',
                    // 	color: '#323232'
                    // }
                ]
            });
        });

    </script>
    <script src="{{asset('js/calendar/fullcalendar.min.js')}}"></script>
    <script src="{{asset('js/calendar/fullcalendar-active.js')}}"></script>

@endsection
