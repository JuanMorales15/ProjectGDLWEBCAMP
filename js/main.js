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


        if(btnCalculate){
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
        name.addEventListener('blur', emptyFields);
        lastName.addEventListener('blur', emptyFields);
        email.addEventListener('blur', emptyFields);
        email.addEventListener('blur', validateEmail);

        function emptyFields(){
            let padre = this.parentElement;
            let error = padre.querySelector('div.error');
            if(this.value == ''){    
                error.style.display="block";
                error.innerHTML="<p>* Campo obligatorio</p>";
                this.style.border= "1px solid red";
                this.focus(); 
            }else{
                this.style.border= "1px solid var(--border-price)";
                error.style.display="none";
            }            
        }          

        function validateEmail(){
            let exprecion = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
            let padre = this.parentElement;
            let errordiv = padre.querySelector('div.error');
            if(this.value == ''){
                errordiv.style.display="block";
                errordiv.innerHTML="<p>* Campo obligatorio</p>";
                this.focus(); 
            }else if(!exprecion.test(email.value)){  
                console.log(exprecion.test(email.value));
                errordiv.style.display="block";
                errordiv.innerHTML="<p>* El correo no es valido</p>";
                this.focus(); 
            }else{
                errordiv.style.display="none";
            }   
        }
    }
    });// DOM CONTENT LOADED
})();

$(function(){
    'use strict';
    
    //Page Indicator
    $('body.calendar nav.nav-menu a:contains(calendario)').addClass('link');
    $('body.guests nav.nav-menu a:contains(invitados)').addClass('link');
    $('body.registry nav.nav-menu a:contains(reservaciones)').addClass('activeLast');

    // Fixed Menu
    let ventanaHeader = $('header').innerHeight(),
        menu = $('.bar');
    $(window).scroll(function(){ 
        if($(window).scrollTop() > ventanaHeader){
            $('.bar').addClass('fixed');
            $('body').css({'margin-top': menu.innerHeight()+'px'});
        } else {
            $('.bar').removeClass('fixed');
            $('body').css({'margin-top': '0px'});
        }
    });

    //Hamburger Menu 
    $('div.mobile-menu').click(function (e) { 
        e.preventDefault();  
        $('nav.nav-menu').slideToggle('slow');//show or hide matching items with a sliding motion.
        // $('nav.nav-menu').css({'display': 'flex'});
    });

    //Section Menu-Video
    $('div.container-description div:first').show();
    $('nav.menu-video a:first').addClass('active');
    $('nav.menu-video a').on('click', showDescription);

    //Section Colorbox
    $('a.guest-id').colorbox({inline: true, width: '40%'});

    function showDescription(e){
        e.preventDefault();
        //hidden with class 
        $('div.container-description .hide').fadeOut(1000);

        //hidden with children
        // $($('div.container-description').children()).fadeOut(500);
        $('nav.menu-video a').removeClass('active');
        let link = $(this).attr('href');
        $(this).addClass('active');
        $(link).fadeIn(1000);
    }

    //Section summary - library use Waypoints jquery
    var waypoints = $('.container-summary').waypoint({
        handler: function(direction) {
            //Animate number  - library use jquery.animateNumber
            $('div.container-summary div.content-summary:nth-child(1) p.number').animateNumber({ number: 6 },1200);
            $('div.container-summary div.content-summary:nth-child(2) p.number').animateNumber({ number: 15 },1200);
            $('div.container-summary div.content-summary:nth-child(3) p.number').animateNumber({ number: 3 },1500);
            $('div.container-summary div.content-summary:nth-child(4) p.number').animateNumber({ number: 9 },1500);
        },
        offset:'55%'
      })

    //Countdown  - library use jquery.countdown
    $('div.container-timer').countdown('2021/07/12 10:00:00', function(event) {
        $('div.content-timer:nth-child(1) p.number').html(event.strftime('%D'));
        $('div.content-timer:nth-child(2) p.number').html(event.strftime('%H'));
        $('div.content-timer:nth-child(3) p.number').html(event.strftime('%M'));
        $('div.content-timer:nth-child(4) p.number').html(event.strftime('%S'));
      });
      
    return false;

});