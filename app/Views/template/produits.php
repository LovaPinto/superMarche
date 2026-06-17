<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Produits</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif
        }

        body {
            background: #f4f6f9;
            color: #333
        }

        .navbar {
            background: #1e3a8a;
            color: white;
            padding: 18px 50px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-weight: bold
        }

        .container {
            max-width: 1100px;
            margin: 35px auto
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, .08)
        }

        h1 {
            color: #1e3a8a;
            margin-bottom: 20px
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px
        }

        button {
            padding: 12px 18px;
            border: none;
            border-radius: 10px;
            color: white;
            font-weight: bold;
            cursor: pointer
        }

        .btn-blue {
            background: #2563eb
        }

        .btn-green {
            background: #16a34a
        }

        .btn-red {
            background: #dc2626
        }

        table {
            width: 100%;
            border-collapse: collapse
        }

        th {
            background: #e5e7eb;
            padding: 14px;
            text-align: left
        }

        td {
            padding: 14px;
            border-bottom: 1px solid #e5e7eb
        }

        .stock {
            background: #dcfce7;
            color: #166534;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: bold
        }
    </style>
</head>

<body>

    <div class="navbar">
        <h2>🛒 Caisse Supermarché</h2>
        <div class="menu">
            <a href="achat.html">Nouvelle vente</a>
            <a href="produits.html">Produits</a>
            <a href="historique.html">Historique</a>
        </div>
    </div>

    <div class="container">
        <div class="card">

            <div class="top">
                <h1>Gestion des produits</h1>
                <button class="btn-blue" style="text-align: center;">+ Ajouter produit</button>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>Désignation</th>
                        <th>Prix</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (isset($produits) && empty($produits)): ?>
                        <tr>
                            <td colspan="4">Aucun produit trouvé.</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($produits as $produit): ?>
                            <tr>
                                <td><?= esc($produit['designation']) ?></td>
                                <td><?= esc($produit['prix_uniter']) ?> Ar</td>
                                <td>
                                    <span class="stock">
                                        <?= esc($produit['quantite_stock']) ?>
                                    </span>
                                </td>
                                <td>
                                    <button class="btn-green">Modifier</button>
                                    <button class="btn-red">Supprimer</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>

</body>

</html>