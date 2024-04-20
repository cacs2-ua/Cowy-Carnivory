<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cowy Carnivory</title>
        <style>
            table {
                font-family: "Helvetica", Arial, sans-serif;
                font-size: 15px;
                width: 100%;
                border-collapse: collapse;
                text-align: center;
                vertical-align: middle;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            th, td {
                border: 1px solid #ddd;
                padding: 8px;
                border-bottom: 1px solid #ddd;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            th {
                padding-top: 12px;
                padding-bottom: 12px;
                background-color: #4CAF50;
                color: white;
                border-bottom: 2px solid #ddd;
            }

            form {
                max-width: 400px;
                margin: 0 auto;
                text-align: center;
            }

            input[type=number], input[type=text] {
                width: 100%;
                padding: 10px;
                border: 2px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                font-size: 15px;
            }

            button{
                background-color: #4bb350;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            button:hover {
                background-color: #31814a;
            }

            button[type=submit] {
                background-color: #4bb350;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            button[type=submit]:hover {
                background-color: #31814a;
            }
        </style>
    </head>
    <body>
        <header>
        </header>

        <div style="display: flex; justify-content: space-between; margin-top: 2%; margin-bottom: 2%;">
            <form method="GET" style="display: flex; align-items: center; margin-left: 2%;" action="{{ url('/') }}">
                @csrf
                <button type="submit" style="margin-right: auto; background-color: #4eb8c4;"
                onmouseover="this.style.backgroundColor='#2c7a89'" 
                onmouseout="this.style.backgroundColor='#45a0aa'">
                    Go Back
                </button>
            </form>
            <form action="{{ url('/linorder/delete') }}" method="POST" style="display: flex; align-items: center; margin-left: 0%;">
                @csrf
                <input type="number" name="linorder_id" min="1" step="1" required placeholder="Enter Lineorder ID" style="flex: 1;">
                <button type="submit" style="margin-left: 10px;">Delete</button>
            </form>
        </div>

        @if (session('error'))
            <div style="color: red;">
                {{ session('error') }}
            </div>
        @endif

        <div style="margin-left: 1%; margin-right: 1%; margin-bottom: 3%;">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Order ID</th>
                        <th>Order Number</th>
                        <th>Product ID</th>
                        <th>Product Code</th>
                        <th>Product Name</th>
                        <th>Product Description</th>
                        <th>Product Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($linorders as $linorder)
                        <tr>
                            <td><b>{{ $linorder->id }}</b></td>
                            <td>{{ $linorder->order_id }}</td>
                            <td>{{ $linorder->numOrder }}</td>
                            <td>{{ $linorder->product_id }}</td>
                            <td>{{ $linorder->product_code }}</td>
                            <td>{{ $linorder->product_name }}</td>
                            <td>{{ $linorder->product_description }}</td>
                            <td>{{ $linorder->product_price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $linorders->links() }}
        </div>

        <footer></footer>
    </body>
</html>
