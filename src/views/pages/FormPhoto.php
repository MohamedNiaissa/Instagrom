<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poster</title>
    <style>
       
       form{
        margin:170px

       }
        fieldset{
            display:flex;
            flex-direction:column;
            flex-wrap:wrap;
            align-items:center;
            padding: 20px;
            /* width:60%; */
        }
        legend{
            text-align:center;
        }
        body{
            background:black;
            color:white;
        }
    </style>
</head>
<body>

    <div class="form">
        <form action="/actions/postImage.php" method="POST">
        <fieldset>
            <legend>Poster</legend>
            <div class="linkimg">
                <label>lien de l'image</label>
                <input type="text"  name= "lienImg" required />
            </div>

            <div class="title">
                <label for="txttitle">Titre</label>
                <input type="text" name="titre" required />
            </div>

            <div class="decri">
                <label for="description">Description</label>
                <input type="text" name = "desc" />
            </div>

            <div class="tagdiv">
                <label for="tag">Tag</label>
                <input type="text" name = "tag" />                
            </div>

            <input type="submit" value = "Poster"></input>
        </fieldset>
        </form>
    </div>
    
</body>
</html>