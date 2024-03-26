<html>
    <head>
        <link href="TelefonoGrafica.css">
    </head>
    <body>
      
        <div>
            <input id="display" type="text" readonly="true">
        </div>

        <div>
            <button type="button" onclick="Clickme('1')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 1 </button>
            <button type="button" onclick="Clickme('2')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 2 </button>
            <button type="button" onclick="Clickme('3')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 3 </span></button>
        </div>

        <div>
            <button type="button" onclick="Clickme('4')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 4 </button>
            <button type="button" onclick="Clickme('5')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 5 </button>
            <button type="button" onclick="Clickme('6')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 6 </button>
        </div>

        <div>
            <button type="button" onclick="Clickme('7')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 7 </button>
            <button type="button" onclick="Clickme('8')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 8 </button>
            <button type="button" onclick="Clickme('9')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 9 </button>
        </div>

        <div>
            <button class="tastierino" type="button" onclick="Clickme('*')" > * </button>
            <button type="button" onclick="Clickme('0')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> 0 </button>
            <button type="button" onclick="Clickme('#')" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> # </button>
        </div>

        <div>
            <button type="button" onclick="CancelTxt()" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> Cancella</button>
            <button id="call" type="submit" onclick="CallTxt()" style="border: 0; color: white; background-color: gray; display: inline-block; width: 50px; height: 50px; border-radius: 50%"> Chiama </button>
        </div>

        <script>

            function Clickme(number) {
                element = document.getElementById('display');
                element.value += number;
                let button = document.getElementById('call');
                button.disabled = false;
            }

            function CancelTxt() {
                document.getElementById('display').value = '';
                element.value = element.value - number;
                let button = document.getElementById('call');
                button.disabled = true;               
            }   
            function CallTxt(){
                let correctNumber = document.getElementById('display').value;
                lunghezza = correctNumber.toString().length;
                if (correctNumber !== "" && lunghezza == 10)
                    element.value = correctNumber + " " + "STA SQUILLANDO";
                else if (correctNumber.lenght != 10)
                    element.value = correctNumber + " " + "NUMERO NON VALIDO, RIPROVA";
                
            }
        </script>

    </body>

</html>