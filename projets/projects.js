var HTMLprojectName = '<h2>Projet : %data%<br></h2>';

var HTMLprojectImage = '<img class="project-image" src="%data%" >';
var HTMLprojectCaption = '<figcaption>%data%</figcaption>';

var HTMLprojectImgTable = '<table id="imgProject"></table>';
var HTMLprojectImageGroup = '<td><img class="image-project" src="%img%"><figcaption>%data%</figcaption></td>';
var HTMLprojectImageRow = '<tr id="imgRow#"></tr>';


var HTMLprojectDescription = '<h4>Description du projet:</h4><p>%data%</p>';

var HTMLprojectCout = '<h4>Coût et financement du projet:</h4><p>%data%</p>';

var HTMLprojectPartenairesStart = '<h4>Partenaires:</h4>';
var HTMLprojectPartenaire = '<p><a target="_blank" href="#"> - %data%</a></p>';
var HTMLprojectPartenaireNoURL = '<p>- %data%</p>';

var HTMLprojectDonStart = '<h4>Donateurs:</h4>';
var HTMLprojectDonateur = '<p>- %data%</p>';

var HTMLprojectAnterieur = '<h4>Projets antérieurs</h4><p>%data%</p>';

var HTMLprojectInfoStart = '<h4>Plus d\'informations:</h4>';
var HTMLprojectInfo = '<p>- <a href="#" target="_blank">%data%</a></p>';



var	display= function(project){
		$("#projectName").append(HTMLprojectName.replace("%data%", project.name));
        if (typeof project.image !== 'undefined')
        {
            $("#projectImage").append(HTMLprojectImage.replace("%data%",project.image));
        }
        if (typeof project.caption !== 'undefined')
        {
            $("#projectImage").append(HTMLprojectCaption.replace("%data%",project.caption));
        }
        if (typeof project.image_group !== 'undefined')
        {
            $("#projectImage").append(HTMLprojectImgTable);
            for (var i = 0; i < project.image_group.length; i++) {
                $("#projectImage").append(HTMLprojectImgTable);
                $("#imgProject").append(HTMLprojectImageRow.replace("#",i));
                for (var k = 0; k < project.image_group[i].group.length; k++) {
                    $("#imgRow"+(i)).append(HTMLprojectImageGroup.replace("%img%", project.image_group[i].group[k].url).replace("%data%",project.image_group[i].group[k].caption));
                };
            };
        }
		$("#projectDesc").append(HTMLprojectDescription.replace("%data%",project.description));
		$("#projectCout").append(HTMLprojectCout.replace("%data%", project.cout));

		$("#projectPartenaires").append(HTMLprojectPartenairesStart);
		for (var index in project.partenaires)
        {
        	if (typeof project.partenaires[index].url !== 'undefined')
        	{
				$("#projectPartenaires").append(HTMLprojectPartenaire.replace("%data%", project.partenaires[index].partenaire).replace("#",project.partenaires[index].url));
			}
			else
			{
				$("#projectPartenaires").append(HTMLprojectPartenaireNoURL.replace("%data%", project.partenaires[index].partenaire));
			}
		}

		if (typeof project.anterieur !== 'undefined')
		{
			$("#projectAnterieur").append(HTMLprojectAnterieur.replace("%data%", project.anterieur));
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
