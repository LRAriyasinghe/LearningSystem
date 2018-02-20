<div class="content">
    <p id="demo">This Text can be Change</p>
    <button type="button" onclick='document.getElementById("demo").innerHTML = "Hello Lalanga Ravini"'>Click</button>

    <p id="dem">This is bulb example</p>
    <button type="button" onclick="myfunction()">Click Me</button>

    <script>
        function myfunction() {
            document.getElementById("dem").innerHTML = "Paragraph Changed";
        }
    </script>

    <p id="lala"></p>
    <script>
        document.getElementById("lala").innerHTML = 4+5;
    </script>
    <script>
        document.write(5+6);
        document.write(13);
        document.writeln(7+8);

        document.write(90);
        document.getElementById("demo").innerHTML = "Hello Dolly.";
    </script>
</div>
