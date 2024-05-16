<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cowy Carnivory</title>
        <style>


            .navbar {
                display: flex;
                align-items: center;
                list-style: none;
                padding: 16px;
                margin: 0; 
                background-color: #e6e6fa;
            }

            .navbar li {
                margin-right: 20px; 
            }

            .navbar a {
                text-decoration: none;
                color: #014E7A;
                padding: 8px 16px;
                font-size: 16px; 
            }

            .navbar a.bold {
                font-weight: bold; 
            }


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
        <ul class="navbar" style="margin: 0; padding: 10; height: 100%; color: #014E7A; font-family: 'Verdana', sans-serif;">
            <li><a href="/" class="bold">Home</a></li>
            <li><a href="/vendor">Vendors</a></li>
            <li><a>Products</a></li>
            <li><a href="/customer">Customers</a></li>
            <li><a href="/order">Orders</a></li>
            <li><a href="/linorder">Linorders</a></li> 
        </ul>

        <br>

        <div style="display: flex; align-items: center; justify-content: space-between; margin-top: 1%; margin-bottom: 1%;">
            <form action="{{ url('/product/delete') }}" method="POST" style="display: flex; align-items: center; margin-left: 5%; margin-right: 5%;">
                @csrf
                <input type="number" name="product_id" min="1" step="1" required placeholder="Enter Product ID" style="flex: 1;">
                <button type="submit" style="margin-left: 10px;">Delete</button>
            </form>
            <form method="GET" style="margin-right: 6%;" action="{{ url('/product/create') }}">
                @csrf
                <button type="submit" type="button">Add a Product</button>
            </form>
            <form action="{{ url('/product') }}" method="GET" style="display: flex; justify-content: center; gap: 10px; align-items: center; margin-bottom: 1%;">
        <div>
            <input type="number" name="min_price" placeholder="Price greater than" style="width: 150px; padding: 10px; border-radius: 5px; background-color: #f8f8f8; border: 2px solid #ccc; box-shadow: 0 2px 4px rgba(0,0,0,0.15);" min="0" step="0.1" value="{{ request('min_price') }}">
            <input type="number" name="max_price" placeholder="Price less than" style="width: 150px; padding: 10px; border-radius: 5px; background-color: #f8f8f8; border: 2px solid #ccc; box-shadow: 0 2px 4px rgba(0,0,0,0.15);" min="0" step="0.1" value="{{ request('max_price') }}">
        </div>
        <div>
            <select name="sort" style="padding: 13px; border-radius: 5px; background-color: white; border: 2px solid #ccc;">
                <option value="none" {{ request('sort') == 'none' ? 'selected' : '' }}>None</option>
                <option value="asc" {{ request('sort') == 'asc' ? 'selected' : '' }}>Alphabetical Order</option>
                <option value="desc" {{ request('sort') == 'desc' ? 'selected' : '' }}>Reversed Alphabetical Order</option>
            </select>
        </div>
        <button type="submit" style="padding: 10px 20px; background-color: #4CAF50; color: white; border-radius: 5px; border: none; cursor: pointer; font-size: 16px;">Apply Filters</button>
    </form>
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
                        <th>Code</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Vendor Email</th>
                        <th>Vendor Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td><b>{{ $product->id }}</b></td>
                            <td>{{ $product->cod }}</td>
                            <td>
                                <form action="{{ url('/product/update/'.$product->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="name" value="{{ $product->name }}" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>
                                <form action="{{ url('/product/update/'.$product->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="description" value="{{ $product->description }}" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>
                                <form action="{{ url('/product/update/'.$product->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="price" value="{{ $product->price }}" onchange="this.form.submit()">
                                </form>
                            </td>
                            <td>{{ $product->vendor_email }}</td>
                            <td>
                                <form action="{{ url('/product/update/'.$product->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="text" name="vendor_name" value="{{ $product->vendor_name }}" onchange="this.form.submit()">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $products->appends(['min_price' => $minPrice, 'max_price' => $maxPrice])->links() }}
        </div>

        <footer></footer>
    </body>
</html>
