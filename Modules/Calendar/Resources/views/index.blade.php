@extends('layouts.main.main')

@section('title')
    Kalender
@endsection

@section('css')
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/calendar/css/main.css') }}" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css' />
    <!-- Custom styles for this template -->
    <link href="{{ asset('modules/calendar/css/main.css') }}" rel="stylesheet">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css'  media="print" />
@endsection

@section('jstop')

@endsection

@section('jsbottom')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/nl.js"></script>
    <script>

		$(document).ready(function() {
			$('#calendar').fullCalendar({
				themeSystem: 'bootstrap4',
				defaultView: 'month',
				header: {
					left: 'prevYear,prev today next,nextYear',
					center: 'title',
					right: 'agendaDay,agendaWeek,month,listYear'
				},
				events:  [
					{
						title : 'Dit is titel nummer 1',
						start : '2018-10-13',
						color  : '#6acf05',
					},
					{
						title : 'Dit is titel nummer 2',
						start : '2018-10-14T08:00:00',
						end : '2018-10-14T21:00:00',
						color  : '#874e87',
					},
					{
						title : 'Dit is titel nummer 3',
						start : '2018-10-14T08:00:00',
						end : '2018-10-18T21:00:00',
						color  : '#874e87',
					},
					{
						title : 'Dit is titel nummer 4',
						start : '2018-10-16',
						color  : '#6acf05',
					},

                        {{--@foreach($calenders as $calender)--}}
					{{--{--}}
						{{--title : '{{ $calender->calender_name }}',--}}
                        {{--@if($calender->calender_all_day==1)--}}
						{{--start : '{{ $calender->calender_date }}',--}}
                        {{--@else--}}
						{{--start : '{{ $calender->calender_start }}',--}}
						{{--end : '{{ $calender->calender_end }}',--}}
                        {{--@endif--}}
						{{--url : '{{ route('kalender.edit', $calender->id) }}',--}}
						{{--color  : '{{ $calender->calender_color }}',--}}
					{{--},--}}
                    {{--@endforeach--}}
				],
				eventClick: function(event) {
					window.open(event.url, 'gcalevent', 'width=900,height=600');
					return false;
				},
				eventRender: function(event, element, view) {
					var ntoday = new Date().getTime();
					var eventEnd = moment( event.end ).valueOf();
					var eventStart = moment( event.start ).valueOf();
					if (!event.end){
						if (eventStart < ntoday){
							element.addClass("past-event");
							element.children().addClass("past-event");
						}
					} else {
						if (eventEnd < ntoday){
							element.addClass("past-event");
							element.children().addClass("past-event");
						}
					}
					if ( event.allDay === true ) {
						element.addClass("allday-event");
						element.children().addClass("allday-event");
					}
				}
			});
		});
    </script>

@endsection


@section('content')

    {{-- Content here--}}
    <div class="section-a row">
        <div class="col-md-12">
            <h3>Kalender</h3>
            <div id='calendar'></div>

        </div>
    </div>
    {{-- End content--}}

@endsection

