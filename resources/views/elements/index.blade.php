@extends('elements.head')


  @section('content')
        
        <section class="pagina-home slider" style="background-image:url('{{ asset('img/img_principal.jpg') }}')">
    <div class="texto-slider">
        <p><span style="color: #ffffff;">&iexcl;Alquile la </span><span style="color: #ffa514;">Maquinaria</span><span style="color: #ffffff;"> que <span style="color: #ffa514;">necesita</span>!</span></p>   </div>
    <div class="buscador-slider">
        <form method="POST" action="#" target="_blank">
        <div class="buscador-items campos">
            <input name="busqueda" class="slider-inputs left-radius" placeholder="¿Qué necesita alquilar?" type="text">
        </div>
        <div class="buscador-items campos">
            <input name="localizacion" id="pac-input" class="controls slider-inputs ubicacion" type="text" placeholder="Ubicación">
            
        </div>
        <div class="buscador-items boton">
            <button class="slider-boton right-radius">Buscar</button>
        </div>
        </form>
    </div>
</section>
    
    <section>        
        <div  class="container" >
                   <div  class="row" >         
    
                 </div>
        </div> 
    </section>  

<section class="lista-categorias">
    <div class="container-fluid">
        <div class="row listar-categorias">
            <div class="container lista-categorias">
    <div class="row">
        <h2 class="titulo-raya">Encuentre su <span class="naranja">Maquinaria</span> entre las siguientes categorias</h2>
                <div class="col-xs-12 categoria_padre">     
            <a href="https://www.rentyn.com/es/construccion">
            
                                            
            <div class="col-xs-12 categoria_link" style="background-image: url(https://www.rentyn.com/uploads/Categorias/cabeceras/2-CONSTRUCCION.jpg)">                
                    Construcci�n                
            </div>
            </a>
            
            <div class="listado row">
                                <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/excavadoras">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-excavadoras.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Excavadoras</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/excavadora-de-ruedas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-excavadoras.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Excavadora de Ruedas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/retroexcavadora">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-retroexcavadora.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Retroexcavadora</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/dumper-de-ruedas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-dumper-de-ruedas.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Dumper de ruedas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/dumper">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-dumper.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span>Dumper</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/excavadoras/excavadora-de-cadenas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-excavadora-de-cadenas.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Excavadora de cadenas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/dumper-de-cadenas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-dumper-de-cadenas.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Dumper de cadenas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/dumper-articulado">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-dumper-articulado.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Dumper Articulado</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/minicargadoras">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Minicargadoras.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span>Minicargadoras</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/minicargadoras/minicargadoras-de-cadenas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-compactadores_1.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Minicargadoras de cadenas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/minicargadoras/minicargadoras-de-ruedas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Minicargadoras-de-ruedas.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Minicargadoras de ruedas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/bulldozer">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-bulldozer.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Bulldozer</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/manipuladores-telescopicos">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-manipulador-telescopico.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Manipuladores telescopicos</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/manipuladores-telescopicos/manipuladora-telescopica">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-manipulador-telescopico.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Manipuladora telescopica</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/manipuladores-telescopicos/manipulador-telescopico-giratorio">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-manipulador-telescopico-giratorio.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Manipulador telescopico giratorio</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/palas-cargadoras">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-palas-cargadoras.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Palas cargadoras</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/palas-cargadoras/palas-cargadoras-de-ruedas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-pala-cargadora-de-ruedas.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Palas cargadoras de ruedas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/palas-cargadoras/pala-cargadora-de-cadenas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-pala-cargadora-de-cadenas.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Pala cargadora de cadenas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/tiendetubos">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-tiendetubos.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Tiendetubos</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/maquinaria-de-demolicion">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Maquinaria-de-demolici%C3%B3n.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Maquinaria de demolici�n</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/manipuladoras-de-materiales">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-manipuladoras-de-materiales.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Manipuladoras de materiales</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/carretilla-elevadora-4x4">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-carretilla-elevadora-4x4.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Carretilla elevadora 4x4</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/mineria/camion-de-obras">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-camion-de-obras.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Camion de obras</span>
                            </div>
                        </a>
                    </div>
                            </div>
        </div>  
                <div class="col-xs-12 categoria_padre">     
            <a href="https://www.rentyn.com/es/pavimentacion">
            
                                            
            <div class="col-xs-12 categoria_link" style="background-image: url(https://www.rentyn.com/uploads/Categorias/cabeceras/3-COMPACTACION.jpg)">                
                    Pavimentacion               
            </div>
            </a>
            
            <div class="listado row">
                                <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/asfaltadora">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Asfaltadora.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Asfaltadora</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/motoniveladora">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-motoniveladora.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span>Motoniveladora</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/martillo-hidraulico">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-martillo-hidraulico.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Martillo hidr�ulico</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/trailla">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-traila.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span>Tra�lla</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/pison">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-pison-compactador.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Pison</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/compactadores">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-compactadores.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Compactadores</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/compactadores/rodillo-compactador">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/rodillo-vibratorio-comp.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Rodillo compactador</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/compactadores/compactadoras-de-basura">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Compactadoras-de-basura.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Compactadoras de basura</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/compactadores/compactador-neumatico">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Compactador-neumatico.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Compactador neumatico</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/bandeja-vibrante">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Bandeja-vibrante.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Bandeja vibrante</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/fresadora-de-asfalto">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Fresadora-de-asfalto.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Fresadora de asfalto</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/placa-vibratoria">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Placa-vibratoria.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Placa vibratoria</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/rodillos-vibratorios">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Rodillos-vibratorios.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Rodillos vibratorios</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/rodillos-vibratorios/rodillos-vibratorios-simple">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Rodillos-vibratorios-simple.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Rodillos vibratorios simple</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/rodillos-vibratorios/rodillos-vibratorios-doble">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-rodillos-vibratorio-doble.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Rodillos vibratorios doble</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/rodillos-vibratorios/rodillos-para-zanjas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Rodillos-Para-Zanjas.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Rodillos Para Zanjas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/rodillos-vibratorios/rodillos-vibratorios-3-ruedas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Rodillo-vibratorios-3-ruedas.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Rodillos vibratorios 3 ruedas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/rodillos-vibratorios/-rodillos-vibratorios-autopropulsados">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Rodillos-vibratorios-autopropulsados.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span> Rodillos vibratorios autopropulsados</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/rodillos-vibratorios/-rodillos-vibrantes-tambor-unico">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de--Rodillos-vibratorios-tambor-unico.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span> Rodillos vibrantes tambor unico</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/pavimentacion/rodillos-vibratorios/-rodillos-vibrantes-tambor-doble">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Rodillos-vibratorios-tambor-doble.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span> Rodillos vibrantes tambor doble</span>
                            </div>
                        </a>
                    </div>
                            </div>
        </div>  
                <div class="col-xs-12 categoria_padre">     
            <a href="https://www.rentyn.com/es/carretillas-elevadoras">
            
                                            
            <div class="col-xs-12 categoria_link" style="background-image: url(https://www.rentyn.com/uploads/Categorias/cabeceras/6-CARRETILLAS-ELEVADORAS.jpg)">              
                    Carretillas elevadoras              
            </div>
            </a>
            
            <div class="listado row">
                                <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/carretillas-elevadoras/carretilla-elevadora-diesel">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-carretilla-elevadora-diesel.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Carretilla elevadora diesel</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/construccion/carretilla-elevadora-4x4">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-carretilla-elevadora-4x4.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Carretilla elevadora 4x4</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/carretillas-elevadoras/carretilla-elevadora-electrica---4-ruedas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-carretilla-elevadora-electrica-4-ruedas.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Carretilla elevadora el�ctrica - 4 ruedas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/carretillas-elevadoras/carretilla-elevadora-electrica---3-ruedas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-carretilla-elevadora-electrica-3-ruedas.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Carretilla elevadora el�ctrica - 3 ruedas</span>
                            </div>
                        </a>
                    </div>
                            </div>
        </div>  
                <div class="col-xs-12 categoria_padre">     
            <a href="https://www.rentyn.com/es/mineria">
            
                                            
            <div class="col-xs-12 categoria_link" style="background-image: url(https://www.rentyn.com/uploads/Categorias/cabeceras/5-MINING-EQUIPMENT.jpg)">                
                    Mineria             
            </div>
            </a>
            
            <div class="listado row">
                                <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/mineria/excavadoras-de-cadenas">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-excavadora-de-cadenas.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Excavadoras de cadenas</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/mineria/camion-minero">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-camion-minero.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Camion minero</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/mineria/excavadora-minera">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-excavadora-minera.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Excavadora minera</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/mineria/camion-de-obras">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-camion-de-obras.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Camion de obras</span>
                            </div>
                        </a>
                    </div>
                            </div>
        </div>  
                <div class="col-xs-12 categoria_padre">     
            <a href="https://www.rentyn.com/es/plataformas-elevadoras">
            
                                            
            <div class="col-xs-12 categoria_link" style="background-image: url(https://www.rentyn.com/uploads/Categorias/cabeceras/1-PLATAFORMAS-AEREAS.jpg)">              
                    Plataformas elevadoras              
            </div>
            </a>
            
            <div class="listado row">
                                <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/plataformas-aereas/plataforma-articulada">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-plataforma-elevadora-articulada.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Plataforma articulada</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/plataformas-aereas/plataforma-elevadora-de-tijera">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-plataforma-elevadora-de-tijera.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span>Plataforma elevadora de tijera</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/plataformas-aereas/plataforma-elevadora-telescopica">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-plataforma-telescopica.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span>Plataforma elevadora telescopica </span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/plataformas-aereas/elevadores-personales">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-elevadores-personales.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Elevadores Personales</span>
                            </div>
                        </a>
                    </div>
                            </div>
        </div>  
                <div class="col-xs-12 categoria_padre">     
            <a href="https://www.rentyn.com/es/maquinaria-forestal">
            
                                            
            <div class="col-xs-12 categoria_link" style="background-image: url(https://www.rentyn.com/uploads/Categorias/cabeceras/4-SILVICULTURA.jpg)">                
                    Maquinaria forestal             
            </div>
            </a>
            
            <div class="listado row">
                                <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/maquinaria-forestal/taladora-forestal">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Taladora-forestal.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Taladora forestal</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/maquinaria-forestal/excavadora-forestal">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Excavadora-forestal.jpg' alt ='' />                           </div>
                            <div class="descripcion">
                                <span>Excavadora forestal</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/maquinaria-forestal/cargadora-forestal">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Cargadora-forestal.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span>Cargadora forestal</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/maquinaria-forestal/skidder-forestal">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Skidder-forestal.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Skidder forestal</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/maquinaria-forestal/talador-apilador-forestal">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Talador-apilador-forestal.jpg' alt ='' />                         </div>
                            <div class="descripcion">
                                <span>Talador apilador forestal</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/maquinaria-forestal/autocargadores">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Autocargadores.jpg' alt ='' />                            </div>
                            <div class="descripcion">
                                <span>Autocargadores</span>
                            </div>
                        </a>
                    </div>
                                    <div class="col-md-3 col-sm-4 col-xs-12 categoria">
                        <a href="https://www.rentyn.com/es/maquinaria-forestal/procesadora-forestal">
                            <div class="img">
                            <img src='https://www.rentyn.com/uploads/sizes/foto_cat/Categorias/SUB-CATEGORIAS/alquiler-de-Procesadora-forestal.jpg' alt ='' />                          </div>
                            <div class="descripcion">
                                <span>Procesadora forestal</span>
                            </div>
                        </a>
                    </div>
                 </div>
             </div>  
        </div>
    </div>     
 </div>
        
                <div class="row texto-comparador">
            <div class="col-md-6 col-sm-6 col-xs-12 texto-izq-comparador">
                <h3>Comparaci�n de la Maquinaria</h3>
                <p>&nbsp;</p>
