<html>
<head>
<style>
body {
    background-image: url("bcklead.jpg");
    background-position:center;
    background-size: cover;
    background-repeat:repeat;
    background-attatchment:fixed;
    color:white;
    }

#header{
  display: inline-block;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  white-space:nowrap;
  color: white;
  font: italic normal bold 90px/normal "Trebuchet MS", Helvetica, sans-serif;
  -o-text-overflow: clip;
  text-overflow: clip;
  white-space: nowrap;
  letter-spacing: 2px;
  text-shadow: 1px 1px 2px black, 0 0 25px yellow, 0 0 5px red;
  letter-spacing: -3px;
  top:0px;

}
.border
{
  font: normal 22px/normal "Trebuchet MS", Helvetica, sans-serif;
	width: 75%;
	text-align: center;
	border-collapse: collapse;
  margin-left:auto;
  margin-right:auto;
}

.enjoy-css2 {
  position:absolute;
  white-space:nowrap;
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 0 22px;
  border: 4px solid rgb(255,255,255);
  font: normal normal bold 20px/50px "Trebuchet MS", Helvetica, sans-serif;
  color: rgb(255, 255, 255);
  text-align: center;
  text-transform: uppercase;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: black;
  margin-top: 400px;


}
.button-align{
  text-align: center;
}

.enjoy-css2:hover {
  color: black;
  background: #ffffff;
}
.th
{
  font: normal bold 32px/normal "Trebuchet MS", Helvetica, sans-serif;
  color: rgba(247,69,4,1);
  text-align: center;
  -o-text-overflow: clip;
  text-overflow: clip;
  letter-spacing: 2px;
  text-shadow: 1px 1px 2px orange, 0 0 25px yellow, 0 0 5px orange;
	padding: 10px 12px;

}
.ys {
  
  padding: 10px 12px;
  text-align: center;
   letter-spacing: 2px;
  font: normal bold 32px/normal "Trebuchet MS", Helvetica, sans-serif;
  -o-text-overflow: clip;
  text-overflow: clip;
  white-space: nowrap;
  text-shadow: 1px 1px 2px black, 0 0 25px yellow, 0 0 5px red;

}
.ys:hover {
  color: rgba(255,255,255,1);
  text-shadow: 0 0 10px rgba(255,255,255,1) , 0 0 20px rgba(255,255,255,1) , 0 0 30px rgba(255,255,255,1) , -1px 0 40px #efef07 , 0 0 70px #ff9000 , 0 0 80px #ff8300 , 0 0 100px #ffbf00 ;
}

#board
{
  font: normal 22px/normal "Trebuchet MS", Helvetica, sans-serif;
	width: 75%;
	text-align: center;
	border-collapse: collapse;
  margin-left:auto;
  margin-right:auto;
}

td
{
	padding: 5px 12px;
}
tr:nth-child(even){
  background-color: black;
}

tr:nth-child(odd){
  background-color: white;
  color:black;
 }
 tr:hover td
{
	background: orange;
	color: rgba(255,67,0,1);
}
</head>
</style>
<div id="board">
    <table class="border" border="0" cellspacing="0" cellpadding="5" width="420"><tbody>
        <thead>
            <tr>
                <td class="th" >NAME</td>
                <td class="th">LEVEL</td>             
                
            </tr>
        </thead>
        </tbody>
            <?php

                $connect = mysqli_connect("localhost","root", "");
                if (!$connect) {
                    die(mysqli_error());
                }
                mysqli_select_db($connect,"arcane");
                $results = mysqli_query($connect,"SELECT name, score FROM signup ORDER BY score DESC LIMIT 10");
                while($row = mysqli_fetch_array($results)) {
                $name = $row['name'];
                $score = $row['score'];
               
            ?>
			<div id="header">&nbspLEADERBOARD</div>
                <tr>
                    <td class="ys"><?php echo $name;?></td>
                    <td class="ys"><?php echo $score;?></td>
                </tr>
				<div class="button-align">
				<br><br>
                <button class="enjoy-css2" onclick="goBack()">Go Back</button>
				</div>
				<script>
function goBack() {
  if(document.referrer!='http://localhost:8888/Game%20Of%20Code%20Tag-3.php')
  { //alert(document.referrer);
          window.history.back();
        }
}

</script>
            <?php
                }
                mysqli_close($connect);
            ?>
        </tbody>
    </table>
</div>

</html>
