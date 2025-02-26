<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Registration container styling */
        .registration-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Heading styling */
        h2 {
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form input styling */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            color: #555;
            margin-bottom: 5px;
        }

        .input-group input, .input-group select {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        .input-group input:focus, .input-group select:focus {
            border-color: #5e9fd0;
        }

        /* Button styling */
        .btn {
            background-color: #5e9fd0;
            color: #fff;
            padding: 12px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #4a86a0;
        }

        .btn:active {
            background-color: #407388;
        }
    </style>
</head>
<body>

    <div class="registration-container">
        <h2>Create an Account</h2>
        <form class="registration-form">
            <div class="input-group">
                <label for="first-name">First Name:</label>
                <input type="text" id="first-name" name="first-name" placeholder="Enter your first name" required>
            </div>

            <div class="input-group">
                <label for="last-name">Last Name:</label>
                <input type="text" id="last-name" name="last-name" placeholder="Enter your last name" required>
            </div>

            <div class="input-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="">Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
            </div>

            <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
            </div>

            <div class="input-group">
                <button type="submit" class="btn">Register</button>
            </div>
        </form>
    </div>

</body>
</html>
