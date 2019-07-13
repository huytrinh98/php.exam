<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>T1807M Exam</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/font.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('js/datatables/datatables.css') }}" type="text/css"/>
        <link rel="stylesheet" href="{{ asset('js/fuelux/fuelux.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('js/select2/select2.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('js/select2/theme.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('css/print.css') }}" type="text/css" media="print">
    </head>
    <body>
        <section class="panel panel-default">
            <header class="panel-heading">
                All Bill Data
            </header>
            <div class="table-responsive">
                <table class="table table-striped m-b-none" data-ride="datatables" id="table">
                    <thead>
                        <tr>
                            <th width="">ID</th>
                            <th width="">Author ID</th>
                            <th width="">Title</th>
                            <th width="">ISBN</th>
                            <th width="">Publish Year</th>
                            <th width="">Available</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book )
                        <tr>
                            <td>{{ $book->bookid }}</td>
                            <td>{{ $book->authorid }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->ISBN }}</td>
                            <td>{{ $book->pub_year }}</td>
                            <td>{{ $book->available }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <!-- App -->
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('js/app.plugin.js') }}"></script>
        <script src="{{ asset('js/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/fuelux/fuelux.js') }}"></script>

    </body>
</html>
