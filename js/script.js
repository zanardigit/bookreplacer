let cambiaSfondo=0;
function cambiamento(i){
    if(cambiaSfondo==0){
        cambiaSfondo=1;
        document.getElementById("bottone" + i).style.background = "#dcdcdc";
    }else{
        cambiaSfondo=0;
        document.getElementById("bottone" + i).style.background = "#00a000";
    }
}



let mostraCopertina=false;
let mostraPulsante=true;
function appareScompare(j){
    if(mostraCopertina==false){
        mostraCopertina=true;
        mostraPulsante=false;
        document.getElementById("pulsante" + j).style.display = "none";
        document.getElementById("immagine" + j).style.display = "inline";
    }else{
        mostraCopertina=false;
        mostraPulsante=true;
        document.getElementById("immagine" + j).style.display = "none";
        document.getElementById("pulsante" + j).style.display = "inline";
    }
}



function insospesoAnnulla(z){
    document.getElementById("annulla" + z).style.display = "none";
    document.getElementById("riprenota" + z).style.display = "inline";
    document.getElementById("elimina" + z).style.display = "inline";
    document.getElementById("insospeso" + z).style.display = "inline";
    document.getElementById("insospeso" + z).style.background = "#8B0000";
    document.getElementById("insospeso" + z).textContent = "Annullato";
}
function Riprenota(z){
    document.getElementById("riprenota" + z).style.display = "none";
    document.getElementById("elimina" + z).style.display = "none";
    document.getElementById("insospeso" + z).style.display = "inline";
    document.getElementById("insospeso" + z).style.background = "#4169E1";
    document.getElementById("insospeso" + z).textContent = "in sospeso";
    document.getElementById("annulla" + z).style.display = "inline";
}
function Elimina(z){
    document.getElementById("riga" + z).style.display = "none";
}