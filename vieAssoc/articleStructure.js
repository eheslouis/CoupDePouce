
var HTMLarticleNew = '<div class="article" id="topArticles#"></div>';
var HTMLarticleList = '<li><a href="#%ref%">%data%</a></li>';
var HTMLarticleReference = '<a name="%data%"></a>';
var HTMLarticleTitre = '<div class="row"><div class="titre-articles col-md-12" id="titreArticles#"><h3>%data%</h3></div></div>';
var HTMLarticleDate = '<div class="row"><div class="date-articles col-md-12" id="dateArticles">%data%</div></div>';
var HTMLarticleDesc = '<div class="row"><div class="desc-articles col-md-12" id="descArticles">%data%</div></div>';
var HTMLarticleImgStructure = '<div class="images-articles" id="imagesArticles#"><br></div>'
var HTMLarticleImageRow = '<div class="row" id="imgArticles#"></div>';
var HTMLarticleImage = '<div class="col-md-%number% col-img"><img class="image-articles" src="%img%"><figcaption>%data%</figcaption></div>';


// var HTMLarticleImgTable = '<table id="imgArticles#"></table>';
// var HTMLarticleImage = '<td><img class="image-articles" src="%img%"><figcaption>%data%</figcaption></td>';
// var HTMLarticleImageRow = '<tr id="imgRow#"></tr>';


var display= function(){
	for (var j = 0; j < article.length; j++) {
		$("#articles").append(HTMLarticleNew.replace("#", j));
		$("#listArticles").append(HTMLarticleList.replace("%data%",article[j].titre).replace("%ref%",article[j].reference));
		$("#topArticles"+j).append(HTMLarticleReference.replace("%data%", article[j].reference));
		$("#topArticles"+j).append(HTMLarticleTitre.replace("#",j).replace("%data%", article[j].titre));
		$("#topArticles"+j).append(HTMLarticleDate.replace("%data%",article[j].date));
		$("#topArticles"+j).append(HTMLarticleDesc.replace("%data%",article[j].description));
		$("#topArticles"+j).append(HTMLarticleImgStructure.replace("#", j*100));
		if (typeof article[j].images !== 'undefined')
		{
			// $("#imagesArticles"+(j*100)).append(HTMLarticleImageRow.replace("#", j*100));
			for (var i = 0; i < (article[j].images.length/2.0); i++) {
				$("#imagesArticles"+(j*100)).append(HTMLarticleImageRow.replace("#",i+j*100));
				// $("#imgRow"+(i+j*100)).append(HTMLarticleImage.replace("%img%", article[j].images[i*2].url).replace("%data%",article[j].images[i*2].caption));
				$("#imgArticles"+(i+j*100)).append(HTMLarticleImage.replace("%number%", 6).replace("%img%", article[j].images[i*2].url).replace("%data%",article[j].images[i*2].caption));
				if (article[j].images.length>(i*2+1))
				{
					// $("#imgRow"+(i+j*100)).append(HTMLarticleImage.replace("%img%", article[j].images[i*2+1].url).replace("%data%",article[j].images[i*2+1].caption));
					$("#imgArticles"+(i+j*100)).append(HTMLarticleImage.replace("%number%", 6).replace("%img%", article[j].images[i*2+1].url).replace("%data%",article[j].images[i*2+1].caption));
				}
			};
		}
		if (typeof article[j].images_group !== 'undefined')
		{
			for (var i = 0; i < article[j].images_group.length; i++) {
				// $("#imagesArticles"+(j*100)).append(HTMLarticleImgTable.replace("#", j*100+i));
				// $("#imgArticles"+(j*100+i)).append(HTMLarticleImageRow.replace("#",i+j*100));
				$("#imagesArticles"+(j*100)).append(HTMLarticleImageRow.replace("#",i+j*100));
				var sizeColumn = 12;
				if (article[j].images_group[i].group.length == 2)
				{
					sizeColumn = 6;
				}
				else if (article[j].images_group[i].group.length == 3)
				{
					sizeColumn = 4;
				}
				else if (article[j].images_group[i].group.length == 4)
				{
					sizeColumn = 3;
				}
				for (var k = 0; k < article[j].images_group[i].group.length; k++) {
					$("#imgArticles"+(i+j*100)).append(HTMLarticleImage.replace("%number%", sizeColumn).replace("%img%", article[j].images_group[i].group[k].url).replace("%data%",article[j].images_group[i].group[k].caption));
				};
			};
		}
	};
	}

display();