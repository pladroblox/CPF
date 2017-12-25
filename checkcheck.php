<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
<script>
$(document).ready(function() {
$('#languages').multiselect({
nonSelectedText: 'Select Language'
});
});
</script>

<div class="container">
<h2>  Select your skill for comparsion(at the most 2 skills)</h2>
<form class="form-signin" method="post" ">
<div class="form-group">
<select id="languages" name="languages[]" multiple >
<option value="php">PHP</option>
<option value="python">Python</option>
<option value="javascript">JavaScript</option>
<option value="java">Java</option>

</select>
</div>
<div class="form-group">
<button type="submit" class="btn btn-default" name="btn-save" id="btn-submit">Submit</button>
</div>
</form>
</div>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$car = $_POST['languages']; 

$arrlength = count($car);
    $kk= 1;

for($x = 0; $x < $arrlength; $x++) 
{
    //echo $car[$x];
    echo "<br>";
}
    
    
    
    
    if( $arrlength == 1)
{
	$arrlength = 0 ;
   if( $car[$arrlength] == "java")
   {
	   $dump= "Java";
      echo ' <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
          ' </script>'
              ;
        echo '  <script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"java","geo":"IN","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"geo=IN&q=java&date=today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"}); ',
        '</script>'
            ;
   }
     else if( $car[$arrlength] == "php")
   {
	   $dump= 'PHP';
       echo '  <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
       '</script>'
           ;
        echo  ' <script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"php","geo":"IN","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"geo=IN&q=php&date=today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"}); ',
        '</script>'
            ;
   }
   else if( $car[$arrlength] == 'python')
   {
	   $dump= 'Python';
     
      echo ' <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
          '</script>'
              ;
             echo ' <script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"python","geo":"IN","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"geo=IN&q=python&date=today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});',
                 '</script>'
                 ;
   }
   else if( $car[$arrlength] == 'javascript')
   {
	   $dump= 'JavaScript';
     echo '  <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
      ' </script>'
          ;
       echo '<script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"javascript","geo":"IN","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"geo=IN&q=javascript&date=today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"}); ',
       '</script>'
           ;
   }
    }
    else
        if( $arrlength == 2)
{
	$arrlength = 0 ;
            
   if( $car[$arrlength] == "php" && $car[$kk] == "java")
   {
	   $dump= "Java";
    
     echo '  <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
       '</script>'
           ;
        echo '   <script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"java","geo":"IN","time":"today 12-m"},{"keyword":"php","geo":"IN","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"geo=IN&q=java,php&date=today 12-m","guestPath":"https://trends.google.com:443/trends/embed/"});',
       '</script>'
           ;
       
   }
            
      else  if( $car[$arrlength] == "php" && $car[$kk] == "python")
   
            {
                
            echo '  <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
                '</script>'
                    ;
                    echo '<script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"php","geo":"","time":"today 12-m"},{"keyword":"python","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=php,python&date=today 12-m","guestPath":"https://trends.google.co.uk:443/trends/embed/"});',
                '</script>'
                    ;
                
                }
            
            else if($car[$arrlength] == "php" && $car[$kk] == "javascript")
            {
              echo '  <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
                '</script>'
                    ;
                echo '<script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"php","geo":"","time":"today 12-m"},{"keyword":"javascript","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=php,javascript&date=today 12-m","guestPath":"https://trends.google.co.uk:443/trends/embed/"}); ',
                '</script>'
                    ;
                
            }
            
            else if($car[$arrlength] == "python" && $car[$kk] == "javascript")
            {
             echo '   <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
                '</script>'
                    ;
                echo '<script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"python","geo":"","time":"today 12-m"},{"keyword":"javascript","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=python,javascript&date=today 12-m","guestPath":"https://trends.google.co.uk:443/trends/embed/"}); ',
                '</script>'
                    ;
                
            }
            
        else if($car[$arrlength] == "python" && $car[$kk] == "java")
        {
           echo ' <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
            '</script>'
                ;
            echo '<script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"python","geo":"","time":"today 12-m"},{"keyword":"java","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=python,java&date=today 12-m","guestPath":"https://trends.google.co.uk:443/trends/embed/"});',
            '</script>'
                ;
            
        }
            
            else if($car[$arrlength] == "java" && $car[$kk] == "javascript") 
            {
                
            echo  '  <script type="text/javascript" src="https://ssl.gstatic.com/trends_nrtr/1087_RC03/embed_loader.js">',
                '</script>'
                    ;
                echo '<script type="text/javascript"> trends.embed.renderExploreWidget("TIMESERIES", {"comparisonItem":[{"keyword":"javascript","geo":"","time":"today 12-m"},{"keyword":"java","geo":"","time":"today 12-m"}],"category":0,"property":""}, {"exploreQuery":"q=javascript,java&date=today 12-m","guestPath":"https://trends.google.co.uk:443/trends/embed/"});',
                '</script>'
                    ;
            }
            
            
        }
    
    
}
?>      