<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion - Caisse Supermarché</title>
<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:Arial,sans-serif}
body{height:100vh;background:linear-gradient(135deg,#1e3a8a,#2563eb);display:flex;justify-content:center;align-items:center}
.card{width:400px;background:white;padding:35px;border-radius:18px;box-shadow:0 15px 40px rgba(0,0,0,.25)}
.logo{text-align:center;font-size:45px;margin-bottom:10px}
h2{text-align:center;color:#1e3a8a;margin-bottom:25px}
label{font-weight:bold;color:#374151}
input{width:100%;padding:13px;margin:8px 0 18px;border:1px solid #d1d5db;border-radius:10px}
button{width:100%;padding:13px;border:none;border-radius:10px;background:#2563eb;color:white;font-weight:bold;cursor:pointer}
button:hover{background:#1e40af}
</style>
</head>
<body>

<div class="card">
    <div class="logo">🛒</div>
    <h2>Caisse Supermarché</h2>
    <?php if (session()->getFlashdata('error')): ?>
    <div style="
        background:#fee2e2;
        color:#b91c1c;
        padding:10px;
        border-radius:8px;
        margin-bottom:15px;
        text-align:center;
        font-weight:bold;
    ">
        <?= session()->getFlashdata('error') ?>
    </div>
<?php endif; ?>

    <form action="choix-caisse.html">
        <label>Nom d'utilisateur</label>
        <input type="text" placeholder="Ex : admin" name="nom">

        <label>Mot de passe</label>
        <input type="password" placeholder="Mot de passe" name="mot_de_passe">

        <button>Se connecter</button>
    </form>
</div>

</body>
</html>