<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorise</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="content" style=" display:flex; justify-content:center; align-items: center;height:600px;">
            <div class="col-md-4">
                <form action="{{route('addking')}}" method="POST" style="background-color: whitesmoke;">
                    @csrf
                    @if(session("Success"))
                        <div class="alert alert-success">{{session('Success')}}</div>
                    @endif
                    <div class="card-header">Form Record Products</div>
                    <div class="form-group">
                        <!-- pro_name -->

                        <label for="pro_image" style="padding:10px">Image</label>
                        <input type="text" class="form-control" name="proImage">

                        <!-- pro_name -->

                        <label for="pro_name" style="padding:10px">Name</label>
                        <input type="text" class="form-control" name="proName">

                        <!-- pro_size -->

                        <label for="pro_size" style="padding:10px">Size</label>
                        <input type="text" class="form-control" name="proSize">

                        <!-- pro_price -->

                        <label for="pro_price" style="padding:10px">Price</label>
                        <input type="text" class="form-control" name="proPrice">

                        <!-- pro_cate_id -->

                        <label for="proCate_id" style="padding:10px">Cate_ID</label>
                        <input type="text" class="form-control" name="proCate_id">
                    </div>
                    <div class="input" style="margin-top: 2%;">
                        <input type="submit" value="Record" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>