<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resource</title>
</head>
<body>
    <h3>Educational Resource</h3>
    <form action="add_resource.php" method="post" enctype="">
        <label for="resource_title">Resource Title:</label><br>
        <input type="text"  name="resouce_title" id="resouce_title" value=""><br>

        <label for="thumbnail">Thumbnail Image URL:</label><br>
        <input type="url" name="thumnail" id="thumbnail" value=""><br>

        <label for="description">description:</label><br>
        <textarea name="description" id="description" cols="20" rows="10"></textarea><br>

        <label for="category">Category:</label><br>
        <select name="caategory" id="category">
            <option value="food">Food</option>
            <option value="medical_care">Medical Care</option>
            <option value="education">Education</option>
        </select><br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>