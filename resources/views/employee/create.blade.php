<!DOCTYPE html>
<html>
<head>
    <title>ເພີ່ມພະນັກງານ</title>
</head>
<body>
    <h1>ເພີ່ມຂໍມູນນັກຝຶກອົບຮົມ</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('employee.store') }}" method="POST">
        @csrf

        <label>ຊື່ລາວ:</label><br>
        <input type="text" name="namelao" required><br><br>

        <label>ຊື່ອັງກິດ:</label><br>
        <input type="text" name="nameeng" required><br><br>

        <label>ເບີມືຖື:</label><br>
        <input type="text" name="mobile" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Age:</label><br>
        <input type="number" name="age" required><br><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
