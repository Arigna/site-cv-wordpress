// 1) Insérer la carte :
function retrait() {

	// Variables globales :
	var titre = document.querySelector('h3');
	var message = document.querySelector('p');
	var carteBleue = document.querySelector('#cb');
	var billets = document.querySelector('#billets');
	var ticket = document.querySelector('#ticket');

	// 2) Taper le code :
	message.innerHTML="<p>Veuillez taper votre code</p><form method='get'><input type='text' name='code' placeholder='Code' id='codeCarte'><input type='button' name='ok' value='ok' id='ok'></form><p>à l'abri des regards indiscrets</p>";
	var codeCarte = document.querySelector('#codeCarte');
	var confirm = document.querySelector('#ok');
	confirm.addEventListener('click',function(){
		//console.log(codeCarte.value);
		if (codeCarte.value !== "0000") { // Vérification du code
			//console.log('Code erroné !!!');
			var alertParagraph = document.querySelector('p:nth-child(3)');
			titre.textContent="Warning !";
			titre.classList.add('warning');
			alertParagraph.textContent="Code erroné, veuillez réessayer";
			alertParagraph.classList.add('warning');
		} else {
			//console.log('Code OK !');
			titre.textContent="Bienvenue";
			titre.classList.remove('warning');
			message.innerHTML="<h4>Que voulez-vous faire ?</h4><button id='retrait'>Retrait</button><button id='restit'>Restitution carte</button>";
			var retrait = document.querySelector('#retrait');
			var restitution = document.querySelector('#restit');
			// Choix : restitution carte
			restitution.addEventListener('click', function(){
				message.innerHTML="<h4>Etes-vous sûr ?</h4><button id='oui'>Oui</button><button id='non'>Non</button>";
				var oui = document.querySelector('#oui');
				var non = document.querySelector('#non');
				oui.addEventListener('click', function(){
					titre.textContent="Au revoir";
					message.innerHTML="Et à bientôt !";
					carteBleue.classList.remove('anim-cb');
				});
				non.addEventListener('click', function(){
					// à définir
				});
			});
			// Choix : retrait
			retrait.addEventListener('click', function(){
				titre.innerHTML="";
				message.innerHTML="<h4>Saisissez un montant :</h4><input type='text' id='montant' placeholder='Montant'><input type='button' id='ok' value='ok'><p></p>";
				var montant = document.querySelector('#montant');
				var confirm = document.querySelector('#ok');
				var alertParagraph = document.querySelector('p:nth-child(4)');
				confirm.addEventListener('click', function(){
					//console.log(montant.value);
					if (montant.value !== "10" && montant.value !== "20" && montant.value !== "30" && montant.value !== "40" && montant.value !== "50" && montant.value !== "60" && montant.value !== "70" && montant.value !== "80" && montant.value !== "90" && montant.value !== "100") {
						alertParagraph.innerHTML="Somme disponible : 10, 20, 30, 40, 50, 60, 70, 80, 90 et 100 Euros";
						alertParagraph.classList.add('warning');
					} else if (montant.value == "10") {
						billets.classList.add('anim-billets10');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "20") {
						billets.classList.add('anim-billets20');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "30") {
						billets.classList.add('anim-billets30');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "40") {
						billets.classList.add('anim-billets40');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "50") {
						billets.classList.add('anim-billets50');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "60") {
						billets.classList.add('anim-billets60');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "70") {
						billets.classList.add('anim-billets70');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "80") {
						billets.classList.add('anim-billets80');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "90") {
						billets.classList.add('anim-billets90');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					} else if (montant.value == "100") {
						billets.classList.add('anim-billets100');
						alertParagraph.innerHTML="Veuillez récupérer vos billets";
					};
				});
				billets.addEventListener('click', function(){
					billets.style.display='none';
					titre.textContent="";
					message.textContent="Récupérez votre ticket";
					ticket.innerHTML="<p>Bonjour</p><p>Votre code : "+codeCarte.value+"</p><p>Vous avez retiré : "+montant.value+" Euros.</p>";
					ticket.classList.add('anim-ticket');
				});
				ticket.addEventListener('click', function(){
					this.style.display='none';
					titre.textContent="Au revoir";
					message.innerHTML="Et à bientôt !";
					carteBleue.classList.remove('anim-cb');
				});
			});
		};
	});

};


var carteBleue = document.querySelector('#cb');
carteBleue.onclick=function(){
	this.classList.add("anim-cb");
	retrait();
};


var titre = document.querySelector('h3');
	titre.textContent="Bonjour !";
var p = document.querySelector("p");
	p.textContent="Veuillez introduire votre carte pour effectuer un retrait";
