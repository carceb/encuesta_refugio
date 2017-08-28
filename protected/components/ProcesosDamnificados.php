<?php
    class ProcesosDamnificados
    {

        public function EsDamnificadoRegistrado($cedula_damnificado)
        {
                $resultado=Damnificado::model()->find('cedula_damnificado=?',array($cedula_damnificado));
                if ($resultado!=NULL)
                {
                    return true;
                }
                return false;
        }

        public function EsFamiliarRegistrado($cedula_familiar)
        {
            if ($cedula_familiar!=0)
            {
                $resultado=GrupoFamiliar::model()->find('cedula_familiar=?',array($cedula_familiar));
                if ($resultado!=NULL)
                {
                    return true;
                }
            }
            else
            {
                return false;
            }
        }

        public function EsDamnificadoEnGrupoFamiliar($cedula_damnificado)
        {
            $resultado=GrupoFamiliar::model()->find('cedula_familiar=?',array($cedula_damnificado));
            if ($resultado!=NULL)
            {
                return true;
            }
        }

        public function EsGrupoFamiliarEnDamnificado($cedula)
        {
            $resultado=Damnificado::model()->find('cedula_damnificado=?',array($cedula));
                if ($resultado!=NULL)
                {
                    return true;
                }
        }
    }
?>
