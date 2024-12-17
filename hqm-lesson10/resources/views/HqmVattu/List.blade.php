<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach vat tu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sach vat tu</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered"> 
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ma Vat tu</th>
                    <th>Ten Vat tu</th>
                    <th>Don vi Tinh</th>
                    <th>Phan Tram</th>
                    <th>Chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=1;   
                @endphp
               
                @forelse ($hqmVattus as $item)
                    <tr>
                        <td>{{$loop->iteration + ($hqmVattus->currentPage() - 1) * $hqmVattus->perPage() }}</td>
                        <td>{{$item->hqmMaVtu}}</td>
                        <td>{{$item->hqmTenVtu}}</td>
                        <td>{{$item->hqmDvTinh}}</td>
                        <td>{{$item->hqmPhanTram}}</td>
                        <td>
                            view / edit / delete
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7">Chua co du lieu</td>
                    </tr>
                @endforelse
                <tr>
                    <th colspan="7"colspan="7">{{ $hqmVattus->links('pagination::bootstrap-5') }}</th>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-primary">Them moi</button>
    </section>
</body>
</html>