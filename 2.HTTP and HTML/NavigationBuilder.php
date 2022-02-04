<form action="">
    <div>Categories:
        <input type="text" name="categories" required/></div>
    <div>Tags:
        <input type="text" name="tags" required/></div>
    <div>Months:
        <input type="text" name="months" required/></div>
    <div><input type="submit" name = "input" value="Generate" required/></div>
</form>
<?php
if (isset($_GET['categories'])) {
    $categories = trim($_GET['categories']);
    $tags = trim($_GET['tags']);
    $months = trim($_GET['months']);

    $categories = explode(", ", $categories);
    $tags = explode(", ", $tags);
    $months = explode(", ", $months);
    echo "<h2>Categories</h2><ul>";
    foreach ($categories as $category) {
        echo "<li>$category</li>";
    }
    echo "</ul>";
    echo "<h2>Tags</h2><ul>";
    foreach ($tags as $tag) {
        echo "<li>$tag</li>";
    }
    echo "</ul>";
    echo "<h2>Months</h2><ul>";
    foreach ($months as $month) {
        echo "<li>$month</li>";
    }
    echo "</ul>";
}