<head>
    <link rel="stylesheet" href="./public/css/welcomeForm.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>
tinymce.init({ selector:'textarea', forced_root_block : '', force_br_newlines : true, force_p_newlines : false, });
  </script>
</head>
<form action='./index.php?executeCreate=executeCreate' method='POST'>
    Titre:</br>
    <input type='text' name='createTitle'/></br>
    Contenu:</br>
    <textarea name='createContent' id='createContent' cols='30' rows='10'></textarea>
    <input type="submit" name='submit' value="Valider" class='submitBtn'>
</form>