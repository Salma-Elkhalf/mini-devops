USE devops_exam;

CREATE TABLE IF NOT EXISTS categorie (
id_categorie INT AUTO_INCREMENT PRIMARY KEY,
nom_categorie VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS produit (
id_produit INT AUTO_INCREMENT PRIMARY KEY,
nom_produit VARCHAR(100),
prix DECIMAL(10,2),
quantite INT,
id_categorie INT,
FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
);

INSERT INTO categorie VALUES
(1,'Informatique'),
(2,'Bureautique'),
(3,'Réseau');

INSERT INTO produit (nom_produit, prix, quantite, id_categorie) VALUES
('Clavier',120,10,1),
('Souris',80,15,1),
('Imprimante',950,3,2);
