CREATE TABLE produits(
    id int auto_increment primary key,
    designation varchar(100),
    prix_uniter decimal ,
    quantite_stock int default 0
)

CREATE TABLE caisse(
    id int auto_increment primary key,
    numero_caisse varchar(50)
)
CREATE TABLE achat(
    id int auto_increment primary key,
    id_produit int,
    foreign key (id_produit) references produits(id),
    id_caisse int,
    foreign key (id_caisse) references caisse(id),
    quantite int,
    date_achat datetime default current_timestamp
)
CREATE TABLE users(
    id int auto_increment primary key,
    nom varchar(50),
    prenom varchar(50),
    email varchar(100) unique,
    mot_de_passe varchar(255),
    id_role int,
    foreign key (id_role) references role(id)
)
CREATE TABLE role(
    id int auto_increment primary key,
    nom_role varchar(50) unique
)