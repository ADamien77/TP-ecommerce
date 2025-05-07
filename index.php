<?php include('data/products.inc.php'); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="data/style.css">
    <title>Ecommerce</title>
</head>

<body>
    <header>
        <h1>TP Ecommerce</h1>
        <nav>
            <ul>
                <li><a href="">Category</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">Category</a></li>
                <li><a href="">Category</a></li>
            </ul>
        </nav>
    </header>
    <div class="ligne"></div>
    <main>
        <?php foreach ($products as $product): // Boucle foreach pour afficher chaque produit ?>  
            <div class="card">
                <img src="<?php echo $product['image_url']; ?>" alt=" <?php echo $product['details']['name']; ?>">
                <div class="description">
                    <h2> <?php echo $product['details']['name']; ?></h2>
                    <p class="etiquette"> <?php echo $product['category']['name']; ?></p>
                    <p class="description"> <?php echo $product['details']['description']; ?></p>
                </div>
                <div class="stock">
                    <p class="stock">
                        <?php $stock = $product['stock'];
                        if ($stock > 65) { // Si le stock est supérieur à 65, afficher "En stock"
                            echo "En stock";
                        } elseif ($stock > 0) { // Sinon, si le stock est supérieur à 0, afficher "Stock faible"
                            echo "Stock faible";
                        } else { // Sinon, afficher "Rupture de stock"
                            echo "Rupture de stock";
                        } ?>
                        <?php echo $product['stock']; ?>
                    </p>
                </div>
                <div class="achat">
                    <div class="prix">
                        <?php
                        $prixHT = $product['pricing']['net_price']; // Prix hors taxe
                        $tva = $product['pricing']['tax_rate']; // Taux de TVA
                        $prixTTC = $prixHT * (1 + $tva); // Prix TTC

                        $quantity = $product['packaging']['quantity']; // Quantité
                        $unit = $product['packaging']['unit']; // Unité
                        $prixParUnite = $prixTTC / $quantity; // Prix par unité
                        ?>
                        <p class="prixttc">
                            <?php echo number_format($prixTTC, 2, ',', ' ') . '€'; // Afficher le prix TTC ?> </p> 
                        <p class="prixUnite">
                            <?php echo number_format($prixParUnite, 2, ',', ' ') . '€/' . $unit; // Afficher le prix par unité ?> </p> 
                    </div>
                    <button>Acheter</button>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
</body>

</html>