<h1 class="text-primary"><i class="fa fa-users"></i> All User <small>All user list</small> </h1>
<ol class="breadcrumb">
    <li><a href="index.php?page=dashboard"> <i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><i class="fa fa-users"></i> All Users</li>
</ol>



<div class="table-responsive"> 
                    <table id="data" class="table table-hover table-bordered table-striped">
                        <thead>
                           <tr>
                               <th>Name</th>
                               <th>Email</th>
                               <th>Username</th>
                               <th>Photo</th>
                           </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $db_sinfo = mysqli_query($connect,"SELECT * FROM `users`");
                            while($row = mysqli_fetch_assoc($db_sinfo)){ ?>
                            
                            <tr>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td><?php echo $row['username']; ?></td>
                                <td><img style="width: 100px;" src="images/<?php echo $row['photo']; ?>"alt=""></td>

                            </tr>
                            <?php

                            }

                            ?>
                        </tbody>

                    </table>
                    </div>

