<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagination</title>

    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Registered Users</h1>

            </div>
            <div class="col-12">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>First Name</td>
                            <td>Last Name</td>
                            <td>Mobile</td>
                            <td>City</td>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Amal</td>
                            <td>Perera</td>
                            <td>0778434567</td>
                            <td>Colombo</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>sadun</td>
                            <td>Madushanka</td>
                            <td>0718567980</td>
                            <td>Kandy</td>
                        </tr>

                    </tbody>
                </table>

                <div class="col-12 col-lg-8 offset-5">

                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>

                </div>

            </div>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>