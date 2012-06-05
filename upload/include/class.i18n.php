<?php

class i18n {

    public $name;
    public $description;

    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }

    static function getLanguages() {

        $langs[] = new i18n("en", "English");
        $langs[] = new i18n("pt_BR", "Brazillian Portuguese");
        $langs[] = new i18n("cs", "Czech");
        $langs[] = new i18n("es", "Spanish");
        $langs[] = new i18n("tr", "Turkish");
	$langs[] = new i18n("hu_HU", "Hungarian");

        return $langs;
    }

}