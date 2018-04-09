function minhaFuncao(){
			console.log("Passou no primeiro teste");
			var valorCampo1 = document.getElementById("idCampo1").value;
			var valorCampo2 = document.getElementById("idCampo2").value;
			if(valorCampo1){
				document.getElementById("idCampo1").style.color = "blue";
				document.getElementById("idCampo1").style.backgroundColor = "white";
			}else{
				document.getElementById("idCampo1").style.backgroundColor = "red";
			}

			if(valorCampo2){
				document.getElementById("idCampo2").style.color = "blue";
				document.getElementById("idCampo2").style.backgroundColor = "white";
			}else{
				document.getElementById("idCampo2").style.backgroundColor = "red";
			}

			if(valorCampo1 && valorCampo2){
				document.getElementById("paragrafoParaLog").innerHTML = "DEU CERTO :)";
			}else{
				document.getElementById("paragrafoParaLog").innerHTML = "Não DEU CERTO :(";
			}
}