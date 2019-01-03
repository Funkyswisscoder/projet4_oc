
    <?= "<form action='./index.php?executeUpdate=executeUpdate&id_post=". $id_post ."' method='POST'>" ?>
        Titre:</br>
        <?= "<input type='text' value='" . $updateTitle . "'name='titleUpdated'/>"?></br>
        Contenu:</br>
        <?= "<textarea name='contentUpdated' cols='30' rows='10'>". $updateContent ."</textarea>"?>
        <input type="submit" name='submit' value="Valider">
    </form>
