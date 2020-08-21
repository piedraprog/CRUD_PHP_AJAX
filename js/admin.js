$(document).ready(function() {
    home();
});



function home() {
    $('#home').show();
    //SECCION DE REGISTRO DE ATLETA
    $('#registrogenatle').hide();

    //SECCION DE REGISTRO DE DATOS EXTRA
    $('#info-extra').hide();

    //SECCION DE CONSULTAS
    $('#consultaatl').hide();
    $('#infotodopais').hide();
    $('#infotododep').hide();

    //ESCONDER DETALLES DE ATLETA
    $('#detalle').hide();

    //ESCONDER FOOTER
    $('#site-footer').show();
}


//SECCION DE REGISTRO DE ATLETAS 
function atleta() {

    $('#home').hide();
    //SECCION DE REGISTRO DE ATLETA
    $('#registrogenatle').show();

    //SECCION DE REGISTRO DE DATOS EXTRA
    $('#info-extra').hide();

    //SECCION DE CONSULTAS
    $('#consultaatl').hide();
    $('#infotodopais').hide();
    $('#infotododep').hide();

    //ESCONDER DETALLES DE ATLETA
    $('#detalle').hide();

    //ESCONDER FOOTER
    $('#site-footer').hide();

    //METODO AJAX PARA EL REGISTRO DEL ATLETA

    $('#registroatleta').submit(e => {
        e.preventDefault();

        // todos los valores de los inputs son extraidos y guardados en una contante tipo json para asi pasarla pro el metodo post 
        const postData = {
            cedula: $('#atl_cedula').val(),
            nacionalidad: $('#atl_nacionalidad').val(),
            nombre: $('#atl_nombre').val(),
            apematerno: $('#atl_apemater').val(),
            apepater: $('#atl_apepater').val(),
            fenac: $('#atl_fenac').val(),
            telefono: $('#atl_telefono').val(),
            direccion: $('#atl_direcch').val(),
            codpais: $('#atl_pais').val(),
            lugnac: $('#atl_lugnac').val(),
            pais: $('#atl_pais').val(),
            estciv: $('#atl_estciv').val(),
            observacion: $('#atl_observacion').val(),
            actinac: $('#atl_actinac').val(),
            apodo: $('#atl_apodo').val()
        }


        console.log(postData);

        //esto se usa para verificar si esta obteniendo los datos es opcional
        //console.log(postData);

        //se especifica la ruta a donde se va a enviar los datos a traves de la url
        url = 'php/registro/registro_infogeneral.php'

        //funcion que por medio de la url me va a enviar los datos del formulario y va a obtener una respuesta que sera atrapada la variable respuesta
        $.post(url, postData, (respuesta) => {

            //la respuesta es el mensaje que se envia desde el documento .php a traves del echo
            console.log("si hay respuesta");
            console.log(respuesta);

            if (respuesta == "1") {

                $('#info1').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);


            } else {
                $('#info1').html(`<div class="row">
                <button class="btn btn-danger">Por favor introducir algo en los campos</button>
                
                </div>`);
            }
        })

        $('#rag').trigger('reset');


    })


    //METODO AJAX PARA EL REGISTRO DE LA FE DE VIDA

    $('#registrofe').submit(e => {

        e.preventDefault();
        console.log('si aqui ta');

        postData2 = {
            codfe: $('#fe_cod').val(),
            cedula: $('#fe_cedula').val(),
            nombreregci: $('#fe_nombre').val(),
            creci: $('#fe_cregci').val(),
            nrores: $('#fe_numres').val(),
            nroga: $('#fe_numgac').val(),
            fecfdv: $('#fe_fecfe').val(),
            fefecga: $('#fe_fecga').val(),
            direccatl: $('#fe_diratl').val(),
            parroquia: $('#fe_parroquia').val(),
            obser: $('#fe_obser').val()
        }


        console.log(postData2);

        url = 'php/registro/reg_fe.php'

        //funcion que por medio de la url me va a enviar los datos del formulario y va a obtener una respuesta que sera atrapada la variable respuesta
        $.post(url, postData2, (respuesta) => {

            //la respuesta es el mensaje que se envia desde el documento .php a traves del echo
            console.log("si hay respuesta");
            console.log(respuesta);

            if (respuesta == "1") {

                $('#info2').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info2').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else if (respuesta == "3") {

                $('#info2').html(`<div class="row">
                <h3 class="btn btn-warning">No hay ningun atleta registrado con esa cedula por favor registre el atleta</h3>
                
                </div>`);
            } else {

                $('#info2').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }
        })

        $('#rag').trigger('reset');

    })

    //METODO AJAX PARA EL REGISTRO DE DEPORTE DEL ATLETA

    $('#registrodepatl').ready(function() {

        //METODO PARA OBTENER VALORES DE LA BASE DE DATOS
        url = 'php/consultas/listar_deportes.php';
        let template = '';
        $.get(url, (respuesta) => {



            const datos = JSON.parse(respuesta);

            //console.log(datos);
            datos.forEach(datos => {

                template += `                   
                    <option value="${datos.codigo_deporte}">${datos.nombre_deporte}</option>
                    `
            });



            $('#lista_deportes').html(template);
        });







    })

    $('#registrodepatl').submit(e => {

        e.preventDefault();

        postData = {

            cedatldep: $('#cedatldep').val(),
            coddep: $('#lista_deportes').val()

        }

        console.log(postData);

        url = 'php/registro/registro_deporte_atl.php';

        $.post(url, postData, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info3').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info3').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else if (respuesta == "3") {

                $('#info3').html(`<div class="row">
                <h3 class="btn btn-warning">No hay ningun atleta registrado con esa cedula por favor registre el atleta</h3>
                
                </div>`);
            } else {

                $('#info3').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }
        })

    })

    //METODO AJAX PARA EL REGISTRO DE NIVEL DEPORTIVO

    $('#registroniveldep').submit(e => {

        e.preventDefault();

        //console.log("si");

        postData = {

            cedatldep: $('#cedatldep').val(),
            codnivdep: $('#cod_niveldep').val(),
            nivdepdesc: $('#nivdep_desc').val()

        }

        console.log(postData);

        url = 'php/registro/reg_niv_dep.php';

        $.post(url, postData, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info4').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info4').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else {

                $('#info4').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }

        })

    })

    //METODO AJAX PARA EL REGISTRO DE CAMPEONATOS 

    $('#registrocamp').submit(e => {

        e.preventDefault();

        postdata = {
            codcamp: $('#codcamp').val(),
            cedula: $('#cecamp').val(),
            fec_camp: $('#fecamp').val(),
            des_camp: $('#descamp').val()
        }

        console.log(postdata);

        url = 'php/registro/reg_campeonatoatl.php';

        $.post(url, postdata, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info5').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info5').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else {

                $('#info5').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }
        })

    });

    //METODO AJAX PARA EL REGISTRO DE ESTUDIOS REALIZADOS

    $('#registroestudios').submit(e => {
        e.preventDefault();

        postdata = {
            cedula: $('#cees').val(),
            cod_es: $('#escod').val(),
            des_es: $('#esdesc').val()

        }

        console.log(postdata);

        url = 'php/registro/reg_estudios_atl.php';

        $.post(url, postdata, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info6').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info6').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else {

                $('#info6').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }
        })





    })

    //METODO AJAX PARA EL REGISTRO DE CURSOS REALIZADOS

    $('#registrocursos').submit(e => {

        e.preventDefault();

        postdata = {
            cedula: $('#cedcur').val(),
            cod_cur: $('#codcur').val(),
            des_cur: $('#descur').val()

        }

        console.log(postdata);

        url = 'php/registro/reg_cur_atl.php';

        $.post(url, postdata, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info7').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info7').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else {

                $('#info7').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }
        })


    })

    //METODO AJAX PARA EL REGISTRO DE TRABAJOS REALIZADOS

    $('#registrotrabajos').submit(e => {
        e.preventDefault();

        postdata = {
            cedula: $('#cetra').val(),
            cod_tra: $('#codtra').val(),
            des_tra: $('#destra').val()

        }

        console.log(postdata);

        url = 'php/registro/reg_tra_atl.php';

        $.post(url, postdata, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info8').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info8').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else {

                $('#info8').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }
        })
    })

}

