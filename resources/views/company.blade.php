<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border=1>
    <tr>
        <th >ชื่อบริบัท</th>
        <th >ราคาที่จดทะเบียน</th>
        <th >ขนาดบริษัท</th>
        <th >ชื่อเจ้าของ</th>
    </tr>
    @foreach($Company as $company)
    <tr>
        <td>{{ $company->company_name }}</td>
        <td>{{ $company->company_price}}</td>
        @if($company -> company_price > 1000000)
            <td>ขนาดใหญ่</td>
        @elseif($company -> company_price > 5000000)
            <td>ขนาดกลาง</td>
        @else<td>ขนาดเล็ก</a></td>
        @endif
        <td>{{$company->user->name}}</td>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>