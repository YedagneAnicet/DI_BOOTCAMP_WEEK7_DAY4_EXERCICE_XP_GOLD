<?php
echo "En PHP, include et require sont deux instructions utilisées pour inclure du code à partir d'un autre fichier. La principale différence entre les deux est la façon dont ils gèrent les erreurs.

Lorsqu'une erreur se produit dans un fichier inclus avec include, PHP continuera à exécuter le script. Toutefois, un avertissement sera généré pour signaler que l'inclusion a échoué.

Avec require, si une erreur se produit lors de l'inclusion du fichier, PHP arrête immédiatement l'exécution du script et génère une erreur fatale. Cela peut être utile lorsque l'inclusion d'un fichier est absolument nécessaire pour le bon fonctionnement du script et que tout échec d'inclusion doit être immédiatement signalé.";