//SECCION DE REGISTRO DE DATA EXTRA 
function extradata() {
    $('#home').hide();
    //SECCION DE REGISTRO DE ATLETA
    $('#registrogenatle').hide();

    //SECCION DE REGISTRO DE DATOS EXTRA
    $('#info-extra').show();

    //SECCION DE CONSULTAS
    $('#consultaatl').hide();
    $('#infotodopais').hide();
    $('#infotododep').hide();

    //ESCONDER FOOTER
    $('#site-footer').hide();

    //ESCONDER DETALLES DE ATLETA
    $('#detalle').hide();


    //AJAX PARA EL REGISTRO DE LA INFORMACION DE DETALLE DE DEPORTE 

    $('#registrodeportes').submit(e => {
        e.preventDefault();

        console.log('si aqui ta');

        postData = {
            //clasificacion del deporte 
            codcalsidep: $('#codclasidep').val(),
            codtipdep: $('#codtipdep').val(),
            nomcladep: $('#nomcladep').val(),
            //tipo de deporte
            nomtipdep: $('#nomtipdep').val(),
            //deporte
            coddep: $('#coddep').val(),
            nomdep: $('#nomtipdep').val()

        }

        console.log(postData);

        url = 'php/registro/registro_cladeportes.php';

        $.post(url, postData, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info9').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info9').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else {

                $('#info9').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }

        })


    })

    //AJAX PARA EL REGISTRO DE LA INFORMACION DE DETALLE DE PAISES 

    $('#registropaises').submit(e => {

        e.preventDefault();

        console.log('si aqui ta');

        postData = {
            //informacion pais
            codpa: $('#codpa').val(),
            nompa: $('#nompa').val(),


        }

        console.log(postData);

        url = 'php/registro/reg_paises.php';

        $.post(url, postData, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info10').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info10').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else {

                $('#info10').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }

        })


    })

    //AJAX PARA EL REGISTRO DE LA INFORMACION DE CUIDADES

    $('#registrociudad').submit(e => {

        e.preventDefault();

        console.log('si aqui ta');

        postData = {
            //informacion CIUDAD
            codpa: $('#codcipa').val(),
            codciu: $('#codci').val(),
            nomciu: $('#nomci').val()


        }

        console.log(postData);

        url = 'php/registro/reg_paises.php';

        $.post(url, postData, (respuesta) => {

            console.log(respuesta);

            if (respuesta == "1") {

                $('#info11').html(`<div class="row">
                <h3 class="btn btn-success">Registro Creado con Exito</h3>
                
                </div>`);

            } else if (respuesta == "2") {

                $('#info11').html(`<div class="row">
                <h3 class="btn btn-danger">Problemas al crear el registro</h3>
                
                </div>`);
            } else {

                $('#info11').html(`<div class="row">
                <h3 class="btn btn-danger">por favor introducir algo en los campos</h3>
                
                </div>`);
            }

        })


    })

}


