<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration | php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(image/sas.webp);
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            justify-content: center;
        }

        body {
            font-family: "Inter";
        }

        label,
        button {
            font-size: 16px;
            cursor: pointer;
        }

        input,
        textarea {
            border: 2px solid Tomato;
            ;
            padding: .4em 1em;
            border-radius: 6px;
        }

        form {
            display: inline;
            grid-row-gap: 30px;
            justify-content: center;
        }
    </style>
</head>

<body>

    <body>
        <!-- Registration Form -->
        <div class="container-fluid col-sm-4 text-center ">

            <h1 style=text-align:center>Registration Form </h1>
            <form action="index.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" placeholder="Name" name="Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Filds:
                        </td>
                        <td>
                            <input type="radio" id="Web Developer" name="Job" value="Web Developer" required>
                            <label for="Web Developer">Web Developer</label><br>
                            <input type="radio" id="Web Designer" name="Job" value="Web Designer">
                            <label for="Web Designer">Web Designer</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Address:
                        </td>
                        <td>
                            <textarea rows="5" col="17" placeholder="Address" name="address" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email Id:
                        </td>
                        <td>
                            <input type="email" placeholder="example1@*8" name="email" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Phone Number:
                        </td>
                        <td>
                            <input type="phone" placeholder="9867******" name="phone_number" required>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" placeholder="Password" name="password" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hobbies:
                        </td>
                        <td>
                            <textarea rows="5" col="17" placeholder="Hobbies" name="hobbies" required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Education Qualification:
                        </td>
                        <td>
                            <input type="text" name="edu1" placeholder="Enter your qualification details" required><br>
                            <input type="text" name="edu2" placeholder="Enter your qualification details" required><br>
                            <input type="text" name="edu3" placeholder="Enter your qualification details" required><br>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="form-check-label"><input class="form-check-input" type="checkbox" required>I agree to the license terms.</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" value="Submit">
                            <input type="reset" value="Reset">
                        </td>
                    </tr>
                </table>
            </form>

        </div>
    </body>

</html>