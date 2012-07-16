
var delay = 5000;
var transition = 1000;
var slideshow = true;
var mIndex = 0;        
var projetCount = $(".projet").size();
function is_int(input){
    return typeof(input)=='number'&&parseInt(input)==input;
}
                        
function refreshIndexHover() {
    
    $("#projets-navigator li:contains("+(mIndex + 1)+")").css("text-shadow", "0px 0px 4px white");
                            
}

           
function show(index) {
    slideshow = false;
    mIndex = index; 
    $("#projets-navigator li").css("text-shadow", "");
    $("#projets-container").animate({
        top: (index * - 400) - (index == 0 ? -10:10)
    }, transition, refreshIndexHover

    ).animate(
    {
        top: (index * - 400)
    }, transition / 3, function() {
       
        slideshow = true;
    }
    );
    
    
}
                           
function showNext() {
                            
    if(!slideshow) {
                                
        return;
    }   
    
    var index = 0;                    
                               
    if(mIndex < projetCount - 1) {
        index = mIndex + 1; 
    }  
    
    show(index);
    
   
    
    
}
$("#projets-navigator li").click(
    function() {
                                
        if(! is_int(parseInt($(this).text()))) {
            // C'est un bouton d'action.
            return;   
        }
        var mIndex = parseInt($(this).text()) - 1;
        show(mIndex);
                                
    }
                            
    );  
                            
$("#projets-navigator-play").click(
    function() {
        slideshow = !slideshow;
        if(slideshow) {
            $("#projets-navigator-play").text("Stopper");
                                    
        } else {
            $("#projets-navigator-play").text("Jouer");
                                    
        }
                                
                                
    }
                            
    ); 
                            
                            
                           
                           
setInterval(showNext, delay);
                           
                         

