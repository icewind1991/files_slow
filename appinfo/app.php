<?php
/**
 * Copyright (c) 2015 Robin Appelman <icewind@owncloud.com>
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 * See the COPYING-README file.
 */

$manager = new \OCA\Files_Slow\Wrapper\Manager(100);

OCP\Util::connectHook('OC_Filesystem', 'preSetup', $manager, 'setupStorageWrapper');
