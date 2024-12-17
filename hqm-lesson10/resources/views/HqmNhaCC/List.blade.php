<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sach nha cung cap</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="container my-3">
        <h1>Danh sach nha cung cap</h1>
    </header>
    <section class="container my-1 border p-2">
        <table class="table table-bordered"> 
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ma Nha cung cap</th>
                    <th>Ten Nha cung cap</th>
                    <th>Dia chi</th>
                    <th>Email</th>
                    <th>Dien thoai</th>
                    <th>Chuc nang</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt=1;   
                @endphp
               
                @forelse ($hqmNhaCCs as $item)
                    <tr>
                        <td>{{$loop->iteration + ($hqmNhaCCs->currentPage() - 1) * $hqmNhaCCs->perPage() }}</td>
                        <td>{{$item->hqmMaNCC}}</td>
                        <td>{{$item->hqmTenNCC}}</td>
                        <td>{{$item->hqmDiachi}}</td>
                        <td>{{$item->hqmemail}}</td>
                        <td>{{$item->hqmDienThoai}}</td>
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
                    <th colspan="7"colspan="7">{{ $hqmNhaCCs->links('pagination::bootstrap-5') }}</th>
                </tr>
            </tbody>
        </table>
        <button class="btn btn-primary">Them moi</button>
    </section>
</body>
</html>