//FUNCION QUE ME TRAE LOS PAISES REGISTRADOS
function consulpai() {

    //METODO PARA OBTENER VALORES DE LA BASE DE DATOS
    url = 'php/consultas/listar_paises.php';
    let template = '';
    $.get(url, (respuesta) => {



        const datos = JSON.parse(respuesta);

        //console.log(datos);
        datos.forEach(datos => {

            template += `                   
                <option value="${datos.codigo_pais}">${datos.nombre_pais}</option>
                `
        });
        $('#codcipa').html(template);
        $('#atl_pais').html(template);

    });


}


//FUNCION DE CONSULTA DE LOS DATOS
function infoatl() {

    $('#home').hide();
    //SECCION DE REGISTRO DE ATLETA
    $('#registrogenatle').hide();

    //SECCION DE REGISTRO DE DATOS EXTRA
    $('#info-extra').hide();

    //SECCION DE CONSULTAS
    $('#consultaatl').show();
    $('#infotodopais').hide();
    $('#infotododep').hide();

    //ESCONDER FOOTER
    $('#site-footer').hide();

    //ESCONDER DETALLES DE ATLETA
    $('#detalle').hide();

    //metodo para traer toda la data de los atletas 

    url = 'php/consultas/consul_atletas.php';
    let template = '';
    $.get(url, (respuesta) => {



        const datos = JSON.parse(respuesta);

        //console.log(datos);
        datos.forEach(datos => {


            if (datos.actinac == "a" || datos.actinac == "A") {

                datos.actinac = "activo";
            } else {
                datos.actinac = "inactivo"
            }

            template += `                  
                    <tr>
                        <td><input type="hidden" id="idatl" value="${datos.cedula}">${datos.cedula}</td>
                        <td>${datos.nombre}</td>
                        <td>${datos.apematerno} ${datos.apepater}</td>
                        <td>${datos.actinac}</td>
                        <td>${datos.pais}</td>
                        <td><button class="delete-atl btn btn-danger">
                        eliminar
                       </button></td>
                        <td><button class="detalle-atl btn btn-info">
                        Detalles
                       </button></td>
                    </tr>
                `
        });
        $('#infoatletas').html(template);


    });





}


