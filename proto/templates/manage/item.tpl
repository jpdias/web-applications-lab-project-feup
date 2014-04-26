<!-- Custom styles for this template -->
<link href="../css/dashboard.css" rel="stylesheet">

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3 col-md-2 sidebar">
      <ul class="nav nav-sidebar">
        <li>
          <a href="#">
            Overview
          </a>
        </li>
        <li class="active">
          <a href="#">
            Inventory
          </a>
        </li>
        <li>
          <a href="#">
            Statistics
          </a>
        </li>
        <li>
          <a href="#">
            Users
          </a>
        </li>
        <li>
          <a href="#">
            My profile
          </a>
        </li>
      </ul>
      <form class="body-form" role="search">
        <div class="input-group add-on">
          <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit">
              <i class="glyphicon glyphicon-search">
              </i>
              </button>
            </div>
            </div>
          </form>
        </div>
        
		{foreach $results as $result}
        <br>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="container">
            <div class="row">
              <div class="col-md-9">
                <div class="well well-sm">
                  <div class="media">
                    <a class="pull-left" style="margin-bottom:0px;" href="#">
                      <img class="thumbnail media-object" src="{$result.image}" width="185px" height="135px">
                      <h4>
                        Edit image
                      </h4>
                    </a>
                    <div class="media-body">
                      <h3 class="media-heading">
                        {$result.name}
                      </h4>
                      <br>
                      <h4>
                        <label>
                          Description: 
                          <label>
                          </h4>
                          <h5>
                            {$result.description}
                          </h5>
                          <br>
                          <h4>
                            <label>
                              Status: 
                              <label>
                                <span class="label label-success">
                                  {$result.currentstatus}
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
          {/foreach}
          
		  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                  </button>
                  <h4 class="modal-title" id="myModalLabel">
                    Edit Item
                  </h4>
                </div>
                <div class="row">
              <br>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Title
                  </span>
                  <input type="text" class="form-control" placeholder="Item Title" value="{$result.name}">
                </div>
                
                <br>
              </div>
              <div class="col-md-12">
                <div class="input-group">
                  <span class="input-group-addon">
                    Item Description
                  </span>
                  <input type="text" class="form-control" placeholder="Item Description" value="{$result.description}">
                </div>
                
                <br>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">
                Close
              </button>
              <button type="button" class="btn btn-primary">
                Save changes
              </button>
            </div>
          </div>
        </div>
      </div>
	

<script src="../javascript/docs.min.js">
</script>