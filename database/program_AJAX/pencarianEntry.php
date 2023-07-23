<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pencarian entry with ajax</title>
</head>
<script>
    function browseNama(str){ // Perbaikan pada nama fungsi (browseNama bukan browserNama)
        if(str.length == 0){
            document.getElementById("txtPetunjuk").innerHTML = " ";
            return;
        }
        let xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function (){
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200){
                document.getElementById("txtPetunjuk").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "petunjuk.php?q="+str,true);
        xmlhttp.send();
    }
</script>
<body>
    <p><b>Masukkan Nama : </b></p>
    <form action="">
        <h4>Nama Awal</h4>
        <input type="text" onkeyup="browseNama(this.value)"> <!-- Perbaikan pada event handler onkeyup (browseNama bukan browserNama) -->
    </form>    
    <p>saran : <span id="txtPetunjuk"></span></p>
</body>
</html>