$(document).on('click', '.delete-atl', (e) => {

    //e.preventDefault();

    if (confirm('¿Quiere Eliminar el registro seleccionacido? al darle a si se borrara toda la informacion relacionado con el atleta')) {

        /*const element = $(this)[0].activeElement.parentElement.parentElement;
        const id = $(element).attr('taskId');*/

        const id = $('#idatl').val();
        //console.log(id);

        url = 'php/borrar/borrar_atl.php';

        $.post(url, { id }, (response) => {

            console.log(response);
            infoatl();

        });
    }
});

$(document).on('click', '.detalle-atl', (e) => {

    e.preventDefault();

    $('#detalle').show();
    $('#home').hide();
    //SECCION DE REGISTRO DE ATLETA
    $('#registrogenatle').hide();

    //SECCION DE REGISTRO DE DATOS EXTRA
    $('#info-extra').hide();

    //SECCION DE CONSULTAS
    $('#consultaatl').hide();
    $('#infotodopais').hide();
    $('#infotododep').hide();

    //ESCONDER FOOTER
    $('#site-footer').hide();

    const id = $('#idatl').val();

    //INFORMACION PERSONAL
    url1 = 'php/consultas/consul_atletas.php';

    $.post(url1, { id }, (response) => {

        //console.log(response);
        const datos = JSON.parse(response);

        template = '';
        template2 = '';
        //console.log(datos);
        datos.forEach(datos => {

            //console.log(datos);

            template2 = `${datos.nombre} ${datos.apepater} ${datos.apematerno} `;


            if (datos.actinac == "a" || datos.actinac == "A") {

                datos.actinac = "activo";
            } else {
                datos.actinac = "inactivo"
            }

            template += `<tr>
                        <th style="width:50% ">Nombre del atleta:</th>
                        <td>${datos.nombre}</td>
                        <th style="width:50% ">Cedula del atleta:</th>
                        <td>${datos.cedula}</td>
                    </tr>
                    <tr>
                        <th>Apellido Materno:</th>
                        <td>${datos.apematerno}</td>
                        <th>Apellido Paterno:</th>
                        <td>${datos.apepater}</td>
                    </tr>
                    <tr>
                        <th>Nacionalidad:</th>
                        <td>${datos.nacionalidad}</td>
                        <th>Fecha de nacimiento:</th>
                        <td>${datos.fenac}</td>
                    </tr>
                    <tr>
                        <th>Pais:</th>
                        <td>${datos.pais}</td>                        
                    </tr>
                    <tr>
                        <th>Apodo:</th>
                        <td>${datos.apodo}</td>
                        <th>Telefono:</th>
                        <td>${datos.telefono}</td>
                    </tr>
                    <tr>
                        <th>Direccion Habitacion:</th>
                        <td>${datos.direccion}</td>
                        <th>Lugar de nacimiento:</th>
                        <td>${datos.lugnac}</td>
                    </tr>
                    <tr>
                        <th>Observacion:</th>
                        <td>${datos.observacion}</td>
                        <th>Estado:</th>
                        <td>${datos.actinac}</td>
                    </tr>                  
                    
                `
        });

        $('#natl').html(template2);
        $('#infoperso').html(template);

    });


    //INFORMACION DE LA FE DE VIDA
    url2 = 'php/consultas/consul_featl.php';

    $.post(url2, { id }, (response2) => {

        //console.log(response2);
        const datos = JSON.parse(response2);


        template3 = '';
        //console.log(datos);
        datos.forEach(datos => {

            //console.log(datos);

            template3 += `<tr>
                        <th style="width:50% ">Codigo de la fe de vida:</th>
                        <td>${datos.cod_fe}</td>
                        <th style="width:50% ">Nombre en el registro civil:</th>
                        <td>${datos.nombre_reg}</td>
                        </tr>
                        <tr>
                            <th>Cedula Registro civil:</th>
                            <td>${datos.ced_regci}</td>
                            <th>Parroquia:</th>
                            <td>${datos.parroquia}</td>
                        </tr>
                        <tr>
                            <th>Numero de resolucion</th>
                            <td>${datos.resonro}</td>
                            <th>Numero de Gaceta:</th>
                            <td>${datos.gacenro}</td>
                        </tr>
                        <tr>
                            <th>Fecha de Gaceta:</th>
                            <td>${datos.fecga}</td>
                            <th>Fecha de Fé de Vida:</th>
                            <td>${datos.fecfe}</td>
                        </tr>
                        <tr>
                            <th>Direccion Atleta:</th>
                            <td>${datos.diratl}</td>
                            <th>Observacion:</th>
                            <td>${datos.obs}</td>
                        </tr>              
                    
                `
        });


        $('#infofe').html(template3);

    });

    //INFORMACION DE NIVEL DEPORTIVO
    url3 = 'php/consultas/consul_nivdep.php';

    $.post(url3, { id }, (response3) => {

        //console.log(response2);
        const datos = JSON.parse(response3);


        template4 = '';
        //console.log(datos);
        datos.forEach(datos => {

            //console.log(datos);

            template4 += `<tr>
                            <th style="width:50% ">Codigo de nivel deportivo:</th>
                            <td>${datos.codniv}</td>
                            <th style="width:50% ">Descripcion de nivel deportivo:</th>
                            <td>${datos.desniv}</td>
                        </tr>
                    
                    
                `
        });


        $('#infoniv').html(template4);

    });


    //INFORMACION DE DEPORTES 
    url4 = 'php/consultas/consul_depatl.php';

    $.post(url4, { id }, (response4) => {

        //console.log(response2);
        const datos = JSON.parse(response4);


        template4 = '';
        //console.log(datos);
        datos.forEach(datos => {

            //console.log(datos);

            template4 += `<tr>
                        <th style="width:50% ">deporte:</th>
                        <td>${datos.deporte}</td>
                        <th style="width:50% ">Tipo Deporte:</th>
                        <td>${datos.tipo_deporte}</td>
                        </tr>                   
                `
        });


        $('#infodepo').html(template4);

    });

    //INFORMACION DE CAMPEONATOS 
    url5 = 'php/consultas/consul_camp.php';

    $.post(url5, { id }, (response5) => {
        //console.log(response2);
        const datos = JSON.parse(response5);


        template5 = '';
        //console.log(datos);
        datos.forEach(datos => {

            //console.log(datos);

            template5 += `<tr>
                        <th style="width:25% ">Codigo:</th>
                        <td>${datos.cod_camp}</td>
                        <th >Año:</th>
                        <td>${datos.acamp}</td>
                        <th>Descripcion:</th>
                            <td>${datos.descamp}</td>
                        </tr>
                        
                    
                `
        });


        $('#infocampe').html(template5);
    });

    //INFORMACION DE CURSOS REALIZADOS
    url6 = 'php/consultas/consul_cur.php';

    $.post(url6, { id }, (response6) => {

        //console.log(response6);
        const datos = JSON.parse(response6);

        template6 = '';
        //console.log(datos);
        datos.forEach(datos => {

            //console.log(datos);

            template6 += `<tr>
                        <th style="width:50% ">Codigo del curso:</th>
                        <td>${datos.cocur}</td>
                        <th style="width:50% ">Descripcion del curso:</th>
                        <td>${datos.descur}</td>
                        </tr>                   
                `
        });


        $('#infocurso').html(template6);
    });

    //INFORMACION DE ESTUDIOS REALIZADOS
    url7 = 'php/consultas/consul_est.php';

    $.post(url7, { id }, (response7) => {

        //console.log(response2);
        const datos = JSON.parse(response7);


        template7 = '';
        //console.log(datos);
        datos.forEach(datos => {

            //console.log(datos);

            template7 += `<tr>
                        <th style="width:50% ">Codigo de estudio:</th>
                        <td>${datos.codes}</td>
                        <th style="width:10% ">descripcion de estudio:</th>
                        <td>${datos.deses}</td>
                        </tr>
                               
                    
                `
        });


        $('#infoest').html(template7);
    });

    //INFORMACION DE TRABAJOS REALIZADOS
    url8 = 'php/consultas/consul_tra.php';

    $.post(url8, { id }, (response8) => {

        //console.log(response2);
        const datos = JSON.parse(response8);

        template8 = '';
        //console.log(datos);
        datos.forEach(datos => {

            //console.log(datos);

            template8 += `<tr>
                        <th style="width:50% ">Codigo de Trabajo:</th>
                        <td>${datos.codtra}</td>
                        <th style="width:25% ">Descripcion de Trabajol:</th>
                        <td>${datos.destra}</td>
                        </tr>
                                                  
                `
        });


        $('#infotra').html(template8);

    });

})


