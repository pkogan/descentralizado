<?php

class ci_politica extends abm_ci {

    protected $nombre_tabla = 'mocovi_descentralizado_politica';

    function resetear() {
       
    }

    function conf__formulario(toba_ei_formulario $form) {
        if ($this->dep('datos')->esta_cargada()) {
            //ei_arbol('paso');
            $form->set_datos($this->dep('datos')->tabla($this->nombre_tabla)->get());
        }else{
            //falta chequear el periodo
            $datos=$this->dep('datos')->tabla($this->nombre_tabla)->get_listado();
            if(isset($datos[0])){
                $this->dep('datos')->cargar(array('id_politica'=>$datos[0]['id_politica']));
            }
            $form->set_datos($this->dep('datos')->tabla($this->nombre_tabla)->get());
        }
    }

}