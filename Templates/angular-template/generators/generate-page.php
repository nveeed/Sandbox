<?php
require_once __DIR__."/helper.php";
class MyGenerator{
    public $name;
    public $dir;
    public $moduleName;
    private $appJsFilePath;

    public function __construct($name)
    {
        $this->name = $name;
        $this->dir = __DIR__."/../pages/$name";
        $this->moduleName = hyphenToCamelCase($name);
        $this->appJsFilePath = __DIR__."/../app.js";
    }

    public function generate()
    {
        // create directory
        if(!file_exists($this->dir)) mkdir($this->dir);
        // create html file
        $this->generateFile($this->dir."/$this->name.html",$this->moduleName." Page..");
        // create js file
        $this->generateFile($this->dir."/$this->name.js",$this->getJsFileContents());
        // insert in app.js, module dependency
        $this->insertModuleDependency();
        // insert in app.js, codekit declaration
    }

    private function insertModuleDependency()
    {
        $content = file_get_contents($this->appJsFilePath);
        $placeHolderStr = "append more modules here";
        $placeHolder = "// $placeHolderStr";
        $regex = "/\/\/ $placeHolderStr/";
        $moduleContent = "'{$this->moduleName}'";
        $content = preg_replace($regex,",\n\t".$moduleContent.$placeHolder,$content);
        file_put_contents($this->appJsFilePath,$content);
    }

    private function generateFile($file,$content)
    {
        file_put_contents($file,$content);
        echo "generated file: ".$file;
    }

    private function getJsFileContents(){
        $output = "'use strict';

angular.module('{$this->moduleName}', ['ngRoute'])

.config(['\$routeProvider', function(\$routeProvider) {
  \$routeProvider.when('/{$this->name}', {
    templateUrl: 'pages/{$this->name}/{$this->name}.html',
    controller: '{$this->moduleName}Ctrl'
  });
}])

.controller('{$this->moduleName}Ctrl', [function() {

}]);";
        return $output;
    }

}

if( !empty($_POST['name']) )
{
    (new MyGenerator($_POST['name']))->generate();
}
?>
<form method="post">
    <input type="text" name="name"/>
    <button type="submit">Generate</button>
</form>