//SECCION DE MOSTRAR LA INFORMACION DE LOS PAISES REGISTRADOS 

function infotodopais() {

    $('#home').hide();
    //SECCION DE REGISTRO DE ATLETA
    $('#registrogenatle').hide();

    //SECCION DE REGISTRO DE DATOS EXTRA
    $('#info-extra').hide();

    //SECCION DE CONSULTAS
    $('#consultaatl').hide();
    $('#infotodopais').show();
    $('#infotododep').hide();

    //detalle de los atletas 
    $('#detalle').hide();

    //ESCONDER FOOTER
    $('#site-footer').hide();

    url = 'php/consultas/consul_paises.php';
    let template = '';
    $.get(url, (respuesta) => {


        const datos = JSON.parse(respuesta);

        //console.log(datos);
        datos.forEach(datos => {


            template += `                  
                    <tr>
                        <td><input type="hidden" id="idapais" value="${datos.codigo_pais}">${datos.codigo_pais}</td>
                        <td>${datos.nombre_pais}</td>
                        <td><button class="delete-pais col-13 btn btn-danger" type="submit">Eliminar</button></td>
                    </tr>
                `
        });
        $('#infopaises').html(template);


    });
}


$(document).on('click', '.delete-pais', (e) => {

    //e.preventDefault();

    if (confirm('¿Quiere Eliminar el registro seleccionado? al darle a si se borrara toda la informacion relacionado con el atleta')) {


        const id = $('#idapais').val();
        //console.log(id);

        url = 'php/borrar/borrar_pais.php';

        $.post(url, { id }, (response) => {

            //console.log(response);
            infotodopais();

        });
    }
});

