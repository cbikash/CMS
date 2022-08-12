@extends('layouts.admin')
@section('content')

<div class="boxes">
<div class="row">
    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5>Courses</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-info"><a href="{{route('product.index')}}">{{$product}}</a> </p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-info"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-info">Messages</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-info"> <a href="{{route('message.index')}}">{{$message}} </a> </p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-info"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-primary">Enquries</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-primary"> <a href="{{route('enquiry.index')}}">{{$enquiry}}</a> </p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-primary"></i>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="col-md-4">--}}
{{--        <div class="box">--}}

{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="box-header">--}}
{{--                        <h5 class="text-secondary">Manufactures</h5>--}}
{{--                    </div>--}}
{{--                    <div class="box-content">--}}
{{--                        <p class="text-secondary"> <a href="{{route('manufacture.index')}}">{{$manufacture}}</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col">--}}
{{--                    <i class="fas fa-copy icon-box text-secondary"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-success">Total About</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-success"> <a href="{{route('about.index')}}">{{$about}}</a> </p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-success"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="box">

            <div class="row">
                <div class="col">
                    <div class="box-header">
                        <h5 class="text-danger">Total Service</h5>
                    </div>
                    <div class="box-content">
                        <p class="text-danger"> <a href="{{route('service.index')}}">{{$service}}</a></p>
                    </div>
                </div>

                <div class="col">
                    <i class="fas fa-copy icon-box text-danger"></i>
                </div>
            </div>
        </div>
    </div>

{{--    <div class="col-md-4">--}}
{{--        <div class="box">--}}

{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <div class="box-header">--}}
{{--                        <h5 class="text-info">Total Category</h5>--}}
{{--                    </div>--}}
{{--                    <div class="box-content">--}}
{{--                        <p class="text-info"> <a href="{{route('category.index')}}"> {{$category}}</a></p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col">--}}
{{--                    <i class="fas fa-copy icon-box text-info"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


</div>
<div class="bg-white" style="padding: 10px; border-radius: 10px;">

<div class="row">
    <div class="col-md-12 text-primary">
        <h5><b>Event Calendar</b></h5>
        <br>

    </div>
    <div class="col-md-3">
        <h4>This Month's Events:</h4>
        <hr>
        <div id="eventCal"></div>
    </div>
    <div class="col-md-9">
        <div class="bg-white">
            <div id='calendar'></div>
        </div>

    </div>
</div>
</div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Add Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          {!! Form::open(['method'=>'post','action'=>'App\Http\Controllers\EventController@store','files'=>true,'class'=>'eventForm'])!!}

          <div class="form-group row">
                  <div class="col-sm-12">
                      <lable class="col-form-label">Event Title <span class="text-danger">*</span></lable>
                      <input type="text" name="title" class="form-control" required>
                  </div>
              </div>
              <div class="form-group row">
                  <div class="col-sm-6">
                      <lable class="col-form-label">Event Start Date <span class="text-danger">*</span></lable>
                      <input type="text" name="startDate" class="form-control datepicker" required>
                  </div>

                  <div class="col-sm-6">
                      <lable class="col-form-label">Event End Date <span class="text-danger">*</span></lable>
                      <input type="text" name="endDate"  class="form-control datepicker" required>
                  </div>
              </div>
              <label class="col-form-label">Event Description</label>
              <textarea class="form-control" name="description"></textarea>
              <div class="row">
                  <div class="col-md-12 mt-5">
                      <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
              </div>
          </form>

      </div>
    </div>
  </div>
</div>

<nav class="fab-container undefined"><button class="fab-item undefined" data-toggle="modal" data-target="#exampleModal"  style="background: rgb(61, 136, 216); color: rgb(255, 255, 255);"><i class="fa fa-plus"></i></button></nav>

@endsection


@section('scripts')

<script type="text/javascript">
    const eventUrl= "{{route('eventsList')}}";
    load();
    loadEvent();
    async function  load() {
        document.addEventListener('DOMContentLoaded', async function () {
                var calendarEl = document.getElementById('calendar');
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,listWeek'
                    },
                });
                calendar.render();
            const events = await fetch(`${eventUrl}`).then(response => response.json()).then(data=> {
                data.data.map(event => {
                    calendar.addEvent(event)
                })
            });

            }
        );
    }

   async function loadEvent(){
        let eventDiv = document.getElementById('eventCal');
         eventDiv.innerHTML = 'loading.....';
        let html = '<ul>';
        const events = await fetch(`${eventUrl}`).then(response => response.json()).then(data=> {
            data.data.map(event => {
                html += `<li><a href='#' data-id='${event.id}'>${event.title}</a></li>`;
            })

        })
       html += '</ul>'
       eventDiv.innerHTML = html;
    }

$(document).ready(function(){
    $('.datepicker').datepicker(
        {
            format: 'yyyy-mm-dd',
        }
    );

    $('.eventForm').on('submit', function (e) {
        e.preventDefault();
        let postData = $(this).serialize();
        let url = $(this).attr('action');
        $.post(url, postData, function(data){
          location.reload()
        });
    })
})
</script>
@endsection
