<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->helper("url");//BORRAR CACHÉ DE LA PÁGINA
        $this->load->model('M_datos');
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

	public function index(){
        $paquetes = $this->M_datos->getPaquetesByBusqueda();
        // log_message('error',print_r($paquetes,true));
        $cont = 1;
        $nav = "";
        $section = "";
        $opacity = "";
        foreach($paquetes as $key){
            $array_dias_det = array();
            $nav.= '<a id="menu-paquete'.$cont.'" class="mdl-navigation__link" onclick="goToMenu(this.id)">'.$key->lugar.'</a>';
            $table = "";
            if($key->detalle_dias != null){
                $array_dias = explode('|',$key->detalle_dias);
                foreach($array_dias as $det){
                    $desc = explode('*',$det);
                    $table.= '
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>DIA '.$desc[0].'</th>
                                        <th>'.$desc[1].'</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>'.$desc[2].'</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>';
                }
            }
            $section.= '
                <section id="section-menu-paquete'.$cont.'" class="section js-paquete js-section--menu '.$opacity.'">
                    <div class="js-container">
                        <h2 class="js-title">'.$key->lugar.'</h2>
                        <p>'.$key->ciudades.'</p>
                        <p>'.$key->dias.'</p>
                        <div class="js-paquete--contenido">
                            '.$key->descripcion.'
                            '.$table.'
                            <h2>Hoteles sugeridos</h2>
                            <div class="js-hoteles">
                                <h2>LIMA</h2>
                                <p>Hotel el Ducado (3***)</p>
                                <a href="https://hotels.cloudbeds.com/en/reservas/FXlNzT#checkin=2018-07-06&checkout=2018-07-07" target="_blank">www.ducado.pe</a>
                                <p>Colon Hotel (4****)</p>
                                <a href="https://www.miraflorescolonhotel.com/" target="_blank">www.miraflorescolonhotel.com/</a>
                                <p>Hotel Marriott (5*****)</p>
                                <a href="https://www.espanol.marriott.com/default.mi" target="_blank">www.espanol.marriott.com</a>
                            </div>
                            <div class="js-hoteles">
                                <h2>Cusco</h2>
                                <p>LP Los Portales Hotel Cusco (3***)</p>
                                <a href="http://www.losportaleshoteles.com.pe/error?aspxerrorpath=/hotel/cusco/" target="_blank">www.losportaleshoteles.com.pe/hotel/cusco/</a>
                                <p>San Agustin Cusco Plaza (4****)</p>
                                <a href="http://www.hotelessanagustin.com.pe/es/hoteles/plaza-cusco/" target="_blank">www.hotelessanagustin.com.pe/es/hoteles/plaza-cusco/</a>
                                <p>Casa Andina Premium Cusco (5*****)</p>
                                <a href="http://www.casaandina.com/" target="_blank">www.casaandina.com</a>
                            </div>
                            <div class="js-hoteles">
                                <h2>Machu Picchu</h2>
                                <p>Machu Picchu Santuario (3***)</p>
                                <a href="http://www.machupicchus.com/" target="_blank">www.machupicchus.com/</a>
                                <p>El Mapi Hotel Machu Picchu (4****)</p>
                                <a href="http://www.inkaterra.com/es/byinkaterra/el-mapi-hotel/" target="_blank">www.inkaterra.com/es/byinkaterra/el-mapi-hotel/</a>
                                <p>Sumaq Luxury (5*****)</p>
                                <a href="http://www.machupicchuhotels-sumaq.com/" target="_blank">www.sumaqhotelperu.com</a>
                            </div>
                            <div class="js-costo">
                                <p>El costo del paquete <span>CUSCO IMPERIAL, AMANECER EN MACHUPICCHU (7 DIAS / 6 NOCHES)</span> incluye:</p>
                                <ul>
                                    <li>Boleto aéreo Lima – Cusco – Lima</li>
                                    <li>Traslado del aeropuerto al hotel en Lima </li>
                                    <li>2 Noches de Alojamiento con desayunos en Lima </li>
                                    <li>Tours en Lima: City Tour, visita a los museos arqueol&oacute;gico</li>
                                    <li>Almuerzo</li>
                                    <li>Traslado del Aeropuerto al hotel en Cusco </li>
                                    <li>3 Noches de alojamiento con desayunos en Cusco</li>
                                    <li>1 Noche de alojamiento en Machu Pichhu con desayuno</li>
                                    <li>Tours en Cusco: City Tour, excursi&oacute;n a las ruinas aleda&ntilde;as</li>
                                    <li>Excursi&oacute;n al Valle Sagrado de los Incas con almuerzo buffet</li>
                                    <li>Excursi&oacute;n a Machu Picchu en tren y almuerzo buffet </li>
                                    <li>Gu&iacute;a tur&iacute;stica y entradas a los centros arqueol&oacute;gicos</li>
                                </ul>
                                <p>El paquete del costo no incluye</p>
                                <ul>
                                    <li>Boleto a&eacute;reo Europa - Per&uacute; – Europa</li>
                                    <li>Almuerzos y cenas se&ntilde;aladas en el programa</li>
                                    <li>Impuestos de Aeropuerto</li>
                                </ul>
                                <h2>PRECIO POR PERSONA EN USD</h2>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>CAT. HOTEL</th>
                                                <th>SIMPLE</th>
                                                <th>DOBLE</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Económica 3***</td>
                                                <td>$ 1199</td>
                                                <td>$ 999</td>
                                            </tr>
                                            <tr>
                                                <td>Superior 4****</td>
                                                <td>$ 1399</td>
                                                <td>$ 1259</td>
                                            </tr>
                                            <tr>
                                                <td>Lujo 5*****</td>
                                                <td>$ 2399</td>
                                                <td>$ 1799</td>
                                            </tr>
                                        </tbody>
                                    </table>   
                                </div>
                                <small>* Tarifas sujetos a disponibilidad de espacio.</small>
                            </div>
                        </div>
                    </div>                    
                </section>';
            $opacity = "js-opacity-done";
            $cont++;
        }
        $data['nav'] = $nav;
        $data['section'] = $section;
		$this->load->view('es/v_package', $data);
    }
}