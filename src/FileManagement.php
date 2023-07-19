<?php

namespace PetApp;

class FileManagement
{
    private $resource;
    private $fileName;

    function __construct(string $fileName)
    {
        $this->fileName = $fileName;
    }

    function openFile($mode)
    {
        $this->resource = fopen($this->fileName, $mode);
    }

    function closeFile()
    {
        fclose($this->resource);
    }

    function readCSV()
    {
        return fgetcsv($this->resource);
    }

    function writeCSV($field)
    {
        return fputcsv($this->resource, $field);
    }
}