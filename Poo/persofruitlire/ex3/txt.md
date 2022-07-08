1) Créez une classe Compte modélisant un compte en banque. La classe possède deux attributs somme et taux 
correspondant à la somme placée sur le compte et au taux d'intérêt. Ces deux attributs doivent 
être affectés par le constructeur.

2)Ajoutez une méthode affiche() qui affiche la somme et le taux 

5) Ajoutez une méthode interets() qui calcule les intérêts perçus en un an 
et les ajoute à la somme placée. Pour rappel les intérets se calculent 
avec la formule interets = taux x somme / 100

mon_compte = Compte(5000, 10)
mon_compte.affiche()
mon_compte.depot(5000)
mon_compte.affiche()
mon_compte.retrait(4000)
mon_compte.affiche()