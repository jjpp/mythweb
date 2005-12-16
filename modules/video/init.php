<?php
/**
 * Initialization routines for the MythWeb TV module
 *
 * @url         $URL$
 * @date        $Date$
 * @version     $Revision$
 * @author      $Author$
 * @license     GPL
 *
 * @package     MythWeb
 *
/**/

// First, we should check to see that MythVideo is configured.
    $has_video = $db->query_col('SELECT COUNT(*) FROM videometadata');

// If video is enabled, add it to the list.
    if ($has_video)
        $Modules['video'] = array('path'        => 'video',
                                  'name'        => t('Video'),
                                  'description' => t('')
                                 );

