<!-- calender.blade.php -->
<!doctype html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />
</head>

<body>
    <div class="container">
        @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Calendario de Prestamo</h2>
            </div>
            <div class="panel-body">
                {{!! $calendar->calendar() !!}}
            </div>
        </div>
        <a href="/event/add">Añadir nuevo Prestamo</a>

    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    {{!! $calendar->script() !!}}
    <a href="/">Regresar</a>
</body>

</html>