function infotododep() {

    $('#home').hide();
    //SECCION DE REGISTRO DE ATLETA
    $('#registrogenatle').hide();

    //SECCION DE REGISTRO DE DATOS EXTRA
    $('#info-extra').hide();

    //SECCION DE CONSULTAS
    $('#consultaatl').hide();
    $('#infotodopais').hide();
    $('#infotododep').show();

    //detalle de los atletas 
    $('#detalle').hide();

    //ESCONDER FOOTER
    $('#site-footer').hide();


    url = 'php/consultas/consul_deportes.php';
    let template = '';
    $.get(url, (respuesta) => {


        const datos = JSON.parse(respuesta);

        //console.log(datos);
        datos.forEach(datos => {


            template += `                  
                    <tr>
                        <td>${datos.cod_deporte}</td>
                        <td>${datos.nom_deport}</td>
                        <td>${datos.nom_tipo_deporte}</td>
                        <td>${datos.nom_clasi_deporte}</td>
                        <td><button class="col-13 btn btn-danger" type="submit">Eliminar</button></td>
                    </tr>
                `
        });
        $('#infodeportes').html(template);


    });

}





// FUNCION DE COMPROBAR SI EXITE UNA CEDULA O NO // FUNCION DE COMPROBAR SI EXITE UNA CEDULA O NO // FUNCION DE COMPROBAR SI EXITE UNA CEDULA O NO // FUNCION DE COMPROBAR SI EXITE UNA CEDULA O NO // FUNCION DE COMPROBAR SI EXITE UNA CEDULA O NO // FUNCION DE COMPROBAR SI EXITE UNA CEDULA O NO


//ATLETA
function comprocedula() {

    postdata = {
        cedula: $('#atl_cedula').val()
    }

    //console.log(postdata);

    url = "php/consultas/consul_cedula.php";


    if (postdata.cedula != "") {

        //console.log('ta lleno');

        $.post(url, postdata, (respuesta) => {

            //console.log(respuesta);

            if (respuesta == "1") {

                $('#atl_cedula').addClass("is-invalid");
                document.getElementById('btn1').setAttribute("disabled", "");

            } else if (respuesta == "2") {

                $('#atl_cedula').addClass("is-valid");
                document.getElementById('btn1').removeAttribute("disabled")

            }
        });

    } else {

        $('#atl_cedula').removeClass("is-invalid");
        $('#atl_cedula').removeClass("is-valid");
        document.getElementById('btn1').removeAttribute("disabled")

        //console.log("ta vacio");

    }



}

//FE DE VIDA
function comprocedula2() {

    postdata = {
        cedula: $('#fe_cedula').val()
    }

    //console.log(postdata);

    url = "php/consultas/consul_cedula.php";


    if (postdata.cedula != "") {

        //console.log('ta lleno');

        $.post(url, postdata, (respuesta) => {

            //console.log(respuesta);

            if (respuesta == "1") {

                $('#fe_cedula').addClass("is-valid");
                document.getElementById('btn2').removeAttribute("disabled");

            } else if (respuesta == "2") {

                $('#fe_cedula').addClass("is-invalid");

                document.getElementById('btn2').setAttribute("disabled", "");

            }
        });

    } else {

        $('#fe_cedula').removeClass("is-invalid");
        $('#fe_cedula').removeClass("is-valid");
        document.getElementById('btn2').removeAttribute("disabled");

        //console.log("ta vacio");

    }



}

