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
            // log_message('error',print_r($array_lugares,true));
            foreach($array_lugares as $lug) {
                $array_lug = explode('*', $lug);
                $htmlLugares.= "<h2>".$array_lug[0]."</h2><p>".$array_lug[1]."</p>";
            }
            $section.= '<section id="section-menu-oferta'.$key->id.'" class="section js-paquete js-section--menu '.$opacity.'">
                            <div class="js-container">
                                <h2 class="js-title black">'.$key->titulo.'</h2>
                                <p>'.$lugares.'</p>
                                <p>'.$key->dias.'</p>
                                <div class="js-paquete--contenido">
                                    '.$htmlLugares.'<br>
                                    '.$table.'<br>
                                    <div class="js-costo">
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