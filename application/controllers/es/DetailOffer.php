<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailOffer extends CI_Controller {

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
        $ofertas = $this->M_datos->getOfertasByBusqueda();
        
        $nav = "";
        $section = "";
        $opacity = "";
        $navActive = "active";
        foreach ($ofertas as $key) {
            $nav.= '<a id="menu-oferta'.$key->id.'" class="mdl-navigation__link '.$navActive.'" onclick="goToMenu(this.id)">
                        '.$key->titulo.'
                    </a>';
            $navActive = "";
            $table = "";
            if($key->desc_dias != null){
                $array_dias = explode('|',$key->desc_dias);
                $count = 0;
                foreach($array_dias as $det){
                    $count++;
                    $desc = explode('*',$det);
                    $table.= '
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>DIA '.$count.'</th>
                                        <th>'.$desc[0].'</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>'.$desc[1].'</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>';
                }
            }
            $lugares = str_replace(","," - ",$key->atractivos);
            $array_lugares = explode('|',$key->lugar_detalle);
            $htmlLugares = "";
            foreach($array_lugares as $lug) {
                $array_lug = explode('*', $lug);
                $htmlLugares.= "<h2>".$array_lug[0]."</h2><p>".$array_lug[1]."</p>";
            }

            $precio     = "";
            $htmlPrecio = "";
            if($key->precio != null){
                $array_precio = explode('|', $key->precio);
                $htmlPrecio =  '<h2>PRECIO POR PERSONA EN USD</h2>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead><tr><th>CAT. HOTEL</th><th>SIMPLE</th><th>DOBLE</th></tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Económica 3***</td>
                                                <td>'.($array_precio[0] != null ? '$ '.$array_precio[0] : '-').'</td>
                                                <td>'.($array_precio[1] != null ? '$ '.$array_precio[1] : '-').'</td>
                                            </tr>
                                            <tr>
                                                <td>Superior 4****</td>
                                                <td>'.($array_precio[2] != null ? '$ '.$array_precio[2] : '-').'</td>
                                                <td>'.($array_precio[3] != null ? '$ '.$array_precio[3] : '-').'</td>
                                            </tr>
                                            <tr>
                                                <td>Lujo 5*****</td>
                                                <td>'.($array_precio[4] != null ? '$ '.$array_precio[4] : '-').'</td>
                                                <td>'.($array_precio[5] != null ? '$ '.$array_precio[5] : '-').'</td>
                                            </tr>
                                        </tbody>
                                    </table>   
                                </div>
                                <small>* Tarifas sujetos a disponibilidad de espacio.</small>';
            }
            $htmlIncluye = "";
            if ($key->incluye != null) {
                $array_incluye = explode('|', $key->incluye);
                $htmlIncluye = '<h3>El costo del paquete incluye:</h3>';
                foreach($array_incluye as $arr) {
                    $htmlIncluye.= '<li>'.$arr.'</li>';
                }
            }
            $htmlNoIncluye = "";
            if ($key->no_incluye != null) {
                $array_no_incluye = explode('|', $key->no_incluye);
                $htmlNoIncluye = '<h3>El costo del paquete NO incluye:</h3>';
                foreach($array_no_incluye as $arr) {
                    $htmlNoIncluye.= '<li>'.$arr.'</li>';
                }
            }
            $section.= '<section id="section-menu-oferta'.$key->id.'" class="section js-paquete js-section--menu '.$opacity.'">
                            <div class="js-container">
                                <div class="owl-carousel owl-theme">
                                    <div class="item"><div class="js-slider--imagen imagen1"></div></div>
                                    <div class="item"><div class="js-slider--imagen imagen2"></div></div>
                                    <div class="item"><div class="js-slider--imagen imagen3"></div></div>
                                </div>
                                <h2 class="js-title black">'.$key->titulo.'</h2>
                                <p>'.$lugares.'</p>
                                <p>'.$key->dias.'</p>
                                <div class="js-paquete--contenido">
                                    '.$htmlLugares.'<br>
                                    '.$table.'<br>
                                    <div class="js-costo">
                                        '.$htmlPrecio.'
                                        '.$htmlIncluye.$htmlNoIncluye.'
                                        <h3>RECOMENDACIONES E INDICACIONES:</h3>
                                        <p>Traer crema bloqueadora para el sol, gorra, lentes de sol, c&aacute;mara fotogr&aacute;fica, impermeable para la lluvia y abrigo para las tardes.</p>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </section>';
            $opacity = "js-opacity-done";
        }
        $data['nav'] = $nav;
        $data['section'] = $section;
        // 

        
		$this->load->view('es/v_detailoffer',$data);
	}
}