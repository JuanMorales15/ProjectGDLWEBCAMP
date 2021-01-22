(function(){
    'use strict';
    document.addEventListener('DOMContentLoaded', function(){
    //declaration of vriables
        //section user register    
        let name = document.querySelector('.name'),
            lastName = document.querySelector('.last-name'),
            email = document.querySelector('.email');
        //section packages
        let ticketDay = document.querySelector('.ticket-day'),
            ticketTwo = document.querySelector('.ticket-twodays'),
            ticketFull = document.querySelector('.full-ticket');
        //buttons
        let btnCalculate = document.getElementById('calculate'),
            btnPay = document.getElementById('pay');
        //section payments-extras
        let quantityShirts = document.querySelector('.number-shirts'),
            quantityLabels = document.querySelector('.number-labels'),
            present = document.getElementById('present'),
            divError = document.querySelector('.error'),
            divProductList = document.querySelector('.product-list');


        //Funcion para el evento de calcular
        btnCalculate.addEventListener('click',totalTickets);

        function totalTickets(e){
            e.preventDefault();
            if(present.value === ''){
                alert("Necesitas escojer un regalo");
                present.focus();
            }else{
                //SECCION DE CAMISAS===
                let quantityDay = Number(ticketDay.value),
                    quantityTwo = Number(ticketTwo.value),
                    quantityFull = Number(ticketFull.value);
                let totalTickets =  (quantityDay * 30) + (quantityTwo * 45) + (quantityFull* 50);


                //SECCION DE CAMISAS===
                let priceShirts = 10,
                    reducedPrice = priceShirts - (30 * 10 / 100),
                    totalShirts;

                let shirts = Number(quantityShirts.value);
                if(shirts>15){
                    totalShirts = shirts * reducedPrice;
                }else{
                    totalShirts = shirts * priceShirts;
                }


                //SECCION DE ETIQUETAS===
                let priceLabel = 2;

                let labels = Number(quantityLabels.value);
                let totalLabel = labels*priceLabel;

                //Seccion de resumen===
                let productListing = [];
                productListing.push([`Boletos día`,quantityDay],
                                    [`Boletos dos días`,quantityTwo],
                                    [`Boletos todos los días`,quantityFull],
                                    [`Camisas`,shirts],
                                    [`Etiquetas`,labels]);
                let filterProducts = productListing.filter(product => product[1]>0);
                
                let ul = document.createElement('ul'); 
                divProductList.innerHTML='';
                filterProducts.forEach(i => {   
                    let li = document.createElement("li");
                    li.innerHTML += `                            
                        ${i[0]}: <span>${i[1]}</span>
                    `;
                    ul.appendChild(li);           
                }); 
                divProductList.appendChild(ul);

                //Seccion Total===
                let divTotal = document.querySelector(".total"),
                    p = document.createElement('p');
                divTotal.innerHTML='';
                let finalPayment = document.createTextNode(`$ ${(totalTickets + totalShirts + totalLabel).toFixed(2)}`);
                p.appendChild(finalPayment);
                divTotal.appendChild(p);
            }
        }

        //Funcion para mostrar los talleres 
        ticketDay.addEventListener('blur',shoWorkshops);
        ticketTwo.addEventListener('blur',shoWorkshops);
        ticketFull.addEventListener('blur',shoWorkshops);

        function shoWorkshops(){
            let quantityDay = Number(ticketDay.value),
                quantityTwo = Number(ticketTwo.value),
                quantityFull = Number(ticketFull.value);

            let selectWorkshops = [];

            if (quantityDay>0) selectWorkshops.push('.friday');
            if (quantityTwo>0) selectWorkshops.push('.friday','.saturday');
            if (quantityFull>0) selectWorkshops.push('.friday','.saturday','.sunday');
            
            selectWorkshops.forEach(i=>{
                document.querySelector(i).style.display='block';
            });
        }

        //funcion para validar campos vacios
        name.addEventListener('blur',validar);
        lastName.addEventListener('blur',validar);
        email.addEventListener('blur',validar);

        function validar(){
            let padre = this.parentElement;
            let error = padre.querySelector('div.error');
            if(this.value == ''){    
                error.style.display="block";
                error.innerHTML="<p>* Campo obligatorio</p>";
                this.focus(); 
            }else{
                error.style.display="none";
            }            
        }          
    });// DOM CONTENT LOADED
})();