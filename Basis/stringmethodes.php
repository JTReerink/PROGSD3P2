<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>String methodes</title>
</head>
<body>

<h2>String methodes</h2>
<form action="" method="post">
    <label for="naam">Naam:</label><br>
    <input type="text" name="naam" id="naam" required placeholder="Naam"><br><br>

    <label for="straat">Straat:</label><br>
    <input type=text name="straat" id="straat" required placeholder="Straat">><br><br>

    <label for="huisnummer">Huisnummer:</label><br>
    <input type=text name="huisnummer" id="huisnummer" required placeholder="Huisnummer">><br><br>

    <label for="postcode">Postcode:</label><br>
    <input type=text name="postcode" id="postcode" required placeholder="Postcode">><br><br>

    <label for="woonplaats">Woonplaats:</label><br>
    <input type=text name="woonplaats" id="woonplaats" required placeholder="Woonplaats">><br><br>

    <input type="submit" name="submit" value="verzenden" >
</form>

<?php

if (isset($_POST['submit'])) {

    /*
     * OPDRACHT 1:
     * Voer onderstaande code in het naamveld in en kijk wat er gebeurd
     * <script>alert('Niet beveiligd tegen script-injections')</script>
     */ //DONE

    /*
     * OPDRACHT 2:
     * Zorg ervoor dat er geen scripts meer ingevoerd kunnen worden.
     * Hiervoor gebruik je de functie htmlspecialchars().
     * Pas elke ingevoerde variabele waarde aan met de functie htmlspecialchars().
     */
    echo htmlspecialchars($naam = $_POST['naam']) ;
    echo htmlspecialchars($straat = $_POST['straat']);
    echo htmlspecialchars($huisnummer = $_POST['huisnummer']);
    echo htmlspecialchars($postcode = $_POST['postcode']);
    echo htmlspecialchars($woonplaats = $_POST['woonplaats']);

    /*
     * OPDRACHT 3:
     * Zorg ervoor dat de naam, straat en woonplaats met een hoofdletter beginnen
     * Hiervoor gebruik je de functie ucfirst()
     *
     * OPDRACHT 4:
     * Alle andere letters moeten kleine letters zijn
     * Hiervoor gebruik je de functie strtolower()
     */
    echo
        $naam, '<br>',
        $straat, '<br>',
        $huisnummer, '<br>',
        $postcode, '<br>',
        $woonplaats, '<br>';

    /*
     * OPDRACHT 5:
     * Check of het ingevoerde huisnummer werkelijk een nummer is.
     * Hiervoor gebruik je de functie is_numeric()
     * Is er geen nummer ingevoerd geef dan een melding dat er een nummer moet worden ingevoerd
     */

}
?>

</body>
</html>