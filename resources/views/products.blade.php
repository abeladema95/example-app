<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">
    <title>Document</title>
</head>
<body class="u-body-flex">

@foreach($products as $product)
<article class="card">
    <header class="card__header">
        <h2 class="card__heading ">{{$product->name}}</h2>
     </header>
    <section class="card__description">
        {{$product->description}}
    </section>
    <section class="card__category">
    {{$product->category}}

    </section>
    @endforeach
</article>


</body>
</html>