<?php include 'nav.php' ?>
    <section class="padd-tb-60">
        <div class="container">
            <div class="row">
                <h1>Ajouter une annonce</h1>
                <form action="createAnnonce.php" method="POST">

                    <br>
                    <div class="form-group row">
                        <label for="title" class="col-sm-3 col-form-label">Titre</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" name="title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="price" class="col-sm-3 col-form-label">Prix</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="number" name="price">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="date" class="col-sm-3 col-form-label">Date de fin</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="datetime-local" value="" name="date_fin">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Description de l'annonce</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                    </div>

                    <button type="submit" name="createAnnonce" class="btn btn-blue" style="float:right;">Publiez !</button>
                </form>


            </div>
        </div>
    </section>


<?php include 'footer.php' ?>

