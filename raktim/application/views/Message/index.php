<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BlueKeyboardSoftware | Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>admin_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>admin_assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('inc/sidebar');?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('inc/header');?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Messages</h1>

                    <table class="table table-striped" id="messageTable">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Message</th>
                            <th scope="col">Date</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($messages as $message) { ?>
                                <tr>
                                    <th scope="row"><?php echo $message->name ?></th>
                                    <td><?php echo $message->email ?></td>
                                    <td><?php echo $message->mobile ?></td>
                                    <td><?php echo $message->subject ?></td>
                                    <td><?php echo $message->message ?></td>
                                    <td><?php echo $message->created_at ?></td>
                                    <td><a href="<?php echo base_url() . 'message/delete/' . $message->id ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </table>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    
    <?php $this->load->view('inc/footer');?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>admin_assets/vendor/jquery/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>admin_assets/js/sb-admin-2.min.js"></script>

    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#messageTable').DataTable();
        })
    </script>

</body>

</html>