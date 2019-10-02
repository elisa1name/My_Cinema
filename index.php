<?php include ('test.php');?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>My Cinema</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="script.js"></script>
</head>
    <body>

        <div class="container">
            <div class="row pt-1 pb-1">
                <div class="col-lg-12">
                <h4 class="text-center">Welcome My Cinema  </h4>
                    <h6 class="text-center">By Elisa</h6>
                </div>
            </div>
        </div>
    <section>
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="image/entrer.jpg" class="d-block w-100" alt="...">
                </div>
            <div class="carousel-item">
                <img src="image/entrer.jpg" class="d-block w-100" alt="...">
            </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
        </div>
    </section>
    <section class="search-sec">
        <div class="container">
            <form method="GET">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                <input type="search" placeholder="Titre..." name='t' class="form-control search-slt">
                                <input type="submit" value="Valider" class="btn btn-danger wrn-btn"/>
                <?php if (isset($_GET['t']) AND !empty($_GET['t'])) {
                while($result = $reponse->fetch(PDO::FETCH_ASSOC)){?>
                <p><?=$result['titre'] ?></p>
                <?php }
                }?>
                            </div>
         <div class="col-lg-3 col-md-3 col-sm-12 p-0">
            <select placeholder="Distributeur..." value="genre" name="distributeur" class="form-control search-slt" id="exampleFormControlSelect1">
                <option>Distributeur...</option>
                <?php
	             while ($id = $distrib->fetch(PDO::FETCH_ASSOC)){?>
	            <option><?=$id['nom'] ?></option>
                <?php }
                ?>
                     <input type="submit" value="valider" class="btn btn-danger wrn-btn"/>
                <?php  if (isset($_GET['distributeur']) AND !empty($_GET['distributeur'])){
	            while ($validation = $validation_distrib->fetch(PDO::FETCH_ASSOC)) {?>
                <p><?= $validation['titre'] ?></p>
                <?php }
                } ?>
        </select>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
        <select placeholder="Genre..." value="genre" name="genre" class="form-control search-slt" id="exampleFormControlSelect1">
        <option>Genre...</option>
        <?php
        while ($donnes = $genre->fetch(PDO::FETCH_ASSOC)){?>
            <option><?=$donnes['nom'] ?></option>
            <?php }
            ?>
            </select>
            <input type="submit" value="Valider" class="btn btn-danger wrn-btn"/>
            <?php if (isset($_GET['genre']) AND !empty($_GET['genre'])){
                while ($data = $id_genre->fetch(PDO::FETCH_ASSOC)) {?>
                    <p><?=$data['titre'] ?></p>
                    <?php }
                } ?>
                </select>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
    <input type="search" placeholder="Nom & prénom..." name='N' class="form-control search-slt">
    <input type="submit" value="Valider" class="btn btn-danger wrn-btn"/>
    <?php if (isset($_GET['N']) AND !empty($_GET['N'])) {
    while($id_nom = $nom->fetch(PDO::FETCH_ASSOC)){?>
        <tr>
            <td><?=$id_nom['nom'] ?></td>
            <td><?=$id_nom['prenom'] ?></td>
        </tr>
<?php }
 }?>
                </div>
            </div>
         </div>
     </div>
</form>
 </div>
 </section>
            <section>
                 <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                        <img src="image/image1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-sm-4">
                        <img src="image/image2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-sm-4">
                        <img src="image/image3.jpeg" class="d-block w-100" alt="...">
                        </div>
                                <div class="col-sm-4">
                                <img src="image/image4.jpg" class="d-block w-100" alt="...">
                                </div>
    <div class="col-sm-4">
    <img src="image/image5.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="col-sm-4">
    <img src="image/image6.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="col-sm-4">
    <img src="image/image7.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="col-sm-4">
    <img src="image/image8.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="col-sm-4">
    <img src="image/image9.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
</section>
<div class="travel">
		<figure class="carousel">
			<img class="mySlides" src="image/1.jpg" alt="image" width="400" height="500">
			<img class="mySlides" src="image/2.jpg" alt="image" width="400" height="500">
			<img class="mySlides" src="image/3.jpg" alt="image" width="400" height="500">
			<img class="mySlides" src="image/4.jpg" alt="image" width="400" height="500">
			<img class="mySlides" src="image/5.jpg" alt="image" width="400" height="500">
			<img class="mySlides" src="image/6.jpg" alt="image" width="400" height="500">
			<img class="mySlides" src="image/7.jpg" alt="image" width="400" height="500">
			<img class="mySlides" src="image/8.jpg" alt="image" width="400" height="500">
		</figure>
    </div>
    <footer>
</footer>
            </body>
            </html>