<p><span style="font-weight: 400;">&iquest;Quieres obtener las mejores maquinas al mejor precio en un par de clicks?</span></p>
<p><span style="font-weight: 400;">Toma el control sobre tus decisiones y decide con criterio.</span></p>
<p><span style="font-weight: 400;">No pagues de m&aacute;s, asegura tu inversi&oacute;n.</span></p>
<p>&nbsp;</p>               <a href="/es/comparador" class="boton-texto-comparador">Ir a comparador<span class="maquina-icono"></span></a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 foto-comparador">
                <img src="https://www.rentyn.com/uploads/img_comparador.jpg">
            </div>
        </div>
    </div>
</section>

<section class="testimonial-sections">
    <div class="container-fluid">
        <div id="tcb-asociados-carousel" class="row clients-slider">
                                        
                           <div class="col-xs-3">
                                <a href="http://www.carretillasatlet.com/" target="_blank">
                                <img src='https://www.rentyn.com/uploads/Fabricantes/logo_atlet_normal.png' alt ='' />                              </a>
                           </div>
                                        
                           <div class="col-xs-3">
                                <a href="http://www.cat.com/es_ES.html" target="_blank">
                                <img src='https://www.rentyn.com/uploads/Fabricantes/logo_caterpillar_normal.png' alt ='' />                                </a>
                           </div>
                                        
                           <div class="col-xs-3">
                                <a href="http://www.komatsu.com/" target="_blank">
                                <img src='https://www.rentyn.com/uploads/Fabricantes/logo_komatsu_normal.png' alt ='' />                                </a>
                           </div>
                                        
                           <div class="col-xs-3">
                                <a href="http://www.ausa.com/es/" target="_blank">
                                <img src='https://www.rentyn.com/uploads/Fabricantes/logo_ausa_normal.png' alt ='' />                               </a>
                           </div>
                                        
                           <div class="col-xs-3">
                                <a href="" target="_blank">
                                <img src='https://www.rentyn.com/uploads/Categorias/MARCAS/case-logo-AB9501A634-seeklogo.com.gif' alt ='' />                                </a>
                           </div>
                                    
        </div>
    </div>
</section>

<section class="seccion-contacto">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3  col-sm-6 col-sm-offset-3 col-xs-12 seccion-contacto-contenido">
                <h4 class="titulo-raya-naranja">�Quiere alquilar sus productos con nosotros?</h4>
                <p>�nase! con rentyn podr� obtener una v�a m�s de ingresos para su negocio.<br /><br />�Quiere sacar el mayor rendimiento a su flota, tenerlo todo organizado, aprovechar todo el potencial de la plataforma de referencia del mercado de alquiler online y obtener un mayor beneficio?<br />Contacte con nuestro departamento comercial</p>                <a class="" href="/es/contacto">Contacto</a>
            </div>
        </div>
    </div>
</section>  

 @endsection     