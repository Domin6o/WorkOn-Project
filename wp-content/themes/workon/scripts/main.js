function doAnimate(separetor) {
    var htmlElements = $(".do-animated");
    
    htmlElements.each(function(index) {
        var elementPos = $(this).offset().top;
        var scrollPos = $(window).scrollTop() + $(window).height();
        
        if (elementPos < scrollPos) {
            var htmlClass = $(this).attr("class");
            var htmlClasses = htmlClass.split(" ");

            var doClasses = htmlClasses.filter(function(element) {
                return element.search("do-") != -1;
            });
            
            doClasses.forEach(element => {
                $(this).removeClass(element);
                var animateClass = element.substr(separetor.length);
                $(this).addClass(animateClass);
                // console.log($(this).prop("tagName") + " had been taken " + element + " and added " + animateClass);
            });
        }
    });
}

$(document).ready(function() {
    var separator = "do-"

    doAnimate(separator);

    $(window).scroll(function() {
        doAnimate(separator);
    });
});