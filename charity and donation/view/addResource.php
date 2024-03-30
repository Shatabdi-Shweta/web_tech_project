<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Resource</title>
</head>
<body>
    <form action="../controller/add_resource.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Add Educational Resource</legend>

            <label for="resource_title">Resource Title:</label><br>
            <input type="text"  name="resource_title" id="resource_title" value=""><br><br>

            <label for="thumbnail">Thumbnail Image URL:</label><br>
            <input type="file" name="thumbnail"><br><br>

            <label for="description">Description:</label><br>
            <textarea name="description" id="description" cols="80" rows="10"></textarea><br>

            <br><label for="category">Category:</label>
            <select name="category" id="category" value="">
                <option value="food">Food</option>
                <option value="medical_care">Medical Care</option>
                <option value="education">Education</option>
            </select><br><br>
            <input type="submit" name="submit" value="Add Resource">
        </fieldset>
    </form>
</body>
</html>