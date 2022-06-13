<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Raktim | Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>admin_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>admin_assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php $this->load->view('inc/sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('inc/header'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col col-sm-6">
                            <h1 class="h3 mb-4 text-gray-800">Create Portfolio</h1>
                        </div>
                    </div>

                    <div class="row">
                        <form id="form" action="<?php echo base_url() . 'portfolio' ?>" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <div class="row justify-content-center">
                                    <img style="height: 380px; width: 370px; display: none;" id="preview" />
                                </div>
                                <label for="image">Image</label>
                                <input type="file" name="image" id="image" accept="image/*" onChange="previewImage(event)" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" name="description" id="description" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="category">Category</label>
                                <input type="text" name="category" id="category" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" name="link" id="link" class="form-control" />
                            </div>
                            <div class="form-group">
                                <label for="images">Other Images</label>
                                <input type="file" name="images[]" id="images" class="form-control" multiple />
                            </div>
                            <div class="form-group">
                                <label for="link">Priority</label>
                                <input type="text" name="priority" id="priority" class="form-control" />
                            </div>
                            <div class="form-group text-center">
                                <input type="text" name="id" id="id" class="d-none" />
                                <input type="submit" name="submit" id="submit" class="brn btn-success btn-lg" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('inc/footer'); ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script>
        function previewImage(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>admin_assets/vendor/jquery/jquery.min.js"></script>

    <script src="<?php echo base_url(); ?>admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>admin_assets/js/sb-admin-2.min.js"></script>

</body>

</html>