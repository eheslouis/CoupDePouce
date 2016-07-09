var HTMLImageActive = '<div class="item active"><img src="%data%" alt="image%num%"></div>';
var HTMLImage = '<div class="item"><img src="%data%" alt="image%num%"></div>';
var HTMLThumb = '<div data-target="#carousel" data-slide-to="%num%" class="thumb"><img src="%data%"></div>';
var HTMLnewThumb = '</div> <div class="item" id="listThumb%num%">';

var	display= function(galerieFolder){
	var allFiles =	getAllFilesFromFolder(galerieFolder.dossierImage);
}


var getAllFilesFromFolder = function(dir) {
    var listFile = {};
    $.ajax({
        //This will retrieve the contents of the folder if the folder is configured as 'browsable'
        url: dir,
        success: function (data) {
            var imgNum = 0;
            var thumbNum = 0;
           //List all png or jpg or gif file names in the page
           $(data).find('a:contains(".jpg"), a:contains(".png"), a:contains(".gif"), a:contains(".jpeg"), a:contains(".JPG")').each(function () {
               var filename = dir + "/" + this.text.replace(" ","");
               if (imgNum==0)
               {
                    $("#listImages").append(HTMLImageActive.replace("%data%",filename).replace("%num%",imgNum));
               }
               else
               {
                    $("#listImages").append(HTMLImage.replace("%data%",filename).replace("%num%",imgNum));
               }

               if (imgNum%8==0 && imgNum>0)
               {
                    thumbNum = thumbNum+1;
                    $("#listThumb").append(HTMLnewThumb.replace("%num%", thumbNum));
               }
               $("#listThumb"+thumbNum).append(HTMLThumb.replace("%data%",filename).replace("%num%",imgNum));

               imgNum=imgNum+1;
           });
         }
      });
};