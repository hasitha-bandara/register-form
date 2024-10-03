<!DOCTYPE html>
<html>

<head>
    <title>Library Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            width: 570px;
            margin: auto;
            padding: 30px;
            border: 2px solid #0f0f0f;
        }

        .form-container h2 {
            background-color: green;
            color: black;
            text-align: center;
            padding: 5px;
        }

        .form-container h4 {
            text-decoration: underline;

        }

        .form-container label {
            margin-top: 10px;
            display: inline-block;
            width: 150px;
        }

        .form-container input[type="text"],
        .form-container input[type="date"] {
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 250px;
        }

        .form-container input[type="radio"] {
            margin-right: 5px;
        }

        .form-row {
            margin-bottom: 5px;
        }

        .form-buttons {
            margin-top: 20px;
            text-align: right;
        }

        .female-row {
            display: block;
            margin-left: 154.5px;
        }
    </style>
</head>

<body>

    <div class="form-container">
        <h2>Library Registration Form</h2>

        <h4>Registration Details</h4>
        <form action="register.php" method="POST">
            <div class="form-row">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-row">
                <label>Gender:</label>
                <input type="radio" id="male" name="gender" value="male">
                <label for="male" style="display:inline;">Male</label>
                <div class="female-row">
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female" style="display:inline;">Female</label>
                </div>
            </div>

            <div class="form-row">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>

            <div class="form-row">
                <label for="nic">NIC:</label>
                <input type="text" id="nic" name="nic" required>
            </div>

            <div class="form-buttons">
                <input type="submit" value="Register">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>

</body>

</html>