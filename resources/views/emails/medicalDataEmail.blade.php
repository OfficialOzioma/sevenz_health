<!DOCTYPE html>
<html>

<head>
    <title>Medical Data Email</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Exo 2', sans-serif;
        }

        .title {
            text-align: center;
            margin-top: 20px;
            font-size: 1em;
            font-weight: 500;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 1em;
            font-weight: 500;
        }

        .styled-table {
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            font-size: 1em;
            font-family: 'Exo 2', sans-serif;
            width: 50vw;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .styled-table thead tr {
            background-color: #009879;
            color: #ffffff;
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        .styled-table tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }
    </style>
</head>

<body>
    <div class="title">
        <h1>Hello, {{ $mailData->name }}</h1>
        <h2>Welcome to {{ env('APP_NAME') }} </h2>
        <p>This is your medical Data</p>
    </div>


    <table class="styled-table">
        <thead>
            <tr>
                <th>S/N</th>
                <th>TESTS</th>
                <th>TESTS CATEGORY</th>
            </tr>
        </thead>
        <tbody>
            @php
                $num = 1;
            @endphp

            @foreach ($mailData->user_tests as $user_test)
                @foreach ($user_test->labTests as $key => $labTest)
                    <tr>
                        <td>{{ $num++ }}</td>
                        <td>{{ $labTest->name }}</td>
                        <td>{{ $labTest->category }}</td>
                    </tr>
                @endforeach
            @endforeach

            {{-- <tr>
                <td>2</td>
                <td>cervical vertebrae</td>
                <td>Xray</td>
            </tr>
            <tr class="active-row">
                <td>3</td>
                <td>Breast</td>
                <td>Ultrasound Scan</td>
            </tr> --}}
            <!-- and so on... -->
        </tbody>
    </table>


    <div class="footer">
        <h3>Ozioma Dike</h3>
        <small>© {{ env('APP_NAME') }}</small>
    </div>

</body>

</html>
