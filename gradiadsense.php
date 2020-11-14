<?php
if(!defined('_PS_VERSION_'))
exit;

class gradiadsense extends Module{
  public function __construct()
  {
     $this->name = 'gradiadsense'; //nombre del módulo el mismo que la carpeta y la clase.
     $this->tab = 'front_office_features'; // pestaña en la que se encuentra en el backoffice.
     $this->version = '1.0.0'; //versión del módulo
     $this->author ='Dany ramirez'; // autor del módulo
     $this->need_instance = 0; //si no necesita cargar la clase en la página módulos,1 si fuese necesario.
     $this->ps_versions_compliancy = array('min' => '1.7.x.x', 'max' => _PS_VERSION_); //las versiones con las que el módulo es compatible.
     $this->bootstrap = true; //si usa bootstrap plantilla responsive.

     parent::__construct(); //llamada al constructor padre.

     $this->displayName = $this->l('Gradi Adsense'); // Nombre del módulo
     $this->description = $this->l('Módulo Slider.'); //Descripción del módulo
     $this->confirmUninstall = $this->l('¿Estás seguro de que quieres desinstalar el módulo?'); //mensaje de alerta al desinstalar el módulo.

     $this->templateFile = 'module:gradiadsense/views/templates/hook/gradiadsense.tpl';
 }

  public function install()
  {
    return (parent::install()
    && $this->registerHook('displayHome') // Registramos el hook dentro de las cabeceras.
    && $this->registerHook('displayHeader')
    );

    $this->emptyTemplatesCache();

    return (bool) $return;
  }


  public function hookHeader($params)
  {
    $this->context->controller->registerStylesheet('modules-gradiadsense', 'modules/'.$this->name.'/views/css/gradiadsense.css', ['media' => 'all', 'priority' => 150]);
    $this->context->controller->registerJavascript('modules-gradiadsense', 'modules/'.$this->name.'/views/js/gradiadsense.js',[ 'position' => 'bottom','priority' => 150]);
  }

  public function uninstall()
  {
    include_once($this->local_path.'sql/uninstall.php'); 
    $this->_clearCache('*');

    
    if(!parent::uninstall() || !$this->unregisterHook('displayHome'))
       return false;

    return true;
  }

  public function hookDisplayHome(){

    $this -> context -> smarty -> assign(array(
      'GRADIADSENSE_STR_TITULO' => Configuration :: get('GRADIADSENSE_STR_TITULO'),
      'GRADIADSENSE_STR_CTA' => Configuration :: get('GRADIADSENSE_STR_CTA'),
      'GRADIADSENSE_STR_URL' => Configuration :: get('GRADIADSENSE_STR_URL'),
      'GRADIADSENSE_STR_SWICHE' => Configuration :: get('GRADIADSENSE_STR_SWICHE'),
      'GRADIADSENSE_STR_BANNER' => Configuration :: get('GRADIADSENSE_STR_BANNER'),
      'GRADIADSENSE_STR_DESCRIPCION' => Configuration :: get('GRADIADSENSE_STR_DESCRIPCION')

    ));
    return $this->display(__FILE__, 'views/templates/hook/gradiadsense.tpl');
  }

  public function getContent()
  {
   
    if(Tools :: isSubmit('saveing'))
    {
      $titulo = Tools :: getValue('Titulo');
      $cta = Tools :: getValue('Cta');
      $url = Tools :: getValue('Url');
      $switche = Tools :: getValue('Switche');
      $banner = Tools :: getValue('Banner');
      $descripcion = Tools :: getValue('Descripcion');

      if(empty($banner))
      {
       $banner = "https://png.pngtree.com/thumb_back/fw800/background/20190222/ourmid/pngtree-irregular-geometric-creative-gradient-banner-background-image_51434.jpg";
      }

      Configuration::updateValue('GRADIADSENSE_STR_TITULO', $titulo);
      Configuration::updateValue('GRADIADSENSE_STR_CTA', $cta);
      Configuration::updateValue('GRADIADSENSE_STR_URL', $url);
      Configuration::updateValue('GRADIADSENSE_STR_SWICHE', $switche);
      Configuration::updateValue('GRADIADSENSE_STR_BANNER', $banner);
      Configuration::updateValue('GRADIADSENSE_STR_DESCRIPCION', $descripcion);

    }



    $this -> context -> smarty -> assign(array(
      'GRADIADSENSE_STR_TITULO' => Configuration :: get('GRADIADSENSE_STR_TITULO'),
      'GRADIADSENSE_STR_CTA' => Configuration :: get('GRADIADSENSE_STR_CTA'),
      'GRADIADSENSE_STR_URL' => Configuration :: get('GRADIADSENSE_STR_URL'),
      'GRADIADSENSE_STR_SWICHE' => Configuration :: get('GRADIADSENSE_STR_SWICHE'),
      'GRADIADSENSE_STR_BANNER' => Configuration :: get('GRADIADSENSE_STR_BANNER'),
      'GRADIADSENSE_STR_DESCRIPCION' => Configuration :: get('GRADIADSENSE_STR_DESCRIPCION')


    ));
    return $this->display(__FILE__, 'views/templates/admin/configure.tpl');
  }

 

}

?>
