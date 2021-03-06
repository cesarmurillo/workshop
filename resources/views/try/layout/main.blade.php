<!doctype html>
<html lang="en">
<head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
</head>
<body>

@yield('content')

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="//code.jquery.com/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

@stack('scripts')
<script>
    $(document).ready(function() {
        $('#mainTable').DataTable({
            ajax: '{!! route('datatable') !!}',
            columns: [
                { data: 'id' },
                { data: 'title' },
                { data: 'subtitle' },
                { data: 'isbn' },
                { data: 'condition' },
                { data: 'description' },
            ]
        });
    });
</script>
<script>
    $(document).ready(function(){

        $aa=0;
        $bb=0;
        $("#btn1").click(function(){

            $("x").append("<input  name='feature[]' class='form-control' type='text' readonly value='"+$('#trait').val()+"'>");
            $("y").append("<input  name='desc[]' class='form-control' type='text' readonly value='"+$('#desc').val()+"'>");
            $aa++;
            $bb++;


        });

        $("#btn2").click(function(){
            $("ol").append("<li>Appended item</li>");
        });
    });
</script>
</body>
</html>