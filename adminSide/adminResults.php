<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.admin.css">
    <title>Results</title>
</head>
<body onload="loadResultBody()">
    <?php include '../layout/nav.admin.php';?>
    <div class="container-fluid">
        <div class="row">
            <?php  include '../layout/sidebar.admin.php'; ?>
            <div class="col-lg-10 p-4">
               <div class="resultContainer">
                    <h1>Results</h1>
                    <div class="result-table-container">
                        <div class="result-table-filter">
                            <input type="text" placeholder="Search...">
                            <div class="result-table-filterRadio">
                                <label><input type="radio" id="restableFilter" name="restableFilter" value="ID">ID</label>
                                <label><input type="radio" id="restableFilter" name="restableFilter" value="Firstname">Firstname</label>
                                <label><input type="radio" id="restableFilter" name="restableFilter" value="Lastname">Lastname</label>
                                <button>Search</button>
                            </div>
                        </div>
                        <div class="result-table-body">
                            <table id="resultTableID" data-aos="fade-down">
                                <thead>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody id="tableResultBody">
                                    <tr>
                                        <td>2DC213</td>
                                        <td>Sample Name</td>
                                        <td>Sample Name</td>
                                        <td>Pending</td>
                                        <td>
                                            <button>Positive</button>
                                            <button>Negative</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
</body>
</html>