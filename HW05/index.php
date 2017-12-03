<?php
include 'sessions.php';

?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Earthquake AJAX</title>
  <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
</head>
<body>
    <header>
      <h1>Earthquake Information</h1>
    </header>
      <form action="sessions.php" method="POST">
          <fieldset>
              <legend>Harry Potter Spells!!!!</legend>
				Start Time:   <input type="text" id="strt_time" name="Start_Time" value="2017-10-01"> <br /><br />
				End Time:     <input type="text" id="end_time"  name="End_Time" value="2017-11-30"> <br /><br />
				Magnitude (0 to 7): <input type="range" id="mag" min="0" value="3" name="mag" max="7"> <br /><br />
				<strong>Change any value to update results.</strong><br /><br />
		  </fieldset>
	  </form>
	  
	  <br><br>
        <fieldset>
     <?php
	    echo $_SESSION["report"];
	    ?>
	    <div id="searchInfo"></div>
     </fieldset>
     <br><br><br>
      <div id="earthquakeResult"></div>

  <script> 
		
		$("input").change(getEarthquakes);
		
		$("#searchInfo").append("<a>" + $("#strt_time") + " " + $("#end_time") + " " + $("#mag") + "</a>"); 
  	
  	function getEarthquakes() {        
      $.ajax({
            type: "get",
             url: "https://earthquake.usgs.gov/fdsnws/event/1/query?",
        dataType: "json",
            data: {
                   "format":"geojson",
                   "starttime":$("#strt_time").val(),
                   "endtime"  :$("#end_time").val(),
                  // "latitude" :$("#lat").val(),
                  // "longitude":$("#long").val(),
                  // "maxradius":$("#max_radius").val(),
                   "minmag"   :$("#mag").val()
            },
            success: function(data,status) {
            	$('#earthquakeResult').html(data["metadata"].title + "<br>");
                 for (var i=0; i < data['features'].length; i++ ) {
                 	$('#earthquakeResult').append(data['features'][i]['properties']["mag"] + " - " + data['features'][i]['properties'].place  + "<br/>");
                 }
              },
            complete: function(data,status) { //optional, used for debugging purposes
                 //alert(status);
            }
         });
    }
    
    function searchInfo(){
        $("#searchInfo").html("");
        $.ajax({
            type: "get",
            url: "addToDB.php",
            dataType: "json",
            data: { "start_time": $("#strt_time").val(),
                    "end_time": $("#end_time").val(),
                    "magnitude": $("#mag").val()
            },
            success: function(data,status) {
                 
              },
              complete: function(data,status) { //optional, used for debugging purposes
                  //alert(status);
              }
         });
    }

 	</script>

     <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-dateFormat/1.0/jquery.dateFormat.min.js"></script>
    
    <!-- Bootstrap -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- Javascript file -->
    <!--<script src="script.js"></script>-->
    </body>
</html>