<!-- Custom styles for this template -->
<link href="../css/bootstrap-responsive.css" rel="stylesheet">

<div id="content">
  <div id="container" class="container">
    <div class="row">
      <!-- Results list and tabular data -->
      <br>
      <br>
      <br>
      <h1>
        &nbsp;&nbsp;&nbsp;
        <i class="glyphicon glyphicon-search">
        </i>
        Search Results
      </h1>
      
      <br>
      <div class="span9" id="results-main">
        
        <div id="results" class="results-on">
          
          {foreach $results as $result}
          
          <section class="result-part">
            <img id="result-thumb" class="pull-left" src="{$result.image}">
            <h3>
              <a href="#" class="view-detail">
                
                {$result.name}
                
              </a>
            </h3>
            <p class="short-desc pull-left">
              
              {$result.description}
              
            </p>
            <div class="price-avail pull-right">
              <!-- star rating inputs -->
              <input name="rating1" type="radio" class="star">
              <input name="rating2" type="radio" class="star">
              <input name="rating3" type="radio" class="star">
              <input name="rating4" type="radio" class="star">
              <input name="rating5" type="radio" class="star" checked="checked">
              <!-- price and availability -->
              <p class="avail">
                Availability: 
                {$result.currentstatus}
                
              </p>
              <button class="btn btn-success">
                Request 
                <i class="glyphicon glyphicon-tag">
                </i>
              </button>
            </div>
          </section>
          
          {/foreach}
          <br>
        </div>
      </div>
    </div>
  </div>