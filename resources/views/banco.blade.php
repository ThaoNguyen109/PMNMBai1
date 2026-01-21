<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bàn cờ vua</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #ffe6ef;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        h2 {
            color: #d63384;
            margin-bottom: 20px;
        }

        .board {
            display: inline-block;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        table {
            border-collapse: collapse;
        }

        td {
            width: 50px;
            height: 50px;
        }

        .light {
            background: #ffe3ec;
        }

        .dark {
            background: #f8bbd0;
        }

        .footer {
            margin-top: 20px;
            color: #ad1457;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Bàn cờ vua {{ $n }} × {{ $n }}</h2>

    <div class="board">
        <table>
            @for ($i = 0; $i < $n; $i++)
                <tr>
                    @for ($j = 0; $j < $n; $j++)
                        <td class="{{ ($i + $j) % 2 == 0 ? 'light' : 'dark' }}"></td>
                    @endfor
                </tr>
            @endfor
        </table>
    </div>

</div>

</body>
</html>
