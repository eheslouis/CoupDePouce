var project = {
    "name": "Blue Dragon",
    "image": "images/bluedragon.jpg",
    "description": "Aide alimentaire aux enfants et adolescents hébergés aux centres créés et gérés par Blue Dragon à Hanoi depuis 2007. Cette aide se compose essentiellement des frais pour l'achat d'un petit repas supplémentaire le soir.",
    "cout": "Le montant est réévalué au moins une fois chaque année.<br>- 3'700'000 VND par mois en 2011/2012.<br>- 7'400'000 VND par mois depuis mars 2013.",
    "partenaires": [
        {
            "partenaire": "Blue Dragon",
            "url": "http://www.bluedragon.org/"
        }
    ],
    "donateurs": [
        {
            "name": "Donateurs privés"
        }
    ],
    "anterieur": "- sept. 2008 : rénovation locaux et toit de l’école.<br>- juillet 2009 : aide des étudiants de « One Year Abroad » au défrichage des champs. <br>",
    "info": [
        {
            "name": "Visite de Blue Dragon en novembre 2012",
            "url": "archives/BlueDragon-visite-16nov2012.pdf"
        },
        {
            "name": "Visite de Blue Dragon en juin 2011",
            "url": "archives/BlueDragon-visite-03juin2011.pdf"
        },
        {
            "name": "streetkidsinvietnam.com",
            "url": "http://www.streetkidsinvietnam.com"
        }
    ],
	"display": function(){
		$("#projectName").append(HTMLprojectName.replace("%data%", project.name));
		$("#projectImage").append(HTMLprojectImage.replace("%data%",project.image));
		$("#projectDesc").append(HTMLprojectDescription.replace("%data%",project.description));
		$("#projectCout").append(HTMLprojectCout.replace("%data%", project.cout));

		$("#projectPartenaires").append(HTMLprojectPartenairesStart);
		for (var index in project.partenaires)
        {
            $("#projectPartenaires").append(HTMLprojectPartenaire.replace("%data%", project.partenaires[index].partenaire).replace("#",project.partenaires[index].url));
		}

		$("#projectDonateur").append(HTMLprojectDonStart);
		for (var index in project.donateurs)
        {
			$("#projectDonateur").append(HTMLprojectDonateur.replace("%data%", project.donateurs[index].name));
		}

		$("#projectInfo").append(HTMLprojectInfoStart);
		for (var index in project.info)
		{
			$("#projectInfo").append(HTMLprojectInfo.replace("%data%", project.info[index].name).replace("#", project.info[index].url));
		}
	}
}

project.display();