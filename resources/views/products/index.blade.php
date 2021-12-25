<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail of products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="my-3" style="font-size: 25px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <caption>List of products</caption>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Size</th>
                    <th scope="col">Price</th>
                    <th scope="col">Cate_ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productAll as $row)
                <tr>
                    <th>{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->size}}</td>
                    <td>{{$row->price}}</td>
                    <td>{{$row->cate_id}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>