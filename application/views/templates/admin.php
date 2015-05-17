<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link href="/assets/css/style.css" rel="stylesheet">
    <link href="/assets/css/normalize.css" rel="stylesheet">
    
  </head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="col-md-4">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                </button>
                <a class="navbar-brand" href="/">Soup2Door</a>
                <a href="/main/orders" type="button" class="btn btn-primary admin-bt" >Orders</a>
            </div>
             
        </div>
        <div class="col-md-4">
            <button type="button" class="btn btn-primary admin-bt" data-toggle="modal" data-target="#add_products">Add Product</button>
            <a href="/main/products" type="button" class="btn btn-primary admin-bt" >Products</a>
        </div>
        <div class="col-md-4">
             <button type="button" class="btn btn-danger header-bt">Log off</button>
        </div>
    </div>
</nav>

<!-- Add Product -->
<div class="modal fade" id="add_products" tabindex="-1" role="dialog" aria-labelledby="add_productsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="add_productsLabel">Add Products</h4>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
