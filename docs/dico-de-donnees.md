# Dictionnaire de données

## Livres (`book`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la fiche du livre|
|title|VARCHAR(128)|NOT NULL|Le titre du livre|
|author|entity|NOT NULL|L'auteur (autre entité) du livre|
|picture|VARCHAR(128)|NULL|L'URL de l'image de la couverture du livre|
|editor|VARCHAR(64)|NULL|L'éditeur du livre|
|published_in|INT(4)|NULL|L'année de publication du livre|
|type|entity|NOT NULL|Le genre (autre entité) du livre|
|rate|entity|NOT NULL, DEFAULT 0|La note donnée au livre (autre entité), de 1 à 5|
|summary|texte court|NOT NULL|Le résumé du livre|
|review|texte long|NOT NULL|L'avis sur le livre|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création de la revue du livre|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour de la revue|

## Auteur (`author`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de l'auteur|
|surname|VARCHAR(64)|NOT NULL|Le nom de l'auteur|
|firstname|VARCHAR(64)|NOT NULL|Le prénom de l'auteur|


## Note (`rate`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant de la note|
|name|VARCHAR(64)|NOT NULL|Le nom de la note|
|picture|VARCHAR(128)|NULL|L'URL de l'image de la note|


## Genre du livre (`type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(64)|NOT NULL|Le nom du genre de livre|
