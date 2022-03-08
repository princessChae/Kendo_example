<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Kendo -->
    <link href="https://kendo.cdn.telerik.com/2022.1.119/styles/kendo.common.min.css" rel="stylesheet" />
    <link href="https://kendo.cdn.telerik.com/2022.1.119/styles/kendo.default.min.css" rel="stylesheet" />
    <script src="https://kendo.cdn.telerik.com/2022.1.119/js/jquery.min.js"></script>
    <script>
        if (typeof jQuery == "undefined") {
            // Fallback to local jQuery.
            document.write(decodeURIComponent('%3Cscript src="/path/to/local/jquery.min.js" %3E%3C/script%3E'));
        }
    </script>
    <script src="https://kendo.cdn.telerik.com/2022.1.119/js/kendo.all.min.js"></script>

    <!-- DataTable
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/rg-1.1.4/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-3.6.0/dt-1.11.5/rg-1.1.4/datatables.min.js"></script> -->
 
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    @include('master.header')
    @yield('content')
    @include('master.footer')
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>