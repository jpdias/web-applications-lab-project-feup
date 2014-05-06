{foreach $items as $item}
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="container">
	<div class="row">
      <div class="col-md-9">
        <div class="well well-sm">
          <div class="media">
            <a class="pull-left" style="margin-bottom:0px;" href="#">
              <img class="thumbnail media-object" src="{$item.image}" width="200px" height="150px">
			    <h4>
				{if $item.currentstatus != 'withdrawn'}
                  <button class="btn btn-primary btn-md" data-toggle="modal" data-target="#editItemImageModal">
                    Edit Item image
                </h4>
				{/if}
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
						{if $item.currentstatus == 'available'}
                          <span class="label label-success">
						{else}
							<span class="label label-danger">
						{/if}
                            {$item.currentstatus}
                          </span>
                        </h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
			{if $item.currentstatus != 'withdrawn'}
            <div class="col-md-10">
              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#editItemDetailModal">
                Edit Item details
              </button>
            </div>
            <div class="col-md-10">
              <h2>
                <button class="btn btn-warning btn-md" data-toggle="modal" data-target="#repairItemModal">
                  Repair Item
                </button>
              </h2>
            </div>
			<div class="col-md-10">
              <h2>
                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#disableItemModal">
                  Disable Item
                </button>
              </h2>
            </div>
			{/if}
          </div>
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="editItemDetailModal" tabindex="-1" role="dialog" aria-labelledby="editItemDetailModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="editItemDetailModalLabel">
              Edit item details
            </h3>
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
    
    <div class="modal fade" id="editItemImageModal" tabindex="-1" role="dialog" aria-labelledby="editItemImageModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h3 class="modal-title" id="editItemImageModalLabel">
              Edit item image
            </h3>
          </div>
          <form action="../actions/item_edit_image.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="itemid" value="{$item.iditem}">
            <div class="row">
              <div class="col-md-12">
                <br>
                <div class="input-group">
                  <input type="file" name="file" id="file">
                </div>
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
	
	<div class="modal fade" id="disableItemModal" tabindex="-1" role="dialog" aria-labelledby="disableItemModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              &times;
            </button>
            <h4 class="modal-title" id="disableItemModalLabel">
              Disable item
            </h4>
          </div>
          <form action="../actions/item_disable.php" method="post">
            <input type="hidden" name="itemid" value="{$item.iditem}">
            <div class="row">
              <div class="col-md-12">
                <br>
                
                <div class="col-md-12">
                  <div class="input-group">
                    Are you sure you want to disable this item?
                  </div>
                  
                  <br>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                No
              </button>
              <button type="submit" class="btn btn-success">
                Yes
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
	
  </div>
</div>
{/foreach}