<?php
interface logger{
    public function log($message);
}
class FileLogger implements logger{
    private $handle;
    private $logFile;
    public function __construct($fileName,$mode='a')
    {
        $this->logFile = $fileName;
        $this->handle = fopen($fileName, $mode)
        or die('Could not open the log file');
    } 
    public function log($message)
    {
        $message = date('F j, Y, g:i a'). ': '. $message. '\n';
        fwrite($this->handle, $message);
    }
    public function __destruct()
    {
        if($this->handle){
            fclose($this->handle);
        }
    }
}
class DataBaseLogger implements logger{
    public function log($message){
        echo printf("Log %s to the database\n", $message);
    }
}
?>