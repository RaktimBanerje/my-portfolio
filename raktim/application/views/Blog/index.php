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
                            <h1 class="h3 mb-4 text-gray-800">Blog</h1>
                        </div>
                    </div>
                    <!-- Button to Open the Modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        Add New Article
                    </button>

                    <div class="row justify-content-start" id="blog">
                        <?php foreach ($articles as $article) { ?>
                            <div class="col-md-3 card m-3" style="width:400px" id="<?php echo $article->id ?>">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo base_url()."assets/blog/".$article->image ?>" alt="" style="width: 370px; height: 380px;">
                                    <div class="card-body">
                                        <h4 class="card-title">Category: <?php echo $article->category ?></h4>
                                        <h4 class="card-title">Title: <?php echo $article->title ?></h4>
                                        <p class="card-text">Description: <?php echo $article->description ?></p>
                                        <p class="card-text">Date: <?php echo $article->date ?></p>
                                        <p class="card-text">Link: <?php echo $article->link ?></p>
                                        <p class="card-text">Category Link: <?php echo $article->category_link ?></p>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal_<?php echo $article->id?>">Edit</button>
                                        <a href="<?php echo base_url() . 'blog/delete/' . $article->id ?>" class="btn btn-danger">Delete</a>
                                        <!-- The Update Modal -->
                                        <div class="modal fade" id="myModal_<?php echo $article->id?>" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog modal-lg modal-dialog-centered ">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Article</h4>
                                                        <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form id="form" action="<?php echo base_url() . 'blog' ?>" method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <div class="row justify-content-center">
                                                                    <img src="<?php echo base_url()."assets/blog/".$article->image ?>" class="preview" style="height: 380px; width: 370px; display: none;" />
                                                                </div>
                                                                <label for="image">Image</label>
                                                                <input type="file" name="image" accept="image/*" onChange="previewImage(event)" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="category">Category</label>
                                                                <input type="text" name="category" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="title">Title</label>
                                                                <input type="text" name="title" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="description">Description</label>
                                                                <textarea type="text" name="description" class="form-control"></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="date">Publish</label>
                                                                <input type="date" name="date" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="link">Link</label>
                                                                <input type="text" name="link" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="category_link">Category Link</label>
                                                                <input type="text" name="category_link" class="form-control" />
                                                            </div>
                                                            <div class="form-group text-center">
                                                                <input type="text" name="id" class="d-none" />
                                                                <input type="submit" name="submit" class="brn btn-success btn-lg" />
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
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- The Create Modal -->
    <div class="modal fade" id="myModal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Article</h4>
                    <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form id="form" action="<?php echo base_url() . 'blog' ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <div class="row justify-content-center">
                                <img style="height: 380px; width: 370px; display: none;" class="preview" />
                            </div>
                            <label for="image">Image</label>
                            <input type="file" name="image" accept="image/*" onChange="previewImage(event)" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <input type="text" name="category" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="date">Publish</label>
                            <input type="date" name="date" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="link">Link</label>
                            <input type="text" name="link" class="form-control" />
                        </div>
                        <div class="form-group">
                            <label for="category_link">Category Link</label>
                            <input type="text" name="category_link" class="form-control" />
                        </div>
                        <div class="form-group text-center">
                            <input type="text" name="id" class="d-none" />
                            <input type="submit" name="submit" class="brn btn-success btn-lg" />
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

    <?php $this->load->view('inc/footer'); ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>admin_assets/vendor/jquery/jquery.min.js"></script>
    
    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script src="<?php echo base_url(); ?>admin_assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>admin_assets/js/sb-admin-2.min.js"></script>

    <script>
        function closeModal() {
            document.getElementById("form").reset()
            const d_preview = document.getElementById("preview")
            d_preview.src = ``
            d_preview.style.display = "none"
        }

        $(document).ready(function(){
            $("#blog").sortable({
                ready: 150,
                placeholder: "highlited",
                stop: async function() {
                    let selectedData = []
                    $(this).children().each(function() {
                        selectedData.push($(this).attr("id"))
                    })
                    
                    const formdata = new FormData()
                    formdata.append("order", selectedData)

                    const response = await fetch("<?php echo base_url()?>blog/article-arrange", {
                        method: "POST",
                        body: formdata
                    })

                    const data = await response.json()
                }
            })
        })
    </script>
</body>

</html>