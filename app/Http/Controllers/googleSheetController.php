<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google\Client;
use Google\Service\Sheets;
use Google\Service\Drive;
use Google\Service\Sheets\ValueRange;
use Google\Service\Drive\Files;

class googleSheetController extends Controller
{
    //
    public function getClient(){
        $client =new Client();        
        $client ->setApplicationName("My First Application");
        $client-> setScopes([Sheets::SPREADSHEETS]);
        $client->setAccessType('offline');
        $client->setAuthConfig('PhpWithSheet-edb3d6c3ec7c.json');
        
        return $client;
    }
    public function readSheet(){
        $client=$this->getClient();
        $service = new Sheets($client);
        $spreadsheetId = '1HLlDcvFu8QdsdnfAT-B5uiKF60zSkx70Xm87V5fIE0k';
        $range = 'test!B2:I';
        $response = $service->spreadsheets_values->get($spreadsheetId, $range);
        return $response;
    }
    public function getClientDrive(){
        $client =new Client();        
        $client ->setApplicationName("My First Application");
        $client-> setScopes([Drive::DRIVE]);
        $client->setAccessType('offline');
        $client->setAuthConfig('PhpWithSheet-edb3d6c3ec7c.json');
        
        return $client;
    }
    public function readDrive(){
        $client=$this->getClientDrive();
        $service = new Drive($client);
        $parameters['q'] = "'1dooZ6KnPG8DZOuAWnPuUzVVMx0wL8UV8' in parents";        
        $files = $service->files->listFiles($parameters);
        $data="";
        foreach( $files as $k => $file ){
            $data.= $file['name']."- ".$file['id']." ---- ".$file['mimeType']."<br>";
        }
        return $data;
    }
    public function sheetOperation(){
        $data=$this->readSheet();
        return response()->json($data);
    }
}
