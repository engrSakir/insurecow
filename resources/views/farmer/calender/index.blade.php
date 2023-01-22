<!DOCTYPE html>
<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
    <style>
      .fc-unthemed td.fc-today { background: #1D5C2C; color: #ffffff; }
      .fc-event, .fc-event-dot { background: #1D5C2C; border: 1px solid #1D5C2C; color: #ffffff !important; }
      .fc-time { display: none; }
      .alert-insurecow { background: #1D5C2C; color: #ffffff; }
    </style>
  </head>
<body>
<div class="container">
  <div class="col-lg-8 offset-lg-2">
    <div class="response mt-5"></div>
    <div id='calendar'></div>  
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script>
$(document).ready(function () {
    var SITEURL = "{{url('/')}}";
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    var calendar = $('#calendar').fullCalendar({
      editable: true,
      events: SITEURL + "/farmer/calendar",
      displayEventTime: true,
      editable: true,
      eventRender: function (event, element, view) {
        if (event.allDay === 'true') {
          event.allDay = true;
        } else {
          event.allDay = false;
        }
      },
      selectable: true,
      selectHelper: true,
      select: function (start, end, allDay) {
        var title = prompt('Event Title:');
        if (title) {
          var start = $.fullCalendar.formatDate(start, "YYYY-MM-DD HH:mm:ss");
          var end = $.fullCalendar.formatDate(end, "YYYY-MM-DD HH:mm:ss");
          $.ajax({
            url: SITEURL + "/farmer/calendar/create",
            data: 'title=' + title + '&start=' + start + '&end=' + end,
            type: "POST",
            success: function (data) {
              displayMessage("Added Successfully");
            }
          });
          calendar.fullCalendar('renderEvent',
          {
            title: title,
            start: start,
            end: end,
            allDay: false
          },
          true
        );
      }
      calendar.fullCalendar('unselect');
    },
    eventDrop: function (event, delta) {
      var start = $.fullCalendar.formatDate(event.start, "YYYY-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(event.end, "YYYY-MM-DD HH:mm:ss");
      $.ajax({
        url: SITEURL + '/farmer/calendar/update',
        data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
        type: "POST",
        success: function (response) {
          displayMessage("Updated Successfully");
        }
      });
    },
    eventClick: function (event) {
      var deleteMsg = confirm("Do you really want to delete?");
      if (deleteMsg) {
        $.ajax({
          type: "POST",
          url: SITEURL + '/farmer/calendar/delete',
          data: "&id=" + event.id,
          success: function (response) {
            if(parseInt(response) > 0) {
              $('#calendar').fullCalendar('removeEvents', event.id);
              displayMessage("Deleted Successfully");
            }
          }
        });
      }
    }
  });
});
function displayMessage(message) {
  $(".response").html("<div class='alert alert-insurecow'>"+message+"</div>");
  setInterval(function() { $(".success").fadeOut(); }, 1000);
}
</script> 
</body>
</html>