
    <div class="container3">
        <form action="<?=WEBROOT?>" method="post">
            <label for="type">Type: </label>
            <select name="type">
                <option></option>
                <option value="Annulation">Annulation</option>
                <option value="Suspension">Suspension</option>
            </select><br><br>
            <label for="motif">
                <p>MOTIF: </p>
                <textarea name="motif" id="" cols="30" rows="10"></textarea>
            </label>
            <div class="button">
                <button type="reset" name="" value="">Annuler</button>
                <button type="submit" name="action" value="form-add-demande">Enregistrer</button>
            </div>
        </form>
    </div>