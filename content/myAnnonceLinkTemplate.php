<div class="col-md-6 col-sm-6">
    <!-- blog-post-item -->
    <div class="blog-post-item grid">

        <!-- flexslider -->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="img/blog2.jpg" alt="image" class="img-responsive">
                </li>
                <li>
                    <img src="img/blog1.jpg" alt="image" class="img-responsive">
                </li>
                <li>
                    <img src="img/blog4.jpg" alt="image" class="img-responsive">
                </li>
            </ul>
        </div>
        <!-- ./ flexslider -->
        <h3><a href="<?php echo "detailsAnnonce.php?id=".$annonce[id]." "; ?>"><?php echo $annonce[titre];?></a></h3>
        <a href="<?php echo "editAnnonce.php?id=".$annonce[id]." "; ?>" class="btn btn-theme">Modifier l'annonce</a>
    </div>
    <!-- ./ blog-post-item -->
</div>
