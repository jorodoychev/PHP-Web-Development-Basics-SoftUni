<form>
    <textarea rows="10" name="input"></textarea> <br>
    <input type="submit" value="submit">
</form>
<?php
if (isset($_GET['input'])) {
    $text = htmlspecialchars($_GET['input']);
    $text = trim($text);
    preg_match_all("/[a-zA-Z]+/", $text, $words);
    $words = array_map("strtolower", $words[0]);
    $wordsCount = [];
    foreach ($words as $word) {
        if (!array_key_exists($word, $wordsCount)) {
            $wordsCount[$word] = 0;
        }
        $wordsCount[$word]++;
    }
    echo buildTable($wordsCount);
}
function buildTable($items)
{
    $output = "<table border='2'>";
    foreach ($items as $key => $val) {
        $output .= "<tr><td>{$key}</td><td>{$val}</td></tr>";
    }
    $output .= "</table>";
    return $output;
}

