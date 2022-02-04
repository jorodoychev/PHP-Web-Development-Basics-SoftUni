<?php
$sortedLines = "";
if (isset($_GET['lines'])){
    $data = $_GET['lines'];
    $input = explode("\n", $data);
    $input = array_map("trim", $input);
    $input = array_filter($input);
    sort($input, SORT_STRING);
    $sortedLines = implode("\n", $input);
}
?>
<form>
    <textarea rows="10" name="lines"><?=$sortedLines?></textarea> <br>
<input type="submit" value="Sort">
</form>
