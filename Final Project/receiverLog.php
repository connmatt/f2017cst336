<?php
    include 'header.php';
    include 'dbConnect.php';
  $dbConn = getDatabaseConnection();
    
    //  function getProductList() {
    //         include 'dbConnect.php';
    //         $conn = getDatabaseConnection("hlm");


    //         // $sql = "SELECT *
    //         //         FROM receiving"; 
                    
                            
    //         $stmt = $conn->prepare($sql);
    //         $stmt->execute();
    //         $record = $stmt->fetchAll(PDO::FETCH_ASSOC);//expecting only one record
 
    //         return $record;
    //     }
        
function displayData($string){
    global $dbConn;
    $newString = $string;
    $sql = $newString;
    $counter = 0;
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo"<input type='time' />";
    
    echo"<table class='table table-bordered'>";
    echo"<thead>";
    echo"<tr>";
    echo"<th>Date</th>";
    echo"<th>Shipper</th>";
    echo"<th>Product</th>";
    echo"<th>Manufacturer</th>";
    echo"<th>Style</th>";
    echo"<th>Color</th>";
    echo"<th>Dylot</th>";
    echo"<th>Size</th>";
    echo"<th>Roll Number</th>";
    echo"<th>Cartons</th>";
    echo"<th>Sidemark</th>";
    echo"<th>P.O. #</th>";
    echo"<th> More Info </th>";
    echo"</tr>";
    echo"</thead>";
        
    foreach ($products as $product){
        
        echo "<tr>";
        echo "<td>".$product['date_received']."</td>";
        echo "<td>".$product['shipper']."</td>";
        echo "<td>".$product['product']."</td>";
        echo "<td>".$product['manufacturer']."</td>";
        echo "<td>".$product['style']."</td>";
        echo "<td>".$product['color']."</td>";
        echo "<td>".$product['dylot']."</td>";
        echo "<td>".$product['size']."</td>";
        echo "<td>".$product['roll_number']."</td>";
        echo "<td>".$product['cartons']."</td>";
        echo "<td>".$product['sidemark']."</td>";
        echo "<td>".$product['po']."</td>";
        echo "<td><a href='#' class='productLink' id='".$product['id']."' > more info </a></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
  }
  
?>
  
<script>

    $(document).ready( function(){
        
        $(".productLink").click( function(){
            
            //alert($(this).attr('id'));
            $('#productInfoModal').modal("show");
            $("#productInfo").html("<img src='img/loading.gif'>");
            
            $.ajax({

                type: "GET",
                url: "getProductInfo.php",
                dataType: "json",
                data: { "receiverId": $(this).attr('id')},
                success: function(data,status) {
                
                   //alert(data);
                   $("#productInfo").html(" Age: " + data.age + "<br>" +
                                      " <img src='img/" + data.pictureURL + "'><br >" + 
                                       data.description);   
                 
                   $("#productNameModalLabel").html(data.name);                   
                   
                
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //alert(status);
                }
                
            });//ajax
            
             
            
            
        }); //.getLink click
        
    });//document.ready
</script>



<form method="GET">
    <h3>Filter through by product:</h3>
<select class = "search" name= "filter">
    <option value="all" selected="selected">All</option>
    <option value="Carpet">Carpet</option>
    <option value="Carpet Tile">Carpet Tile</option>
    <option value="VCT">VCT</option>
    <option value="Sheet Vinyl">Sheet Vinyl</option>
    <option value="Linoleum">Linoleum</option>
    <option value="Base">Base</option>
    <option value="Underlayment">Underlayment</option>
</select>
<br>
<input type="submit" value="Go" name="submit" />
</form>


<br><br>

<?php
$tmp = "SELECT *
        FROM receiving"; 
//displayData($tmp);
function submit(){
    global $dbConn;
    
    if (isset($_GET['submit'])) {
      $filter = $_GET['filter'];
      $temp = "";
      $filterStatus = false;
      
      if(!empty($_GET['filter'])){
        $filterStatus = true;
      }
      else{
        $filterStatus = false;
      }
      if ($filterStatus == true){
          if ($filter == 'all'){
          $temp = "SELECT *
                   FROM receiving";
          displayData($temp);
        }
        else if ($filter == 'Carpet'){
          $temp = "SELECT date_received, shipper, product, manufacturer, style, color, dylot, size, roll_number, cartons, sidemark, po
                   FROM receiving
                   WHERE product = '" . $filter."'";
          displayData($temp);
        }
        else if ($filter == 'Carpet Tile'){
          $temp = "SELECT date_received, shipper, product, manufacturer, style, color, dylot, size, roll_number, cartons, sidemark, po
                   FROM receiving
                   WHERE product = '" . $filter."'";
          displayData($temp);
        }
        else if ($filter == 'VCT'){
          $temp = "SELECT date_received, shipper, product, manufacturer, style, color, dylot, size, roll_number, cartons, sidemark, po
                   FROM receiving
                   WHERE product = '" . $filter."'";
          displayData($temp);
        }
        else if ($filter == 'Sheet Vinyl'){
          $temp = "SELECT date_received, shipper, product, manufacturer, style, color, dylot, size, roll_number, cartons, sidemark, po
                   FROM receiving
                   WHERE product = '" . $filter."'";
          displayData($temp);
        }
        else if ($filter == 'Linoleum'){
          $temp = "SELECT date_received, shipper, product, manufacturer, style, color, dylot, size, roll_number, cartons, sidemark, po
                   FROM receiving
                   WHERE product = '" . $filter."'";
          displayData($temp);
        }
        else if ($filter == 'Base'){
          $temp = "SELECT date_received, shipper, product, manufacturer, style, color, dylot, size, roll_number, cartons, sidemark, po
                   FROM receiving
                   WHERE product = '" . $filter."'";
          displayData($temp);
        }
        else if ($filter == 'Underlayment'){
          $temp = "SELECT date_received, shipper, product, manufacturer, style, color, dylot, size, roll_number, cartons, sidemark, po
                   FROM receiving
                   WHERE product = '" . $filter."'";
          displayData($temp);
        }
      }
    }
      
    }
        // $products = getProductList();
        // //print_r($pets);
        
        // foreach ($products as $product){
            
        //     echo "<tr>";
        //     echo "<td>".$product['date_received']."</td>";
        //     echo "<td>".$product['shipper']."</td>";
        //     echo "<td>".$product['product']."</td>";
        //     echo "<td>".$product['manufacturer']."</td>";
        //     echo "<td>".$product['style']."</td>";
        //     echo "<td>".$product['color']."</td>";
        //     echo "<td>".$product['dylot']."</td>";
        //     echo "<td>".$product['size']."</td>";
        //     echo "<td>".$product['roll_number']."</td>";
        //     echo "<td>".$product['cartons']."</td>";
        //     echo "<td>".$product['sidemark']."</td>";
        //     echo "<td>".$product['po']."</td>";
        //     echo "<td><a href='#' class='productLink' id='".$product['id']."' > more info </a></td>";
        //     echo "</tr>";
        // }
submit();
?>
<!--</tbody>-->
<!--</table>-->
<!-- Modal -->
<div class="modal fade" id="productInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productNameModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div id="productInfo"></div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



        
<?php
    include 'footer.php';
?>