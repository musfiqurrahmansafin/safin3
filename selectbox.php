
selectbox.php<!DOCTYPE html>
<html>
<head>
    <title>Personality</title>
    <script>
        function showAttributes() {
            var select = document.getElementById("attributes");
            var selectedOption = select.options[select.selectedIndex].value;
            var display = document.getElementById("display");
            display.innerHTML = "Selected personality attribute: " + selectedOption;
        }
    </script>
</head>
<body>
    Select your personality attributes:<br />
    <select id="attributes">
        <option value="perky">Perky</option>
        <option value="morose">Morose</option>
        <option value="thinking">Thinking</option>
        <option value="feeling">Feeling</option>
        <option value="thrifty">Spend-thrift</option>
        <option value="prodigal">Shopper</option>
    </select>
    <br>
    <button onclick="showAttributes()">Record my personality!</button>
    <p id="display"></p>
</body>
</html>
