<!doctype html>
<html>
    <head>
        <title>Admin Page | Add New  Products</title>
        <!-- Load jQUERY, Bootstrap, dan DataTables dari CDN -->
        <!-- Buka URL ini: http://pastebin.com/index/WeaY5Fra -->

        <!-- Load Jquery dari CDN -->
        <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

         <!-- Load DataTables dan Bootstrap CDN -->
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="style.css">

    </head>

    <body>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1>Add New Product </h1>
                <div><?= validation_errors() ?></div>
                <form method="POST">
                <?= form_open('admin/products/create', ['class'=>'form-horizontal']) ?>

               <!-- <form class="form-horizontal"> -->
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Product Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="" value="<?= set_value('name') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                        <!-- <input type="text" class="form-control" placeholder="" value=""> -->
                        <textarea class="form-control" name="description"><?= set_value('description') ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Price</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="price" placeholder="" value="<?= set_value('price') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Available Stock</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" name="stock" placeholder="" value="<?= set_value('stock') ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Save</button>
                        </div>
                    </div>
                </form>

                <?= form_close() ?>
              
            </div>
            <div class="col-md-1"></div>
        </div>
      

        <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
        </script>
    </body>
</html>