<form method="POST">
    <h4>Annonce</h4>
    <br>
    <div class="form-group row">
        <label for="title" class="col-sm-3 col-form-label">Titre</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name ="title" id="title" value="<?php echo $annonce['titre'];?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-sm-3 col-form-label">Prix</label>
        <div class="col-sm-7">
            <input type="text" class="form-control" name="price" id="price" value="<?php echo $annonce['prix'];?>">
        </div>
    </div>

    <div class="form-group row">
        <label for="date" class="col-sm-3 col-form-label">Date de fin</label>
        <div class="col-sm-7">
            <input type="datetime-local" value="<?php echo $annonce['date_fin'];?>" name="date_fin">
        </div>
    </div>

    <div class="form-group row">
        <label for="description" class="col-sm-3 col-form-label">Description de l'annonce</label>
        <div class="col-sm-7">
            <textarea class="form-control" name="description" id="description" rows="5" ><?=$annonce['descriptionProduit']?></textarea>
        </div>
    </div>

    <button type="submit" name="deleteAnnonce" class="btn btn-danger" style="float:right;">Supprimer l'article</button>
    <button type="submit" name="updateAnnonce" class="btn btn-light" style="float:right;">Modifier l'article</button>
</form>