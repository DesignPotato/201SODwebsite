<?php
class StudentWork extends Page {
	private static $can_be_root = false;

	private static $db = array (
		'Designer' => 'Varchar',
		'Discipline' => "Enum('First Year,Media,Industrial,Culture and Context,Masters of Design','Media')",
	    'Paper' => 'Varchar',
	    'Lecturer' => 'Varchar',
	    'Date' => 'Date',
	    'Description' => 'Text'       
	  );
	
	//PHOTO AND FILE FIELDS
	private static $has_one = array (
        'Photo' => 'Image',
        //'Brochure' => 'File'
    );
	
	public function getCMSFields() {
	    $fields = parent::getCMSFields();
	    $fields->addFieldToTab('Root.Main', TextField::create('Designer','Designer of Work'),'Content');
	    $fields->addFieldToTab('Root.Main', TextField::create('Paper','Which paper'),'Content');
	    $fields->addFieldToTab('Root.Main', TextField::create('Lecturer','Lecturer of course'),'Content');
	    $fields->addFieldToTab('Root.Main', DateField::create('Date','Date of article')->setConfig('showcalendar', true),'Content'); //MAKES CALENDER POP UP
	    $fields->addFieldToTab('Root.Main', TextareaField::create('Description'),'Content');
	    
	    
	    //ENUM FOR DISCIPLINE
	    $fields->addFieldToTab('Root.Content.Main', new DropdownField('Discipline','Which Discipline:',singleton('StudentWork')->dbObject('Discipline')->enumValues()),'Content');

	    
	    //IMAGE UPLOADER
	    $fields->addFieldToTab('Root.Attachments', UploadField::create('Photo'));

	    /*
	    //ENFORCED ONLY PDF UPLOADER
        $fields->addFieldToTab('Root.Attachments', $brochure = UploadField::create('Brochure','Travel brochure, optional (PDF only)'));
	    $brochure->setFolderName('work-data')->getValidator()->setAllowedExtensions(array('pdf'));
		*/

	    return $fields;
	}

}

class StudentWork_Controller extends Page_Controller {

}
?>