<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="welcome.blade.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="header">
            <ul class="list" style=" display:flex; align-items: center;justify-content: space-around;list-style: none;">
                <li>Home</li>
                <li>Content</li>
                <div class="btn-group">
                    <button class="btn btn-secondary btn-lg dropdown-toggle my-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </button>
                    <ul class="dropdown-menu" style="padding-left: 10%;">
                        @foreach($categories as $row)
                        <li><a href="{{url('category/product/'.$row->id)}}"> {{ $row->name }} </a></li>
                        @endforeach
                    </ul>
                </div>
                <li>Product</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</html>