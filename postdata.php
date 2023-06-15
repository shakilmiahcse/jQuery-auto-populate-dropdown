<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Form</h1>
        <form id="myForm" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="name" class="form-label">Title:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="category">Category:</label>
                <select id="category" class="form-select form-select-lg mb-3" name="category">
                    <option value="">Select Category</option>
                    <option value="Academic">Academic books</option>
                    <option value="Religion">Religion books</option>
                    <option value="Fiction">Fiction books</option>
                    <option value="NonFiction">Non Fiction books</option>
                    <!-- Add more category options here -->
                </select>
            </div>
            <div class="mb-3">
                <label for="subcategory">Subcategory:</label>
                <select id="subcategory" class="form-select form-select-lg mb-3" name="subcategory">
                    <option value="">Select Subcategory</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="division">Division:</label>
                <select class="form-select form-select-lg mb-3" id="division" name="division">
                    <option value="">Select Division</option>
                    <option value="dhaka">Dhaka</option>
                    <option value="chittagong">Chittagong</option>
                    <option value="Rajshahi">Rajshahi</option>
                    <option value="Khulna">Khulna</option>
                    <option value="Barisal">Barisal</option>
                    <option value="Sylhet">Sylhet</option>
                    <option value="Rangpur">Rangpur</option>
                    <option value="Mymensingh">Mymensingh</option>
                    <!-- Add more division options here -->
                </select>
            </div>
            <div class="mb-3">
                <label for="district">District:</label>
                <select class="form-select form-select-lg mb-3" id="district" name="district">
                    <option value="">Select District</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label>
                <input type="file" class="form-control" id="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Post</button>
        </form>
    </div>

    <!-- Bootstrap JS and jQuery -->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>


    <!-- AJAX and JavaScript code -->
    <script>
        $(document).ready(function() {
            // Handle form submission
            $('#myForm').submit(function(e) {
                e.preventDefault(); // Prevent default form submission

                // Create a FormData object to store form data
                var formData = new FormData(this);

                // Make an AJAX request to the PHP file
                $.ajax({
                    url: 'save_data.php',
                    type: 'POST',
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle the response from PHP
                        alert(response);
                        $('#myForm')[0].reset(); // Reset the form
                    },
                    error: function(xhr, status, error) {
                        alert('Error: ' + error);
                    }
                });
            });
        });
    </script>

</body>

</html>