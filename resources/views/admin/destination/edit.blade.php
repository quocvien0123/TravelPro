<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Form</title>
    <style>
        html {
            height: 100%;
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-image: url(https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);
            background-size: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            width: 600px;
            max-width: 800px;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-top: 0;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 15px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 20px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        #imagePreview {
            max-width: 150px;
            height: 130px;
            margin-top: 10px;
            border-radius: 4px;
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Edit Form</h2>
        <form action="{{ route('updateDestination', $destination->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{$destination->name }}" required>

            <label for="location">Location:</label>
            <input type="text" id="location" name="location" value="{{ $destination->location}}" required>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*">

            <!-- Hiển thị ảnh cũ -->
            <img id="imagePreview" src="{{ asset($destination->image_url) }}" alt="Image" style="display: block;" />

            <label for="description">Description:</label>
            <textarea id="description" name="description" required>{{$destination->description }}</textarea>
            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" value="{{$destination->status}}" min="1"  required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" value="{{ $destination->price }}" min="1"   required>

            <input type="submit" value="Update Destination">
        </form>
    </div>

    <script>
        document.getElementById('image').addEventListener('change', function(event) {
            const file = event.target.files[0];
            const imagePreview = document.getElementById('imagePreview');

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block'; // Hiển thị ảnh mới khi được chọn
                }

                reader.readAsDataURL(file);
            } else {
                // Nếu không chọn ảnh mới, hiển thị ảnh cũ
                imagePreview.src = "{{ asset($destination->image_url) }}";
                imagePreview.style.display = 'block'; // Giữ ảnh cũ
            }
        });
    </script>
</body>

</html>