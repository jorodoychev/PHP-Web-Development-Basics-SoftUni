<?php
if (isset($_GET['names'], $_GET['ages'], $_GET['delimiter'])):
    $names = htmlspecialchars($_GET['names']);
    $ages = htmlspecialchars($_GET['ages']);
    $delimiter = trim($_GET['delimiter']);

    $names = explode($delimiter, $names);
    $ages = explode($delimiter, $ages);
    array_map('intval', $ages);
    ?>
    <table border='1' cellpadding='0'>
        <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < count($names); $i++): ?>
        <?php if ($ages[$i] >= 18): ?>
            <tr>
                <td><?= $names[$i]; ?></td>
                <td><?= $ages[$i]; ?></td>
            </tr>
        <?php endif; ?>
        <?php endfor; ?>
        </tbody>
    </table>
<?php endif; ?>






