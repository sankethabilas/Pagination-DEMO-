<?php

$pageNo = "0";

if ("0" != $_GET["p"]) {
    $pageNo = $_GET["p"];
} else {
    $pageNo = "1";
}

$con = new mysqli("localhost", "root", "Abi0021@", "day27", "3306");
$q = "SELECT * FROM `user`";

$user_rs = $con->query($q);
$user_num = $user_rs->num_rows;

$result_per_page = 4;
$number_of_pages = ceil($user_num / $result_per_page);

$page_result = ($pageNo - 1) * $result_per_page;
$q2 = $q . "LIMIT" . $result_per_page . "OFFSET" . $page_result;

$selected_rs = $con->query($q2);
$selected_num = $selected_rs->num_rows;


?>

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

            <?php
            for ($x = 0; $x < $selected_num; $x++) {
                $selected_data = $selected_rs->fetch_assoc();


            ?>
                <tr>
                    <td><?php echo $selected_data["id"]; ?></td>
                    <td><?php echo $selected_data["fname"]; ?></td>
                    <td><?php echo $selected_data["lname"]; ?></td>
                    <td><?php echo $selected_data["mobile"]; ?></td>
                    <td><?php echo $selected_data["city"]; ?></td>

                </tr>

            <?php
            }


            ?>







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