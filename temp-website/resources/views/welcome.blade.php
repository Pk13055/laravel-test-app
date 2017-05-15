<!DOCTYPE html>
<html>
<head>
    <title> Test Homepage </title>
</head>
<body>
    <h1> Hello, <?php  echo $name; ?></h1>
    <ul>
        @foreach($chores as $chore => $value)
            <li>{{ $value }} </li>
        @endforeach
    </ul> 
    <!-- this sort of thing is only possible because of Laravel's use of the blade templating engine. It makes it easier and is sort of like Jinja template engine for Django  -->
</body>
</html>