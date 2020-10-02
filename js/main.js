(function() {
    "use strict";

    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function() {
        var map = L.map('mapa').setView([-31.449021, -64.145007], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-31.449021, -64.145007]).addTo(map)
            .bindPopup('GDLWebCamp 2020 Leo Arevalo')
            .openPopup()
            .bindTooltip('Fotografia y Diseño')
            .openTooltip();





        //campos datos usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //campos pases

        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_dosdias = document.getElementById('pase_dosdias');

        //botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var lista_productos = document.getElementById('lista_productos');
        var suma = document.getElementById('suma-total');

        //extras

        var camisa = document.getElementById('camisa-evento');
        var etiqueta = document.getElementById('etiquetas');

        //eventos
        calcular.addEventListener('click', validar);
        pase_dia.addEventListener('blur', verificar);
        pase_dosdias.addEventListener('blur', verificar);
        pase_completo.addEventListener('blur', verificar);
        // pase_dia.addEventListener('change', verificarNew);
        // pase_dosdias.addEventListener('change', verificarNew);
        // pase_completo.addEventListener('change', verificarNew);


        function validar(e) {
            if (regalo.value === '') {
                alert('debe seleccionar un regalo');
                e.preventDefault();
            } else {
                validarCampos(nombre);
                validarCampos(apellido);
                validarCampos(email);
            }
        }

        function validarCampos(valor) {
            if (valor.value == '') {
                valor.focus();
                errorDiv.innerHTML = 'se debe llenar todo el formulario';
                errorDiv.setAttribute('class', 'error');

            } else {
                errorDiv.setAttribute('class', '');
                errorDiv.innerHTML = '';
                var paseDay = parseInt(pase_dia.value, 10) || 0;
                var paseTwo = parseInt(pase_dosdias.value, 10) || 0;
                var paseAll = parseInt(pase_completo.value, 10) || 0;
                var canCamisas = parseInt(camisa.value, 10) || 0;
                var cantEtiqueta = parseInt(etiqueta.value, 10) || 0;

                var totalPagar = (paseDay * 30) + (paseTwo * 45) + (paseAll * 50) + (canCamisas * 10 - ((canCamisas * 10) * 0.07)) + (cantEtiqueta * 2);

                var listProduct = [];
                if (paseDay >= 1) {
                    listProduct.push(paseDay + ' boletos Dia');

                }
                if (paseTwo >= 1) {
                    listProduct.push(paseTwo + ' boletos dos dias');
                }
                if (paseAll >= 1) {
                    listProduct.push(paseAll + ' boletos completo');
                }
                if (canCamisas > 0) {
                    listProduct.push(canCamisas + ' camisas');
                }

                if (cantEtiqueta > 0) {
                    listProduct.push(cantEtiqueta + ' Etiquetas');
                }

                lista_productos.innerHTML = '';
                for (var i = 0; i < listProduct.length; i++) {
                    lista_productos.innerHTML += listProduct[i] + '<br>';
                }
                suma.innerHTML = '$' + totalPagar;
            }


        }


        function verificar() {
            var diasElegidos = [];

            if (pase_dia.value > 0) {
                diasElegidos.push = [1];
                console.log(diasElegidos);

            }



            if (pase_dosdias.value > 0) {
                diasElegidos.push = [1, 2];
                console.log(diasElegidos)
            }
            if (pase_completo.value > 0) {
                diasElegidos.push = [1, 2, 3];
                console.log(diasElegidos)
            }

            if (diasElegidos.length == 1) {
                if (diasElegidos[0] == 1) {
                    document.getElementById('viernes').style.display = 'block';
                    document.getElementById('sabado').style.display = 'none';
                    document.getElementById('domingo').style.display = 'none';
                }

                if (diasElegidos[0] == 2) {
                    document.getElementById('viernes').style.display = 'block';
                    document.getElementById('sabado').style.display = 'block';
                    document.getElementById('domingo').style.display = 'none';
                } else {
                    document.getElementById('viernes').style.display = 'block';
                    document.getElementById('sabado').style.display = 'block';
                    document.getElementById('domingo').style.display = 'block';

                }
            }



        }




        /*
        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarMail);


        


        function validarCampos() {
            if (this.value == '') {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'este campo es obligatorio';
                this.style.border = '1px solid red';
            } else {
                if (this.value.length > 25) {
                    errorDiv.style.display = 'block';
                    errorDiv.innerHTML = 'este campo supera los 25 caracteres';
                    this.style.border = '1px solid green';
                } else {
                    errorDiv.style.display = 'none';
                    this.style.border = '1px solid #cccc';
                }
            }


        }

        function validarMail() {
            if (this.value.indexOf("@") > -1) {
                errorDiv.style.display = 'none';
                this.style.border = '1px solid #cccc';
            } else {
                errorDiv.style.display = 'block';
                errorDiv.innerHTML = 'este campo es incorrecto';
                this.style.border = '1px solid red';
            }
        }


        function calcularMontos(event) {
            event.preventDefault();
            if (regalo.value == '') {
                alert('debe seleccionar un regalo');
                regalo.focus(); //ubica el cursos en regalo
            } else {
                var boletoDia = parseInt(pase_dia.value, 10) || 0;
                var boleto2Dias = parseInt(pase_dosdias.value, 10) || 0;
                var boletoCompleto = parseInt(pase_completo.value, 10) || 0;
                var canCamisas = parseInt(camisa.value, 10) || 0;
                var cantEtiqueta = parseInt(etiqueta.value, 10) || 0;



                var totalPagar = (boletoDia * 30) + (boleto2Dias * 45) + (boletoCompleto * 50) + (canCamisas * 10 - (canCamisas * 10 * 0.07)) + (cantEtiqueta * 2);
                console.log(totalPagar);

                var listadoProductos = [];

                if (boletoDia >= 1) {
                    listadoProductos.push(boletoDia + ' pase dia');
                }
                if (boleto2Dias >= 1) {

                    listadoProductos.push(boleto2Dias + ' pase 2 dias');
                }
                if (boletoCompleto >= 1) {
                    listadoProductos.push(boletoCompleto + ' pases completos');
                }
                if (canCamisas >= 1) {
                    listadoProductos.push(canCamisas + ' Camisas');
                }
                if (cantEtiqueta >= 1) {
                    listadoProductos.push(cantEtiqueta + ' Etiquetas');
                }

                console.log(listadoProductos);

                lista_productos.innerHTML = '';
                for (var i = 0; i < listadoProductos.length; i++) {
                    lista_productos.innerHTML += listadoProductos[i] + ('<br/>');
                }
                suma.innerHTML = '$ ' + totalPagar.toFixed(2); //nos regresa dos digitos


            }


        }

        function mostrarDias() {
            var boletoDia = parseInt(pase_dia.value, 10) || 0;
            var boleto2Dias = parseInt(pase_dosdias.value, 10) || 0;
            var boletoCompleto = parseInt(pase_completo.value, 10) || 0;

            var diasElegidos = [];
            if (boletoDia > 0) {
                diasElegidos.push('viernes');

            }
            if (boleto2Dias > 0) {
                diasElegidos.push('viernes', 'sabado');

            }
            if (boletoCompleto > 0) {
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for (var i = 0; i < diasElegidos.length; i++) {
                document.getElementById(diasElegidos[i]).style.display = 'block';
                console.log(diasElegidos);
                if (boletoDia = 0) {
                    document.getElementById('viernes').style.display = 'none';

                }

            }
        }
*/
    });


})();
//Programa conferenecias
$(function() {
    $('.programa-evento .info-curso:first ').show();
    $('.menuPrograma a:first').addClass('activo');
    $('.menuPrograma a').on('click', muestra);

    function muestra() {
        $('.menuPrograma a').removeClass('activo');
        $(this).addClass('activo');
        var enlaces = $(this).attr('href');
        $('.ocultar').hide();
        $(enlaces).fadeIn(200);

        return false;

    }
    //lettering
    $('.nomSitio').lettering();

    //menu burger
    $('.menu-movil').on('click', function() {
        $('.navegacion-principal').slideToggle()

    })

    //menu fijo
    var windowHeight = $(window).height(); //obtenemos la altura de la ventana
    var barraAltura = $('.barra').innerHeight();
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > windowHeight) {
            $('.barra').addClass('fixed');
            $('body').css({ 'margin-top': barraAltura + 'px' });
        } else {
            $('.barra').removeClass('fixed');
            $('body').css({ 'margin-top': '0px' });
        }
    });


    //animaciones para numeros
    $('.resumen-evento li:nth-child(1) p').animateNumber({ number: 6 }, 1200); //segundos 1,2
    $('.resumen-evento li:nth-child(2) p').animateNumber({ number: 15 }, 1200); //segundos 1,2
    $('.resumen-evento li:nth-child(3) p').animateNumber({ number: 3 }, 1500); //segundos 1,2
    $('.resumen-evento li:nth-child(4) p').animateNumber({ number: 9 }, 1500); //segundos 1,2

    //cuenta regresiva
    $('.cuenta-regresiva').countdown('2020/06/03 09:00:00', function(event) {
        $('#dias').html(event.strftime('%D'));
        $('#horas').html(event.strftime('%H'));
        $('#minutos').html(event.strftime('%M'));
        $('#segundos').html(event.strftime('%S'));
    });










})