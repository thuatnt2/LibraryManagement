<?php 

App::uses('SessionComponent', 'Controller/Component');
class FileManager extends AppModel {

    var $name = 'FileManager';
    var $destFolder ;
    var $validate = array(
        'file' => array(
            'rule' => array(
                'validFile',
                array(
                    'required' => true,
                    'extensions' => array(
                        'jpg', 'jpeg', 'gif', 'png',
                        //'swf', 'flv', 'avi', 'wmv', 'mp3', 'wma',
                        //'tif', 'tiff', 'pdf'
                    )
                )
            )
        )
        
    );
    var $useTable = false;
    
    
    var $error = false;
    
    private function getDestFolder(){
        $this->destFolder = DS.'files'.DS.'image-uploaded'.DS;
        return $this->destFolder;
    }

    function readFolder($folderName = null) 
    {
        $folder = new Folder(APP . WEBROOT_DIR . DS . $folderName);
        //$files = $folder->read(true, array('.', '..', 'Thumbs.db'), true);
        $files = $folder->read();
        return $files;
    }

    function upload($data = null, $destFolder = null) 
    {
        if(empty($destFolder)){
            $destFolder = $this->getDestFolder();
        }
        $this->set($data);
        
        if(empty($this->data)) {
            $this->error = "Empty data.";
            return false;
        }

        // Validation
        if(!$this->validates()) 
        {
            $this->error = 'Chỉ được phép upload các file *.jpg, *.jpeg, *.gif, *.png';
            return false;
        }
        
        $filename = $data['FileManager']['file']['name'];
        // file exists
        /*
        if(file_exists(APP . WEBROOT_DIR . DS . $destFolder . $filename))
            $filename = date("YmdHis") . '_' . $filename;
        */
        
        $arr = explode('.', $filename);
        
        //$filename = time() . substr($filename, strrpos($filename, '.'));
        $filename = $arr[0].'_'.time() . '.' . end($arr);
        // Move the file to the uploads folder
        
        if(!move_uploaded_file($data['FileManager']['file']['tmp_name'], APP . WEBROOT_DIR . DS . $destFolder . $filename)) 
        {
            $this->error = "Lỗi khi upload file " . $filename;
            return false;
        }

        return $filename;
    }
    
    
    function    create_dir($data = null)
    {
        if(empty($data))    return false;
        
        if(file_exists(APP . WEBROOT_DIR . DS . $data['FileManager']['path'] . $data['FileManager']['dir_name']))
        {
            return false;
        }
        
        $this->folder = new Folder;
        if ($this->folder->create(APP . WEBROOT_DIR . DS . $data['FileManager']['path'] . $data['FileManager']['dir_name']))
        {
            return true;
        }
        else
        {
            return false;
        }
            
    }



    function validFile($check, $settings) {
        $_default = array(
            'required' => false,
            'extensions' => array(
                'jpg',
                'jpeg',
                'gif',
                'png'
            )
        );

        $_settings = array_merge(
            $_default,
                is_array($settings) ? $settings : array()
        );

        // Remove first level of Array
        $_check = array_shift($check);

        if($_settings['required'] == false && $_check['size'] == 0) {
            return true;
        }

        // No file uploaded.
        if($_settings['required'] && $_check['size'] == 0) {
            return false;
        }

        // Check for Basic PHP file errors.
        if($_check['error'] !== 0) {
            return false;
        }

        // Use PHPs own file validation method.
        if(is_uploaded_file($_check['tmp_name']) == false) {
            return false;
        }

        // Valid extension
        return Validation::extension(
            $_check,
            $_settings['extensions']
        );
    }
}
?>