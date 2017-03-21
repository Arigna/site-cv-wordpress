/*
	Algo :

Variables :


1) Insérer la carte
	2) Taper le code
		Si (code est != de 0000) {
			- Afficher message d'erreur
		} Sinon {
			- Afficher "Retrait ou Annulation"
			Si (annulation) {
				- Afficher message de confirmation
				- Ressortir la carte
			} Sinon {
				- Proposer un retait :
					Si (montant!= 10,20,30,40,50,...) {
						Afficher message d'erreur
					} Sinon si (montant==100) {
						Sortir billet de 100
					} Sinon si (montant==90) {
						Sortir billet de 50+20+20
					} Sinon si (montant==80) {
						Sortir billet de 50+20+10
					} ...etc...
					Sinon {
						Sortir billet de 10
					};
				Boucle (i=0, i<...., i++) {
					Si (utilisateur no clique sur billet){
						Afficher message
					} Sinon {
						Faire disparaitre billet
						Afficher message
						Sortir ticket
						Sortir CB
					};
				};
			};
		};
*/