//REGISTRO DEPORTES
function comprocedula3() {

    postdata = {
        cedula: $('#cedatldep').val()
    }

    //console.log(postdata);

    url = "php/consultas/consul_cedula.php";


    if (postdata.cedula != "") {

        //console.log('ta lleno');

        $.post(url, postdata, (respuesta) => {

            //console.log(respuesta);

            if (respuesta == "1") {

                $('#cedatldep').addClass("is-valid");
                document.getElementById('btn10').removeAttribute("disabled");


            } else if (respuesta == "2") {

                $('#cedatldep').addClass("is-invalid");

                document.getElementById('btn10').setAttribute("disabled", "");


            }
        });

    } else {

        $('#cedatldep').removeClass("is-invalid");
        $('#cedatldep').removeClass("is-valid");
        document.getElementById('btn10').removeAttribute("disabled");

        //console.log("ta vacio");

    }



}

//NIVEL DEPORTIVO
function comprocedula4() {

    postdata = {
        cedula: $('#cedniv').val()
    }

    //console.log(postdata);

    url = "php/consultas/consul_cedula.php";


    if (postdata.cedula != "") {

        //console.log('ta lleno');

        $.post(url, postdata, (respuesta) => {

            //console.log(respuesta);

            if (respuesta == "1") {

                $('#cedniv').addClass("is-valid");
                document.getElementById('btn3').removeAttribute("disabled");


            } else if (respuesta == "2") {

                $('#cedniv').addClass("is-invalid");

                document.getElementById('btn3').setAttribute("disabled", "");


            }
        });

    } else {

        $('#cedniv').removeClass("is-invalid");
        $('#cedniv').removeClass("is-valid");
        document.getElementById('btn3').removeAttribute("disabled");

        //console.log("ta vacio");

    }



}

//CAMPEONATO
function comprocedula5() {

    postdata = {
        cedula: $('#cecamp').val()
    }

    //console.log(postdata);

    url = "php/consultas/consul_cedula.php";


    if (postdata.cedula != "") {

        //console.log('ta lleno');

        $.post(url, postdata, (respuesta) => {

            //console.log(respuesta);

            if (respuesta == "1") {

                $('#cecamp').addClass("is-valid");
                document.getElementById('btn4').removeAttribute("disabled");


            } else if (respuesta == "2") {

                $('#cecamp').addClass("is-invalid");

                document.getElementById('btn4').setAttribute("disabled", "");


            }
        });

    } else {

        $('#cecamp').removeClass("is-invalid");
        $('#cecamp').removeClass("is-valid");
        document.getElementById('btn4').removeAttribute("disabled");

        //console.log("ta vacio");

    }



}


//ESTUDIOS
function comprocedula6() {

    postdata = {
        cedula: $('#cees').val()
    }

    //console.log(postdata);

    url = "php/consultas/consul_cedula.php";


    if (postdata.cedula != "") {

        //console.log('ta lleno');

        $.post(url, postdata, (respuesta) => {

            //console.log(respuesta);

            if (respuesta == "1") {

                $('#cees').addClass("is-valid");
                document.getElementById('btn5').removeAttribute("disabled");


            } else if (respuesta == "2") {

                $('#cees').addClass("is-invalid");

                document.getElementById('btn5').setAttribute("disabled", "");


            }
        });

    } else {

        $('#cees').removeClass("is-invalid");
        $('#cees').removeClass("is-valid");
        document.getElementById('btn5').removeAttribute("disabled");

        //console.log("ta vacio");

    }



}

//CURSOS REALIZADOS
function comprocedula7() {

    postdata = {
        cedula: $('#cedcur').val()
    }

    //console.log(postdata);

    url = "php/consultas/consul_cedula.php";


    if (postdata.cedula != "") {

        //console.log('ta lleno');

        $.post(url, postdata, (respuesta) => {

            //console.log(respuesta);

            if (respuesta == "1") {

                $('#cedcur').addClass("is-valid");
                document.getElementById('btn6').removeAttribute("disabled");


            } else if (respuesta == "2") {

                $('#cedcur').addClass("is-invalid");

                document.getElementById('btn6').setAttribute("disabled", "");


            }
        });

    } else {

        $('#cedcur').removeClass("is-invalid");
        $('#cedcur').removeClass("is-valid");
        document.getElementById('btn6').removeAttribute("disabled");

        //console.log("ta vacio");

    }



}

