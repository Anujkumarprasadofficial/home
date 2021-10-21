
<!DOCTYPE html><html lang="en"><head><style>*{margin: 0;padding: 0;box-sizing: border-box;font-family: 'poppins',sans-serif;}body{display: flex;justify-content: center;align-items: center;min-height: 100vh;background: #091921;}.calculator{position: relative;display: grid;}.calculator .value{grid-column: span 4;height: 50px;text-align: right;
    border-radius:10px;
    outline: 100px;
    padding: 10px;
    font-size: 18px;
    background-color:black;
    color:red;border: 1px solid rgba(0,0,0,.1);
    border-color:green;
}

.calculator span{
    display: grid;
    width: 90px;
    height: 100px;
    color: #fff;
    background: #0c2835;
    place-items: center;
    border-radius:10px;
    border: 9px solid rgba(0,0,0,.1);
}
.calculator span:active{
    background:  #4C82;
    color: #111;
}
.calculator span.clear{
    grid-column: span 2;
    width: 180px;
    background: red  ;
}
.calculator span.plus{
    grid-row: span 2;
    height: 200px;

}
.calculator span.equal{
   background: #ffc465;
   height:100px;
}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculator(without js/py )</title>
</head>
<body>
<form class="calculator" name="calc">
  <input class="value" type="text" name="txt" readonly="">
  <span class="num clear" onclick="document.calc.txt.value = ' '"><font color="green">C</font></span>

  <span class="num" onclick="document.calc.txt.value += '/'"><font color="green">/</font></span>
  <span class="num" onclick="document.calc.txt.value += '*'"><font color="green">*</font></span>
    <span class="num" onclick="document.calc.txt.value += '1'"><font color="green">1</font></span>
  <span class="num" onclick="document.calc.txt.value += '2'"><font color="green">2</font></span>
<span class="num" onclick="document.calc.txt.value += '3'"><font color="green">3</font></span>

  <span class="num" onclick="document.calc.txt.value += '-'"><font color="green">-</font></span>
  <span class="num" onclick="document.calc.txt.value += '4'"><font color="green">4</font></span>
  <span class="num" onclick="document.calc.txt.value += '5'"><font color="green">5</font></span>
  <span class="num" onclick="document.calc.txt.value += '6'"><font color="green">6</font></span>
  <span class="num plus" onclick="document.calc.txt.value += '+'"><font color="green">+</font></span>
  <span class="num" onclick="document.calc.txt.value += '7'"><font color="green">7</font></span>
  <span class="num" onclick="document.calc.txt.value += '8'"><font color="green">8</font></span>

    <span class="num" onclick="document.calc.txt.value += '9'"><font color="green">9</font></span>
  <span class="num" onclick="document.calc.txt.value += '0'"><font color="green">0</font></span>
  <span class="num" onclick="document.calc.txt.value += '00'"><font color="green">00</span></font>
    <span class="num" onclick="document.calc.txt.value += '000'"><font color="green">000</font></span>
  <span class="num equal" onclick="document.calc.txt.value = eval(calc.txt.value)"><font color="green">=</font></span>  <span class="num" onclick="document.calc.txt.value -= ''"><font color="green">&#11013</font></span>

</form>


</body>
</html> 
