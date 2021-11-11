<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <title>Admin Page</title>
    </head>
    <body>

    
        <div class="container">
            <h4>User data</h4>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Bank_AccountNumber</th>
                    <th>Expired</th>
                    <th>Bill</th>
                </tr>
                <tbody id="data">

                </tbody>
            </table>

            <h4>Feedback</h4>
            <table class="table">
                <tr>
                    <th>Name</th>
                    <th>DoB</th>
                    <th>Phone</th>
                    <th>Feedback</th>
                </tr>
                <tbody id="data1">

                </tbody>
            </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script> 
        $(document).ready(function () {
            $.ajax({
              type: "GET",
              url: "data.php",
              dataType: "html",
              success: function (data) {
              $("#data").html(data);

                }
            });
            $.ajax({
              type: "GET",
              url: "data1.php",
              dataType: "html",
              success: function (data) {
              $("#data1").html(data);

                }
            });
        });
</script>

    </body>
</html>