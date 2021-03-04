<script>
function pie(ctx, w, h, datalist)
{
  var radius = h / 2 - 5;
  var centerx = w / 2;
  var centery = h / 2;
  var total = 0;
  for(x=0; x < datalist.length; x++) { total += datalist[x]; }; 
  var lastend=0;
  var offset = Math.PI / 2;
  for(x=0; x < datalist.length; x++)
  {
    var thispart = datalist[x]; 
    ctx.beginPath();
    ctx.fillStyle = colist[x];
    ctx.moveTo(centerx,centery);
    var arcsector = Math.PI * (2 * thispart / total);
    ctx.arc(centerx, centery, radius, lastend - offset, lastend + arcsector - offset, false);
    ctx.lineTo(centerx, centery);
    ctx.fill();
    ctx.closePath();		
    lastend += arcsector;	
  }
}

var datalist= new Array(35, 25, 20, 12, 7, 1); 
var colist = new Array('blue', 'red', 'green', 'orange', 'gray', 'yellow');
var canvas = document.getElementById("canvas3"); 
var ctx = canvas.getContext('2d');
pie(ctx, canvas.width, canvas.height, datalist); 
</script>