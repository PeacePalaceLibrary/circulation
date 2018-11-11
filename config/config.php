<?php
//worldcatsearch config

$config = [];

$config['name'] = "NLVRD";
$config['institution'] = "57439";
$config['defaultBranch'] = "262638";
$config['datacenter'] = "sd02";

$config['wskey'] = "tA2yibd4vmeqTt7TYEmYNOzLHUWEGGF07v3dlR8YnvQni9wI0DLpBbARZtOZXpDsCFELxwV202smYFx8";
$config['secret'] = "akpDcRzATqHZakmw3b76bvJcIDrNqGKY";

$config['ppid'] = "3ad48a9e-0ee7-4eec-b303-189a8f4af886";
$config['ppid_namespace'] = "urn:oclc:platform:".$config['institution'];

$config['auth_url'] = "http://www.worldcat.org/wskey/v2/hmac/v1";
$config['auth_headers'] = ["Accept: application/json"];
$config['auth_method'] = 'GET';

    
$config['url'] = "https://".$config['institution'].".share.worldcat.org/circ/pulllist/".$config['defaultBranch'];
$config['method'] = 'GET';
$config['headers'] = ["Accept: application/json"];


?>
