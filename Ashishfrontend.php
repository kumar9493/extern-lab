<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" >
        <title>Change Order of Images in Photo Gallery with Drag and Drop using PHP AJAX</title>
    </head>
    <body>
        <div id="gallery">
        
        <div id="image-container">
        <h2>Change Order of Images in Photo Gallery with Drag and Drop using PHP AJAX</h2>
        <div id="txtresponse" > </div>
            <ul id="image-list" >
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        $imageId = $row['id'];
                        $imageName = $row['image_name'];
                        $imagePath = $row['image_path'];

                        echo '<li id="image_' . $imageId . '" >
                        <img src="' . $imagePath . '" alt="' . $imageName . '"></li>';
                    }
                }
                ?>
            </ul>

        </div>            
        <div id="submit-container"> 
            <input type='button' class="btn-submit" value='Submit' id='submit' />
        </div>
        </div>
    </body>
</html>