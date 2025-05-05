# Atelier pratique "TP Ecommerce"

#### Langages travaillés : HTML/CSS/PHP

## Étapes de réalisation

1. Reproduire le lien Excalidraw disponible à l'adresse ci-dessous en l'intégrant au format HTML/CSS, laissez libre court à votre imagination sur le style, il faudra un fichier style.css pour gérer cela.
2. Copier le contenu créé dans le fichier `index.php`.
3. Inclure le fichier `products.inc.php` disponible au sein du dossier `/data` dans le fichier `index.php` pour l'utiliser afin de créer une boucle qui affichera l'intégralité des produits
4. Chaque produit devra alors présenter :
   - Le nom
   - La description
   - La catégorie
   - Le prix
   - La quantité
   - Le prix avec mesure (prix au kg, prix au L, ...)
   - Le stock : "En stock", "Stcok faible", ou "Rupture de stock" en fonction du stock du produit (65+, 0-65, ou 0)

### Lien de la maquette

https://excalidraw.com/#json=9IlVc2Ulhb11Ol5g58wPS,foTxoTE6FQF3IxhLISpO3w

### Bon à savoir

- Le PHP **peut s'inclure partout** dans du HTML
- Les images sont inclues en lien absolus dans le tableau **$products**
- La boucle **foreach paraît la plus adaptée** à la situation
