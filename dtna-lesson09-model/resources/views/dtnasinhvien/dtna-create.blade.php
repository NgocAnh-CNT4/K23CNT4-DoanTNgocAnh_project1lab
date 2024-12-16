<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        input{
            border-radius:0  !important;
        }
    </style>
</head>
<body>
    <section class="container">
        <form action="{{route('dtnaSinhVien.dtnaCreateSubmit')}}" method="post">
            @
            <div class="card">
                <div class="card-header">
                    <h1>Them moi sinh vien</h1>
</div>
<div class="card-body">
    <div class="mb-3 row">
        <label for="dtnaMaSV" class="col-sm-2 col-form-label">Ma Sinh Vien</label>
        <div class="col-sm-10">
            <input type="text" class="form -control" id="dtnaMaSV" name="dtnaMaSV">
</div>
</div>
<div class="mb-3 row">
        <label for="dtnaHoSV" class="col-sm-2 col-form-label">Ho Sinh Vien</label>
        <div class="col-sm-10">
            <input type="text" class="form -control" id="dtnaHoSV" name="dtnaHoSV">
</div>
</div>
<div class="mb-3 row">
        <label for="dtnaTenSV" class="col-sm-2 col-form-label">Ten Sinh Vien</label>
        <div class="col-sm-10">
            <input type="text" class="form -control" id="dtnaTenSV" name="dtnaTenSV">
</div>
</div>
<div class="mb-3 row">
        <label for="dtnaPhai" class="col-sm-2 col-form-label">Phai</label>
        <div class="col-sm-10">
            <input type="text" class="form -control" id="dtnaPhai" name="dtnaPhai">
</div>
</div>
<div class="mb-3 row">
        <label for="dtnaNgaySinh" class="col-sm-2 col-form-label">Ngay Sinh</label>
        <div class="col-sm-10">
            <input type="text" class="form -control" id="dtnaNgaySinh" name="dtnaNgaySinh">
</div>
</div>
<div class="mb-3 row">
        <label for="dtnaNoiSinh" class="col-sm-2 col-form-label">Noi Sinh</label>
        <div class="col-sm-10">
            <input type="text" class="form -control" id="dtnaNoiSinh" name="dtnaNoiSinh">
</div>
</div>
<div class="mb-3 row">
        <label for="dtnaMaKH" class="col-sm-2 col-form-label">khoa</label>
        <div class="col-sm-10">
            <seclect name="dtnaMaKH" id="dtnaMaKH">
                <option value="">--chon khoa--</option>
                <option value="AV">Anh Van</option>
                <option value="TH">Tin Hoc</option>
                <option value="TR">Triet Hoc</option>
            </seclect>
</div>

</div>
        <div class="card-footer">
            <button class="btn btn-primary"> Them Moi</button>
            <a href="/dtna-sinhviens" class="btn btn-secondary"> Quay Lai</a>
</div>
</div>
</form>
</section>
</body>
</html>
