<div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin page
                            <small>Subheading</small>
                        </h1>
                        <?php
                          
                        $user = new User();
                        $result_set = $user->find_all_user();
                        
                        while($row =  mysqli_fetch_arra($result_set)){
                            echo $row['username'];
                        }

                          $single_user = User:: find_user_by_id(1);

                         echo $single_user['first_name'];

                       
                        
                       
                        ?>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>