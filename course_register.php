<!DOCTYPE html>
<html lang="en">

<head>
    <title>course Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body>
    <div class="container">

        <div class="row header">
            <h2>University</h2>
            <hr>

        </div>
        <div class="row">

        </div>
        <div class="row">
            <div class="col">
                <h1>Course Registration</h1>
                <form action="insert.php" method="post">

                    <p>
                        <label for="firstName"> Name:</label>
                        <input type="text" name="first_name" id="firstName" required>
                    </p>


                    <p>
                        <label for="lastName">Description:</label>
                        <input type="text" name="last_name" id="lastName" required>
                    </p>



                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</body>

</html>