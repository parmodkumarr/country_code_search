<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  
<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This part is inside a .container class.</p> 
  <p>The .container class provides a responsive fixed width container.</p>  
  <input type="text" name="sreach" id="sreach">   
  <ul>
  </ul>     
</div>
<script type="text/javascript">
  $.getJSON( "test.json", function( data ) {
    var items = [];
    var html='';
    $.each( data, function( key, val ) {
      html +="<li id='" + val.number + "'><img src='"+val.flag+"' style='width:20px;'>  "+ val.name+"</li>";
    });
     $('ul').html(html);
  });

$("#sreach").keyup(function(){
  var toSearch = this.value;
  $.getJSON( "test.json", function( data ) {
    var results = [];
    var html='';
    for(var i=0; i<data.length; i++) {
      for(key in data[i]) {
        if(data[i][key].indexOf(toSearch)!=-1) {
          var val = data[i];
         html +="<li id='" + val.number + "'><img src='"+val.flag+"' style='width:20px;'>  "+ val.name+"</li>";
        }
      }
    }
    $('ul').html();
    $('ul').html(html);
    console.log(results);
  })
});

</script>
</body>
</html>
