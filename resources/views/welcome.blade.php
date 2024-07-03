<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shring-to-fit-no" >

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
       
</style>
    <title>P5</title>
</head>
<body>




        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="">PARIWISATA</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                </div>
         
            </div>
        </nav>




<div class="container mt-5 " >
    <div class="row">
        @foreach ($destinasi as $data)
      <div class="col-md-4">
        <div class="card">
            <img class="postcard__img" src="{{asset('/storage/destinasis/'. $data->image)}}" alt="Image Title" />
            <div class="card-body">
                <p class="card-text">{{ $data->deskripsi}} </p>

          </div>
        </div>
      </div>
      @endforeach
    </div>
</div>

 <!-- Footer -->

</footer>



</body>

</html>
