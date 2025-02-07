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

            .frm {
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

            .btn{
                background-color: #4bb350;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            .btn:hover {
                background-color: #31814a;
            }

            .btn[type=submit] {
                background-color: #4bb350;
                color: white;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
            }

            .btn[type=submit]:hover {
                background-color: #31814a;
            }
        </style>
    </head>
    <body>
        <header>
        </header>

        @include('layouts.nbadmin')

        <br>

        <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 1%; margin-bottom: 1%;">
            <form class="frm" action="{{ url('/customer/delete') }}" method="POST" style="display: flex; align-items: center; margin-left: 6%;">
                @csrf
                <input type="number" name="customer_id" min="1" step="1" required placeholder="Enter Customer ID" style="flex: 1;">
                <button class="btn" type="submit" style="margin-left: 10px;">Delete</button>
            </form>
            <!--
            <form class="frm" method="GET" style="margin-right: 5%; margin-left: 4%;" action="{{ url('/customer/create') }}">
                @csrf
                <button class="btn" type="submit" type="button">Add a Customer</button>
            </form>
            -->
            <div style="display: flex; align-items: center; margin-right: 6%; margin-left: 2%; flex-wrap: nowrap;">
                <h4 style="margin-right: 10px; font-family: Arial, sans-serif; color: rgb(116, 116, 116); white-space: nowrap;">Sort by:</h4>
                <form class="frm" action="{{ url('/customer') }}" method="GET" style="margin-left: 0; margin-right: 4%;">
                    <select name="sort" onchange="this.form.submit()" style="padding: 13px; border-radius: 5px; background-color: white; border: 2px solid #ccc;">
                        <option value="none" {{ request('sort') == 'none' ? 'selected' : '' }}>None</option>
                        <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Alphabetical Order</option>
                        <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Reversed Alphabetical Order</option>
                    </select>
                </form>
            </div>
        </div>

        @if (session('error'))
            <div style="color: red;">
                {{ session('error') }}
            </div>
        @endif

        <div style="margin-left: 1%; margin-right: 1%; margin-bottom: 1%;">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Email</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td><b>{{ $customer->id }}</b></td>
                            <td>{{ $customer->email }}</td>
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->phone_number }}</td>
                            <!--
                            <td>
                                <form class="frm" action="{{ url('/customer/update/'.$customer->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="password" value="{{ $customer->password }}" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>
                                <form class="frm" action="{{ url('/customer/update/'.$customer->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="address" value="{{ $customer->address }}" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>
                                <form class="frm" action="{{ url('/customer/update/'.$customer->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="phone_number" value="{{ $customer->phone_number }}" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>
                                <form class="frm" action="{{ url('/customer/update/'.$customer->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="card_number" value="{{ $customer->card_number }}" onchange="this.form.submit()">
                                </form>
                            </td>
                            -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $customers->links() }}
        </div>

        <footer></footer>
    </body>
</html>
