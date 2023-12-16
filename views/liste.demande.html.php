
        <div class="container4">
            <div class="tableau">
                <fieldset>
                    <legend>Mes Demandes</legend>
                    <form class="bloc4" action="<?=WEBROOT?>" method="post">
                        <label for="Etat" class="etat">Etat: </label>
                        <select>
                            <option value="All">All</option>
                            <option value="Encours">Encours</option>
                            <option value="Accepter">Accepter</option>
                            <option value="Rejeter">Rejeter</option>
                        </select>
                        <button type="submit" name="action" value="form-filtre-demande">OK</button>
                    </form>
                    <div class="button2">
                        <a href="<?=WEBROOT?>?action=add"><input type="button" value="Add new " id="button1"></a>
                    </div>
                    <table>
                        <thead>
                            <th>Date</th>
                            <th>Type</th>
                            <th>Etat</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php foreach ($demandes as $value):?>
                                <tr>
                                    <td><?=$value['date']?></td>
                                    <td><?=$value['type']?></td>
                                    <td><?=$value['etat']?></td>
                                    <td><a href="detailsdemande.html">Details de la demande</a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </fieldset>
            </div>
        </div>