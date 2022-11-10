<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPK SMART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
</head>
<style>
    * {
        font-family: Poppins;
    }
</style>
<body>
    <div class="container mt-3">
        <h1><b>Sistem Pendukung Keputusan</b></h1>

        <div class="row mt-5">
            <div class="col">
                <h2 class="">Alternatif</h2>
            </div>
            <div class="col mt-2">
                <a href="/add-alternative" class="btn btn-sm btn-primary float-end" style="border-radius: 40px;">Add Alternatif</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Alternatif</th>
                    @foreach($criterias as $c)
                        <th scope="col">{{ $c->name }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($alternatives as $i => $a)
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{ $a->name }}</td>
                    @foreach($criterias as $c)
                        <td>{{ $a->alternativeCriteria->where('criteria_id', $c->id)->first()->score??'-' }}</th>
                    @endforeach
                </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <hr>

        <div class="row mt-5">
            <div class="col">
                <h2 class="">Kriteria</h2>
            </div>
            <div class="col pt-2">
                <a href="" class="btn btn-sm btn-primary float-end" style="border-radius: 40px;">Add Kriteria</a>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kriteria</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach($criterias as $j => $c)
                <tr>
                    <th scope="row">{{ ++$j }}</th>
                    <td>{{ $c->name }}</td>
                    <td>{{ $c->weight }}</td>
                    <td>{{ ucfirst($c->type) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <br>
        <br>
        <center>
            <a href="/hasil" style="width: 200px;" class="btn btn-dark">Jalankan Operasi</a>
        </center>
        <br>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>
