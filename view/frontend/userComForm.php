
<head>
    <link rel="stylesheet" href="./public/css/welcomeForm.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>
tinymce.init({ selector:'textarea', forced_root_block : '', force_br_newlines : true, force_p_newlines : false, });
  </script>
</head>
<body>
    <?="<form class='userForm' action='./index.php?executeCreateCom=executeCreateCom&id_post=". $id_post ."' method='POST'>"?>  
        <h4>Titre:</h4>
        <input type='text' name='titleCom'/>
        <h4>Contenu du commentaire:</h4>
        <textarea id='commentContent' name='commentContent' cols='50' rows='20'></textarea></br>
        <input type="submit" name='submit' value="Valider" class='submitBtn'>
    </form> 
    <script src='./public/js/userForms.js'></script>
</body>
