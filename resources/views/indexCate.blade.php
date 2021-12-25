<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail of category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="my-3" style="font-size: 25px; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">
            <caption>List of catgory</caption>
        </div>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categoryAll as $row)
                <tr>
                    <th>{{$row->id}}</th>
                    <td>{{$row->name}}</td>
                    <td>{{$row->created_at}}</td>
                    <td>{{$row->updated_at}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>