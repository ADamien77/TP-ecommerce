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
        <?php foreach ($products as $product): ?>
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
                        if ($stock > 65) {
                            echo "En stock";
                        } elseif ($stock > 0) {
                            echo "Stock faible";
                        } else {
                            echo "Rupture de stock";
                        }
                        ?>
                        <?php echo $product['stock']; ?>
                    </p>
                </div>
                <div class="achat">
                    <div class="prix">
                        <?php
                        $prixHT = $product['pricing']['net_price'];
                        $tva = $product['pricing']['tax_rate'];
                        $prixTTC = $prixHT * (1 + $tva);
                        ?>
                        <p class="prixttc">
                            <?php echo number_format($prixTTC, 2, ',', ' ') . '€'; ?></p>
                        <p class="prixUnite"> <?php echo $product['pricing']['tax_rate']; ?> </p>
                    </div>
                    <button>Acheter</button>
                </div>
            </div>
        <?php endforeach; ?>
    </main>
</body>

</html>