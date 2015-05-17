<div class='container'>
  <div class="row">
    <div class="col-md-6">
        <form>
           <div class="col-lg-6">
              <div class="input-group">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">Go!</button>
                </span>
                <input type="text" class="form-control" placeholder="Search for...">
              </div>
            </div>
        </form>
    </div>

  </div>
</div>


<div class="container">
  <div class="table-responsive">           
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Picture</th>
          <th>ID</th>
          <th>Name</th>
          <th>Inventory Count</th>
          <th>Quantity Sold</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>picture</td>
          <td>1</td>
          <td>T-Shit</td>
          <td>20</td>
          <td>1000</td>
          <td>
            <a data-toggle="modal" data-target="#edit" class="btn btn-primary products-bt" >Edit</a> <a href="#" class="btn btn-primary products-bt">Delete</a>
          </td>
        </tr>
        <tr>
          <td>picture</td>
          <td>1</td>
          <td>T-Shit</td>
          <td>20</td>
          <td>1000</td>
          <td>
            <a data-toggle="modal" data-target="#edit" class="btn btn-primary products-bt" >Edit</a> <a href="#" class="btn btn-primary products-bt">Delete</a>
          </td>
        </tr>
        <tr>
          <td>picture</td>
          <td>1</td>
          <td>T-Shit</td>
          <td>20</td>
          <td>1000</td>
          <td>
            <a data-toggle="modal" data-target="#edit" class="btn btn-primary products-bt" >Edit</a> <a href="#" class="btn btn-primary products-bt">Delete</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div class="container">
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

<!-- Edit modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editLabel">Edit Product</h4>
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
