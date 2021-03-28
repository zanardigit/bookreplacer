let tbody = document.querySelector("tbody");
let template = document.querySelector('#temp1');


fetch ("js/libri.json")
.then( response => response.json() )
.then( data => {

console.log(data);
for( let i = 0; i < data.length; i++ ){

  let clone = template.content.cloneNode(true);

  var tr = clone.querySelector("tr");
  tr.id += (i+1);

  var td = clone.querySelectorAll("td");
  
  renderizzaImmagini( td[0], i, data[i].copertina );
  caricaStatoLibro( td[1] ,i, data[i].stato );
  caricaTitoloLibro( td[2], data[i].titolo )
  caricaAnnoLibro( td[3], data[i].anno )
  caricaAzioniPossibili( td[4], i, data[i].stato);

  tbody.appendChild(clone);

  }

} )

function renderizzaImmagini( td, i, copertina ){
  let inp = td.querySelectorAll("input");

  inp[0].id += (i+1)
  inp[0].setAttribute( "onClick", "appareScompare(" + (i+1) + ")" )

  inp[1].id += (i+1)
  inp[1].setAttribute( "onClick", "appareScompare(" + (i+1) + ")" )
  inp[1].src = copertina;
}

function caricaStatoLibro( td, i, stato ){
  let small = td.querySelector("small")
  small.id += (i+1);
  if( stato == "In sospeso" || stato == "In prestito" || stato == "Restituito" ){
    small.className = "badge badge-primary";
  } else{
      small.className = "badge badge-danger";
  }
  small.textContent = stato;
}

function caricaTitoloLibro( td, titolo ){
  td.textContent = titolo
}

function caricaAnnoLibro( td, anno ){
  td.textContent = anno
}

function caricaAzioniPossibili(td, i, stato){
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

}