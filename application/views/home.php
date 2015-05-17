   <!-- Page Content -->
  <style type="text/css"> 
 
  </style>
    <div class="container">

        <div class="row">

            <div class="col-md-3">
	<form action = "/Main/search" method = "post">
        <div class="input-group">
          <span class="input-group-btn">
            <input class="btn btn-default" type="submit" value ="Go!">
            <input type = "hidden" name = "action" value ="search">
          </span>
          <input type="text" name = "search" class="form-control" placeholder="Search for...">
        </div>
	</form>
	<h3>Categories</h3>
	<div class="list-group list-categories">
		<ul>
<?php       foreach($categories as $category){
?>
            <li><a href="/Main/group_category/<?=$category["id"]?>/<?=$category["category"]?>"> <?=$category["category"]?></a></li>
<?php } ?>
		</ul>
	</div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src= "/assets/pictures/splash1_cartoon.png"  alt="cartoon_splash">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src= "/assets/pictures/Fotor0210164635.jpg" alt="creed">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="/assets/pictures/making_soup.jpg" alt="making soup">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <form action = "/Main/sort_by" method = "post" class='sort'>
                    Sort by 
                    <select name = "sort_by">
                    <option value = "show_all">Show All</option>
                    <option value = "price">Price</option>
                    </select>
                    <input type = "submit" value = "Sort">
                    <input type = "hidden" name = "action" value = "sort">
                </form>
				<div class="row">
					<div class="col-md-4">
				  		<h3>Soups Page (2)</h3>
				  	</div>
				  	<div class="col-md-8">
					  	<ul class="pagination">
						    <li>
						      <a href="#" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
						    <li><a href="#">1</a></li>
						    <li><a href="#">2</a></li>
						    <li><a href="#">3</a></li>
						    <li><a href="#">4</a></li>
						    <li><a href="#">5</a></li>
						    <li>
						      <a href="#" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						      </a>
						    </li>
					  </ul>
				  </div>
				</div>
                <div class="row">
<?php              foreach($products as $product){
?>
                    <div class="col-sm-4 col-lg-4 col-md-4">

                      <div class="thumbnail">
                            <a href="/Main/product_details/<?=$product["id"]?>/<?=$product["name"]?>">
                            <img src="<?= $product["img_src"]?>" alt="<?=$product["id"]?>"/>
                            </a>
                            <div class="caption">
                                <h4 class="pull-right">$<?= $product["price"]?></h4>
                                <h4><a href="/Main/product_details/<?=$product["id"]?>/<?=$product["name"]?>"><?= $product["name"]?></a>
                                </h4>
                                <p><?= $product['description']?> ... <a target= <a href="/Main/product_details/<?=$product["id"]?>"></a></p>
                            </div>
                        </div>

                    </div>
<?php }?>
                </div>
				<div class="row">
					<div class="col-md-4">
				  	</div>
				  	<div class="col-md-8">
					  	<ul class="pagination">
						    <li>
						      <a href="#" aria-label="Previous">
						        <span aria-hidden="true">&laquo;</span>
						      </a>
						    </li>
						    <li><a href="#">1</a></li>
						    <li><a href="#">2</a></li>
						    <li><a href="#">3</a></li>
						    <li><a href="#">4</a></li>
						    <li><a href="#">5</a></li>
						    <li>
						      <a href="#" aria-label="Next">
						        <span aria-hidden="true">&raquo;</span>
						      </a>
						    </li>
					  </ul>
				  </div>
				</div>
            </div>

        </div>

    </div>
    <!-- /.container -->
