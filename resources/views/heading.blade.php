<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TestQuestion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
   
    <div class="heading">
        <a id="home" href="{{route('Add')}}">ADD INFORMAION</a>
        <span class="pipe">|</span>
        <a id="list" href="{{route('List')}}">LISTING PAGE</a>
    </div>


@yield('content')


</body>
</html>