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
        <?php $this->load->view('inc/sidebar'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php $this->load->view('inc/header'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Category</h1>

                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myCategoryModal">
                        Add New Category
                    </button>

                    <table class="table table-striped" id="categoryTable">
                        <thead>
                            <tr>
                                <th scope="col">Label</th>
                                <th scope="col">Key</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $category) { ?>
                                <tr>
                                    <th scope="row"><?php echo $category->label ?></th>
                                    <td><?php echo $category->value ?></td>
                                    <td>
                                        <button data-toggle="modal" data-target="#myCategoryModal" data-id="<?php echo $category->id ?>" data-label="<?php echo $category->label ?>" data-value="<?php echo $category->value ?>" onclick="editCategory(event)" class="btn btn-primary">Edit</button>
                                    </td>
                                    <td><a href="<?php echo base_url() . 'category/delete/' . $category->id ?>" class="btn btn-danger">Delete</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Skill</h1>

                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Add New Skill
                    </button>

                    <table class="table table-striped" id="skillTable">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">number</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($skills as $skill) { ?>
                                <tr>
                                    <th scope="row"><?php echo $skill->name ?></th>
                                    <td>
                                        <ul>
                                            <?php foreach ($skill->categories as $key => $category) { ?>
                                                <li><?php echo $category->label ?></li>
                                            <?php } ?>
                                        </ul>
                                    </td>
                                    <td><?php echo $skill->number ?></td>
                                    <td>
                                        <button data-toggle="modal" data-target="<?php echo "#myModal_" . $skill->id ?>" class="btn btn-primary">Edit</button>
                                        
                                        <!-- The Skill Edit Modal -->
                                        <div class="modal fade" id="<?php echo "myModal_" . $skill->id ?>" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog modal-lg modal-dialog-centered ">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Skill</h4>
                                                        <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form id="form" action="<?php echo base_url() . 'skill' ?>" method="POST">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" name="name" id="name" class="form-control" value="<?php echo $skill->name ?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="category">Category</label>
                                                                <?php 
                                                                    $skill_categories = explode(",", $skill->category);

                                                                    foreach ($categories as $key => $category) { 
                                                                ?>
                                                                    <div class="form-check">
                                                                        <label class="form-check-label">
                                                                            <input name="category[]" type="checkbox" class="form-check-input" value="<?php echo $category->id ?>" <?php if(in_array($category->id, $skill_categories)) echo "checked" ?>> <?php echo $category->label ?>
                                                                        </label>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="number">Number</label>
                                                                <input type="number" name="number" id="number" class="form-control" value="<?php echo $skill->number ?>" />
                                                            </div>
                                                            <div class="form-group text-center">
                                                                <input type="text" name="id" id="id" class="d-none" value="<?php echo $skill->id ?>" />
                                                                <input type="submit" name="submit" id="submit" class="brn btn-success btn-lg" />
                                                            </div>
                                                        </form>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal()">Close</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td><a href="<?php echo base_url() . 'skill/delete/' . $skill->id ?>" class="btn btn-danger">Delete</a></td>


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

    <!-- The Skill Modal -->
    <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Skill</h4>
                    <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="form" action="<?php echo base_url() . 'skill' ?>" method="POST">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <?php foreach ($categories as $key => $category) { ?>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input name="category[]" type="checkbox" class="form-check-input" value="<?php echo $category->id ?>"><?php echo $category->label ?>
                                    </label>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label for="number">Number</label>
                            <input type="number" name="number" id="number" class="form-control" />
                        </div>
                        <div class="form-group text-center">
                            <input type="text" name="id" id="id" class="d-none" />
                            <input type="submit" name="submit" id="submit" class="brn btn-success btn-lg" />
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeModal()">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- The Category Modal -->
    <div class="modal fade" id="myCategoryModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Category</h4>
                    <button type="button" class="close" data-dismiss="modal" onclick="closeCategoryModal()">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="category_form" action="<?php echo base_url() . 'category' ?>" method="POST">
                        <div class="form-group">
                            <label for="category_label">Label</label>
                            <input type="text" name="category_label" id="category_label" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="category_value">Key</label>
                            <input type="text" name="category_value" id="category_value" class="form-control" />
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" name="submit" id="submit" class="brn btn-success btn-lg" />
                        </div>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="closeCategoryModal()">Close</button>
                </div>

            </div>
        </div>
    </div>

    <?php $this->load->view('inc/footer'); ?>

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
        // $(document).ready(function() {
        //     $('#skillTable').DataTable();
        //     $('#categoryTable').DataTable();
        // })

        function editCategory(event) {
            const id = event.target.getAttribute("data-id")
            const label = event.target.getAttribute("data-label")
            const value = event.target.getAttribute("data-value")

            document.getElementById("category_id").value = id
            document.getElementById("category_label").value = label
            document.getElementById("category_value").value = value
        }

        function closeModal() {
            document.getElementById("form").reset()
        }

        function closeCategoryModal() {
            document.getElementById("category_form").reset()
        }
    </script>

</body>

</html>