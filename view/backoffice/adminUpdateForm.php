<head>
    <link rel="stylesheet" href="./public/css/welcomeForm.css">
    <link rel="stylesheet" href="./public/css/style.css">
    <script src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#contentUpdated'
  });
  </script>
    <?= "<form action='./index.php?executeUpdate=executeUpdate&id_post=". $id_post ."' method='POST'>" ?>
        <h4>Titre:</h4>
        <?= "<input type='text' value='" . $updateTitle . "'name='titleUpdated'/>"?>
        <h4>Contenu:</h4>
        <?= "<textarea id='contentUpdated' name='contentUpdated' cols='50' rows='20'>". $updateContent ."</textarea>"?>
        <input type="submit" name='submit' value="Valider" class='submitBtn'>
    </form>
