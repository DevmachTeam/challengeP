<?php

namespace TncBzkrt\App\Controller;

class Api
{
    const Xml='<?xml version="1.0"?>';
    const XmlTitle='<Products>';
    const XmlTitleEnd='</Products>';
    public function __construct(){
        $ApiModel=model('Api');
        return $ApiModel;
    }
    public function index(){
        $company=self::__construct()->Company();
        $data=array(
            'company'=>$company
        );
        return view('index.php',$data);
    }
    public function Products($Company){
        $products=self::__construct()->Products($Company);
        $wr=json_encode($products);
        $data=array(
          'json'=>$wr,
          'xml'=> $this->ArrayToXml($products),
          'products'=> $products
        );
        $this->FileBrowser('.json',$wr,rand(100001,9999999));
        return $data;
    }
    public function ArrayToXml($Req){
           $data="";
           foreach($Req as $Res):
                $data.="
                    <items>
                    <id>$Res->id</id>
                    <name>$Res->name</name>
                    <price>$Res->price</price>
                    <category>$Res->category</category>
                    </items>";
            endforeach;
            $wr=Api::Xml."\n".Api::XmlTitle."\n".$data."\n".Api::XmlTitleEnd;
            $this->FileBrowser('.xml',$wr,rand(100000,9999999));
    }

    public function FileBrowser($type,$data,$folder){

        $directory="Browser";
        mkdir($directory);
        $fw = fopen($directory."/".$folder.$type,'a');
        $reult = fwrite($fw, $data);
        fclose($fw);

    }




}