<?php require "db_connection.php"?>
<div class="row">
    <div class="col-sm-12">
        <h1>Products</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Image</th>
                <th scope="col">Rating</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $get_pro = "select * from movies_data";
            $run_pro = mysqli_query($con,$get_pro);
            $count_pro = mysqli_num_rows($run_pro);
            if($count_pro==0){
                echo "<h2> No Product found in selected criteria </h2>";
            }
            else {
                $i = 0;
                while ($row_pro = mysqli_fetch_array($run_pro)) {
                    $m_id = $row_pro['id'];
                    $m_title = $row_pro['Title'];
                    $m_rating = $row_pro['Rating'];
                    $m_image = $row_pro['Image'];
                    ?>
                    <tr>
                        <th scope="row"><?php echo ++$i; ?></th>
                        <td><?php echo $m_title; ?></td>
                        <td><img class="img-thumbnail" src='Images/<?php echo $m_image;?>' width='80' height='80'></td>
                        <td><?php echo $m_rating; ?></td>
                        <td><a href="index.php?Edit_Movie=<?php echo $m_id?>" class="btn btn-primary">
                                <i class="fa fa-edit"></i> Edit
                            </a>
                            <a href="index.php?Delete_Movie=<?php echo $m_id?>" class="btn btn-danger">
                                <i class="fa fa-trash-alt"></i> Delete
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</div>