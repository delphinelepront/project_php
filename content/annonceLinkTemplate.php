<div class="col-md-4">
    <!-- blog-post-item -->
    <div class="blog-post-item grid">

        <!-- flexslider -->
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <img src="../include/img/blog2.jpg" alt="image" class="img-responsive">
                </li>
                <li>
                    <img src="../include/img/blog1.jpg" alt="image" class="img-responsive">
                </li>
                <li>
                    <img src="../include/img/blog4.jpg" alt="image" class="img-responsive">
                </li>
            </ul>
        </div>
        <!-- ./ flexslider -->
        <h3><a href="<?php echo "detailsAnnonce.php?id=".$annonce[id]." "; ?>"><?php echo $annonce[titre];?></a></h3>
        <ul class="blog-post-info list-inline">
            <li>
                <a>
                    <i class="fa fa-tag"></i>
                    <span class="font-lato"><?php echo $annonce[prix];?></span>
                </a>
            </li>
        </ul>
        <a href="<?php echo "detailsAnnonce.php?id=".$annonce[id]." "; ?>" class="btn btn-theme">Voir l'annonce</a>
    </div>
    <!-- ./ blog-post-item -->
</div>
