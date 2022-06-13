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

    <title>Raktim | Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>admin_assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>admin_assets/css/sb-admin-2.min.css" rel="stylesheet">

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
                    <div class="row">
                        <div class="col col-sm-6">
                            <h1 class="h3 mb-4 text-gray-800">Portfolios</h1>
                        </div>
                    </div>
                        <!-- Button to Open the Modal -->
                    <a class="btn btn-primary" href="<?php base_url() ?>portfolio/create"> Add New Portfolio</a>

                    <div class="row justify-content-start" id="portfolio">
                        <?php foreach($portfolios as $portfolio) { ?>
                            <div data-id="<?php echo $portfolio["id"] ?>" class="col-md-3 card m-3" style="width:400px">
                                <div class="card">
                                    <img class="card-img-top" src="<?php echo base_url()."assets/portfolio/".$portfolio["image"] ?>" alt="" style="width: 370px; height: 380px;">
                                    <div class="card-body">
                                        <h4 class="card-title">Title: <?php echo $portfolio["title"] ?></h4>
                                        <p class="card-text">Description: <?php echo $portfolio["description"] ?></p>
                                        <p class="card-text">Category: <?php echo $portfolio["category"] ?></p>
                                        <p class="card-text">Link: <?php echo $portfolio["link"] ?></p>
                                        <button data-toggle="modal" data-target="#myModal_<?php echo $portfolio["id"] ?>" class="btn btn-primary">Edit</button>
                                        <a href="<?php echo base_url() . 'portfolio/delete/' . $portfolio["id"] ?>" class="btn btn-danger">Delete</a> 
                                            <!-- The Modal -->
                                        <div class="modal fade" id="myModal_<?php echo $portfolio["id"] ?>" data-backdrop="static" data-keyboard="false">
                                            <div class="modal-dialog modal-lg modal-dialog-centered ">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Portfolio</h4>
                                                        <button type="button" class="close" data-dismiss="modal" onclick="closeModal()">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <form id="form" action="<?php echo base_url() . 'portfolio'?>" method="POST" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <div class="row justify-content-center">
                                                                    <img src="<?php echo base_url()."assets/portfolio/".$portfolio["image"] ?>" style="height: 380px; width: 370px;" id="preview" />
                                                                </div>
                                                                <label for="image">Image</label>
                                                                <input type="file" name="image" id="image" accept="image/*" onChange="previewImage(event)" class="form-control" />
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered">
                                                                        <tr class="images">
                                                                            <?php foreach ($portfolio["images"] as $key => $imageData) { ?>
                                                                                <td id="<?php echo $imageData["id"] ?>">
                                                                                    <img src="<?php echo base_url()."assets/portfolio/".$imageData["image"] ?>" style="height: 200px; width: 180px;" />
                                                                                    <a href="<?php echo base_url() ?>portfolio/delete-image/<?php echo $imageData["id"] ?>" class="btn btn-danger w-100 my-2">Delete</a>
                                                                                </td>    
                                                                            <?php } ?>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="title">Title</label>
                                                                <input type="text" name="title" class="form-control" value="<?php echo $portfolio["title"] ?>" />
                                                            </div>
                                                            
                                                            <div class="form-group">
                                                                <label for="description">Description</label>
                                                                <textarea type="text" name="description" class="form-control"><?php echo $portfolio["description"] ?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="category">Category</label>
                                                                <input type="text" name="category" class="form-control" value="<?php echo $portfolio["category"] ?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="link">Link</label>
                                                                <input type="text" name="link" class="form-control" value="<?php echo $portfolio["link"] ?>" />
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="images">Other Images</label>
                                                                <input type="file" name="images[]" class="form-control" multiple />
                                                            </div>
                                                            <div class="form-group text-center">
                                                                <input type="text" name="id" class="d-none" value="<?php echo $portfolio["id"] ?>"/>
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
    
    <?php $this->load->view('inc/footer');?>

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
        function previewImage(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        $(document).ready(function() {
            $(".images").sortable({
                delay: 150,
                placeholder: "highlited",
                stop: async function() {
                    let selectedData = []
                    $(this).children().each(function() {
                        selectedData.push($(this).attr("id"))
                    })

                    const formdata = new FormData()
                    formdata.append("order", selectedData)

                    const response = await fetch("<?php echo base_url()?>portfolio/images-arrange", {
                        method: "POST",
                        body: formdata
                    })

                    const data = await response.json()
                }
            })

            $("#portfolio").sortable({
                delay:  150,
                placeholder: "highlited",
                stop: async function() {
                    let selectedData = []
                    $(this).children().each(function() {
                        selectedData.push($(this).attr("data-id"))
                    })
                    
                    const formdata = new FormData()
                    formdata.append("order", selectedData)

                    const response = await fetch("<?php echo base_url()?>portfolio/portfolio-arrange", {
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