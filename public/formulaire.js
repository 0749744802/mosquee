(function(){
	let currentPage = 1;
	const prevBtn = document.querySelector(".form .footer .prev");
	const nextBtn = document.querySelector(".form .footer .next");
	function movePage(){
		prevBtn.disabled = false;
		nextBtn.disabled = false;
		if(currentPage === 1){
			prevBtn.disabled = true;
		} else if(currentPage === 4){
			nextBtn.disabled = true;
		}
		document.querySelector(".form .pagination .active").classList.remove("active");
		document.querySelectorAll(".form .pagination .number")[currentPage-1].classList.add("active");
		const stepNode = document.querySelector(".form .steps .step");
		const width = ((currentPage-1)*stepNode.offsetWidth*-1)+"px";
		stepNode.parentNode.style.marginLeft = width;
	}
	prevBtn.addEventListener("click",function(){
		currentPage -= 1;
		movePage();
	});
	nextBtn.addEventListener("click",function(){
		currentPage += 1;
		movePage();
	});
})();
$(document).ready(function(){     
    //Dès qu'on clique sur #b1, on applique hide() au titre
	
    $("#personne").click(function(){
        $(".h").hide();
    });
   
    
    //Dès qu'on clique sur #b1, on applique show() au titre
    $("#entreprise").click(function(){
        $(".h").show();
    });
});