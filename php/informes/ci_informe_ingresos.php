<?php
class ci_informe_ingresos extends  abm_ci
{
    
    public $nombre_tabla = 'mocovi_descentralizado_ingresos';

    function conf__cuadro(toba_ei_cuadro $cuadro) {
        if (!is_null($this->s__where)) {
            $datos = $this->dep('datos')->tabla($this->nombre_tabla)->get_listado($this->s__where);
            $cuadro->set_datos($datos);
            
        } 
        
    }

}


