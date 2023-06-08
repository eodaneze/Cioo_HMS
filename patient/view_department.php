<?php
 require("./header.php");
 require("./navbar.php");
 require("./sidebar.php");

?>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <h4>CiooMedicals | Specialization</h4>
            <div class="table-responsive" style="background-color: white; border: 1px soild #ccc; padding: 10px">
                <table class="table table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">S/N</th>
                            <th scope="col">Specialization</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM department WHERE deleted = 1";
                        $result = mysqli_query($con, $sql);
                        $num = 1;
                        while($row = mysqli_fetch_assoc($result)){
                            $dept_name = $row['dept_name'];
                            $id = $row['id'];

                            ?>
                        <tr>
                            <th><a href=""><?=$num++?></a></th>
                            <td><?=$dept_name?></td>
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

<?php
 require_once("./footer.php");

?>