<form>
    <textarea rows="10" name="input"></textarea> <br>
    <input type="submit" value="submit">
</form>
<?php
if (isset($_GET['input'])) {
    $text = htmlspecialchars($_GET['input']);
    $text = trim($text);
    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] != " ") {
        $currentSymbol = ord($text[$i]);
            $result = "";
            if ($currentSymbol % 2 == 0) {
                $result .= "<span style ='color: red'>$text[$i]</span>";
            } else {
                $result .= "<span style ='color: blue'>$text[$i]</span>";
            }
            echo $result;
        }

    }
}