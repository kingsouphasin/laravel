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
        <div class="content" style=" display:flex; justify-content:center; align-items: center;height:500px;">
            <div class="col-md-4">
                <form action="{{route('king')}}" method="POST" style="background-color: whitesmoke;">
                    @csrf
                    @if(session("Success"))
                        <div class="alert alert-success">{{session('Success')}}</div>
                    @endif
                    <div class="card-header">Form Record Category</div>
                        <div class="form-group">
                            <label for="test_name" style="padding:10px">Name</label>
                            <input type="text" class="form-control" name="name">
                            </div>
                            @error('name')
                                <span class="text-danger my-2">{{$message}}</span>
                            @enderror
                            <br>
                            <input type="submit" value="Record" class="btn btn-primary">
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>