<!doctype html>
<html>
    <head>
        <title>Admin Page | View All Products</title>
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
    <form method="POST">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">

                <h1>Products Table </h1>
                 <table id="myTable" class="table table-striped table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Name </th>
                        <th>Description </th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>
                            <?=anchor('admin/products/create', 
                            'Add Product', 
                            ['class'=>'btn btn-primary btn-sm'])?>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($products as $product) : ?>
                    <!-- <tr>
                        <td>1</td>
                        <td>Baju</td>
                        <td>75000</td>
                        <td>10</td>
                    </tr> -->

                    <tr>
                        <td><?=$product->id?></td>
                        <td><?=$product->name?></td>
                        <td><?=$product->description?></td>
                        <td><?=$product->price?></td>
                        <td><?=$product->stock?></td>
                        <td>
                            <?=anchor('admin/products/update/' . $product->id, 'Edit', ['class'=>'btn btn-default btn-sm'])?>
                            <?=anchor('admin/products/delete/' . $product->id, 'Delete', ['class'=>'btn btn-danger btn-sm',
                                            'onclick'=>'return confirm(\'Apakah Anda Yakin?\')'])?>
                        </td>
                    </tr>

                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
      

        <script>
            $(document).ready(function(){
                $('#myTable').DataTable();
            });
        </script>

        </form>
    </body>
</html>