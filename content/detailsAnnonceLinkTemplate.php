<!-- blog-post-item -->
<div class="blog-post-item">
    <h3><a><?php echo $annonce['titre'] ?></a></h3>
    <ul class="blog-post-info list-inline">
        <li>
            <a>
                <i class="fa fa-clock-o"></i>
                <span class="font-lato">Publié le : <?php echo $annonce['date_debut'] ?></span>
            </a>
        </li>
        <li>
            <a>
                <i class="fa fa-comment-o"></i>
                <span class="font-lato">Expire le : </span>
            </a>
        </li>
        <li>
            <a>
                <i class="fa fa-user"></i>
                <span class="font-lato"><?php echo $annonce['login'] ?></span>
            </a>
        </li>
    </ul>

    <!-- flexslider -->
    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src="" alt="image" class="img-responsive">
            </li>
            <li>
                <img src="" alt="image" class="img-responsive">
            </li>
            <li>
                <img src="" alt="image" class="img-responsive">
            </li>
        </ul>
    </div>
    <!-- ./flexslider -->
    <br>
    <p><?php echo $annonce['descriptionProduit']; ?></p>

</div>
