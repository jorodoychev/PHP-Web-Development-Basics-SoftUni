<form method="get">
    <div>
        Delimiter:
        <select name="delimiter">
            <option value="," name="delimiter">,</option>
            <option value="|" name="delimiter">|</option>
            <option value="&" name="delimiter">&</option>
        </select>
    </div>
    <div>
        Names:
        <input type="text" name="names"></div>
    <div>
        Ages:
        <input type="text" name="ages"></div>
    <div>
        <input type="submit" name="submit" value="Filter!">
    </div>
</form>
<?php
include "RenderStudentsInfo.php";
?>