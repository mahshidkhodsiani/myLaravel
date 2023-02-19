<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @if(empty($articles))
       <p> this is empty </p>
    @else
        <p>this isn't empty</p>
    @endif

    @foreach($articles as $article)
        {{ $article }} <br />
    @endforeach

</body>
</html>