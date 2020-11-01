<?php require_once "store.php"; ?>

<html lang="fr">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
        <script src="js/logic.js"></script>
        <title>Voyage</title>
    </head>

    <body>
        <div id="header">
            <img src="img/logo.jpg" alt="CPNV" id="logo">
            <h1>Voyage - SI-CMI12a</h1>
        </div>

        <form method="post">

            <div class="nav">
                <div class="org">
                <input type="button" onclick="ShowPeople" id="cmdPeople" class="btns" value="Personnes">
                <input type="button" onclick="ShowTransports" id="cmdTransports" class="btns" value="Transport">
                <input type="button" onclick="ShowHousing" id="cmdHousing" class="btns" value="Logement">
                <input type="button" onclick="ShowActivities" id="cmdActivities" class="btns" value="Activités">
                </div>
            </div>

            <div class="dataZone">
                <div id="people" class="hidden">
                    <p class="dataTitle">Les gens:</p>
                Adresse:<input type="text" id="txtAddress49" name="txtAddress[00]">Code postal:<input type="text" id="txtNPA00" name="txtNPA[00]">Ville:<input type="text" name="txtCity[00]" id="txtCity00">Prénom: <input type="text" name="txtFirstName[00]" id="txtFirstName00">Nom:<input type="text" name="txtLastName[00]" id="txtLastName49">Numéro de portable:<input type="text" name="txtPhone[00]" id="txtPhone00">Prof ou élève:<input type="text" name="txtprof[00]" id="txtprof00"><br>
                </div>

                <div id="transports" class="hidden">
                    <p class="dataTitle">Les transports:</p>
                Rendez-vous:<input type="text" name="txtMeeting[00]" id="txtMeeting00">Départ:<input type="text" name="txtStart[00]" id="txtStart00">Arrivée:<input type="text" name="txtEnd[00]" id="txtEnd00">Numéro de vol:<input type="text" name="txtFlight[00]" id="txtFlight00">Numéro de train:<input type="text" name="txtTrain[00]" id="txtTrain00">Numéro de bus:<input type="text" name="txtBus[00]" id="txtBus00">Prix:<input type="text" name="txtPrice[00]" id="txtPrice00"><br>
                </div>

                <div id="housing" class="hidden">
                    <p class="dataTitle" >Le logement:</p>
                    <p>Hotel: <input type="text" name="txtHotelData[00]" id="txtHotelData00"></p>
                    <p>Adresse: <input type="text" name="txtHotelData[01]" id="txtHotelData01"></p>
                    <p>NPA: <input type="text" name="txtHotelData[02]" id="txtHotelData02"></p>
                    <p>City: <input type="text" name="txtHotelData[03]" id="txtHotelData03"></p>
                    <p>Téléphone: <input type="text" name="txtHotelData[04]" id="txtHotelData04"></p>
                    <p>Email: <input type="text" name="txtHotelData[05]" id="txtHotelData05"></p>
                    <img src="img/hotels/hotel-none.png" id="imgHotel" >
                <!--Chambre:<input type="text" name="txtRoom[00]" id="txtRoom00">Etage:<input type="text" name="txtFloor[00]" id="txtFloor00">Max personnes:<input type="text" name="txtCapacity[00]" id="txtCapacity00">Occupant1:<input type="text" name="txtOcc1[00]" id="txtOcc100">Occupant2:<input type="text" name="txtOcc2[00]" id="txtOcc200">Occupant3:<input type="text" name="txtOcc3[00]" id="txtOcc300">Occupant4:<input type="text" name="txtOcc4[00]" id="txtOcc400"><br>-->
                </div>

                <div id="activities" class="hidden">
                    <p class="dataTitle">Les activités sur place</p>
                Titre:<input type="text" name="txtTitle[00]" id="txtTitle00">Description:<textarea name="txtDesc[00]" id="txtDesc00"></textarea>Date:<input type="text" name="txtActDate[00]" id="txtActDate00">Heure:<input type="text" name="txtActTime[00]" id="txtActTime00">Prix:<input type="text" name="txtActPrice[00]" id="txtActPrice00">Transport:<input type="text" name="txtActTrsp[00]" id="txtActTrsp00">Rendez-vous:<input type="text" name="txtRDV[00]" id="txtRDV00">Image:<input type="text" name="txtActImg[00]" id="txtActImg00"><img id="imgActImg00" class="actimg" /><br>
                </div>

                <div id="SaveCMD">
                    <input type="submit" value="Ok" name="cmdSave"><input type="checkbox" name="showdata">
                </div>

            </div>
        </form>
    </body>

</html>
