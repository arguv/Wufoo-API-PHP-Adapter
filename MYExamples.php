<?php

require_once('includes/WufooApiWrapper.php');

    $apiKey = 'xxxx-xxxx-xxxx-xxxx'; //Enter here your Wufoo API
    $subdomain = 'example'; //Enter here your subdomain(group name)
    $identifier = 'xxxxxxxxxxxxx'; //Enter here your form id (Hash)

    $wrapper = new WufooApiWrapper($apiKey, $subdomain);

    $wufooSubmitFields = [
        new WufooSubmitField('Field3', $fname),
        new WufooSubmitField('Field4', $lname),
        new WufooSubmitField('Field7', $branch),
        new WufooSubmitField('Field150', $addressOne),
        new WufooSubmitField('Field151', $addressTwo),
        new WufooSubmitField('Field152', $city),
        new WufooSubmitField('Field153', $state),
        new WufooSubmitField('Field154', $zip),
        new WufooSubmitField('Field155', $country),
    ];
	
	/***************** from here manage you *************/
	
	$wrapper->entryPost($identifier, $wufooSubmitFields);
	
	//or
	
	$wrapper->getForms($identifier);
	
	//or
	
	$wrapper->getFields($identifier);
	
	//or
	
	$wrapper->getEntries($identifier);
	
	//or
	
	$wrapper->getEntryCount($identifier);
	
	//and so on, see README.md file

?>