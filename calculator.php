<html>
    <head>
        <title>A simple calculator using javaScript</title>
    </head>
    <body>
        <div id="frm" style="text-align: center; margin-top: 100px;">
            <h3>Simple Calculator</h3>
            <form id="form" name="form" align="center"> 
                <input name="result" style="width: 210px;">
                <br>
                <input type="button" name="1" value="1" onclick="run1()" style="width: 50px;">
                <input type="button" name="2" value="2" onclick="run2()" style="width: 50px;">
                <input type="button" name="3" value="3" onclick="run3()" style="width: 50px;">
                <input type="button" name="plus" value="+" onclick="runplus()" style="width: 50px;">
                <br>
                <input type="button" name="4" value="4" onclick="run4()" style="width: 50px;">
                <input type="button" name="5" value="5" onclick="run5()" style="width: 50px;">
                <input type="button" name="6" value="6" onclick="run6()" style="width: 50px;">
                <input type="button" name="minus" value="-" onclick="runminus()" style="width: 50px;">
                <br>
                <input type="button" name="7" value="7" onclick="run7()" style="width: 50px;">
                <input type="button" name="8" value="8" onclick="run8()" style="width: 50px;">
                <input type="button" name="9" value="9" onclick="run9()" style="width: 50px;">
                <input type="button" name="mul" value="*" onclick="runmul()" style="width: 50px;">
                <br>
                <input type="button" name="0" value="0" onclick="run0()" style="width: 50px;">
                <input type="button" name="." value="." onclick="rundot()" style="width: 50px;">
                <input type="button" name="div" value="/" onclick="rundiv()" style="width: 50px;">
                <input type="button" name="calc" value="=" onclick="evalue()" style="width: 50px;">
                <br>
                <input type="reset" value="AC" style="width: 50px; margin-left: 162px;">
            </form>
        </div>   
        
        <script>
            function run1()
            {document.form.result.value +="1"}
            function run2()
            {document.form.result.value +="2"}
            function run3()
            {document.form.result.value +="3"}
            function runplus()
            {document.form.result.value +="+"}
            function run4()
            {document.form.result.value +="4"}
            function run5()
            {document.form.result.value +="5"}
            function run6()
            {document.form.result.value +="6"}
            function runminus()
            {document.form.result.value +="-"}
            function run7()
            {document.form.result.value +="7"}
            function run8()
            {document.form.result.value +="8"}
            function run9()
            {document.form.result.value +="9"}
            function runmul()
            {document.form.result.value +="*"}
            function run0()
            {document.form.result.value +="0"}
            function rundot()
            {document.form.result.value +="."}
            function rundiv()
            {document.form.result.value +="/"}
            
            
            function evalue()
            {
                var evalue=eval(document.form.result.value);
                document.form.result.value =evalue;
            }
        </script>
    </body>
</html>