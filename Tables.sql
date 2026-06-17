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