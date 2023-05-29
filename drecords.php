<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rice mill</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        <?php
        include('css/print.css');
        ?>
    </style>
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card mt-5">
                    <div class="card-header">
                        <h4>RECORDS</h4>
                    </div>
                    <div class="card-body">
                        
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Stock id</th>
                                    <th>Rice id</th>
                                    <th>Customer id</th>
                                    <th>Stock stock quantity remaining </th>
                                    <th>Rice quantity sold</th>
                                    <th>Rice quantity remaining</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $con = mysqli_connect("localhost","root","","ricemill");

                                    $query = "SELECT * FROM records";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['stock_id']; ?></td>
                                                <td><?= $row['rice_id']; ?></td>
                                                <td><?= $row['customer_id']; ?></td>
                                                <td><?= $row['stock_quantity_remaining']; ?></td>
                                                <td><?= $row['rice_quantity_sold']; ?></td>
                                                <td><?= $row['rice_quantity_remaining']; ?></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                    }
                                ?>

                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="print">
    <form>
   <input type="button" class="printbtn"value="Print" onClick="window.print()" />
   </form>
   </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>