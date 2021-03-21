fetch ("js/libri.json")
    .then( response => response.json() )
    .then( data => {

    let array = data;
    console.log(data);
    for( let i = 0; i < data.length; i++ ){
        let row = document.createElement("tr");
        row.id = "riga" + (i + 1);

        immagini(i, data , row);
        stato( i,data, row );
        titolo( i, data, row );
        anno( i, data, row );
        azione( data[i].stato, row, i);

    document.getElementById("tabellaPrenotazioni").childNodes[1].appendChild(row);
      }

} )

function immagini(i, libri, row){

    let td = document.createElement("td");
    let btn = document.createElement("input");
    btn.type = "button";
    btn.id = "pulsante" + (i+1);
    btn.setAttribute("onclick", ("appareScompare(" + (i+1) + ")"));
    btn.className = "btn btn-info";
    btn.style = "display: inline;";
    btn.value = "Copertina"
    td.appendChild(btn);

    let img = document.createElement("input");
    img.type = "image";
    img.id = "immagine" + (i+1);
    img.setAttribute("onclick", ("appareScompare(" + (i+1) + ")"));
    img.src = libri[i].copertina;
    img.style = "display: none;";
    td.appendChild(img);
    row.appendChild(td);

}

function stato(i, libri, row){

    let td = document.createElement("td");
    let small = document.createElement("small");
    small.id = "insospeso" + (i+1);
    if( libri[i].stato == "In sospeso" || libri[i].stato == "In prestito" || libri[i].stato == "Restituito" ){
        small.className = "badge badge-primary";
    } else{
        small.className = "badge badge-danger";
    }
    let stato = document.createTextNode( libri[i].stato );
    small.appendChild(stato);
    td.appendChild(small);
    row.appendChild(td);

}

function titolo(i, libri, row ){
    let cell3 = document.createElement("td");
        let cellText3 = document.createTextNode( libri[i].titolo );
        cell3.appendChild(cellText3);
        row.appendChild(cell3);
}

function anno(i, libri, row ){
    let td = document.createElement("td");
    let anno = document.createTextNode( libri[i].anno );
    td.appendChild(anno);
    row.appendChild(td);
}

function azione( stato, row, i ){

    let td = document.createElement("td");

    if( stato == "In sospeso" ){

        let btn = document.createElement("input");
        btn.type = "button";
        btn.className = "btn btn-danger";
        btn.id = "annulla" + (i+1);
        btn.setAttribute("onclick", ("insospesoAnnulla(" + (i+1) + ")"));
        btn.value = "ANNULLA"
        td.appendChild(btn);

        let btn2 = document.createElement("input");
        btn2.type = "button";
        btn2.className = "btn btn-primary";
        btn2.id = "riprenota" + (i+1);
        btn2.setAttribute("onclick", ("Riprenota(" + (i+1) + ")"));
        btn2.value = "RIPRENOTA";
        btn2.style = "display: none;";
        td.appendChild(btn2);

        let btn3 = document.createElement("input");
        btn3.type = "button";
        btn3.className = "btn btn-danger";
        btn3.id = "elimina" + (i+1);
        btn3.setAttribute("onclick", ("Elimina(" + (i+1) + ")"));
        btn3.value = "ELIMINA";
        btn3.style = "display: none;";
        td.appendChild(btn3);

    }

    else if( stato == "Respinto" || stato == "Annullato" ){

        let btn = document.createElement("input");
        btn.type = "button";
        btn.className = "btn btn-danger";
        btn.id = "annulla" + (i+1);
        btn.setAttribute("onclick", ("insospesoAnnulla(" + (i+1) + ")"));
        btn.value = "ANNULLA"
        btn.style = "display: none;";
        td.appendChild(btn);

        let btn2 = document.createElement("input");
        btn2.type = "button";
        btn2.className = "btn btn-primary";
        btn2.id = "riprenota" + (i+1);
        btn2.setAttribute("onclick", ("Riprenota(" + (i+1) + ")"));
        btn2.value = "PRENOTA";
        td.appendChild(btn2);

        let btn3 = document.createElement("input");
        btn3.type = "button";
        btn3.className = "btn btn-danger";
        btn3.id = "elimina" + (i+1);
        btn3.setAttribute("onclick", ("Elimina(" + (i+1) + ")"));
        btn3.value = "ElIMINA";
        td.appendChild(btn3);

    }

    else{
        let p = document.createElement("p");
        td.appendChild(p);
    }
            
    row.appendChild(td);
            
}