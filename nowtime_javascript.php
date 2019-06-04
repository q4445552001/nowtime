<script language="JavaScript">
function ShowTime()
{
  var today = new Date();
  var Y = today.getFullYear();
  var M = ('0' + (today.getMonth()+1)).substr(-2);
  var D = ('0' + today.getDate()).substr(-2);
  var h = ('0' + today.getHours()).substr(-2);
  var m = ('0' + today.getMinutes()).substr(-2);
  var s = ('0' + today.getSeconds()).substr(-2);
　document.getElementById('showbox').innerHTML = Y + "-" + M + "-" + D + " " + h + ":" + m + ":" + s;
　setTimeout('ShowTime()',1000);
}
</script>
<body onload="ShowTime()">
  <table align='center' height="800">
    <tr>
	  <div id="showbox">
    </tr>
  </table>
</body>