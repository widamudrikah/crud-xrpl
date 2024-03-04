<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail buah</title>
    <!-- css bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
</head>
<body>
    <div class="container">
        <h1>Detail data buah</h1>

        <div class="card mb-3">
            <div class="card-body">

            <table class="table table-striped">
                <tr>
                    <td>Nama Buah</td>
                    <td>:</td>
                    <td>{{ $buah->nama_buah }}</td>
                </tr>
                <tr>
                    <td>Harga buah</td>
                    <td>:</td>
                    <td>{{ $buah->harga }}</td>
                </tr>
            </table>

            </div>
        </div>
    </div>
</body>
</html>