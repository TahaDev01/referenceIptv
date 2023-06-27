<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>description</title> 
</head> 
<style>
.container {
display: grid;
grid-template-columns: 2fr 1fr;
grid-template-rows: 1fr;
grid-column-gap: 25px;
grid-row-gap: 12px;
}

.div1 { grid-area: 1 / 2 / 2 / 3; }
</style>
<body style="background-color: #1f272b"> 
    <form action="{{route('checkoutView')}}" method="post">
      @csrf
      <input type="hidden" name="price" value="{{$price}}">
    <div class="productPage " style="width: 100%;height:100%">
        <h4 class="container m-auto mt-5 shadow p-3 mb-5 bg-body-tertiary rounded">What you should know before buying</h4>
        <div class="container m-auto mt-5 g-2">    
            <div class=" dev1 description  shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <h4>What do you learn through the course</h4><p>{{$valeurAjeuter}}</p>
                <h4>The number of videos </h4><p>{{$videos}}</p> 
                <h4>Duration of the course </h4><p>{{$duration}}</p>
                <h5>How to get a course </h5> When you click on the button below, you will move to the payment stage, and upon payment, you will receive the lesson via your e-mail within a few minutes</p>
                <button type="submit" class="btn btn-success w-100 mt-5">Checkout</button>
            </div>
            <div class=" description  shadow-sm p-3 mb-5 bg-body-tertiary rounded">
                <div class="d-flex justify-content-between mb-3">
                    <span>Course :</span>
                    <span>{{$course}}</span>
                </div>

                <div class="d-flex justify-content-between ">
                    <span>Price :</span>
                    <span>{{$price}}USD</span>
                </div> 
            
            </div>
        </div>

    </div>
    </form>
</body>
</html>