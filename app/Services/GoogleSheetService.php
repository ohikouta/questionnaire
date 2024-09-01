<?php

namespace App\Services;

use Google_Client;
use Google_Service_Sheets;
use Google_Service_Drive;

class GoogleSheetService
{
    protected $client;
    protected $service;
    protected $spreadsheetId;

    public function __construct()
    {
        $this->client = new Google_Client();
        $this->client->setApplicationName('Laravel Google Sheets API');
        $this->client->setScopes([
            Google_Service_Sheets::SPREADSHEETS_READONLY,
            Google_Service_Drive::DRIVE_METADATA_READONLY,
        ]);
        $this->client->setAuthConfig(storage_path(config('services.google.credentials_path')));

        $this->service = new Google_Service_Sheets($this->client);
        $this->spreadsheetId = config('services.google.spreadsheet_id');
    }

    public function getSheetData($range)
    {
        $range = 'フォームの回答 1!A1:B2'; // 実際にデータがある範囲を指定
        $response = $this->service->spreadsheets_values->get($this->spreadsheetId, $range);
        return $response->getValues();
    }

    public function listDriveFiles()
    {
        $driveService = new Google_Service_Drive($this->client);
        $files = $driveService->files->listFiles([
            'q' => "mimeType='application/vnd.google-apps.spreadsheet'",
            'fields' => 'files(id, name)',
        ]);
        return $files->getFiles();
    }
}
