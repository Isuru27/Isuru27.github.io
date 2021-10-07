<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
}

.container h2{
    text-align: center;
    font-size: 50px;
}

.countdown{
   margin-top: 50px;
   display: flex;
align-items: center;
justify-content: center;
}

.countdown div{
    position: relative;
    width: 100px;
    height: 100px;
    line-height: 100px;
    text-align: center;
    background: #333;
    color: #fff;
    margin: 0 15px;
    font-size: 40px;
    font-weight: 500;
}

.countdown div::before{
    content: '';
    position: absolute;
    bottom: -30px;
    left: 0;
    width: 100%;
    height: 40px;
    background: #ff0;
    color: #333;
    font-size: 12px;
    line-height: 35px;
    font-weight: 700;
    
}

.countdown #day:before{
    content: 'Days'
}
.countdown #hour:before{
    content: 'Hours'
}
.countdown #minute:before{
    content: 'Minutes'
}
.countdown #second:before{
    content: 'Seconds'
}
#demo{
    text-align: center; 
    margin-top: 50px; 
    font-size: 30px;
}

  </style>
</head>
<body>
  
    <div id="remove" class="container">
        <h2>COMING SOON</h2>
        <div class="countdown">
        <div id="day">00</div>
        <div id="hour">00</div>
        <div id="minute">00</div>
        <div id="second">00</div>
      </div>
      </div>
      <p id="demo"></p>
  
  <script>var countDate =new Date('Oct 15, 2021 18:00:00').getTime();
function count(){
    var now = new Date().getTime();
        gap = countDate - now;

        var second = 1000;
        var minute = second * 60;
        var hour = minute * 60;
        var day = hour * 24;

        var d= Math.floor(gap/(day));
        var h= Math.floor((gap%(day))/(hour));
        var m= Math.floor((gap%(hour))/(minute));
        var s= Math.floor((gap%(minute))/(second));

        document.getElementById('day').innerText = d;
        document.getElementById('hour').innerText = h;
        document.getElementById('minute').innerText = m;
        document.getElementById('second').innerText = s;

        
};
count();
setInterval(count,1000);
Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = this.length - 1; i >= 0; i--) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}
        if (gap < 0) {
            clearInterval(count);
            document.getElementById("demo").innerHTML = "Waiting is over, Join to our webinar";
            document.getElementsByClassName("container").remove();
          }

</script>
</body>
</html>
