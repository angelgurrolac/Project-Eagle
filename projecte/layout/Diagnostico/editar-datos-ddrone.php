<?php 
//No se como lo cambies de resto, por la parte de la estraccion de informacion del dorne. por eso no le modifique lo demas
echo "
         <div id="main">
            <!-- Datos de diagnostico -->
            <section id="contact" class="three">
                <div class="container">
                    <header>
                        <h4>MODIFICAR DIAGNÓSTICO DRONE</h4>
                    </header>
                    <form method="POST" action="">
                        <div class="row">
                            <div class="7u 12u$(mobile)"></div>
                            <div class="1u 12u$(mobile)"><label>Fecha</label></div>
                            <div class="4u$ 12u$(mobile)"><input type="date" name="fecha"/></div>
                            <div class="12u$ 12u$(mobile)"><video width="600" height="400" controls> </video></div>
                        </div>
                    </form>   
                </div>
            </section>
            
            <section id="contact" class="two">
                <div class="container">
                    <form method="POST" action="">
                        <div class="row">
                            <div class="3u 12u$(mobile)"> <label>Nombre de la víctima</label></div>
                            <div class="9u$ 12u$(mobile)"><input type="text" name="nombre"/></div>
                            <div class="3u 12u$(mobile)"> <label>Apellido paterno</label></div>
                            <div class="9u$ 12u$(mobile)"><input type="text" name="apaterno"/></div>
                            <div class="3u 12u$(mobile)"> <label>Apellido materno</label></div>
                            <div class="9u$ 12u$(mobile)"><input type="text" name="amaterno"/></div>
                        </div>
                    </form>   
                </div>
            </section>
            
            <section id="contact" class="three">
                <div class="container">
                    <form method="POST" action="">
                        <div class="row">
                            <div class="3u 12u$(mobile)"><label>Tipo de accidente</label></div>
                            <div class="9u$ 12u$(mobile)">
                                <select name="tipo-accidente">
                                    <option>Seleccione</option>
                                </select>
                            </div>
                            <div class="3u 12u$(mobile)"><label>Síntomas</label></div>
                            <div class="9u$ 12u$(mobile)"><input type="text" name="sintomas"/></div>
                            <div class="3u 12u$(mobile)"><label>Pulsaciones</label></div>
                            <div class="9u$ 12u$(mobile)"><label></label></div>
                            <div class="3u 12u$(mobile)"><label>Respiración</label></div>
                            <div class="9u$ 12u$(mobile)"><label></label></div>
                            <div class="3u 12u$(mobile)"><label>Oxígeno en la sangre</label></div>
                            <div class="9u$ 12u$(mobile)"><label></label></div>
                            <div class="3u 12u$(mobile)"><label>Estado de la víctima</label></div>
                            <div class="9u$ 12u$(mobile)"> 
                                <select name="estado-victima">
                                    <option>Seleccione</option>
                                    <option>Vivo</option>
                                    <option>Muerto</option>
                                </select>
                            </div>
                            <div class="3u 12u$(mobile)"><label>Observaciones</label></div>
                            <div class="9u$ 12u$(mobile)"><textarea rows="4" cols="4" name="observaciones"></textarea></div>
                            <div class="12u$"><input type="submit" value="Modificar" /></div>
                            <div class="12u$ 12u$">
                                 <a href="http://www.github.com" class="icon fa-download" target="_blank"> PDF</a>
                            </div>
                        </div>
                    </form>   
                </div>
            </section>
        </div>
    ";

?>