//TRABAJOS REALIZADOS

function comprocedula8() {

    postdata = {
        cedula: $('#cetra').val()
    }

    //console.log(postdata);

    url = "php/consultas/consul_cedula.php";


    if (postdata.cedula != "") {

        //console.log('ta lleno');

        $.post(url, postdata, (respuesta) => {

            //console.log(respuesta);

            if (respuesta == "1") {

                $('#cetra').addClass("is-valid");
                document.getElementById('btn7').removeAttribute("disabled");


            } else if (respuesta == "2") {

                $('#cetra').addClass("is-invalid");

                document.getElementById('btn7').setAttribute("disabled", "");


            }
        });

    } else {

        $('#cetra').removeClass("is-invalid");
        $('#cetra').removeClass("is-valid");
        document.getElementById('btn7').removeAttribute("disabled");

        //console.log("ta vacio");

    }



}




















//funcion para contar los caracteres de un text area //funcion para contar los caracteres de un text area //funcion para contar los caracteres de un text area  
//para el registro del atleta en general


function countChars(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {

        document.getElementById("charNum").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn1').setAttribute("disabled", "")

    } else {
        document.getElementById("charNum").innerHTML = strLength + '/250';
        document.getElementById('btn1').removeAttribute("disabled")
    }

}

function countChars2(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum2").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById("enviar").disabled;
        document.getElementById('btn1').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum2").innerHTML = strLength + '/250';
        document.getElementById('btn1').removeAttribute("disabled")
    }

}

function countChars3(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum3").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn1').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum3").innerHTML = strLength + '/250';
        document.getElementById('btn1').removeAttribute("disabled")
    }

}

//fe de vida 

function countChars4(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum4").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn2').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum4").innerHTML = strLength + '/250';
        document.getElementById('btn2').removeAttribute("disabled")
    }

}

function countChars5(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum5").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn2').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum5").innerHTML = strLength + '/250';
        document.getElementById('btn2').removeAttribute("disabled")
    }

}

function countChars6(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum6").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn2').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum6").innerHTML = strLength + '/250';
        document.getElementById('btn2').removeAttribute("disabled")
    }

}


//REGISTRO DE NIVEL DEPORTIVO


function countChars7(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum7").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn3').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum7").innerHTML = strLength + '/250';
        document.getElementById('btn3').removeAttribute("disabled")
    }

}


//REGISTRO CAMPEONATO
function countChars8(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum8").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn4').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum8").innerHTML = strLength + '/250';
        document.getElementById('btn4').removeAttribute("disabled")
    }

}

//REGISTRO DE ESTUDIOS

function countChars9(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum9").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn5').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum9").innerHTML = strLength + '/250';
        document.getElementById('btn5').removeAttribute("disabled")
    }

}

//REGISTRO DE CURSOS REALIZADOS
function countChars10(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum10").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn6').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum10").innerHTML = strLength + '/250';
        document.getElementById('btn6').removeAttribute("disabled")
    }

}

//REGISTRO DE TRABAJOS REALIZADOS
function countChars11(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum11").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn7').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum11").innerHTML = strLength + '/250';
        document.getElementById('btn7').removeAttribute("disabled")
    }

}

//REGISTRO de INFORMACION EXTRA
//REGISTRO EXTRA CLASIFICACION DEP
function countChars12(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum12").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn8').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum12").innerHTML = strLength + '/250';
        document.getElementById('btn8').removeAttribute("disabled")
    }

}

function countChars13(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum13").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn8').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum13").innerHTML = strLength + '/250';
        document.getElementById('btn8').removeAttribute("disabled")
    }

}

function countChars14(obj) {
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum14").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn8').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum14").innerHTML = strLength + '/250';
        document.getElementById('btn8').removeAttribute("disabled")
    }

}

//REGISTRO EXTRA CIUDAD Y PAIS 

function countChars15(obj) {
    var maxLength = 40;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum15").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn9').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum15").innerHTML = strLength + '/40';
        document.getElementById('btn9').removeAttribute("disabled")
    }

}

function countChars16(obj) {
    var maxLength = 40;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if (charRemain < 0) {
        document.getElementById("charNum16").innerHTML = '<span style="color: red;">has excedido el limite de ' + maxLength + ' caracteres</span>';
        document.getElementById('btn9').setAttribute("disabled", "")
    } else {
        document.getElementById("charNum16").innerHTML = strLength + '/40';
        document.getElementById('btn9').removeAttribute("disabled")
    }

}