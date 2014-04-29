{foreach $items as $item}
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="container">
	<div class="row">
      <div class="col-md-9">
        <div class="well well-sm">
          <div class="media">
            <a class="pull-left" style="margin-bottom:0px;" href="#">
              <img class="thumbnail media-object" src="{$item.image}" width="185px" height="135px">
              <h4>
                Edit image
              </h4>
            </a>
            <div class="media-body">
              <h3 class="media-heading">
                {$item.name}
              </h4>
              <br>
              <h4>
                <label>
                  Description: 
                  <label>
                  </h4>
                  <h5>
                    {$item.description}
                  </h5>
                  <br>
                  <h4>
                    <label>
                      Status: 
                      <label>
                        <span class="label label-success">
                          {$item.currentstatus}
                        </span>
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
              Edit Item
            </button>
          </div>
          <div class="col-md-10">
            <h2>
              <button class="btn btn-danger">
                Disable Item
              </button>
            </h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;
          </button>
          <h4 class="modal-title" id="myModalLabel">
            Edit item details
          </h4>
        </div>
        <form action="../actions/item_edit.php" method="post">
		  <input type="hidden" name="itemid" value="{$item.iditem}">
          <div class="row">
            <div class="col-md-12">
              <br>
              
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Name
                  </span>
                  <input type="text" class="form-control" name="itemname" placeholder="Item Name" value="{$item.name}">
                </div>
                
                <br>
              </div>
              
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Description
                  </span>
                  <input type="text" class="form-control" name="itemdescription" placeholder="Last Name" value="{$item.description}">
                </div>
                <br>
                
              </div>
              <br>
              <br>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-success">
              Save changes
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{/foreach}