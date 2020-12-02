<table id="basicExample" class="table m-0">
        <?php
            require('database/connection.php');
            $sql = "SELECT * FROM sa";

            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                ?>
        <thead>
        <tr>
            <th>District</th>
            <th>Subdistrict</th>
            <th>Mouja</th><!-- 
            <th>J L No</th>
            <th>Khatiyan No</th> 
            <th>Land's Owner</th>
            <th>Land Quantity</th>
            <th>Land Address</th>
            <th>Comment</th>-->
            <th>Map View</th>
            <th>Action</th>
        </tr>
    </thead>
        <tbody>
            <?php
// output data of each row
while($row = $result->fetch_assoc()) {
    ?>
        <tr>
        <td><?php echo $row['district']; ?></td>
        <td><?php echo $row['subdistrict']; ?></td>
        <td><?php echo $row['mouja']; ?></td><!--
        <td><?php //echo $row['ze_el_no']; ?></td> 
        <td><?php //echo $row['khatiyan_no']; ?></td>
        <td><?php //echo $row['land_owner']; ?></td>
        <td><?php //echo $row['land_quantity']; ?></td>
        <td><?php //echo $row['land_address']; ?></td>
        <td><?php //echo $row['comment']; ?></td> -->
        <td><div>Click</div></td>
        <td><a href="details.php?id=<?php echo $row['id']?>">View</a></td>

    </tr>
    <?php } 
    } else echo "<h1><span class=\"text-danger\">No</span> <span class=\"text-warning\">Do</span><span class=\"text-success\">Cu</span><span class=\"text-info\">me</span><span class=\"text-royal-orange\">nts </span><span class=\"text-jungle-green\">Fo</span><span class=\"text-warning\">u</span><span class=\"text-success\">nd</span></h1>"; ?>
    </table>