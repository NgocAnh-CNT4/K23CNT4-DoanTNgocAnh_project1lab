<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sach Sinh Vien</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
        <section class="container my-3">
            <div class="card">
                div class="card-header">
            <h1>Danh sách sinh viên</h1>
            </div>
            <div class="card-body">
        <table class="table table-bordered">
        <thead>
        <tr>
        <th class="text-center">#</th>
        <th>Mã sinh viên</th>
        <th>Họ và tên</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Nơi sinh</th>
        <th>Mã khoa</th>
        <th>Học bổng</th>
        <th class="text-center">Chức năng</th>
        </tr>
        </thead>
        <tbody>
        @php
                $stt=0;
                @endphp
            @foreach ($dtnaSinhVien as $item)
            @php
                $stt++;
                @endphp
            <tr>
                <td class="text-center">1</td>
                <td>{{$item->dtnaMaSV}}</td>
                <td>{{$item->dtnaHoSV}}</td>
                <td>{{$item->dtnaTenSV}}</td>
                <td>{{$item->dtnaPhai}}</td>
                <td>{{$item->dtnaNgaySinh}}</td>
                <td>{{$item->dtnaNoiSinh}}</td>
                <td>{{$item->dtnaMaKH}}</td>
                <td class="text-right">{{$item->dtnaHocBong}}</td>
                <td class="text-center">
                    view / edit / delete
                </td>
            <tr>
        @endforeach
        </tbody>
</table>
</div>
<div class="card-footer">
    <h3>Tong so sinh vien:{{$dtnaSinhVien->count()}}</h3>
    <a href="/dtna-sinhvien/create" class="btn btn-primary">Them Moi<a>
</div>
</div>
</section>
</body>
</html>
