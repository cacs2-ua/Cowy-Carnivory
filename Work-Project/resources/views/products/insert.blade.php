<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Add Product</title>
        <style>
            body {
                background-color: #e5e5e5;
            }
            .box {
                width: 600px;
                padding: 20px;
                background-color: #f0f0f0;
                border: 2px solid #ccc;
                border-radius: 10px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
                margin: auto;
                margin-top: 2.5%;
            }
            .form-container {
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            }

            .form-heading {
                text-align: center;
                margin-bottom: 20px;
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                font-weight: bold;
            }

            .form-group input[type="text"],
            .form-group input[type="email"] {
                width: 97%;
                padding: 10px;
                font-size: 16px;
                border: 1px solid #ccc;
                border-radius: 5px;
                margin-right: 2%;
            }

            .btn-primary, .redirectButton {
                display: block;
                width: 100%;
                padding: 10px;
                font-size: 16px;
                color: #fff;
                background-color: #007bff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .btn-primary:hover {
                background-color: #0056b3;
            }

            .text-danger {
                color: red;
                font-size: 14px;
            }
        </style>
    </head>
    <body>
        <header>
        </header>

        <div class="box">
            <div class="container" style="font-family: 'Roboto', sans-serif; padding: 10px; overflow: hidden;">
                <h1 style="text-align: center; margin-bottom: 7%; font-family: 'Open Sans', sans-serif;">Add New Product</h1>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('product.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="cod">Product Code:</label>
                        <input type="text" class="form-control" id="cod" name="cod" unique required>
                        @error('cod')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" id="description" name="description" required>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" step="0.01" class="form-control" id="price" name="price" required>
                        @error('price')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vendor_id">Vendor's ID Number:</label>
                        <input type="text" class="form-control" id="vendor_id" name="vendor_id" required>
                        @error('vendor_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vendor_email">Vendor's Email:</label>
                        <input type="text" class="form-control" id="vendor_email" name="vendor_email" unique required>
                        @error('vendor_email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="vendor_name">Vendor's Name:</label>
                        <input type="text" class="form-control" id="vendor_name" name="vendor_name" required>
                        @error('vendor_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <div style="margin-top: 7%; display: flex;">
                        <button class="redirectButton" onclick="performCustomAction(event)" form=none style="background-color: #ff0000; width: 150px;"
                        onmouseover="this.style.backgroundColor='#b70000'" 
                        onmouseout="this.style.backgroundColor='#ff0000'">Cancel</button>
                        <button type="submit" class="btn btn-primary" style=" width: 400px; margin-left: 4%;">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            function performCustomAction(event){
                event.preventDefault();
                window.location = "/product";
            };
        </script>

        <footer></footer>
    </body>
</html>
