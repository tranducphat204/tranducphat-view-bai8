<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unicode</title>
</head>

<body>
    <header>
        <h1>Unicode</h1>
    </header>
    <main>
        <h1>Nội dung Unicode</h1>
        <h2><?php echo $content ?></h2>
        <h1>Trang chủ unicode</h1>
        <!-- Cbhuyển tất cả mã html sang dạng thực thể: giúp an toàn hơn -->
        <h2>{{$welcome}}</h2>
        <!-- Toán tử ba ngôi và cần biên dịch html -->
        <!-- <h2>{{!empty(request() -> keyword)?request()->keyword:'Không có gì'}}</h2>
<div class="container">
    {!!$content!!}
</div>

@for($i =1;$i <=10;$i++) <p>Phần thử thứ: {{$i}}</p>
    @endfor

    @while($index <= 10) <p>Phần thử thứ: {{$index}}</p>
        @php
            $index++;
        @endphp
    @endwhile -->

        @foreach ($dataArr as $key =>$item)
        <p>Phần tử: {{$item}} - {{$key}}</p>
        @endforeach

        @forelse ($dataArr as $item)
        <p>Phần tử: {{$item}}</p>
        @empty
        <p>Không có phần tử nào</p>
        @endforelse

        @if ($number >=10)
        <p>Đây là giá trị hợp lệ</p>
        @elseif ($number <0) <p>SỐ âm</p>
            @else
            <p>Giá trị không hợp lẹ</p>
            @endif

            @switch($number)
            @case(1)
            @case(4)
            @case(7)
            <p>Số thứ nhất</p>
            @break
            @case(2)
            <p>SỐ thứ hai</p>
            @break
            @default
            <p>số còn lại</p>
            @endswitch
    </main>
    <footer>
        <h1>Footer</h1>
    </footer>
</body>

</html>