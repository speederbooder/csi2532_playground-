# **csi2532 Project**


## **Introduction**  

Dans ce répertoire github nous allons présenter les résultats de notre projet de base de données pour le cours CSI2535 enseigner par Professeur Andrew Forward et ces TA: Lintian Wang, Kyle Quintal


## **Contributors**  

Ahmed Amine Yacoubi (8341706)  
Nathan Dauray (200007564)



## **Livrable #1**  

### _Models:_
Livrable #1 est en ligne dans le répertoire **Livrable1_ER_RM**  

Pour obtenir les figures suivantes nous avons utilisé les notions vues en class ainsi que le logiciel Keynote pour produire les modèles.  

![Livrable1](https://github.com/professor-forward/projet-yacoubi-dauray/blob/master/Livrable1_ER_RM/Livrable1_ER_RM.png)  



### _Code de creation de Table:_

Pour la creation de nos table nous avons utiliser un interpreteur en ligne et on execute le code suivant  

	CREATE TABLE Athletes (  
	id int,  
	name varchar(50),  
	gender varchar(6),  
	dob date,  
	PRIMARY KEY (id)  
	);  


### _Exemple de requêtes:_
	INSERT INTO Athletes (id, name, gender, dob)  
	VALUES  
	(1, 'Georges', 'M', '1975-12-01'),  
	(2, 'Sam', 'M', '1998-06-11'),  
	(3, 'Dean', 'M', '1996-07-24'),  
	(4, 'Jessica', 'F', '1999-09-09');  
![Livrable1](https://github.com/professor-forward/projet-yacoubi-dauray/blob/master/Livrable1_ER_RM/test%20table.png)
	
	SELECT *  
	FROM Athletes  
	WHERE gender = 'M';  
![Livrable1](https://github.com/professor-forward/projet-yacoubi-dauray/blob/master/Livrable1_ER_RM/Select%20Where.png)	 
	 
	UPDATE Athletes  
	SET gender = 'male'  
	WHERE gender = 'M';  
	 
![Livrable1](https://github.com/professor-forward/projet-yacoubi-dauray/blob/master/Livrable1_ER_RM/update.png)	 

	SELECT *  
	FROM Athletes  
	WHERE gender = 'male';  
	  
	DELETE  
	FROM Athletes  
	WHERE dob > '1997-01-01';  

![Livrable1](https://github.com/professor-forward/projet-yacoubi-dauray/blob/master/Livrable1_ER_RM/Delete.png)			  
				  
	UPDATE Athletes  
	SET gender = 'female'  
	WHERE gender = 'F';
![Livrable1](https://github.com/professor-forward/projet-yacoubi-dauray/blob/master/Livrable1_ER_RM/update%20F.png)	  

## **Note:**

Pour accéder aux liens des images utiliser clicker dessus.  
Le fichier **Livrable1.txt** contient la commande de création de la table ainsi que quelques modifications de valeurs.  
Le fichier **Livrable1.csv** est le contenu de la table.  
