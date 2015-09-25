#### Digitas Action Bundle

L'actionFluent est une interface fluide qui permet d'effectuer des actions de :

- copie
- création de fichier texte
- création de fichier json
- ...

Il permet egalement de définir vos propre actions qui doivent implémenter l'interface *ActionInterface*.

Cette interface contient deux méthodes obligatoire :

- Perform (est appeler quand l'action doit être executer)
- Describe (doit retourner une chaine qui décrit l'action afin de faciliter le développement de l'archive grace au mode débuggage)